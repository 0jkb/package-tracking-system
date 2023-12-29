<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $number
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 * @property Package[] $packages
 */
class Container extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['number', 'code', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }
}
