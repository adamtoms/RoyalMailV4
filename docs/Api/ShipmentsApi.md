# AdamToms\RoyalMailV4\ShipmentsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ShipmentsDeferPut**](ShipmentsApi.md#v4shipmentsdeferput) | **PUT** /v4/shipments/defer | Defer Shipments
[**v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost**](ShipmentsApi.md#v4shipmentsprintdocumentcarriercodeshipmentidpost) | **POST** /v4/shipments/printDocument/{carrierCode}/{shipmentId} | Print Document
[**v4ShipmentsShippingLocationIdGet**](ShipmentsApi.md#v4shipmentsshippinglocationidget) | **GET** /v4/shipments/{shippingLocationId} | Get Shipments
[**v4ShipmentsStatusPut**](ShipmentsApi.md#v4shipmentsstatusput) | **PUT** /v4/shipments/status | Update Status

# **v4ShipmentsDeferPut**
> v4ShipmentsDeferPut($body)

Defer Shipments

Used to update the shipment shipping data for a current shipment. <br />A shipment can be deferred by a maximum of 28 days from the date of the request. <br />This service can only be used before the shipment has been manifested. <br />There can be a maximum of 99 defer requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AdamToms\RoyalMailV4\Model\DeferShipmentRequest()); // \AdamToms\RoyalMailV4\Model\DeferShipmentRequest[] | Defer shipment requests

try {
    $apiInstance->v4ShipmentsDeferPut($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsDeferPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\DeferShipmentRequest[]**](../Model/DeferShipmentRequest.md)| Defer shipment requests | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost**
> \AdamToms\RoyalMailV4\Model\PrintDocumentResponse v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost($carrier_code, $shipment_id, $body)

Print Document

Request the associated Customs Documents for the printed label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$shipment_id = "shipment_id_example"; // string | Shipment Id <br />The Shipment Id may be an id or a tracking/barcode number.
$body = new \AdamToms\RoyalMailV4\Model\PrintDocumentRequest(); // \AdamToms\RoyalMailV4\Model\PrintDocumentRequest | Print Document Request

try {
    $result = $apiInstance->v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost($carrier_code, $shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **shipment_id** | **string**| Shipment Id &lt;br /&gt;The Shipment Id may be an id or a tracking/barcode number. |
 **body** | [**\AdamToms\RoyalMailV4\Model\PrintDocumentRequest**](../Model/PrintDocumentRequest.md)| Print Document Request | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\PrintDocumentResponse**](../Model/PrintDocumentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsShippingLocationIdGet**
> \AdamToms\RoyalMailV4\Model\ShipmentsPagedResponse v4ShipmentsShippingLocationIdGet($shipping_location_id, $shipping_account_id, $carrier_code, $status, $destination_country_code, $date_from, $date_to, $page_size, $page_number)

Get Shipments

Provides a list of shipments for the specified shipping location in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Id <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping location.
$shipping_account_id = "shipping_account_id_example"; // string | Shipping Account Id <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping account.
$carrier_code = "carrier_code_example"; // string | Carrier Code <br />If shippingAccountId and carrier are both provided, then the value sent in the carrier field will be ignored and the carrier associated with the shipping account will be used.
$status = new \AdamToms\RoyalMailV4\Model\GetShipmentsStatusType(); // \AdamToms\RoyalMailV4\Model\GetShipmentsStatusType | Status <br />Filter by shipment status.
$destination_country_code = "destination_country_code_example"; // string | Country Code <br />ISO Alpha-2 Country Code per ISO 3166 Standard.
$date_from = new \DateTime("2013-10-20"); // \DateTime | Date From <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$date_to = new \DateTime("2013-10-20"); // \DateTime | Date To <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.

try {
    $result = $apiInstance->v4ShipmentsShippingLocationIdGet($shipping_location_id, $shipping_account_id, $carrier_code, $status, $destination_country_code, $date_from, $date_to, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsShippingLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_location_id** | **string**| Shipping Location Id &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping location. |
 **shipping_account_id** | **string**| Shipping Account Id &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping account. | [optional]
 **carrier_code** | **string**| Carrier Code &lt;br /&gt;If shippingAccountId and carrier are both provided, then the value sent in the carrier field will be ignored and the carrier associated with the shipping account will be used. | [optional]
 **status** | [**\AdamToms\RoyalMailV4\Model\GetShipmentsStatusType**](../Model/.md)| Status &lt;br /&gt;Filter by shipment status. | [optional]
 **destination_country_code** | **string**| Country Code &lt;br /&gt;ISO Alpha-2 Country Code per ISO 3166 Standard. | [optional]
 **date_from** | **\DateTime**| Date From &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **date_to** | **\DateTime**| Date To &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]

### Return type

[**\AdamToms\RoyalMailV4\Model\ShipmentsPagedResponse**](../Model/ShipmentsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsStatusPut**
> v4ShipmentsStatusPut($body)

Update Status

**Hold** - Put the shipments on hold for up to 28 days. Shipments on hold for longer than 28 days will be cancelled. A shipment on hold will not be included in an closeouts/manifests, but instead will remain in its current state. You can only put shipments on hold that are in the 'LabelPrinted' status as only shipments with this status are included in manifests. <br />             <br />**Cancel** - Use to cancel/void one or more current shipments. This can only be used before a shipment has been confirmed by being manifested. <br />             <br />**Release** - Use to release shipments from hold and shipments cancelled for less than 24 hours. Once released, the shipment will be included in the next manifest. <br />             <br />**Picked** - Set the shipment to picked. This means this shipment will only be manifested if you choose to manifest 'Picked' shipments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AdamToms\RoyalMailV4\Model\UpdateStatusRequest(); // \AdamToms\RoyalMailV4\Model\UpdateStatusRequest | Update Status Request

try {
    $apiInstance->v4ShipmentsStatusPut($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\UpdateStatusRequest**](../Model/UpdateStatusRequest.md)| Update Status Request | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

