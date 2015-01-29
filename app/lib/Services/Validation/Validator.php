<?php namespace Services\Validation;

Use Validator as V;

abstract class Validator {

	protected $input;
	public function validate($input){

		$validator = V::make(array('email'=>$input), static::$rules);

		if ($validator->passes()) {
			return true;
}
	dd('Validator Failed');
	}
}