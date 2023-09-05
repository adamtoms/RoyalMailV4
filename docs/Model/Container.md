# Container

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_id** | **string** | Container Id &lt;br /&gt;The Container Identifier | [optional] 
**created_date_utc** | [**\DateTime**](\DateTime.md) | Created Date UTC | [optional] 
**carrier_code** | **string** | Carrier Code &lt;br /&gt;The carrier that the container is for. Only shipments created for this carrier can be added to this container. | [optional] 
**shipping_location_alias** | **string** | Shipping Location &lt;br /&gt;The shipping location name/alias that this container is for. Only shipments created for this location can be added to this container. | [optional] 
**shipping_location_id** | **string** | Shipping Location Id &lt;br /&gt;The assigned Id for this location. | [optional] 
**total_weight** | **double** | Total Weight &lt;br /&gt;The total weight of all the shipments currently added to the container. | [optional] 
**weight_unit_of_measure** | [**\AdamToms\RoyalMailV4\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | [optional] 
**total_shipments** | **int** | Total Shipments &lt;br /&gt;The total number of shipments in the container. | [optional] 
**total_packages** | **int** | Total Packages &lt;br /&gt;The total number of packages in the container | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

