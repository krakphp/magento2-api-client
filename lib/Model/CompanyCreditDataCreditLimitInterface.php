<?php
/**
 * CompanyCreditDataCreditLimitInterface
 *
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

namespace Krak\MagentoApiClient\Model;

use \ArrayAccess;
use \Krak\MagentoApiClient\ObjectSerializer;

/**
 * CompanyCreditDataCreditLimitInterface Class Doc Comment
 *
 * @category Class
 * @description Credit Limit data transfer object interface.
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCreditDataCreditLimitInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'company-credit-data-credit-limit-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'companyId' => 'int',
        'creditLimit' => 'float',
        'balance' => 'float',
        'currencyCode' => 'string',
        'exceedLimit' => 'bool',
        'availableLimit' => 'float',
        'creditComment' => 'string',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'companyId' => null,
        'creditLimit' => null,
        'balance' => null,
        'currencyCode' => null,
        'exceedLimit' => null,
        'availableLimit' => null,
        'creditComment' => null,
        'extensionAttributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'companyId' => 'company_id',
        'creditLimit' => 'credit_limit',
        'balance' => 'balance',
        'currencyCode' => 'currency_code',
        'exceedLimit' => 'exceed_limit',
        'availableLimit' => 'available_limit',
        'creditComment' => 'credit_comment',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'companyId' => 'setCompanyId',
        'creditLimit' => 'setCreditLimit',
        'balance' => 'setBalance',
        'currencyCode' => 'setCurrencyCode',
        'exceedLimit' => 'setExceedLimit',
        'availableLimit' => 'setAvailableLimit',
        'creditComment' => 'setCreditComment',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'companyId' => 'getCompanyId',
        'creditLimit' => 'getCreditLimit',
        'balance' => 'getBalance',
        'currencyCode' => 'getCurrencyCode',
        'exceedLimit' => 'getExceedLimit',
        'availableLimit' => 'getAvailableLimit',
        'creditComment' => 'getCreditComment',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['companyId'] = isset($data['companyId']) ? $data['companyId'] : null;
        $this->container['creditLimit'] = isset($data['creditLimit']) ? $data['creditLimit'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['exceedLimit'] = isset($data['exceedLimit']) ? $data['exceedLimit'] : null;
        $this->container['availableLimit'] = isset($data['availableLimit']) ? $data['availableLimit'] : null;
        $this->container['creditComment'] = isset($data['creditComment']) ? $data['creditComment'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['exceedLimit'] === null) {
            $invalidProperties[] = "'exceedLimit' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['exceedLimit'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets companyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     *
     * @param int $companyId Company id.
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->container['companyId'] = $companyId;

        return $this;
    }

    /**
     * Gets creditLimit
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->container['creditLimit'];
    }

    /**
     * Sets creditLimit
     *
     * @param float $creditLimit Credit Limit.
     *
     * @return $this
     */
    public function setCreditLimit($creditLimit)
    {
        $this->container['creditLimit'] = $creditLimit;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance Balance.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode Currency Code.
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets exceedLimit
     *
     * @return bool
     */
    public function getExceedLimit()
    {
        return $this->container['exceedLimit'];
    }

    /**
     * Sets exceedLimit
     *
     * @param bool $exceedLimit Exceed Limit.
     *
     * @return $this
     */
    public function setExceedLimit($exceedLimit)
    {
        $this->container['exceedLimit'] = $exceedLimit;

        return $this;
    }

    /**
     * Gets availableLimit
     *
     * @return float
     */
    public function getAvailableLimit()
    {
        return $this->container['availableLimit'];
    }

    /**
     * Sets availableLimit
     *
     * @param float $availableLimit Available Limit.
     *
     * @return $this
     */
    public function setAvailableLimit($availableLimit)
    {
        $this->container['availableLimit'] = $availableLimit;

        return $this;
    }

    /**
     * Gets creditComment
     *
     * @return string
     */
    public function getCreditComment()
    {
        return $this->container['creditComment'];
    }

    /**
     * Sets creditComment
     *
     * @param string $creditComment Credit comment for company credit history.
     *
     * @return $this
     */
    public function setCreditComment($creditComment)
    {
        $this->container['creditComment'] = $creditComment;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


