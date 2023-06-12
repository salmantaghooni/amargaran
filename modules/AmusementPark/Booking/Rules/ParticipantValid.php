<?php

namespace AmusementPark\Booking\Rules;

use Illuminate\Contracts\Validation\Rule;
use AmusementPark\Booking\Http\Requests\RequestFailed;
use App\Booking;
use App\EscapeRoomTime;
use Carbon\Carbon;

class ParticipantValid implements Rule
{
    use RequestFailed;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($message = null)
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Booking::where('user_id', auth()->user()->id)->where('escape_room_time_id',$value)->whereDate('created_at',Carbon::today())->count() < 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
            return 'شما نمیتوانید همزمان در دو اتاق حضور داشته باشید یا همزمان یک اتاق را دو بار رزرو فرمایید';
    }


}
