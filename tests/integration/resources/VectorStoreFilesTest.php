<?php

namespace OpenAiClient\Tests\integration\resources;

class VectorStoreFilesTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateVectorStoreFile($expectedResult)
    {
        $result = $this->client->vectorStoreFiles()->createVectorStoreFile('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListVectorStoreFiles($expectedResult)
    {
        $result = $this->client->vectorStoreFiles()->listVectorStoreFiles('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveVectorStoreFile($expectedResult)
    {
        $result = $this->client->vectorStoreFiles()->retrieveVectorStoreFile('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteVectorStoreFile($expectedResult)
    {
        $result = $this->client->vectorStoreFiles()->deleteVectorStoreFile('test', 'test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
