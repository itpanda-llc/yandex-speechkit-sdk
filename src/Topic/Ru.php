<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk\Topic;

/**
 * Class Ru
 * @package Panda\Yandex\SpeechKitSdk\Topic
 * Языковая модель распознавания (Русский язык)
 */
class Ru
{
    /**
     * Основная версия (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/stt/models
     */
    public const GENERAL = 'general';

    /**
     * Экспериментальная версия
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/stt/models
     */
    public const GENERAL_RC = 'general:rc';

    /**
     * Предыдущая версия
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/stt/models
     */
    public const GENERAL_DEPRECATED = 'general:deprecated';
}
