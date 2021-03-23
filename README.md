# Yandex-SpeechKit-PHP-SDK

Библиотека для интеграции с сервисом речевых технологий ["Yandex SpeechKit"](https://cloud.yandex.ru/services/speechkit)

[![Packagist Downloads](https://img.shields.io/packagist/dt/itpanda-llc/yandex-speechkit-sdk)](https://packagist.org/packages/itpanda-llc/yandex-speechkit-sdk/stats)
![Packagist License](https://img.shields.io/packagist/l/itpanda-llc/yandex-speechkit-sdk)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/itpanda-llc/yandex-speechkit-sdk)

## Ссылки

* [Разработка](https://github.com/itpanda-llc)
* [О проекте (Yandex Cloud)](https://cloud.yandex.ru)
* [О проекте (Yandex Identity and Access Management)](https://cloud.yandex.ru/services/iam/)
* [О проекте (Yandex SpeechKit)](https://cloud.yandex.ru/services/speechkit)
* [Документация (Yandex Cloud)](https://cloud.yandex.ru/docs)
* [Документация (Yandex Identity and Access Management)](https://cloud.yandex.ru/docs/iam/)
* [Документация (Yandex SpeechKit)](https://cloud.yandex.ru/docs/speechkit/)

## Возможности

* Аутентификация в API ["Yandex Cloud"](https://cloud.yandex.ru)
* Распознавание коротких аудио
* Синтез речи

## Требования

* PHP >= 7.2
* cURL
* JSON
* mbstring

## Установка

```shell script
composer require itpanda-llc/yandex-speechkit-sdk
```

## Подключение

```php
require_once 'vendor/autoload.php';
```

## Использование

### Создание сервиса / Аутентификация

* С аккаунтом на Яндексе (OAuth-токен)

```php
use Panda\Yandex\SpeechKitSdk;

try {
    /*
     * OAuth-токен
     * ID каталога
     */
    $cloud = new SpeechKitSdk\Cloud('oAuthToken', 'folderId');
} catch (SpeechKitSdk\Exception\ClientException | TypeError $e) {
    echo $e->getMessage();
}
```

* С использованием сервисного аккаунта / федеративного пользователя (IAM-токен)

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // IAM-токен
    $cloud = new SpeechKitSdk\Cloud('iamToken');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

* С использованием сервисного аккаунта (API-ключ)

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // API-ключ
    $cloud = SpeechKitSdk\Cloud::createApi('apiKey');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Распознавание коротких аудио

* Создание запроса

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // Аудио-файл
    $recognize = new SpeechKitSdk\Recognize('greeting_developer.ogg');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

* Установка параметров

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // Аудио-файл
    $recognize->setFile('greeting_developer.raw');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}

// Язык
$recognize->setLang(SpeechKitSdk\Lang::RU_RU)

    // Языковая модель распознавания
    ->setTopic(SpeechKitSdk\Topic\Ru::GENERAL_RC)

    // Фильтр ненормативной лексики
    ->setProfanityFilter(SpeechKitSdk\ProfanityFilter::FALSE)

    // Формат аудио
    ->setFormat(SpeechKitSdk\Format::LPCM)

    // Частота дискретизации аудио
    ->setSampleRate(SpeechKitSdk\SampleRate::KHZ_48);
```

* Выполнение запроса

```php
use Panda\Yandex\SpeechKitSdk;

try {
    print_r($cloud->request($recognize));
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Синтез речи

* Создание запроса

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // Текст, который нужно озвучить
    $synthesize= new SpeechKitSdk\Synthesize('Привет, разработчик!');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

* Установка параметров

```php
use Panda\Yandex\SpeechKitSdk;

try {
    // Текст, который нужно озвучить
    $synthesize->setText('Привет, разработчик!');
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}

// Текст, который нужно озвучить, в формате SSML
$synthesize->setSsml('<speak>Привет<break time="1s"/>разработчик!</speak>')

    // Язык
    ->setLang(SpeechKitSdk\Lang::RU_RU)

    // Желаемый голос
    ->setVoice(SpeechKitSdk\Voice\Ru::OKSANA);

try {
    // Желаемый голос
    $synthesize->setVoice(SpeechKitSdk\Voice\Ru::random());
} catch (SpeechKitSdk\Exception\ClientException | ArgumentCountError $e) {
    echo $e->getMessage();
}

// Эмоциональная окраска голоса
$synthesize->setEmotion(SpeechKitSdk\Emotion::GOOD)

    // Скорость (темп)
    ->setSpeed(SpeechKitSdk\Speed::AVERAGE)

    // Формат аудио
    ->setFormat(SpeechKitSdk\Format::LPCM)

    // Частота дискретизации аудио
    ->setSampleRate(SpeechKitSdk\SampleRate::KHZ_48);
```

* Выполнение запроса

```php
use Panda\Yandex\SpeechKitSdk;

try {
    file_put_contents('greeting_developer.ogg', $cloud->request($synthesize));
} catch (SpeechKitSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```
