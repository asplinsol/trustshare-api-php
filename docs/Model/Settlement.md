# Settlement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the settlement.  A string in the format &#x60;settlement_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the settlement was created. | [optional] 
**updated_at** | **string** | The date the settlement was last updated. | [optional] 
**currency** | [**AllOfSettlementCurrency**](AllOfSettlementCurrency.md) | The currency of the over-arching Project that this settlement is against. | [optional] 
**status** | [**AllOfSettlementStatus**](AllOfSettlementStatus.md) | The current status of the settlement. | [optional] 
**type** | [**AllOfSettlementType**](AllOfSettlementType.md) | The type of the settlement. | [optional] 
**from** | [**AllOfSettlementFrom**](AllOfSettlementFrom.md) | An object describing the buyer Participant for the settlement. | [optional] 
**to** | [**AllOfSettlementTo**](AllOfSettlementTo.md) | An object describing the beneficiary Participant for the settlement. In the case of a &#x60;funding&#x60; settlement this value will always be null. | [optional] 
**amount** | **int** | The amount of the settlement. | [optional] 
**description** | **string** | The provided description of the settlement. | [optional] 
**summary** | **string** | The provided summary of the settlement. | [optional] 
**balance** | **int** | The current balance of the settlement. The balance for a settlement is calculated in the following way:  &#x60;balance&#x60; &#x3D; &#x60;received&#x60; - (&#x60;released&#x60; + &#x60;refunded&#x60;)  A negative balance infers that funds have been released however we are still waiting for funds to reconcile into the settlement. | [optional] 
**fee_flat** | **int** | The flat fee to charge the beneficiary Participant on successfully releasing funds from the settlement. | [optional] 
**fee_percentage** | **float** | The fee percentage to charge the beneficiary Participant on successfully releasing funds from the settlement. | [optional] 
**required_by** | **string** | The date that describes when the funds are required. | [optional] 
**release_at** | **string** | The date that describes when the funds should be released. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the underlying settlement intent. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

