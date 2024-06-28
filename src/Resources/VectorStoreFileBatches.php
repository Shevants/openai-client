<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class VectorStoreFileBatches extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-file-batches/createBatch
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createVectorStoreFileBatch(string $vectorStoreId, array $params): array
    {
        return $this->post("vector_stores/$vectorStoreId/file_batches", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-file-batches/getBatch
     * @return array<string, mixed>
     */
    public function retrieveVectorStoreFileBatch(string $vectorStoreId, string $batchId): array
    {
        return $this->get("vector_stores/$vectorStoreId/file_batches/$batchId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-file-batches/cancelBatch
     * @return array<string, mixed>
     */
    public function cancelVectorStoreFileBatch(string $vectorStoreId, string $batchId): array
    {
        return $this->post("vector_stores/$vectorStoreId/file_batches/$batchId/cancel");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/vector-stores-file-batches/listBatchFiles
     * @return array<string, mixed>
     */
    public function listVectorStoreFilesBatch(string $vectorStoreId, string $batchId): array
    {
        return $this->get("vector_stores/$vectorStoreId/file_batches/$batchId/files");
    }
}
