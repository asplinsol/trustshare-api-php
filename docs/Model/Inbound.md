# Inbound

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the inbound.  A string in the format &#x60;inbound_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the project was created. | [optional] 
**updated_at** | **string** | The date the project was last updated. | [optional] 
**checkout_id** | **string** | The unique ID of the checkout that this inbound has been reconciled against.  If we were unable to reconcile the inbound to a specific checkout this value will be null. | [optional] 
**type** | [**AllOfInboundType**](AllOfInboundType.md) | The type of the inbound. | [optional] 
**status** | [**AllOfInboundStatus**](AllOfInboundStatus.md) | The status of the inbound. | [optional] 
**amount** | **int** | The amount of the inbound. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

