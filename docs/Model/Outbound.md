# Outbound

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the outbound.  A string in the format &#x60;outbound_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the outbound was created. | [optional] 
**updated_at** | **string** | The date the outbound was last updated. | [optional] 
**project_id** | **string** | The project ID the outbound was created against. | [optional] 
**settlement_id** | **string** | The settlement ID the outbound was created against. In the event funds were released directly from a project, this value will be null. | [optional] 
**type** | [**AllOfOutboundType**](AllOfOutboundType.md) | The type of the outbound. | [optional] 
**status** | [**AllOfOutboundStatus**](AllOfOutboundStatus.md) | The status of the outbound. | [optional] 
**amount** | **int** | The amount of the outbound. | [optional] 
**to** | [**AllOfOutboundTo**](AllOfOutboundTo.md) | An object describing the beneficiary Participant for the outbound payment. | [optional] 
**transfers** | [**\Swagger\Client\Model\AllOfOutboundTransfersItems[]**](.md) | A list of any transfers created as the result of the outbound. | [optional] 
**conversion** | [**AllOfOutboundConversion**](AllOfOutboundConversion.md) | An object describing a potential currency conversion to achieve the outbound. | [optional] 
**paused_reason** | [**AllOfOutboundPausedReason**](AllOfOutboundPausedReason.md) | The reason why the outbound is currently in a &#x60;paused&#x60; status. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the release or refund. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

