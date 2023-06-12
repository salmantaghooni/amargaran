<?php

namespace AmusementPark\Booking\Rules;

use Illuminate\Contracts\Validation\Rule;
use AmusementPark\Booking\Http\Requests\RequestFailed;
use App\Booking;
use App\EscapeRoom;
use App\EscapeRoomTime;
use Carbon\Carbon;

class BookingValid implements Rule
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
       $time_ids =  EscapeRoomTime::where('id',$value)->whereDate('created_at',Carbon::today())->first();
        $participant_max = EscapeRoom::select('participant_max')->where('id',$time_ids->escape_room_id)->first();
       $bookingCount = Booking::where('escape_room_id',$time_ids->escape_room_id)->where('escape_room_time_id',$value)->whereDate('created_at',Carbon::today())->count();
       return($bookingCount<=$participant_max->participant_max);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
            return 'اتاق پر شده است';
    }


}
