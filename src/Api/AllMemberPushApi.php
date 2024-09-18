<?php
/**
 * AllMemberPushApi
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
 * AllMemberPushApi Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM
 */
class AllMemberPushApi
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
     * Operation imAddTag
     *
     * 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImAddTagRequest $imAddTagRequest imAddTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imAddTag($random, $imAddTagRequest = null)
    {
        list($response) = $this->imAddTagWithHttpInfo($random, $imAddTagRequest);
        return $response;
    }

    /**
     * Operation imAddTagWithHttpInfo
     *
     * 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImAddTagRequest $imAddTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imAddTagWithHttpInfo($random, $imAddTagRequest = null)
    {
        $request = $this->imAddTagRequest($random, $imAddTagRequest);

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
     * Operation imAddTagAsync
     *
     * 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImAddTagRequest $imAddTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imAddTagAsync($random, $imAddTagRequest = null)
    {
        return $this->imAddTagAsyncWithHttpInfo($random, $imAddTagRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imAddTagAsyncWithHttpInfo
     *
     * 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImAddTagRequest $imAddTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imAddTagAsyncWithHttpInfo($random, $imAddTagRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imAddTagRequest($random, $imAddTagRequest);

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
     * Create request for operation 'imAddTag'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImAddTagRequest $imAddTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imAddTagRequest($random, $imAddTagRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imAddTag'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_add_tag';
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
        if (isset($imAddTagRequest)) {
            $_tempBody = $imAddTagRequest;
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
     * Operation imGetAttr
     *
     * 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrRequest $imGetAttrRequest imGetAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImGetAttrResponse
     */
    public function imGetAttr($random, $imGetAttrRequest = null)
    {
        list($response) = $this->imGetAttrWithHttpInfo($random, $imGetAttrRequest);
        return $response;
    }

    /**
     * Operation imGetAttrWithHttpInfo
     *
     * 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrRequest $imGetAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImGetAttrResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imGetAttrWithHttpInfo($random, $imGetAttrRequest = null)
    {
        $request = $this->imGetAttrRequest($random, $imGetAttrRequest);

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
                    if ('\TencentCloud\IM\Model\ImGetAttrResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImGetAttrResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImGetAttrResponse';
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
                        '\TencentCloud\IM\Model\ImGetAttrResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation imGetAttrAsync
     *
     * 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrRequest $imGetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetAttrAsync($random, $imGetAttrRequest = null)
    {
        return $this->imGetAttrAsyncWithHttpInfo($random, $imGetAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imGetAttrAsyncWithHttpInfo
     *
     * 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrRequest $imGetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetAttrAsyncWithHttpInfo($random, $imGetAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImGetAttrResponse';
        $request = $this->imGetAttrRequest($random, $imGetAttrRequest);

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
     * Create request for operation 'imGetAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrRequest $imGetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imGetAttrRequest($random, $imGetAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imGetAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_get_attr';
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
        if (isset($imGetAttrRequest)) {
            $_tempBody = $imGetAttrRequest;
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
     * Operation imGetAttrName
     *
     * 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrNameRequest $imGetAttrNameRequest imGetAttrNameRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImGetAttrNameResponse
     */
    public function imGetAttrName($random, $imGetAttrNameRequest = null)
    {
        list($response) = $this->imGetAttrNameWithHttpInfo($random, $imGetAttrNameRequest);
        return $response;
    }

    /**
     * Operation imGetAttrNameWithHttpInfo
     *
     * 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrNameRequest $imGetAttrNameRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImGetAttrNameResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imGetAttrNameWithHttpInfo($random, $imGetAttrNameRequest = null)
    {
        $request = $this->imGetAttrNameRequest($random, $imGetAttrNameRequest);

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
                    if ('\TencentCloud\IM\Model\ImGetAttrNameResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImGetAttrNameResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImGetAttrNameResponse';
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
                        '\TencentCloud\IM\Model\ImGetAttrNameResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation imGetAttrNameAsync
     *
     * 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrNameRequest $imGetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetAttrNameAsync($random, $imGetAttrNameRequest = null)
    {
        return $this->imGetAttrNameAsyncWithHttpInfo($random, $imGetAttrNameRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imGetAttrNameAsyncWithHttpInfo
     *
     * 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrNameRequest $imGetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetAttrNameAsyncWithHttpInfo($random, $imGetAttrNameRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImGetAttrNameResponse';
        $request = $this->imGetAttrNameRequest($random, $imGetAttrNameRequest);

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
     * Create request for operation 'imGetAttrName'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetAttrNameRequest $imGetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imGetAttrNameRequest($random, $imGetAttrNameRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imGetAttrName'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_get_attr_name';
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
        if (isset($imGetAttrNameRequest)) {
            $_tempBody = $imGetAttrNameRequest;
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
     * Operation imGetTag
     *
     * 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImGetTagRequest $imGetTagRequest imGetTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImGetTagResponse
     */
    public function imGetTag($random, $imGetTagRequest = null)
    {
        list($response) = $this->imGetTagWithHttpInfo($random, $imGetTagRequest);
        return $response;
    }

    /**
     * Operation imGetTagWithHttpInfo
     *
     * 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetTagRequest $imGetTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImGetTagResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imGetTagWithHttpInfo($random, $imGetTagRequest = null)
    {
        $request = $this->imGetTagRequest($random, $imGetTagRequest);

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
                    if ('\TencentCloud\IM\Model\ImGetTagResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImGetTagResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImGetTagResponse';
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
                        '\TencentCloud\IM\Model\ImGetTagResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation imGetTagAsync
     *
     * 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetTagRequest $imGetTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetTagAsync($random, $imGetTagRequest = null)
    {
        return $this->imGetTagAsyncWithHttpInfo($random, $imGetTagRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imGetTagAsyncWithHttpInfo
     *
     * 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetTagRequest $imGetTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imGetTagAsyncWithHttpInfo($random, $imGetTagRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImGetTagResponse';
        $request = $this->imGetTagRequest($random, $imGetTagRequest);

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
     * Create request for operation 'imGetTag'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImGetTagRequest $imGetTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imGetTagRequest($random, $imGetTagRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imGetTag'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_get_tag';
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
        if (isset($imGetTagRequest)) {
            $_tempBody = $imGetTagRequest;
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
     * Operation imPush
     *
     * 全员推送（https://cloud.tencent.com/document/product/269/45934）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImPushRequest $imPushRequest imPushRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImPushResponse
     */
    public function imPush($random, $imPushRequest = null)
    {
        list($response) = $this->imPushWithHttpInfo($random, $imPushRequest);
        return $response;
    }

    /**
     * Operation imPushWithHttpInfo
     *
     * 全员推送（https://cloud.tencent.com/document/product/269/45934）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImPushRequest $imPushRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImPushResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imPushWithHttpInfo($random, $imPushRequest = null)
    {
        $request = $this->imPushRequest($random, $imPushRequest);

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
                    if ('\TencentCloud\IM\Model\ImPushResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImPushResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImPushResponse';
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
                        '\TencentCloud\IM\Model\ImPushResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation imPushAsync
     *
     * 全员推送（https://cloud.tencent.com/document/product/269/45934）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImPushRequest $imPushRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imPushAsync($random, $imPushRequest = null)
    {
        return $this->imPushAsyncWithHttpInfo($random, $imPushRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imPushAsyncWithHttpInfo
     *
     * 全员推送（https://cloud.tencent.com/document/product/269/45934）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImPushRequest $imPushRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imPushAsyncWithHttpInfo($random, $imPushRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImPushResponse';
        $request = $this->imPushRequest($random, $imPushRequest);

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
     * Create request for operation 'imPush'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImPushRequest $imPushRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imPushRequest($random, $imPushRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imPush'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_push';
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
        if (isset($imPushRequest)) {
            $_tempBody = $imPushRequest;
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
     * Operation imRemoveAllTags
     *
     * 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAllTagRequest $imRemoveAllTagRequest imRemoveAllTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imRemoveAllTags($random, $imRemoveAllTagRequest = null)
    {
        list($response) = $this->imRemoveAllTagsWithHttpInfo($random, $imRemoveAllTagRequest);
        return $response;
    }

    /**
     * Operation imRemoveAllTagsWithHttpInfo
     *
     * 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAllTagRequest $imRemoveAllTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imRemoveAllTagsWithHttpInfo($random, $imRemoveAllTagRequest = null)
    {
        $request = $this->imRemoveAllTagsRequest($random, $imRemoveAllTagRequest);

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
     * Operation imRemoveAllTagsAsync
     *
     * 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAllTagRequest $imRemoveAllTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveAllTagsAsync($random, $imRemoveAllTagRequest = null)
    {
        return $this->imRemoveAllTagsAsyncWithHttpInfo($random, $imRemoveAllTagRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imRemoveAllTagsAsyncWithHttpInfo
     *
     * 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAllTagRequest $imRemoveAllTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveAllTagsAsyncWithHttpInfo($random, $imRemoveAllTagRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imRemoveAllTagsRequest($random, $imRemoveAllTagRequest);

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
     * Create request for operation 'imRemoveAllTags'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAllTagRequest $imRemoveAllTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imRemoveAllTagsRequest($random, $imRemoveAllTagRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imRemoveAllTags'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_remove_all_tags';
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
        if (isset($imRemoveAllTagRequest)) {
            $_tempBody = $imRemoveAllTagRequest;
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
     * Operation imRemoveAttr
     *
     * 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAttrRequest $imRemoveAttrRequest imRemoveAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imRemoveAttr($random, $imRemoveAttrRequest = null)
    {
        list($response) = $this->imRemoveAttrWithHttpInfo($random, $imRemoveAttrRequest);
        return $response;
    }

    /**
     * Operation imRemoveAttrWithHttpInfo
     *
     * 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAttrRequest $imRemoveAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imRemoveAttrWithHttpInfo($random, $imRemoveAttrRequest = null)
    {
        $request = $this->imRemoveAttrRequest($random, $imRemoveAttrRequest);

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
     * Operation imRemoveAttrAsync
     *
     * 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAttrRequest $imRemoveAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveAttrAsync($random, $imRemoveAttrRequest = null)
    {
        return $this->imRemoveAttrAsyncWithHttpInfo($random, $imRemoveAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imRemoveAttrAsyncWithHttpInfo
     *
     * 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAttrRequest $imRemoveAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveAttrAsyncWithHttpInfo($random, $imRemoveAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imRemoveAttrRequest($random, $imRemoveAttrRequest);

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
     * Create request for operation 'imRemoveAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveAttrRequest $imRemoveAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imRemoveAttrRequest($random, $imRemoveAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imRemoveAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_remove_attr';
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
        if (isset($imRemoveAttrRequest)) {
            $_tempBody = $imRemoveAttrRequest;
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
     * Operation imRemoveTag
     *
     * 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveTagRequest $imRemoveTagRequest imRemoveTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imRemoveTag($random, $imRemoveTagRequest = null)
    {
        list($response) = $this->imRemoveTagWithHttpInfo($random, $imRemoveTagRequest);
        return $response;
    }

    /**
     * Operation imRemoveTagWithHttpInfo
     *
     * 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveTagRequest $imRemoveTagRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imRemoveTagWithHttpInfo($random, $imRemoveTagRequest = null)
    {
        $request = $this->imRemoveTagRequest($random, $imRemoveTagRequest);

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
     * Operation imRemoveTagAsync
     *
     * 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveTagRequest $imRemoveTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveTagAsync($random, $imRemoveTagRequest = null)
    {
        return $this->imRemoveTagAsyncWithHttpInfo($random, $imRemoveTagRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imRemoveTagAsyncWithHttpInfo
     *
     * 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveTagRequest $imRemoveTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imRemoveTagAsyncWithHttpInfo($random, $imRemoveTagRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imRemoveTagRequest($random, $imRemoveTagRequest);

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
     * Create request for operation 'imRemoveTag'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImRemoveTagRequest $imRemoveTagRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imRemoveTagRequest($random, $imRemoveTagRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imRemoveTag'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_remove_tag';
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
        if (isset($imRemoveTagRequest)) {
            $_tempBody = $imRemoveTagRequest;
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
     * Operation imSetAttr
     *
     * 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrRequest $imSetAttrRequest imSetAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imSetAttr($random, $imSetAttrRequest = null)
    {
        list($response) = $this->imSetAttrWithHttpInfo($random, $imSetAttrRequest);
        return $response;
    }

    /**
     * Operation imSetAttrWithHttpInfo
     *
     * 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrRequest $imSetAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imSetAttrWithHttpInfo($random, $imSetAttrRequest = null)
    {
        $request = $this->imSetAttrRequest($random, $imSetAttrRequest);

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
     * Operation imSetAttrAsync
     *
     * 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrRequest $imSetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imSetAttrAsync($random, $imSetAttrRequest = null)
    {
        return $this->imSetAttrAsyncWithHttpInfo($random, $imSetAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imSetAttrAsyncWithHttpInfo
     *
     * 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrRequest $imSetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imSetAttrAsyncWithHttpInfo($random, $imSetAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imSetAttrRequest($random, $imSetAttrRequest);

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
     * Create request for operation 'imSetAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrRequest $imSetAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imSetAttrRequest($random, $imSetAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imSetAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_set_attr';
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
        if (isset($imSetAttrRequest)) {
            $_tempBody = $imSetAttrRequest;
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
     * Operation imSetAttrName
     *
     * 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrNameRequest $imSetAttrNameRequest imSetAttrNameRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function imSetAttrName($random, $imSetAttrNameRequest = null)
    {
        list($response) = $this->imSetAttrNameWithHttpInfo($random, $imSetAttrNameRequest);
        return $response;
    }

    /**
     * Operation imSetAttrNameWithHttpInfo
     *
     * 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrNameRequest $imSetAttrNameRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function imSetAttrNameWithHttpInfo($random, $imSetAttrNameRequest = null)
    {
        $request = $this->imSetAttrNameRequest($random, $imSetAttrNameRequest);

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
     * Operation imSetAttrNameAsync
     *
     * 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrNameRequest $imSetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imSetAttrNameAsync($random, $imSetAttrNameRequest = null)
    {
        return $this->imSetAttrNameAsyncWithHttpInfo($random, $imSetAttrNameRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imSetAttrNameAsyncWithHttpInfo
     *
     * 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrNameRequest $imSetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imSetAttrNameAsyncWithHttpInfo($random, $imSetAttrNameRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->imSetAttrNameRequest($random, $imSetAttrNameRequest);

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
     * Create request for operation 'imSetAttrName'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImSetAttrNameRequest $imSetAttrNameRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function imSetAttrNameRequest($random, $imSetAttrNameRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling imSetAttrName'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/all_member_push/im_set_attr_name';
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
        if (isset($imSetAttrNameRequest)) {
            $_tempBody = $imSetAttrNameRequest;
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
