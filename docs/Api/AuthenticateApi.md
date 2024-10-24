# OpenAPI\Client\Radix\AuthenticateApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiAuthenticateApiKeyPost()**](AuthenticateApi.md#apiAuthenticateApiKeyPost) | **POST** /api/authenticate/apiKey |  |


## `apiAuthenticateApiKeyPost()`

```php
apiAuthenticateApiKeyPost($extendedLoginApiKeyRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Radix\Api\AuthenticateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extendedLoginApiKeyRequest = new \OpenAPI\Client\Radix\Model\ExtendedLoginApiKeyRequest(); // \OpenAPI\Client\Radix\Model\ExtendedLoginApiKeyRequest

try {
    $apiInstance->apiAuthenticateApiKeyPost($extendedLoginApiKeyRequest);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->apiAuthenticateApiKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extendedLoginApiKeyRequest** | [**\OpenAPI\Client\Radix\Model\ExtendedLoginApiKeyRequest**](../Model/ExtendedLoginApiKeyRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
