<?php

/**
 * Файл из репозитория Yandex-SpeechKit-PHP-SDK
 * @link https://github.com/itpanda-llc/yandex-speechkit-php-sdk
 */

declare(strict_types=1);

namespace Panda\Yandex\SpeechKitSdk\Voice;

use Panda\Yandex\SpeechKitSdk\Exception;

/**
 * Class Param
 * @package Panda\Yandex\SpeechKitSdk\Voice
 * Желаемый голос (Произвольный выбор)
 */
class Param
{
    /**
     * @return string Желаемый голос
     */
    public static function random(): string
    {
        try {
            $constants = (new \ReflectionClass(static::class))
                ->getConstants();
        } catch (\ReflectionException $e) {
            throw new Exception\ClientException($e->getMessage());
        }

        return $constants[array_rand($constants)];
    }
}
