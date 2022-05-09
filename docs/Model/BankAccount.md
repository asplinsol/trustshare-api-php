# BankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the bank_account.  A string in the format &#x60;bank_account_[0-9a-z]&#x60;. | [optional] 
**country** | [**AllOfBankAccountCountry**](AllOfBankAccountCountry.md) | The country the bank account is held in. | [optional] 
**currency** | [**AllOfBankAccountCurrency**](AllOfBankAccountCurrency.md) | The currency the bank account is held in. | [optional] 
**account_number** | **string** | The account number of the bank account. | [optional] 
**routing_code** | **string** | The routing code of the bank account. | [optional] 
**routing_code_type** | [**AllOfBankAccountRoutingCodeType**](AllOfBankAccountRoutingCodeType.md) | The routing code type of the bank account. | [optional] 
**routing_data** | **object** | An object potentially containing further routing data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

