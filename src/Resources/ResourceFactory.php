<?php

declare(strict_types=1);

namespace OpenAiClient\Resources;

use OpenAiClient\ValueObjects\Headers;
use Psr\Http\Client\ClientInterface;

final class ResourceFactory
{
    public static function createAssistants(ClientInterface $httpClient, Headers $headers): Assistants
    {
        return new Assistants($httpClient, $headers);
    }

    public static function createAudio(ClientInterface $httpClient, Headers $headers): Audio
    {
        return new Audio($httpClient, $headers);
    }

    public static function createBatch(ClientInterface $httpClient, Headers $headers): Batch
    {
        return new Batch($httpClient, $headers);
    }

    public static function createChat(ClientInterface $httpClient, Headers $headers): Chat
    {
        return new Chat($httpClient, $headers);
    }

    public static function createEmbeddings(ClientInterface $httpClient, Headers $headers): Embeddings
    {
        return new Embeddings($httpClient, $headers);
    }

    public static function createFiles(ClientInterface $httpClient, Headers $headers): Files
    {
        return new Files($httpClient, $headers);
    }

    public static function createFineTuning(ClientInterface $httpClient, Headers $headers): FineTuning
    {
        return new FineTuning($httpClient, $headers);
    }

    public static function createImages(ClientInterface $httpClient, Headers $headers): Images
    {
        return new Images($httpClient, $headers);
    }

    public static function createMessages(ClientInterface $httpClient, Headers $headers): Messages
    {
        return new Messages($httpClient, $headers);
    }

    public static function createModels(ClientInterface $httpClient, Headers $headers): Models
    {
        return new Models($httpClient, $headers);
    }

    public static function createModerations(ClientInterface $httpClient, Headers $headers): Moderations
    {
        return new Moderations($httpClient, $headers);
    }

    public static function createRuns(ClientInterface $httpClient, Headers $headers): Runs
    {
        return new Runs($httpClient, $headers);
    }

    public static function createRunSteps(ClientInterface $httpClient, Headers $headers): RunSteps
    {
        return new RunSteps($httpClient, $headers);
    }

    public static function createThreads(ClientInterface $httpClient, Headers $headers): Threads
    {
        return new Threads($httpClient, $headers);
    }

    public static function createVectorStoreFileBatches(ClientInterface $httpClient, Headers $headers): VectorStoreFileBatches
    {
        return new VectorStoreFileBatches($httpClient, $headers);
    }

    public static function createVectorStoreFiles(ClientInterface $httpClient, Headers $headers): VectorStoreFiles
    {
        return new VectorStoreFiles($httpClient, $headers);
    }

    public static function createVectorStores(ClientInterface $httpClient, Headers $headers): VectorStores
    {
        return new VectorStores($httpClient, $headers);
    }
}
