# AdamToms\RoyalMailV4\TrackingsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4TrackingsPost**](TrackingsApi.md#v4trackingspost) | **POST** /v4/trackings | Trackings
[**v4TrackingsPushPayloadExamplePost**](TrackingsApi.md#v4trackingspushpayloadexamplepost) | **POST** /v4/trackings/PushPayloadExample | Tracking Webhook Push Payload Example

# **v4TrackingsPost**
> \AdamToms\RoyalMailV4\Model\ShipmentToTrackDetails[] v4TrackingsPost($body)

Trackings

Register the supplied tracking numbers and carrier code so that tracking events will be monitored and pushed to the tracking webhook, if configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AdamToms\RoyalMailV4\Model\CreateShipmentsToTrackRequest()); // \AdamToms\RoyalMailV4\Model\CreateShipmentsToTrackRequest[] | Trackings Request

try {
    $result = $apiInstance->v4TrackingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->v4TrackingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\CreateShipmentsToTrackRequest[]**](../Model/CreateShipmentsToTrackRequest.md)| Trackings Request | [optional]

### Return type

[**\AdamToms\RoyalMailV4\Model\ShipmentToTrackDetails[]**](../Model/ShipmentToTrackDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4TrackingsPushPayloadExamplePost**
> v4TrackingsPushPayloadExamplePost($body)

Tracking Webhook Push Payload Example

Example of the tracking webhook push notification payload, as sent to a customer's webhook when tracking information is received from a carrier. <br />For a webhook push notification to be triggered, the tracking number must be registered with PRO SHIPPING and a tracking account and tracking webhook must be configured. <br /> <br />*Note: this is an example of what PRO SHIPPING posts to the customer, it is not a functioning API endpoint.*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AdamToms\RoyalMailV4\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AdamToms\RoyalMailV4\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AdamToms\RoyalMailV4\Model\ShipmentTrackingWebhookPushPayload()); // \AdamToms\RoyalMailV4\Model\ShipmentTrackingWebhookPushPayload[] | 

try {
    $apiInstance->v4TrackingsPushPayloadExamplePost($body);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->v4TrackingsPushPayloadExamplePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AdamToms\RoyalMailV4\Model\ShipmentTrackingWebhookPushPayload[]**](../Model/ShipmentTrackingWebhookPushPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

