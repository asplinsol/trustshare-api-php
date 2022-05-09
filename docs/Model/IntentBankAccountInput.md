# IntentBankAccountInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of a bank account to target for this intent.  A string in the format: &#x60;bank_account_[0-9a-z]&#x60;. | [optional] 
**country** | [**AllOfIntentBankAccountInputCountry**](AllOfIntentBankAccountInputCountry.md) | The country the bank account is held in. | [optional] 
**currency** | [**AllOfIntentBankAccountInputCurrency**](AllOfIntentBankAccountInputCurrency.md) | The currency the bank account is held in. | [optional] 
**account_number** | **string** | The account number of the bank account. | [optional] 
**iban** | **string** | The IBAN of the bank account. | [optional] 
**aba** | **string** | The ABA routing code of the bank account (US only). | [optional] 
**bank_code** | **string** | The Bank Code of the bank account. | [optional] 
**bic_swift** | **string** | The Bank Identifier Code of the bank account on the SWIFT network. | [optional] 
**branch_code** | **string** | The Branch Code of the bank account. | [optional] 
**bsb_code** | **string** | The BSB code of the bank account (AU only). | [optional] 
**clabe** | **string** | The CLABE of the bank account (MX only). | [optional] 
**cnaps** | **string** | The CNAPS of the bank account (CN only). | [optional] 
**ifsc** | **string** | The IFSC of the bank account (IN only). | [optional] 
**sort_code** | **string** | The Sort Code of the bank account (UK only). | [optional] 
**bank_name** | **string** | The Bank Name of the bank account. | [optional] 
**bank_address** | **string** | The Bank Address of the bank account. | [optional] 
**identification** | **string** | The identification type of the bank account (MX only). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

