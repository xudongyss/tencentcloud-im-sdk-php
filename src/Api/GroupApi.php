<?php
/**
 * GroupApi
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
 * GroupApi Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM
 */
class GroupApi
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
     * Operation addGroupMember
     *
     * 增加群成员（https://cloud.tencent.com/document/product/269/1621）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\AddGroupMemberRequest $addGroupMemberRequest addGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\AddGroupMemberResponse
     */
    public function addGroupMember($random, $addGroupMemberRequest = null)
    {
        list($response) = $this->addGroupMemberWithHttpInfo($random, $addGroupMemberRequest);
        return $response;
    }

    /**
     * Operation addGroupMemberWithHttpInfo
     *
     * 增加群成员（https://cloud.tencent.com/document/product/269/1621）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AddGroupMemberRequest $addGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\AddGroupMemberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addGroupMemberWithHttpInfo($random, $addGroupMemberRequest = null)
    {
        $request = $this->addGroupMemberRequest($random, $addGroupMemberRequest);

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
                    if ('\TencentCloud\IM\Model\AddGroupMemberResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\AddGroupMemberResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\AddGroupMemberResponse';
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
                        '\TencentCloud\IM\Model\AddGroupMemberResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addGroupMemberAsync
     *
     * 增加群成员（https://cloud.tencent.com/document/product/269/1621）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AddGroupMemberRequest $addGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addGroupMemberAsync($random, $addGroupMemberRequest = null)
    {
        return $this->addGroupMemberAsyncWithHttpInfo($random, $addGroupMemberRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addGroupMemberAsyncWithHttpInfo
     *
     * 增加群成员（https://cloud.tencent.com/document/product/269/1621）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AddGroupMemberRequest $addGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addGroupMemberAsyncWithHttpInfo($random, $addGroupMemberRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\AddGroupMemberResponse';
        $request = $this->addGroupMemberRequest($random, $addGroupMemberRequest);

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
     * Create request for operation 'addGroupMember'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AddGroupMemberRequest $addGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addGroupMemberRequest($random, $addGroupMemberRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling addGroupMember'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/add_group_member';
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
        if (isset($addGroupMemberRequest)) {
            $_tempBody = $addGroupMemberRequest;
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
     * Operation changeGroupOwner
     *
     * 转让群主（https://cloud.tencent.com/document/product/269/1633）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ChangeGroupOwnerRequest $changeGroupOwnerRequest changeGroupOwnerRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function changeGroupOwner($random, $changeGroupOwnerRequest = null)
    {
        list($response) = $this->changeGroupOwnerWithHttpInfo($random, $changeGroupOwnerRequest);
        return $response;
    }

    /**
     * Operation changeGroupOwnerWithHttpInfo
     *
     * 转让群主（https://cloud.tencent.com/document/product/269/1633）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ChangeGroupOwnerRequest $changeGroupOwnerRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeGroupOwnerWithHttpInfo($random, $changeGroupOwnerRequest = null)
    {
        $request = $this->changeGroupOwnerRequest($random, $changeGroupOwnerRequest);

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
     * Operation changeGroupOwnerAsync
     *
     * 转让群主（https://cloud.tencent.com/document/product/269/1633）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ChangeGroupOwnerRequest $changeGroupOwnerRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeGroupOwnerAsync($random, $changeGroupOwnerRequest = null)
    {
        return $this->changeGroupOwnerAsyncWithHttpInfo($random, $changeGroupOwnerRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation changeGroupOwnerAsyncWithHttpInfo
     *
     * 转让群主（https://cloud.tencent.com/document/product/269/1633）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ChangeGroupOwnerRequest $changeGroupOwnerRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function changeGroupOwnerAsyncWithHttpInfo($random, $changeGroupOwnerRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->changeGroupOwnerRequest($random, $changeGroupOwnerRequest);

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
     * Create request for operation 'changeGroupOwner'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ChangeGroupOwnerRequest $changeGroupOwnerRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function changeGroupOwnerRequest($random, $changeGroupOwnerRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling changeGroupOwner'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/change_group_owner';
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
        if (isset($changeGroupOwnerRequest)) {
            $_tempBody = $changeGroupOwnerRequest;
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
     * Operation clearGroupAttr
     *
     * 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ClearGroupAttrRequest $clearGroupAttrRequest clearGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function clearGroupAttr($random, $clearGroupAttrRequest = null)
    {
        list($response) = $this->clearGroupAttrWithHttpInfo($random, $clearGroupAttrRequest);
        return $response;
    }

    /**
     * Operation clearGroupAttrWithHttpInfo
     *
     * 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ClearGroupAttrRequest $clearGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function clearGroupAttrWithHttpInfo($random, $clearGroupAttrRequest = null)
    {
        $request = $this->clearGroupAttrRequest($random, $clearGroupAttrRequest);

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
     * Operation clearGroupAttrAsync
     *
     * 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ClearGroupAttrRequest $clearGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clearGroupAttrAsync($random, $clearGroupAttrRequest = null)
    {
        return $this->clearGroupAttrAsyncWithHttpInfo($random, $clearGroupAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clearGroupAttrAsyncWithHttpInfo
     *
     * 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ClearGroupAttrRequest $clearGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clearGroupAttrAsyncWithHttpInfo($random, $clearGroupAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->clearGroupAttrRequest($random, $clearGroupAttrRequest);

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
     * Create request for operation 'clearGroupAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ClearGroupAttrRequest $clearGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clearGroupAttrRequest($random, $clearGroupAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling clearGroupAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/clear_group_attr';
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
        if (isset($clearGroupAttrRequest)) {
            $_tempBody = $clearGroupAttrRequest;
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
     * Operation createGroup
     *
     * 创建群组（https://cloud.tencent.com/document/product/269/1615）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\CreateGroupRequest $createGroupRequest createGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CreateGroupResponse
     */
    public function createGroup($random, $createGroupRequest = null)
    {
        list($response) = $this->createGroupWithHttpInfo($random, $createGroupRequest);
        return $response;
    }

    /**
     * Operation createGroupWithHttpInfo
     *
     * 创建群组（https://cloud.tencent.com/document/product/269/1615）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\CreateGroupRequest $createGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CreateGroupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGroupWithHttpInfo($random, $createGroupRequest = null)
    {
        $request = $this->createGroupRequest($random, $createGroupRequest);

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
                    if ('\TencentCloud\IM\Model\CreateGroupResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\CreateGroupResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\CreateGroupResponse';
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
                        '\TencentCloud\IM\Model\CreateGroupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createGroupAsync
     *
     * 创建群组（https://cloud.tencent.com/document/product/269/1615）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\CreateGroupRequest $createGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGroupAsync($random, $createGroupRequest = null)
    {
        return $this->createGroupAsyncWithHttpInfo($random, $createGroupRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGroupAsyncWithHttpInfo
     *
     * 创建群组（https://cloud.tencent.com/document/product/269/1615）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\CreateGroupRequest $createGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGroupAsyncWithHttpInfo($random, $createGroupRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CreateGroupResponse';
        $request = $this->createGroupRequest($random, $createGroupRequest);

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
     * Create request for operation 'createGroup'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\CreateGroupRequest $createGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createGroupRequest($random, $createGroupRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling createGroup'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/create_group';
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
        if (isset($createGroupRequest)) {
            $_tempBody = $createGroupRequest;
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
     * Operation deleteGroupMember
     *
     * 删除群成员（https://cloud.tencent.com/document/product/269/1622）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMemberRequest $deleteGroupMemberRequest deleteGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function deleteGroupMember($random, $deleteGroupMemberRequest = null)
    {
        list($response) = $this->deleteGroupMemberWithHttpInfo($random, $deleteGroupMemberRequest);
        return $response;
    }

    /**
     * Operation deleteGroupMemberWithHttpInfo
     *
     * 删除群成员（https://cloud.tencent.com/document/product/269/1622）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMemberRequest $deleteGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGroupMemberWithHttpInfo($random, $deleteGroupMemberRequest = null)
    {
        $request = $this->deleteGroupMemberRequest($random, $deleteGroupMemberRequest);

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
     * Operation deleteGroupMemberAsync
     *
     * 删除群成员（https://cloud.tencent.com/document/product/269/1622）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMemberRequest $deleteGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGroupMemberAsync($random, $deleteGroupMemberRequest = null)
    {
        return $this->deleteGroupMemberAsyncWithHttpInfo($random, $deleteGroupMemberRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGroupMemberAsyncWithHttpInfo
     *
     * 删除群成员（https://cloud.tencent.com/document/product/269/1622）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMemberRequest $deleteGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGroupMemberAsyncWithHttpInfo($random, $deleteGroupMemberRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->deleteGroupMemberRequest($random, $deleteGroupMemberRequest);

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
     * Create request for operation 'deleteGroupMember'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMemberRequest $deleteGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteGroupMemberRequest($random, $deleteGroupMemberRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling deleteGroupMember'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/delete_group_member';
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
        if (isset($deleteGroupMemberRequest)) {
            $_tempBody = $deleteGroupMemberRequest;
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
     * Operation deleteGroupMsgBySender
     *
     * 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest $deleteGroupMsgBySenderRequest deleteGroupMsgBySenderRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function deleteGroupMsgBySender($random, $deleteGroupMsgBySenderRequest = null)
    {
        list($response) = $this->deleteGroupMsgBySenderWithHttpInfo($random, $deleteGroupMsgBySenderRequest);
        return $response;
    }

    /**
     * Operation deleteGroupMsgBySenderWithHttpInfo
     *
     * 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest $deleteGroupMsgBySenderRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGroupMsgBySenderWithHttpInfo($random, $deleteGroupMsgBySenderRequest = null)
    {
        $request = $this->deleteGroupMsgBySenderRequest($random, $deleteGroupMsgBySenderRequest);

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
     * Operation deleteGroupMsgBySenderAsync
     *
     * 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest $deleteGroupMsgBySenderRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGroupMsgBySenderAsync($random, $deleteGroupMsgBySenderRequest = null)
    {
        return $this->deleteGroupMsgBySenderAsyncWithHttpInfo($random, $deleteGroupMsgBySenderRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGroupMsgBySenderAsyncWithHttpInfo
     *
     * 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest $deleteGroupMsgBySenderRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGroupMsgBySenderAsyncWithHttpInfo($random, $deleteGroupMsgBySenderRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->deleteGroupMsgBySenderRequest($random, $deleteGroupMsgBySenderRequest);

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
     * Create request for operation 'deleteGroupMsgBySender'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DeleteGroupMsgBySenderRequest $deleteGroupMsgBySenderRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteGroupMsgBySenderRequest($random, $deleteGroupMsgBySenderRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling deleteGroupMsgBySender'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/delete_group_msg_by_sender';
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
        if (isset($deleteGroupMsgBySenderRequest)) {
            $_tempBody = $deleteGroupMsgBySenderRequest;
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
     * Operation destroyGroup
     *
     * 解散群组(https://cloud.tencent.com/document/product/269/1624)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\DestroyGroupRequest $destroyGroupRequest destroyGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function destroyGroup($random, $destroyGroupRequest = null)
    {
        list($response) = $this->destroyGroupWithHttpInfo($random, $destroyGroupRequest);
        return $response;
    }

    /**
     * Operation destroyGroupWithHttpInfo
     *
     * 解散群组(https://cloud.tencent.com/document/product/269/1624)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DestroyGroupRequest $destroyGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyGroupWithHttpInfo($random, $destroyGroupRequest = null)
    {
        $request = $this->destroyGroupRequest($random, $destroyGroupRequest);

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
     * Operation destroyGroupAsync
     *
     * 解散群组(https://cloud.tencent.com/document/product/269/1624)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DestroyGroupRequest $destroyGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyGroupAsync($random, $destroyGroupRequest = null)
    {
        return $this->destroyGroupAsyncWithHttpInfo($random, $destroyGroupRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyGroupAsyncWithHttpInfo
     *
     * 解散群组(https://cloud.tencent.com/document/product/269/1624)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DestroyGroupRequest $destroyGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyGroupAsyncWithHttpInfo($random, $destroyGroupRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->destroyGroupRequest($random, $destroyGroupRequest);

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
     * Create request for operation 'destroyGroup'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\DestroyGroupRequest $destroyGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyGroupRequest($random, $destroyGroupRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling destroyGroup'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/destroy_group';
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
        if (isset($destroyGroupRequest)) {
            $_tempBody = $destroyGroupRequest;
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
     * Operation forbidSendMsg
     *
     * 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ForbidSendMsgRequest $forbidSendMsgRequest forbidSendMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function forbidSendMsg($random, $forbidSendMsgRequest = null)
    {
        list($response) = $this->forbidSendMsgWithHttpInfo($random, $forbidSendMsgRequest);
        return $response;
    }

    /**
     * Operation forbidSendMsgWithHttpInfo
     *
     * 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidSendMsgRequest $forbidSendMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function forbidSendMsgWithHttpInfo($random, $forbidSendMsgRequest = null)
    {
        $request = $this->forbidSendMsgRequest($random, $forbidSendMsgRequest);

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
     * Operation forbidSendMsgAsync
     *
     * 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidSendMsgRequest $forbidSendMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forbidSendMsgAsync($random, $forbidSendMsgRequest = null)
    {
        return $this->forbidSendMsgAsyncWithHttpInfo($random, $forbidSendMsgRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forbidSendMsgAsyncWithHttpInfo
     *
     * 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidSendMsgRequest $forbidSendMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forbidSendMsgAsyncWithHttpInfo($random, $forbidSendMsgRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->forbidSendMsgRequest($random, $forbidSendMsgRequest);

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
     * Create request for operation 'forbidSendMsg'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ForbidSendMsgRequest $forbidSendMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function forbidSendMsgRequest($random, $forbidSendMsgRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling forbidSendMsg'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/forbid_send_msg';
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
        if (isset($forbidSendMsgRequest)) {
            $_tempBody = $forbidSendMsgRequest;
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
     * Operation getAppidGroupList
     *
     * 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetAppidGroupListRequest $getAppidGroupListRequest getAppidGroupListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetAppidGroupListResponse
     */
    public function getAppidGroupList($random, $getAppidGroupListRequest = null)
    {
        list($response) = $this->getAppidGroupListWithHttpInfo($random, $getAppidGroupListRequest);
        return $response;
    }

    /**
     * Operation getAppidGroupListWithHttpInfo
     *
     * 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppidGroupListRequest $getAppidGroupListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetAppidGroupListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAppidGroupListWithHttpInfo($random, $getAppidGroupListRequest = null)
    {
        $request = $this->getAppidGroupListRequest($random, $getAppidGroupListRequest);

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
                    if ('\TencentCloud\IM\Model\GetAppidGroupListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetAppidGroupListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetAppidGroupListResponse';
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
                        '\TencentCloud\IM\Model\GetAppidGroupListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAppidGroupListAsync
     *
     * 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppidGroupListRequest $getAppidGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAppidGroupListAsync($random, $getAppidGroupListRequest = null)
    {
        return $this->getAppidGroupListAsyncWithHttpInfo($random, $getAppidGroupListRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAppidGroupListAsyncWithHttpInfo
     *
     * 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppidGroupListRequest $getAppidGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAppidGroupListAsyncWithHttpInfo($random, $getAppidGroupListRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetAppidGroupListResponse';
        $request = $this->getAppidGroupListRequest($random, $getAppidGroupListRequest);

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
     * Create request for operation 'getAppidGroupList'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetAppidGroupListRequest $getAppidGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAppidGroupListRequest($random, $getAppidGroupListRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getAppidGroupList'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_appid_group_list';
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
        if (isset($getAppidGroupListRequest)) {
            $_tempBody = $getAppidGroupListRequest;
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
     * Operation getGroupAttr
     *
     * 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetGroupAttrRequest $getGroupAttrRequest getGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetGroupAttrResponse
     */
    public function getGroupAttr($random, $getGroupAttrRequest = null)
    {
        list($response) = $this->getGroupAttrWithHttpInfo($random, $getGroupAttrRequest);
        return $response;
    }

    /**
     * Operation getGroupAttrWithHttpInfo
     *
     * 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupAttrRequest $getGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetGroupAttrResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupAttrWithHttpInfo($random, $getGroupAttrRequest = null)
    {
        $request = $this->getGroupAttrRequest($random, $getGroupAttrRequest);

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
                    if ('\TencentCloud\IM\Model\GetGroupAttrResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetGroupAttrResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetGroupAttrResponse';
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
                        '\TencentCloud\IM\Model\GetGroupAttrResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGroupAttrAsync
     *
     * 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupAttrRequest $getGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupAttrAsync($random, $getGroupAttrRequest = null)
    {
        return $this->getGroupAttrAsyncWithHttpInfo($random, $getGroupAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupAttrAsyncWithHttpInfo
     *
     * 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupAttrRequest $getGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupAttrAsyncWithHttpInfo($random, $getGroupAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetGroupAttrResponse';
        $request = $this->getGroupAttrRequest($random, $getGroupAttrRequest);

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
     * Create request for operation 'getGroupAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupAttrRequest $getGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGroupAttrRequest($random, $getGroupAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getGroupAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_group_attr';
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
        if (isset($getGroupAttrRequest)) {
            $_tempBody = $getGroupAttrRequest;
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
     * Operation getGroupInfo
     *
     * 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetGroupInfoRequest $getGroupInfoRequest getGroupInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetGroupInfoResponse
     */
    public function getGroupInfo($random, $getGroupInfoRequest = null)
    {
        list($response) = $this->getGroupInfoWithHttpInfo($random, $getGroupInfoRequest);
        return $response;
    }

    /**
     * Operation getGroupInfoWithHttpInfo
     *
     * 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupInfoRequest $getGroupInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetGroupInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupInfoWithHttpInfo($random, $getGroupInfoRequest = null)
    {
        $request = $this->getGroupInfoRequest($random, $getGroupInfoRequest);

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
                    if ('\TencentCloud\IM\Model\GetGroupInfoResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetGroupInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetGroupInfoResponse';
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
                        '\TencentCloud\IM\Model\GetGroupInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGroupInfoAsync
     *
     * 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupInfoRequest $getGroupInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupInfoAsync($random, $getGroupInfoRequest = null)
    {
        return $this->getGroupInfoAsyncWithHttpInfo($random, $getGroupInfoRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupInfoAsyncWithHttpInfo
     *
     * 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupInfoRequest $getGroupInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupInfoAsyncWithHttpInfo($random, $getGroupInfoRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetGroupInfoResponse';
        $request = $this->getGroupInfoRequest($random, $getGroupInfoRequest);

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
     * Create request for operation 'getGroupInfo'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupInfoRequest $getGroupInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGroupInfoRequest($random, $getGroupInfoRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getGroupInfo'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_group_info';
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
        if (isset($getGroupInfoRequest)) {
            $_tempBody = $getGroupInfoRequest;
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
     * Operation getGroupMemberInfo
     *
     * 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetGroupMemberInfoRequest $getGroupMemberInfoRequest getGroupMemberInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetGroupMemberInfoResponse
     */
    public function getGroupMemberInfo($random, $getGroupMemberInfoRequest = null)
    {
        list($response) = $this->getGroupMemberInfoWithHttpInfo($random, $getGroupMemberInfoRequest);
        return $response;
    }

    /**
     * Operation getGroupMemberInfoWithHttpInfo
     *
     * 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupMemberInfoRequest $getGroupMemberInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetGroupMemberInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupMemberInfoWithHttpInfo($random, $getGroupMemberInfoRequest = null)
    {
        $request = $this->getGroupMemberInfoRequest($random, $getGroupMemberInfoRequest);

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
                    if ('\TencentCloud\IM\Model\GetGroupMemberInfoResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetGroupMemberInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetGroupMemberInfoResponse';
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
                        '\TencentCloud\IM\Model\GetGroupMemberInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGroupMemberInfoAsync
     *
     * 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupMemberInfoRequest $getGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupMemberInfoAsync($random, $getGroupMemberInfoRequest = null)
    {
        return $this->getGroupMemberInfoAsyncWithHttpInfo($random, $getGroupMemberInfoRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupMemberInfoAsyncWithHttpInfo
     *
     * 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupMemberInfoRequest $getGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupMemberInfoAsyncWithHttpInfo($random, $getGroupMemberInfoRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetGroupMemberInfoResponse';
        $request = $this->getGroupMemberInfoRequest($random, $getGroupMemberInfoRequest);

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
     * Create request for operation 'getGroupMemberInfo'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupMemberInfoRequest $getGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGroupMemberInfoRequest($random, $getGroupMemberInfoRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getGroupMemberInfo'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_group_member_info';
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
        if (isset($getGroupMemberInfoRequest)) {
            $_tempBody = $getGroupMemberInfoRequest;
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
     * Operation getGroupShuttedUin
     *
     * 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetGroupShuttedUinRequest $getGroupShuttedUinRequest getGroupShuttedUinRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetGroupShuttedUinResponse
     */
    public function getGroupShuttedUin($random, $getGroupShuttedUinRequest = null)
    {
        list($response) = $this->getGroupShuttedUinWithHttpInfo($random, $getGroupShuttedUinRequest);
        return $response;
    }

    /**
     * Operation getGroupShuttedUinWithHttpInfo
     *
     * 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupShuttedUinRequest $getGroupShuttedUinRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetGroupShuttedUinResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupShuttedUinWithHttpInfo($random, $getGroupShuttedUinRequest = null)
    {
        $request = $this->getGroupShuttedUinRequest($random, $getGroupShuttedUinRequest);

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
                    if ('\TencentCloud\IM\Model\GetGroupShuttedUinResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetGroupShuttedUinResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetGroupShuttedUinResponse';
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
                        '\TencentCloud\IM\Model\GetGroupShuttedUinResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGroupShuttedUinAsync
     *
     * 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupShuttedUinRequest $getGroupShuttedUinRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupShuttedUinAsync($random, $getGroupShuttedUinRequest = null)
    {
        return $this->getGroupShuttedUinAsyncWithHttpInfo($random, $getGroupShuttedUinRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupShuttedUinAsyncWithHttpInfo
     *
     * 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupShuttedUinRequest $getGroupShuttedUinRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupShuttedUinAsyncWithHttpInfo($random, $getGroupShuttedUinRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetGroupShuttedUinResponse';
        $request = $this->getGroupShuttedUinRequest($random, $getGroupShuttedUinRequest);

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
     * Create request for operation 'getGroupShuttedUin'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetGroupShuttedUinRequest $getGroupShuttedUinRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGroupShuttedUinRequest($random, $getGroupShuttedUinRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getGroupShuttedUin'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_group_shutted_uin';
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
        if (isset($getGroupShuttedUinRequest)) {
            $_tempBody = $getGroupShuttedUinRequest;
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
     * Operation getJoinedGroupList
     *
     * 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetJoinedGroupListRequest $getJoinedGroupListRequest getJoinedGroupListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetJoinedGroupListResponse
     */
    public function getJoinedGroupList($random, $getJoinedGroupListRequest = null)
    {
        list($response) = $this->getJoinedGroupListWithHttpInfo($random, $getJoinedGroupListRequest);
        return $response;
    }

    /**
     * Operation getJoinedGroupListWithHttpInfo
     *
     * 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetJoinedGroupListRequest $getJoinedGroupListRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetJoinedGroupListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getJoinedGroupListWithHttpInfo($random, $getJoinedGroupListRequest = null)
    {
        $request = $this->getJoinedGroupListRequest($random, $getJoinedGroupListRequest);

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
                    if ('\TencentCloud\IM\Model\GetJoinedGroupListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetJoinedGroupListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetJoinedGroupListResponse';
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
                        '\TencentCloud\IM\Model\GetJoinedGroupListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getJoinedGroupListAsync
     *
     * 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetJoinedGroupListRequest $getJoinedGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJoinedGroupListAsync($random, $getJoinedGroupListRequest = null)
    {
        return $this->getJoinedGroupListAsyncWithHttpInfo($random, $getJoinedGroupListRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getJoinedGroupListAsyncWithHttpInfo
     *
     * 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetJoinedGroupListRequest $getJoinedGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJoinedGroupListAsyncWithHttpInfo($random, $getJoinedGroupListRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetJoinedGroupListResponse';
        $request = $this->getJoinedGroupListRequest($random, $getJoinedGroupListRequest);

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
     * Create request for operation 'getJoinedGroupList'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetJoinedGroupListRequest $getJoinedGroupListRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getJoinedGroupListRequest($random, $getJoinedGroupListRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getJoinedGroupList'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_joined_group_list';
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
        if (isset($getJoinedGroupListRequest)) {
            $_tempBody = $getJoinedGroupListRequest;
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
     * Operation getOnlineMemberNum
     *
     * 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetOnlineMemberNumRequest $getOnlineMemberNumRequest getOnlineMemberNumRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetOnlineMemberNumResponse
     */
    public function getOnlineMemberNum($random, $getOnlineMemberNumRequest = null)
    {
        list($response) = $this->getOnlineMemberNumWithHttpInfo($random, $getOnlineMemberNumRequest);
        return $response;
    }

    /**
     * Operation getOnlineMemberNumWithHttpInfo
     *
     * 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOnlineMemberNumRequest $getOnlineMemberNumRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetOnlineMemberNumResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOnlineMemberNumWithHttpInfo($random, $getOnlineMemberNumRequest = null)
    {
        $request = $this->getOnlineMemberNumRequest($random, $getOnlineMemberNumRequest);

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
                    if ('\TencentCloud\IM\Model\GetOnlineMemberNumResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetOnlineMemberNumResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetOnlineMemberNumResponse';
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
                        '\TencentCloud\IM\Model\GetOnlineMemberNumResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOnlineMemberNumAsync
     *
     * 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOnlineMemberNumRequest $getOnlineMemberNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOnlineMemberNumAsync($random, $getOnlineMemberNumRequest = null)
    {
        return $this->getOnlineMemberNumAsyncWithHttpInfo($random, $getOnlineMemberNumRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOnlineMemberNumAsyncWithHttpInfo
     *
     * 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOnlineMemberNumRequest $getOnlineMemberNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOnlineMemberNumAsyncWithHttpInfo($random, $getOnlineMemberNumRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetOnlineMemberNumResponse';
        $request = $this->getOnlineMemberNumRequest($random, $getOnlineMemberNumRequest);

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
     * Create request for operation 'getOnlineMemberNum'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetOnlineMemberNumRequest $getOnlineMemberNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOnlineMemberNumRequest($random, $getOnlineMemberNumRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getOnlineMemberNum'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_online_member_num';
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
        if (isset($getOnlineMemberNumRequest)) {
            $_tempBody = $getOnlineMemberNumRequest;
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
     * Operation getRoleInGroup
     *
     * 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GetRoleInGroupRequest $getRoleInGroupRequest getRoleInGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GetRoleInGroupResponse
     */
    public function getRoleInGroup($random, $getRoleInGroupRequest = null)
    {
        list($response) = $this->getRoleInGroupWithHttpInfo($random, $getRoleInGroupRequest);
        return $response;
    }

    /**
     * Operation getRoleInGroupWithHttpInfo
     *
     * 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetRoleInGroupRequest $getRoleInGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GetRoleInGroupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoleInGroupWithHttpInfo($random, $getRoleInGroupRequest = null)
    {
        $request = $this->getRoleInGroupRequest($random, $getRoleInGroupRequest);

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
                    if ('\TencentCloud\IM\Model\GetRoleInGroupResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GetRoleInGroupResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GetRoleInGroupResponse';
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
                        '\TencentCloud\IM\Model\GetRoleInGroupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRoleInGroupAsync
     *
     * 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetRoleInGroupRequest $getRoleInGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoleInGroupAsync($random, $getRoleInGroupRequest = null)
    {
        return $this->getRoleInGroupAsyncWithHttpInfo($random, $getRoleInGroupRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRoleInGroupAsyncWithHttpInfo
     *
     * 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetRoleInGroupRequest $getRoleInGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRoleInGroupAsyncWithHttpInfo($random, $getRoleInGroupRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GetRoleInGroupResponse';
        $request = $this->getRoleInGroupRequest($random, $getRoleInGroupRequest);

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
     * Create request for operation 'getRoleInGroup'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GetRoleInGroupRequest $getRoleInGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRoleInGroupRequest($random, $getRoleInGroupRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling getRoleInGroup'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/get_role_in_group';
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
        if (isset($getRoleInGroupRequest)) {
            $_tempBody = $getRoleInGroupRequest;
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
     * Operation groupMsgGetSimple
     *
     * 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgGetSimpleRequest $groupMsgGetSimpleRequest groupMsgGetSimpleRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GroupMsgGetSimpleResponse
     */
    public function groupMsgGetSimple($random, $groupMsgGetSimpleRequest = null)
    {
        list($response) = $this->groupMsgGetSimpleWithHttpInfo($random, $groupMsgGetSimpleRequest);
        return $response;
    }

    /**
     * Operation groupMsgGetSimpleWithHttpInfo
     *
     * 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgGetSimpleRequest $groupMsgGetSimpleRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GroupMsgGetSimpleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function groupMsgGetSimpleWithHttpInfo($random, $groupMsgGetSimpleRequest = null)
    {
        $request = $this->groupMsgGetSimpleRequest($random, $groupMsgGetSimpleRequest);

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
                    if ('\TencentCloud\IM\Model\GroupMsgGetSimpleResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GroupMsgGetSimpleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GroupMsgGetSimpleResponse';
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
                        '\TencentCloud\IM\Model\GroupMsgGetSimpleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation groupMsgGetSimpleAsync
     *
     * 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgGetSimpleRequest $groupMsgGetSimpleRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function groupMsgGetSimpleAsync($random, $groupMsgGetSimpleRequest = null)
    {
        return $this->groupMsgGetSimpleAsyncWithHttpInfo($random, $groupMsgGetSimpleRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation groupMsgGetSimpleAsyncWithHttpInfo
     *
     * 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgGetSimpleRequest $groupMsgGetSimpleRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function groupMsgGetSimpleAsyncWithHttpInfo($random, $groupMsgGetSimpleRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GroupMsgGetSimpleResponse';
        $request = $this->groupMsgGetSimpleRequest($random, $groupMsgGetSimpleRequest);

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
     * Create request for operation 'groupMsgGetSimple'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgGetSimpleRequest $groupMsgGetSimpleRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function groupMsgGetSimpleRequest($random, $groupMsgGetSimpleRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling groupMsgGetSimple'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/group_msg_get_simple';
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
        if (isset($groupMsgGetSimpleRequest)) {
            $_tempBody = $groupMsgGetSimpleRequest;
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
     * Operation groupMsgRecall
     *
     * 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgRecallRequest $groupMsgRecallRequest groupMsgRecallRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\GroupMsgRecallResponse
     */
    public function groupMsgRecall($random, $groupMsgRecallRequest = null)
    {
        list($response) = $this->groupMsgRecallWithHttpInfo($random, $groupMsgRecallRequest);
        return $response;
    }

    /**
     * Operation groupMsgRecallWithHttpInfo
     *
     * 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgRecallRequest $groupMsgRecallRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\GroupMsgRecallResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function groupMsgRecallWithHttpInfo($random, $groupMsgRecallRequest = null)
    {
        $request = $this->groupMsgRecallRequest($random, $groupMsgRecallRequest);

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
                    if ('\TencentCloud\IM\Model\GroupMsgRecallResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\GroupMsgRecallResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\GroupMsgRecallResponse';
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
                        '\TencentCloud\IM\Model\GroupMsgRecallResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation groupMsgRecallAsync
     *
     * 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgRecallRequest $groupMsgRecallRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function groupMsgRecallAsync($random, $groupMsgRecallRequest = null)
    {
        return $this->groupMsgRecallAsyncWithHttpInfo($random, $groupMsgRecallRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation groupMsgRecallAsyncWithHttpInfo
     *
     * 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgRecallRequest $groupMsgRecallRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function groupMsgRecallAsyncWithHttpInfo($random, $groupMsgRecallRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\GroupMsgRecallResponse';
        $request = $this->groupMsgRecallRequest($random, $groupMsgRecallRequest);

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
     * Create request for operation 'groupMsgRecall'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\GroupMsgRecallRequest $groupMsgRecallRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function groupMsgRecallRequest($random, $groupMsgRecallRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling groupMsgRecall'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/group_msg_recall';
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
        if (isset($groupMsgRecallRequest)) {
            $_tempBody = $groupMsgRecallRequest;
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
     * Operation importGroup
     *
     * 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupRequest $importGroupRequest importGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImportGroupResponse
     */
    public function importGroup($random, $importGroupRequest = null)
    {
        list($response) = $this->importGroupWithHttpInfo($random, $importGroupRequest);
        return $response;
    }

    /**
     * Operation importGroupWithHttpInfo
     *
     * 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupRequest $importGroupRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImportGroupResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function importGroupWithHttpInfo($random, $importGroupRequest = null)
    {
        $request = $this->importGroupRequest($random, $importGroupRequest);

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
                    if ('\TencentCloud\IM\Model\ImportGroupResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImportGroupResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImportGroupResponse';
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
                        '\TencentCloud\IM\Model\ImportGroupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation importGroupAsync
     *
     * 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupRequest $importGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupAsync($random, $importGroupRequest = null)
    {
        return $this->importGroupAsyncWithHttpInfo($random, $importGroupRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation importGroupAsyncWithHttpInfo
     *
     * 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupRequest $importGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupAsyncWithHttpInfo($random, $importGroupRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImportGroupResponse';
        $request = $this->importGroupRequest($random, $importGroupRequest);

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
     * Create request for operation 'importGroup'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupRequest $importGroupRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function importGroupRequest($random, $importGroupRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling importGroup'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/import_group';
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
        if (isset($importGroupRequest)) {
            $_tempBody = $importGroupRequest;
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
     * Operation importGroupMember
     *
     * 导入群成员（https://cloud.tencent.com/document/product/269/1636）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMemberRequest $importGroupMemberRequest importGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImportGroupMemberResponse
     */
    public function importGroupMember($random, $importGroupMemberRequest = null)
    {
        list($response) = $this->importGroupMemberWithHttpInfo($random, $importGroupMemberRequest);
        return $response;
    }

    /**
     * Operation importGroupMemberWithHttpInfo
     *
     * 导入群成员（https://cloud.tencent.com/document/product/269/1636）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMemberRequest $importGroupMemberRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImportGroupMemberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function importGroupMemberWithHttpInfo($random, $importGroupMemberRequest = null)
    {
        $request = $this->importGroupMemberRequest($random, $importGroupMemberRequest);

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
                    if ('\TencentCloud\IM\Model\ImportGroupMemberResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImportGroupMemberResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImportGroupMemberResponse';
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
                        '\TencentCloud\IM\Model\ImportGroupMemberResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation importGroupMemberAsync
     *
     * 导入群成员（https://cloud.tencent.com/document/product/269/1636）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMemberRequest $importGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupMemberAsync($random, $importGroupMemberRequest = null)
    {
        return $this->importGroupMemberAsyncWithHttpInfo($random, $importGroupMemberRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation importGroupMemberAsyncWithHttpInfo
     *
     * 导入群成员（https://cloud.tencent.com/document/product/269/1636）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMemberRequest $importGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupMemberAsyncWithHttpInfo($random, $importGroupMemberRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImportGroupMemberResponse';
        $request = $this->importGroupMemberRequest($random, $importGroupMemberRequest);

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
     * Create request for operation 'importGroupMember'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMemberRequest $importGroupMemberRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function importGroupMemberRequest($random, $importGroupMemberRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling importGroupMember'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/import_group_member';
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
        if (isset($importGroupMemberRequest)) {
            $_tempBody = $importGroupMemberRequest;
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
     * Operation importGroupMsg
     *
     * 导入群消息（https://cloud.tencent.com/document/product/269/1635）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMsgRequest $importGroupMsgRequest importGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\ImportGroupMsgResponse
     */
    public function importGroupMsg($random, $importGroupMsgRequest = null)
    {
        list($response) = $this->importGroupMsgWithHttpInfo($random, $importGroupMsgRequest);
        return $response;
    }

    /**
     * Operation importGroupMsgWithHttpInfo
     *
     * 导入群消息（https://cloud.tencent.com/document/product/269/1635）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMsgRequest $importGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\ImportGroupMsgResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function importGroupMsgWithHttpInfo($random, $importGroupMsgRequest = null)
    {
        $request = $this->importGroupMsgRequest($random, $importGroupMsgRequest);

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
                    if ('\TencentCloud\IM\Model\ImportGroupMsgResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\ImportGroupMsgResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\ImportGroupMsgResponse';
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
                        '\TencentCloud\IM\Model\ImportGroupMsgResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation importGroupMsgAsync
     *
     * 导入群消息（https://cloud.tencent.com/document/product/269/1635）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMsgRequest $importGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupMsgAsync($random, $importGroupMsgRequest = null)
    {
        return $this->importGroupMsgAsyncWithHttpInfo($random, $importGroupMsgRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation importGroupMsgAsyncWithHttpInfo
     *
     * 导入群消息（https://cloud.tencent.com/document/product/269/1635）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMsgRequest $importGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importGroupMsgAsyncWithHttpInfo($random, $importGroupMsgRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\ImportGroupMsgResponse';
        $request = $this->importGroupMsgRequest($random, $importGroupMsgRequest);

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
     * Create request for operation 'importGroupMsg'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ImportGroupMsgRequest $importGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function importGroupMsgRequest($random, $importGroupMsgRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling importGroupMsg'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/import_group_msg';
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
        if (isset($importGroupMsgRequest)) {
            $_tempBody = $importGroupMsgRequest;
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
     * Operation modifyGroupAttr
     *
     * 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupAttrRequest $modifyGroupAttrRequest modifyGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function modifyGroupAttr($random, $modifyGroupAttrRequest = null)
    {
        list($response) = $this->modifyGroupAttrWithHttpInfo($random, $modifyGroupAttrRequest);
        return $response;
    }

    /**
     * Operation modifyGroupAttrWithHttpInfo
     *
     * 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupAttrRequest $modifyGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyGroupAttrWithHttpInfo($random, $modifyGroupAttrRequest = null)
    {
        $request = $this->modifyGroupAttrRequest($random, $modifyGroupAttrRequest);

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
     * Operation modifyGroupAttrAsync
     *
     * 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupAttrRequest $modifyGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupAttrAsync($random, $modifyGroupAttrRequest = null)
    {
        return $this->modifyGroupAttrAsyncWithHttpInfo($random, $modifyGroupAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyGroupAttrAsyncWithHttpInfo
     *
     * 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupAttrRequest $modifyGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupAttrAsyncWithHttpInfo($random, $modifyGroupAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->modifyGroupAttrRequest($random, $modifyGroupAttrRequest);

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
     * Create request for operation 'modifyGroupAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupAttrRequest $modifyGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyGroupAttrRequest($random, $modifyGroupAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling modifyGroupAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/modify_group_attr';
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
        if (isset($modifyGroupAttrRequest)) {
            $_tempBody = $modifyGroupAttrRequest;
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
     * Operation modifyGroupBaseInfo
     *
     * 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest $modifyGroupBaseInfoRequest modifyGroupBaseInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function modifyGroupBaseInfo($random, $modifyGroupBaseInfoRequest = null)
    {
        list($response) = $this->modifyGroupBaseInfoWithHttpInfo($random, $modifyGroupBaseInfoRequest);
        return $response;
    }

    /**
     * Operation modifyGroupBaseInfoWithHttpInfo
     *
     * 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest $modifyGroupBaseInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyGroupBaseInfoWithHttpInfo($random, $modifyGroupBaseInfoRequest = null)
    {
        $request = $this->modifyGroupBaseInfoRequest($random, $modifyGroupBaseInfoRequest);

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
     * Operation modifyGroupBaseInfoAsync
     *
     * 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest $modifyGroupBaseInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupBaseInfoAsync($random, $modifyGroupBaseInfoRequest = null)
    {
        return $this->modifyGroupBaseInfoAsyncWithHttpInfo($random, $modifyGroupBaseInfoRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyGroupBaseInfoAsyncWithHttpInfo
     *
     * 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest $modifyGroupBaseInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupBaseInfoAsyncWithHttpInfo($random, $modifyGroupBaseInfoRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->modifyGroupBaseInfoRequest($random, $modifyGroupBaseInfoRequest);

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
     * Create request for operation 'modifyGroupBaseInfo'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupBaseInfoRequest $modifyGroupBaseInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyGroupBaseInfoRequest($random, $modifyGroupBaseInfoRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling modifyGroupBaseInfo'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/modify_group_base_info';
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
        if (isset($modifyGroupBaseInfoRequest)) {
            $_tempBody = $modifyGroupBaseInfoRequest;
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
     * Operation modifyGroupMemberInfo
     *
     * 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest $modifyGroupMemberInfoRequest modifyGroupMemberInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function modifyGroupMemberInfo($random, $modifyGroupMemberInfoRequest = null)
    {
        list($response) = $this->modifyGroupMemberInfoWithHttpInfo($random, $modifyGroupMemberInfoRequest);
        return $response;
    }

    /**
     * Operation modifyGroupMemberInfoWithHttpInfo
     *
     * 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest $modifyGroupMemberInfoRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyGroupMemberInfoWithHttpInfo($random, $modifyGroupMemberInfoRequest = null)
    {
        $request = $this->modifyGroupMemberInfoRequest($random, $modifyGroupMemberInfoRequest);

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
     * Operation modifyGroupMemberInfoAsync
     *
     * 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest $modifyGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupMemberInfoAsync($random, $modifyGroupMemberInfoRequest = null)
    {
        return $this->modifyGroupMemberInfoAsyncWithHttpInfo($random, $modifyGroupMemberInfoRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyGroupMemberInfoAsyncWithHttpInfo
     *
     * 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest $modifyGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupMemberInfoAsyncWithHttpInfo($random, $modifyGroupMemberInfoRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->modifyGroupMemberInfoRequest($random, $modifyGroupMemberInfoRequest);

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
     * Create request for operation 'modifyGroupMemberInfo'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMemberInfoRequest $modifyGroupMemberInfoRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyGroupMemberInfoRequest($random, $modifyGroupMemberInfoRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling modifyGroupMemberInfo'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/modify_group_member_info';
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
        if (isset($modifyGroupMemberInfoRequest)) {
            $_tempBody = $modifyGroupMemberInfoRequest;
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
     * Operation modifyGroupMsg
     *
     * 修改群聊历史消息（https://cloud.tencent.com/document/product/269/74741）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMsgRequest $modifyGroupMsgRequest modifyGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function modifyGroupMsg($random, $modifyGroupMsgRequest = null)
    {
        list($response) = $this->modifyGroupMsgWithHttpInfo($random, $modifyGroupMsgRequest);
        return $response;
    }

    /**
     * Operation modifyGroupMsgWithHttpInfo
     *
     * 修改群聊历史消息（https://cloud.tencent.com/document/product/269/74741）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMsgRequest $modifyGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyGroupMsgWithHttpInfo($random, $modifyGroupMsgRequest = null)
    {
        $request = $this->modifyGroupMsgRequest($random, $modifyGroupMsgRequest);

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
     * Operation modifyGroupMsgAsync
     *
     * 修改群聊历史消息（https://cloud.tencent.com/document/product/269/74741）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMsgRequest $modifyGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupMsgAsync($random, $modifyGroupMsgRequest = null)
    {
        return $this->modifyGroupMsgAsyncWithHttpInfo($random, $modifyGroupMsgRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyGroupMsgAsyncWithHttpInfo
     *
     * 修改群聊历史消息（https://cloud.tencent.com/document/product/269/74741）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMsgRequest $modifyGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGroupMsgAsyncWithHttpInfo($random, $modifyGroupMsgRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->modifyGroupMsgRequest($random, $modifyGroupMsgRequest);

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
     * Create request for operation 'modifyGroupMsg'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\ModifyGroupMsgRequest $modifyGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyGroupMsgRequest($random, $modifyGroupMsgRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling modifyGroupMsg'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/openim/modify_group_msg';
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
        if (isset($modifyGroupMsgRequest)) {
            $_tempBody = $modifyGroupMsgRequest;
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
     * Operation sendGroupMsg
     *
     * 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\SendGroupMsgRequest $sendGroupMsgRequest sendGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\SendGroupMsgResponse
     */
    public function sendGroupMsg($random, $sendGroupMsgRequest = null)
    {
        list($response) = $this->sendGroupMsgWithHttpInfo($random, $sendGroupMsgRequest);
        return $response;
    }

    /**
     * Operation sendGroupMsgWithHttpInfo
     *
     * 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupMsgRequest $sendGroupMsgRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\SendGroupMsgResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendGroupMsgWithHttpInfo($random, $sendGroupMsgRequest = null)
    {
        $request = $this->sendGroupMsgRequest($random, $sendGroupMsgRequest);

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
                    if ('\TencentCloud\IM\Model\SendGroupMsgResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\SendGroupMsgResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\SendGroupMsgResponse';
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
                        '\TencentCloud\IM\Model\SendGroupMsgResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendGroupMsgAsync
     *
     * 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupMsgRequest $sendGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendGroupMsgAsync($random, $sendGroupMsgRequest = null)
    {
        return $this->sendGroupMsgAsyncWithHttpInfo($random, $sendGroupMsgRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendGroupMsgAsyncWithHttpInfo
     *
     * 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupMsgRequest $sendGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendGroupMsgAsyncWithHttpInfo($random, $sendGroupMsgRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\SendGroupMsgResponse';
        $request = $this->sendGroupMsgRequest($random, $sendGroupMsgRequest);

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
     * Create request for operation 'sendGroupMsg'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupMsgRequest $sendGroupMsgRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendGroupMsgRequest($random, $sendGroupMsgRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling sendGroupMsg'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/send_group_msg';
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
        if (isset($sendGroupMsgRequest)) {
            $_tempBody = $sendGroupMsgRequest;
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
     * Operation sendGroupSystemNotification
     *
     * 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\SendGroupSystemNotificationRequest $sendGroupSystemNotificationRequest sendGroupSystemNotificationRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function sendGroupSystemNotification($random, $sendGroupSystemNotificationRequest = null)
    {
        list($response) = $this->sendGroupSystemNotificationWithHttpInfo($random, $sendGroupSystemNotificationRequest);
        return $response;
    }

    /**
     * Operation sendGroupSystemNotificationWithHttpInfo
     *
     * 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupSystemNotificationRequest $sendGroupSystemNotificationRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendGroupSystemNotificationWithHttpInfo($random, $sendGroupSystemNotificationRequest = null)
    {
        $request = $this->sendGroupSystemNotificationRequest($random, $sendGroupSystemNotificationRequest);

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
     * Operation sendGroupSystemNotificationAsync
     *
     * 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupSystemNotificationRequest $sendGroupSystemNotificationRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendGroupSystemNotificationAsync($random, $sendGroupSystemNotificationRequest = null)
    {
        return $this->sendGroupSystemNotificationAsyncWithHttpInfo($random, $sendGroupSystemNotificationRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendGroupSystemNotificationAsyncWithHttpInfo
     *
     * 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupSystemNotificationRequest $sendGroupSystemNotificationRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendGroupSystemNotificationAsyncWithHttpInfo($random, $sendGroupSystemNotificationRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->sendGroupSystemNotificationRequest($random, $sendGroupSystemNotificationRequest);

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
     * Create request for operation 'sendGroupSystemNotification'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SendGroupSystemNotificationRequest $sendGroupSystemNotificationRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendGroupSystemNotificationRequest($random, $sendGroupSystemNotificationRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling sendGroupSystemNotification'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/send_group_system_notification';
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
        if (isset($sendGroupSystemNotificationRequest)) {
            $_tempBody = $sendGroupSystemNotificationRequest;
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
     * Operation setGroupAttr
     *
     * 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\SetGroupAttrRequest $setGroupAttrRequest setGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function setGroupAttr($random, $setGroupAttrRequest = null)
    {
        list($response) = $this->setGroupAttrWithHttpInfo($random, $setGroupAttrRequest);
        return $response;
    }

    /**
     * Operation setGroupAttrWithHttpInfo
     *
     * 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetGroupAttrRequest $setGroupAttrRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setGroupAttrWithHttpInfo($random, $setGroupAttrRequest = null)
    {
        $request = $this->setGroupAttrRequest($random, $setGroupAttrRequest);

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
     * Operation setGroupAttrAsync
     *
     * 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetGroupAttrRequest $setGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGroupAttrAsync($random, $setGroupAttrRequest = null)
    {
        return $this->setGroupAttrAsyncWithHttpInfo($random, $setGroupAttrRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setGroupAttrAsyncWithHttpInfo
     *
     * 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetGroupAttrRequest $setGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGroupAttrAsyncWithHttpInfo($random, $setGroupAttrRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->setGroupAttrRequest($random, $setGroupAttrRequest);

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
     * Create request for operation 'setGroupAttr'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetGroupAttrRequest $setGroupAttrRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setGroupAttrRequest($random, $setGroupAttrRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling setGroupAttr'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/set_group_attr';
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
        if (isset($setGroupAttrRequest)) {
            $_tempBody = $setGroupAttrRequest;
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
     * Operation setUnreadMsgNum
     *
     * 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\SetUnreadMsgNumRequest $setUnreadMsgNumRequest setUnreadMsgNumRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function setUnreadMsgNum($random, $setUnreadMsgNumRequest = null)
    {
        list($response) = $this->setUnreadMsgNumWithHttpInfo($random, $setUnreadMsgNumRequest);
        return $response;
    }

    /**
     * Operation setUnreadMsgNumWithHttpInfo
     *
     * 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetUnreadMsgNumRequest $setUnreadMsgNumRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setUnreadMsgNumWithHttpInfo($random, $setUnreadMsgNumRequest = null)
    {
        $request = $this->setUnreadMsgNumRequest($random, $setUnreadMsgNumRequest);

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
     * Operation setUnreadMsgNumAsync
     *
     * 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetUnreadMsgNumRequest $setUnreadMsgNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setUnreadMsgNumAsync($random, $setUnreadMsgNumRequest = null)
    {
        return $this->setUnreadMsgNumAsyncWithHttpInfo($random, $setUnreadMsgNumRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setUnreadMsgNumAsyncWithHttpInfo
     *
     * 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetUnreadMsgNumRequest $setUnreadMsgNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setUnreadMsgNumAsyncWithHttpInfo($random, $setUnreadMsgNumRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->setUnreadMsgNumRequest($random, $setUnreadMsgNumRequest);

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
     * Create request for operation 'setUnreadMsgNum'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\SetUnreadMsgNumRequest $setUnreadMsgNumRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setUnreadMsgNumRequest($random, $setUnreadMsgNumRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling setUnreadMsgNum'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genUserSig($this->config->getIdentifier());

        $resourcePath = '/v4/group_open_http_svc/set_unread_msg_num';
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
        if (isset($setUnreadMsgNumRequest)) {
            $_tempBody = $setUnreadMsgNumRequest;
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
