<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Models extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/models/list
     * @return array<string, mixed>
     */
    public function listModels(): array
    {
        return $this->get('models');
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/models/retrieve
     * @return array<string, mixed>
     */
    public function retrieveModel(string $model): array
    {
        return $this->get("models/$model");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/models/delete
     * @return array<string, mixed>
     */
    public function deleteFineTunedModel(string $model): array
    {
        return $this->delete("models/$model");
    }
}
