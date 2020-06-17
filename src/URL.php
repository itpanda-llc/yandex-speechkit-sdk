<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Class URL
 * @package Panda\Yandex\SpeechKitSDK
 * URL-адреса web-запросов
 */
class URL
{
    /**
     * Получение IAM-токена
     */
    public const IAM_TOKEN = 'https://iam.api.cloud.yandex.net/iam/v1/tokens';

    /**
     * Синтез речи
     */
    public const SYNTHESIZE = 'https://tts.api.cloud.yandex.net/speech/v1/tts:synthesize';

    /**
     * Распознавание речи
     */
    public const RECOGNIZE = 'https://stt.api.cloud.yandex.net/speech/v1/stt:recognize';
}
