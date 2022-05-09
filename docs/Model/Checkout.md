# Checkout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the checkout.  A string in the format &#x60;checkout_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the checkout was created. | [optional] 
**updated_at** | **string** | The date the checkout was last updated. | [optional] 
**type** | [**AllOfCheckoutType**](AllOfCheckoutType.md) | The type of the checkout. | [optional] 
**status** | [**AllOfCheckoutStatus**](AllOfCheckoutStatus.md) | The status of the checkout. | [optional] 
**participant** | [**AllOfCheckoutParticipant**](AllOfCheckoutParticipant.md) | The buyer Participant of the checkout. | [optional] 
**amount** | **int** | The amount of the checkout. | [optional] 
**reference** | **string** | The unique reference for the checkout. | [optional] 
**intent_id** | **string** | The unique ID of the intent which caused the checkout to be created. This value will be null if the checkout was created via our Direct mechanism. | [optional] 
**project_id** | **string** | The unique ID of the project which this checkout will fund. | [optional] 
**transfers** | [**\Swagger\Client\Model\AllOfCheckoutTransfersItems[]**](.md) | A list of fee transfers associated with the checkout. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the payment intent that caused this checkout. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

