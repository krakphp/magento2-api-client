<?php
/**
 * CompanyCreditCreditLimitManagementV1Api
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
 * CompanyCreditCreditLimitManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCreditCreditLimitManagementV1Api
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
     * Operation companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet
     *
     * @param  int $companyId companyId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet($companyId)
    {
        list($response) = $this->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetWithHttpInfo($companyId);
        return $response;
    }

    /**
     * Operation companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetWithHttpInfo
     *
     * @param  int $companyId (required)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetWithHttpInfo($companyId)
    {
        $returnType = '\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface';
        $request = $this->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetRequest($companyId);

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
                        '\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface',
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
     * Operation companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetAsync
     *
     * 
     *
     * @param  int $companyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetAsync($companyId)
    {
        return $this->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetAsyncWithHttpInfo($companyId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $companyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetAsyncWithHttpInfo($companyId)
    {
        $returnType = '\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface';
        $request = $this->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetRequest($companyId);

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
     * Create request for operation 'companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet'
     *
     * @param  int $companyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGetRequest($companyId)
    {
        // verify the required parameter 'companyId' is set
        if ($companyId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $companyId when calling companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet'
            );
        }

        $resourcePath = '/V1/companyCredits/company/{companyId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace(
                '{' . 'companyId' . '}',
                ObjectSerializer::toPathValue($companyId),
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
