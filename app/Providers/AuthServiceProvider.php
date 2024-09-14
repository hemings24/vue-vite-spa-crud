<?php

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
   /**
   * The model to policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
   protected $policies = [
      //
   ];

   /**
   * Register any authentication / authorization services.
   */
   public function boot(): void
   {
      try{
         foreach(Permission::pluck('name') as $permission){
            Gate::define($permission, function($user) use($permission){
               return $user->roles()->whereHas('permissions', function(Builder $q) use($permission){
                  $q->where('name', $permission);
               })->exists();
            });
         }
      }
      catch(QueryException $e){
      }
   }
}