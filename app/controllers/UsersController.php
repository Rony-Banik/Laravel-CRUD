<?php

	/**
	 * Using UserRepositoryInterface Instead of User Model Directly for Dependancy Inversion Principle.
	 * And also to be able to swap Database Driver anytime Just by Implementing the Interface.
	 * 
	 *
	 * @return Response
	 */

use Repositories\User\UserRepositoryInterface as User;

class UsersController extends \BaseController {

	
	/**
	 * Defining the constructor to be able to typehint User Model which is actually the
	 * UserRepositoryInterface declared above the class declaration.
	 * By this method an instance of the "UserRepositoryInterface" has been  injected into the Controller
	 * @return Response
	 */

	public function __construct(User $user)
	{
	  $this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */

	public function getIndex()
	{
		return $this->user->all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{	
		$input = "Karan";
		return $this->user->create($input);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}