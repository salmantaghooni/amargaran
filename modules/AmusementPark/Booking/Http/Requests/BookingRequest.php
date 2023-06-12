<?php
namespace AmusementPark\Booking\Http\Requests;

use AmusementPark\Booking\Rules\BookingValid;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use AmusementPark\Booking\Http\Requests\RequestFailed;
use AmusementPark\Booking\Rules\ParticipantValid;

class BookingRequest extends FormRequest
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
            'escape_room_time_id' => ['required',new ParticipantValid,new BookingValid]
        ];
    }


    public function failedValidation(Validator $validator)
    {
        $this->failed($validator, \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
    }


}
