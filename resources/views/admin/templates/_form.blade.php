{{-- resources/views/admin/templates/_form.blade.php --}}
@csrf
<div class="mb-3">
    <label class="form-label">Атрибут</label>
    <select name="attribute_id" class="form-select @error('attribute_id') is-invalid @enderror" required>
        @foreach($attributes as $attr)
            <option value="{{ $attr->id }}" @selected(old('attribute_id', $template->attribute_id ?? '') == $attr->id)>
                {{ $attr->translate('ru')->title ?? $attr->code }}
            </option>
        @endforeach
    </select>
    @error('attribute_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<ul class="nav nav-tabs" role="tablist">
    @foreach($locales as $i => $locale)
        <li class="nav-item" role="presentation">
            <button class="nav-link @if($i===0) active @endif"
                    data-bs-toggle="tab" data-bs-target="#tab-{{ $locale }}" type="button" role="tab">
                {{ strtoupper($locale) }}
            </button>
        </li>
    @endforeach
</ul>

<div class="tab-content border-start border-end border-bottom p-3">
    @foreach($locales as $i => $locale)
        @php $tr = old($locale, optional($template->translate($locale))->toArray() ?? []); @endphp
        <div class="tab-pane fade @if($i===0) show active @endif" id="tab-{{ $locale }}" role="tabpanel">
            <div class="mb-3">
                <label class="form-label">Название ({{ strtoupper($locale) }})</label>
                <input type="text" name="{{ $locale }}[title]" value="{{ $tr['title'] ?? '' }}" class="form-control" @if($locale==='en') required @endif>
            </div>
            <div class="mb-3">
                <label class="form-label">Описание ({{ strtoupper($locale) }})</label>
                <textarea name="{{ $locale }}[content]" rows="3" class="form-control">{{ $tr['content'] ?? '' }}</textarea>
            </div>
        </div>
    @endforeach
</div>
