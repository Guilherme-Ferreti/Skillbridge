<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Settings extends Model
{
    protected $table = 'settings';

    /**
     * @var list<string>
     */
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'value' => 'array',
    ];
}
