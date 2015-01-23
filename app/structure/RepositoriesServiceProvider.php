<?php namespace Repositories;
 
 	/**
	 * A new custom service provider "RepositoriesServiceProvider" has been created 
	 * Here the "app->bind" is binding the "UserRepositoryInterface" to use  "MysqlUserRepository"
	 * This could be possible to do the same job in a few different ways but this way's been chosen 
	 * As the "register" method is automatically called on the Service Provider
	 */

use Illuminate\Support\ServiceProvider;
 
class RepositoriesServiceProvider extends ServiceProvider {
 
  public function register()
  {
      $this->app->bind(
      'Repositories\User\UserRepositoryInterface',
      'Repositories\User\MysqlUserRepository'
    );
  }
 
}


	/**
	 * After this the "RepositoriesServiceProvider" is added to the "providers" array on the "app.php"
	 */