<?php
/**
 * GiftCardAccountGuestGiftCardAccountManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Krak\MagentoApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Krak\MagentoApiClient\ApiException;
use Krak\MagentoApiClient\Configuration;
use Krak\MagentoApiClient\HeaderSelector;
use Krak\MagentoApiClient\ObjectSerializer;

/**
 * GiftCardAccountGuestGiftCardAccountManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftCardAccountGuestGiftCardAccountManagementV1Api
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost
     *
     * @param  string $cartId cartId (required)
     * @param  \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = null)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsync($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = null)
    {
        return $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostAsyncWithHttpInfo($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = null)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost'
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostRequest($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost'
            );
        }

        $resourcePath = '/V1/carts/guest-carts/{cartId}/giftCards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cartId !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cartId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody)) {
            $_tempBody = $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet
     *
     * @param  string $cartId cartId (required)
     * @param  string $giftCardCode giftCardCode (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return float
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cartId, $giftCardCode);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of float, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cartId, $giftCardCode)
    {
        $returnType = 'float';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cartId, $giftCardCode);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        'float',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsync($cartId, $giftCardCode)
    {
        return $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo($cartId, $giftCardCode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetAsyncWithHttpInfo($cartId, $giftCardCode)
    {
        $returnType = 'float';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cartId, $giftCardCode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetRequest($cartId, $giftCardCode)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
            );
        }
        // verify the required parameter 'giftCardCode' is set
        if ($giftCardCode === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $giftCardCode when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet'
            );
        }

        $resourcePath = '/V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cartId !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cartId),
                $resourcePath
            );
        }
        // path params
        if ($giftCardCode !== null) {
            $resourcePath = str_replace(
                '{' . 'giftCardCode' . '}',
                ObjectSerializer::toPathValue($giftCardCode),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete
     *
     * @param  string $cartId cartId (required)
     * @param  string $giftCardCode giftCardCode (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($cartId, $giftCardCode);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($cartId, $giftCardCode)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteRequest($cartId, $giftCardCode);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteAsync($cartId, $giftCardCode)
    {
        return $this->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteAsyncWithHttpInfo($cartId, $giftCardCode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteAsyncWithHttpInfo($cartId, $giftCardCode)
    {
        $returnType = 'bool';
        $request = $this->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteRequest($cartId, $giftCardCode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete'
     *
     * @param  string $cartId (required)
     * @param  string $giftCardCode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteRequest($cartId, $giftCardCode)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete'
            );
        }
        // verify the required parameter 'giftCardCode' is set
        if ($giftCardCode === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $giftCardCode when calling giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete'
            );
        }

        $resourcePath = '/V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cartId !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cartId),
                $resourcePath
            );
        }
        // path params
        if ($giftCardCode !== null) {
            $resourcePath = str_replace(
                '{' . 'giftCardCode' . '}',
                ObjectSerializer::toPathValue($giftCardCode),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
            'DELETE',
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
