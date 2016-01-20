<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' 		=> 'required',
			'email'		=> 'required|email|max:255|unique:users', //parametros tabla y campo
			'password' => 'required|min:6',
			'type'		=> 'required|in:user,admin'
		];
	}

}
