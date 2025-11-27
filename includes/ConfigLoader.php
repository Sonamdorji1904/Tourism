<?php
// includes/ConfigLoader.php

class ConfigLoader
{
    private static $configs = [];

    /**
     * Load configuration from a file
     */
    public static function load($configName)
    {
        if (isset(self::$configs[$configName])) {
            return self::$configs[$configName];
        }

        $configPath = __DIR__ . '/../config/' . $configName . '.php';

        if (!file_exists($configPath)) {
            throw new Exception("Configuration file not found: " . $configPath);
        }

        self::$configs[$configName] = require $configPath;
        return self::$configs[$configName];
    }

    /**
     * Get mail configuration
     */
    public static function getMailConfig()
    {
        return self::load('mail');
    }

    /**
     * Get specific mailer configuration
     */
    public static function getMailerConfig($mailer = null)
    {
        $config = self::getMailConfig();
        $mailer = $mailer ?: $config['default'];

        return $config['mailers'][$mailer] ?? null;
    }

    /**
     * Get environment variable with fallback
     */
    public static function env($key, $default = null)
    {
        $value = getenv($key);
        return $value !== false ? $value : $default;
    }
}
