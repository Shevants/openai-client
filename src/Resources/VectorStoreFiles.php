<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class VectorStoreFiles extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-files/createFile
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createVectorStoreFile(string $vectorStoreId, array $params): array
    {
        return $this->post("vector_stores/$vectorStoreId/files", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-files/listFiles
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listVectorStoreFiles(string $vectorStoreId, array $params): array
    {
        return $this->get("vector_stores/$vectorStoreId/files", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-files/getFile
     * @return array<string, mixed>
     */
    public function retrieveVectorStoreFile(string $vectorStoreId, string $fileId): array
    {
        return $this->get("vector_stores/$vectorStoreId/files/$fileId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-files/deleteFile
     * @return array<string, mixed>
     */
    public function deleteVectorStoreFile(string $vectorStoreId, string $fileId): array
    {
        return $this->delete("vector_stores/$vectorStoreId/files/$fileId");
    }
}
