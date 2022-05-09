# Swagger\Client\ParticipantsApi

All URIs are relative to *https://rest.trustshare.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createParticipant**](ParticipantsApi.md#createparticipant) | **POST** /v1/participants | Create a Participant
[**getParticipant**](ParticipantsApi.md#getparticipant) | **GET** /v1/participant/{id} | Get a Participant

# **createParticipant**
> \Swagger\Client\Model\InlineResponse2006 createParticipant($body, $authorization)

Create a Participant

Optionally, you can pre-create a participant to use in an intent. The returned unique ID should be used in the intent creation call. The minimum requirement for creating a participant is an email address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ParticipantsBody(); // \Swagger\Client\Model\V1ParticipantsBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createParticipant($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParticipantsApi->createParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ParticipantsBody**](../Model/V1ParticipantsBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

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

$apiInstance = new Swagger\Client\Api\ParticipantsApi(
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
    echo 'Exception when calling ParticipantsApi->getParticipant: ', $e->getMessage(), PHP_EOL;
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

