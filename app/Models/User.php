<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'region',
        'adresse',
        'numero_telephone',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Assigner un rôle à l'utilisateur
     *
     * @return void
     */
    public function assignRole(Role $role)
    {
        $this->role = $role->value;
        $this->save();
    }

    /**
     * Vérifier si l'utilisateur a un rôle spécifique
     */
    public function hasRole(Role $role): bool
    {
        return $this->role === $role->value;
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }

    public function associations()
    {
        return $this->hasMany(Association::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
