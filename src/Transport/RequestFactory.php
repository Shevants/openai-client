<?php

declare(strict_types=1);

namespace OpenAiClient\Transport;

use Nyholm\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use RuntimeException;

class RequestFactory
{
    /**
     * @param array<string, string> $headers
     * @param array<string, mixed> $params
     */
    public static function create(
        string $method,
        UriInterface|string $uri,
        array $headers = [],
        array $params = [],
        string $version = '1.1'
    ): RequestInterface
    {
        $jsonEncodedParams = $params !== [] ? json_encode($params) : null;

        if ($jsonEncodedParams === false) {
            throw new RuntimeException('Error encoding parameters to JSON');
        }

        return new Request(
            $method,
            $uri,
            $headers,
            $jsonEncodedParams,
            $version
        );
    }
}
