<?php
/**
 * ShippingAccount
 *
 * PHP version 5
 *
 * @category Class
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PRO SHIPPING API
 *
 * # Introduction Here you will find requirements for integrating with PRO SHIPPING API.  The documentation specifically covers how the API can be used by business customers to conduct shipping activity with available carriers and provides the technical information to build this integration. The API allows customers to create and manage shipments, produce labels, customs documentation, and collection manifests, retrieve reference data such as carriers and countries, and maintain their own data such as shipping account details.  Pro Shipping API is a fully RESTful service implemented using JSON messaging. You, as the customer are responsible for sending JSON messages and for maintaining the capability of receiving JSON messages in the format described in this specification. Request and response examples for each API service are included in this specification.  # Authentication  The PRO SHIPPING API uses OAuth2 authentication.  To request the authorization token you need to create API credentials (Client ID and Secret) on the system first. If you have not done it already, log into your account and go to API Credentials or follow the link [add a link here with the path to the API Credentials menu]. Use the credentials to retrieve the authorization token.  Note: Make sure you copy the Secret and keep it secure as you won't be able to view it again on the system.  <!-- ReDoc-Inject: <SecurityDefinitions /> -->
 *
 * OpenAPI spec version: v4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AdamToms\RoyalMailV4\Model;

use \ArrayAccess;
use \AdamToms\RoyalMailV4\ObjectSerializer;

/**
 * ShippingAccount Class Doc Comment
 *
 * @category Class
 * @description Shipping Account &lt;br /&gt;An account that sends shipments. A shipping account is for a specified carrier. &lt;br /&gt;You can have multiple shipping accounts. &lt;br /&gt;A Shipping Account must have at least one Shipping Location.
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_account_id' => 'string',
        'carrier_code' => 'string',
        'account_number' => 'string',
        'account_type' => '\AdamToms\RoyalMailV4\Model\AccountType',
        'account_name' => 'string',
        'account_alias' => 'string',
        'account_status' => 'string',
        'contact_name' => 'string',
        'contact_number' => 'string',
        'last_updated_by' => 'string',
        'last_updated_date_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_account_id' => 'uuid',
        'carrier_code' => null,
        'account_number' => null,
        'account_type' => null,
        'account_name' => null,
        'account_alias' => null,
        'account_status' => null,
        'contact_name' => null,
        'contact_number' => 'tel',
        'last_updated_by' => null,
        'last_updated_date_utc' => 'date-time'
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
        'shipping_account_id' => 'ShippingAccountId',
        'carrier_code' => 'CarrierCode',
        'account_number' => 'AccountNumber',
        'account_type' => 'AccountType',
        'account_name' => 'AccountName',
        'account_alias' => 'AccountAlias',
        'account_status' => 'AccountStatus',
        'contact_name' => 'ContactName',
        'contact_number' => 'ContactNumber',
        'last_updated_by' => 'LastUpdatedBy',
        'last_updated_date_utc' => 'LastUpdatedDateUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_account_id' => 'setShippingAccountId',
        'carrier_code' => 'setCarrierCode',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'account_name' => 'setAccountName',
        'account_alias' => 'setAccountAlias',
        'account_status' => 'setAccountStatus',
        'contact_name' => 'setContactName',
        'contact_number' => 'setContactNumber',
        'last_updated_by' => 'setLastUpdatedBy',
        'last_updated_date_utc' => 'setLastUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_account_id' => 'getShippingAccountId',
        'carrier_code' => 'getCarrierCode',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'account_name' => 'getAccountName',
        'account_alias' => 'getAccountAlias',
        'account_status' => 'getAccountStatus',
        'contact_name' => 'getContactName',
        'contact_number' => 'getContactNumber',
        'last_updated_by' => 'getLastUpdatedBy',
        'last_updated_date_utc' => 'getLastUpdatedDateUtc'
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
        $this->container['shipping_account_id'] = isset($data['shipping_account_id']) ? $data['shipping_account_id'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_alias'] = isset($data['account_alias']) ? $data['account_alias'] : null;
        $this->container['account_status'] = isset($data['account_status']) ? $data['account_status'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_number'] = isset($data['contact_number']) ? $data['contact_number'] : null;
        $this->container['last_updated_by'] = isset($data['last_updated_by']) ? $data['last_updated_by'] : null;
        $this->container['last_updated_date_utc'] = isset($data['last_updated_date_utc']) ? $data['last_updated_date_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_account_id'] === null) {
            $invalidProperties[] = "'shipping_account_id' can't be null";
        }
        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if ($this->container['account_name'] === null) {
            $invalidProperties[] = "'account_name' can't be null";
        }
        if ($this->container['account_alias'] === null) {
            $invalidProperties[] = "'account_alias' can't be null";
        }
        if ($this->container['account_status'] === null) {
            $invalidProperties[] = "'account_status' can't be null";
        }
        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['contact_number'] === null) {
            $invalidProperties[] = "'contact_number' can't be null";
        }
        if ($this->container['last_updated_by'] === null) {
            $invalidProperties[] = "'last_updated_by' can't be null";
        }
        if ($this->container['last_updated_date_utc'] === null) {
            $invalidProperties[] = "'last_updated_date_utc' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipping_account_id
     *
     * @return string
     */
    public function getShippingAccountId()
    {
        return $this->container['shipping_account_id'];
    }

    /**
     * Sets shipping_account_id
     *
     * @param string $shipping_account_id Shipping Account Id <br />The system identifier for this account. <br />Use one of the Id or Alias in the Create Shipment Request to identify the account to use.
     *
     * @return $this
     */
    public function setShippingAccountId($shipping_account_id)
    {
        $this->container['shipping_account_id'] = $shipping_account_id;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code Carrier Code <br />The carrier that this shipping account is for.
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number Carrier Account Number <br />The account number given by the carrier.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return \AdamToms\RoyalMailV4\Model\AccountType
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param \AdamToms\RoyalMailV4\Model\AccountType $account_type account_type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name Shipping Account Name <br />The name of the Shipping Account.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_alias
     *
     * @return string
     */
    public function getAccountAlias()
    {
        return $this->container['account_alias'];
    }

    /**
     * Sets account_alias
     *
     * @param string $account_alias Shipping Account Alias <br />Your identifier for this account. Must be unique.
     *
     * @return $this
     */
    public function setAccountAlias($account_alias)
    {
        $this->container['account_alias'] = $account_alias;

        return $this;
    }

    /**
     * Gets account_status
     *
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param string $account_status Account Status <br />The status of the shipping account.
     *
     * @return $this
     */
    public function setAccountStatus($account_status)
    {
        $this->container['account_status'] = $account_status;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name Contact Name <br />Used in a create shipment request as the shipper's contact name if the shipper address is not provided.
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_number
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->container['contact_number'];
    }

    /**
     * Sets contact_number
     *
     * @param string $contact_number Contact Number <br />Used in a create shipment request as the shipper's contact number if the shipper address is not provided, and the contact number is not set on the associated shipping location.
     *
     * @return $this
     */
    public function setContactNumber($contact_number)
    {
        $this->container['contact_number'] = $contact_number;

        return $this;
    }

    /**
     * Gets last_updated_by
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->container['last_updated_by'];
    }

    /**
     * Sets last_updated_by
     *
     * @param string $last_updated_by Last Updated By <br />The user that last updated the shipping account.
     *
     * @return $this
     */
    public function setLastUpdatedBy($last_updated_by)
    {
        $this->container['last_updated_by'] = $last_updated_by;

        return $this;
    }

    /**
     * Gets last_updated_date_utc
     *
     * @return \DateTime
     */
    public function getLastUpdatedDateUtc()
    {
        return $this->container['last_updated_date_utc'];
    }

    /**
     * Sets last_updated_date_utc
     *
     * @param \DateTime $last_updated_date_utc Last Updated Date UTC <br />The system date and time when the shipping account was last updated.
     *
     * @return $this
     */
    public function setLastUpdatedDateUtc($last_updated_date_utc)
    {
        $this->container['last_updated_date_utc'] = $last_updated_date_utc;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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