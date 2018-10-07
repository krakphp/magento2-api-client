<?php
/**
 * NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody
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
 * NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'negotiableQuoteNegotiableQuoteManagementV1CreatePostBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quoteId' => 'int',
        'quoteName' => 'string',
        'comment' => 'string',
        'files' => '\Krak\MagentoApiClient\Model\NegotiableQuoteDataAttachmentContentInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quoteId' => null,
        'quoteName' => null,
        'comment' => null,
        'files' => null
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
        'quoteId' => 'quoteId',
        'quoteName' => 'quoteName',
        'comment' => 'comment',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quoteId' => 'setQuoteId',
        'quoteName' => 'setQuoteName',
        'comment' => 'setComment',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quoteId' => 'getQuoteId',
        'quoteName' => 'getQuoteName',
        'comment' => 'getComment',
        'files' => 'getFiles'
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
        $this->container['quoteId'] = isset($data['quoteId']) ? $data['quoteId'] : null;
        $this->container['quoteName'] = isset($data['quoteName']) ? $data['quoteName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quoteId'] === null) {
            $invalidProperties[] = "'quoteId' can't be null";
        }
        if ($this->container['quoteName'] === null) {
            $invalidProperties[] = "'quoteName' can't be null";
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

        if ($this->container['quoteId'] === null) {
            return false;
        }
        if ($this->container['quoteName'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets quoteId
     *
     * @return int
     */
    public function getQuoteId()
    {
        return $this->container['quoteId'];
    }

    /**
     * Sets quoteId
     *
     * @param int $quoteId quoteId
     *
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        $this->container['quoteId'] = $quoteId;

        return $this;
    }

    /**
     * Gets quoteName
     *
     * @return string
     */
    public function getQuoteName()
    {
        return $this->container['quoteName'];
    }

    /**
     * Sets quoteName
     *
     * @param string $quoteName quoteName
     *
     * @return $this
     */
    public function setQuoteName($quoteName)
    {
        $this->container['quoteName'] = $quoteName;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Krak\MagentoApiClient\Model\NegotiableQuoteDataAttachmentContentInterface[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Krak\MagentoApiClient\Model\NegotiableQuoteDataAttachmentContentInterface[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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


