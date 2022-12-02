<?php
/**
 * AccountApi
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
 * AccountApi Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM
 */
class AccountApi
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
     * Operation accountCheck
     *
     * 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\AccountCheckRequest $accountCheckRequest accountCheckRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\AccountCheckResponse
     */
    public function accountCheck($random, $accountCheckRequest = null)
    {
        list($response) = $this->accountCheckWithHttpInfo($random, $accountCheckRequest);
        return $response;
    }

    /**
     * Operation accountCheckWithHttpInfo
     *
     * 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountCheckRequest $accountCheckRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\AccountCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountCheckWithHttpInfo($random, $accountCheckRequest = null)
    {
        $request = $this->accountCheckRequest($random, $accountCheckRequest);

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
                    if ('\TencentCloud\IM\Model\AccountCheckResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\AccountCheckResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\AccountCheckResponse';
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
                        '\TencentCloud\IM\Model\AccountCheckResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountCheckAsync
     *
     * 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountCheckRequest $accountCheckRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountCheckAsync($random, $accountCheckRequest = null)
    {
        return $this->accountCheckAsyncWithHttpInfo($random, $accountCheckRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountCheckAsyncWithHttpInfo
     *
     * 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountCheckRequest $accountCheckRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountCheckAsyncWithHttpInfo($random, $accountCheckRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\AccountCheckResponse';
        $request = $this->accountCheckRequest($random, $accountCheckRequest);

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
     * Create request for operation 'accountCheck'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountCheckRequest $accountCheckRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountCheckRequest($random, $accountCheckRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling accountCheck'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_open_login_svc/account_check';
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
        if (isset($accountCheckRequest)) {
            $_tempBody = $accountCheckRequest;
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
     * Operation accountDelete
     *
     * 删除帐号（https://cloud.tencent.com/document/product/269/36443）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\AccountDeleteRequest $accountDeleteRequest accountDeleteRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\AccountDeleteResponse
     */
    public function accountDelete($random, $accountDeleteRequest = null)
    {
        list($response) = $this->accountDeleteWithHttpInfo($random, $accountDeleteRequest);
        return $response;
    }

    /**
     * Operation accountDeleteWithHttpInfo
     *
     * 删除帐号（https://cloud.tencent.com/document/product/269/36443）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountDeleteRequest $accountDeleteRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\AccountDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountDeleteWithHttpInfo($random, $accountDeleteRequest = null)
    {
        $request = $this->accountDeleteRequest($random, $accountDeleteRequest);

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
                    if ('\TencentCloud\IM\Model\AccountDeleteResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\AccountDeleteResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\AccountDeleteResponse';
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
                        '\TencentCloud\IM\Model\AccountDeleteResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountDeleteAsync
     *
     * 删除帐号（https://cloud.tencent.com/document/product/269/36443）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountDeleteRequest $accountDeleteRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountDeleteAsync($random, $accountDeleteRequest = null)
    {
        return $this->accountDeleteAsyncWithHttpInfo($random, $accountDeleteRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountDeleteAsyncWithHttpInfo
     *
     * 删除帐号（https://cloud.tencent.com/document/product/269/36443）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountDeleteRequest $accountDeleteRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountDeleteAsyncWithHttpInfo($random, $accountDeleteRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\AccountDeleteResponse';
        $request = $this->accountDeleteRequest($random, $accountDeleteRequest);

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
     * Create request for operation 'accountDelete'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountDeleteRequest $accountDeleteRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountDeleteRequest($random, $accountDeleteRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling accountDelete'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_open_login_svc/account_delete';
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
        if (isset($accountDeleteRequest)) {
            $_tempBody = $accountDeleteRequest;
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
     * Operation accountImport
     *
     * 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\AccountImportRequest $accountImportRequest accountImportRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function accountImport($random, $accountImportRequest = null)
    {
        list($response) = $this->accountImportWithHttpInfo($random, $accountImportRequest);
        return $response;
    }

    /**
     * Operation accountImportWithHttpInfo
     *
     * 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountImportRequest $accountImportRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountImportWithHttpInfo($random, $accountImportRequest = null)
    {
        $request = $this->accountImportRequest($random, $accountImportRequest);

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
     * Operation accountImportAsync
     *
     * 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountImportRequest $accountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountImportAsync($random, $accountImportRequest = null)
    {
        return $this->accountImportAsyncWithHttpInfo($random, $accountImportRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountImportAsyncWithHttpInfo
     *
     * 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountImportRequest $accountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountImportAsyncWithHttpInfo($random, $accountImportRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->accountImportRequest($random, $accountImportRequest);

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
     * Create request for operation 'accountImport'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\AccountImportRequest $accountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountImportRequest($random, $accountImportRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling accountImport'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_open_login_svc/account_import';
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
        if (isset($accountImportRequest)) {
            $_tempBody = $accountImportRequest;
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
     * Operation kick
     *
     * 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\KickRequest $kickRequest kickRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\CommonResponse
     */
    public function kick($random, $kickRequest = null)
    {
        list($response) = $this->kickWithHttpInfo($random, $kickRequest);
        return $response;
    }

    /**
     * Operation kickWithHttpInfo
     *
     * 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\KickRequest $kickRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function kickWithHttpInfo($random, $kickRequest = null)
    {
        $request = $this->kickRequest($random, $kickRequest);

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
     * Operation kickAsync
     *
     * 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\KickRequest $kickRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function kickAsync($random, $kickRequest = null)
    {
        return $this->kickAsyncWithHttpInfo($random, $kickRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation kickAsyncWithHttpInfo
     *
     * 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\KickRequest $kickRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function kickAsyncWithHttpInfo($random, $kickRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\CommonResponse';
        $request = $this->kickRequest($random, $kickRequest);

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
     * Create request for operation 'kick'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\KickRequest $kickRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function kickRequest($random, $kickRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling kick'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_open_login_svc/kick';
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
        if (isset($kickRequest)) {
            $_tempBody = $kickRequest;
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
     * Operation multiAccountImport
     *
     * 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\MultiAccountImportRequest $multiAccountImportRequest multiAccountImportRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\MultiAccountImportResponse
     */
    public function multiAccountImport($random, $multiAccountImportRequest = null)
    {
        list($response) = $this->multiAccountImportWithHttpInfo($random, $multiAccountImportRequest);
        return $response;
    }

    /**
     * Operation multiAccountImportWithHttpInfo
     *
     * 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\MultiAccountImportRequest $multiAccountImportRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\MultiAccountImportResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function multiAccountImportWithHttpInfo($random, $multiAccountImportRequest = null)
    {
        $request = $this->multiAccountImportRequest($random, $multiAccountImportRequest);

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
                    if ('\TencentCloud\IM\Model\MultiAccountImportResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\MultiAccountImportResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\MultiAccountImportResponse';
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
                        '\TencentCloud\IM\Model\MultiAccountImportResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation multiAccountImportAsync
     *
     * 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\MultiAccountImportRequest $multiAccountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multiAccountImportAsync($random, $multiAccountImportRequest = null)
    {
        return $this->multiAccountImportAsyncWithHttpInfo($random, $multiAccountImportRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation multiAccountImportAsyncWithHttpInfo
     *
     * 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\MultiAccountImportRequest $multiAccountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multiAccountImportAsyncWithHttpInfo($random, $multiAccountImportRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\MultiAccountImportResponse';
        $request = $this->multiAccountImportRequest($random, $multiAccountImportRequest);

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
     * Create request for operation 'multiAccountImport'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\MultiAccountImportRequest $multiAccountImportRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function multiAccountImportRequest($random, $multiAccountImportRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling multiAccountImport'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/im_open_login_svc/multiaccount_import';
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
        if (isset($multiAccountImportRequest)) {
            $_tempBody = $multiAccountImportRequest;
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
     * Operation queryOnlineStatus
     *
     * 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）
     *
     * @param  int $random random (required)
     * @param  \TencentCloud\IM\Model\QueryOnlineStatusRequest $queryOnlineStatusRequest queryOnlineStatusRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentCloud\IM\Model\QueryOnlineStatusResponse
     */
    public function queryOnlineStatus($random, $queryOnlineStatusRequest = null)
    {
        list($response) = $this->queryOnlineStatusWithHttpInfo($random, $queryOnlineStatusRequest);
        return $response;
    }

    /**
     * Operation queryOnlineStatusWithHttpInfo
     *
     * 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\QueryOnlineStatusRequest $queryOnlineStatusRequest (optional)
     *
     * @throws \TencentCloud\IM\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentCloud\IM\Model\QueryOnlineStatusResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryOnlineStatusWithHttpInfo($random, $queryOnlineStatusRequest = null)
    {
        $request = $this->queryOnlineStatusRequest($random, $queryOnlineStatusRequest);

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
                    if ('\TencentCloud\IM\Model\QueryOnlineStatusResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TencentCloud\IM\Model\QueryOnlineStatusResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TencentCloud\IM\Model\QueryOnlineStatusResponse';
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
                        '\TencentCloud\IM\Model\QueryOnlineStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryOnlineStatusAsync
     *
     * 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\QueryOnlineStatusRequest $queryOnlineStatusRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryOnlineStatusAsync($random, $queryOnlineStatusRequest = null)
    {
        return $this->queryOnlineStatusAsyncWithHttpInfo($random, $queryOnlineStatusRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryOnlineStatusAsyncWithHttpInfo
     *
     * 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\QueryOnlineStatusRequest $queryOnlineStatusRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryOnlineStatusAsyncWithHttpInfo($random, $queryOnlineStatusRequest = null)
    {
        $returnType = '\TencentCloud\IM\Model\QueryOnlineStatusResponse';
        $request = $this->queryOnlineStatusRequest($random, $queryOnlineStatusRequest);

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
     * Create request for operation 'queryOnlineStatus'
     *
     * @param  int $random (required)
     * @param  \TencentCloud\IM\Model\QueryOnlineStatusRequest $queryOnlineStatusRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryOnlineStatusRequest($random, $queryOnlineStatusRequest = null)
    {
        // verify the required parameter 'random' is set
        if ($random === null || (is_array($random) && count($random) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $random when calling queryOnlineStatus'
            );
        }

        $api = new TLSSigAPIv2($this->config->getSdkappid(), $this->config->getKey());
        $sig = $api->genSig($this->config->getIdentifier());

        $resourcePath = '/v4/openim/query_online_status';
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
        if (isset($queryOnlineStatusRequest)) {
            $_tempBody = $queryOnlineStatusRequest;
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
