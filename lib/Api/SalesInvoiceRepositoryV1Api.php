<?php
/**
 * SalesInvoiceRepositoryV1Api
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
 * SalesInvoiceRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesInvoiceRepositoryV1Api
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
     * Operation salesInvoiceRepositoryV1GetGet
     *
     * @param  int $id The invoice ID. (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\SalesDataInvoiceInterface
     */
    public function salesInvoiceRepositoryV1GetGet($id)
    {
        list($response) = $this->salesInvoiceRepositoryV1GetGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesInvoiceRepositoryV1GetGetWithHttpInfo
     *
     * @param  int $id The invoice ID. (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\SalesDataInvoiceInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesInvoiceRepositoryV1GetGetWithHttpInfo($id)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface';
        $request = $this->salesInvoiceRepositoryV1GetGetRequest($id);

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
                        '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation salesInvoiceRepositoryV1GetGetAsync
     *
     * 
     *
     * @param  int $id The invoice ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1GetGetAsync($id)
    {
        return $this->salesInvoiceRepositoryV1GetGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesInvoiceRepositoryV1GetGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $id The invoice ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1GetGetAsyncWithHttpInfo($id)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface';
        $request = $this->salesInvoiceRepositoryV1GetGetRequest($id);

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
     * Create request for operation 'salesInvoiceRepositoryV1GetGet'
     *
     * @param  int $id The invoice ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesInvoiceRepositoryV1GetGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesInvoiceRepositoryV1GetGet'
            );
        }

        $resourcePath = '/V1/invoices/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation salesInvoiceRepositoryV1GetListGet
     *
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\SalesDataInvoiceSearchResultInterface
     */
    public function salesInvoiceRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->salesInvoiceRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation salesInvoiceRepositoryV1GetListGetWithHttpInfo
     *
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\SalesDataInvoiceSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesInvoiceRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceSearchResultInterface';
        $request = $this->salesInvoiceRepositoryV1GetListGetRequest($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

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
                        '\Krak\MagentoApiClient\Model\SalesDataInvoiceSearchResultInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation salesInvoiceRepositoryV1GetListGetAsync
     *
     * 
     *
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1GetListGetAsync($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        return $this->salesInvoiceRepositoryV1GetListGetAsyncWithHttpInfo($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesInvoiceRepositoryV1GetListGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1GetListGetAsyncWithHttpInfo($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceSearchResultInterface';
        $request = $this->salesInvoiceRepositoryV1GetListGetRequest($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

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
     * Create request for operation 'salesInvoiceRepositoryV1GetListGet'
     *
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesInvoiceRepositoryV1GetListGetRequest($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {

        $resourcePath = '/V1/invoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($searchCriteriaCurrentPage);
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
     * Operation salesInvoiceRepositoryV1SavePost
     *
     * @param  \Krak\MagentoApiClient\Model\SalesInvoiceRepositoryV1SavePostBody $salesInvoiceRepositoryV1SavePostBody salesInvoiceRepositoryV1SavePostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\SalesDataInvoiceInterface
     */
    public function salesInvoiceRepositoryV1SavePost($salesInvoiceRepositoryV1SavePostBody = null)
    {
        list($response) = $this->salesInvoiceRepositoryV1SavePostWithHttpInfo($salesInvoiceRepositoryV1SavePostBody);
        return $response;
    }

    /**
     * Operation salesInvoiceRepositoryV1SavePostWithHttpInfo
     *
     * @param  \Krak\MagentoApiClient\Model\SalesInvoiceRepositoryV1SavePostBody $salesInvoiceRepositoryV1SavePostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\SalesDataInvoiceInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesInvoiceRepositoryV1SavePostWithHttpInfo($salesInvoiceRepositoryV1SavePostBody = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface';
        $request = $this->salesInvoiceRepositoryV1SavePostRequest($salesInvoiceRepositoryV1SavePostBody);

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
                        '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation salesInvoiceRepositoryV1SavePostAsync
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\SalesInvoiceRepositoryV1SavePostBody $salesInvoiceRepositoryV1SavePostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1SavePostAsync($salesInvoiceRepositoryV1SavePostBody = null)
    {
        return $this->salesInvoiceRepositoryV1SavePostAsyncWithHttpInfo($salesInvoiceRepositoryV1SavePostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesInvoiceRepositoryV1SavePostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\SalesInvoiceRepositoryV1SavePostBody $salesInvoiceRepositoryV1SavePostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesInvoiceRepositoryV1SavePostAsyncWithHttpInfo($salesInvoiceRepositoryV1SavePostBody = null)
    {
        $returnType = '\Krak\MagentoApiClient\Model\SalesDataInvoiceInterface';
        $request = $this->salesInvoiceRepositoryV1SavePostRequest($salesInvoiceRepositoryV1SavePostBody);

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
     * Create request for operation 'salesInvoiceRepositoryV1SavePost'
     *
     * @param  \Krak\MagentoApiClient\Model\SalesInvoiceRepositoryV1SavePostBody $salesInvoiceRepositoryV1SavePostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesInvoiceRepositoryV1SavePostRequest($salesInvoiceRepositoryV1SavePostBody = null)
    {

        $resourcePath = '/V1/invoices/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($salesInvoiceRepositoryV1SavePostBody)) {
            $_tempBody = $salesInvoiceRepositoryV1SavePostBody;
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
