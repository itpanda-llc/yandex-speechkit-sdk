<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\Yandex\SpeechKitSDK;

use Panda\Yandex\SpeechKitSDK\Exception\ClientException;

/**
 * Class Request
 * @package Panda\Yandex\SpeechKitSDK
 * Web-запрос
 */
class Request
{
    /**
     * @param string $url URL-адрес
     * @param string $data Параметры
     * @param array|null $headers Заголовки
     * @return string Результат
     */
    protected function send(string $url,
                            string $data,
                            array $headers = null): string
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, true);

        $file = null;

        if (is_file($data)) {
            $file = fopen($data, 'rb');

            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch, CURLOPT_INFILE, $file);
            curl_setopt($ch, CURLOPT_INFILESIZE, filesize($data));
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        if (!is_null($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch);

        if (!is_null($file)) fclose($file);

        if ($response === false) {
            throw new ClientException(curl_error($ch));
        }

        curl_close($ch);

        return $response;
    }
}
