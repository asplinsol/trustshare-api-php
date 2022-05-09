# ProjectAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [**AllOfProjectAccountCurrency**](AllOfProjectAccountCurrency.md) | The currency the project account is held in. | [optional] 
**iban** | **string** | The IBAN of the project account. | [optional] 
**account_number** | **string** | The account number of the project account. For EUR accounts, this will be &#x60;null&#x60;. | [optional] 
**routing_data** | [**\Swagger\Client\Model\AllOfProjectAccountRoutingDataItems[]**](.md) | Object array containing account routing information required to make payments to the project account. The below table describes the types of &#x60;routing_data&#x60; you can receive for each project holding currency. | currency | routing_code_type          | | -------- | -------------------------- | | usd      | &#x60;ach&#x60;, &#x60;wire&#x60;, &#x60;bic_swift&#x60; | | eur      | &#x60;bic_swift&#x60;                | | gbp      | &#x60;sort_code&#x60;, &#x60;bic_swift&#x60;   | | [optional] 
**metadata** | **object** | Project account metadata associated with sending payments, such as bank name and address. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

