<?php


use kubamod\FreshsalesApiClient\Entities\Contact;
use kubamod\FreshsalesApiClient\Service\Repositories\ContactRepository;

require_once(__DIR__ . '/../vendor/autoload.php');

$contactRepository = new ContactRepository();
$contact = new Contact();

try {
    $contact->setFirstName('Jakub');
    $contact->setLastName('Modrzejewski');
    $contact->setEmail('kubam' . rand() . '@hotmail.com.pl');
    $contact->setFacebook('test');
    $contact->setAddress('test');
    $createdContact = $contactRepository->create($contact);

} catch (Exception $exception) {
    echo $exception->getMessage();
}

try {
    $contactShow = $contactRepository->show($createdContact['id']);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

try {
    $allContacts = $contactRepository->showAll();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

var_dump($createdContact);
var_dump($contactShow);
var_dump($allContacts);

try {
    $deleted = $contactRepository->delete($createdContact['id']);
    var_dump($deleted);
} catch (Exception $exception) {
    echo $createdContact['id'];
    echo $exception->getMessage();
}














