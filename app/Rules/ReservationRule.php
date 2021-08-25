<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Reservation;

class ReservationRule implements Rule
{
    private $_user_id,
            $_store_id,
            $_reserve_date,
            $_people;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($user_id, $store_id, $reserve_date, $people)
    {
        $this->_user_id = $user_id;
        $this->_store_id = $store_id;
        $this->_reserve_date = $reserve_date;
        $this->_people = $people;
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
        $num = Reservation::where('store_id',$this->_store_id)
                ->where('reserve_date',$this->_reserve_date)->get()->count();
                        // -> WhereHasReservation($this->_reserve_date);

        if($num <= 3)
        {
            return true;
        }else{
            return false;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '予約が埋まっております。他のお時間を指定してください。';
    }
}
