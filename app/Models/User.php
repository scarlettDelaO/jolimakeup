<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = "users";

    // Tus relaciones y otros métodos aquí...

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Si necesitas una clave de ruta personalizada, puedes mantener esta función
    public function getRouteKeyName()
    {
        return 'name'; 
    }

    // Otros métodos y propiedades necesarios para tu modelo...
}
