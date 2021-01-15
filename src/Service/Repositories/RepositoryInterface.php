<?php


namespace kubamod\FreshsalesApiClient\Service\Repositories;


use kubamod\FreshsalesApiClient\Entities\Contact;

interface RepositoryInterface
{
    public function create(Contact $contact);

    public function show(int $id): array|\Exception;

    public function delete(int $id);

    public function showAll() : array;
}