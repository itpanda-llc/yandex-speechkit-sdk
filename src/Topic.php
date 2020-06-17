<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Class Topic
 * @package Panda\Yandex\SpeechKitSDK
 * Параметры языковой модели
 */
class Topic
{
    /**
     * Короткие запросы
     */
    public const GENERAL = 'general';

    /**
     * Адреса
     */
    public const MAPS = 'maps';

    /**
     * Даты
     */
    public const DATES = 'dates';

    /**
     * Имена
     */
    public const NAMES = 'names';

    /**
     * Числа
     */
    public const NUMBERS = 'numbers';
}
