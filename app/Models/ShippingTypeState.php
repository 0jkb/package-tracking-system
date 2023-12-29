<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $shipping_type_id
 * @property string $status_name
 * @property string $color
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 * @property ShippingType $shippingType
 * @property Package[] $packages
 * @property PackageStatusHistory[] $packageStatusHistories
 */
class ShippingTypeState extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['shipping_type_id', 'status_name', 'color', 'icon', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shippingType()
    {
        return $this->belongsTo('App\Models\ShippingType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packageStatusHistories()
    {
        return $this->hasMany('App\Models\PackageStatusHistory');
    }

    public function mainShippingTypeState()
    {
        return $this->belongsTo(MainShippingTypeState::class);
    }
}
