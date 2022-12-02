<?php
/**
 * OperationApi
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
 * OperationApi Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM
 */
class OperationApi
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
     * Operation allowBannedObject
     *
     * 聊天文件解封（https://cloud.tencent.com/document/product/269/74776）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\AllowBannedObjectRequest $allowBannedObjectRequest allowBannedObjectRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function allowBannedObject($random, $allowBannedObjectRequest = null)
    {
        list($response) = $this->allowBannedObjectWithHttpInfo($random, $allowBannedObjectRequest);
        return $response;
    }

    /**
     * Operation allowBannedObjectWithHttpInfo
     *
     * 聊天文件解封（https://cloud.tencent.com/document/product/269/74776）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AllowBannedObjectRequest $allowBannedObjectRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function allowBannedObjectWithHttpInfo($random, $allowBannedObjectRequest = null)
    {
        $request = $this->allowBannedObjectRequest($random, $allowBannedObjectRequest);

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
     * Operation allowBannedObjectAsync
     *
     * 聊天文件解封（https://cloud.tencent.com/document/product/269/74776）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AllowBannedObjectRequest $allowBannedObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allowBannedObjectAsync($random, $allowBannedObjectRequest = null)
    {
        return $this->allowBannedObjectAsyncWithHttpInfo($random, $allowBannedObjectRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation allowBannedObjectAsyncWithHttpInfo
     *
     * 聊天文件解封（https://cloud.tencent.com/document/product/269/74776）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AllowBannedObjectRequest $allowBannedObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function allowBannedObjectAsyncWithHttpInfo($random, $allowBannedObjectRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->allowBannedObjectRequest($random, $allowBannedObjectRequest);

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
     * Create request for operation 'allowBannedObject'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AllowBannedObjectRequest $allowBannedObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function allowBannedObjectRequest($random, $allowBannedObjectRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling allowBannedObject'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_cos_msg/allow_banned_object';
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
        if (isset($allowBannedObjectRequest)) {
            $_tempBody = $allowBannedObjectRequest;
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
     * Operation forbidIllegalObject
     *
     * 聊天文件封禁（https://cloud.tencent.com/document/product/269/74775）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ForbidIllegalObjectRequest $forbidIllegalObjectRequest forbidIllegalObjectRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function forbidIllegalObject($random, $forbidIllegalObjectRequest = null)
    {
        list($response) = $this->forbidIllegalObjectWithHttpInfo($random, $forbidIllegalObjectRequest);
        return $response;
    }

    /**
     * Operation forbidIllegalObjectWithHttpInfo
     *
     * 聊天文件封禁（https://cloud.tencent.com/document/product/269/74775）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidIllegalObjectRequest $forbidIllegalObjectRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function forbidIllegalObjectWithHttpInfo($random, $forbidIllegalObjectRequest = null)
    {
        $request = $this->forbidIllegalObjectRequest($random, $forbidIllegalObjectRequest);

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
     * Operation forbidIllegalObjectAsync
     *
     * 聊天文件封禁（https://cloud.tencent.com/document/product/269/74775）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidIllegalObjectRequest $forbidIllegalObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forbidIllegalObjectAsync($random, $forbidIllegalObjectRequest = null)
    {
        return $this->forbidIllegalObjectAsyncWithHttpInfo($random, $forbidIllegalObjectRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forbidIllegalObjectAsyncWithHttpInfo
     *
     * 聊天文件封禁（https://cloud.tencent.com/document/product/269/74775）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidIllegalObjectRequest $forbidIllegalObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forbidIllegalObjectAsyncWithHttpInfo($random, $forbidIllegalObjectRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->forbidIllegalObjectRequest($random, $forbidIllegalObjectRequest);

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
     * Create request for operation 'forbidIllegalObject'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidIllegalObjectRequest $forbidIllegalObjectRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function forbidIllegalObjectRequest($random, $forbidIllegalObjectRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling forbidIllegalObject'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_cos_msg/forbid_illegal_object';
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
        if (isset($forbidIllegalObjectRequest)) {
            $_tempBody = $forbidIllegalObjectRequest;
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
     * Operation getCosSig
     *
     * 聊天文件签名（https://cloud.tencent.com/document/product/269/74777）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetCosSigRequest $getCosSigRequest getCosSigRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetCosSigResponse
     */
    public function getCosSig($random, $getCosSigRequest = null)
    {
        list($response) = $this->getCosSigWithHttpInfo($random, $getCosSigRequest);
        return $response;
    }

    /**
     * Operation getCosSigWithHttpInfo
     *
     * 聊天文件签名（https://cloud.tencent.com/document/product/269/74777）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetCosSigRequest $getCosSigRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetCosSigResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCosSigWithHttpInfo($random, $getCosSigRequest = null)
    {
        $request = $this->getCosSigRequest($random, $getCosSigRequest);

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
                    if ('\TencentCloud\IM\Model\GetCosSigResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetCosSigResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetCosSigResponse';
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
                        '\TencentCloud\IM\Model\GetCosSigResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCosSigAsync
     *
     * 聊天文件签名（https://cloud.tencent.com/document/product/269/74777）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetCosSigRequest $getCosSigRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCosSigAsync($random, $getCosSigRequest = null)
    {
        return $this->getCosSigAsyncWithHttpInfo($random, $getCosSigRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCosSigAsyncWithHttpInfo
     *
     * 聊天文件签名（https://cloud.tencent.com/document/product/269/74777）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetCosSigRequest $getCosSigRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCosSigAsyncWithHttpInfo($random, $getCosSigRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetCosSigResponse';
        $request = $this->getCosSigRequest($random, $getCosSigRequest);

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
     * Create request for operation 'getCosSig'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetCosSigRequest $getCosSigRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCosSigRequest($random, $getCosSigRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getCosSig'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_cos_msg/get_cos_sig';
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
        if (isset($getCosSigRequest)) {
            $_tempBody = $getCosSigRequest;
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
     * Operation getHistory
     *
     * 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetOperateMsgHistoryRequest $getOperateMsgHistoryRequest getOperateMsgHistoryRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetOperateMsgHistoryResponse
     */
    public function getHistory($random, $getOperateMsgHistoryRequest = null)
    {
        list($response) = $this->getHistoryWithHttpInfo($random, $getOperateMsgHistoryRequest);
        return $response;
    }

    /**
     * Operation getHistoryWithHttpInfo
     *
     * 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOperateMsgHistoryRequest $getOperateMsgHistoryRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetOperateMsgHistoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistoryWithHttpInfo($random, $getOperateMsgHistoryRequest = null)
    {
        $request = $this->getHistoryRequest($random, $getOperateMsgHistoryRequest);

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
                    if ('\TencentCloud\IM\Model\GetOperateMsgHistoryResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetOperateMsgHistoryResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetOperateMsgHistoryResponse';
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
                        '\TencentCloud\IM\Model\GetOperateMsgHistoryResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistoryAsync
     *
     * 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOperateMsgHistoryRequest $getOperateMsgHistoryRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoryAsync($random, $getOperateMsgHistoryRequest = null)
    {
        return $this->getHistoryAsyncWithHttpInfo($random, $getOperateMsgHistoryRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistoryAsyncWithHttpInfo
     *
     * 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOperateMsgHistoryRequest $getOperateMsgHistoryRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoryAsyncWithHttpInfo($random, $getOperateMsgHistoryRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetOperateMsgHistoryResponse';
        $request = $this->getHistoryRequest($random, $getOperateMsgHistoryRequest);

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
     * Create request for operation 'getHistory'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOperateMsgHistoryRequest $getOperateMsgHistoryRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getHistoryRequest($random, $getOperateMsgHistoryRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getHistory'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/open_msg_svc/get_history';
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
        if (isset($getOperateMsgHistoryRequest)) {
            $_tempBody = $getOperateMsgHistoryRequest;
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
     * Operation getIPList
     *
     * 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetIPListRequest $getIPListRequest getIPListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetIPListResponse
     */
    public function getIPList($random, $getIPListRequest = null)
    {
        list($response) = $this->getIPListWithHttpInfo($random, $getIPListRequest);
        return $response;
    }

    /**
     * Operation getIPListWithHttpInfo
     *
     * 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetIPListRequest $getIPListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetIPListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIPListWithHttpInfo($random, $getIPListRequest = null)
    {
        $request = $this->getIPListRequest($random, $getIPListRequest);

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
                    if ('\TencentCloud\IM\Model\GetIPListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetIPListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetIPListResponse';
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
                        '\TencentCloud\IM\Model\GetIPListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getIPListAsync
     *
     * 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetIPListRequest $getIPListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIPListAsync($random, $getIPListRequest = null)
    {
        return $this->getIPListAsyncWithHttpInfo($random, $getIPListRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIPListAsyncWithHttpInfo
     *
     * 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetIPListRequest $getIPListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIPListAsyncWithHttpInfo($random, $getIPListRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetIPListResponse';
        $request = $this->getIPListRequest($random, $getIPListRequest);

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
     * Create request for operation 'getIPList'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetIPListRequest $getIPListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIPListRequest($random, $getIPListRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getIPList'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/ConfigSvc/GetIPList';
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
        if (isset($getIPListRequest)) {
            $_tempBody = $getIPListRequest;
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
     * Operation getappinfo
     *
     * 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetAppInfoRequest $getAppInfoRequest getAppInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetAppInfoResponse
     */
    public function getappinfo($random, $getAppInfoRequest = null)
    {
        list($response) = $this->getappinfoWithHttpInfo($random, $getAppInfoRequest);
        return $response;
    }

    /**
     * Operation getappinfoWithHttpInfo
     *
     * 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppInfoRequest $getAppInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetAppInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getappinfoWithHttpInfo($random, $getAppInfoRequest = null)
    {
        $request = $this->getappinfoRequest($random, $getAppInfoRequest);

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
                    if ('\TencentCloud\IM\Model\GetAppInfoResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetAppInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetAppInfoResponse';
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
                        '\TencentCloud\IM\Model\GetAppInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getappinfoAsync
     *
     * 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppInfoRequest $getAppInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getappinfoAsync($random, $getAppInfoRequest = null)
    {
        return $this->getappinfoAsyncWithHttpInfo($random, $getAppInfoRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getappinfoAsyncWithHttpInfo
     *
     * 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppInfoRequest $getAppInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getappinfoAsyncWithHttpInfo($random, $getAppInfoRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetAppInfoResponse';
        $request = $this->getappinfoRequest($random, $getAppInfoRequest);

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
     * Create request for operation 'getappinfo'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppInfoRequest $getAppInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getappinfoRequest($random, $getAppInfoRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getappinfo'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/openconfigsvr/getappinfo';
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
        if (isset($getAppInfoRequest)) {
            $_tempBody = $getAppInfoRequest;
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
