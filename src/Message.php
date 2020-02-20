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
 * Class Message Сообщения исключений
 * @package Panda\Yandex\SpeechKitSDK
 */
class Message
{
    /**
     * Ошибка длины значения параметра(ов)
     */
    public const LENGTH_ERROR = 'Превышена длина значения параметра(ов)';

    /**
     * Ошибка выбора случайного значения параметра
     */
    public const RANDOM_ERROR = 'Случайный параметр не выбран';

    /**
     * Ошибка выполнения web-запроса
     */
    public const REQUEST_ERROR = 'Web-запрос не выполнен';
}
