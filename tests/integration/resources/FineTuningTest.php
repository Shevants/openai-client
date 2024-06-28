<?php

namespace OpenAiClient\Tests\integration\resources;

class FineTuningTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCancelFineTuning($expectedResult)
    {
        $result = $this->client->fineTuning()->cancelFineTuning('1');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateFineTuningJob($expectedResult)
    {
        $result = $this->client->fineTuning()->createFineTuningJob([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListFineTuningCheckpoints($expectedResult)
    {
        $result = $this->client->fineTuning()->listFineTuningCheckpoints('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListFineTuningJobs($expectedResult)
    {
        $result = $this->client->fineTuning()->listFineTuningJobs([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListFineTuningEvents($expectedResult)
    {
        $result = $this->client->fineTuning()->listFineTuningEvents('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveFineTuningJob($expectedResult)
    {
        $result = $this->client->fineTuning()->retrieveFineTuningJob('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
