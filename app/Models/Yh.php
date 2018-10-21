<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Yh
 *
 * @property int $id
 * @property string $name
 * @property string $imgs
 * @property string $sex
 * @property int $age
 * @property string $tel
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yh whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Yh extends Model
{
    //
    protected $fillable = ['name', 'imgs', 'sex','age','tel','address'];

}
