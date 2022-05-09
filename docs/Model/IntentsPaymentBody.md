# IntentsPaymentBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**AllOfintentsPaymentBodyType**](AllOfintentsPaymentBodyType.md) | The type of Payment Intent to create. | 
**currency** | [**AllOfintentsPaymentBodyCurrency**](AllOfintentsPaymentBodyCurrency.md) | The currency to collect for the payment. If a &#x60;project_id&#x60; is provided, this currency must equate to the currency of the project account. | [optional] 
**from** | [**AllOfintentsPaymentBodyFrom**](AllOfintentsPaymentBodyFrom.md) | Optionally provide the buyer Participant to prefill information in the Checkout UI. If no buyer Participant is provided, then the Checkout UI will include a field to collect their email address. Not providing a buyer Participant is best practice when creating a &#x60;payment_link&#x60; intent where you expect multiple different buyers to interact with the link. | [optional] 
**project_id** | **string** | Optionally provide a &#x60;project_id&#x60; to target the payemnt at an existing project account. If no &#x60;project_id&#x60; is provided, a new Project will be automatically provisioned for you. | [optional] 
**fee_flat** | **int** | A flat fee to charge the buyer Participant on successfully completing a Checkout. | [optional] 
**fee_percentage** | **float** | A fee percentage to charge the buyer Participant on successfully completing a Checkout. Fee percentages must be provided as a fraction, ie. 1.5% as 0.015. | [optional] 
**settlements** | [**\Swagger\Client\Model\AllOfintentsPaymentBodySettlementsItems[]**](.md) | A list of settlements that the buyer Participant must fulfill. | 
**metadata** | **object** | A free-form metadata object that you can use to store against the intent. This is incredibly useful for storing a correlation ID that relates to an entity on your own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

