<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Kit
 * @package Panda\Yandex\SpeechKitSdk
 * Задача / Запрос
 */
abstract class Task
{
    /**
     * Наименования параметра "Язык"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    protected const LANG = 'lang';

    /**
     * Наименования параметра "Формат аудио"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    protected const FORMAT = 'format';

    /**
     * Наименования параметра "Частота дискретизации аудио"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    protected const SAMPLE_RATE_HERTZ = 'sampleRateHertz';

    /**
     * @var array Заголовки web-запроса
     */
    public $headers = [];

    /**
     * @var array Параметры задачи/запроса
     */
    protected $task = [];

    /**
     * @param array $param Параметры задачи/запроса
     */
    public function addParam(array $param): void
    {
        $this->task += $param;
    }

    /**
     * @return string URL-адрес
     */
    abstract public function getUrl(): string;

    /**
     * @return string|null Параметры задачи/запроса
     */
    abstract public function getParam(): ?string;

    /**
     * @param string $lang Язык
     * @return $this
     */
    public function setLang(string $lang): self
    {
        $this->task[self::LANG] = $lang;

        return $this;
    }

    /**
     * @param string $format Формат аудио
     * @return $this
     */
    public function setFormat(string $format): self
    {
        if ($format === Format::OGGOPUS)
            $this->task[self::SAMPLE_RATE_HERTZ] = null;

        $this->task[self::FORMAT] = $format;

        return $this;
    }

    /**
     * @param string $sampleRate Частота дискретизации аудио
     * @return $this
     */
    public function setSampleRate(string $sampleRate): self
    {
        $this->task[self::SAMPLE_RATE_HERTZ] = $sampleRate;

        return $this;
    }
}
