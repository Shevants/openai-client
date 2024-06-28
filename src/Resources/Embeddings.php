<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Embeddings extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/embeddings
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createCreateEmbeddings(array $params): array
    {
        return $this->post('embeddings', $params);
    }
}
