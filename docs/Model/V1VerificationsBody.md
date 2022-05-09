# V1VerificationsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of an existing participant that needs to be verified.  A string in the format: &#x60;participant_[0-9a-z]&#x60; | [optional] 
**type** | [**AllOfv1VerificationsBodyType**](AllOfv1VerificationsBodyType.md) | The type of participant to verify. This helps inform the verification process in the Verify UI. | [optional] 
**email** | **string** | The email of the participant to verify. | [optional] 
**name** | **string** | The name of the participant to verify. | [optional] 
**address** | [**AllOfv1VerificationsBodyAddress**](AllOfv1VerificationsBodyAddress.md) | An object describing the address of the participant to verify. | [optional] 
**bank_account** | [**AllOfv1VerificationsBodyBankAccount**](AllOfv1VerificationsBodyBankAccount.md) | A bank account describing the address of the participant to verify. | [optional] 
**metadata** | **object** | A free-form metadata object that you can use to store against the intent. This is incredibly useful for storing a correlation ID that relates to an entity on your own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

