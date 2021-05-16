<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Cloud
 * @package Panda\Yandex\SpeechKitSdk
 * Аутентификация / Выполнение задачи/запроса
 */
class Cloud extends Request
{
    /**
     * Наименование параметра "OAuth-токен"
     * @link https://cloud.yandex.ru/docs/iam/operations/iam-token/create
     */
    private const YANDEX_PASSPORT_OAUTH_TOKEN = 'yandexPassportOauthToken';

    /**
     * Наименование параметра "Идентификатор каталога"
     * @link https://cloud.yandex.ru/docs/speechkit/stt/request
     * @link https://cloud.yandex.ru/docs/speechkit/tts/request
     */
    private const FOLDER_ID = 'folderId';

    /**
     * Наименование параметра "Bearer" в заголовке "Authorization"
     * @link https://cloud.yandex.ru/docs/iam/concepts/authorization/iam-token
     */
    private const BEARER = 'Bearer';

    /**
     * Наименование параметра "Api-Key" в заголовке "Authorization"
     * @link https://cloud.yandex.ru/docs/iam/concepts/authorization/api-key
     */
    private const API_KEY = 'Api-Key';

    /**
     * @var array Заголовки web-запроса
     */
    public $headers = [];

    /**
     * @var array Параметры задачи/запроса
     */
    public $task = [];

    /**
     * Cloud constructor.
     * @param string|null $reason OAuth-токен / IAM-токен
     * @param string|null $folderId ID каталога
     */
    public function __construct(string $reason = null,
                                string $folderId = null)
    {
        if (!is_null($reason))
            if (!is_null($folderId)) {
                if (strlen($folderId) > Limit::FOLDER_ID_LENGTH)
                    throw new Exception\ClientException(Message::LENGTH_ERROR);

                $this->addAuthHeader(self::BEARER,
                    $this->getIamToken($reason))
                    ->task[self::FOLDER_ID] = $folderId;
            } else
                $this->addAuthHeader(self::BEARER, $reason);
    }

    /**
     * @param string $apiKey API-ключ
     * @return static
     */
    public static function createApi(string $apiKey): self
    {
        return (new self)->addAuthHeader(self::API_KEY, $apiKey);
    }

    /**
     * @param string $oAuthToken OAuth-токен
     * @return string IAM-токен
     */
    private function getIamToken(string $oAuthToken): string
    {
        $response = $this->send(Url::TOKENS,
            json_encode([self::YANDEX_PASSPORT_OAUTH_TOKEN => $oAuthToken]),
            ['Content-Type: application/json']);

        return (string) json_decode($response)->iamToken;
    }

    /**
     * @param string $authType Тип аутентификации
     * @param string $reason IAM-токен / API-ключ
     * @return $this
     */
    private function addAuthHeader(string $authType,
                                   string $reason): self
    {
        $this->headers[] = sprintf("Authorization: %s %s",
            $authType,
            $reason);

        return $this;
    }

    /**
     * @param Task $task Параметры задачи/запроса
     * @return string Результат web-запроса
     */
    public function request(Task $task): string
    {
        $task->addParam($this->task);

        return $this->send($task->getUrl(),
            $task->getParam(),
            array_merge($this->headers, $task->headers));
    }
}
