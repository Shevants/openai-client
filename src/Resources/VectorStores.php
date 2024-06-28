<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class VectorStores extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createVectorStore(array $params): array
    {
        return $this->post('vector_stores', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores/list
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listVectorStore(array $params): array
    {
        return $this->get('vector_stores', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores/retrieve
     * @return array<string, mixed>
     */
    public function retrieveVectorStore(string $vectorStoreId): array
    {
        return $this->get("vector_stores/$vectorStoreId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores/modify
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function modifyVectorStore(string $vectorStoreId, array $params): array
    {
        return $this->post("vector_stores/$vectorStoreId", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores/delete
     * @return array<string, mixed>
     */
    public function deleteVectorStore(string $vectorStoreId): array
    {
        return $this->delete("vector_stores/$vectorStoreId");
    }
}
