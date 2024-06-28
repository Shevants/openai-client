<?php

namespace OpenAiClient\Tests\integration\resources;

class VectorStoreFileBatchesTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateVectorStoreFileBatch($expectedResult)
    {
        $result = $this->client->vectorStoreFileBatches()->createVectorStoreFileBatch('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveVectorStoreFileBatch($expectedResult)
    {
        $result = $this->client->vectorStoreFileBatches()->retrieveVectorStoreFileBatch('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCancelVectorStoreFileBatch($expectedResult)
    {
        $result = $this->client->vectorStoreFileBatches()->cancelVectorStoreFileBatch('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListVectorStoreFilesBatch($expectedResult)
    {
        $result = $this->client->vectorStoreFileBatches()->listVectorStoreFilesBatch('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
