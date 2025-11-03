<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'src',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
        ];
    }
    public function personals(): BelongsToMany
    {
        return $this->belongsToMany(Personal::class, 'personal_images', 'image_id', 'personal_id')
            ->withTimestamps();
    }
    public function getSrcAttribute($value)
    {
        if (!$value) {
            return null;
        }

        // Если файлы хранятся в storage/app/public/
        return Storage::url($value);
        // Альтернатива без фасада:
        // return asset('storage/' . $value);
    }
}
