<?php
// app/Http/Controllers/Admin/AttributeController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attribute\StoreAttributeRequest;
use App\Http\Requests\Admin\Attribute\UpdateAttributeRequest;
use App\Models\Attribute;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AttributeController extends Controller
{
    private array $locales = ['en','ro','ru'];

    public function __construct()
    {
        $this->locales = config('app.locales');

    }

    // какие типы поддерживаем
    private array $types = ['string','int','float','bool','datetime', 'list'];

    public function index()
    {
        $attributes = Attribute::query()
            ->with('unit')
            ->orderBy('priority')
            ->orderByDesc('id')
            ->paginate(20);

        return view('admin.attributes.index', [
            'attributes' => $attributes,
        ]);
    }

    public function create()
    {
        return view('admin.attributes.create', [
            'attribute' => new Attribute(),
            'units'     => Unit::orderBy('priority')->get(),
            'types'     => $this->types,
            'locales'   => $this->locales,
        ]);
    }

    public function store(StoreAttributeRequest $request)
    {
        $data = $request->validated();

        $attr = new Attribute();
        $attr->unit_id  = $data['unit_id'] ?? null;
//        $attr->code     = $data['code'];
        $attr->priority = $data['priority'];
        $attr->type     = $data['type'];

        // переводы
        foreach ($this->locales as $locale) {
            if (!empty($data[$locale])) {
                $attr->translateOrNew($locale)->title   = $data[$locale]['title'] ?? '';
                $attr->translateOrNew($locale)->content = $data[$locale]['content'] ?? null;
            }
        }

        $attr->save();

        return redirect()->route('admin.attributes.index')->with('success', 'Атрибут создан');
    }

    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit', [
            'attribute' => $attribute,
            'units'     => Unit::orderBy('priority')->get(),
            'types'     => $this->types,
            'locales'   => $this->locales,
        ]);
    }

    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        $data = $request->validated();

        $attribute->unit_id  = $data['unit_id'] ?? null;
//        $attribute->code     = $data['code'];
        $attribute->priority = $data['priority'];
        $attribute->type     = $data['type'];

        foreach ($this->locales as $locale) {
            if (!empty($data[$locale])) {
                $attribute->translateOrNew($locale)->title   = $data[$locale]['title'] ?? '';
                $attribute->translateOrNew($locale)->content = $data[$locale]['content'] ?? null;
            }
        }

        $attribute->save();

        return redirect()->route('admin.attributes.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect()->route('admin.attributes.index')->with('success', 'Атрибут удалён');
    }
}
