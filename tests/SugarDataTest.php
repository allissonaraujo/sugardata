<?php

use PHPUnit\Framework\TestCase;
use Allissonaraujo\SugarData\SugarData;

/**
 * Classe de teste para a classe SugarData.
 *
 * @package Allissonaraujo\SugarData
 */
class SugarDataTest extends TestCase
{
    /**
     * Testa o envio de uma requisição POST.
     */
    public function testSendPostRequest()
    {
        $SugarData = new SugarData('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'foo',
            'body' => 'bar',
            'userId' => 1
        ]);

        $response = $SugarData->send();

        $this->assertIsArray($response);
        $this->assertArrayHasKey('id', $response);
    }

    /**
     * Testa o envio de uma requisição GET.
     */
    public function testGetResponse()
    {
        $SugarData = new SugarData('https://jsonplaceholder.typicode.com/posts', [], 'GET');

        $response = $SugarData->send();

        $this->assertIsArray($response);
    }
}