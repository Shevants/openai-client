<?php

namespace OpenAiClient\Tests\integration\resources;

class ChatTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateChatCompletion($expectedResult)
    {
        $result = $this->client->Chat()->createChatCompletion([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
