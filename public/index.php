<?php

require_once __DIR__ . '/../vendor/autoload.php';


use App\Domain\Entities\Registration;
use App\Domain\ValuesObject\Email;
use App\Domain\ValuesObject\Cpf;

$objRegistration = new Registration();
$objRegistration->setName('Lucas Pereira')
    ->setEmail(new Email('lucaass_mc@hotmail.com'))
    ->setCpf(new Cpf('10918781450'))
    ->setBirdDate(new DateTimeImmutable('1998-01-28'))
    ->setRegistrationAt(new DateTimeImmutable('2022-03-28'));

echo '<pre>';
echo print_r($objRegistration);