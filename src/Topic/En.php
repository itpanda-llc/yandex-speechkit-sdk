<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk\Topic;

/**
 * Class En
 * @package Panda\Yandex\SpeechKitSdk\Topic
 * Языковая модель распознавания (Английский язык)
 */
class En
{
    /**
     * Фразы (3—5 слов) на различные темы (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/stt/models
     */
    public const GENERAL = 'general';

    /**
     * Адреса, названия организаций и географических объектов
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/stt/models
     */
    public const MAPS = 'maps';
}
