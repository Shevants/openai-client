<?php

namespace OpenAiClient\Tests\unit;

use OpenAiClient\OpenAiClient;
use OpenAiClient\Resources\Assistants;
use OpenAiClient\Resources\Audio;
use OpenAiClient\Resources\Batch;
use OpenAiClient\Resources\Chat;
use OpenAiClient\Resources\Embeddings;
use OpenAiClient\Resources\Files;
use OpenAiClient\Resources\FineTuning;
use OpenAiClient\Resources\Images;
use OpenAiClient\Resources\Messages;
use OpenAiClient\Resources\Models;
use OpenAiClient\Resources\Moderations;
use OpenAiClient\Resources\Runs;
use OpenAiClient\Resources\RunSteps;
use OpenAiClient\Resources\Threads;
use OpenAiClient\Resources\VectorStoreFileBatches;
use OpenAiClient\Resources\VectorStoreFiles;
use OpenAiClient\Resources\VectorStores;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private OpenAiClient $client;

    protected function setUp(): void
    {
        $this->client = new OpenAiClient(new Client());
    }

    public function testAssistantsResourceInitialization(): void
    {
        $this->assertInstanceOf(Assistants::class, $this->client->assistants());
    }

    public function testAudioResourceInitialization(): void
    {
        $this->assertInstanceOf(Audio::class, $this->client->audio());
    }

    public function testBatchResourceInitialization(): void
    {
        $this->assertInstanceOf(Batch::class, $this->client->batch());
    }

    public function testChatResourceInitialization(): void
    {
        $this->assertInstanceOf(Chat::class, $this->client->chat());
    }

    public function testEmbeddingsResourceInitialization(): void
    {
        $this->assertInstanceOf(Embeddings::class, $this->client->embeddings());
    }

    public function testFilesResourceInitialization(): void
    {
        $this->assertInstanceOf(Files::class, $this->client->files());
    }

    public function testFineTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(FineTuning::class, $this->client->fineTuning());
    }

    public function testImagesTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(Images::class, $this->client->images());
    }

    public function testMessagesTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(Messages::class, $this->client->messages());
    }

    public function testModelsTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(Models::class, $this->client->models());
    }

    public function testModerationsTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(Moderations::class, $this->client->moderations());
    }

    public function testRunsTuningResourceInitialization(): void
    {
        $this->assertInstanceOf(Runs::class, $this->client->runs());
    }

    public function testRunStepsResourceInitialization(): void
    {
        $this->assertInstanceOf(RunSteps::class, $this->client->runSteps());
    }

    public function testThreadsResourceInitialization(): void
    {
        $this->assertInstanceOf(Threads::class, $this->client->threads());
    }

    public function testVectorStoreFileBatchesResourceInitialization(): void
    {
        $this->assertInstanceOf(VectorStoreFileBatches::class, $this->client->vectorStoreFileBatches());
    }

    public function testVectorStoreFilesResourceInitialization(): void
    {
        $this->assertInstanceOf(VectorStoreFiles::class, $this->client->vectorStoreFiles());
    }

    public function testVectorStoresResourceInitialization(): void
    {
        $this->assertInstanceOf(VectorStores::class, $this->client->vectorStores());
    }
}
