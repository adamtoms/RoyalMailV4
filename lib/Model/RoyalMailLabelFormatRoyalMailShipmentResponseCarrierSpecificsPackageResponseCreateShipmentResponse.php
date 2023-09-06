<?php
/**
 * RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse
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
 * RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse Class Doc Comment
 *
 * @category Class
 * @description Create Shipment Response
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_shipment_id' => 'string',
        'consignment_tracking_number' => 'string',
        'consignment_carrier_tracking_url' => 'string',
        'labels' => 'string',
        'label_format' => '\AdamToms\RoyalMailV4\Model\RoyalMailLabelFormat',
        'packages' => '\AdamToms\RoyalMailV4\Model\RoyalMailShipmentResponseCarrierSpecificsPackageResponse[]',
        'documents' => 'string',
        'document_format' => '\AdamToms\RoyalMailV4\Model\DocumentFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignment_shipment_id' => 'uuid',
        'consignment_tracking_number' => null,
        'consignment_carrier_tracking_url' => 'uri',
        'labels' => null,
        'label_format' => null,
        'packages' => null,
        'documents' => null,
        'document_format' => null
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
        'consignment_shipment_id' => 'ConsignmentShipmentId',
        'consignment_tracking_number' => 'ConsignmentTrackingNumber',
        'consignment_carrier_tracking_url' => 'ConsignmentCarrierTrackingUrl',
        'labels' => 'Labels',
        'label_format' => 'LabelFormat',
        'packages' => 'Packages',
        'documents' => 'Documents',
        'document_format' => 'DocumentFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignment_shipment_id' => 'setConsignmentShipmentId',
        'consignment_tracking_number' => 'setConsignmentTrackingNumber',
        'consignment_carrier_tracking_url' => 'setConsignmentCarrierTrackingUrl',
        'labels' => 'setLabels',
        'label_format' => 'setLabelFormat',
        'packages' => 'setPackages',
        'documents' => 'setDocuments',
        'document_format' => 'setDocumentFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignment_shipment_id' => 'getConsignmentShipmentId',
        'consignment_tracking_number' => 'getConsignmentTrackingNumber',
        'consignment_carrier_tracking_url' => 'getConsignmentCarrierTrackingUrl',
        'labels' => 'getLabels',
        'label_format' => 'getLabelFormat',
        'packages' => 'getPackages',
        'documents' => 'getDocuments',
        'document_format' => 'getDocumentFormat'
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
        $this->container['consignment_shipment_id'] = isset($data['consignment_shipment_id']) ? $data['consignment_shipment_id'] : null;
        $this->container['consignment_tracking_number'] = isset($data['consignment_tracking_number']) ? $data['consignment_tracking_number'] : null;
        $this->container['consignment_carrier_tracking_url'] = isset($data['consignment_carrier_tracking_url']) ? $data['consignment_carrier_tracking_url'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['document_format'] = isset($data['document_format']) ? $data['document_format'] : null;
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
     * Gets consignment_shipment_id
     *
     * @return string
     */
    public function getConsignmentShipmentId()
    {
        return $this->container['consignment_shipment_id'];
    }

    /**
     * Sets consignment_shipment_id
     *
     * @param string $consignment_shipment_id Consignment Shipment Id <br />Only populated if the service is a consignment service.
     *
     * @return $this
     */
    public function setConsignmentShipmentId($consignment_shipment_id)
    {
        $this->container['consignment_shipment_id'] = $consignment_shipment_id;

        return $this;
    }

    /**
     * Gets consignment_tracking_number
     *
     * @return string
     */
    public function getConsignmentTrackingNumber()
    {
        return $this->container['consignment_tracking_number'];
    }

    /**
     * Sets consignment_tracking_number
     *
     * @param string $consignment_tracking_number Consignment Tracking Number <br />Only populated if the service is a consignment service
     *
     * @return $this
     */
    public function setConsignmentTrackingNumber($consignment_tracking_number)
    {
        $this->container['consignment_tracking_number'] = $consignment_tracking_number;

        return $this;
    }

    /**
     * Gets consignment_carrier_tracking_url
     *
     * @return string
     */
    public function getConsignmentCarrierTrackingUrl()
    {
        return $this->container['consignment_carrier_tracking_url'];
    }

    /**
     * Sets consignment_carrier_tracking_url
     *
     * @param string $consignment_carrier_tracking_url Consignment Carrier Tracking URL <br />Only populated if the service is a consignment service and is available
     *
     * @return $this
     */
    public function setConsignmentCarrierTrackingUrl($consignment_carrier_tracking_url)
    {
        $this->container['consignment_carrier_tracking_url'] = $consignment_carrier_tracking_url;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string $labels Labels <br />Populated if requested Action was 'Process'
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return \AdamToms\RoyalMailV4\Model\RoyalMailLabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param \AdamToms\RoyalMailV4\Model\RoyalMailLabelFormat $label_format label_format
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \AdamToms\RoyalMailV4\Model\RoyalMailShipmentResponseCarrierSpecificsPackageResponse[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \AdamToms\RoyalMailV4\Model\RoyalMailShipmentResponseCarrierSpecificsPackageResponse[] $packages Packages <br />The details of each package.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param string $documents Customs Documents <br />Populated if requested Action was 'Process' and shipment is dutiable
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets document_format
     *
     * @return \AdamToms\RoyalMailV4\Model\DocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->container['document_format'];
    }

    /**
     * Sets document_format
     *
     * @param \AdamToms\RoyalMailV4\Model\DocumentFormat $document_format document_format
     *
     * @return $this
     */
    public function setDocumentFormat($document_format)
    {
        $this->container['document_format'] = $document_format;

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
