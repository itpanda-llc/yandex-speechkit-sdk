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
 * Class URL URLы web-запросов
 * @package Panda\Yandex\SpeechKitSDK
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
