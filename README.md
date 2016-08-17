# Battery Staple

A password generator, inspired by XKCD.

![XKCD comic](http://imgs.xkcd.com/comics/password_strength.png)

## Install

### Via Composer

```bash
composer require yuloh/battery-staple
```

## Usage

```php
$password = Yuloh\BatteryStaple\PasswordGenerator::generate();
// returns something like "beefjapanesesealedunwrap"
```

## Contributing

Contributions Welcome.  Some ideas:

- Allow choosing a delimiter
- Set min/max word length, so you don't get words like 'the'
- Case transformation options (using [neko](https://github.com/yuloh/neko)?)
