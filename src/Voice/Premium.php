<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk\Voice;

/**
 * Class Premium
 * @package Panda\Yandex\SpeechKitSdk\Voice
 * Желаемый голос (Премиум-голоса)
 */
class Premium extends Param
{
    /**
     * Alena
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const ALENA = 'alena';

    /**
     * Filipp
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const FILIPP = 'filipp';
}
