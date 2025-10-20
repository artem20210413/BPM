<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Units\StoreUnitRequest;
use App\Http\Requests\Admin\Units\UpdateUnitRequest;
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

    public function store(StoreUnitRequest $request)
    {
//        $data = $this->validateData($request);
        $data = $request->validated();

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

    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $data = $request->validated();

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
