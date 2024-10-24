# OpenAPI\Client\Radix\CommonApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1CommonClassificationDefinitionGet()**](CommonApi.md#apiV1CommonClassificationDefinitionGet) | **GET** /api/v1/common/classificationDefinition | Returns the classificationdefinitions |
| [**apiV1CommonClassificationDefinitionValueGet()**](CommonApi.md#apiV1CommonClassificationDefinitionValueGet) | **GET** /api/v1/common/classificationDefinitionValue | Returns the values of classificationdefinitions |
| [**apiV1CommonClassificationsGet()**](CommonApi.md#apiV1CommonClassificationsGet) | **GET** /api/v1/common/classifications | Returns the classifications |
| [**apiV1CommonClassificationsPatch()**](CommonApi.md#apiV1CommonClassificationsPatch) | **PATCH** /api/v1/common/classifications | Update a list of classifications |
| [**apiV1CommonClassificationsPost()**](CommonApi.md#apiV1CommonClassificationsPost) | **POST** /api/v1/common/classifications | Creating a list of classifications |
| [**apiV1CommonMessagesGet()**](CommonApi.md#apiV1CommonMessagesGet) | **GET** /api/v1/common/messages | Returns the messages |
| [**apiV1CommonTipDelete()**](CommonApi.md#apiV1CommonTipDelete) | **DELETE** /api/v1/common/tip | delete a tip |
| [**apiV1CommonTipPatch()**](CommonApi.md#apiV1CommonTipPatch) | **PATCH** /api/v1/common/tip | update a tip |
| [**apiV1CommonTipPost()**](CommonApi.md#apiV1CommonTipPost) | **POST** /api/v1/common/tip | Creating a tip |
| [**apiV1CommonTipsGet()**](CommonApi.md#apiV1CommonTipsGet) | **GET** /api/v1/common/tips | Returns the tips |


## `apiV1CommonClassificationDefinitionGet()`

```php
apiV1CommonClassificationDefinitionGet($type, $id, $code): \OpenAPI\Client\Radix\Model\ClassificationDefinitionDto[]
```

Returns the classificationdefinitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Radix\Model\ClassificationFkType(); // ClassificationFkType
$id = 'id_example'; // string
$code = 'code_example'; // string

try {
    $result = $apiInstance->apiV1CommonClassificationDefinitionGet($type, $id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonClassificationDefinitionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**ClassificationFkType**](../Model/.md)|  | [optional] |
| **id** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ClassificationDefinitionDto[]**](../Model/ClassificationDefinitionDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonClassificationDefinitionValueGet()`

```php
apiV1CommonClassificationDefinitionValueGet($classificationDefinitionId, $inactive, $fkIds): \OpenAPI\Client\Radix\Model\ClassificationDefinitionValueDto[]
```

Returns the values of classificationdefinitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$classificationDefinitionId = 'classificationDefinitionId_example'; // string
$inactive = True; // bool
$fkIds = array('fkIds_example'); // string[]

try {
    $result = $apiInstance->apiV1CommonClassificationDefinitionValueGet($classificationDefinitionId, $inactive, $fkIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonClassificationDefinitionValueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classificationDefinitionId** | **string**|  | [optional] |
| **inactive** | **bool**|  | [optional] |
| **fkIds** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ClassificationDefinitionValueDto[]**](../Model/ClassificationDefinitionValueDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonClassificationsGet()`

```php
apiV1CommonClassificationsGet($type, $fkId): \OpenAPI\Client\Radix\Model\ClassificationsDto
```

Returns the classifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Radix\Model\ClassificationFkType(); // ClassificationFkType
$fkId = 'fkId_example'; // string

try {
    $result = $apiInstance->apiV1CommonClassificationsGet($type, $fkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonClassificationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**ClassificationFkType**](../Model/.md)|  | [optional] |
| **fkId** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ClassificationsDto**](../Model/ClassificationsDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonClassificationsPatch()`

```php
apiV1CommonClassificationsPatch($classificationsPatchCommand): bool
```

Update a list of classifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$classificationsPatchCommand = new \OpenAPI\Client\Radix\Model\ClassificationsPatchCommand(); // \OpenAPI\Client\Radix\Model\ClassificationsPatchCommand | 

try {
    $result = $apiInstance->apiV1CommonClassificationsPatch($classificationsPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonClassificationsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classificationsPatchCommand** | [**\OpenAPI\Client\Radix\Model\ClassificationsPatchCommand**](../Model/ClassificationsPatchCommand.md)|  | [optional] |

### Return type

**bool**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonClassificationsPost()`

```php
apiV1CommonClassificationsPost($classificationsPostCommand): bool
```

Creating a list of classifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$classificationsPostCommand = new \OpenAPI\Client\Radix\Model\ClassificationsPostCommand(); // \OpenAPI\Client\Radix\Model\ClassificationsPostCommand | 

try {
    $result = $apiInstance->apiV1CommonClassificationsPost($classificationsPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonClassificationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classificationsPostCommand** | [**\OpenAPI\Client\Radix\Model\ClassificationsPostCommand**](../Model/ClassificationsPostCommand.md)|  | [optional] |

### Return type

**bool**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonMessagesGet()`

```php
apiV1CommonMessagesGet($userId, $read): \OpenAPI\Client\Radix\Model\MessageDto[]
```

Returns the messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$read = True; // bool

try {
    $result = $apiInstance->apiV1CommonMessagesGet($userId, $read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**|  | [optional] |
| **read** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\MessageDto[]**](../Model/MessageDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonTipDelete()`

```php
apiV1CommonTipDelete($tipDeleteCommand): bool
```

delete a tip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipDeleteCommand = new \OpenAPI\Client\Radix\Model\TipDeleteCommand(); // \OpenAPI\Client\Radix\Model\TipDeleteCommand | 

try {
    $result = $apiInstance->apiV1CommonTipDelete($tipDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonTipDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipDeleteCommand** | [**\OpenAPI\Client\Radix\Model\TipDeleteCommand**](../Model/TipDeleteCommand.md)|  | [optional] |

### Return type

**bool**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonTipPatch()`

```php
apiV1CommonTipPatch($tipPatchCommand): string
```

update a tip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipPatchCommand = new \OpenAPI\Client\Radix\Model\TipPatchCommand(); // \OpenAPI\Client\Radix\Model\TipPatchCommand | 

try {
    $result = $apiInstance->apiV1CommonTipPatch($tipPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonTipPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipPatchCommand** | [**\OpenAPI\Client\Radix\Model\TipPatchCommand**](../Model/TipPatchCommand.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonTipPost()`

```php
apiV1CommonTipPost($tipPostCommand): string
```

Creating a tip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipPostCommand = new \OpenAPI\Client\Radix\Model\TipPostCommand(); // \OpenAPI\Client\Radix\Model\TipPostCommand | 

try {
    $result = $apiInstance->apiV1CommonTipPost($tipPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonTipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipPostCommand** | [**\OpenAPI\Client\Radix\Model\TipPostCommand**](../Model/TipPostCommand.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CommonTipsGet()`

```php
apiV1CommonTipsGet($id, $type, $masterId, $position, $displayed, $printing, $onlyInRadix, $offer, $order, $packinglist, $billing, $accounting, $purchaseOrder, $purchasing, $warehouse, $production, $workOrder, $tourPlanning, $servicemanagement, $info, $web, $salesDeliveryNote, $salesInvoice, $cashDocuments, $project, $request, $purchaseDeliveryNote, $purchaseInvoice, $mobileWarehouse): \OpenAPI\Client\Radix\Model\TipDto[]
```

Returns the tips

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$type = new \OpenAPI\Client\Radix\Model\TipType(); // TipType
$masterId = 'masterId_example'; // string
$position = 56; // int
$displayed = True; // bool
$printing = True; // bool
$onlyInRadix = True; // bool
$offer = True; // bool
$order = True; // bool
$packinglist = True; // bool
$billing = True; // bool
$accounting = True; // bool
$purchaseOrder = True; // bool
$purchasing = True; // bool
$warehouse = True; // bool
$production = True; // bool
$workOrder = True; // bool
$tourPlanning = True; // bool
$servicemanagement = True; // bool
$info = True; // bool
$web = True; // bool
$salesDeliveryNote = True; // bool
$salesInvoice = True; // bool
$cashDocuments = True; // bool
$project = True; // bool
$request = True; // bool
$purchaseDeliveryNote = True; // bool
$purchaseInvoice = True; // bool
$mobileWarehouse = True; // bool

try {
    $result = $apiInstance->apiV1CommonTipsGet($id, $type, $masterId, $position, $displayed, $printing, $onlyInRadix, $offer, $order, $packinglist, $billing, $accounting, $purchaseOrder, $purchasing, $warehouse, $production, $workOrder, $tourPlanning, $servicemanagement, $info, $web, $salesDeliveryNote, $salesInvoice, $cashDocuments, $project, $request, $purchaseDeliveryNote, $purchaseInvoice, $mobileWarehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV1CommonTipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **type** | [**TipType**](../Model/.md)|  | [optional] |
| **masterId** | **string**|  | [optional] |
| **position** | **int**|  | [optional] |
| **displayed** | **bool**|  | [optional] |
| **printing** | **bool**|  | [optional] |
| **onlyInRadix** | **bool**|  | [optional] |
| **offer** | **bool**|  | [optional] |
| **order** | **bool**|  | [optional] |
| **packinglist** | **bool**|  | [optional] |
| **billing** | **bool**|  | [optional] |
| **accounting** | **bool**|  | [optional] |
| **purchaseOrder** | **bool**|  | [optional] |
| **purchasing** | **bool**|  | [optional] |
| **warehouse** | **bool**|  | [optional] |
| **production** | **bool**|  | [optional] |
| **workOrder** | **bool**|  | [optional] |
| **tourPlanning** | **bool**|  | [optional] |
| **servicemanagement** | **bool**|  | [optional] |
| **info** | **bool**|  | [optional] |
| **web** | **bool**|  | [optional] |
| **salesDeliveryNote** | **bool**|  | [optional] |
| **salesInvoice** | **bool**|  | [optional] |
| **cashDocuments** | **bool**|  | [optional] |
| **project** | **bool**|  | [optional] |
| **request** | **bool**|  | [optional] |
| **purchaseDeliveryNote** | **bool**|  | [optional] |
| **purchaseInvoice** | **bool**|  | [optional] |
| **mobileWarehouse** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\TipDto[]**](../Model/TipDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
