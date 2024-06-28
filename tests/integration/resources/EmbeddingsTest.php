<?php

namespace OpenAiClient\Tests\integration\resources;

class EmbeddingsTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testCreateCreateEmbeddings($expectedResult)
    {
        $result = $this->client->embeddings()->createCreateEmbeddings([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
