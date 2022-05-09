# PaymentIntent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the created intent. | [optional] 
**created_at** | **string** | The date the payment intent was created. | [optional] 
**updated_at** | **string** | The date the payment intent was last updated. | [optional] 
**from** | [**AllOfPaymentIntentFrom**](AllOfPaymentIntentFrom.md) | An object describing the buying Participant for the payment. Will be &#x60;null&#x60; when created without a defined buyer. | [optional] 
**client_secret** | **string** | The client secret for the intent. _*This secret should never be stored on a backend system and should always be directly passed down to the expected participant&#x27;s device.*_ | [optional] 
**status** | [**AllOfPaymentIntentStatus**](AllOfPaymentIntentStatus.md) | The status of the payment intent. | [optional] 
**currency** | [**AllOfPaymentIntentCurrency**](AllOfPaymentIntentCurrency.md) | The currency of the payment intent. If this payment intent is not against an existing Project, the currency here will dictate the currency that the transactional account should be provisioned for. | [optional] 
**type** | [**AllOfPaymentIntentType**](AllOfPaymentIntentType.md) | The type of the payment intent. | [optional] 
**fee_flat** | **int** | A flat fee to charge the buyer Participant on successfully completing the intent.  Fees are calculated in the following way: (&#x60;total&#x60; * (1 + &#x60;fee_percentage&#x60;)) + &#x60;fee_flat&#x60;. | [optional] 
**fee_percentage** | **float** | A fee percentage to charge the buyer Participant on successfully completing the intent. Fee percentages must be provided as a fraction, ie. 1.5% as 0.015.  Fees are calculated in the following way: (&#x60;total&#x60; * (1 + &#x60;fee_percentage&#x60;)) + &#x60;fee_flat&#x60;. | [optional] 
**settlements** | [**\Swagger\Client\Model\AllOfPaymentIntentSettlementsItems[]**](.md) | A list of settlement intents. These describe the line items that will be displayed on the Checkout UI. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the payment intent. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

