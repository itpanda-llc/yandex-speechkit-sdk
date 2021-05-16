<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Format
 * @package Panda\Yandex\SpeechKitSdk
 * Формат аудио
 */
class Format
{
    /**
     * LPCM
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const LPCM = 'lpcm';

    /**
     * OggOpus (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const OGGOPUS = 'oggopus';
}
