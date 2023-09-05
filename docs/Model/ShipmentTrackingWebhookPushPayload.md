# ShipmentTrackingWebhookPushPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Tracking Number | 
**shipment_id** | **string** | Shipment Id &lt;br /&gt;The shipment identifier as returned from creating shipments or from the trackings API endpoint. | 
**shipper_reference** | **string** | Shipper Reference &lt;br /&gt;The shipper reference, as provided at the time the shipment was created or registered with the trackings API endpoint, or from the tracking event information (if available) if not supplied on shipment creation. | [optional] [default to '']
**carrier_code** | **string** | Carrier Code | 
**milestone** | **string** | Milestone &lt;br /&gt;Either an empty string if the tracking event does not correspond to a milestone and no milestones have been triggered for the shipment, or else one of the following: &lt;br /&gt; &lt;br /&gt;- COLLECTED &lt;br /&gt;- DELIVERED &lt;br /&gt;- DELIVERY ATTEMPT FAILED &lt;br /&gt;- IN CUSTOMS &lt;br /&gt;- IN TRANSIT &lt;br /&gt;- IT&#x27;S ON IT&#x27;S WAY &lt;br /&gt;- OUT FOR DELIVERY &lt;br /&gt;- PART DELIVERED &lt;br /&gt;- READY FOR COLLECTION &lt;br /&gt;- TRANSIT DELAY &lt;br /&gt;- UNDELIVERABLE | [optional] [default to '']
**milestone_date_time** | **string** | Milestone Date/Time &lt;br /&gt;Either an empty string if the tracking event does not correspond to a milestone and no milestones have been triggered for the shipment, or the milestone date and time. &lt;br /&gt;Format: YYYY-MM-DD HH:MM:SS | [optional] [default to '']
**events** | [**\AdamToms\RoyalMailV4\Model\ShipmentTrackingWebhookPushPayloadEvent[]**](ShipmentTrackingWebhookPushPayloadEvent.md) | Events | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

