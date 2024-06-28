<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

use OpenAiClient\Enums\Method;
use OpenAiClient\Transport\RequestFactory;
use OpenAiClient\ValueObjects\Headers;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

class BaseResource
{
    protected const BASE_URI = 'https://api.openai.com/v1/';

    public function __construct(protected ClientInterface $httpClient, protected Headers $headers)
    {
    }

    /**
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    protected function post(string $path, array $params = []): array
    {
        return $this->performRequest(
            RequestFactory::create(
                Method::POST->value,
                self::BASE_URI . $path,
                $this->headers->toArray(),
                $params
            )
        );
    }

    /**
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    protected function get(string $path, array $params = []): array
    {
        $uri = $params === []
            ? self::BASE_URI . $path
            : self::BASE_URI . $path . '?' . implode('&', $params);

        return $this->performRequest(
            RequestFactory::create(
                Method::GET->value,
                $uri,
                $this->headers->toArray()
            )
        );
    }

    /**
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    protected function delete(string $path, array $params = []): array
    {
        return $this->performRequest(
            RequestFactory::create(
                Method::DELETE->value,
                self::BASE_URI . $path,
                $this->headers->toArray(),
                $params
            )
        );
    }

    /**
     * @return array<string, mixed>
     */
    private function performRequest(RequestInterface $request): array
    {
        try {
            $response = $this->httpClient->sendRequest($request);

            return ['result' => json_decode($response->getBody()->getContents(), true)];
        } catch (ClientExceptionInterface $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
