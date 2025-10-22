<?php
// app/Http/Controllers/Admin/AttributeController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attribute\StoreAttributeRequest;
use App\Http\Requests\Admin\Attribute\UpdateAttributeRequest;
use App\Models\Attribute\Attribute;
use App\Models\Unit\Unit;

class AttributeController extends Controller
{

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
        $attribute = new Attribute();

        return view('admin.attributes.create', [
            'attribute' => $attribute,
            'units' => Unit::orderBy('priority')->get(),
            'types' => $attribute->getTypes(),
            'locales' => $attribute->getLocales(),
        ]);
    }

    public function store(StoreAttributeRequest $request)
    {
        $data = $request->validated();

        $attr = new Attribute();
        $attr->unit_id = $data['unit_id'] ?? null;
        $attr->priority = $data['priority'];
        $attr->type = $data['type'];

        // переводы
        foreach ($attr->getLocales() as $locale) {
            if (!empty($data[$locale])) {
                $attr->translateOrNew($locale)->title = $data[$locale]['title'] ?? '';
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
            'units' => Unit::orderBy('priority')->get(),
            'types' => $attribute->getTypes(),
            'locales' => $attribute->getLocales(),
        ]);
    }

    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        $data = $request->validated();

        $attribute->unit_id = $data['unit_id'] ?? null;
        $attribute->priority = $data['priority'];
        $attribute->type = $data['type'];

        foreach ($attribute->getLocales() as $locale) {
            if (!empty($data[$locale])) {
                $attribute->translateOrNew($locale)->title = $data[$locale]['title'] ?? '';
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
