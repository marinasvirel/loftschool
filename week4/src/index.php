<?php

require '../vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;


$transport = Transport::fromDsn('smtp://forloft@bk.ru:hqEnVMQZL1QxAFD0X5hg@smtp.mail.ru:465');
$mailer = new Mailer($transport);

$email = (new Email())
  ->from("forloft@bk.ru")
  ->to("forloft@bk.ru")
  ->subject('Задание 5.1 4-й недели')
  ->text('Пример письма');


$mailer->send($email);