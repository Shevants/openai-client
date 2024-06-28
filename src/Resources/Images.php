<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Images extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/images/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createImage(array $params): array
    {
        return $this->post('images/generations', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/images/createEdit
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createImageEdit(array $params): array
    {
        return $this->post('images/edits', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/images/createVariation
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createImageVariation(array $params): array
    {
        return $this->post('images/variations', $params);
    }
}
