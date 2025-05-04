## ATTENTION THIS SDK IS STILL UNDER DEVELOPMENT. PLEASE SEE THE  [COVERAGE SECTION.](#Coverage)

# Sinch PHP SDK

Here you'll find documentation related to the Sinch php SDK, including how to install it, initialize it, and start developing PHP code using Sinch services.

To use Sinch services, you'll need a Sinch account and access keys. You can sign up for an account and create access keys at  [dashboard.sinch.com](https://dashboard.sinch.com).

For more information on the Sinch APIs on which this SDK is based, refer to the official [developer documentation portal](https://developers.sinch.com/).

[![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg)](https://github.com/sinch/sinch-sdk-dotnet/blob/main/LICENSE)


## ATTENTION THIS SDK IS STILL UNDER DEVELOPMENT. PLEASE SEE THE  [COVERAGE SECTION.](#Coverage)


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the package via [Composer](https://getcomposer.org/), run the following command:

```bash
composer require sinch/sinch-sdk-php
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// init
$config = Sinch\Configuration::getDefaultConfiguration(("PROJECT_ID", "CLIENT_ID", "CLIENT_SECRET", "REGION"));


$sms = new Sinch\Sms\Batches(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    client: new GuzzleHttp\Client(),
    config: $config
);

try {
    $result = $sms->Batches->Send(data)();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ', $e->getMessage(), PHP_EOL;
}

```
