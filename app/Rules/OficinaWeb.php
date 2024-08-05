<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OficinaWeb implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this->checkString($attribute, $value, $fail);
    }

    private function checkString(string $attribute, mixed $value, Closure $fail): void
    {
    
        if ($value === 'CLAYDSON') {
                $fail("O $attribute is invalid.");
                return;
        }
    }

}
