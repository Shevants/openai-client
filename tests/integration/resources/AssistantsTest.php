<?php

namespace OpenAiClient\Tests\integration\resources;

class AssistantsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateAssistant($expectedResult)
    {
        $result = $this->client->assistants()->createAssistant([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteAssistant($expectedResult)
    {
        $result = $this->client->assistants()->deleteAssistant('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListAssistants($expectedResult)
    {
        $result = $this->client->assistants()->listAssistants([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testModifyAssistant($expectedResult)
    {
        $result = $this->client->assistants()->modifyAssistant('1', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveAssistant($expectedResult)
    {
        $result = $this->client->assistants()->retrieveAssistant('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
