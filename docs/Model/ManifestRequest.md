# ManifestRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_location_id** | **string** | Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you) that we are manifesting. &lt;br /&gt;             &lt;br /&gt;*Required if you have more than one shipping location.* | [optional] 
**container_id** | **string** | Container Id &lt;br /&gt;Populate if you want to manifest a container. &lt;br /&gt;You must have created the container and added the shipments to manifest to it first. &lt;br /&gt;If this is populated, no other values other than the Shipping Location can be populated. | [optional] 
**status** | [**\AdamToms\RoyalMailV4\Model\ManifestShipmentStatus**](ManifestShipmentStatus.md) |  | [optional] 
**shipping_account_id** | **string** | Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you) that you want to manifest. &lt;br /&gt;Populate if want to manifest a specific shipping account only. &lt;br /&gt;*Not valid if you are manifesting by container.* | [optional] 
**service_code** | **string** | Service Code &lt;br /&gt;Populate if want to manifest a specific service only. &lt;br /&gt;*Not valid if you are manifesting by container.* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

