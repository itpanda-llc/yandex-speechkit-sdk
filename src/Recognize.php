<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Recognize
 * @package Panda\Yandex\SpeechKitSdk
 * Распознавание коротких аудио (Speech-To-Text / STT)
 */
class Recognize extends Task
{
    /**
     * Наименования параметра "Языковая модель"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    private const TOPIC = 'topic';

    /**
     * Наименования параметра "Фильтр ненормативной лексики"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     */
    private const PROFANITY_FILTER = 'profanityFilter';

    /**
     * @var string[] Заголовки web-запроса
     */
    public $headers = ['Transfer-Encoding: chunked'];

    /**
     * @var string|null Аудио-файл
     */
    private $file;

    /**
     * Recognize constructor.
     * @param string|null $file Аудио-файл
     */
    public function __construct(string $file = null)
    {
        if (!is_null($file)) $this->setFile($file);
    }

    /**
     * @return string URL-адрес
     */
    public function getUrl(): string
    {
        return sprintf("%s%s",
            Url::RECOGNIZE,
            sprintf(($this->task === []) ? "%s" : "?%s",
                http_build_query($this->task)));
    }

    /**
     * @return string|null Параметры задачи/запроса
     */
    public function getParam(): ?string
    {
        return $this->file;
    }

    /**
     * @param string $file Аудио-файл
     * @return $this
     */
    public function setFile(string $file): self
    {
        if (filesize($file) > Limit::RECOGNIZE_FILE_SIZE)
            throw new Exception\ClientException(Message::SIZE_ERROR);

        $this->file = $file;

        return $this;
    }

    /**
     * @param string $topic Языковая модель распознавания
     * @return $this
     */
    public function setTopic(string $topic): self
    {
        $this->task[self::TOPIC] = $topic;

        return $this;
    }

    /**
     * @param bool $profanityFilter Фильтр ненормативной лексики
     * @return $this
     */
    public function setProfanityFilter(bool $profanityFilter): self
    {
        $this->task[self::PROFANITY_FILTER] = $profanityFilter;

        return $this;
    }
}
