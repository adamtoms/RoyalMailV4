<?php
/**
 * RoyalMailEnhancementCode
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
 * RoyalMailEnhancementCode Class Doc Comment
 *
 * @category Class
 * @description Enhancement code of the service enhancement. Valid values are: &lt;br /&gt;**CL1** - Consequential Loss £1000 &lt;br /&gt;**CL2** - Consequential Loss £2500 &lt;br /&gt;**CL3** - Consequential Loss £5000 &lt;br /&gt;**CL4** - Consequential Loss £7500 &lt;br /&gt;**CL5** - Consequential Loss £10000 (Only 1 type of Consequential Loss is allowed) &lt;br /&gt;**Signed** - a signature is required on delivery of the shipment. Can be used with 24, 48, 1st Class and 2nd Class services. &lt;br /&gt;**SMS** - delivery updates will be sent via SMS. Can be used with Special Delivery Guaranteed, Tracked and Tracked High Volume services. &lt;br /&gt;**Email** - delivery updates will be sent via email. Can be used with Special Delivery Guaranteed, Tracked and Tracked High Volume, International Tracked and International Tracked and Signed services. &lt;br /&gt;**Safeplace** - the shipment will be left in a specified safeplace location. The location must be provided in the SafeplaceLocation field. Can be used with Tracked, Tracked High Volume and 24/48 services. &lt;br /&gt;**LocalCollect** - the shipment will be delivered to a Post Office for collection by the receiver. Can be used with Special Delivery Guaranteed, Tracked and Tracked High Volume services. &lt;br /&gt;**CustomsEmail** - Receiver email address will be used in eCustoms data. Can be used with International services.  &lt;br /&gt;**CustomsPhone** - Receiver email address will be used in eCustoms data.Can be used with International services.
 * @package  AdamToms\RoyalMailV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailEnhancementCode
{
    /**
     * Possible values of this enum
     */
    const CL1 = 'CL1';
    const CL2 = 'CL2';
    const CL3 = 'CL3';
    const CL4 = 'CL4';
    const CL5 = 'CL5';
    const SIGNED = 'Signed';
    const SMS = 'SMS';
    const EMAIL = 'Email';
    const SAFEPLACE = 'Safeplace';
    const LOCAL_COLLECT = 'LocalCollect';
    const CUSTOMS_EMAIL = 'CustomsEmail';
    const CUSTOMS_PHONE = 'CustomsPhone';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CL1
            self::CL2
            self::CL3
            self::CL4
            self::CL5
            self::SIGNED
            self::SMS
            self::EMAIL
            self::SAFEPLACE
            self::LOCAL_COLLECT
            self::CUSTOMS_EMAIL
            self::CUSTOMS_PHONE
        ];
    }
}
