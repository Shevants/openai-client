<?php

namespace OpenAiClient\Tests\integration\resources;

class VectorStoresTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateVectorStore($expectedResult)
    {
        $result = $this->client->vectorStores()->createVectorStore([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListVectorStore($expectedResult)
    {
        $result = $this->client->vectorStores()->listVectorStore([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveVectorStore($expectedResult)
    {
        $result = $this->client->vectorStores()->retrieveVectorStore('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testModifyVectorStore($expectedResult)
    {
        $result = $this->client->vectorStores()->modifyVectorStore('test', []);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteVectorStore($expectedResult)
    {
        $result = $this->client->vectorStores()->deleteVectorStore('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
