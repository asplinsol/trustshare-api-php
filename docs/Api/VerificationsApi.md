# Swagger\Client\VerificationsApi

All URIs are relative to *https://rest.trustshare.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVerification**](VerificationsApi.md#createverification) | **POST** /v1/verifications | Create a Verification
[**getParticipant**](VerificationsApi.md#getparticipant) | **GET** /v1/participant/{id} | Get a Participant
[**getVerification**](VerificationsApi.md#getverification) | **GET** /v1/verification/{id} | Get a Verification

# **createVerification**
> \Swagger\Client\Model\InlineResponse2001 createVerification($body, $authorization)

Create a Verification

A Verification describes the intent to verify a participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1VerificationsBody(); // \Swagger\Client\Model\V1VerificationsBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createVerification($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->createVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1VerificationsBody**](../Model/V1VerificationsBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParticipant**
> \Swagger\Client\Model\InlineResponse2006 getParticipant($authorization, $id)

Get a Participant

Retrieve an existing participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing participant.  A string in the format: `participant_[0-9a-z]`

try {
    $result = $apiInstance->getParticipant($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->getParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing participant.  A string in the format: &#x60;participant_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerification**
> \Swagger\Client\Model\InlineResponse2001 getVerification($authorization, $id)

Get a Verification

Retrieve an existing verification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing verification.  A string in the format: `verification_[0-9a-z]`

try {
    $result = $apiInstance->getVerification($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->getVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing verification.  A string in the format: &#x60;verification_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

