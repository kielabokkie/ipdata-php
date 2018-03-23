# Ipdata client library for PHP

Get IP address information the using ipdata.co API.

## Installation

You can install the package via composer:

    composer require kielabokkie/ipdata

## Usage

### Lookup a specific address

```
$ipdata = new \Kielabokkie\Ipdata;
$res = $ipdata->lookup('8.8.8.8');
```
