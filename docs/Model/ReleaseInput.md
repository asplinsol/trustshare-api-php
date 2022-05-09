# ReleaseInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settlement_id** | **string** | A unique ID of the settlement to release funds from.  A string in the format: &#x60;settlement_[0-9a-z]&#x60;. | [optional] 
**project_id** | **string** | A unique ID of the project to release funds from.  A string in the format: &#x60;project_[0-9a-z]&#x60;. | [optional] 
**amount** | **int** | The amount to release in the currencys lowest denomination. | [optional] 
**fee_flat** | **int** | A flat fee to charge the beneficiary Participant on successfully releasing funds. | [optional] 
**fee_percentage** | **float** | The fee percentage to charge the beneficiary Participant on successfully releasing funds. | [optional] 
**to** | [**AllOfReleaseInputTo**](AllOfReleaseInputTo.md) | An object describing the beneficiary participant to release to.  You can only provide a participant at release when the settlement is of type &#x60;funded&#x60; or you are releasing directly from a project. | [optional] 
**metadata** | **object** | A free-form metadata object that you can use to store against the outbound. This is incredibly useful for storing a correlation ID that relates to an entity on your own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

