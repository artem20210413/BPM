{{-- resources/views/admin/attributes/_form.blade.php --}}
@csrf

<div class="row">
{{--    <div class="col-md-3">--}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Код (латиница/снейккейс)</label>--}}
{{--            <input type="text" name="code" value="{{ old('code', $attribute->code ?? '') }}"--}}
{{--                   class="form-control @error('code') is-invalid @enderror" required>--}}
{{--            @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Тип</label>
            <select name="type" class="form-select @error('type') is-invalid @enderror" required>
                @foreach($types as $t)
                    <option value="{{ $t }}" @selected(old('type', $attribute->type ?? '') === $t)>{{ $t }}</option>
                @endforeach
            </select>
            @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Ед. изм.</label>
            <select name="unit_id" class="form-select @error('unit_id') is-invalid @enderror">
                <option value="">— не указано —</option>
                @foreach($units as $u)
                    <option value="{{ $u->id }}" @selected((int)old('unit_id', $attribute->unit_id ?? 0) === $u->id)>
                        {{ $u->slug }} — {{ $u->translate('ru')->title ?? $u->slug }}
                    </option>
                @endforeach
            </select>
            @error('unit_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Приоритет</label>
            <input type="number" name="priority" value="{{ old('priority', $attribute->priority ?? 0) }}"
                   class="form-control @error('priority') is-invalid @enderror" required>
            @error('priority') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
</div>

{{-- Табы локалей --}}
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
        @php $tr = old($locale, optional($attribute->translate($locale))->toArray() ?? []); @endphp
        <div class="tab-pane fade @if($i===0) show active @endif" id="tab-{{ $locale }}" role="tabpanel">
            <div class="mb-3">
                <label class="form-label">Название ({{ strtoupper($locale) }})</label>
                <input type="text" name="{{ $locale }}[title]" value="{{ $tr['title'] ?? '' }}"
                       class="form-control @error($locale.'.title') is-invalid @enderror"
                       @if($locale==='ru') required @endif>
                @error($locale.'.title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Описание ({{ strtoupper($locale) }})</label>
                <textarea name="{{ $locale }}[content]" rows="3"
                          class="form-control @error($locale.'.content') is-invalid @enderror">{{ $tr['content'] ?? '' }}</textarea>
                @error($locale.'.content') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    @endforeach
</div>
