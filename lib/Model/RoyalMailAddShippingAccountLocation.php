<?php
/**
 * RoyalMailAddShippingAccountLocation
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
 * RoyalMailAddShippingAccountLocation Class Doc Comment
 *
 * @category Class
 * @description Royal Mail Add Shipping Account Location
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailAddShippingAccountLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoyalMailAddShippingAccountLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_location_id' => 'string',
        'shipping_location' => '\AdamToms\RoyalMailV4\Model\AddShippingAccountLocationNewLocation',
        'posting_location_code' => 'string',
        'oba_access_code' => 'string',
        'receiving_hub_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_location_id' => null,
        'shipping_location' => null,
        'posting_location_code' => null,
        'oba_access_code' => null,
        'receiving_hub_code' => null
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
        'shipping_location_id' => 'ShippingLocationId',
        'shipping_location' => 'ShippingLocation',
        'posting_location_code' => 'PostingLocationCode',
        'oba_access_code' => 'ObaAccessCode',
        'receiving_hub_code' => 'ReceivingHubCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_location_id' => 'setShippingLocationId',
        'shipping_location' => 'setShippingLocation',
        'posting_location_code' => 'setPostingLocationCode',
        'oba_access_code' => 'setObaAccessCode',
        'receiving_hub_code' => 'setReceivingHubCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_location_id' => 'getShippingLocationId',
        'shipping_location' => 'getShippingLocation',
        'posting_location_code' => 'getPostingLocationCode',
        'oba_access_code' => 'getObaAccessCode',
        'receiving_hub_code' => 'getReceivingHubCode'
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
        $this->container['shipping_location_id'] = isset($data['shipping_location_id']) ? $data['shipping_location_id'] : null;
        $this->container['shipping_location'] = isset($data['shipping_location']) ? $data['shipping_location'] : null;
        $this->container['posting_location_code'] = isset($data['posting_location_code']) ? $data['posting_location_code'] : null;
        $this->container['oba_access_code'] = isset($data['oba_access_code']) ? $data['oba_access_code'] : null;
        $this->container['receiving_hub_code'] = isset($data['receiving_hub_code']) ? $data['receiving_hub_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['posting_location_code'] === null) {
            $invalidProperties[] = "'posting_location_code' can't be null";
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
     * Gets shipping_location_id
     *
     * @return string
     */
    public function getShippingLocationId()
    {
        return $this->container['shipping_location_id'];
    }

    /**
     * Sets shipping_location_id
     *
     * @param string $shipping_location_id Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you). <br /> <br />Link an existing location to this account. <br />Either a Shipping Location Id must be provided, or the details of a new shipping location provided.
     *
     * @return $this
     */
    public function setShippingLocationId($shipping_location_id)
    {
        $this->container['shipping_location_id'] = $shipping_location_id;

        return $this;
    }

    /**
     * Gets shipping_location
     *
     * @return \AdamToms\RoyalMailV4\Model\AddShippingAccountLocationNewLocation
     */
    public function getShippingLocation()
    {
        return $this->container['shipping_location'];
    }

    /**
     * Sets shipping_location
     *
     * @param \AdamToms\RoyalMailV4\Model\AddShippingAccountLocationNewLocation $shipping_location shipping_location
     *
     * @return $this
     */
    public function setShippingLocation($shipping_location)
    {
        $this->container['shipping_location'] = $shipping_location;

        return $this;
    }

    /**
     * Gets posting_location_code
     *
     * @return string
     */
    public function getPostingLocationCode()
    {
        return $this->container['posting_location_code'];
    }

    /**
     * Sets posting_location_code
     *
     * @param string $posting_location_code Posting Location Code <br />The number assigned to this Location by Royal Mail.
     *
     * @return $this
     */
    public function setPostingLocationCode($posting_location_code)
    {
        $this->container['posting_location_code'] = $posting_location_code;

        return $this;
    }

    /**
     * Gets oba_access_code
     *
     * @return string
     */
    public function getObaAccessCode()
    {
        return $this->container['oba_access_code'];
    }

    /**
     * Sets oba_access_code
     *
     * @param string $oba_access_code OBA Access Code <br />A password for the account to access the OBA services. <br />A Royal Mail shipping account cannot be active unless the OBA Access code has been provided.
     *
     * @return $this
     */
    public function setObaAccessCode($oba_access_code)
    {
        $this->container['oba_access_code'] = $oba_access_code;

        return $this;
    }

    /**
     * Gets receiving_hub_code
     *
     * @return string
     */
    public function getReceivingHubCode()
    {
        return $this->container['receiving_hub_code'];
    }

    /**
     * Sets receiving_hub_code
     *
     * @param string $receiving_hub_code Receiving Hub Code <br />Receiving Hub/Regional Distribution Center used for this Shipping Location. <br />Must be an existing receiving hub code. <br />Please refer to Royal Mail ReceivingHubs for a list of possible receiving hubs. <br />If the receiving hub is not provided, we will match it to the one that corresponds to the postcode of the location's address.
     *
     * @return $this
     */
    public function setReceivingHubCode($receiving_hub_code)
    {
        $this->container['receiving_hub_code'] = $receiving_hub_code;

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
