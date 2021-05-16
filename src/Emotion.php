<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Emotion
 * @package Panda\Yandex\SpeechKitSdk
 * Эмоциональная окраска голоса
 */
class Emotion
{
    /**
     * Доброжелательный
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const GOOD = 'good';

    /**
     * Злой
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const EVIL = 'evil';

    /**
     * Нейтральный (По умолчанию)
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    public const NEUTRAL = 'neutral';
}
