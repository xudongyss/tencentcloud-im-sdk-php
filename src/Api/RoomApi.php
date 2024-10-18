<?php

namespace TencentCloud\IM\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Tencent\TLSSigAPIv2;
use TencentCloud\IM\ApiException;
use TencentCloud\IM\Configuration;
use TencentCloud\IM\HeaderSelector;
use TencentCloud\IM\ObjectSerializer;

class RoomApi
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
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration   $config = null,
        HeaderSelector  $selector = null
    )
    {
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
     * Operation createRoom
     *
     * 创建房间（https://cloud.tencent.com/document/product/647/104446）
     *
     * @param int $random random (required)
     * @param \TencentCloud\IM\Model\CreateRoomRequest $createRoomRequest createRoomRequest (optional)
     *
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \InvalidArgumentException
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     */
    public function createRoom($random, $createRoomRequest = null)
    {
        list($response) = $this->createRoomWithHttpInfo($random, $createRoomRequest);
        return $response;
    }

    /**
     * Operation createRoomWithHttpInfo
     *
     * 创建房间（https://cloud.tencent.com/document/product/647/104446）
     *
     * @param int $random (required)
     * @param \TencentCloud\IM\Model\CreateRoomRequest $createRoomRequest (optional)
     *
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \InvalidArgumentException
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     */
    public function createRoomWithHttpInfo($random, $createRoomRequest = null)
    {
        $request = $this->createRoomRequest($random, $createRoomRequest);

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
            switch ($statusCode) {
                case 200:
                    if ('\TencentCloud\IM\Model\CreateRoomResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\CreateRoomResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\CreateRoomResponse';
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
                        '\TencentCloud\IM\Model\CreateRoomResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createRoomAsync
     *
     * 创建房间（https://cloud.tencent.com/document/product/647/104446）
     *
     * @param int $random (required)
     * @param \TencentCloud\IM\Model\CreateRoomRequest $createRoomRequest (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \InvalidArgumentException
     */
    public function createRoomAsync($random, $createRoomRequest = null)
    {
        return $this->createRoomAsyncWithHttpInfo($random, $createRoomRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRoomAsyncWithHttpInfo
     *
     * 创建房间（https://cloud.tencent.com/document/product/647/104446）
     *
     * @param int $random (required)
     * @param \TencentCloud\IM\Model\CreateRoomRequest $createRoomRequest (optional)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \InvalidArgumentException
     */
    public function createRoomAsyncWithHttpInfo($random, $createRoomRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CreateRoomResponse';
        $request = $this->createRoomRequest($random, $createRoomRequest);

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
     * Create request for operation 'createRoom'
     *
     * @param int $random (required)
     * @param \TencentCloud\IM\Model\CreateRoomRequest $createRoomRequest (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    protected function createRoomRequest($random, $createRoomRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling createRoom'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/room_engine_http_srv/create_room';
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
        if (isset($createRoomRequest)) {
            $_tempBody = $createRoomRequest;
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
                $httpBody = http_build_query($formParams, "", null, PHP_QUERY_RFC3986);
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

        $query = http_build_query($queryParams, "", null, PHP_QUERY_RFC3986);
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
     * @return array of http client options
     * @throws \RuntimeException on file opening failure
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