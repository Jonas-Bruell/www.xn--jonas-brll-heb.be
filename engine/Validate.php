<?php

namespace engine;

class Validate
{

    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }


    public function validateInput($inputtype, $sanitized_input)
    {
        switch ($inputtype) {
            case "username":
                return preg_match("/^[a-zA-Z1-9_-]*$/", $sanitized_input); // only letters, numbers, hyphen, underscore allowed

        }

    }
}

?>