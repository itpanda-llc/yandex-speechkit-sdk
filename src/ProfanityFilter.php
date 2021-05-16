<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
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
