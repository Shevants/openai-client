<?php

namespace OpenAiClient\Tests\integration\resources;

class ThreadsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateThread($expectedResult)
    {
        $result = $this->client->threads()->createThread([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveThread($expectedResult)
    {
        $result = $this->client->threads()->retrieveThread('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testModifyThread($expectedResult)
    {
        $result = $this->client->threads()->modifyThread('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteThread($expectedResult)
    {
        $result = $this->client->threads()->deleteThread('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
