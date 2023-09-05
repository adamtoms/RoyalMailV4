# AdamToms\RoyalMailV4\ContainersApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ContainersContainerIdDelete**](ContainersApi.md#v4containerscontaineriddelete) | **DELETE** /v4/containers/{containerId} | Delete Container
[**v4ContainersContainerIdGet**](ContainersApi.md#v4containerscontaineridget) | **GET** /v4/containers/{containerId} | Get Container
[**v4ContainersContainerIdPut**](ContainersApi.md#v4containerscontaineridput) | **PUT** /v4/containers/{containerId} | Add/Remove Shipments
[**v4ContainersGet**](ContainersApi.md#v4containersget) | **GET** /v4/containers | Get Containers
[**v4ContainersPost**](ContainersApi.md#v4containerspost) | **POST** /v4/containers | Add Container

# **v4ContainersContainerIdDelete**
> v4ContainersContainerIdDelete($container_id)

Delete Container

Delete a specific container.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = "container_id_example"; // string | Container Id <br />PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $apiInstance->v4ContainersContainerIdDelete($container_id);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->v4ContainersContainerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Container Id &lt;br /&gt;PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ContainersContainerIdGet**
> \AdamToms\RoyalMailV4\Model\Container v4ContainersContainerIdGet($container_id)

Get Container

Provides details for a specific container. <br />Information about the associated carrier, shipping location, total weight, number of shipments and packages in the containers will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = "container_id_example"; // string | Container Id <br />PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you) for the container.

try {
    $result = $apiInstance->v4ContainersContainerIdGet($container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->v4ContainersContainerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Container Id &lt;br /&gt;PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you) for the container. |

### Return type

[**\AdamToms\RoyalMailV4\Model\Container**](../Model/Container.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ContainersContainerIdPut**
> v4ContainersContainerIdPut($container_id, $body)

Add/Remove Shipments

Allocate shipments to a container or remove them from it before the container will be manifested.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = "container_id_example"; // string | Container Id <br />PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = new \AdamToms\RoyalMailV4\Model\UpdateContainerRequest(); // \AdamToms\RoyalMailV4\Model\UpdateContainerRequest | Update Container Request

try {
    $apiInstance->v4ContainersContainerIdPut($container_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->v4ContainersContainerIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Container Id &lt;br /&gt;PRO SHIPPING Container Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\AdamToms\RoyalMailV4\Model\UpdateContainerRequest**](../Model/UpdateContainerRequest.md)| Update Container Request | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ContainersGet**
> \AdamToms\RoyalMailV4\Model\ContainersPagedResponse v4ContainersGet($carrier_code, $shipping_location_id, $page_size, $page_number, $sort_by, $sort_dir)

Get Containers

Provides a list of all containers set up on the system. <br />Information about the associated carrier, shipping location, total weight, number of shipments and packages in the containers will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | CarrierCode <br />Filter by carrier
$shipping_location_id = "shipping_location_id_example"; // string | Shipping Location Id <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping location
$page_size = 100; // int | The maximum number of records per page.
$page_number = 1; // int | The number of the requested page, starting at 1.
$sort_by = new \AdamToms\RoyalMailV4\Model\ContainersSortBy(); // \AdamToms\RoyalMailV4\Model\ContainersSortBy | Sort By <br />Default: CreatedDateUtc
$sort_dir = new \AdamToms\RoyalMailV4\Model\OrderDirection(); // \AdamToms\RoyalMailV4\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ContainersGet($carrier_code, $shipping_location_id, $page_size, $page_number, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->v4ContainersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| CarrierCode &lt;br /&gt;Filter by carrier | [optional]
 **shipping_location_id** | **string**| Shipping Location Id &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping location | [optional]
 **page_size** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **page_number** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sort_by** | [**\AdamToms\RoyalMailV4\Model\ContainersSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: CreatedDateUtc | [optional]
 **sort_dir** | [**\AdamToms\RoyalMailV4\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ContainersPagedResponse**](../Model/ContainersPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ContainersPost**
> \AdamToms\RoyalMailV4\Model\AddContainerResponse v4ContainersPost($body)

Add Container

Create and name (with and ID or alias) a new container to be used for manifesting a specific group of shipments. Define which carrier and shipping location the container should be linked to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AdamToms\RoyalMailV4\Model\AddContainerRequest(); // \AdamToms\RoyalMailV4\Model\AddContainerRequest | Add Container Request

try {
    $result = $apiInstance->v4ContainersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->v4ContainersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\AddContainerRequest**](../Model/AddContainerRequest.md)| Add Container Request | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\AddContainerResponse**](../Model/AddContainerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

