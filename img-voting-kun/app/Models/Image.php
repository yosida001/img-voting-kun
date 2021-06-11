<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Image
 *
 * @property int $id
 * @property int $section_id
 * @property string $path
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Image extends Model
{
    use HasFactory;

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
