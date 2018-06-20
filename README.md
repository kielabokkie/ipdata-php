# Ipdata client library for PHP

Get IP address information the using the [ipdata.co](https://ipdata.co) API. If you are using Laravel, check out [kielabokkie/laravel-ipdata](https://github.com/kielabokkie/laravel-ipdata).

## Prerequisites

Ipdata has a free plan that allows you to make 1,500 requests per day and paid plans if you need more than that. All plans need an API key and you'll have to register on their [website](https://ipdata.co/pricing.html) to get one.

## Installation

You can install the package via composer:

    composer require kielabokkie/ipdata

## Usage

### Lookup of the calling IP address

Please note that when you instantiate the Ipdata class you have to pass your API key as a parameter.

```
$ipdata = new \Kielabokkie\Ipdata('yourapikey');
$res = $ipdata->lookup();
```

### Lookup a specific IP address

```
$ipdata = new \Kielabokkie\Ipdata('yourapikey');
$res = $ipdata->lookup('8.8.8.8');
```
