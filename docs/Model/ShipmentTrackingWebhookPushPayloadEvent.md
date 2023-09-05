# ShipmentTrackingWebhookPushPayloadEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Event Id &lt;br /&gt;A unique identifier for the tracking event | 
**event_type** | **string** | Event Type &lt;br /&gt;One of the following: &lt;br /&gt; &lt;br /&gt;- Delivery (if a final event) &lt;br /&gt;- Milestone (if a tracking event that triggered a change of milestone) &lt;br /&gt;- Tracking | 
**event_description** | **string** | Event Description | 
**event_date_time** | **string** | Event Date/Time &lt;br /&gt;Format: YYYY-MM-DD HH:MM:SS | 
**event_utc_offset** | **string** | Event UTC Offset &lt;br /&gt;The UTC offset of the event date/time, if provided by the carrier. | [optional] [default to '']
**event_location** | [**\AdamToms\RoyalMailV4\Model\ShipmentTrackingWebhookPushPayloadEventLocation**](ShipmentTrackingWebhookPushPayloadEventLocation.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

