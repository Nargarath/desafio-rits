<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsPdf implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $pdf = explode( ',', $value );

        $isPdf = strpos($pdf[0],'pdf')===false?false:true;

        return $isPdf;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute should be a pdf file';
    }
}
