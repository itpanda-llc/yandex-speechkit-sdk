<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Limit
 * @package Panda\Yandex\SpeechKitSdk
 * Ограничения длины/размера и/или количества параметров
 */
class Limit
{
    /**
     * Длина параметра "Идентификатор каталога"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const FOLDER_ID_LENGTH = 50;

    /**
     * Длина параметра "Размер передаваемого аудио"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    public const RECOGNIZE_FILE_SIZE = 1000000;

    /**
     * Длина параметра "Текст, который нужно озвучить"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const SYNTHESIZE_TEXT_LENGTH = 5000;
}
