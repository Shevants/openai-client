<?php

namespace OpenAiClient\Tests\integration\resources;

class ImagesTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateImage($expectedResult)
    {
        $result = $this->client->images()->createImage([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateImageEdit($expectedResult)
    {
        $result = $this->client->images()->createImageEdit([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateImageVariation($expectedResult)
    {
        $result = $this->client->images()->createImageVariation([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
