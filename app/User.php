<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Vinkla\Hashids\Facades\Hashids;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'name', 'email', 'password', 'secret_question', 'secret_answer', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'secret_answer',
    ];

    public function getRouteKey()
    {
        return Hashids::encode($this->getKey());
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function promotions() // Promociones a las que accedió el usuario
    {
        return $this->belongsToMany('App\Promotion', 'applications')->withPivot('status', 'other');
    }

    public function awaitingApplications() // Solicitudes sin procesar
    {
        return $this->applications()->where('applications.status', true)->get();
    } 

    public function awaitingPromotions() // Promociones sin procesar
    {
        return $this->promotions()->where('applications.status', true)->get();
    }

    public function hasPromotion(Promotion $promotion) // Si tiene cierta promoción sin procesar
    {
        return $this->awaitingPromotions()->contains($promotion);
    }

    public function applicationsMe()
    {
        return $this->applications()->where('applications.other', false)->get(); // Solicitudes para el propio usuario
    }

    public function representative()
    {
        return $this->hasOne(Representative::class);
    }
}
