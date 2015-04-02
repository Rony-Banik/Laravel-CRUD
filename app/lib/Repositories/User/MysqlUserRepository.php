<?php namespace Repositories\User;

	/**
	 * Implementing "UserRepositoryInterface" for dealing with User Data from Mysql Database 
	 * By implementing an Interface it's must to adhere the methods of the interface
	 *
	 *On the commencing use statement User model is declared to be used  
	 * @return Response
	 */

Use User;

use \Services\Validation\UserValidator as vn;


class MysqlUserRepository implements UserRepositoryInterface {

	public function all(){
		
		return User::all();
	}

	public function find($id){

		return User::findOrFail($id);
	}
 
	public function create($input){

		//$validation = new v;
		$v = new vn;


		if ($v->validate($input)) {
			dd('thanks');
		}
dd("validation not found");
		$user = new User;
		$user->email = $input;
		$user->password = "pass";
		$user->save();
		return "got it? :)";
	}
 
}

	/**
	 * After this the "structure" repository is added to the "classmap" on the "composer.json file"
	 */