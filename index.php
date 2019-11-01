<?php
require __DIR__ . '/vendor/autoload.php';
use Monolog\logger;
use Monolog\handler\StreamHandler;

$log = new Logger('security');
$streamHandler=new StreamHandler('app.log.html', logger::WARNING);
$streamHandler->setFormatter(new \Monolog\Formatter\HtmlFormatter());
$log->pushHandler($streamHandler);

$log->warning('ingelogd',['jan van vliet'=>'gebruiker']);
$log->error('1e inlog-poging', ['piet van tol'=>'wachtwoord incorrect']);

