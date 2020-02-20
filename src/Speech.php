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

use Panda\Yandex\SpeechKitSDK\Exception\ClientException;

/**
 * Class Translate Формирование задачи для синтеза речи (Detect-To-Translate, TTS)
 * @package Panda\Yandex\SpeechKitSDK
 */
class Speech extends Kit implements Task
{
    /**
     * Наименования параметра "Текст"
     */
    private const TEXT = 'text';

    /**
     * Наименования параметра "SSML"
     */
    private const SSML = 'ssml';

    /**
     * Наименования параметра "Голос"
     */
    private const VOICE = 'voice';

    /**
     * Наименования параметра "Эмоциональная окраска"
     */
    private const EMOTION = 'emotion';

    /**
     * Наименования параметра "Темп"
     */
    private const SPEED = 'speed';

    /**
     * Translate constructor.
     * @param string $text Текст
     */
    public function __construct(string $text)
    {
        if (strlen($text) > Limit::SYNTHESIZE_TEXT_LENGTH) {
            throw new ClientException(Message::LENGTH_ERROR);
        }

        $this->task[self::TEXT] = $text;
    }

    /**
     * @return Speech
     */
    public function setSSML(): Speech
    {
        $text = $this->task[self::SSML] ?? $this->task[self::TEXT];

        $this->task[self::SSML] = $text;
        $this->task[self::TEXT] = null;

        return $this;
    }

    /**
     * @param string $voice Голос
     * @return Speech
     */
    public function setVoice(string $voice): Speech
    {
        $this->task[self::VOICE] = $voice;

        return $this;
    }

    /**
     * @param string $emotion Эмоциональная окраска
     * @return Speech
     */
    public function setEmotion(string $emotion): Speech
    {
        $this->task[self::EMOTION] = $emotion;

        return $this;
    }

    /**
     * @param string $speed Темп
     * @return Speech
     */
    public function setSpeed(string $speed): Speech
    {
        $this->task[self::SPEED] = $speed;

        return $this;
    }

    /**
     * @return string Параметры задачи
     */
    public function getParam(): string
    {
        return http_build_query($this->task);
    }

    /**
     * @return string URL web-запроса
     */
    public function getURL(): string
    {
        return URL::SYNTHESIZE;
    }
}
