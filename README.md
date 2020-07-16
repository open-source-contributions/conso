<p align="center">
  <img src="https://user-images.githubusercontent.com/18489496/51750637-f351c280-20b2-11e9-97e3-f1e0232bb04a.png"  alt="Conso Preview">
  <p align="center">
    <img src="https://img.shields.io/badge/License-MIT-f1c40f"          alt="License">
    <img src="https://img.shields.io/badge/PHP-7.2-3498db.svg"          alt="PHP version">
    <img src="https://img.shields.io/badge/version-1.0.0-2c3e50.svg"    alt="Version">
    <img src="https://img.shields.io/badge/coverage-40%25-27ae60.svg"   alt="Coverage">
    <img src="https://travis-ci.org/lotfio/conso.svg?branch=master"     alt="Build Status">
    <img src="https://github.styleci.io/repos/165832668/shield?branch=master" alt="StyleCi">
    <img src="https://img.shields.io/badge/downloads-1k-e74c3c.svg"     alt="Downloads">
    </p>
  <p align="center">
    <strong>Conso (PHP console applications for geeks).</strong>
  </p>
</p>

## 🔥 Introduction :
Conso is a simple, lightweight PHP package that helps you create command line applications easily.

![conso-php](https://user-images.githubusercontent.com/18489496/87257339-7b3fae00-c49a-11ea-9246-74368e320385.gif)

## 📌 Requirements :
- PHP 7.2 or newer versions
- PHPUnit >= 8 (for testing purpose)

## 🚀 Installation :
* ***Via composer :***

```php
composer require lotfio/conso
```

## 🎉 write your first command
- create a `commands.php` file.
- create a `conso` file (you can change the name as you like).
- include your `commands.php` file into `conso` executable file.
- it should look something like this.

```php
#!/usr/bin/env php
<?php declare(strict_types=1);

use Conso\{
    Conso,Input,Output
};

require 'vendor/autoload.php';

$conso = new Conso(new Input, new Output);

// include your commands
require_once 'commands.php';

$conso->run(0); // 0 for production & 1 for development
```
- define a new `test` command in your `commands.php` :

```php
<?php
// this is your commands file

 // test command
$conso->command("test", function($input, $output){
    $output->writeLn("hello from test ", 'red');
});

```

- now your command has been registered.
- run `php conso --commands` or `./conso --commands` in your terminal and you should see your command.

![commands](https://user-images.githubusercontent.com/18489496/87434186-6f630180-c5ea-11ea-894a-7efaaad6301f.png)

- command test is registered now ***(no description is shown you can add this later on)***.
- run your command `php conso test` or `./conso test`.

![image](https://user-images.githubusercontent.com/18489496/87434691-12b41680-c5eb-11ea-9d36-656c33fd18b7.png)


### add description
- `->description(string $description)`;

```php
<?php
// test command
$conso->command("test", function($input, $output){
    $output->writeLn("hello from test ", 'red');

})->description("This is test command description :) ^^");
```
![named](https://user-images.githubusercontent.com/18489496/87438178-80624180-c5ef-11ea-802e-db500ebb8329.png)


### define sub commands
- `->sub(string|array $subCommand)`;

```php
<?php
// test command
$conso->command("test", function($input, $output){

    if($input->subCommand() == 'one')
        exit($output->writeLn(' hello from one', 'yellow'));

    if($input->subCommand() == 'two')
        $output->writeLn(' hello from two', 'green');

})->description("This is test command description :) ^^")->sub('one', 'two');
```
![image](https://user-images.githubusercontent.com/18489496/87439833-8527f500-c5f1-11ea-9b55-56746b0a66cc.png)

![image](https://user-images.githubusercontent.com/18489496/87439882-96710180-c5f1-11ea-8da2-188afd6294c0.png)


### define command flags
- you can define flags using the flag method `->flags(string|array $flag)`;
- this is a list of reserved flags `['-h', '--help', '-v', '--version', '-c', '--commands', '-q', '--quiet', '--ansi', '--no-ansi']`

```php
<?php
// test command
$conso->command("test", function($input, $output){

    if($input->flag(0) == '-t')
        $output->writeLn("flag -t is defined for this command.", 'red');

})->description("This is test command description :) ^^")->flags('-t');
```

![image](https://user-images.githubusercontent.com/18489496/87725819-498e5600-c7be-11ea-94a8-dfb566218129.png)




## 🔧 Configure Conso


## ✨ TODO

Helpers for quick commands development.

## ✨ Contributing

Thank you for considering to contribute to Conso. All the contribution guidelines are mentioned **[Here](CONTRIBUTE.md)**.

## 💖 Support

If this project helped you reduce time to develop, you can give me a cup of coffee :) : **[Paypal](https://www.paypal.me/lotfio)**.

## ✨ License

Conso is an open-source software licensed under the **[MIT license](LICENCE)**.