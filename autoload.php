<?php

spl_autoload_register(

    function ($class)
    {
        $prefix = 'Panda\Yandex\SpeechKitSDK\\';

        if (strpos($class, $prefix) !== 0) return;

        $fileName = sprintf('%s.php',
            str_replace('\\',
                DIRECTORY_SEPARATOR,
                substr($class, strlen($prefix))));

        $filePath = sprintf('%s%ssrc%s%s',
            __DIR__,
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR,
            $fileName);

        if (!is_readable($filePath)) return;

        require $filePath;
    }

);
