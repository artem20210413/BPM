<?php
// app/Http/Controllers/Admin/TemplateController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Template\StoreTemplateRequest;
use App\Http\Requests\Admin\Template\UpdateTemplateRequest;
use App\Models\Template;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TemplateController extends Controller
{
    private array $locales = ['en','ro','ru'];

    public function __construct()
    {
        $this->locales = config('app.locales');

    }
    public function index()
    {
        $templates = Template::with('attribute')->orderByDesc('id')->paginate(20);

        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        $attributes = Attribute::orderBy('priority')->get();
        $template   = new Template();

        return view('admin.templates.create', [
            'template'   => $template,
            'attributes' => $attributes,
            'locales'    => $this->locales,
        ]);
    }

    public function store(StoreTemplateRequest $request)
    {
        $data = $request->validated();

        $template = new Template();
        $template->attribute_id = $data['attribute_id'];

        foreach ($this->locales as $locale) {
            if (!empty($data[$locale])) {
                $template->translateOrNew($locale)->title   = $data[$locale]['title'] ?? '';
                $template->translateOrNew($locale)->content = $data[$locale]['content'] ?? null;
            }
        }

        $template->save();

        return redirect()->route('admin.templates.index')->with('success', 'Шаблон создан');
    }

    public function edit(Template $template)
    {
        $attributes = Attribute::orderBy('priority')->get();

        return view('admin.templates.edit', [
            'template'   => $template,
            'attributes' => $attributes,
            'locales'    => $this->locales,
        ]);
    }

    public function update(UpdateTemplateRequest $request, Template $template)
    {
        $data = $request->validated();

        $template->attribute_id = $data['attribute_id'];

        foreach ($this->locales as $locale) {
            if (!empty($data[$locale])) {
                $template->translateOrNew($locale)->title   = $data[$locale]['title'] ?? '';
                $template->translateOrNew($locale)->content = $data[$locale]['content'] ?? null;
            }
        }

        $template->save();

        return redirect()->route('admin.templates.index')->with('success', 'Изменения сохранены');
    }

    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('admin.templates.index')->with('success', 'Шаблон удалён');
    }
}
