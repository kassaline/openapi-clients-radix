# # DeliveryNoteMovementDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**deliveryNoteId** | **string** |  | [optional]
**position** | **int** |  | [optional]
**article** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**measurementUnit** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**description** | **string** |  | [optional]
**quantity** | **float** |  | [optional]
**price** | **float** |  | [optional]
**priceUnit** | **int** |  | [optional]
**discount1** | **float** |  | [optional]
**discount2** | **float** |  | [optional]
**discount3** | **float** |  | [optional]
**discount4** | **float** |  | [optional]
**discount5** | **float** |  | [optional]
**amount** | **float** |  | [optional]
**amountIncludingVat** | **float** |  | [optional]
**vat** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**comment** | **string** |  | [optional]
**print** | **bool** |  | [optional]
**printPrice** | **bool** |  | [optional]
**weight** | **float** |  | [optional]
**weightUnit** | **int** |  | [optional]
**materialDiscountType** | [**\OpenAPI\Client\Radix\Model\MaterialDiscountType**](MaterialDiscountType.md) |  | [optional]
**accountId** | **string** |  | [optional]
**costLevelId** | **string** |  | [optional]
**costTypeId** | **string** |  | [optional]
**costUnitId** | **string** |  | [optional]
**sumRow** | **bool** |  | [optional]
**limitAccrualDateFrom** | **\DateTime** |  | [optional]
**limitAccrualDateUntil** | **\DateTime** |  | [optional]
**parentSerialNumber** | [**\OpenAPI\Client\Radix\Model\IdCode**](IdCode.md) |  | [optional]
**optionFields** | [**\OpenAPI\Client\Radix\Model\OptionfieldDto[]**](OptionfieldDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
