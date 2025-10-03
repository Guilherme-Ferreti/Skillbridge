<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use LaravelLang\Models\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property string $quote
 */
final class Testimonial extends Model implements HasMedia
{
    use HasTranslations, HasUlids, InteractsWithMedia;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'author_name',
    ];

    public function authorPicture(): string
    {
        return $this->getFirstMedia('author-picture')->getUrl();
    }
}
