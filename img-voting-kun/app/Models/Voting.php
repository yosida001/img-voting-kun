<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Voting
 *
 * @property int $id
 * @property string $name
 * @property int $image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Voting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Voting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Voting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Voting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voting whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Voting extends Model
{
    use HasFactory;

    public function image() {
        return $this->belongsTo(Image::class);
    }
}
