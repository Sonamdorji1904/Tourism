<?php
// includes/helpers/Validator.php

class ValidateMail
{
    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validateContactData($data)
    {
        $errors = [];

        if (empty($data['firstName'])) {
            $errors[] = "First name is required";
        }

        if (empty($data['email']) || !self::validateEmail($data['email'])) {
            $errors[] = "Valid email address is required";
        }

        if (empty($data['message'])) {
            $errors[] = "Message is required";
        }

        return $errors;
    }

    public static function sanitizeInput($input)
    {
        if (is_array($input)) {
            return array_map([self::class, 'sanitizeInput'], $input);
        }
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
}
