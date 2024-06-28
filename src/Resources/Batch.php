<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Batch extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/batch/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createBatch(array $params): array
    {
        return $this->post('batches', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/batch/retrieve
     * @return array<string, mixed>
     */
    public function retrieveBatch(string $batchId): array
    {
        return $this->get("batches/$batchId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/batch/cancel
     * @return array<string, mixed>
     */
    public function cancelBatch(string $batchId): array
    {
        return $this->post("batches/$batchId/cancel");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/batch/list
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listBatch(array $params): array
    {
        return $this->get('batches', $params);
    }
}
