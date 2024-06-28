<?php

namespace OpenAiClient\Tests\integration\resources;

class RunsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateRun($expectedResult)
    {
        $result = $this->client->runs()->createRun('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateThreadAndRun($expectedResult)
    {
        $result = $this->client->runs()->createThreadAndRun([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListRuns($expectedResult)
    {
        $result = $this->client->runs()->listRuns('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveRun($expectedResult)
    {
        $result = $this->client->runs()->retrieveRun('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testModifyRun($expectedResult)
    {
        $result = $this->client->runs()->modifyRun('test', 'test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testSubmitToolOutputsToRun($expectedResult)
    {
        $result = $this->client->runs()->submitToolOutputsToRun('test', 'test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCancelRun($expectedResult)
    {
        $result = $this->client->runs()->cancelRun('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
