<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\Role;

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
        'numero_telephone'
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
     * @param Role $role
     * @return void
     */
    public function assignRole(Role $role)
    {
        $this->role = $role->value;  // Définit le rôle en utilisant l'énumération
        $this->save();
    }

    /**
     * Vérifier si l'utilisateur a un rôle spécifique
     *
     * @param Role $role
     * @return bool
     */
    public function hasRole(Role $role): bool
    {
        return $this->role === $role->value;
    }
}
