<?php

namespace App\Models\Translation;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class TranslationContract extends Model implements TranslatableContract
{
    use Translatable;

    protected array $locales = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->locales = config('app.locales');
    }

    public array $translatedAttributes = ['title', 'content'];

    public function fillTranslations(array $data): void
    {
        foreach ($this->locales as $locale) {
            $payload = $data[$locale] ?? null;
            if (!$payload) {
                // ничего не передали для этой локали — пропускаем (не создаём пустой перевод)
                continue;
            }

            $title = $payload['title'] ?? null;
            $content = $payload['content'] ?? null;

            // если оба поля пусты — не трогаем перевод, чтобы не писать NULL в NOT NULL
            if ($title === null && $content === null) {
                continue;
            }

            $this->translateOrNew($locale)->title = $title ?? '';     // на всякий случай пустая строка
            $this->translateOrNew($locale)->content = $content ?? null;  // content может быть NULL
        }
    }

    public function getLocales(): array
    {
        return $this->locales;
    }
}
