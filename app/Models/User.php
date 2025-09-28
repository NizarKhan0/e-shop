<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // app/Models/User.php
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Accessor untuk dapatkan single role
    // public function getRoleAttribute(): ?Role
    // {
    //     return $this->roles->first();
    // }

    // // Mutator untuk set single role
    // public function setRoleAttribute($role): void
    // {
    //     if ($role) {
    //         $roleId = is_numeric($role) ? $role : $role->id;
    //         $this->syncRoles([$roleId]);
    //     } else {
    //         $this->syncRoles([]);
    //     }
    // }

    // // Convenience method
    // public function getRoleIdAttribute(): ?int
    // {
    //     return $this->roles->first()?->id;
    // }

    // public function getRoleNameAttribute(): ?string
    // {
    //     return $this->roles->first()?->name;
    // }
}