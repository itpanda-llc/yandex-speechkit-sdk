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
 * Class Detect Формирование задачи для распознавания речи (Translate-To-Detect, STT)
 * @package Panda\Yandex\SpeechKitSDK
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
     * Translate constructor.
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
     * @return string URL web-запроса
     */
    public function getURL(): string
    {
        return sprintf("%s?%s",
            URL::RECOGNIZE,
            http_build_query($this->task));
    }
}
