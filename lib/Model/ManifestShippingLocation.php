<?php
/**
 * ManifestShippingLocation
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
 * ManifestShippingLocation Class Doc Comment
 *
 * @category Class
 * @description Shipping Location &lt;br /&gt;The location that this manifest is for.
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManifestShippingLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ManifestShippingLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_location_id' => 'string',
        'location_alias' => 'string',
        'location_country' => 'string',
        'location_postcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_location_id' => 'uuid',
        'location_alias' => null,
        'location_country' => null,
        'location_postcode' => null
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
        'location_alias' => 'LocationAlias',
        'location_country' => 'LocationCountry',
        'location_postcode' => 'LocationPostcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_location_id' => 'setShippingLocationId',
        'location_alias' => 'setLocationAlias',
        'location_country' => 'setLocationCountry',
        'location_postcode' => 'setLocationPostcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_location_id' => 'getShippingLocationId',
        'location_alias' => 'getLocationAlias',
        'location_country' => 'getLocationCountry',
        'location_postcode' => 'getLocationPostcode'
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
        $this->container['location_alias'] = isset($data['location_alias']) ? $data['location_alias'] : null;
        $this->container['location_country'] = isset($data['location_country']) ? $data['location_country'] : null;
        $this->container['location_postcode'] = isset($data['location_postcode']) ? $data['location_postcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_location_id'] === null) {
            $invalidProperties[] = "'shipping_location_id' can't be null";
        }
        if ($this->container['location_alias'] === null) {
            $invalidProperties[] = "'location_alias' can't be null";
        }
        if ($this->container['location_country'] === null) {
            $invalidProperties[] = "'location_country' can't be null";
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
     * @param string $shipping_location_id Shipping Location Id <br />The system identifier for this shipping location.
     *
     * @return $this
     */
    public function setShippingLocationId($shipping_location_id)
    {
        $this->container['shipping_location_id'] = $shipping_location_id;

        return $this;
    }

    /**
     * Gets location_alias
     *
     * @return string
     */
    public function getLocationAlias()
    {
        return $this->container['location_alias'];
    }

    /**
     * Sets location_alias
     *
     * @param string $location_alias Shipping Location Alias <br />Your identifier for this shipping location.
     *
     * @return $this
     */
    public function setLocationAlias($location_alias)
    {
        $this->container['location_alias'] = $location_alias;

        return $this;
    }

    /**
     * Gets location_country
     *
     * @return string
     */
    public function getLocationCountry()
    {
        return $this->container['location_country'];
    }

    /**
     * Sets location_country
     *
     * @param string $location_country Shipping Location Country Code <br />ISO Alpha-2 Country Code
     *
     * @return $this
     */
    public function setLocationCountry($location_country)
    {
        $this->container['location_country'] = $location_country;

        return $this;
    }

    /**
     * Gets location_postcode
     *
     * @return string
     */
    public function getLocationPostcode()
    {
        return $this->container['location_postcode'];
    }

    /**
     * Sets location_postcode
     *
     * @param string $location_postcode Shipping Location Postcode
     *
     * @return $this
     */
    public function setLocationPostcode($location_postcode)
    {
        $this->container['location_postcode'] = $location_postcode;

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
