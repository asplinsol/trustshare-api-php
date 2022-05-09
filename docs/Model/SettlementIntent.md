# SettlementIntent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | The date the settlement intent was created. | [optional] 
**updated_at** | **string** | The date the settlement intent was last updated. | [optional] 
**to** | [**AllOfSettlementIntentTo**](AllOfSettlementIntentTo.md) | The beneficiary Participant of the settlement intent. Where the type is &#x60;funding&#x60; this will be &#x60;null&#x60;. | [optional] 
**type** | [**AllOfSettlementIntentType**](AllOfSettlementIntentType.md) | The settlement intent type. | [optional] 
**amount** | **int** | The amount of the settlement intent. | [optional] 
**description** | **string** | A description of the reason for the settlement. | [optional] 
**summary** | **string** | An optional summary of the settlement. | [optional] 
**fee_flat** | **int** | The flat fee the beneficiary Participant will be pay on each release from the settlement. | [optional] 
**fee_percentage** | **float** | The percentage fee the beneficiary Participant will pay on each release from the settlement. | [optional] 
**required_by** | **string** | A date that describes when the funds are required. If the funds are required at a future date, the amount will not be included in the total on the Checkout UI.  You can collect funds against this settlement at a later date by creating a new payment intent that targets the settlement ID when the buyer Participant agrees to the Checkout. | [optional] 
**release_at** | **string** | A date that describes when the funds should be released. If provided, we will automatically create a release of the remaining funds on the provided date. If the funds are not available the settlement will enter a negative balance. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the settlement intent. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

