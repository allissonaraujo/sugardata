<?php

namespace Allissonaraujo\SugarData;

/**
 * Classe para enviar e Receber requisições HTTP usando a biblioteca cURL.
 *
 * @package Allissonaraujo\SugarData
 */
class SugarData
{
    /**
     * URL da requisição.
     *
     * @var string
     */
    private $url;

    /**
     * Dados a serem enviados na requisição.
     *
     * @var array
     */
    private $data;

    /**
     * Método de requisição (POST, GET, PUT, DELETE, etc.).
     *
     * @var string
     */
    private $method;

    /**
     * Construtor da classe.
     *
     * @param string $url URL da requisição.
     * @param array $data Dados a serem enviados na requisição.
     * @param string $method Método de requisição (POST, GET, PUT, DELETE, etc.). Padrão é 'POST'.
     */
    public function __construct(string $url, array $data, string $method = 'POST')
    {
        $this->url = $url;
        $this->data = $data;
        $this->method = $method;
    }

    /**
     * Envia a requisição HTTP e retorna a resposta como um array.
     *
     * @return array Resposta da requisição.
     * @throws \Exception Caso ocorra algum erro durante a requisição.
     */
    public function send(): array
    {
        $ch = curl_init($this->url);

        if ($this->method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->data));
        } else {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);
            if ($this->method === 'GET' && !empty($this->data)) {
                $this->url .= '?' . http_build_query($this->data);
            }
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception(curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}