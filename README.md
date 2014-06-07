#Rorovoveror
[Røverspråk](http://no.wikipedia.org/wiki/R%C3%B8verspr%C3%A5ket) generator.

##Install

With [Composer](https://getcomposer.org/) require `"emil/rorovoveror": "dev-master"`

##Usage

	<?php

	require_once 'vendor/autoload.php';

	$parser = new Emil\Rorovoveror\Rorovoveror;

	$parser->text("Røver"); //Rorøvoveror
	$parser->file("/path/to/file");
	$parser->url('http://example.com');

##Test
Install dependencies with `composer install` and run tests with `./vendor/bin/phpspec run`
