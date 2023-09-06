<?php
/**
 * RoyalMailLabelFormat
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
use \AdamToms\RoyalMailV4\ObjectSerializer;

/**
 * RoyalMailLabelFormat Class Doc Comment
 *
 * @category Class
 * @description Sets the label format that will be returned in the createShipment Response.  &lt;br /&gt;Valid values are: &lt;br /&gt;**PDF** - returns a Base64-encoded PDF &lt;br /&gt;**PNG** - returns a Base64-enconded PNG &lt;br /&gt;**ZPL203DPI** - returns Base 64 encoded text for Zebra printer at 203 DPI &lt;br /&gt;**ZPL300DPI** - returns Base 64 encoded text for Zebra printer at 300 DPI &lt;br /&gt;**DATASTREAM** - returns the label elements such as tracking URL, barcode number, 2D barcode image etc. for the label to be created in your own system, rather than returning a label image &lt;br /&gt;Defaults to PDF if not populated.
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailLabelFormat
{
    /**
     * Possible values of this enum
     */
    const PDF = 'PDF';
    const PNG = 'PNG';
    const DATASTREAM = 'DATASTREAM';
    const ZPL203_DPI = 'ZPL203DPI';
    const ZPL300_DPI = 'ZPL300DPI';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF
            self::PNG
            self::DATASTREAM
            self::ZPL203_DPI
            self::ZPL300_DPI
        ];
    }
}
