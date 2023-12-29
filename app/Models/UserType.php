<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type_name
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 */
class UserType extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['type_name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
