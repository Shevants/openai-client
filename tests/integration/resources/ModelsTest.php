<?php

namespace OpenAiClient\Tests\integration\resources;

class ModelsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateMessage($expectedResult)
    {
        $result = $this->client->models()->listModels();

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveModel($expectedResult)
    {
        $result = $this->client->models()->retrieveModel('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteFineTunedModel($expectedResult)
    {
        $result = $this->client->models()->deleteFineTunedModel('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
