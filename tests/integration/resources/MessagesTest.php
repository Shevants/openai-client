<?php

namespace OpenAiClient\Tests\integration\resources;

class MessagesTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateMessage($expectedResult)
    {
        $result = $this->client->messages()->createMessage('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListMessages($expectedResult)
    {
        $result = $this->client->messages()->listMessages('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveMessage($expectedResult)
    {
        $result = $this->client->messages()->retrieveMessage('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testModifyMessage($expectedResult)
    {
        $result = $this->client->messages()->modifyMessage('test', 'test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteMessage($expectedResult)
    {
        $result = $this->client->messages()->deleteMessage('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
