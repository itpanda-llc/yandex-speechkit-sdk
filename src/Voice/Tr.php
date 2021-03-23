<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-php-sdk
 */

namespace Panda\Yandex\SpeechKitSdk\Voice;

/**
 * Class Tr
 * @package Panda\Yandex\SpeechKitSdk\Voice
 * Желаемый голос (Основной язык: tr-Tr)
 */
class Tr extends Param
{
    /**
     * Silaerkan
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const SILAERKAN = 'silaerkan';

    /**
     * Erkanyavas
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/voices
     */
    public const ERKANYAVAS = 'erkanyavas';
}
