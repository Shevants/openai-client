<?php

namespace OpenAiClient\Tests\integration\resources;

class RunStepsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListRunSteps($expectedResult)
    {
        $result = $this->client->runSteps()->listRunSteps('test', 'test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRtrieveRunStep($expectedResult)
    {
        $result = $this->client->runSteps()->retrieveRunStep('test', 'test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
