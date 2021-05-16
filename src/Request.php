<?php

/**
 * Файл из репозитория Yandex-SpeechKit-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk;

/**
 * Class Request
 * @package Panda\Yandex\SpeechKitSdk
 * Web-запрос
 */
class Request
{
    /**
     * @param string $url URL-адрес
     * @param string|null $data Параметры
     * @param array $headers Заголовки
     * @return string Результат
     */
    protected function send(string $url,
                            ?string $data,
                            array $headers): string
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        if ($headers !== [])
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if (!is_null($data))
            if (is_file(realpath($data))) {
                $file = fopen($data, 'rb');

                curl_setopt($ch, CURLOPT_INFILE, $file);
                curl_setopt($ch, CURLOPT_INFILESIZE, filesize($data));
            } else
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);

        if (isset($file)) fclose($file);

        if ($response === false)
            throw new Exception\ClientException(curl_error($ch));

        curl_close($ch);

        return $response;
    }
}
