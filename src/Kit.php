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
 * Class Kit Комплект
 * @package Panda\Yandex\SpeechKitSDK
 */
abstract class Kit implements Task
{
    /**
     * Наименования параметра "Язык"
     */
    protected const LANG = 'lang';

    /**
     * Наименования параметра "Формат аудио"
     */
    protected const FORMAT = 'format';

    /**
     * Наименования параметра "Темп"
     */
    protected const RATE = 'sampleRateHertz';

    /**
     * @var array Параметры задачи
     */
    protected $task = [];

    /**
     * @param string $lang Язык
     * @return Kit
     */
    public function setLang(string $lang): Kit
    {
        $this->task[self::LANG] = $lang;

        return $this;
    }

    /**
     * @param string $format Формат аудио
     * @return Kit
     */
    public function setFormat(string $format): Kit
    {
        if ($format === Format::OGGOPUS) $this->task[self::RATE] = null;

        $this->task[self::FORMAT] = $format;
        $this->task[self::RATE] = Rate::HIGH;

        return $this;
    }

    /**
     * @param string $rate Частота дискретизации
     * @return Kit
     */
    public function setRate(string $rate): Kit
    {
        $format = $this->task[self::FORMAT] ?? null;

        if ($format === Format::OGGOPUS) $rate = null;
        if (is_null($format)) $rate = null;

        $this->task[self::RATE] = $rate;

        return $this;
    }

    /**
     * @param array $param Параметры задачи
     */
    public function addParam(array $param): void
    {
        $this->task = array_merge($this->task, $param);
    }

    /**
     * @return string Параметры задачи
     */
    abstract public function getParam(): string;

    /**
     * @return string URL web-запроса
     */
    abstract public function getURL(): string;
}
