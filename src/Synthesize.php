<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Synthesize
 * @package Panda\Yandex\SpeechKitSdk
 * Синтез речи (Text-To-Speech / TTS)
 */
class Synthesize extends Task
{
    /**
     * Наименования параметра "Текст, который нужно озвучить"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const TEXT = 'text';

    /**
     * Наименования параметра "Текст, который нужно озвучить, в формате SSML"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const SSML = 'ssml';

    /**
     * Наименования параметра "Желаемый голос"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const VOICE = 'voice';

    /**
     * Наименования параметра "Эмоциональная окраска голоса"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const EMOTION = 'emotion';

    /**
     * Наименования параметра "Скорость (темп)"
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const SPEED = 'speed';

    /**
     * Synthesize constructor.
     * @param string|null $text Текст, который нужно озвучить
     */
    public function __construct(string $text = null)
    {
        if (!is_null($text)) $this->setText($text);
    }

    /**
     * @return string URL-адрес
     */
    public function getUrl(): string
    {
        return Url::SYNTHESIZE;
    }

    /**
     * @return string|null Параметры задачи/запроса
     */
    public function getParam(): ?string
    {
        return ($this->task !== [])
            ? http_build_query($this->task)
            : null;
    }

    /**
     * @param string $text Текст, который нужно озвучить
     * @return $this
     */
    public function setText(string $text): self
    {
        if (mb_strlen($text) > Limit::SYNTHESIZE_TEXT_LENGTH)
            throw new Exception\ClientException(Message::LENGTH_ERROR);

        $this->task[self::SSML] = null;
        $this->task[self::TEXT] = $text;

        return $this;
    }

    /**
     * @param string $ssml Текст, который нужно озвучить, в формате SSML
     * @return $this
     */
    public function setSsml(string $ssml): self
    {
        $this->task[self::TEXT] = null;
        $this->task[self::SSML] = $ssml;

        return $this;
    }

    /**
     * @param string $voice Желаемый голос
     * @return $this
     */
    public function setVoice(string $voice): self
    {
        $this->task[self::VOICE] = $voice;

        return $this;
    }

    /**
     * @param string $emotion Эмоциональная окраска голоса
     * @return $this
     */
    public function setEmotion(string $emotion): self
    {
        $this->task[self::EMOTION] = $emotion;

        return $this;
    }

    /**
     * @param string $speed Скорость (темп)
     * @return $this
     */
    public function setSpeed(string $speed): self
    {
        $this->task[self::SPEED] = $speed;

        return $this;
    }
}
