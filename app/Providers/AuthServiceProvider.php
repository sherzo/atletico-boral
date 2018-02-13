<?php

namespace App\Providers;

use App\User;
use App\Promotion;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('promo', function(User $user, Promotion $promotion){
            return $user->hasPromotion($promotion);
        });

        Gate::define('inscription', function(User $user){
            $promotion = Promotion::where('page', 'INSCRIPCIÓN')->first();
            return $user->hasPromotion($promotion);
        });
    }
}
