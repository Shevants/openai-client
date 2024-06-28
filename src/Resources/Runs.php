<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

final class Runs extends BaseResource
{
    /**
     * @see https://platform.openai.com/docs/api-reference/runs
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createRun(string $threadId, array $params): array
    {
        return $this->post("threads/$threadId/runs", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/createThreadAndRun
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function createThreadAndRun(array $params): array
    {
        return $this->post('threads/runs', $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/listRuns
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function listRuns(string $threadId, array $params): array
    {
        return $this->get("threads/$threadId/runs", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/getRun
     * @return array<string, mixed>
     */
    public function retrieveRun(string $threadId, string $runId): array
    {
        return $this->get("threads/$threadId/runs/$runId");
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/modifyRun
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function modifyRun(string $threadId, string $runId, array $params): array
    {
        return $this->post("threads/$threadId/runs/$runId", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/submitToolOutputs
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function submitToolOutputsToRun(string $threadId, string $runId, array $params): array
    {
        return $this->post("threads/$threadId/runs/$runId/submit_tool_outputs", $params);
    }

    /**
     * @see https://platform.openai.com/docs/api-reference/runs/cancelRun
     * @return array<string, mixed>
     */
    public function cancelRun(string $threadId, string $runId): array
    {
        return $this->post("threads/$threadId/runs/$runId/cancel");
    }
}
