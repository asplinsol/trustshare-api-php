# Swagger\Client\PaymentsApi

All URIs are relative to *https://rest.trustshare.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentIntent**](PaymentsApi.md#createpaymentintent) | **POST** /v1/intents/payment | Create a Payment Intent
[**createRefunds**](PaymentsApi.md#createrefunds) | **POST** /v1/outbounds/refunds | Create Refunds
[**createReleases**](PaymentsApi.md#createreleases) | **POST** /v1/outbounds/releases | Create Releases
[**getCheckout**](PaymentsApi.md#getcheckout) | **GET** /v1/checkout/{id} | Get a Checkout
[**getInbound**](PaymentsApi.md#getinbound) | **GET** /v1/inbound/{id} | Get an Inbound
[**getIntent**](PaymentsApi.md#getintent) | **GET** /v1/intent/{id} | Get an Intent
[**getInvoice**](PaymentsApi.md#getinvoice) | **GET** /v1/invoice/{id} | Get an Invoice
[**getOutbound**](PaymentsApi.md#getoutbound) | **GET** /v1/outbound/{id} | Get an Outbound
[**getProject**](PaymentsApi.md#getproject) | **GET** /v1/project/{id} | Get a Project
[**getSettlement**](PaymentsApi.md#getsettlement) | **GET** /v1/settlement/{id} | Get a Settlement

# **createPaymentIntent**
> \Swagger\Client\Model\InlineResponse200 createPaymentIntent($body, $authorization)

Create a Payment Intent

A Payment Intent describes a Participants intention to fund a project account. We currently support 2 different types of Payment Intent:  - A `checkout` Payment Intent is consumed as soon as a Participant   clicks \"Pay Now\" on the Checkout UI. It therefore, can not be re-used. - A `payment_link` Payment Intent is consumed and can be re-used if it does   not include a `from` Participant. - An `invoice` Payment Intent, although still requiring confirmation of a user,   will not take them through a UI driven process. On confirmation of an   invoice Payment Intent, a new invoice will be provisioned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IntentsPaymentBody(); // \Swagger\Client\Model\IntentsPaymentBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createPaymentIntent($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntentsPaymentBody**](../Model/IntentsPaymentBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRefunds**
> \Swagger\Client\Model\InlineResponse2003 createRefunds($body, $authorization)

Create Refunds

Used to create refunds against settlements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OutboundsRefundsBody(); // \Swagger\Client\Model\OutboundsRefundsBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createRefunds($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OutboundsRefundsBody**](../Model/OutboundsRefundsBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReleases**
> \Swagger\Client\Model\InlineResponse2003 createReleases($body, $authorization)

Create Releases

Used to create releases from projects and settlements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OutboundsReleasesBody(); // \Swagger\Client\Model\OutboundsReleasesBody | 
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.

try {
    $result = $apiInstance->createReleases($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OutboundsReleasesBody**](../Model/OutboundsReleasesBody.md)|  |
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckout**
> \Swagger\Client\Model\InlineResponse2007 getCheckout($authorization, $id)

Get a Checkout

Retrieve an existing checkout.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing checkout.  A string in the format: `checkout_[0-9a-z]`

try {
    $result = $apiInstance->getCheckout($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing checkout.  A string in the format: &#x60;checkout_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInbound**
> \Swagger\Client\Model\InlineResponse20010 getInbound($authorization, $id)

Get an Inbound

Retrieve an inbound payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing inbound.  A string in the format: `inbound_[0-9a-z]`

try {
    $result = $apiInstance->getInbound($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getInbound: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing inbound.  A string in the format: &#x60;inbound_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntent**
> \Swagger\Client\Model\InlineResponse2002 getIntent($authorization, $id)

Get an Intent

Retrieve an existing intent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing intent.  A string in the format: `intent_[0-9a-z]`

try {
    $result = $apiInstance->getIntent($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing intent.  A string in the format: &#x60;intent_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \Swagger\Client\Model\InlineResponse2008 getInvoice($authorization, $id)

Get an Invoice

Retrieve an existing invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing invoice.  A string in the format: `invoice_[0-9a-z]`

try {
    $result = $apiInstance->getInvoice($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing invoice.  A string in the format: &#x60;invoice_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutbound**
> \Swagger\Client\Model\InlineResponse2004 getOutbound($authorization, $id)

Get an Outbound

Retrieve an outbound release or refund payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing outbound.  A string in the format: `outbound_[0-9a-z]`

try {
    $result = $apiInstance->getOutbound($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getOutbound: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing outbound.  A string in the format: &#x60;outbound_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
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

$apiInstance = new Swagger\Client\Api\PaymentsApi(
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
    echo 'Exception when calling PaymentsApi->getProject: ', $e->getMessage(), PHP_EOL;
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

# **getSettlement**
> \Swagger\Client\Model\InlineResponse2009 getSettlement($authorization, $id)

Get a Settlement

Retrieve an existing settlement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Your API Key in the format `[sandbox|live]_api_[0-9a-z]`.
$id = "id_example"; // string | A unique ID of an existing settlement.  A string in the format: `settlement_[0-9a-z]`

try {
    $result = $apiInstance->getSettlement($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getSettlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Your API Key in the format &#x60;[sandbox|live]_api_[0-9a-z]&#x60;. |
 **id** | **string**| A unique ID of an existing settlement.  A string in the format: &#x60;settlement_[0-9a-z]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

