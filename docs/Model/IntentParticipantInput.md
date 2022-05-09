# IntentParticipantInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of a participant to use for this intent.  A string in the format: &#x60;participant_[0-9a-z]&#x60;. | [optional] 
**email** | **string** | The email address of the participant in this intent. | [optional] 
**type** | [**AllOfIntentParticipantInputType**](AllOfIntentParticipantInputType.md) | The type of participant. | [optional] 
**name** | **string** | The participant&#x27;s name. | [optional] 
**address** | [**AllOfIntentParticipantInputAddress**](AllOfIntentParticipantInputAddress.md) | An object describing the participant&#x27;s address. | [optional] 
**bank_account** | [**AllOfIntentParticipantInputBankAccount**](AllOfIntentParticipantInputBankAccount.md) | An object describing the participant&#x27;s bank account. | [optional] 
**metadata** | **object** | A free-form metadata object that you can use to store against the participant. This is incredibly useful for storing a correlation ID that relates to an entity on your own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

