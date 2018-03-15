# Ipdata.co client library for PHP

Get IP address information the using ipdata.co API.

## Installation

Recommended installation is by running the composer require command. This will install the latest stable version of this extension.

    composer require kielabokkie/ipdata

## Usage

### Lookup a specific address

```
$ipdata = new \Kielabokkie\IpData;
$res = $ipdata->lookup('8.8.8.8');
```
