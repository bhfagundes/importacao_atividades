<?php
/*
 * RestClient.php
 * Copyright (c) GRUPO/LPJ.
 *
 * Este software é confidencial e propriedade da GRUPO/LPJ.
 * Não é permitida sua distribuição ou divulgação do seu conteúdo sem expressa autorização da GRUPO/LPJ.
 * Este arquivo contém informações proprietárias.
 */

namespace App\Util;

use App\Exceptions\Message;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use RuntimeException;
use UnexpectedValueException;

/**
 * Classe utilitária para chamadas de serviços Rest.
 *
 * @author Squadra Tecnologia S/A.
 */
class RestClient
{
    /**
     * @var mixed
     */
    private $curl;

    /**
     * @var array
     */
    private $options;

    /**
     * @var array
     */
    private $headers;

    /**
     * Construtor privado para garantir o Singleton.
     */
    private function __construct()
    {
        $this->options = [];
        $this->headers = [];
        $this->curl = curl_init();
    }

    /**
     * Fabrica de instância de 'RestClient'.
     *
     * @return RestClient
     */
    public static function newInstance()
    {
        return new RestClient();
    }

    /**
     * Adiciona o parâmetro de configuração 'curl'.
     *
     * @param integer $option
     * @param string $value
     * @return RestClient
     */
    public function addConfig($option, $value)
    {
        $this->options[$option] = $value;
        return $this;
    }

    /**
     * Adiciona o array de parâmetros de configuração 'curl'.
     *
     * @param array $options
     * @return RestClient
     */
    public function addConfigs($options)
    {
        $this->options = array_merge($this->options, $options);
        return $this;
    }

    /**
     * Adiciona o parâmetro ao cabeçalho 'curl'.
     *
     * @param string $value
     * @return RestClient
     */
    public function addHeader($value)
    {
        $this->headers[] = $value;
        return $this;
    }

    /**
     * Adiciona o parâmetro ao cabeçalho 'curl'.
     *
     * @param array $headers
     * @return RestClient
     */
    public function addHeaders($headers)
    {
        $this->headers = array_merge($this->headers, $headers);
        return $this;
    }

    /**
     * Realiza a request http 'post'.
     *
     * @param string $url
     * @param string $data
     * @throws RuntimeException
     * @return mixed
     */
    public function sendPost($url, $data = "")
    {
        try {
            if (empty($url)) {
                throw new InvalidArgumentException(Message::MSG_URL_NAO_INFORMADA);
            }

            curl_setopt_array($this->curl, $this->options);

            curl_setopt($this->curl, CURLOPT_URL, $url);
            curl_setopt($this->curl, CURLOPT_POST, true);
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0);

            $result = curl_exec($this->curl);

            $http_status = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
            if ($http_status < 200 || $http_status >= 300) {
                $retorno = new \stdClass();
                $retorno->httpCode = $http_status;
                $retorno->error = $result;

                return $retorno;
            }

            if ($result === false) {
                $description = curl_error($this->curl);
                static::addLogError($description);
                throw new UnexpectedValueException($description);
            }

            return $result;
        } finally {
            curl_close($this->curl);
        }
    }

    /**
     * Realiza a request http 'put'.
     *
     * @param string $url
     * @param string $data
     * @throws RuntimeException
     * @return mixed
     */
    public function sendPut($url, $data = "")
    {
        return $this->send($url, $data, "PUT");
    }

    /**
     * Realiza a request http 'DELETE'.
     *
     * @param string $url
     * @param string $data
     * @throws RuntimeException
     * @return mixed
     */
    public function sendDelete($url, $data = "")
    {
        return $this->send($url, $data, "DELETE");
    }

    /**
     * Realiza a request http 'get'.
     *
     * @param string $url
     * @throws RuntimeException
     * @return mixed
     */
    public function sendGet($url)
    {
        try {
            if (empty($url)) {
                throw new InvalidArgumentException(Message::MSG_URL_NAO_INFORMADA);
            }

            curl_setopt_array($this->curl, $this->options);

            curl_setopt($this->curl, CURLOPT_URL, $url);
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);

            $result = curl_exec($this->curl);

            if ($result === false) {
                $description = curl_error($this->curl);
                static::addLogError($url);
                static::addLogError($description);
                throw new UnexpectedValueException($description);
            }

            return $result;
        } finally {
            curl_close($this->curl);
        }
    }

    /**
     * Realiza uma requisição POST na url especificada.
     *
     * @param array $headers
     * @param string $url
     *
     * @return mixed
     */
    public static function post($headers, $url)
    {
        $curl = curl_init();

        try {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "");

            return static::getResponse($curl, $url);
        } finally {
            curl_close($curl);
        }
    }

    /**
     * Realiza uma requisição GET na url especificada.
     *
     * @param array $headers
     * @param string $url
     * @return mixed
     */
    public static function get($headers, $url)
    {
        $curl = curl_init();

        try {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            return static::getResponse($curl, $url);
        } finally {
            curl_close($curl);
        }
    }

    /**
     * Realiza um requisição HTTP pela option informada.
     *
     * @param string $url
     * @param string $data
     * @param string $option
     * @return mixed
     */
    private function send($url, $data = "", $option = "")
    {
        try {
            if (empty($url)) {
                throw new InvalidArgumentException(Message::MSG_URL_NAO_INFORMADA);
            }

            curl_setopt_array($this->curl, $this->options);

            curl_setopt($this->curl, CURLOPT_URL, $url);
            curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $option);
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);

            $result = curl_exec($this->curl);

            if ($result === false) {
                $description = curl_error($this->curl);
                static::addLogError($url);
                static::addLogError($description);
                throw new UnexpectedValueException($description);
            }

            return $result;
        } finally {
            curl_close($this->curl);
        }
    }

    /**
     * Retorna o resultado da execução da requisição HTTP conforme os valores informados.
     *
     * @param resource $curl
     * @param string $url
     * @return bool|string
     */
    private static function getResponse($curl, $url)
    {
        $response = curl_exec($curl);

        if ($response === false) {
            $description = curl_error($curl);
            static::addLogError('URL: '.$url);
            static::addLogError('Descrição: '.$description);
            throw new UnexpectedValueException($description);
        }

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpcode != 200) {
            $description = Message::MSG_FALHA_HTTP . ' ' . $httpcode;
            static::addLogError('URL: '.$url);
            static::addLogError('Descrição: '.$description);
            throw new UnexpectedValueException($description);
        }
        return $response;
    }

    /**
     * Adiciona o log de erro no arquivo lumen.log conforme os padrões do Lumen.
     *
     * @param $description
     */
    private static function addLogError($description)
    {
        Log::error(RestClient::class . ': ' . $description);
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
