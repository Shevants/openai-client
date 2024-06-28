# ChatGptClient

ChatGptClient is an API client for the OpenAI API, providing a convenient interface for interacting with various OpenAI resources.

## Get Started

> **Requires [PHP 8.1+](https://php.net/releases/)**

First, install OpenAI via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require shevant/chatgptclient
```

Ensure that the `php-http/discovery` composer plugin is allowed to run or install a client manually if your project does not already have a PSR-18 client integrated.
```bash
composer require guzzlehttp/guzzle
```

## Running Tests

To run all tests, use the following command:

``` 
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```

If PHPUnit is installed globally, you can run:

``` 
phpunit --bootstrap vendor/autoload.php tests
``` 

##Usage

```php
require 'vendor/autoload.php';

use OpenAiClient\OpenAiClient;
use GuzzleHttp\Client;

$transport = new Client();
$apiKey = 'your-api-key';
$client = new OpenAiClient($transport, $apiKey);

// Working with audio resources
$audio = $client->audio();
// Use $audio methods to interact with audio resources

// Working with chat resources
$chat = $client->chat();
// Use $chat methods to interact with chat resources

// Working with vector stores
$vectorStores = $client->vectorStores();
```

## Resources
The client provides access to the following OpenAI resources:

- `Audio`: Interact with audio resources.
  ```php
  public function createSpeech(array $params): array;
  public function createTranscription(array $params): array;
  public function createTranslation(array $params): array;
  ```

- `Chat`: Interact with chat resources.
  ```php
  public function createChatCompletion(array $params): array;
  ```

- `Embeddings`: Interact with embeddings.
  ```php
  public function createCreateEmbeddings(array $params): array;
  ```
  
- `FineTuning`: Interact with fine-tuning models.
  ```php
    public function createFineTuningJob(array $params): array;
    public function listFineTuningJobs(array $params): array;
    public function listFineTuningEvents(string $fineTuningJobId, array $params): array;
    public function listFineTuningCheckpoints(string $fineTuningJobId, array $params): array;
    public function retrieveFineTuningJob(string $fineTuningJobId): array;
    public function cancelFineTuning(string $fineTuningJobId): array;
  ```
- `Batch`: Interact with batch operations.
  ```php
    public function createBatch(array $params): array;
    public function retrieveBatch(string $batchId): array;
    public function cancelBatch(string $batchId): array;
    public function listBatch(array $params): array;
  ```
- `Files`: Interact with files.
  ```php
    public function uploadFile(array $params): array;
    public function listFiles(string $batchId): array;
    public function retrieveFile(string $fileId): array;
    public function deleteFile(string $fileId): array;
    public function retrieveFileContent(string $fileId): array;
  ```
  
- `Images`: Interact with images.
  ```php
    public function createImage(array $params): array;
    public function createImageEdit(array $params): array;
    public function createImageVariation(array $params): array;
  ```

- `Models`: Interact with models.
  ```php
    public function listModels(): array;
    public function retrieveModel(string $model): array;
    public function deleteFineTunedModel(string $model): array;
  ```
  
- `Moderations`: Interact with moderations.
  ```php
    public function createModeration(array $params): array;
  ```
  
- `Assistants`: Interact with assistants.
  ```php
    public function createAssistant(array $params): array;
    public function listAssistants(array $params): array;
    public function retrieveAssistant(string $assistantId): array;
    public function modifyAssistant(string $assistantId, array $params): array;
    public function deleteAssistant(string $assistantId): array;
  ```
  
- `Threads`: Interact with threads.
  ```php
    public function createThread(array $params): array;
    public function retrieveThread(string $threadId): array;
    public function modifyThread(string $threadId, array $params): array;
    public function modifyAssistant(string $assistantId, array $params): array;
    public function deleteThread(string $threadId): array;
  ```

- `Messages`: Interact with messages.
  ```php
    public function createMessage(string $threadId, array $params): array;
    public function listMessages(string $threadId, array $params): array;
    public function retrieveMessage(string $threadId, string $messageId): array;
    public function modifyMessage(string $threadId, string $messageId, array $params): array;
    public function deleteMessage(string $threadId, string $messageId): array;
  ```

- `Runs`: Interact with runs.
  ```php
    public function createRun(string $threadId, array $params): array;
    public function createThreadAndRun(array $params): array;
    public function listRuns(string $threadId, array $params): array;
    public function retrieveRun(string $threadId, string $runId): array;
    public function modifyRun(string $threadId, string $runId, array $params): array;
    public function submitToolOutputsToRun(string $threadId, string $runId, array $params): array;
    public function cancelRun(string $threadId, string $runId): array;
  ```
- `RunSteps`: Interact with run steps.
  ```php
    public function listRunSteps(string $threadId, string $runId, array $params): array;
    public function retrieveRunStep(string $threadId, string $runId, string $stepId): array;
  ```

- `VectorStores`: Interact with vector stores.
  ```php
    public function createVectorStore(array $params): array;
    public function listVectorStore(array $params): array;
    public function retrieveVectorStore(string $vectorStoreId): array;
    public function modifyVectorStore(string $vectorStoreId, array $params): array;
    public function deleteVectorStore(string $vectorStoreId): array;
  ```
 
- `VectorStoreFiles`: Interact with vector store files.
  ```php
    public function createVectorStoreFile(string $vectorStoreId, array $params): array;
    public function listVectorStoreFiles(string $vectorStoreId, array $params): array;
    public function retrieveVectorStoreFile(string $vectorStoreId, string $fileId): array;
    public function deleteVectorStoreFile(string $vectorStoreId, string $fileId): array;
  ```

- `VectorStoreFileBatches`: Interact with vector store file batches.
  ```php
    public function createVectorStoreFileBatch(string $vectorStoreId, array $params): array;
    public function retrieveVectorStoreFileBatch(string $vectorStoreId, string $batchId): array;
    public function cancelVectorStoreFileBatch(string $vectorStoreId, string $batchId): array;
    public function listVectorStoreFilesBatch(string $vectorStoreId, string $batchId): array;
  ```
