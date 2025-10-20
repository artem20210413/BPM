{{-- resources/views/admin/units/_form.blade.php --}}
@csrf

<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $unit->slug ?? '') }}"
                   class="form-control @error('slug') is-invalid @enderror" required>
            @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Приоритет</label>
            <input type="number" name="priority" value="{{ old('priority', $unit->priority ?? 0) }}"
                   class="form-control @error('priority') is-invalid @enderror" required>
            @error('priority') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
</div>

<ul class="nav nav-tabs" role="tablist">
    @foreach($locales as $i => $locale)
        <li class="nav-item" role="presentation">
            <button class="nav-link @if($i===0) active @endif" data-bs-toggle="tab"
                    data-bs-target="#tab-{{ $locale }}" type="button" role="tab">
                {{ strtoupper($locale) }}
            </button>
        </li>
    @endforeach
</ul>

<div class="tab-content border-start border-end border-bottom p-3">
    @foreach($locales as $i => $locale)
        @php
            $tr = old($locale, optional($unit->translate($locale))->toArray() ?? []);
        @endphp
        <div class="tab-pane fade @if($i===0) show active @endif" id="tab-{{ $locale }}" role="tabpanel">
            <div class="mb-3">
                <label class="form-label">Название ({{ strtoupper($locale) }})</label>
                <input type="text" name="{{ $locale }}[title]" value="{{ $tr['title'] ?? '' }}" class="form-control">
            </div>
{{--            <div class="mb-3">--}}
{{--                <label class="form-label">Описание ({{ strtoupper($locale) }})</label>--}}
{{--                <textarea name="{{ $locale }}[content]" rows="3" class="form-control">{{ $tr['content'] ?? '' }}</textarea>--}}
{{--            </div>--}}
        </div>
    @endforeach
</div>
