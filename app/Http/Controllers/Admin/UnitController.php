<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

class UnitController extends Controller
{
    /** Локали проекта */
    private array $locales = ['ru', 'en'];
    private string $primaryLocale = 'en';

    public function __construct()
    {
        $this->locales = config('app.locales');
        $this->primaryLocale = App::getLocale();

    }

    public function index()
    {
        $units = Unit::query()
            ->orderBy('priority')
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('admin.units.index', compact('units'));
    }

    public function create()
    {
        $locales = $this->locales;
        $unit = new Unit();

        return view('admin.units.create', compact('unit', 'locales'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        $unit = Unit::firstOrCreate(
            ['slug' => $data['slug']],
            ['priority' => $data['priority']]
        );

        $this->fillTranslations($unit, $data);
        $unit->save();

        return redirect()->route('admin.units.index')->with('success', 'Единица создана');
    }

    public function edit(Unit $unit)
    {
        $locales = $this->locales;
        return view('admin.units.edit', compact('unit', 'locales'));
    }

    public function update(Request $request, Unit $unit)
    {
        $data = $this->validateData($request, $unit->id);

        $unit->slug     = $data['slug'];
        $unit->priority = $data['priority'];

        $this->fillTranslations($unit, $data);
        $unit->save();

        return redirect()->route('admin.units.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('admin.units.index')->with('success', 'Единица удалена');
    }

    private function validateData(Request $request, ?int $id = null): array
    {
        $rules = [
            'slug'     => ['required','string','max:191', Rule::unique('units','slug')->ignore($id)],
            'priority' => ['required','integer','between:0,100000'],
        ];

        // базовая локаль: title обязателен
        $rules["{$this->primaryLocale}.title"]   = ['required','string','max:255'];
        $rules["{$this->primaryLocale}.content"] = ['nullable','string'];

        // остальные локали — опционально
        foreach ($this->locales as $locale) {
            if ($locale === $this->primaryLocale) continue;
            $rules["$locale.title"]   = ['nullable','string','max:255'];
            $rules["$locale.content"] = ['nullable','string'];
        }

        return $request->validate($rules);
    }


    /** Заполнение переводов только если есть данные */
    private function fillTranslations(Unit $unit, array $data): void
    {
        foreach ($this->locales as $locale) {
            $payload = $data[$locale] ?? null;
            if (!$payload) {
                // ничего не передали для этой локали — пропускаем (не создаём пустой перевод)
                continue;
            }

            $title   = $payload['title']   ?? null;
            $content = $payload['content'] ?? null;

            // если оба поля пусты — не трогаем перевод, чтобы не писать NULL в NOT NULL
            if ($title === null && $content === null) {
                continue;
            }

            $unit->translateOrNew($locale)->title   = $title ?? '';     // на всякий случай пустая строка
            $unit->translateOrNew($locale)->content = $content ?? null;  // content может быть NULL
        }
    }

}
