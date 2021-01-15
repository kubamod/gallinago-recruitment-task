<?php


namespace kubamod\FreshsalesApiClient\Service\Repositories;


use GuzzleHttp\Exception\ClientException;
use kubamod\FreshsalesApiClient\Entities\Entity;
use kubamod\FreshsalesApiClient\Service\Client\ApiClient;

abstract class Repository extends ApiClient implements RepositoryInterface
{
    protected $endPoint;

    public function create(Entity $entity): array|\Exception
    {
        try {
            $response = $this->client->post($this->endPoint, [
                'json' => $entity->ToArray(),
            ]);

            return json_decode($response->getBody()->getContents(), true)['contact'];
        } catch (ClientException $exception) {
            return throw new \Exception($exception->getMessage());
        }
    }

    public function show(int $id): array|\Exception
    {
        try {
            $response = $this->client->get($this->endPoint . '/' . $id);

            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $exception) {
            return throw new \Exception($exception->getMessage());
        }

    }

    public function getFilters(): array|\Exception
    {
        try {
            $response = $this->client->get($this->endPoint . '/filters');

            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $exception) {
            return throw new \Exception($exception->getMessage());
        }
    }

    public function getContactsByFilterId(int $filterId): array|\Exception
    {
        try {
            $response = $this->client->get($this->endPoint . '/view/ ' . $filterId);

            return json_decode($response->getBody()->getContents(), true)['contacts'];
        } catch (\Exception $exception) {
            return throw new \Exception($exception->getMessage());
        }
    }

    public function showAll(): array
    {
        try {
            $filters = $this->getFilters();
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }

        foreach ($filters['filters'] as $key => $filter) {
            if ($filter['name'] === 'All Contacts') {
                $allContactsFilterId = $filter['id'];
            }
        }
        return $this->getContactsByFilterId($allContactsFilterId);
    }

    public function delete(int $id): bool|\Exception
    {
        try {
            $response = $this->client->delete($this->endPoint . '/' . $id);

            return (bool)$response->getBody()->getContents();
        } catch (ClientException $exception) {
            return throw new \Exception($exception->getMessage());
        }
    }
}