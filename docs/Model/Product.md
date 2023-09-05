# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_code** | **string** | Product SKU &lt;br /&gt;Stock Keeping Unit Number. | 
**description** | **string** | Product Description | 
**value** | **double** | Product Value &lt;br /&gt;The value of an individual product. | 
**weight** | **string** | Weight &lt;br /&gt;The weight of an individual product in the unit of measure specified by WeightUnitOfMeasure (defaults to KG). &lt;br /&gt;             &lt;br /&gt;Required for dutiable shipments. &lt;br /&gt;The minimum weight allowed is 1 gram(for dutiable shipments only). &lt;br /&gt;The maximum weight allowed is 1000 KG. | 
**hs_code** | **string** | HS Code &lt;br /&gt;The Harmonized Commodity Description and Coding System Code. &lt;br /&gt;At minimum, the 6 alpha numeric code is required when the HS Code is provided (some services/destinations may require 8). &lt;br /&gt;Up to a 13 digit alpha numeric code can be used. &lt;br /&gt;Dots and spaces in your code are also allowed. &lt;br /&gt;Used by Customs to calculate potential duties / taxes. &lt;br /&gt;             &lt;br /&gt;Required by some carriers for dutiable shipments. | [optional] 
**country_of_origin** | **string** | Country of Origin / Manufacture &lt;br /&gt;ISO Alpha-2 Country Code &lt;br /&gt;             &lt;br /&gt;Required by some carriers for dutiable shipments. | [optional] 
**currency_code** | **string** | Currency Code &lt;br /&gt;The currency code used for any monetary value related to the shipment. &lt;br /&gt;3 letter ISO Currency Code &lt;br /&gt;             &lt;br /&gt;*Required if any monetary values other than zero are provided.* | 
**weight_unit_of_measure** | [**\AdamToms\RoyalMailV4\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

