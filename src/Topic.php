<?php

/**
 * Этот файл является частью репозитория
 * Panda/Yandex/SpeechKitSDK.
 *
 * Для получения полной информации об авторских правах
 * и лицензии, пожалуйста, просмотрите файл LICENSE,
 * который был распространен с этим исходным кодом.
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Class Topic Параметры языковой модели
 * @package Panda\Yandex\SpeechKitSDK
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
