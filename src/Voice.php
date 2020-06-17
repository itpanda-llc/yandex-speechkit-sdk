<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

use Panda\Yandex\SpeechKitSDK\Exception\ClientException;

/**
 * Class Voice
 * @package Panda\Yandex\SpeechKitSDK
 * Параметры голоса
 */
class Voice
{
    /**
     * @return string Случайное значение параметра
     */
    public static function random(): string
    {
        try {
            $constants = (new \ReflectionClass(static::class))
                ->getConstants();
        } catch (\ReflectionException $e) {
            throw new ClientException($e->getMessage());
        }

        return $constants[array_rand($constants)];
    }
}
