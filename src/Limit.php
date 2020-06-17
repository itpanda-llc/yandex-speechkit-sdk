<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Class Limit
 * @package Panda\Yandex\SpeechKitSDK
 * Ограничения длины и(или) количества значений параметров
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
