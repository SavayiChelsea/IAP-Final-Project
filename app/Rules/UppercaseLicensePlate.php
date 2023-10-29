<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\Rule;

class UppercaseLicensePlate implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Ensure license plate contains only uppercase letters
        return preg_match('/^[A-Z]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must contain only uppercase letters.';
    }
}

