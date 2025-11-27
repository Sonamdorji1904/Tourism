<?php
// includes/config/Config.php

class ConfigMail
{
    public static function mailHost()
    {
        return getenv('MailHost');
    }

    public static function mailPort()
    {
        return (int) getenv('MailPort');
    }

    public static function mailUsername()
    {
        return getenv('MailUsername');
    }

    public static function mailPassword()
    {
        return getenv('MailPassword');
    }

    public static function mailFromAddress()
    {
        return getenv('MailFromAddress');
    }

    public static function mailFromName()
    {
        return getenv('MailFromName');
    }

    public static function adminEmails()
    {
        return getenv('AdminMailAddress');
    }
}
