<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $container_id
 * @property integer $package_type_id
 * @property integer $customer_id
 * @property integer $shipping_type_id
 * @property integer $shipping_type_state_id
 * @property string $tracker_number
 * @property string $size
 * @property float $price
 * @property integer $ctn
 * @property float $weight
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property Container $container
 * @property Customer $customer
 * @property PackageType $packageType
 * @property ShippingType $shippingType
 * @property ShippingTypeState $shippingTypeState
 * @property PackageStatusHistory[] $packageStatusHistories
 */
class Package extends Model
{
    /**
     * @var array
     */

    protected static function booted()
    {
        static::created(function ($package) {
            $package->packageStatusHistories()->create([
                'shipping_type_state_id' => $package->shipping_type_state_id,
                'changed_at' => now(),
            ]);
        });

        static::updated(function ($package) {
            if ($package->wasChanged('shipping_type_state_id')) {
                $package->packageStatusHistories()->create([
                    'shipping_type_state_id' => $package->shipping_type_state_id,
                    'changed_at' => now(),
                ]);
            }
        });
    }

    protected $fillable = ['container_id', 'is_collected','package_type_id', 'customer_id', 'shipping_type_id', 'shipping_type_state_id', 'tracker_number', 'size', 'price', 'ctn', 'weight', 'notes', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function container()
    {
        return $this->belongsTo('App\Models\Container');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function packageType()
    {
        return $this->belongsTo('App\Models\PackageType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shippingType()
    {
        return $this->belongsTo('App\Models\ShippingType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shippingTypeState()
    {
        return $this->belongsTo('App\Models\ShippingTypeState');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packageStatusHistories()
    {
        return $this->hasMany('App\Models\PackageStatusHistory');
    }

    public function collectors()
    {
        return $this->hasMany(PackageCollector::class);
    }


    public function deliveredBy()
    {
        return $this->belongsTo(User::class, 'delivered_by');
    }
}
