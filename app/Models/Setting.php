<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
    ];

    /**
     * In-memory cache for all settings during current request
     */
    protected static ?array $memoryCache = null;

    public static function get($key, $default = null)
    {
        if (static::$memoryCache === null) {
            static::$memoryCache = \Illuminate\Support\Facades\Cache::remember('all_settings_map', 3600, function () {
                try {
                    return self::pluck('value', 'key')->all();
                } catch (\Throwable $e) {
                    return [];
                }
            });
        }

        return static::$memoryCache[$key] ?? $default;
    }

    public static function set($key, $value, $type = 'text', $group = 'general')
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type, 'group' => $group]
        );

        self::clearCache();

        return $setting;
    }

    public static function clearCache(): void
    {
        static::$memoryCache = null;
        try {
            \Illuminate\Support\Facades\Cache::forget('all_settings_map');
        } catch (\Throwable $e) {
            // Silently ignore if cache driver is unavailable during setup
        }
    }
}

