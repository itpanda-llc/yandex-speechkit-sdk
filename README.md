# Yandex-SpeechKit-PHP-SDK

Библиотека для интеграции с сервисом речевых технологий ["Yandex SpeechKit"](https://cloud.yandex.ru/services/speechkit)

[![GitHub license](https://img.shields.io/badge/license-MIT-blue)](LICENSE)

## Ссылки

* [Разработка](https://github.com/itpanda-llc)
* [О проекте](https://cloud.yandex.ru/services/speechkit)
* [Документация](https://cloud.yandex.ru/docs/speechkit)

## Возможности

* Формирование параметров синтезируемого аудио (добавление текста, выбор языка, голоса, эмоциональной окраски, темпа, формата, частоты дискретизации для произносимой речи)
* Формирование параметров распознавания короткого аудио (добавление, выбор формата, частоты дискретизации, языковой модели и фильтра ненормативной лексики аудио, указание языка произношения)
* Аутентификация в HTTP API-сервисе ["Яндекс.Облако"](https://cloud.yandex.ru) с помощью пользовательского аккаунта
* Синтезирование и распознавание речи с помощью сервиса ["Yandex SpeechKit"](https://cloud.yandex.ru/services/speechkit)

## Требования

* PHP >= 7.2
* JSON
* cURL

## Установка

```shell script
php composer.phar require "itpanda-llc/yandex-speechkit-php-sdk"
```

или

```shell script
git clone https://github.com/itpanda-llc/yandex-speechkit-php-sdk
```

## Примеры использования

Подключение

```php
require_once 'vendor/autoload.php';
```

или

```php
require_once 'yandex-speechkit-php-sdk/autoload.php';
```

Импорт

```php
use Panda\Yandex\SpeechKitSDK\Cloud;
use Panda\Yandex\SpeechKitSDK\Speech;
use Panda\Yandex\SpeechKitSDK\Text;
use Panda\Yandex\SpeechKitSDK\Lang;
use Panda\Yandex\SpeechKitSDK\Ru;
use Panda\Yandex\SpeechKitSDK\En;
use Panda\Yandex\SpeechKitSDK\Tr;
use Panda\Yandex\SpeechKitSDK\Emotion;
use Panda\Yandex\SpeechKitSDK\Speed;
use Panda\Yandex\SpeechKitSDK\Format;
use Panda\Yandex\SpeechKitSDK\Rate;
use Panda\Yandex\SpeechKitSDK\Topic;
use Panda\Yandex\SpeechKitSDK\Filter;
use Panda\Yandex\SpeechKitSDK\Exception\ClientException;
```

### Создание сервиса и аутентификация

```php
try {
    // Обязательные параметры: "OAUTH-токен", "ID каталога"
    $cloud = new Cloud('AgAAAAASeN6XAATuwduwAAZFyUEYsEW1gGjh56d', 'b1g89h70fg5jgg8e1j4d');
} catch (ClientException $e) {
    echo $e->getMessage();
}
```

### Синтез речи

Создание задачи

```php
try {
    // Обязательный параметр: "Текст"
    $speech = new Speech('Привет, разработчик!');
} catch (ClientException $e) {
    echo $e->getMessage();
}
```

Добавление параметров речи (необязательно)

```php
// Уточнение параметра текста признаком "SSML-формата" (необязательно)
$speech->setSSML()

    /*
     * Добавление обязательного параметра: "Голос"
     * Возможно использование других констант классов "Ru", "En", "Tr" в качестве параметра
     */
    ->setVoice(Ru::OKSANA);

try {
    /*
     * Добавление обязательного параметра, произвольно: "Голос"
     * Возможно использование статического метода "random" в классах: "Ru", "En", "Tr"
     */
    $speech->setVoice(Ru::random());
} catch (ClientException | ArgumentCountError $e) {
    echo $e->getMessage();

    /*
     * Добавление обязательного параметра, произвольно: "Голос"
     * Возможно использование статического метода "random" в классах: "Ru", "En", "Tr"
     */
    $speech->setVoice(Ru::OKSANA);
}

/*
 * Добавление обязательного параметра: "Язык"
 * Возможно использование других констант класса "Lang" в качестве параметра
 */
$speech->setLang(Lang::RU)

    /*
     * Добавление обязательного параметра: "Эмоциональная окраска"
     * Возможно использование других констант класса "Emotion" в качестве параметра
     */
    ->setEmotion(Emotion::GOOD)

    /*
     * Добавление обязательного параметра: "Темп"
     * Возможно использование других констант класса "Speed" в качестве параметра
     */
    ->setSpeed(Speed::NORMAL)

    /*
     * Добавление обязательного параметра: "Формат аудио"
     * Возможно использование других констант класса "Format" в качестве параметра
     */
    ->setFormat(Format::LPCM)

    /*
     * Добавление обязательного параметра: "Частота дискретизации"
     * Возможно использование других констант класса "Rate" в качестве параметра
     */
    ->setRate(Rate::HIGH);
```

Выполнение задачи

```php
try {
    // Обязательный параметр: "Задача"
    file_put_contents('greeting_developer.ogg', $cloud->request($speech));
} catch (ClientException $e) {
    echo $e->getMessage();
}
```

### Распознавание речи

Создание задачи

```php
// Обязательный параметр: "Указатель на файл"
$text = new Text('greeting_developer.ogg');
```

Добавление параметров речи (необязательно)

```php
/*
 * Добавление обязательного параметра: "Язык"
 * Возможно использование других констант класса "Lang" в качестве параметра
 */
$text->setLang(Lang::RU)

    /*
     * Добавление обязательного параметра: "Языковая модель"
     * Возможно использование других констант класса "Topic" в качестве параметра
     */
    ->setTopic(Topic::GENERAL)

    /*
     * Добавление обязательного параметра: "Фильтр ненормативной лексики"
     * Возможно использование других констант класса "Filter" в качестве параметра
     */
    ->setFilter(Filter::FALSE)

    /*
     * Добавление обязательного параметра: "Формат аудио"
     * Возможно использование других констант класса "Format" в качестве параметра
     */
    ->setFormat(Format::LPCM)

    /*
     * Добавление обязательного параметра: "Частота дискретизации"
     * Возможно использование других констант класса "Rate" в качестве параметра
     */
    ->setRate(Rate::HIGH);
```

Выполнение задачи

```php
try {
    // Обязательный параметр: "Задача"
    print_r($cloud->request($text));
} catch (ClientException $e) {
    echo $e->getMessage();
}
```
