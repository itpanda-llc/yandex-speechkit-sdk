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
 * Interface Task Задача
 * @package Panda\Yandex\SpeechKitSDK
 */
interface Task
{
    /**
     * @param array $param Параметры задачи
     */
    public function addParam(array $param): void;

    /**
     * @return string Параметры задачи
     */
    public function getParam(): string;

    /**
     * @return string URL web-запроса
     */
    public function getURL(): string;
}
