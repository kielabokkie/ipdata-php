# Ipdata client library for PHP

[![Author](http://img.shields.io/badge/by-@kielabokkie-lightgrey.svg?style=flat-square)](https://twitter.com/kielabokkie)
[![Packagist Version](https://img.shields.io/packagist/v/kielabokkie/ipdata.svg?style=flat-square)](https://packagist.org/packages/kielabokkie/ipdata)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

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
$res = $ipdata->lookup('1.1.1.1');
```

The Ipdata API will return the following data:

```json
{
  "ip": "1.1.1.1",
  "is_eu": false,
  "city": "Research",
  "region": "Victoria",
  "region_code": "VIC",
  "country_name": "Australia",
  "country_code": "AU",
  "continent_name": "Oceania",
  "continent_code": "OC",
  "latitude": -37.7,
  "longitude": 145.1833,
  "asn": "AS13335",
  "organisation": "Cloudflare Inc",
  "postal": "3095",
  "calling_code": "61",
  "flag": "https://ipdata.co/flags/au.png",
  "emoji_flag": "🇦🇺",
  "emoji_unicode": "U+1F1E6 U+1F1FA",
  "languages": [
    {
      "name": "English",
      "native": "English"
    }
  ],
  "currency": {
    "name": "Australian Dollar",
    "code": "AUD",
    "symbol": "AU$",
    "native": "$",
    "plural": "Australian dollars"
  },
  "time_zone": {
    "name": "Australia/Melbourne",
    "abbr": "AEST",
    "offset": "+1000",
    "is_dst": false,
    "current_time": "2018-06-20T11:41:23.068040+10:00"
  },
  "threat": {
    "is_tor": false,
    "is_proxy": false,
    "is_anonymous": false,
    "is_known_attacker": false,
    "is_known_abuser": false,
    "is_threat": false,
    "is_bogon": false
  }
}
```

This library will run the response through a json_decode giving you an easy object to work with, for example:

```php
echo $res->country_name; // Australia
echo $res->flag; // https://ipdata.co/flags/au.png
```
