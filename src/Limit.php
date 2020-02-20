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
 * Class Limit Ограничения длины и(или) количества значений параметров
 * @package Panda\Yandex\SpeechKitSDK
 */
class Limit
{
    /**
     * Длина параметра "ID каталога"
     */
    public const FOLDER_ID_LENGTH = 50;

    /**
     * Длина параметра "Текст для синтеза речи"
     */
    public const SYNTHESIZE_TEXT_LENGTH = 5000;
}
