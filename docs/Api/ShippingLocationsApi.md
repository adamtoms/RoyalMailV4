# AdamToms\RoyalMailV4\ShippingLocationsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ShippingLocationsCarrierCodeGet**](ShippingLocationsApi.md#v4shippinglocationscarriercodeget) | **GET** /v4/shippingLocations/{carrierCode} | Get Carrier Locations
[**v4ShippingLocationsGet**](ShippingLocationsApi.md#v4shippinglocationsget) | **GET** /v4/shippingLocations | Get Locations
[**v4ShippingLocationsPost**](ShippingLocationsApi.md#v4shippinglocationspost) | **POST** /v4/shippingLocations | Add Location
[**v4ShippingLocationsShippingLocationIdDelete**](ShippingLocationsApi.md#v4shippinglocationsshippinglocationiddelete) | **DELETE** /v4/shippingLocations/{shippingLocationId} | Delete Location
[**v4ShippingLocationsShippingLocationIdGet**](ShippingLocationsApi.md#v4shippinglocationsshippinglocationidget) | **GET** /v4/shippingLocations/{shippingLocationId} | Get Location
[**v4ShippingLocationsShippingLocationIdPut**](ShippingLocationsApi.md#v4shippinglocationsshippinglocationidput) | **PUT** /v4/shippingLocations/{shippingLocationId} | Update Location
[**v4ShippingLocationsShippingLocationIdShippingAccountsGet**](ShippingLocationsApi.md#v4shippinglocationsshippinglocationidshippingaccountsget) | **GET** /v4/shippingLocations/{shippingLocationId}/shippingAccounts | Get Associated Accounts

# **v4ShippingLocationsCarrierCodeGet**
> \AdamToms\RoyalMailV4\Model\ShippingLocationsPagedResponse v4ShippingLocationsCarrierCodeGet($carrier_code, $search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Carrier Locations

Provides a list of all shipping locations associated with a specified carrier. <br />Note: A shipping location can be associated with more than one carrier. You would need to make individual API requests for each carrier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy(); // \AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy | Sort By <br />Default: Name
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingLocationsCarrierCodeGet($carrier_code, $search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsCarrierCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ShippingLocationsPagedResponse**](../Model/ShippingLocationsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsGet**
> \AdamToms\RoyalMailV4\Model\ShippingLocationsPagedResponse v4ShippingLocationsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Locations

Provides a list of all shipping locations set up on the system under your customer account. <br />Information about location alias, timezone, address, when it was last updated, and by who is included in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy(); // \AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy | Sort By <br />Default: Name
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingLocationsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\ShippingLocationsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ShippingLocationsPagedResponse**](../Model/ShippingLocationsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsPost**
> \AdamToms\RoyalMailV4\Model\AddShippingLocationResponse v4ShippingLocationsPost($body)

Add Location

Create a new shipping location with location alias, address details, and timezone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AdamToms\RoyalMailV4\Model\ShippingLocationRequest(); // \AdamToms\RoyalMailV4\Model\ShippingLocationRequest | Shipping Location Details

try {
    $result = $apiInstance->v4ShippingLocationsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\ShippingLocationRequest**](../Model/ShippingLocationRequest.md)| Shipping Location Details | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\AddShippingLocationResponse**](../Model/AddShippingLocationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsShippingLocationIdDelete**
> v4ShippingLocationsShippingLocationIdDelete($shipping_location_id)

Delete Location

Delete a specific shipping location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $apiInstance->v4ShippingLocationsShippingLocationIdDelete($shipping_location_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsShippingLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_location_id** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsShippingLocationIdGet**
> \AdamToms\RoyalMailV4\Model\ShippingLocation v4ShippingLocationsShippingLocationIdGet($shipping_location_id)

Get Location

Provides information for a specific shipping location, including location alias, timezone, address, when it was last updated, and by who.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you).

try {
    $result = $apiInstance->v4ShippingLocationsShippingLocationIdGet($shipping_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsShippingLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_location_id** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you). |

### Return type

[**\AdamToms\RoyalMailV4\Model\ShippingLocation**](../Model/ShippingLocation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsShippingLocationIdPut**
> v4ShippingLocationsShippingLocationIdPut($shipping_location_id, $body)

Update Location

Update shipping location details. <br />Note: All required fields must be populated in the request, regardless if they need updating or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you).
$body = new \AdamToms\RoyalMailV4\Model\ShippingLocationRequest(); // \AdamToms\RoyalMailV4\Model\ShippingLocationRequest | Shipping Location Details

try {
    $apiInstance->v4ShippingLocationsShippingLocationIdPut($shipping_location_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsShippingLocationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_location_id** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you). |
 **body** | [**\AdamToms\RoyalMailV4\Model\ShippingLocationRequest**](../Model/ShippingLocationRequest.md)| Shipping Location Details | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingLocationsShippingLocationIdShippingAccountsGet**
> \AdamToms\RoyalMailV4\Model\ShippingAccountsPagedResponse v4ShippingLocationsShippingLocationIdShippingAccountsGet($shipping_location_id, $search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Associated Accounts

Provides a list of all shipping accounts associated with a specified shipping location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you).
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ShippingAccountsSortBy(); // \AdamToms\RoyalMailV4\Model\ShippingAccountsSortBy | Sort By <br />Default: Name
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingLocationsShippingLocationIdShippingAccountsGet($shipping_location_id, $search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLocationsApi->v4ShippingLocationsShippingLocationIdShippingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_location_id** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id(assigned by PRO SHIPPING) or Alias(assigned by you). |
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\ShippingAccountsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ShippingAccountsPagedResponse**](../Model/ShippingAccountsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

