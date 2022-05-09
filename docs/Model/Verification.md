# Verification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of the verification.  A string in the format: &#x60;verification_[0-9a-z]&#x60;. | [optional] 
**type** | [**AllOfVerificationType**](AllOfVerificationType.md) | The type of participant the verification belongs to.  A string with a value that is one of: &#x60;unknown | business | individual | third_party&#x60;. | [optional] 
**status** | [**AllOfVerificationStatus**](AllOfVerificationStatus.md) | The verification status | [optional] 
**participant** | [**AllOfVerificationParticipant**](AllOfVerificationParticipant.md) | An object describing the participant to be verified. | [optional] 
**client_secret** | **string** | The client secret for the verification. _*This secret should never be stored on a backend system and should always be directly passed down to the expected participant&#x27;s device.*_ | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the verification. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

