# AdamToms\RoyalMailV4\ProductsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ProductsGet**](ProductsApi.md#v4productsget) | **GET** /v4/products | Get Products
[**v4ProductsPost**](ProductsApi.md#v4productspost) | **POST** /v4/products | Add Product
[**v4ProductsSkuCodeDelete**](ProductsApi.md#v4productsskucodedelete) | **DELETE** /v4/products/{skuCode} | Delete Product
[**v4ProductsSkuCodeGet**](ProductsApi.md#v4productsskucodeget) | **GET** /v4/products/{skuCode} | Get Product
[**v4ProductsSkuCodePut**](ProductsApi.md#v4productsskucodeput) | **PUT** /v4/products/{skuCode} | Update Product

# **v4ProductsGet**
> \AdamToms\RoyalMailV4\Model\ProductsPagedResponse v4ProductsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir)

Get Products

Provides a list of all products set up on the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Search Term
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ProductsSortBy(); // \AdamToms\RoyalMailV4\Model\ProductsSortBy | Sort By <br />Default: Description
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ProductsGet($search_term, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v4ProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| Search Term | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\ProductsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Description | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ProductsPagedResponse**](../Model/ProductsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ProductsPost**
> \AdamToms\RoyalMailV4\Model\AddProductResponse v4ProductsPost($body)

Add Product

Add a new product to your stored products that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AdamToms\RoyalMailV4\Model\Product(); // \AdamToms\RoyalMailV4\Model\Product | Product details

try {
    $result = $apiInstance->v4ProductsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v4ProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\Product**](../Model/Product.md)| Product details | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\AddProductResponse**](../Model/AddProductResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ProductsSkuCodeDelete**
> v4ProductsSkuCodeDelete($sku_code)

Delete Product

Deletes a specified product from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_code = "sku_code_example"; // string | SKU Code <br />The SKU Code (Stock Keeping Unit Number assigned by you).

try {
    $apiInstance->v4ProductsSkuCodeDelete($sku_code);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v4ProductsSkuCodeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_code** | **string**| SKU Code &lt;br /&gt;The SKU Code (Stock Keeping Unit Number assigned by you). |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ProductsSkuCodeGet**
> \AdamToms\RoyalMailV4\Model\ProductList v4ProductsSkuCodeGet($sku_code)

Get Product

Provides details for a specific product. <br />Information about the country of origin, value, weight, description, HS Code and Sku Code will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_code = "sku_code_example"; // string | SKU Code <br />The SKU Code (Stock Keeping Unit Number assigned by you).

try {
    $result = $apiInstance->v4ProductsSkuCodeGet($sku_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v4ProductsSkuCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_code** | **string**| SKU Code &lt;br /&gt;The SKU Code (Stock Keeping Unit Number assigned by you). |

### Return type

[**\AdamToms\RoyalMailV4\Model\ProductList**](../Model/ProductList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ProductsSkuCodePut**
> v4ProductsSkuCodePut($sku_code, $body)

Update Product

Update a product that is already stored with new details. The whole product will be replaced with new details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_code = "sku_code_example"; // string | SKU Code <br />The SKU Code (Stock Keeping Unit Number assigned by you).
$body = new \AdamToms\RoyalMailV4\Model\Product(); // \AdamToms\RoyalMailV4\Model\Product | Product details

try {
    $apiInstance->v4ProductsSkuCodePut($sku_code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->v4ProductsSkuCodePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_code** | **string**| SKU Code &lt;br /&gt;The SKU Code (Stock Keeping Unit Number assigned by you). |
 **body** | [**\AdamToms\RoyalMailV4\Model\Product**](../Model/Product.md)| Product details | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

