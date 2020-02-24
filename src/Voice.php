<?php

/**
 * Этот файл является частью репозитория
 * Panda/Yandex/SpeechKitSDK.
 *
 * Для получения полной информации об авторских правах
 * и лицензии, пожалуйста, просмотрите файл LICENSE,
 * который был распространен с этим исходным кодом.
 */

namespace Panda\Yandex\SpeechKitSDK;

use Panda\Yandex\SpeechKitSDK\Exception\ClientException;

/**
 * Class Voice Параметры голоса
 * @package Panda\Yandex\SpeechKitSDK
 */
class Voice
{
    /**
     * @return string Случайное значение параметра
     */
    public static function random(): string
    {
        try {
            $reflectionClass = new \ReflectionClass(static::class);
            $constants = $reflectionClass->getConstants();
        } catch (\ReflectionException $e) {
            throw new ClientException(sprintf('%s. Ошибка: %s',
                Message::RANDOM_ERROR,
                $e->getMessage()));
        }

        return $constants[array_rand($constants)];
    }
}
