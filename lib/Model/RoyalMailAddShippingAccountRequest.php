<?php
/**
 * RoyalMailAddShippingAccountRequest
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
 * OpenAPI spec version: v4.0-RM
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
 * RoyalMailAddShippingAccountRequest Class Doc Comment
 *
 * @category Class
 * @description Royal Mail Add Shipping Account Request
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailAddShippingAccountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoyalMailAddShippingAccountRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_number' => 'string',
        'account_type' => '\AdamToms\RoyalMailV4\Model\AccountType',
        'account_name' => 'string',
        'account_registered_email' => 'string',
        'account_alias' => 'string',
        'contact_name' => 'string',
        'contact_number' => 'string',
        'shipping_locations' => '\AdamToms\RoyalMailV4\Model\RoyalMailAddShippingAccountLocation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_number' => null,
        'account_type' => null,
        'account_name' => null,
        'account_registered_email' => 'email',
        'account_alias' => null,
        'contact_name' => null,
        'contact_number' => 'tel',
        'shipping_locations' => null
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
        'account_number' => 'AccountNumber',
        'account_type' => 'AccountType',
        'account_name' => 'AccountName',
        'account_registered_email' => 'AccountRegisteredEmail',
        'account_alias' => 'AccountAlias',
        'contact_name' => 'ContactName',
        'contact_number' => 'ContactNumber',
        'shipping_locations' => 'ShippingLocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'account_name' => 'setAccountName',
        'account_registered_email' => 'setAccountRegisteredEmail',
        'account_alias' => 'setAccountAlias',
        'contact_name' => 'setContactName',
        'contact_number' => 'setContactNumber',
        'shipping_locations' => 'setShippingLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'account_name' => 'getAccountName',
        'account_registered_email' => 'getAccountRegisteredEmail',
        'account_alias' => 'getAccountAlias',
        'contact_name' => 'getContactName',
        'contact_number' => 'getContactNumber',
        'shipping_locations' => 'getShippingLocations'
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_registered_email'] = isset($data['account_registered_email']) ? $data['account_registered_email'] : null;
        $this->container['account_alias'] = isset($data['account_alias']) ? $data['account_alias'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_number'] = isset($data['contact_number']) ? $data['contact_number'] : null;
        $this->container['shipping_locations'] = isset($data['shipping_locations']) ? $data['shipping_locations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if ($this->container['account_registered_email'] === null) {
            $invalidProperties[] = "'account_registered_email' can't be null";
        }
        if ($this->container['account_alias'] === null) {
            $invalidProperties[] = "'account_alias' can't be null";
        }
        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['contact_number'] === null) {
            $invalidProperties[] = "'contact_number' can't be null";
        }
        if ($this->container['shipping_locations'] === null) {
            $invalidProperties[] = "'shipping_locations' can't be null";
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
     * @param string $account_name Account Name <br />The name on this Account. <br />Defaults to your Customer name if not provided.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_registered_email
     *
     * @return string
     */
    public function getAccountRegisteredEmail()
    {
        return $this->container['account_registered_email'];
    }

    /**
     * Sets account_registered_email
     *
     * @param string $account_registered_email Account Registered Email <br />This is the email that was used to register your Shipping Account with the carrier when the Shipping Account was created.
     *
     * @return $this
     */
    public function setAccountRegisteredEmail($account_registered_email)
    {
        $this->container['account_registered_email'] = $account_registered_email;

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
     * @param string $account_alias Account Alias <br />Your identifier for this account. Must be unique.
     *
     * @return $this
     */
    public function setAccountAlias($account_alias)
    {
        $this->container['account_alias'] = $account_alias;

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
     * Gets shipping_locations
     *
     * @return \AdamToms\RoyalMailV4\Model\RoyalMailAddShippingAccountLocation[]
     */
    public function getShippingLocations()
    {
        return $this->container['shipping_locations'];
    }

    /**
     * Sets shipping_locations
     *
     * @param \AdamToms\RoyalMailV4\Model\RoyalMailAddShippingAccountLocation[] $shipping_locations Shipping Locations <br />At least one location is required when adding a shipping account. <br />If providing a new location when adding the account, only one location can be added.
     *
     * @return $this
     */
    public function setShippingLocations($shipping_locations)
    {
        $this->container['shipping_locations'] = $shipping_locations;

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
