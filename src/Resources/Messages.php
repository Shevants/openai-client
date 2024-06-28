<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Messages extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/messages/createMessage
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createMessage(string $threadId, array $params): array
    {
        return $this->post("threads/$threadId/messages", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/messages/listMessages
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listMessages(string $threadId, array $params): array
    {
        return $this->get("threads/$threadId/messages", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/messages/getMessage
     * @return array<string, mixed>
     */
    public function retrieveMessage(string $threadId, string $messageId): array
    {
        return $this->get("threads/$threadId/messages/$messageId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/messages/modifyMessage
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function modifyMessage(string $threadId, string $messageId, array $params): array
    {
        return $this->post("threads/$threadId/messages/$messageId", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/messages/deleteMessage
     * @return array<string, mixed>
     */
    public function deleteMessage(string $threadId, string $messageId): array
    {
        return $this->delete("threads/$threadId/messages/$messageId");
    }
}
