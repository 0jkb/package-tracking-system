<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property Package[] $packages
 */
class PackageType extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }
}
