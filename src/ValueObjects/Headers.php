<?php

declare(strict_types=1);

namespace OpenAiClient\ValueObjects;

final class Headers
{
    /**
     * Headers constructor.
     * @param array<string, string> $headers
     */
    private function __construct(private readonly array $headers)
    {
    }

    public static function create(): self
    {
        return new self([]);
    }

    public function withAuthorization(string $apiKey): self
    {
        return new self([
            ...$this->headers,
            'Authorization' => "Bearer $apiKey",
        ]);

    }

    public function withContentType(string $contentType): self
    {
        return new self([
            ...$this->headers,
            'Content-Type' => $contentType,
        ]);
    }

    public function withOrganization(string $organization): self
    {
        return new self([
            ...$this->headers,
            'OpenAI-Organization' => $organization,
        ]);
    }

    public function withProject(string $project): self
    {
        return new self([
            ...$this->headers,
            'OpenAI-Project' => $project,
        ]);
    }

    public function withCustomHeader(string $name, string $value): self
    {
        return new self([
            ...$this->headers,
            $name => $value,
        ]);
    }

    /**
     * @return array<string, string>
     */
    public function toArray(): array
    {
        return $this->headers;
    }
}
