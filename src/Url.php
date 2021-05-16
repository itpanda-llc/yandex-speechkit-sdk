<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Url
 * @package Panda\Yandex\SpeechKitSdk
 * URL-адреса
 */
class Url
{
    /**
     * Получение IAM-токена для аккаунта на Яндексе
     * @link https://cloud.yandex.ru/docs/iam/operations/iam-token/create
     */
    public const TOKENS = 'https://iam.api.cloud.yandex.net/iam/v1/tokens';

    /**
     * Распознавание коротких аудио
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    public const RECOGNIZE = 'https://stt.api.cloud.yandex.net/speech/v1/stt:recognize';

    /**
     * Синтез речи
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const SYNTHESIZE = 'https://tts.api.cloud.yandex.net/speech/v1/tts:synthesize';
}
