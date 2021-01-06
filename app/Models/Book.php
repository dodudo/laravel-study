<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\book
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|book query()
 * @method static \Illuminate\Database\Eloquent\Builder|book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|book whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $user
 */
class Book extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
