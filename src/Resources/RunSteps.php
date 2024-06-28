<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class RunSteps extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/run-steps/listRunSteps
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listRunSteps(string $threadId, string $runId, array $params): array
    {
        return $this->get("threads/$threadId/runs/$runId/steps", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/run-steps/getRunStep
     * @return array<string, mixed>
     */
    public function retrieveRunStep(string $threadId, string $runId, string $stepId): array
    {
        return $this->get("threads/$threadId/runs/$runId/steps/$stepId");
    }
}
