<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-php-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class SampleRate
 * @package Panda\Yandex\SpeechKitSdk
 * Частота дискретизации аудио
 */
class SampleRate
{
    /**
     * 48 кГц (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const KHZ_48 = '48000';

    /**
     * 16 кГц
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const KHZ_16 = '16000';

    /**
     * 8 кГц
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const KHZ_8 = '8000';
}
