<?php namespace Repositories\User;

	/**
	 * Creating Interface for dealing with User of the application 
	 * An interface is just a contract that defines which methods must be used for an implementation
	 *
	 * @return Response
	 */
 
interface UserRepositoryInterface {
   
  public function all();
 
  public function find($id);
 
  public function create($input);
 
}