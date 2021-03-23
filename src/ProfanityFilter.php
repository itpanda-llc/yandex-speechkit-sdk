<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-php-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class ProfanityFilter
 * @package Panda\Yandex\SpeechKitSdk
 * Фильтр ненормативной лексики
 */
class ProfanityFilter
{
    /**
     * Ненормативная лексика не будет исключена (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    public const FALSE = false;

    /**
     * Ненормативная лексика будет исключена
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    public const TRUE = true;
}
