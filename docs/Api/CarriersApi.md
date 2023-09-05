# AdamToms\RoyalMailV4\CarriersApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4CarriersCarrierCodeGet**](CarriersApi.md#v4carrierscarriercodeget) | **GET** /v4/carriers/{carrierCode} | Get Carrier
[**v4CarriersCarrierCodeServicesGet**](CarriersApi.md#v4carrierscarriercodeservicesget) | **GET** /v4/carriers/{carrierCode}/services | Get Carrier Services
[**v4CarriersCarrierCodeServicesServiceCodePackageTypesGet**](CarriersApi.md#v4carrierscarriercodeservicesservicecodepackagetypesget) | **GET** /v4/carriers/{carrierCode}/services/{serviceCode}/packageTypes | Get Carrier Service Package Types
[**v4CarriersGet**](CarriersApi.md#v4carriersget) | **GET** /v4/carriers | Get Carriers

# **v4CarriersCarrierCodeGet**
> \AdamToms\RoyalMailV4\Model\CarrierDetailed v4CarriersCarrierCodeGet($carrier_code)

Get Carrier

Provides additional information for a specific carrier, i.e. carrier code and logo image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code.

try {
    $result = $apiInstance->v4CarriersCarrierCodeGet($carrier_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->v4CarriersCarrierCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code. |

### Return type

[**\AdamToms\RoyalMailV4\Model\CarrierDetailed**](../Model/CarrierDetailed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4CarriersCarrierCodeServicesGet**
> \AdamToms\RoyalMailV4\Model\CarrierService[] v4CarriersCarrierCodeServicesGet($carrier_code)

Get Carrier Services

Provides all services available for a specific carrier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code.

try {
    $result = $apiInstance->v4CarriersCarrierCodeServicesGet($carrier_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->v4CarriersCarrierCodeServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code. |

### Return type

[**\AdamToms\RoyalMailV4\Model\CarrierService[]**](../Model/CarrierService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4CarriersCarrierCodeServicesServiceCodePackageTypesGet**
> \AdamToms\RoyalMailV4\Model\CarrierServicePackageType[] v4CarriersCarrierCodeServicesServiceCodePackageTypesGet($carrier_code, $service_code)

Get Carrier Service Package Types

Provides information about package types allowed for a specific carrier service (i.e. letter, parcel, printed papers) including maximum weight and dimensions.  <br /> <br />Note: If a carrier does not offer/have service package types, an empty list is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code.
$service_code = "service_code_example"; // string | Service Code.

try {
    $result = $apiInstance->v4CarriersCarrierCodeServicesServiceCodePackageTypesGet($carrier_code, $service_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->v4CarriersCarrierCodeServicesServiceCodePackageTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code. |
 **service_code** | **string**| Service Code. |

### Return type

[**\AdamToms\RoyalMailV4\Model\CarrierServicePackageType[]**](../Model/CarrierServicePackageType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4CarriersGet**
> \AdamToms\RoyalMailV4\Model\Carrier[] v4CarriersGet()

Get Carriers

Provides a list of all carriers available on the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v4CarriersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->v4CarriersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AdamToms\RoyalMailV4\Model\Carrier[]**](../Model/Carrier.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

