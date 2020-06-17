<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Interface Task
 * @package Panda\Yandex\SpeechKitSDK
 * Задача
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
     * @return string URL-адрес web-запроса
     */
    public function getURL(): string;
}
