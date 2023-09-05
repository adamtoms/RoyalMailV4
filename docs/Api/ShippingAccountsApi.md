# AdamToms\RoyalMailV4\ShippingAccountsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ShippingAccountsCarrierCodeShippingAccountIdDelete**](ShippingAccountsApi.md#v4shippingaccountscarriercodeshippingaccountiddelete) | **DELETE** /v4/shippingAccounts/{carrierCode}/{shippingAccountId} | Delete Account
[**v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut**](ShippingAccountsApi.md#v4shippingaccountscarriercodeshippingaccountidunlinklocationsput) | **PUT** /v4/shippingAccounts/{carrierCode}/{shippingAccountId}/unlinkLocations | Unlink Locations
[**v4ShippingAccountsGet**](ShippingAccountsApi.md#v4shippingaccountsget) | **GET** /v4/shippingAccounts | Get Accounts

# **v4ShippingAccountsCarrierCodeShippingAccountIdDelete**
> v4ShippingAccountsCarrierCodeShippingAccountIdDelete($carrier_code, $shipping_account_id)

Delete Account

Delete a specific shipping account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$shipping_account_id = "shipping_account_id_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $apiInstance->v4ShippingAccountsCarrierCodeShippingAccountIdDelete($carrier_code, $shipping_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsCarrierCodeShippingAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **shipping_account_id** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut**
> v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut($carrier_code, $shipping_account_id, $body)

Unlink Locations

Unlink one or more shipping location from a specific carrier shipping account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | Carrier Code
$shipping_account_id = "shipping_account_id_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = array(new \AdamToms\RoyalMailV4\Model\ShippingLocationIdRequest()); // \AdamToms\RoyalMailV4\Model\ShippingLocationIdRequest[] | Shipping Locations
The locations to remove from the account.
At least one location must be provided.

try {
    $apiInstance->v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut($carrier_code, $shipping_account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier Code |
 **shipping_account_id** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\AdamToms\RoyalMailV4\Model\ShippingLocationIdRequest[]**](../Model/ShippingLocationIdRequest.md)| Shipping Locations
The locations to remove from the account.
At least one location must be provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsGet**
> \AdamToms\RoyalMailV4\Model\ShippingAccountsPagedResponse v4ShippingAccountsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Accounts

Provides a list of all shipping accounts for all carriers (created on your customer account). <br />Information about the associated carrier, account number, account type, and contact details is included in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ShippingAccountsSortBy(); // \AdamToms\RoyalMailV4\Model\ShippingAccountsSortBy | Sort By <br />Default: Name
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingAccountsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

