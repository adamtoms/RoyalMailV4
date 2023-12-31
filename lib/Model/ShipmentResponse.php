<?php
/**
 * ShipmentResponse
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
 * ShipmentResponse Class Doc Comment
 *
 * @category Class
 * @description Shipment Response
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_account_id' => 'string',
        'shipment_id' => 'string',
        'tracking_number' => 'string',
        'barcode_number' => 'string',
        'reference1' => 'string',
        'shipment_date' => '\DateTime',
        'status' => 'string',
        'manifest_number' => 'string',
        'container_id' => 'string',
        'carrier' => 'string',
        'destination_country_code' => 'string',
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
        'shipment_id' => 'uuid',
        'tracking_number' => null,
        'barcode_number' => null,
        'reference1' => null,
        'shipment_date' => 'date',
        'status' => null,
        'manifest_number' => null,
        'container_id' => null,
        'carrier' => null,
        'destination_country_code' => null,
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
        'shipment_id' => 'ShipmentId',
        'tracking_number' => 'TrackingNumber',
        'barcode_number' => 'BarcodeNumber',
        'reference1' => 'Reference1',
        'shipment_date' => 'ShipmentDate',
        'status' => 'Status',
        'manifest_number' => 'ManifestNumber',
        'container_id' => 'ContainerId',
        'carrier' => 'Carrier',
        'destination_country_code' => 'DestinationCountryCode',
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
        'shipment_id' => 'setShipmentId',
        'tracking_number' => 'setTrackingNumber',
        'barcode_number' => 'setBarcodeNumber',
        'reference1' => 'setReference1',
        'shipment_date' => 'setShipmentDate',
        'status' => 'setStatus',
        'manifest_number' => 'setManifestNumber',
        'container_id' => 'setContainerId',
        'carrier' => 'setCarrier',
        'destination_country_code' => 'setDestinationCountryCode',
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
        'shipment_id' => 'getShipmentId',
        'tracking_number' => 'getTrackingNumber',
        'barcode_number' => 'getBarcodeNumber',
        'reference1' => 'getReference1',
        'shipment_date' => 'getShipmentDate',
        'status' => 'getStatus',
        'manifest_number' => 'getManifestNumber',
        'container_id' => 'getContainerId',
        'carrier' => 'getCarrier',
        'destination_country_code' => 'getDestinationCountryCode',
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['barcode_number'] = isset($data['barcode_number']) ? $data['barcode_number'] : null;
        $this->container['reference1'] = isset($data['reference1']) ? $data['reference1'] : null;
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['manifest_number'] = isset($data['manifest_number']) ? $data['manifest_number'] : null;
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['destination_country_code'] = isset($data['destination_country_code']) ? $data['destination_country_code'] : null;
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
     * @param string $shipping_account_id Shipping Account Id
     *
     * @return $this
     */
    public function setShippingAccountId($shipping_account_id)
    {
        $this->container['shipping_account_id'] = $shipping_account_id;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id Shipment Id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number Tracking Number
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets barcode_number
     *
     * @return string
     */
    public function getBarcodeNumber()
    {
        return $this->container['barcode_number'];
    }

    /**
     * Sets barcode_number
     *
     * @param string $barcode_number Barcode Number
     *
     * @return $this
     */
    public function setBarcodeNumber($barcode_number)
    {
        $this->container['barcode_number'] = $barcode_number;

        return $this;
    }

    /**
     * Gets reference1
     *
     * @return string
     */
    public function getReference1()
    {
        return $this->container['reference1'];
    }

    /**
     * Sets reference1
     *
     * @param string $reference1 Reference 1
     *
     * @return $this
     */
    public function setReference1($reference1)
    {
        $this->container['reference1'] = $reference1;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime $shipment_date Shipment Date
     *
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

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
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets manifest_number
     *
     * @return string
     */
    public function getManifestNumber()
    {
        return $this->container['manifest_number'];
    }

    /**
     * Sets manifest_number
     *
     * @param string $manifest_number Manifest Number
     *
     * @return $this
     */
    public function setManifestNumber($manifest_number)
    {
        $this->container['manifest_number'] = $manifest_number;

        return $this;
    }

    /**
     * Gets container_id
     *
     * @return string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param string $container_id Container Id
     *
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier Carrier Code
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets destination_country_code
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->container['destination_country_code'];
    }

    /**
     * Sets destination_country_code
     *
     * @param string $destination_country_code Destination Country Code
     *
     * @return $this
     */
    public function setDestinationCountryCode($destination_country_code)
    {
        $this->container['destination_country_code'] = $destination_country_code;

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
     * @param string $last_updated_by Last Updated By
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
     * @param \DateTime $last_updated_date_utc Last Updated Date UTC
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
