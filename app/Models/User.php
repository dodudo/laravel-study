<?php

namespace App\Models;

use App\Scope\StatusScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\User
 *
 * @property int $id 自动编号
 * @property string $username
 * @property string $password
 * @property string $gender
 * @property string|null $email
 * @property string $price
 * @property string $details
 * @property int|null $uid
 * @property int $status 状态
 * @property mixed|null $list
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon $created_at 创建时间
 * @property \Illuminate\Support\Carbon $updated_at 修改时间
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Profile|null $profile
 * @method static Builder|User genderMale()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $book
 * @property-read int|null $book_count
 */
class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected static function booted()
    {
        parent::booted(); // TODO: Change the autogenerated stub
//        static::addGlobalScope(new StatusScope());

//        static::addGlobalScope('status',function (Builder $builder){
//            $builder->where('status',1);
//        });
    }

    public function scopeGenderMale($query){
        $query->where('gender','男');
    }
    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }
    public function book(){
        return $this->hasMany(Book::class,'user_id','id');
    }
    public function role(){
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }
}
