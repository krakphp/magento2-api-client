<?php
/**
 * DirectoryDataCountryInformationInterface
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
 * DirectoryDataCountryInformationInterface Class Doc Comment
 *
 * @category Class
 * @description Country Information interface.
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DirectoryDataCountryInformationInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'directory-data-country-information-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'twoLetterAbbreviation' => 'string',
        'threeLetterAbbreviation' => 'string',
        'fullNameLocale' => 'string',
        'fullNameEnglish' => 'string',
        'availableRegions' => '\Krak\MagentoApiClient\Model\DirectoryDataRegionInformationInterface[]',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\DirectoryDataCountryInformationExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'twoLetterAbbreviation' => null,
        'threeLetterAbbreviation' => null,
        'fullNameLocale' => null,
        'fullNameEnglish' => null,
        'availableRegions' => null,
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
        'twoLetterAbbreviation' => 'two_letter_abbreviation',
        'threeLetterAbbreviation' => 'three_letter_abbreviation',
        'fullNameLocale' => 'full_name_locale',
        'fullNameEnglish' => 'full_name_english',
        'availableRegions' => 'available_regions',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'twoLetterAbbreviation' => 'setTwoLetterAbbreviation',
        'threeLetterAbbreviation' => 'setThreeLetterAbbreviation',
        'fullNameLocale' => 'setFullNameLocale',
        'fullNameEnglish' => 'setFullNameEnglish',
        'availableRegions' => 'setAvailableRegions',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'twoLetterAbbreviation' => 'getTwoLetterAbbreviation',
        'threeLetterAbbreviation' => 'getThreeLetterAbbreviation',
        'fullNameLocale' => 'getFullNameLocale',
        'fullNameEnglish' => 'getFullNameEnglish',
        'availableRegions' => 'getAvailableRegions',
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
        $this->container['twoLetterAbbreviation'] = isset($data['twoLetterAbbreviation']) ? $data['twoLetterAbbreviation'] : null;
        $this->container['threeLetterAbbreviation'] = isset($data['threeLetterAbbreviation']) ? $data['threeLetterAbbreviation'] : null;
        $this->container['fullNameLocale'] = isset($data['fullNameLocale']) ? $data['fullNameLocale'] : null;
        $this->container['fullNameEnglish'] = isset($data['fullNameEnglish']) ? $data['fullNameEnglish'] : null;
        $this->container['availableRegions'] = isset($data['availableRegions']) ? $data['availableRegions'] : null;
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
        if ($this->container['twoLetterAbbreviation'] === null) {
            $invalidProperties[] = "'twoLetterAbbreviation' can't be null";
        }
        if ($this->container['threeLetterAbbreviation'] === null) {
            $invalidProperties[] = "'threeLetterAbbreviation' can't be null";
        }
        if ($this->container['fullNameLocale'] === null) {
            $invalidProperties[] = "'fullNameLocale' can't be null";
        }
        if ($this->container['fullNameEnglish'] === null) {
            $invalidProperties[] = "'fullNameEnglish' can't be null";
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
        if ($this->container['twoLetterAbbreviation'] === null) {
            return false;
        }
        if ($this->container['threeLetterAbbreviation'] === null) {
            return false;
        }
        if ($this->container['fullNameLocale'] === null) {
            return false;
        }
        if ($this->container['fullNameEnglish'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The country id for the store.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets twoLetterAbbreviation
     *
     * @return string
     */
    public function getTwoLetterAbbreviation()
    {
        return $this->container['twoLetterAbbreviation'];
    }

    /**
     * Sets twoLetterAbbreviation
     *
     * @param string $twoLetterAbbreviation The country 2 letter abbreviation for the store.
     *
     * @return $this
     */
    public function setTwoLetterAbbreviation($twoLetterAbbreviation)
    {
        $this->container['twoLetterAbbreviation'] = $twoLetterAbbreviation;

        return $this;
    }

    /**
     * Gets threeLetterAbbreviation
     *
     * @return string
     */
    public function getThreeLetterAbbreviation()
    {
        return $this->container['threeLetterAbbreviation'];
    }

    /**
     * Sets threeLetterAbbreviation
     *
     * @param string $threeLetterAbbreviation The country 3 letter abbreviation for the store.
     *
     * @return $this
     */
    public function setThreeLetterAbbreviation($threeLetterAbbreviation)
    {
        $this->container['threeLetterAbbreviation'] = $threeLetterAbbreviation;

        return $this;
    }

    /**
     * Gets fullNameLocale
     *
     * @return string
     */
    public function getFullNameLocale()
    {
        return $this->container['fullNameLocale'];
    }

    /**
     * Sets fullNameLocale
     *
     * @param string $fullNameLocale The country full name (in store locale) for the store.
     *
     * @return $this
     */
    public function setFullNameLocale($fullNameLocale)
    {
        $this->container['fullNameLocale'] = $fullNameLocale;

        return $this;
    }

    /**
     * Gets fullNameEnglish
     *
     * @return string
     */
    public function getFullNameEnglish()
    {
        return $this->container['fullNameEnglish'];
    }

    /**
     * Sets fullNameEnglish
     *
     * @param string $fullNameEnglish The country full name (in English) for the store.
     *
     * @return $this
     */
    public function setFullNameEnglish($fullNameEnglish)
    {
        $this->container['fullNameEnglish'] = $fullNameEnglish;

        return $this;
    }

    /**
     * Gets availableRegions
     *
     * @return \Krak\MagentoApiClient\Model\DirectoryDataRegionInformationInterface[]
     */
    public function getAvailableRegions()
    {
        return $this->container['availableRegions'];
    }

    /**
     * Sets availableRegions
     *
     * @param \Krak\MagentoApiClient\Model\DirectoryDataRegionInformationInterface[] $availableRegions The available regions for the store.
     *
     * @return $this
     */
    public function setAvailableRegions($availableRegions)
    {
        $this->container['availableRegions'] = $availableRegions;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\DirectoryDataCountryInformationExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\DirectoryDataCountryInformationExtensionInterface $extensionAttributes extensionAttributes
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


