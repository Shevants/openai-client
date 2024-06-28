<?php

declare(strict_types=1);

namespace OpenAiClient;

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
use OpenAiClient\Resources\ResourceFactory;
use OpenAiClient\Resources\Runs;
use OpenAiClient\Resources\RunSteps;
use OpenAiClient\Resources\Threads;
use OpenAiClient\Resources\VectorStoreFileBatches;
use OpenAiClient\Resources\VectorStoreFiles;
use OpenAiClient\Resources\VectorStores;
use OpenAiClient\ValueObjects\Headers;
use Psr\Http\Client\ClientInterface;

final class OpenAiClient
{
    private Headers $headers;

    public function __construct(
        private ClientInterface $transport,
        private readonly ?string $apiKey = null,
        private readonly ?string $contentType = 'application/json',
        private readonly ?string $organization = null,
        private readonly ?string $project = null
    ) {
        $this->headers = Headers::create();

        if ($this->apiKey) {
            $this->headers = $this->headers->withAuthorization($this->apiKey);
        }

        if ($this->contentType) {
            $this->headers = $this->headers->withContentType($this->contentType);
        }

        if ($this->organization) {
            $this->headers = $this->headers->withOrganization($this->organization);
        }

        if ($this->project) {
            $this->headers = $this->headers->withProject($this->project);
        }
    }

    public function setTransport(ClientInterface $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function audio(): Audio
    {
        return ResourceFactory::createAudio($this->transport, $this->headers);
    }

    public function chat(): Chat
    {
        return ResourceFactory::createChat($this->transport, $this->headers);
    }

    public function embeddings(): Embeddings
    {
        return ResourceFactory::createEmbeddings($this->transport, $this->headers);
    }

    public function fineTuning(): FineTuning
    {
        return ResourceFactory::createFineTuning($this->transport, $this->headers);
    }

    public function batch(): Batch
    {
        return ResourceFactory::createBatch($this->transport, $this->headers);
    }

    public function files(): Files
    {
        return ResourceFactory::createFiles($this->transport, $this->headers);
    }

    public function images(): Images
    {
        return ResourceFactory::createImages($this->transport, $this->headers);
    }

    public function models(): Models
    {
        return ResourceFactory::createModels($this->transport, $this->headers);
    }

    public function moderations(): Moderations
    {
        return ResourceFactory::createModerations($this->transport, $this->headers);
    }

    public function assistants(): Assistants
    {
        return ResourceFactory::createAssistants($this->transport, $this->headers);
    }

    public function threads(): Threads
    {
        return ResourceFactory::createThreads($this->transport, $this->headers);
    }

    public function messages(): Messages
    {
        return ResourceFactory::createMessages($this->transport, $this->headers);
    }

    public function runs(): Runs
    {
        return ResourceFactory::createRuns($this->transport, $this->headers);
    }

    public function runSteps(): RunSteps
    {
        return ResourceFactory::createRunSteps($this->transport, $this->headers);
    }

    public function vectorStores(): VectorStores
    {
        return ResourceFactory::createVectorStores($this->transport, $this->headers);
    }

    public function vectorStoreFiles(): VectorStoreFiles
    {
        return ResourceFactory::createVectorStoreFiles($this->transport, $this->headers);
    }

    public function vectorStoreFileBatches(): VectorStoreFileBatches
    {
        return ResourceFactory::createVectorStoreFileBatches($this->transport, $this->headers);
    }
}
