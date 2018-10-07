<?php
/**
 * CustomerDataCustomerInterface
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
 * CustomerDataCustomerInterface Class Doc Comment
 *
 * @category Class
 * @description Customer interface.
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDataCustomerInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer-data-customer-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'groupId' => 'int',
        'defaultBilling' => 'string',
        'defaultShipping' => 'string',
        'confirmation' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'createdIn' => 'string',
        'dob' => 'string',
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'middlename' => 'string',
        'prefix' => 'string',
        'suffix' => 'string',
        'gender' => 'int',
        'storeId' => 'int',
        'taxvat' => 'string',
        'websiteId' => 'int',
        'addresses' => '\Krak\MagentoApiClient\Model\CustomerDataAddressInterface[]',
        'disableAutoGroupChange' => 'int',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\CustomerDataCustomerExtensionInterface',
        'customAttributes' => '\Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'groupId' => null,
        'defaultBilling' => null,
        'defaultShipping' => null,
        'confirmation' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'createdIn' => null,
        'dob' => null,
        'email' => null,
        'firstname' => null,
        'lastname' => null,
        'middlename' => null,
        'prefix' => null,
        'suffix' => null,
        'gender' => null,
        'storeId' => null,
        'taxvat' => null,
        'websiteId' => null,
        'addresses' => null,
        'disableAutoGroupChange' => null,
        'extensionAttributes' => null,
        'customAttributes' => null
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
        'groupId' => 'group_id',
        'defaultBilling' => 'default_billing',
        'defaultShipping' => 'default_shipping',
        'confirmation' => 'confirmation',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'createdIn' => 'created_in',
        'dob' => 'dob',
        'email' => 'email',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'middlename' => 'middlename',
        'prefix' => 'prefix',
        'suffix' => 'suffix',
        'gender' => 'gender',
        'storeId' => 'store_id',
        'taxvat' => 'taxvat',
        'websiteId' => 'website_id',
        'addresses' => 'addresses',
        'disableAutoGroupChange' => 'disable_auto_group_change',
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'groupId' => 'setGroupId',
        'defaultBilling' => 'setDefaultBilling',
        'defaultShipping' => 'setDefaultShipping',
        'confirmation' => 'setConfirmation',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'createdIn' => 'setCreatedIn',
        'dob' => 'setDob',
        'email' => 'setEmail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'middlename' => 'setMiddlename',
        'prefix' => 'setPrefix',
        'suffix' => 'setSuffix',
        'gender' => 'setGender',
        'storeId' => 'setStoreId',
        'taxvat' => 'setTaxvat',
        'websiteId' => 'setWebsiteId',
        'addresses' => 'setAddresses',
        'disableAutoGroupChange' => 'setDisableAutoGroupChange',
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'groupId' => 'getGroupId',
        'defaultBilling' => 'getDefaultBilling',
        'defaultShipping' => 'getDefaultShipping',
        'confirmation' => 'getConfirmation',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'createdIn' => 'getCreatedIn',
        'dob' => 'getDob',
        'email' => 'getEmail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'middlename' => 'getMiddlename',
        'prefix' => 'getPrefix',
        'suffix' => 'getSuffix',
        'gender' => 'getGender',
        'storeId' => 'getStoreId',
        'taxvat' => 'getTaxvat',
        'websiteId' => 'getWebsiteId',
        'addresses' => 'getAddresses',
        'disableAutoGroupChange' => 'getDisableAutoGroupChange',
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['defaultBilling'] = isset($data['defaultBilling']) ? $data['defaultBilling'] : null;
        $this->container['defaultShipping'] = isset($data['defaultShipping']) ? $data['defaultShipping'] : null;
        $this->container['confirmation'] = isset($data['confirmation']) ? $data['confirmation'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['createdIn'] = isset($data['createdIn']) ? $data['createdIn'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['middlename'] = isset($data['middlename']) ? $data['middlename'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['taxvat'] = isset($data['taxvat']) ? $data['taxvat'] : null;
        $this->container['websiteId'] = isset($data['websiteId']) ? $data['websiteId'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['disableAutoGroupChange'] = isset($data['disableAutoGroupChange']) ? $data['disableAutoGroupChange'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
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

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
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
     * @param int $id Customer id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param int $groupId Group id
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets defaultBilling
     *
     * @return string
     */
    public function getDefaultBilling()
    {
        return $this->container['defaultBilling'];
    }

    /**
     * Sets defaultBilling
     *
     * @param string $defaultBilling Default billing address id
     *
     * @return $this
     */
    public function setDefaultBilling($defaultBilling)
    {
        $this->container['defaultBilling'] = $defaultBilling;

        return $this;
    }

    /**
     * Gets defaultShipping
     *
     * @return string
     */
    public function getDefaultShipping()
    {
        return $this->container['defaultShipping'];
    }

    /**
     * Sets defaultShipping
     *
     * @param string $defaultShipping Default shipping address id
     *
     * @return $this
     */
    public function setDefaultShipping($defaultShipping)
    {
        $this->container['defaultShipping'] = $defaultShipping;

        return $this;
    }

    /**
     * Gets confirmation
     *
     * @return string
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param string $confirmation Confirmation
     *
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt Created at time
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt Updated at time
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets createdIn
     *
     * @return string
     */
    public function getCreatedIn()
    {
        return $this->container['createdIn'];
    }

    /**
     * Sets createdIn
     *
     * @param string $createdIn Created in area
     *
     * @return $this
     */
    public function setCreatedIn($createdIn)
    {
        $this->container['createdIn'] = $createdIn;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param string $dob Date of birth
     *
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname First name
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Last name
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets middlename
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->container['middlename'];
    }

    /**
     * Sets middlename
     *
     * @param string $middlename Middle name
     *
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->container['middlename'] = $middlename;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix Prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix Suffix
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param int $gender Gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

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
     * @param int $storeId Store id
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets taxvat
     *
     * @return string
     */
    public function getTaxvat()
    {
        return $this->container['taxvat'];
    }

    /**
     * Sets taxvat
     *
     * @param string $taxvat Tax Vat
     *
     * @return $this
     */
    public function setTaxvat($taxvat)
    {
        $this->container['taxvat'] = $taxvat;

        return $this;
    }

    /**
     * Gets websiteId
     *
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->container['websiteId'];
    }

    /**
     * Sets websiteId
     *
     * @param int $websiteId Website id
     *
     * @return $this
     */
    public function setWebsiteId($websiteId)
    {
        $this->container['websiteId'] = $websiteId;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Krak\MagentoApiClient\Model\CustomerDataAddressInterface[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Krak\MagentoApiClient\Model\CustomerDataAddressInterface[] $addresses Customer addresses.
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets disableAutoGroupChange
     *
     * @return int
     */
    public function getDisableAutoGroupChange()
    {
        return $this->container['disableAutoGroupChange'];
    }

    /**
     * Sets disableAutoGroupChange
     *
     * @param int $disableAutoGroupChange Disable auto group change flag.
     *
     * @return $this
     */
    public function setDisableAutoGroupChange($disableAutoGroupChange)
    {
        $this->container['disableAutoGroupChange'] = $disableAutoGroupChange;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\CustomerDataCustomerExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\CustomerDataCustomerExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     *
     * @return \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     *
     * @param \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     *
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


