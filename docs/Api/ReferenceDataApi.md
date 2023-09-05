# AdamToms\RoyalMailV4\ReferenceDataApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4CountriesGet**](ReferenceDataApi.md#v4countriesget) | **GET** /v4/countries | Get Countries
[**v4CurrenciesGet**](ReferenceDataApi.md#v4currenciesget) | **GET** /v4/currencies | Get Currencies
[**v4TimezonesGet**](ReferenceDataApi.md#v4timezonesget) | **GET** /v4/timezones | Get Time Zones

# **v4CountriesGet**
> \AdamToms\RoyalMailV4\Model\CountriesPagedResponse v4CountriesGet($search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Countries

Provides a list of all countries available on the system. <br />Information about country name, ISO Alpha-2 and Alpha-3 country code, country group, and further details are returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\CountriesSortBy(); // \AdamToms\RoyalMailV4\Model\CountriesSortBy | Sort By <br />Default: CountryName
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4CountriesGet($search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->v4CountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\CountriesSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: CountryName | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\CountriesPagedResponse**](../Model/CountriesPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4CurrenciesGet**
> \AdamToms\RoyalMailV4\Model\CurrenciesPagedResponse v4CurrenciesGet($search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Currencies

Provides a list of all currencies available on the system. <br />Information about currency name and code is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\CurrenciesSortBy(); // \AdamToms\RoyalMailV4\Model\CurrenciesSortBy | Sort By <br />Default: CurrencyName
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4CurrenciesGet($search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->v4CurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\CurrenciesSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: CurrencyName | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\CurrenciesPagedResponse**](../Model/CurrenciesPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4TimezonesGet**
> \AdamToms\RoyalMailV4\Model\TimezonesPagedResponse v4TimezonesGet($country_code, $search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Time Zones

Provides a list of all time zones available on the system. <br />Information about time zone name, UTC offset and country is returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = ""; // string | CountryCode <br />Filter by country code (ISO)
$search_term = ""; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\TimezonesSortBy(); // \AdamToms\RoyalMailV4\Model\TimezonesSortBy | Sort By <br />Default: CountryCode
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4TimezonesGet($country_code, $search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->v4TimezonesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| CountryCode &lt;br /&gt;Filter by country code (ISO) | [optional]
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\TimezonesSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: CountryCode | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\TimezonesPagedResponse**](../Model/TimezonesPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

