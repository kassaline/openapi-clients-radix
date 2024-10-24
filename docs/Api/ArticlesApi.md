# OpenAPI\Client\Radix\ArticlesApi

All URIs are relative to http://localhost/IM.Core.Api.Radix, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1ArticlesAlternatesDelete()**](ArticlesApi.md#apiV1ArticlesAlternatesDelete) | **DELETE** /api/v1/articles/alternates | Delete an article-alternate |
| [**apiV1ArticlesAlternatesGet()**](ArticlesApi.md#apiV1ArticlesAlternatesGet) | **GET** /api/v1/articles/alternates | Returns a list of article-alternates |
| [**apiV1ArticlesAlternatesIdIdGet()**](ArticlesApi.md#apiV1ArticlesAlternatesIdIdGet) | **GET** /api/v1/articles/alternates/id/{id} | Returns the article-alternate with this ID |
| [**apiV1ArticlesAlternatesPatch()**](ArticlesApi.md#apiV1ArticlesAlternatesPatch) | **PATCH** /api/v1/articles/alternates | Update an article-alternate |
| [**apiV1ArticlesAlternatesPost()**](ArticlesApi.md#apiV1ArticlesAlternatesPost) | **POST** /api/v1/articles/alternates | Creating an article-alternate |
| [**apiV1ArticlesBarcodesDelete()**](ArticlesApi.md#apiV1ArticlesBarcodesDelete) | **DELETE** /api/v1/articles/barcodes | Delete an article-barcode |
| [**apiV1ArticlesBarcodesGet()**](ArticlesApi.md#apiV1ArticlesBarcodesGet) | **GET** /api/v1/articles/barcodes | Returns a list of article-barcodes |
| [**apiV1ArticlesBarcodesIdIdGet()**](ArticlesApi.md#apiV1ArticlesBarcodesIdIdGet) | **GET** /api/v1/articles/barcodes/id/{id} | Returns the article-barcode with this ID |
| [**apiV1ArticlesBarcodesPatch()**](ArticlesApi.md#apiV1ArticlesBarcodesPatch) | **PATCH** /api/v1/articles/barcodes | Update an article-barcode |
| [**apiV1ArticlesBarcodesPost()**](ArticlesApi.md#apiV1ArticlesBarcodesPost) | **POST** /api/v1/articles/barcodes | Creating an article-barcode |
| [**apiV1ArticlesCountGet()**](ArticlesApi.md#apiV1ArticlesCountGet) | **GET** /api/v1/articles/count | Returns the count of articles |
| [**apiV1ArticlesDepositDataDelete()**](ArticlesApi.md#apiV1ArticlesDepositDataDelete) | **DELETE** /api/v1/articles/depositData | Delete an article-depositdata |
| [**apiV1ArticlesDepositDataGet()**](ArticlesApi.md#apiV1ArticlesDepositDataGet) | **GET** /api/v1/articles/depositData | Returns a list of article-depositdata |
| [**apiV1ArticlesDepositDataIdIdGet()**](ArticlesApi.md#apiV1ArticlesDepositDataIdIdGet) | **GET** /api/v1/articles/depositData/id/{id} | Returns the article-depositdata with this ID |
| [**apiV1ArticlesDepositDataPatch()**](ArticlesApi.md#apiV1ArticlesDepositDataPatch) | **PATCH** /api/v1/articles/depositData | Update an article-depositdata |
| [**apiV1ArticlesDepositDataPost()**](ArticlesApi.md#apiV1ArticlesDepositDataPost) | **POST** /api/v1/articles/depositData | Creating an article-depositdata |
| [**apiV1ArticlesGet()**](ArticlesApi.md#apiV1ArticlesGet) | **GET** /api/v1/articles | Returns a list of articles |
| [**apiV1ArticlesIdIdAlternatesGet()**](ArticlesApi.md#apiV1ArticlesIdIdAlternatesGet) | **GET** /api/v1/articles/id/{id}/alternates | Returns a list of article-alternates with this article id |
| [**apiV1ArticlesIdIdBarcodesGet()**](ArticlesApi.md#apiV1ArticlesIdIdBarcodesGet) | **GET** /api/v1/articles/id/{id}/barcodes | Returns a list of article-barcodes with this article id |
| [**apiV1ArticlesIdIdDepositDataGet()**](ArticlesApi.md#apiV1ArticlesIdIdDepositDataGet) | **GET** /api/v1/articles/id/{id}/depositData | Returns a list of article-depositdata with this article id |
| [**apiV1ArticlesIdIdGet()**](ArticlesApi.md#apiV1ArticlesIdIdGet) | **GET** /api/v1/articles/id/{id} | Returns the article with this ID |
| [**apiV1ArticlesIdIdMeasurementUnitsGet()**](ArticlesApi.md#apiV1ArticlesIdIdMeasurementUnitsGet) | **GET** /api/v1/articles/id/{id}/measurementUnits | Returns a list of article-measurementunits with this article id |
| [**apiV1ArticlesIdIdPricesGet()**](ArticlesApi.md#apiV1ArticlesIdIdPricesGet) | **GET** /api/v1/articles/id/{id}/prices | Returns a list of article-prices with this article id |
| [**apiV1ArticlesIdIdSupplierCustomerNumberGet()**](ArticlesApi.md#apiV1ArticlesIdIdSupplierCustomerNumberGet) | **GET** /api/v1/articles/id/{id}/supplierCustomerNumber | Returns a list of article-suppliercustomernumbers with this article id |
| [**apiV1ArticlesListGet()**](ArticlesApi.md#apiV1ArticlesListGet) | **GET** /api/v1/articles/list | Returns a list of articles with minimal data |
| [**apiV1ArticlesMeasurementUnitsDelete()**](ArticlesApi.md#apiV1ArticlesMeasurementUnitsDelete) | **DELETE** /api/v1/articles/measurementUnits | Delete an article-measurementunit |
| [**apiV1ArticlesMeasurementUnitsGet()**](ArticlesApi.md#apiV1ArticlesMeasurementUnitsGet) | **GET** /api/v1/articles/measurementUnits | Returns a list of article-measurementunits |
| [**apiV1ArticlesMeasurementUnitsIdIdGet()**](ArticlesApi.md#apiV1ArticlesMeasurementUnitsIdIdGet) | **GET** /api/v1/articles/measurementUnits/id/{id} | Returns the article-measurementunit with this ID |
| [**apiV1ArticlesMeasurementUnitsPatch()**](ArticlesApi.md#apiV1ArticlesMeasurementUnitsPatch) | **PATCH** /api/v1/articles/measurementUnits | Update an article-measurementunit |
| [**apiV1ArticlesMeasurementUnitsPost()**](ArticlesApi.md#apiV1ArticlesMeasurementUnitsPost) | **POST** /api/v1/articles/measurementUnits | Creating an article-measurementunit |
| [**apiV1ArticlesPatch()**](ArticlesApi.md#apiV1ArticlesPatch) | **PATCH** /api/v1/articles | Updating an article |
| [**apiV1ArticlesPost()**](ArticlesApi.md#apiV1ArticlesPost) | **POST** /api/v1/articles | Creating an article |
| [**apiV1ArticlesQuantitiesGet()**](ArticlesApi.md#apiV1ArticlesQuantitiesGet) | **GET** /api/v1/articles/quantities | Returns a list of article-quantities |
| [**apiV1ArticlesSupplierCustomerNumbersDelete()**](ArticlesApi.md#apiV1ArticlesSupplierCustomerNumbersDelete) | **DELETE** /api/v1/articles/supplierCustomerNumbers | Delete an article-suppliercustomernumber |
| [**apiV1ArticlesSupplierCustomerNumbersGet()**](ArticlesApi.md#apiV1ArticlesSupplierCustomerNumbersGet) | **GET** /api/v1/articles/supplierCustomerNumbers | Returns a list of article-suppliercustomernumber |
| [**apiV1ArticlesSupplierCustomerNumbersIdIdGet()**](ArticlesApi.md#apiV1ArticlesSupplierCustomerNumbersIdIdGet) | **GET** /api/v1/articles/supplierCustomerNumbers/id/{id} | Returns the article-suppliercustomernumber with this ID |
| [**apiV1ArticlesSupplierCustomerNumbersPatch()**](ArticlesApi.md#apiV1ArticlesSupplierCustomerNumbersPatch) | **PATCH** /api/v1/articles/supplierCustomerNumbers | Update an article-suppliercustomernumber |
| [**apiV1ArticlesSupplierCustomerNumbersPost()**](ArticlesApi.md#apiV1ArticlesSupplierCustomerNumbersPost) | **POST** /api/v1/articles/supplierCustomerNumbers | Creating an article-suppliercustomernumber |


## `apiV1ArticlesAlternatesDelete()`

```php
apiV1ArticlesAlternatesDelete($articleAlternateDeleteCommand): bool
```

Delete an article-alternate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleAlternateDeleteCommand = new \OpenAPI\Client\Radix\Model\ArticleAlternateDeleteCommand(); // \OpenAPI\Client\Radix\Model\ArticleAlternateDeleteCommand | 

try {
    $result = $apiInstance->apiV1ArticlesAlternatesDelete($articleAlternateDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesAlternatesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleAlternateDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ArticleAlternateDeleteCommand**](../Model/ArticleAlternateDeleteCommand.md)|  | [optional] |

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

## `apiV1ArticlesAlternatesGet()`

```php
apiV1ArticlesAlternatesGet($id, $articleId, $codeAlternate): \OpenAPI\Client\Radix\Model\ArticleAlternateDto[]
```

Returns a list of article-alternates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleId = 'articleId_example'; // string
$codeAlternate = 'codeAlternate_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesAlternatesGet($id, $articleId, $codeAlternate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesAlternatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleId** | **string**|  | [optional] |
| **codeAlternate** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleAlternateDto[]**](../Model/ArticleAlternateDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesAlternatesIdIdGet()`

```php
apiV1ArticlesAlternatesIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticleAlternateDto
```

Returns the article-alternate with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesAlternatesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesAlternatesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleAlternateDto**](../Model/ArticleAlternateDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesAlternatesPatch()`

```php
apiV1ArticlesAlternatesPatch($articleAlternatePatchCommand): string
```

Update an article-alternate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleAlternatePatchCommand = new \OpenAPI\Client\Radix\Model\ArticleAlternatePatchCommand(); // \OpenAPI\Client\Radix\Model\ArticleAlternatePatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesAlternatesPatch($articleAlternatePatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesAlternatesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleAlternatePatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticleAlternatePatchCommand**](../Model/ArticleAlternatePatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesAlternatesPost()`

```php
apiV1ArticlesAlternatesPost($articleAlternatePostCommand): string
```

Creating an article-alternate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleAlternatePostCommand = new \OpenAPI\Client\Radix\Model\ArticleAlternatePostCommand(); // \OpenAPI\Client\Radix\Model\ArticleAlternatePostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesAlternatesPost($articleAlternatePostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesAlternatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleAlternatePostCommand** | [**\OpenAPI\Client\Radix\Model\ArticleAlternatePostCommand**](../Model/ArticleAlternatePostCommand.md)|  | [optional] |

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

## `apiV1ArticlesBarcodesDelete()`

```php
apiV1ArticlesBarcodesDelete($articleBarcodeDeleteCommand): bool
```

Delete an article-barcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleBarcodeDeleteCommand = new \OpenAPI\Client\Radix\Model\ArticleBarcodeDeleteCommand(); // \OpenAPI\Client\Radix\Model\ArticleBarcodeDeleteCommand | 

try {
    $result = $apiInstance->apiV1ArticlesBarcodesDelete($articleBarcodeDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesBarcodesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleBarcodeDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ArticleBarcodeDeleteCommand**](../Model/ArticleBarcodeDeleteCommand.md)|  | [optional] |

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

## `apiV1ArticlesBarcodesGet()`

```php
apiV1ArticlesBarcodesGet($id, $articleId, $barcode): \OpenAPI\Client\Radix\Model\ArticleBarcodeDto[]
```

Returns a list of article-barcodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleId = 'articleId_example'; // string
$barcode = 'barcode_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesBarcodesGet($id, $articleId, $barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleId** | **string**|  | [optional] |
| **barcode** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleBarcodeDto[]**](../Model/ArticleBarcodeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesBarcodesIdIdGet()`

```php
apiV1ArticlesBarcodesIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticleBarcodeDto
```

Returns the article-barcode with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesBarcodesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesBarcodesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleBarcodeDto**](../Model/ArticleBarcodeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesBarcodesPatch()`

```php
apiV1ArticlesBarcodesPatch($articleBarcodePatchCommand): string
```

Update an article-barcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleBarcodePatchCommand = new \OpenAPI\Client\Radix\Model\ArticleBarcodePatchCommand(); // \OpenAPI\Client\Radix\Model\ArticleBarcodePatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesBarcodesPatch($articleBarcodePatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesBarcodesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleBarcodePatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticleBarcodePatchCommand**](../Model/ArticleBarcodePatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesBarcodesPost()`

```php
apiV1ArticlesBarcodesPost($articleBarcodePostCommand): string
```

Creating an article-barcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleBarcodePostCommand = new \OpenAPI\Client\Radix\Model\ArticleBarcodePostCommand(); // \OpenAPI\Client\Radix\Model\ArticleBarcodePostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesBarcodesPost($articleBarcodePostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesBarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleBarcodePostCommand** | [**\OpenAPI\Client\Radix\Model\ArticleBarcodePostCommand**](../Model/ArticleBarcodePostCommand.md)|  | [optional] |

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

## `apiV1ArticlesCountGet()`

```php
apiV1ArticlesCountGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere): int
```

Returns the count of articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$code = 'code_example'; // string
$model = 'model_example'; // string
$searchText = 'searchText_example'; // string
$active = True; // bool
$skip = 56; // int
$take = 56; // int
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesCountGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |
| **model** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

**int**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesDepositDataDelete()`

```php
apiV1ArticlesDepositDataDelete($articledepositDataDeleteCommand): bool
```

Delete an article-depositdata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articledepositDataDeleteCommand = new \OpenAPI\Client\Radix\Model\ArticledepositDataDeleteCommand(); // \OpenAPI\Client\Radix\Model\ArticledepositDataDeleteCommand | 

try {
    $result = $apiInstance->apiV1ArticlesDepositDataDelete($articledepositDataDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesDepositDataDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articledepositDataDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ArticledepositDataDeleteCommand**](../Model/ArticledepositDataDeleteCommand.md)|  | [optional] |

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

## `apiV1ArticlesDepositDataGet()`

```php
apiV1ArticlesDepositDataGet($id, $articleId, $depositId): \OpenAPI\Client\Radix\Model\ArticledepositDataDto[]
```

Returns a list of article-depositdata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleId = 'articleId_example'; // string
$depositId = 'depositId_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesDepositDataGet($id, $articleId, $depositId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesDepositDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleId** | **string**|  | [optional] |
| **depositId** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticledepositDataDto[]**](../Model/ArticledepositDataDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesDepositDataIdIdGet()`

```php
apiV1ArticlesDepositDataIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticledepositDataDto
```

Returns the article-depositdata with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesDepositDataIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesDepositDataIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticledepositDataDto**](../Model/ArticledepositDataDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesDepositDataPatch()`

```php
apiV1ArticlesDepositDataPatch($articledepositDataPatchCommand): string
```

Update an article-depositdata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articledepositDataPatchCommand = new \OpenAPI\Client\Radix\Model\ArticledepositDataPatchCommand(); // \OpenAPI\Client\Radix\Model\ArticledepositDataPatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesDepositDataPatch($articledepositDataPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesDepositDataPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articledepositDataPatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticledepositDataPatchCommand**](../Model/ArticledepositDataPatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesDepositDataPost()`

```php
apiV1ArticlesDepositDataPost($articledepositDataPostCommand): string
```

Creating an article-depositdata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articledepositDataPostCommand = new \OpenAPI\Client\Radix\Model\ArticledepositDataPostCommand(); // \OpenAPI\Client\Radix\Model\ArticledepositDataPostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesDepositDataPost($articledepositDataPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesDepositDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articledepositDataPostCommand** | [**\OpenAPI\Client\Radix\Model\ArticledepositDataPostCommand**](../Model/ArticledepositDataPostCommand.md)|  | [optional] |

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

## `apiV1ArticlesGet()`

```php
apiV1ArticlesGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere): \OpenAPI\Client\Radix\Model\ArticleDto[]
```

Returns a list of articles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$code = 'code_example'; // string
$model = 'model_example'; // string
$searchText = 'searchText_example'; // string
$active = True; // bool
$skip = 56; // int
$take = 56; // int
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |
| **model** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleDto[]**](../Model/ArticleDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdAlternatesGet()`

```php
apiV1ArticlesIdIdAlternatesGet($id): \OpenAPI\Client\Radix\Model\ArticleAlternateDto[]
```

Returns a list of article-alternates with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdAlternatesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdAlternatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleAlternateDto[]**](../Model/ArticleAlternateDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdBarcodesGet()`

```php
apiV1ArticlesIdIdBarcodesGet($id): \OpenAPI\Client\Radix\Model\ArticleBarcodeDto[]
```

Returns a list of article-barcodes with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdBarcodesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleBarcodeDto[]**](../Model/ArticleBarcodeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdDepositDataGet()`

```php
apiV1ArticlesIdIdDepositDataGet($id): \OpenAPI\Client\Radix\Model\ArticledepositDataDto[]
```

Returns a list of article-depositdata with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdDepositDataGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdDepositDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticledepositDataDto[]**](../Model/ArticledepositDataDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdGet()`

```php
apiV1ArticlesIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticleDto
```

Returns the article with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleDto**](../Model/ArticleDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdMeasurementUnitsGet()`

```php
apiV1ArticlesIdIdMeasurementUnitsGet($id): \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto[]
```

Returns a list of article-measurementunits with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdMeasurementUnitsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdMeasurementUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto[]**](../Model/ArticleMeasurementUnitDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdPricesGet()`

```php
apiV1ArticlesIdIdPricesGet($id): \OpenAPI\Client\Radix\Model\PriceDto[]
```

Returns a list of article-prices with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdPricesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\PriceDto[]**](../Model/PriceDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesIdIdSupplierCustomerNumberGet()`

```php
apiV1ArticlesIdIdSupplierCustomerNumberGet($id): \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto[]
```

Returns a list of article-suppliercustomernumbers with this article id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesIdIdSupplierCustomerNumberGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesIdIdSupplierCustomerNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto[]**](../Model/ArticleSupplierCustomerNumberDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesListGet()`

```php
apiV1ArticlesListGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere): \OpenAPI\Client\Radix\Model\IdCodeDescription[]
```

Returns a list of articles with minimal data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$code = 'code_example'; // string
$model = 'model_example'; // string
$searchText = 'searchText_example'; // string
$active = True; // bool
$skip = 56; // int
$take = 56; // int
$additionalWhere = 'additionalWhere_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesListGet($id, $code, $model, $searchText, $active, $skip, $take, $additionalWhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |
| **model** | **string**|  | [optional] |
| **searchText** | **string**|  | [optional] |
| **active** | **bool**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |
| **additionalWhere** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\IdCodeDescription[]**](../Model/IdCodeDescription.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesMeasurementUnitsDelete()`

```php
apiV1ArticlesMeasurementUnitsDelete($articleMeasurementUnitDeleteCommand): bool
```

Delete an article-measurementunit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleMeasurementUnitDeleteCommand = new \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDeleteCommand(); // \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDeleteCommand | 

try {
    $result = $apiInstance->apiV1ArticlesMeasurementUnitsDelete($articleMeasurementUnitDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesMeasurementUnitsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleMeasurementUnitDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDeleteCommand**](../Model/ArticleMeasurementUnitDeleteCommand.md)|  | [optional] |

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

## `apiV1ArticlesMeasurementUnitsGet()`

```php
apiV1ArticlesMeasurementUnitsGet($id, $articleId, $measurementUnitCode): \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto[]
```

Returns a list of article-measurementunits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleId = 'articleId_example'; // string
$measurementUnitCode = 'measurementUnitCode_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesMeasurementUnitsGet($id, $articleId, $measurementUnitCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesMeasurementUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleId** | **string**|  | [optional] |
| **measurementUnitCode** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto[]**](../Model/ArticleMeasurementUnitDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesMeasurementUnitsIdIdGet()`

```php
apiV1ArticlesMeasurementUnitsIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto
```

Returns the article-measurementunit with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesMeasurementUnitsIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesMeasurementUnitsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitDto**](../Model/ArticleMeasurementUnitDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesMeasurementUnitsPatch()`

```php
apiV1ArticlesMeasurementUnitsPatch($articleMeasurementUnitPatchCommand): string
```

Update an article-measurementunit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleMeasurementUnitPatchCommand = new \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPatchCommand(); // \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesMeasurementUnitsPatch($articleMeasurementUnitPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesMeasurementUnitsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleMeasurementUnitPatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPatchCommand**](../Model/ArticleMeasurementUnitPatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesMeasurementUnitsPost()`

```php
apiV1ArticlesMeasurementUnitsPost($articleMeasurementUnitPostCommand): string
```

Creating an article-measurementunit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleMeasurementUnitPostCommand = new \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPostCommand(); // \OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesMeasurementUnitsPost($articleMeasurementUnitPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesMeasurementUnitsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleMeasurementUnitPostCommand** | [**\OpenAPI\Client\Radix\Model\ArticleMeasurementUnitPostCommand**](../Model/ArticleMeasurementUnitPostCommand.md)|  | [optional] |

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

## `apiV1ArticlesPatch()`

```php
apiV1ArticlesPatch($articlePatchCommand): string
```

Updating an article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articlePatchCommand = new \OpenAPI\Client\Radix\Model\ArticlePatchCommand(); // \OpenAPI\Client\Radix\Model\ArticlePatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesPatch($articlePatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articlePatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticlePatchCommand**](../Model/ArticlePatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesPost()`

```php
apiV1ArticlesPost($articlePostCommand): string
```

Creating an article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articlePostCommand = new \OpenAPI\Client\Radix\Model\ArticlePostCommand(); // \OpenAPI\Client\Radix\Model\ArticlePostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesPost($articlePostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articlePostCommand** | [**\OpenAPI\Client\Radix\Model\ArticlePostCommand**](../Model/ArticlePostCommand.md)|  | [optional] |

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

## `apiV1ArticlesQuantitiesGet()`

```php
apiV1ArticlesQuantitiesGet($articleId, $depositId, $stockPositionId, $articleQuantityType): \OpenAPI\Client\Radix\Model\ArticleQuantityDto[]
```

Returns a list of article-quantities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleId = 'articleId_example'; // string
$depositId = 'depositId_example'; // string
$stockPositionId = 'stockPositionId_example'; // string
$articleQuantityType = new \OpenAPI\Client\Radix\Model\ArticleQuantityType(); // ArticleQuantityType

try {
    $result = $apiInstance->apiV1ArticlesQuantitiesGet($articleId, $depositId, $stockPositionId, $articleQuantityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesQuantitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleId** | **string**|  | [optional] |
| **depositId** | **string**|  | [optional] |
| **stockPositionId** | **string**|  | [optional] |
| **articleQuantityType** | [**ArticleQuantityType**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleQuantityDto[]**](../Model/ArticleQuantityDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesSupplierCustomerNumbersDelete()`

```php
apiV1ArticlesSupplierCustomerNumbersDelete($articleSupplierCustomerNumberDeleteCommand): bool
```

Delete an article-suppliercustomernumber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleSupplierCustomerNumberDeleteCommand = new \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDeleteCommand(); // \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDeleteCommand | 

try {
    $result = $apiInstance->apiV1ArticlesSupplierCustomerNumbersDelete($articleSupplierCustomerNumberDeleteCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesSupplierCustomerNumbersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleSupplierCustomerNumberDeleteCommand** | [**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDeleteCommand**](../Model/ArticleSupplierCustomerNumberDeleteCommand.md)|  | [optional] |

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

## `apiV1ArticlesSupplierCustomerNumbersGet()`

```php
apiV1ArticlesSupplierCustomerNumbersGet($id, $articleId, $supplierId, $customerId, $code): \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto[]
```

Returns a list of article-suppliercustomernumber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$articleId = 'articleId_example'; // string
$supplierId = 'supplierId_example'; // string
$customerId = 'customerId_example'; // string
$code = 'code_example'; // string

try {
    $result = $apiInstance->apiV1ArticlesSupplierCustomerNumbersGet($id, $articleId, $supplierId, $customerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesSupplierCustomerNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **articleId** | **string**|  | [optional] |
| **supplierId** | **string**|  | [optional] |
| **customerId** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto[]**](../Model/ArticleSupplierCustomerNumberDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesSupplierCustomerNumbersIdIdGet()`

```php
apiV1ArticlesSupplierCustomerNumbersIdIdGet($id): \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto
```

Returns the article-suppliercustomernumber with this ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->apiV1ArticlesSupplierCustomerNumbersIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesSupplierCustomerNumbersIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberDto**](../Model/ArticleSupplierCustomerNumberDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ArticlesSupplierCustomerNumbersPatch()`

```php
apiV1ArticlesSupplierCustomerNumbersPatch($articleSupplierCustomerNumberPatchCommand): string
```

Update an article-suppliercustomernumber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleSupplierCustomerNumberPatchCommand = new \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPatchCommand(); // \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPatchCommand | 

try {
    $result = $apiInstance->apiV1ArticlesSupplierCustomerNumbersPatch($articleSupplierCustomerNumberPatchCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesSupplierCustomerNumbersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleSupplierCustomerNumberPatchCommand** | [**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPatchCommand**](../Model/ArticleSupplierCustomerNumberPatchCommand.md)|  | [optional] |

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

## `apiV1ArticlesSupplierCustomerNumbersPost()`

```php
apiV1ArticlesSupplierCustomerNumbersPost($articleSupplierCustomerNumberPostCommand): string
```

Creating an article-suppliercustomernumber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Radix\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Radix\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleSupplierCustomerNumberPostCommand = new \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPostCommand(); // \OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPostCommand | 

try {
    $result = $apiInstance->apiV1ArticlesSupplierCustomerNumbersPost($articleSupplierCustomerNumberPostCommand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->apiV1ArticlesSupplierCustomerNumbersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **articleSupplierCustomerNumberPostCommand** | [**\OpenAPI\Client\Radix\Model\ArticleSupplierCustomerNumberPostCommand**](../Model/ArticleSupplierCustomerNumberPostCommand.md)|  | [optional] |

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
