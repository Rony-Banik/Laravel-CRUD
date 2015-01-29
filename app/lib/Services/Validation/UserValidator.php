<?php namespace Services\Validation;

class UserValidator extends Validator{

	public static $rules = array('email'=>'required');

}