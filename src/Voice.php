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

/**
 * Interface Voice Параметры голоса
 * @package Panda\Yandex\SpeechKitSDK
 */
interface Voice
{
    /**
     * @return string Случайное значение параметра
     */
    public static function random(): string;
}
