<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Dateafter implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $ladate;

    public function __construct($ladate)
    {
        //
        $this->Date=$ladate;
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
        $decision = (time() - strtotime($this->Date) >= 18000) ? false : true ;
        return $decision;        

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La Date de soumission est deja depassée.';
    }
}
