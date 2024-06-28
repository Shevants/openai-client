<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Threads extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/threads/createThread
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createThread(array $params): array
    {
        return $this->post('threads', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/threads/createThread
     * @return array<string, mixed>
     */
    public function retrieveThread(string $threadId): array
    {
        return $this->get("threads/$threadId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/threads/modifyThread
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function modifyThread(string $threadId, array $params): array
    {
        return $this->post("threads/$threadId", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/threads/deleteThread
     * @return array<string, mixed>
     */
    public function deleteThread(string $threadId): array
    {
        return $this->delete("threads/$threadId");
    }
}
