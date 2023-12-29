<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $city
 * @property string $created_at
 * @property string $updated_at
 * @property Package[] $packages
 */
class Customer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'phone', 'city', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }
}
