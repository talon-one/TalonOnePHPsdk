# Swagger\Client\LedgerApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoyaltyProgram**](LedgerApi.md#createLoyaltyProgram) | **POST** /v1/loyaltyprograms | Create a loyalty program
[**deleteLoyaltyProgram**](LedgerApi.md#deleteLoyaltyProgram) | **DELETE** /v1/loyaltyprograms/{loyaltyProgramId} | Delete a loyalty program
[**getLoyaltyProgram**](LedgerApi.md#getLoyaltyProgram) | **GET** /v1/loyaltyprograms/{loyaltyProgramId} | Get loyalty program
[**getLoyaltyPrograms**](LedgerApi.md#getLoyaltyPrograms) | **GET** /v1/loyaltyprograms | List loyalty programs
[**getPointPrice**](LedgerApi.md#getPointPrice) | **GET** /v1/applications/{applicationId}/loyaltyPoints | Get price for an item in all application subledger storages
[**updateLoyaltyProgram**](LedgerApi.md#updateLoyaltyProgram) | **PUT** /v1/loyaltyprograms/{loyaltyProgramId} | Update loyalty program data


# **createLoyaltyProgram**
> \Swagger\Client\Model\LoyaltyProgram createLoyaltyProgram($body)

Create a loyalty program

Create a new loyalty program in the account. The name of the program must be unique within the application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewLoyaltyProgram(); // \Swagger\Client\Model\NewLoyaltyProgram | 

try {
    $result = $apiInstance->createLoyaltyProgram($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->createLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewLoyaltyProgram**](../Model/NewLoyaltyProgram.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoyaltyProgram**
> deleteLoyaltyProgram($loyalty_program_id)

Delete a loyalty program

Delete a loalty program. This action may fail if there are still ledger entries linked to the program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyalty_program_id = 56; // int | The identifier for the loyalty program

try {
    $apiInstance->deleteLoyaltyProgram($loyalty_program_id);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->deleteLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_program_id** | **int**| The identifier for the loyalty program |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyProgram**
> \Swagger\Client\Model\LoyaltyProgram getLoyaltyProgram($loyalty_program_id)

Get loyalty program

Get information about a specific loyalty program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyalty_program_id = 56; // int | The identifier for the loyalty program

try {
    $result = $apiInstance->getLoyaltyProgram($loyalty_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_program_id** | **int**| The identifier for the loyalty program |

### Return type

[**\Swagger\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyPrograms**
> \Swagger\Client\Model\InlineResponse2008 getLoyaltyPrograms($page_size, $skip, $sort)

List loyalty programs

Get a list of the current loyalty programs defined in the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getLoyaltyPrograms($page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLoyaltyPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPointPrice**
> \Swagger\Client\Model\ProductLoyaltyPoints getPointPrice($application_id, $body)

Get price for an item in all application subledger storages

Get a list of the price for an SKU in loyalty points for all eligible loyalty programs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$body = new \Swagger\Client\Model\NewProductLoyaltyPoints(); // \Swagger\Client\Model\NewProductLoyaltyPoints | 

try {
    $result = $apiInstance->getPointPrice($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getPointPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **body** | [**\Swagger\Client\Model\NewProductLoyaltyPoints**](../Model/NewProductLoyaltyPoints.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductLoyaltyPoints**](../Model/ProductLoyaltyPoints.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoyaltyProgram**
> \Swagger\Client\Model\LoyaltyProgram updateLoyaltyProgram($loyalty_program_id, $body)

Update loyalty program data

Change an existing loyalty program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyalty_program_id = 56; // int | The identifier for the loyalty program
$body = new \Swagger\Client\Model\NewLoyaltyProgram(); // \Swagger\Client\Model\NewLoyaltyProgram | 

try {
    $result = $apiInstance->updateLoyaltyProgram($loyalty_program_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->updateLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyalty_program_id** | **int**| The identifier for the loyalty program |
 **body** | [**\Swagger\Client\Model\NewLoyaltyProgram**](../Model/NewLoyaltyProgram.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

