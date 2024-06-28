<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Assistants extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/assistants/createAssistant
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createAssistant(array $params): array
    {
        return $this->post( 'assistants', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/assistants/listAssistants
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listAssistants(array $params): array
    {
        return $this->get( 'assistants', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/assistants/getAssistant
     * @return array<string, mixed>
     */
    public function retrieveAssistant(string $assistantId): array
    {
        return $this->get( "assistants/$assistantId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/assistants/modifyAssistant
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function modifyAssistant(string $assistantId, array $params): array
    {
        return $this->post( "assistants/$assistantId", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/assistants/deleteAssistant
     * @return array<string, mixed>
     */
    public function deleteAssistant(string $assistantId): array
    {
        return $this->delete("assistants/$assistantId");
    }
}
