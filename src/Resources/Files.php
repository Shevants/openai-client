<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Files extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/files/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function uploadFile(array $params): array
    {
        return $this->post('files', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/files/list
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listFiles(array $params): array
    {
        return $this->get('files', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/files/retrieve
     * @return array<string, mixed>
     */
    public function retrieveFile(string $fileId): array
    {
        return $this->get("files/$fileId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/files/delete
     * @return array<string, mixed>
     */
    public function deleteFile(string $fileId): array
    {
        return $this->delete("files/$fileId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/files/retrieve
     * @return array<string, mixed>
     */
    public function retrieveFileContent(string $fileId): array
    {
        return $this->get("files/$fileId/content");
    }
}
