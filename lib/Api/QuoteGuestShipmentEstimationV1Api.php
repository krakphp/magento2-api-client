<?php
/**
 * QuoteGuestShipmentEstimationV1Api
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
 * QuoteGuestShipmentEstimationV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteGuestShipmentEstimationV1Api
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
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost
     *
     * @param  string $cartId cartId (required)
     * @param  \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
    {
        list($response) = $this->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody);
        return $response;
    }

    /**
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]';
        $request = $this->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostRequest($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody);

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
                        '\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]',
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
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostAsync
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostAsync($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
    {
        return $this->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostAsyncWithHttpInfo($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostAsyncWithHttpInfo($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]';
        $request = $this->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostRequest($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody);

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
     * Create request for operation 'quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost'
     *
     * @param  string $cartId (required)
     * @param  \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostRequest($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost'
            );
        }

        $resourcePath = '/V1/guest-carts/{cartId}/estimate-shipping-methods';
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
        if (isset($quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody)) {
            $_tempBody = $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody;
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
