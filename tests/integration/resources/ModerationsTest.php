<?php

namespace OpenAiClient\Tests\integration\resources;

class ModerationsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateModeration($expectedResult)
    {
        $result = $this->client->moderations()->createModeration([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
