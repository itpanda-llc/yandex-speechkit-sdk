<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Speed
 * @package Panda\Yandex\SpeechKitSdk
 * Скорость (темп)
 */
class Speed
{
    /**
     * Самый быстрый
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const FASTEST = '3.0';

    /**
     * Средняя скорость человеческой речи (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const AVERAGE = '1.0';

    /**
     * Самый медленный
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const SLOWEST = '0.1';
}
