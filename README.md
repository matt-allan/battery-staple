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

## Security

The library is 8 lines of code, so there isn't much that can go wrong.  Here is what happens:

- A word list of 10,000 words is loaded.
- A random number is generated with `random_int` and the word on that line is used.
- Repeat the above until you have 4 words.

That being said, I am not a security expert.  I cannot guarantee that this library is cryptographically secure and you shouldn't use it for anything important.

## Contributing

Contributions Welcome.  Some ideas:

- Allow choosing a delimiter
- Set min/max word length, so you don't get words like 'the'
- Case transformation options (using [neko](https://github.com/yuloh/neko)?)
