# Manifest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifest_number** | **string** | Manifest Number | 
**carrier_code** | **string** | Carrier Code &lt;br /&gt;The carrier that this manifest is for. | 
**service** | **string** | Service &lt;br /&gt;The service included in this Manifest. If more than one, Mixed will be returned. | 
**total_weight** | **double** | Total Weight &lt;br /&gt;Sum of the weight of all shipments included on the Manifest. | 
**weight_unit_of_measure** | [**\AdamToms\RoyalMailV4\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | 
**total_shipments** | **int** | Total Shipments &lt;br /&gt;The total number of shipments included on this Manifest. | 
**total_items** | **int** | Total Items &lt;br /&gt;The total number of items (packages) included on this Manifest. | 
**manifest_date** | [**\DateTime**](\DateTime.md) | Manifest Date &lt;br /&gt;The date on the manifest. | 
**created_date_utc** | [**\DateTime**](\DateTime.md) | Created Date UTC &lt;br /&gt;The date the manifest was originally created. | 
**shipping_location** | [**\AdamToms\RoyalMailV4\Model\ManifestShippingLocation**](ManifestShippingLocation.md) |  | 
**shipping_account** | [**\AdamToms\RoyalMailV4\Model\ManifestShippingAccount**](ManifestShippingAccount.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

