# Ipdata client library for PHP

Get IP address information the using the [ipdata.co](https://ipdata.co) API. If you are using Laravel, check out [kielabokkie/laravel-ipdata](https://github.com/kielabokkie/laravel-ipdata).

## Installation

You can install the package via composer:

    composer require kielabokkie/ipdata

## Usage

### Lookup of the calling IP address

```
$ipdata = new \Kielabokkie\Ipdata;
$res = $ipdata->lookup();
```

### Lookup a specific IP address

```
$ipdata = new \Kielabokkie\Ipdata;
$res = $ipdata->lookup('8.8.8.8');
```
