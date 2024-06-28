<?php

namespace OpenAiClient\Tests\integration\resources;

class AudioTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateSpeech($expectedResult)
    {
        $result = $this->client->audio()->createSpeech([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateTranscription($expectedResult)
    {
        $result = $this->client->audio()->createTranscription([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateTranslation($expectedResult)
    {
        $result = $this->client->audio()->createTranslation([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
