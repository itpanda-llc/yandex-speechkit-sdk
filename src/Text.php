<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

/**
 * Class Text
 * @package Panda\Yandex\SpeechKitSDK
 * Формирование задачи для распознавания речи (Speech-To-Text, STT)
 */
class Text extends Kit implements Task
{
    /**
     * Наименования параметра "Языковая модель"
     */
    private const TOPIC = 'topic';

    /**
     * Наименования параметра "Фильтр ненормативной лексики"
     */
    private const FILTER = 'profanityFilter';

    /**
     * @var string Указатель на аудио-файл
     */
    private $file;

    /**
     * Text constructor.
     * @param string $file Указатель на аудио-файл
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * @param string $topic Языковая модель
     * @return Text
     */
    public function setTopic(string $topic): Text
    {
        $this->task[self::TOPIC] = $topic;

        return $this;
    }

    /**
     * @param string $filter Фильтр ненормативной лексики
     * @return Text
     */
    public function setFilter(string $filter): Text
    {
        $this->task[self::FILTER] = $filter;

        return $this;
    }

    /**
     * @return string Указатель на аудио-файл
     */
    public function getParam(): string
    {
        return $this->file;
    }

    /**
     * @return string URL-адрес web-запроса
     */
    public function getURL(): string
    {
        return sprintf("%s?%s",
            URL::RECOGNIZE,
            http_build_query($this->task));
    }
}
