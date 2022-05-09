# SettlementInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An ID of an existing settlement to target, allowing a user to Checkout against a settlement with a discrepancy or a settlement required at a future date.  A string in the format &#x60;settlement_[0-9a-z]&#x60;. | [optional] 
**type** | [**AllOfSettlementInputType**](AllOfSettlementInputType.md) | The type of settlement to be created. | [optional] 
**to** | [**AllOfSettlementInputTo**](AllOfSettlementInputTo.md) | An object describing the beneficiary Participant for this settlement. | [optional] 
**amount** | **int** | The amount of the settlement described in the lowest denomination for the intent&#x27;s currency. ie, £1,000.00 should be provided as &#x60;100000&#x60;. | [optional] 
**description** | **string** | A description of the settlement that will be displayed as a line item in the Checkout UI. | [optional] 
**summary** | **string** | A further summary of the settlement that will be displayed under the line item in the Checkout UI. | [optional] 
**fee_flat** | **int** | A flat fee to charge the beneficiary Participant on successfully releasing funds from the settlement.  Fees are calculated in the following way: (&#x60;total&#x60; * (1 + &#x60;fee_percentage&#x60;)) + &#x60;fee_flat&#x60;. | [optional] 
**fee_percentage** | **float** | A fee percentage to charge the beneficiary Participant on successfully releasing funds from the settlement. Fee percentages must be provided as a fraction, ie. 1.5% as 0.015.  Fees are calculated in the following way: (&#x60;total&#x60; * (1 + &#x60;fee_percentage&#x60;)) + &#x60;fee_flat&#x60;. | [optional] 
**required_by** | **string** | A date that describes when the funds are required. If the funds are required at a future date, the amount will not be included in the total on the Checkout UI.  You can collect funds against this settlement at a later date by creating a new payment intent that targets the settlement ID when the buyer Participant agrees to the Checkout. | [optional] 
**release_at** | **string** | A date that describes when the funds should be released. If provided, we will automatically create a release of the remaining funds on the provided date. If the funds are not available the settlement will enter a negative balance. | [optional] 
**metadata** | **object** | A free-form metadata object that you can use to store against the settlement. This is incredibly useful for storing a correlation ID that relates to an entity on your own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

