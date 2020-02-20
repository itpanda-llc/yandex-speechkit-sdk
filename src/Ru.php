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
 * Class Voice Параметры голоса (Основной язык: ru-RU)
 * @package Panda\Yandex\SpeechKitSDK
 */
class Ru implements Voice
{
    /**
     * Пол: Ж
     */
    public const OKSANA = 'oksana';

    /**
     * Пол: Ж
     */
    public const JANE = 'jane';

    /**
     * Пол: Ж
     */
    public const OMAZH = 'omazh';

    /**
     * Пол: М
     */
    public const ZAHAR = 'zahar';

    /**
     * Пол: М
     */
    public const ERMIL = 'ermil';

    /**
     * Пол: Ж
     */
    public const ALENA = 'alena';

    /**
     * Пол: М
     */
    public const FILIPP = 'filipp';

    /**
     * @return string Случайное значение параметра
     */
    public static function random(): string
    {
        try {
            $reflectionClass = new \ReflectionClass(__CLASS__);
            $constants = $reflectionClass->getConstants();
        } catch (\ReflectionException $e) {
            throw new ClientException(sprintf("%s. Ошибка: %s",
                Message::RANDOM_ERROR,
                $e->getMessage()));
        }

        return $constants[array_rand($constants)];
    }
}
