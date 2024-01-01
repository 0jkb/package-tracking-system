<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageCollector extends Model
{

    protected $fillable = [
        'package_id',
        'name',
        'phone',
        'collected_at',
        'notes',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

}
