# Swagger\Client\ProjectsApi

All URIs are relative to *https://rest.trustshare.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProject**](ProjectsApi.md#createproject) | **POST** /v1/projects | Create a Project
[**getProject**](ProjectsApi.md#getproject) | **GET** /v1/project/{id} | Get a Project

# **createProject**
> \Swagger\Client\Model\InlineResponse2005 createProject($body, $authorization)

Create a Project

Creating a Project allows you to take control of a project account. This account can be used to collect funds from any number of Participants, as well as release funds to any number of Participants.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ProjectsBody(); // \Swagger\Client\Model\V1ProjectsBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createProject($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ProjectsBody**](../Model/V1ProjectsBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \Swagger\Client\Model\InlineResponse2005 getProject($authorization, $id)

Get a Project

Retrieve an existing project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing project.  A string in the format: `project_[0-9a-z]`

try {
    $result = $apiInstance->getProject($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing project.  A string in the format: &#x60;project_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

