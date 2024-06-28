<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Moderations extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/moderations/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createModeration(array $params): array
    {
        return $this->post('moderations', $params);
    }
}
