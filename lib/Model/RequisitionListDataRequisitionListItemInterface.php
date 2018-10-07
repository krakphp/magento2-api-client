<?php
/**
 * RequisitionListDataRequisitionListItemInterface
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
 * RequisitionListDataRequisitionListItemInterface Class Doc Comment
 *
 * @category Class
 * @description Interface RequisitionListItemInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequisitionListDataRequisitionListItemInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'requisition-list-data-requisition-list-item-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sku' => 'int',
        'requisitionListId' => 'int',
        'qty' => 'float',
        'options' => 'string[]',
        'storeId' => 'int',
        'addedAt' => 'string',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\RequisitionListDataRequisitionListItemExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sku' => null,
        'requisitionListId' => null,
        'qty' => null,
        'options' => null,
        'storeId' => null,
        'addedAt' => null,
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
        'sku' => 'sku',
        'requisitionListId' => 'requisition_list_id',
        'qty' => 'qty',
        'options' => 'options',
        'storeId' => 'store_id',
        'addedAt' => 'added_at',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'requisitionListId' => 'setRequisitionListId',
        'qty' => 'setQty',
        'options' => 'setOptions',
        'storeId' => 'setStoreId',
        'addedAt' => 'setAddedAt',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'requisitionListId' => 'getRequisitionListId',
        'qty' => 'getQty',
        'options' => 'getOptions',
        'storeId' => 'getStoreId',
        'addedAt' => 'getAddedAt',
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['requisitionListId'] = isset($data['requisitionListId']) ? $data['requisitionListId'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['addedAt'] = isset($data['addedAt']) ? $data['addedAt'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['requisitionListId'] === null) {
            $invalidProperties[] = "'requisitionListId' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['storeId'] === null) {
            $invalidProperties[] = "'storeId' can't be null";
        }
        if ($this->container['addedAt'] === null) {
            $invalidProperties[] = "'addedAt' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['requisitionListId'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        if ($this->container['options'] === null) {
            return false;
        }
        if ($this->container['storeId'] === null) {
            return false;
        }
        if ($this->container['addedAt'] === null) {
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
     * @param int $id Requisition List ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return int
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param int $sku Product SKU.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets requisitionListId
     *
     * @return int
     */
    public function getRequisitionListId()
    {
        return $this->container['requisitionListId'];
    }

    /**
     * Sets requisitionListId
     *
     * @param int $requisitionListId Requisition List ID.
     *
     * @return $this
     */
    public function setRequisitionListId($requisitionListId)
    {
        $this->container['requisitionListId'] = $requisitionListId;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float $qty Product Qty.
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options Requisition list item options.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param int $storeId Store ID.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets addedAt
     *
     * @return string
     */
    public function getAddedAt()
    {
        return $this->container['addedAt'];
    }

    /**
     * Sets addedAt
     *
     * @param string $addedAt Added_at value.
     *
     * @return $this
     */
    public function setAddedAt($addedAt)
    {
        $this->container['addedAt'] = $addedAt;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\RequisitionListDataRequisitionListItemExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\RequisitionListDataRequisitionListItemExtensionInterface $extensionAttributes extensionAttributes
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


