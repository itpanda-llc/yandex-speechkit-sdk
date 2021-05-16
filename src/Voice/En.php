<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk\Voice;

/**
 * Class En
 * @package Panda\Yandex\SpeechKitSdk\Voice
 * Желаемый голос (Основной язык: en-US)
 */
class En extends Param
{
    /**
     * Alyss
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const ALYSS = 'alyss';

    /**
     * Nick
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const NICK = 'nick';
}
