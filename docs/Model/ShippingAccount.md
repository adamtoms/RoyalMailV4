# ShippingAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_account_id** | **string** | Shipping Account Id &lt;br /&gt;The system identifier for this account. &lt;br /&gt;Use one of the Id or Alias in the Create Shipment Request to identify the account to use. | 
**carrier_code** | **string** | Carrier Code &lt;br /&gt;The carrier that this shipping account is for. | 
**account_number** | **string** | Carrier Account Number &lt;br /&gt;The account number given by the carrier. | [optional] 
**account_type** | [**\AdamToms\RoyalMailV4\Model\AccountType**](AccountType.md) |  | 
**account_name** | **string** | Shipping Account Name &lt;br /&gt;The name of the Shipping Account. | 
**account_alias** | **string** | Shipping Account Alias &lt;br /&gt;Your identifier for this account. Must be unique. | 
**account_status** | **string** | Account Status &lt;br /&gt;The status of the shipping account. | 
**contact_name** | **string** | Contact Name &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact name if the shipper address is not provided. | 
**contact_number** | **string** | Contact Number &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact number if the shipper address is not provided, and the contact number is not set on the associated shipping location. | 
**last_updated_by** | **string** | Last Updated By &lt;br /&gt;The user that last updated the shipping account. | 
**last_updated_date_utc** | [**\DateTime**](\DateTime.md) | Last Updated Date UTC &lt;br /&gt;The system date and time when the shipping account was last updated. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

