<?php
/**
 * NegotiableQuoteDataNegotiableQuoteInterface
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
 * NegotiableQuoteDataNegotiableQuoteInterface Class Doc Comment
 *
 * @category Class
 * @description Interface NegotiableQuoteInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NegotiableQuoteDataNegotiableQuoteInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'negotiable-quote-data-negotiable-quote-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quoteId' => 'int',
        'isRegularQuote' => 'bool',
        'status' => 'string',
        'negotiatedPriceType' => 'int',
        'negotiatedPriceValue' => 'float',
        'shippingPrice' => 'float',
        'quoteName' => 'string',
        'expirationPeriod' => 'string',
        'emailNotificationStatus' => 'int',
        'hasUnconfirmedChanges' => 'bool',
        'isShippingTaxChanged' => 'bool',
        'isCustomerPriceChanged' => 'bool',
        'notifications' => 'int',
        'appliedRuleIds' => 'string',
        'isAddressDraft' => 'bool',
        'deletedSku' => 'string',
        'creatorId' => 'int',
        'creatorType' => 'int',
        'originalTotalPrice' => 'float',
        'baseOriginalTotalPrice' => 'float',
        'negotiatedTotalPrice' => 'float',
        'baseNegotiatedTotalPrice' => 'float',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\NegotiableQuoteDataNegotiableQuoteExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quoteId' => null,
        'isRegularQuote' => null,
        'status' => null,
        'negotiatedPriceType' => null,
        'negotiatedPriceValue' => null,
        'shippingPrice' => null,
        'quoteName' => null,
        'expirationPeriod' => null,
        'emailNotificationStatus' => null,
        'hasUnconfirmedChanges' => null,
        'isShippingTaxChanged' => null,
        'isCustomerPriceChanged' => null,
        'notifications' => null,
        'appliedRuleIds' => null,
        'isAddressDraft' => null,
        'deletedSku' => null,
        'creatorId' => null,
        'creatorType' => null,
        'originalTotalPrice' => null,
        'baseOriginalTotalPrice' => null,
        'negotiatedTotalPrice' => null,
        'baseNegotiatedTotalPrice' => null,
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
        'quoteId' => 'quote_id',
        'isRegularQuote' => 'is_regular_quote',
        'status' => 'status',
        'negotiatedPriceType' => 'negotiated_price_type',
        'negotiatedPriceValue' => 'negotiated_price_value',
        'shippingPrice' => 'shipping_price',
        'quoteName' => 'quote_name',
        'expirationPeriod' => 'expiration_period',
        'emailNotificationStatus' => 'email_notification_status',
        'hasUnconfirmedChanges' => 'has_unconfirmed_changes',
        'isShippingTaxChanged' => 'is_shipping_tax_changed',
        'isCustomerPriceChanged' => 'is_customer_price_changed',
        'notifications' => 'notifications',
        'appliedRuleIds' => 'applied_rule_ids',
        'isAddressDraft' => 'is_address_draft',
        'deletedSku' => 'deleted_sku',
        'creatorId' => 'creator_id',
        'creatorType' => 'creator_type',
        'originalTotalPrice' => 'original_total_price',
        'baseOriginalTotalPrice' => 'base_original_total_price',
        'negotiatedTotalPrice' => 'negotiated_total_price',
        'baseNegotiatedTotalPrice' => 'base_negotiated_total_price',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quoteId' => 'setQuoteId',
        'isRegularQuote' => 'setIsRegularQuote',
        'status' => 'setStatus',
        'negotiatedPriceType' => 'setNegotiatedPriceType',
        'negotiatedPriceValue' => 'setNegotiatedPriceValue',
        'shippingPrice' => 'setShippingPrice',
        'quoteName' => 'setQuoteName',
        'expirationPeriod' => 'setExpirationPeriod',
        'emailNotificationStatus' => 'setEmailNotificationStatus',
        'hasUnconfirmedChanges' => 'setHasUnconfirmedChanges',
        'isShippingTaxChanged' => 'setIsShippingTaxChanged',
        'isCustomerPriceChanged' => 'setIsCustomerPriceChanged',
        'notifications' => 'setNotifications',
        'appliedRuleIds' => 'setAppliedRuleIds',
        'isAddressDraft' => 'setIsAddressDraft',
        'deletedSku' => 'setDeletedSku',
        'creatorId' => 'setCreatorId',
        'creatorType' => 'setCreatorType',
        'originalTotalPrice' => 'setOriginalTotalPrice',
        'baseOriginalTotalPrice' => 'setBaseOriginalTotalPrice',
        'negotiatedTotalPrice' => 'setNegotiatedTotalPrice',
        'baseNegotiatedTotalPrice' => 'setBaseNegotiatedTotalPrice',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quoteId' => 'getQuoteId',
        'isRegularQuote' => 'getIsRegularQuote',
        'status' => 'getStatus',
        'negotiatedPriceType' => 'getNegotiatedPriceType',
        'negotiatedPriceValue' => 'getNegotiatedPriceValue',
        'shippingPrice' => 'getShippingPrice',
        'quoteName' => 'getQuoteName',
        'expirationPeriod' => 'getExpirationPeriod',
        'emailNotificationStatus' => 'getEmailNotificationStatus',
        'hasUnconfirmedChanges' => 'getHasUnconfirmedChanges',
        'isShippingTaxChanged' => 'getIsShippingTaxChanged',
        'isCustomerPriceChanged' => 'getIsCustomerPriceChanged',
        'notifications' => 'getNotifications',
        'appliedRuleIds' => 'getAppliedRuleIds',
        'isAddressDraft' => 'getIsAddressDraft',
        'deletedSku' => 'getDeletedSku',
        'creatorId' => 'getCreatorId',
        'creatorType' => 'getCreatorType',
        'originalTotalPrice' => 'getOriginalTotalPrice',
        'baseOriginalTotalPrice' => 'getBaseOriginalTotalPrice',
        'negotiatedTotalPrice' => 'getNegotiatedTotalPrice',
        'baseNegotiatedTotalPrice' => 'getBaseNegotiatedTotalPrice',
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
        $this->container['quoteId'] = isset($data['quoteId']) ? $data['quoteId'] : null;
        $this->container['isRegularQuote'] = isset($data['isRegularQuote']) ? $data['isRegularQuote'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['negotiatedPriceType'] = isset($data['negotiatedPriceType']) ? $data['negotiatedPriceType'] : null;
        $this->container['negotiatedPriceValue'] = isset($data['negotiatedPriceValue']) ? $data['negotiatedPriceValue'] : null;
        $this->container['shippingPrice'] = isset($data['shippingPrice']) ? $data['shippingPrice'] : null;
        $this->container['quoteName'] = isset($data['quoteName']) ? $data['quoteName'] : null;
        $this->container['expirationPeriod'] = isset($data['expirationPeriod']) ? $data['expirationPeriod'] : null;
        $this->container['emailNotificationStatus'] = isset($data['emailNotificationStatus']) ? $data['emailNotificationStatus'] : null;
        $this->container['hasUnconfirmedChanges'] = isset($data['hasUnconfirmedChanges']) ? $data['hasUnconfirmedChanges'] : null;
        $this->container['isShippingTaxChanged'] = isset($data['isShippingTaxChanged']) ? $data['isShippingTaxChanged'] : null;
        $this->container['isCustomerPriceChanged'] = isset($data['isCustomerPriceChanged']) ? $data['isCustomerPriceChanged'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['appliedRuleIds'] = isset($data['appliedRuleIds']) ? $data['appliedRuleIds'] : null;
        $this->container['isAddressDraft'] = isset($data['isAddressDraft']) ? $data['isAddressDraft'] : null;
        $this->container['deletedSku'] = isset($data['deletedSku']) ? $data['deletedSku'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorType'] = isset($data['creatorType']) ? $data['creatorType'] : null;
        $this->container['originalTotalPrice'] = isset($data['originalTotalPrice']) ? $data['originalTotalPrice'] : null;
        $this->container['baseOriginalTotalPrice'] = isset($data['baseOriginalTotalPrice']) ? $data['baseOriginalTotalPrice'] : null;
        $this->container['negotiatedTotalPrice'] = isset($data['negotiatedTotalPrice']) ? $data['negotiatedTotalPrice'] : null;
        $this->container['baseNegotiatedTotalPrice'] = isset($data['baseNegotiatedTotalPrice']) ? $data['baseNegotiatedTotalPrice'] : null;
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

        if ($this->container['quoteId'] === null) {
            $invalidProperties[] = "'quoteId' can't be null";
        }
        if ($this->container['isRegularQuote'] === null) {
            $invalidProperties[] = "'isRegularQuote' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['negotiatedPriceType'] === null) {
            $invalidProperties[] = "'negotiatedPriceType' can't be null";
        }
        if ($this->container['negotiatedPriceValue'] === null) {
            $invalidProperties[] = "'negotiatedPriceValue' can't be null";
        }
        if ($this->container['shippingPrice'] === null) {
            $invalidProperties[] = "'shippingPrice' can't be null";
        }
        if ($this->container['quoteName'] === null) {
            $invalidProperties[] = "'quoteName' can't be null";
        }
        if ($this->container['expirationPeriod'] === null) {
            $invalidProperties[] = "'expirationPeriod' can't be null";
        }
        if ($this->container['emailNotificationStatus'] === null) {
            $invalidProperties[] = "'emailNotificationStatus' can't be null";
        }
        if ($this->container['hasUnconfirmedChanges'] === null) {
            $invalidProperties[] = "'hasUnconfirmedChanges' can't be null";
        }
        if ($this->container['isShippingTaxChanged'] === null) {
            $invalidProperties[] = "'isShippingTaxChanged' can't be null";
        }
        if ($this->container['isCustomerPriceChanged'] === null) {
            $invalidProperties[] = "'isCustomerPriceChanged' can't be null";
        }
        if ($this->container['notifications'] === null) {
            $invalidProperties[] = "'notifications' can't be null";
        }
        if ($this->container['appliedRuleIds'] === null) {
            $invalidProperties[] = "'appliedRuleIds' can't be null";
        }
        if ($this->container['isAddressDraft'] === null) {
            $invalidProperties[] = "'isAddressDraft' can't be null";
        }
        if ($this->container['deletedSku'] === null) {
            $invalidProperties[] = "'deletedSku' can't be null";
        }
        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
        }
        if ($this->container['creatorType'] === null) {
            $invalidProperties[] = "'creatorType' can't be null";
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
        if ($this->container['isRegularQuote'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['negotiatedPriceType'] === null) {
            return false;
        }
        if ($this->container['negotiatedPriceValue'] === null) {
            return false;
        }
        if ($this->container['shippingPrice'] === null) {
            return false;
        }
        if ($this->container['quoteName'] === null) {
            return false;
        }
        if ($this->container['expirationPeriod'] === null) {
            return false;
        }
        if ($this->container['emailNotificationStatus'] === null) {
            return false;
        }
        if ($this->container['hasUnconfirmedChanges'] === null) {
            return false;
        }
        if ($this->container['isShippingTaxChanged'] === null) {
            return false;
        }
        if ($this->container['isCustomerPriceChanged'] === null) {
            return false;
        }
        if ($this->container['notifications'] === null) {
            return false;
        }
        if ($this->container['appliedRuleIds'] === null) {
            return false;
        }
        if ($this->container['isAddressDraft'] === null) {
            return false;
        }
        if ($this->container['deletedSku'] === null) {
            return false;
        }
        if ($this->container['creatorId'] === null) {
            return false;
        }
        if ($this->container['creatorType'] === null) {
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
     * @param int $quoteId Negotiable quote ID.
     *
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        $this->container['quoteId'] = $quoteId;

        return $this;
    }

    /**
     * Gets isRegularQuote
     *
     * @return bool
     */
    public function getIsRegularQuote()
    {
        return $this->container['isRegularQuote'];
    }

    /**
     * Sets isRegularQuote
     *
     * @param bool $isRegularQuote Is regular quote.
     *
     * @return $this
     */
    public function setIsRegularQuote($isRegularQuote)
    {
        $this->container['isRegularQuote'] = $isRegularQuote;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Negotiable quote status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets negotiatedPriceType
     *
     * @return int
     */
    public function getNegotiatedPriceType()
    {
        return $this->container['negotiatedPriceType'];
    }

    /**
     * Sets negotiatedPriceType
     *
     * @param int $negotiatedPriceType Negotiated price type.
     *
     * @return $this
     */
    public function setNegotiatedPriceType($negotiatedPriceType)
    {
        $this->container['negotiatedPriceType'] = $negotiatedPriceType;

        return $this;
    }

    /**
     * Gets negotiatedPriceValue
     *
     * @return float
     */
    public function getNegotiatedPriceValue()
    {
        return $this->container['negotiatedPriceValue'];
    }

    /**
     * Sets negotiatedPriceValue
     *
     * @param float $negotiatedPriceValue Negotiated price value.
     *
     * @return $this
     */
    public function setNegotiatedPriceValue($negotiatedPriceValue)
    {
        $this->container['negotiatedPriceValue'] = $negotiatedPriceValue;

        return $this;
    }

    /**
     * Gets shippingPrice
     *
     * @return float
     */
    public function getShippingPrice()
    {
        return $this->container['shippingPrice'];
    }

    /**
     * Sets shippingPrice
     *
     * @param float $shippingPrice Proposed shipping price.
     *
     * @return $this
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->container['shippingPrice'] = $shippingPrice;

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
     * @param string $quoteName Negotiable quote name.
     *
     * @return $this
     */
    public function setQuoteName($quoteName)
    {
        $this->container['quoteName'] = $quoteName;

        return $this;
    }

    /**
     * Gets expirationPeriod
     *
     * @return string
     */
    public function getExpirationPeriod()
    {
        return $this->container['expirationPeriod'];
    }

    /**
     * Sets expirationPeriod
     *
     * @param string $expirationPeriod Expiration period.
     *
     * @return $this
     */
    public function setExpirationPeriod($expirationPeriod)
    {
        $this->container['expirationPeriod'] = $expirationPeriod;

        return $this;
    }

    /**
     * Gets emailNotificationStatus
     *
     * @return int
     */
    public function getEmailNotificationStatus()
    {
        return $this->container['emailNotificationStatus'];
    }

    /**
     * Sets emailNotificationStatus
     *
     * @param int $emailNotificationStatus Email notification status.
     *
     * @return $this
     */
    public function setEmailNotificationStatus($emailNotificationStatus)
    {
        $this->container['emailNotificationStatus'] = $emailNotificationStatus;

        return $this;
    }

    /**
     * Gets hasUnconfirmedChanges
     *
     * @return bool
     */
    public function getHasUnconfirmedChanges()
    {
        return $this->container['hasUnconfirmedChanges'];
    }

    /**
     * Sets hasUnconfirmedChanges
     *
     * @param bool $hasUnconfirmedChanges Has unconfirmed changes.
     *
     * @return $this
     */
    public function setHasUnconfirmedChanges($hasUnconfirmedChanges)
    {
        $this->container['hasUnconfirmedChanges'] = $hasUnconfirmedChanges;

        return $this;
    }

    /**
     * Gets isShippingTaxChanged
     *
     * @return bool
     */
    public function getIsShippingTaxChanged()
    {
        return $this->container['isShippingTaxChanged'];
    }

    /**
     * Sets isShippingTaxChanged
     *
     * @param bool $isShippingTaxChanged Shipping tax changes.
     *
     * @return $this
     */
    public function setIsShippingTaxChanged($isShippingTaxChanged)
    {
        $this->container['isShippingTaxChanged'] = $isShippingTaxChanged;

        return $this;
    }

    /**
     * Gets isCustomerPriceChanged
     *
     * @return bool
     */
    public function getIsCustomerPriceChanged()
    {
        return $this->container['isCustomerPriceChanged'];
    }

    /**
     * Sets isCustomerPriceChanged
     *
     * @param bool $isCustomerPriceChanged Customer price changes.
     *
     * @return $this
     */
    public function setIsCustomerPriceChanged($isCustomerPriceChanged)
    {
        $this->container['isCustomerPriceChanged'] = $isCustomerPriceChanged;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return int
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param int $notifications Quote notifications.
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets appliedRuleIds
     *
     * @return string
     */
    public function getAppliedRuleIds()
    {
        return $this->container['appliedRuleIds'];
    }

    /**
     * Sets appliedRuleIds
     *
     * @param string $appliedRuleIds Quote rules.
     *
     * @return $this
     */
    public function setAppliedRuleIds($appliedRuleIds)
    {
        $this->container['appliedRuleIds'] = $appliedRuleIds;

        return $this;
    }

    /**
     * Gets isAddressDraft
     *
     * @return bool
     */
    public function getIsAddressDraft()
    {
        return $this->container['isAddressDraft'];
    }

    /**
     * Sets isAddressDraft
     *
     * @param bool $isAddressDraft Is address draft.
     *
     * @return $this
     */
    public function setIsAddressDraft($isAddressDraft)
    {
        $this->container['isAddressDraft'] = $isAddressDraft;

        return $this;
    }

    /**
     * Gets deletedSku
     *
     * @return string
     */
    public function getDeletedSku()
    {
        return $this->container['deletedSku'];
    }

    /**
     * Sets deletedSku
     *
     * @param string $deletedSku Deleted products sku.
     *
     * @return $this
     */
    public function setDeletedSku($deletedSku)
    {
        $this->container['deletedSku'] = $deletedSku;

        return $this;
    }

    /**
     * Gets creatorId
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param int $creatorId Quote creator id.
     *
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets creatorType
     *
     * @return int
     */
    public function getCreatorType()
    {
        return $this->container['creatorType'];
    }

    /**
     * Sets creatorType
     *
     * @param int $creatorType Quote creator type.
     *
     * @return $this
     */
    public function setCreatorType($creatorType)
    {
        $this->container['creatorType'] = $creatorType;

        return $this;
    }

    /**
     * Gets originalTotalPrice
     *
     * @return float
     */
    public function getOriginalTotalPrice()
    {
        return $this->container['originalTotalPrice'];
    }

    /**
     * Sets originalTotalPrice
     *
     * @param float $originalTotalPrice Quote original total price.
     *
     * @return $this
     */
    public function setOriginalTotalPrice($originalTotalPrice)
    {
        $this->container['originalTotalPrice'] = $originalTotalPrice;

        return $this;
    }

    /**
     * Gets baseOriginalTotalPrice
     *
     * @return float
     */
    public function getBaseOriginalTotalPrice()
    {
        return $this->container['baseOriginalTotalPrice'];
    }

    /**
     * Sets baseOriginalTotalPrice
     *
     * @param float $baseOriginalTotalPrice Quote original total price in base currency.
     *
     * @return $this
     */
    public function setBaseOriginalTotalPrice($baseOriginalTotalPrice)
    {
        $this->container['baseOriginalTotalPrice'] = $baseOriginalTotalPrice;

        return $this;
    }

    /**
     * Gets negotiatedTotalPrice
     *
     * @return float
     */
    public function getNegotiatedTotalPrice()
    {
        return $this->container['negotiatedTotalPrice'];
    }

    /**
     * Sets negotiatedTotalPrice
     *
     * @param float $negotiatedTotalPrice Quote negotiated total price.
     *
     * @return $this
     */
    public function setNegotiatedTotalPrice($negotiatedTotalPrice)
    {
        $this->container['negotiatedTotalPrice'] = $negotiatedTotalPrice;

        return $this;
    }

    /**
     * Gets baseNegotiatedTotalPrice
     *
     * @return float
     */
    public function getBaseNegotiatedTotalPrice()
    {
        return $this->container['baseNegotiatedTotalPrice'];
    }

    /**
     * Sets baseNegotiatedTotalPrice
     *
     * @param float $baseNegotiatedTotalPrice Quote negotiated total price in base currency.
     *
     * @return $this
     */
    public function setBaseNegotiatedTotalPrice($baseNegotiatedTotalPrice)
    {
        $this->container['baseNegotiatedTotalPrice'] = $baseNegotiatedTotalPrice;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\NegotiableQuoteDataNegotiableQuoteExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\NegotiableQuoteDataNegotiableQuoteExtensionInterface $extensionAttributes extensionAttributes
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


