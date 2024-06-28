<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Audio extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/audio/createSpeech
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createSpeech(array $params): array
    {
        return $this->post('audio/speech', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/audio/createTranscription
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createTranscription(array $params): array
    {
        return $this->post('audio/transcriptions', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/audio/createTranslation
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createTranslation(array $params): array
    {
        return $this->post('audio/translations', $params);
    }
}
