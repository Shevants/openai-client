<?php

namespace OpenAiClient\Tests\integration\resources;

use OpenAiClient\OpenAiClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    protected OpenAiClient $client;

    protected function setUp(): void
    {
        $this->client = new OpenAiClient(new Client(), 'test');
    }

    public function dataProviderForTestCreateSpeechWithIncorrectPlan(): array
    {
        return [
            [
                'invalid_request_error' => [
                    'message' => 'Incorrect API key provided: test. You can find your API key at https://platform.openai.com/account/api-keys.',
                    'type' => 'invalid_request_error',
                    'param' => null,
                    'code' => 'invalid_api_key',
                ]
            ]
        ];
    }

    public function testPlaceholder(): void
    {
        $this->assertTrue(true);
    }
}
