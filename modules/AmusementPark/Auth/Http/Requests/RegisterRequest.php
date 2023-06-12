<?php
namespace AmusementPark\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use AmusementPark\Auth\Http\Requests\RequestFailed;

class RegisterRequest extends FormRequest
{
    use RequestFailed;
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:8',
            'birth_date' => 'required|date_format:Y-m-d|before:today',
        ];
    }


    public function failedValidation(Validator $validator)
    {
        $this->failed($validator, \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
    }


}
