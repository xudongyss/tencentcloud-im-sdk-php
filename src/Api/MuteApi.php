<?php
/**
 * MuteApi
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM
 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TencentCloud\IM\ApiException;
use TencentCloud\IM\Configuration;
use TencentCloud\IM\HeaderSelector;
use TencentCloud\IM\ObjectSerializer;
use Tencent\TLSSigAPIv2;

/**
 * MuteApi Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM
 */
class MuteApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getnospeaking
     *
     * 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetNoSpeakingRequest $getNoSpeakingRequest getNoSpeakingRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetNoSpeakingResponse
     */
    public function getnospeaking($random, $getNoSpeakingRequest = null)
    {
        list($response) = $this->getnospeakingWithHttpInfo($random, $getNoSpeakingRequest);
        return $response;
    }

    /**
     * Operation getnospeakingWithHttpInfo
     *
     * 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetNoSpeakingRequest $getNoSpeakingRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetNoSpeakingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getnospeakingWithHttpInfo($random, $getNoSpeakingRequest = null)
    {
        $request = $this->getnospeakingRequest($random, $getNoSpeakingRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\TencentCloud\IM\Model\GetNoSpeakingResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetNoSpeakingResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetNoSpeakingResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TencentCloud\IM\Model\GetNoSpeakingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getnospeakingAsync
     *
     * 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetNoSpeakingRequest $getNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getnospeakingAsync($random, $getNoSpeakingRequest = null)
    {
        return $this->getnospeakingAsyncWithHttpInfo($random, $getNoSpeakingRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getnospeakingAsyncWithHttpInfo
     *
     * 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetNoSpeakingRequest $getNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getnospeakingAsyncWithHttpInfo($random, $getNoSpeakingRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetNoSpeakingResponse';
        $request = $this->getnospeakingRequest($random, $getNoSpeakingRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getnospeaking'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetNoSpeakingRequest $getNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getnospeakingRequest($random, $getNoSpeakingRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getnospeaking'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/openconfigsvr/getnospeaking';
        $formParams = [];
        $queryParams = ["sdkappid" => $this->config->getSdkappid(), "identifier" => $this->config->getIdentifier(),
        "usersig" => $sig, "contenttype" => "json"];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($random !== null) {
            $queryParams['random'] = ObjectSerializer::toQueryValue($random);
        }


        // body params
        $_tempBody = null;
        if (isset($getNoSpeakingRequest)) {
            $_tempBody = $getNoSpeakingRequest;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation setnospeaking
     *
     * 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\SetNoSpeakingRequest $setNoSpeakingRequest setNoSpeakingRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function setnospeaking($random, $setNoSpeakingRequest = null)
    {
        list($response) = $this->setnospeakingWithHttpInfo($random, $setNoSpeakingRequest);
        return $response;
    }

    /**
     * Operation setnospeakingWithHttpInfo
     *
     * 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetNoSpeakingRequest $setNoSpeakingRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setnospeakingWithHttpInfo($random, $setNoSpeakingRequest = null)
    {
        $request = $this->setnospeakingRequest($random, $setNoSpeakingRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\TencentCloud\IM\Model\CommonResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\CommonResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\CommonResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TencentCloud\IM\Model\CommonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setnospeakingAsync
     *
     * 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetNoSpeakingRequest $setNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setnospeakingAsync($random, $setNoSpeakingRequest = null)
    {
        return $this->setnospeakingAsyncWithHttpInfo($random, $setNoSpeakingRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setnospeakingAsyncWithHttpInfo
     *
     * 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetNoSpeakingRequest $setNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setnospeakingAsyncWithHttpInfo($random, $setNoSpeakingRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->setnospeakingRequest($random, $setNoSpeakingRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'setnospeaking'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetNoSpeakingRequest $setNoSpeakingRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setnospeakingRequest($random, $setNoSpeakingRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling setnospeaking'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/openconfigsvr/setnospeaking';
        $formParams = [];
        $queryParams = ["sdkappid" => $this->config->getSdkappid(), "identifier" => $this->config->getIdentifier(),
        "usersig" => $sig, "contenttype" => "json"];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($random !== null) {
            $queryParams['random'] = ObjectSerializer::toQueryValue($random);
        }


        // body params
        $_tempBody = null;
        if (isset($setNoSpeakingRequest)) {
            $_tempBody = $setNoSpeakingRequest;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
