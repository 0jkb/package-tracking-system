<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $package_id
 * @property integer $shipping_type_state_id
 * @property string $changed_at
 * @property string $created_at
 * @property string $updated_at
 * @property Package $package
 * @property ShippingTypeState $shippingTypeState
 */
class PackageStatusHistory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['package_id', 'shipping_type_state_id', 'changed_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shippingTypeState()
    {
        return $this->belongsTo('App\Models\ShippingTypeState');
    }
}
