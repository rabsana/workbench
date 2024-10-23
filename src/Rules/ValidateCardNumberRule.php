<?php

namespace Rabsana\Workbench\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

class ValidateCardNumberRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        $card_number = str_split($value);
        $sum = 0;
        foreach ($card_number as $key => $num) {
            $sum += (($key + 1) % 2 == 0) ? (int) $num * 1 : $this->numMul2($num);
        }

        if (! ($sum % 10 == 0)) {
            $fail('the provided card number is invalid');
        }
    }

    public function numMul2($num)
    {
        $result = (int) $num * 2;

        return $result > 9 ? $result - 9 : $result;
    }
}
