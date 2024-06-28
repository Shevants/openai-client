<?php

namespace OpenAiClient\Tests\integration\resources;

class FilesTest extends BaseTest
{
    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testDeleteFile($expectedResult)
    {
        $result = $this->client->files()->deleteFile('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testListFiles($expectedResult)
    {
        $result = $this->client->files()->listFiles([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveFile($expectedResult)
    {
        $result = $this->client->files()->retrieveFile('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testRetrieveFileContent($expectedResult)
    {
        $result = $this->client->files()->retrieveFileContent('test');

        $this->assertEquals($expectedResult, $result['result']['error']);
    }

    /**
     * @dataProvider dataProviderForTestCreateSpeechWithIncorrectPlan
     */
    public function testUploadFile($expectedResult)
    {
        $result = $this->client->files()->uploadFile([]);

        $this->assertEquals($expectedResult, $result['result']['error']);
    }
}
