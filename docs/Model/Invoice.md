# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the invoice.  A string in the format &#x60;invoice_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the invoice was created. | [optional] 
**updated_at** | **string** | The date the invoice was last updated. | [optional] 
**status** | [**AllOfInvoiceStatus**](AllOfInvoiceStatus.md) | The status of the invoice. | [optional] 
**currency** | [**AllOfInvoiceCurrency**](AllOfInvoiceCurrency.md) | The currency of the invoice. | [optional] 
**intent_id** | **string** | The unique ID of the intent which caused the invoice to be created. | [optional] 
**project_id** | **string** | The project ID the invoice was created against. | [optional] 
**participant** | [**AllOfInvoiceParticipant**](AllOfInvoiceParticipant.md) | The buyer Participant of the invoice. | [optional] 
**settlements** | [**\Swagger\Client\Model\AllOfInvoiceSettlementsItems[]**](.md) | A list of settlements against the invoice. | [optional] 
**account** | [**AllOfInvoiceAccount**](AllOfInvoiceAccount.md) | Payment details for the underlying account that all invoice funds are held in. | [optional] 
**reference** | **string** | The unique reference for the invoice. This should be used for all bank transfers targeting this invoice. | [optional] 
**subtotal** | **int** | The invoice value denominated in the smallest unit for the currency. E.g. pence and cents. | [optional] 
**fee** | **int** | The buyer fees specified for the invoice intent, denominated in the smallest unit for the currency. E.g. pence and cents. | [optional] 
**total** | **int** | The full payable amount for the invoice (subtotal + fee), denominated in the smallest unit for the currency. E.g. pence and cents. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the payment intent that caused this invoice. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

