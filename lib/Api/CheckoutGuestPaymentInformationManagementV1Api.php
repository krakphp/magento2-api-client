<?php
/**
 * CheckoutGuestPaymentInformationManagementV1Api
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
 * CheckoutGuestPaymentInformationManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutGuestPaymentInformationManagementV1Api
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
     * Operation checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet
     *
     * @param  string $cartId cartId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId)
    {
        list($response) = $this->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo($cartId);
        return $response;
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo
     *
     * @param  string $cartId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo($cartId)
    {
        $returnType = '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface';
        $request = $this->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetRequest($cartId);

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
                        '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface',
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
     * Operation checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetAsync
     *
     * 
     *
     * @param  string $cartId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetAsync($cartId)
    {
        return $this->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo($cartId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo($cartId)
    {
        $returnType = '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface';
        $request = $this->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetRequest($cartId);

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
     * Create request for operation 'checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet'
     *
     * @param  string $cartId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGetRequest($cartId)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet'
            );
        }

        $resourcePath = '/V1/guest-carts/{cartId}/payment-information';
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost
     *
     * @param  string $cartId cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        list($response) = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);
        return $response;
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

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
                        'int',
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
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsync($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        return $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

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
     * Create request for operation 'checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost'
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost'
            );
        }

        $resourcePath = '/V1/guest-carts/{cartId}/payment-information';
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
        if (isset($checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)) {
            $_tempBody = $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost
     *
     * @param  string $cartId cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        list($response) = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody);
        return $response;
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody);

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
                        'int',
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
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostAsync($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        return $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody);

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
     * Create request for operation 'checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost'
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostRequest($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost'
            );
        }

        $resourcePath = '/V1/guest-carts/{cartId}/set-payment-information';
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
        if (isset($checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody)) {
            $_tempBody = $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
