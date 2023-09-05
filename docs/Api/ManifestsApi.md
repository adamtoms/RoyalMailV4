# AdamToms\RoyalMailV4\ManifestsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ManifestsCarrierCodeGet**](ManifestsApi.md#v4manifestscarriercodeget) | **GET** /v4/manifests/{carrierCode} | Get Manifests
[**v4ManifestsCarrierCodeManifestNumberGet**](ManifestsApi.md#v4manifestscarriercodemanifestnumberget) | **GET** /v4/manifests/{carrierCode}/{manifestNumber} | Print Manifest
[**v4ManifestsCarrierCodeManifestNumberShipmentsGet**](ManifestsApi.md#v4manifestscarriercodemanifestnumbershipmentsget) | **GET** /v4/manifests/{carrierCode}/{manifestNumber}/shipments | Get Manifest Details
[**v4ManifestsCarrierCodePost**](ManifestsApi.md#v4manifestscarriercodepost) | **POST** /v4/manifests/{carrierCode} | Manifest Shipments

# **v4ManifestsCarrierCodeGet**
> \AdamToms\RoyalMailV4\Model\ManifestsPagedResponse v4ManifestsCarrierCodeGet($carrier_code, $shipping_location_id, $shipping_account_id, $date_from, $date_to, $page_size, $page_number)

Get Manifests

Provides list of manifests created in a given time period for a specific carrier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Id <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping location
$shipping_account_id = "shipping_account_id_example"; // string | Shipping Account Id <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping location
$date_from = new \DateTime("2013-10-20"); // \DateTime | Date From <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$date_to = new \DateTime("2013-10-20"); // \DateTime | Date To <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.

try {
    $result = $apiInstance->v4ManifestsCarrierCodeGet($carrier_code, $shipping_location_id, $shipping_account_id, $date_from, $date_to, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->v4ManifestsCarrierCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **shipping_location_id** | **string**| Shipping Location Id &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping location | [optional]
 **shipping_account_id** | **string**| Shipping Account Id &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping location | [optional]
 **date_from** | **\DateTime**| Date From &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **date_to** | **\DateTime**| Date To &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]

### Return type

[**\AdamToms\RoyalMailV4\Model\ManifestsPagedResponse**](../Model/ManifestsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ManifestsCarrierCodeManifestNumberGet**
> \AdamToms\RoyalMailV4\Model\ManifestResponse v4ManifestsCarrierCodeManifestNumberGet($carrier_code, $manifest_number)

Print Manifest

Provides base64 encoded image and details for a specific manifest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$manifest_number = "manifest_number_example"; // string | Manifest Number

try {
    $result = $apiInstance->v4ManifestsCarrierCodeManifestNumberGet($carrier_code, $manifest_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->v4ManifestsCarrierCodeManifestNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **manifest_number** | **string**| Manifest Number |

### Return type

[**\AdamToms\RoyalMailV4\Model\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ManifestsCarrierCodeManifestNumberShipmentsGet**
> \AdamToms\RoyalMailV4\Model\ManifestDetailsResponse v4ManifestsCarrierCodeManifestNumberShipmentsGet($carrier_code, $manifest_number)

Get Manifest Details

Provides manifest details for a specific manifest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$manifest_number = "manifest_number_example"; // string | Manifest Number

try {
    $result = $apiInstance->v4ManifestsCarrierCodeManifestNumberShipmentsGet($carrier_code, $manifest_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->v4ManifestsCarrierCodeManifestNumberShipmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **manifest_number** | **string**| Manifest Number |

### Return type

[**\AdamToms\RoyalMailV4\Model\ManifestDetailsResponse**](../Model/ManifestDetailsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ManifestsCarrierCodePost**
> \AdamToms\RoyalMailV4\Model\ManifestResponse[] v4ManifestsCarrierCodePost($carrier_code, $body)

Manifest Shipments

By manifesting shipments you declare what shipments are ready for dispatch and will be handed over to the carrier.  <br />The API allows you to manifest via the below methods (parameters): <br /> <br />- shipping location <br />- shipping account <br />- shipment status (picked / on-hold) <br />- service code <br />- container <br /> <br />Note: If no parameters are set, all shipments in the LabelPrinted or Picked status will be manifested (excluding future dated shipments or shipments assigned to a container). <br /> <br />The API response contains a manifest image which should be printed and handed over to the driver (if required).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$body = new \AdamToms\RoyalMailV4\Model\ManifestRequest(); // \AdamToms\RoyalMailV4\Model\ManifestRequest | Manifest Request

try {
    $result = $apiInstance->v4ManifestsCarrierCodePost($carrier_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->v4ManifestsCarrierCodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **body** | [**\AdamToms\RoyalMailV4\Model\ManifestRequest**](../Model/ManifestRequest.md)| Manifest Request | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ManifestResponse[]**](../Model/ManifestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

