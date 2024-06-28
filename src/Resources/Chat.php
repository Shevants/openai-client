<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Chat extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/chat/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createChatCompletion(array $params): array
    {
        return $this->post('chat/completions', $params);
    }
}
