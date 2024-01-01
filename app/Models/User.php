<?php

namespace App\Models;

use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property integer $id
 * @property integer $user_type_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Branch[] $branches
 * @property UserType $userType
 */
class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPanelShield;
    /**
     * @var array
     */
    protected $fillable = [
        'user_type_id',
        'name',
        'email',
        'phone',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function __construct(array $attributes = [])
    {
        if (empty($attributes['user_type_id'])) {
            $attributes['user_type_id'] = 1;
        }
        parent::__construct($attributes);
    }


    public function canAccessPanel(Panel $panel): bool{
        if ($panel->getId() === "admin" && Auth::user()->userType->type_name == "admin") {
            return true;
        } else if ($panel->getId() === "customer") {
            return true;
        }
        return false;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function branches()
    {
        return $this->hasMany('App\Models\Branch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userType()
    {
        return $this->belongsTo('App\Models\UserType');
    }
}
