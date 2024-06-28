<?php

namespace OpenAiClient\Tests\integration\resources;

class BatchTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCancelBatch($expectedResult)
    {
        $result = $this->client->batch()->cancelBatch('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateBatch($expectedResult)
    {
        $result = $this->client->batch()->createBatch([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListBatch($expectedResult)
    {
        $result = $this->client->batch()->listBatch([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveBatch($expectedResult)
    {
        $result = $this->client->batch()->retrieveBatch('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
