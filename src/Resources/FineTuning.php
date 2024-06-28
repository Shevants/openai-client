<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class FineTuning extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/create
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createFineTuningJob(array $params): array
    {
        return $this->post('fine_tuning/jobs', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/list
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listFineTuningJobs(array $params): array
    {
        return $this->get('fine_tuning/jobs', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/list-events
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listFineTuningEvents(string $fineTuningJobId, array $params): array
    {
        return $this->get("fine_tuning/jobs/$fineTuningJobId/events", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/list-checkpoints
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listFineTuningCheckpoints(string $fineTuningJobId, array $params): array
    {
        return $this->get("fine_tuning/jobs/$fineTuningJobId/checkpoints", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/retrieve
     * @return array<string, mixed>
     */
    public function retrieveFineTuningJob(string $fineTuningJobId): array
    {
        return $this->get("fine_tuning/jobs/$fineTuningJobId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/fine-tuning/cancel
     * @return array<string, mixed>
     */
    public function cancelFineTuning(string $fineTuningJobId): array
    {
        return $this->post("fine_tuning/jobs/$fineTuningJobId/cancel");
    }
}
