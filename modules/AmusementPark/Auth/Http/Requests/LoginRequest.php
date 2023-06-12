<?php
namespace AmusementPark\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use AmusementPark\Auth\Http\Requests\RequestFailed;

class LoginRequest extends FormRequest
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
            'email' => 'required|email', 
            'password' => 'required|min:8',
        ];
    }


    public function failedValidation(Validator $validator)
    {
        $this->failed($validator, \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
    }


}
