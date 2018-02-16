# Swagger\Client\LoyaltyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableLoyaltyProgram**](LoyaltyApi.md#disableLoyaltyProgram) | **PUT** /v1/applications/{applicationId}/loyalty/disable | Disable a loyalty program for an application
[**enableLoyaltyProgram**](LoyaltyApi.md#enableLoyaltyProgram) | **PUT** /v1/applications/{applicationId}/loyalty/enable | Enable a loyalty program for an application
[**getLedgerBalances**](LoyaltyApi.md#getLedgerBalances) | **GET** /v1/customer_profiles/{integrationId}/ledger/balances | List the current point balances for customer
[**getLedgerHistory**](LoyaltyApi.md#getLedgerHistory) | **GET** /v1/customer_profiles/{integrationId}/ledger/{loyaltyProgramId}/history | List point transactions for a customer and loyalty program
[**joinLoyaltyProgram**](LoyaltyApi.md#joinLoyaltyProgram) | **PUT** /v1/customer_profiles/{integrationId}/loyalty/join | Join a loyalty program
[**leaveLoyaltyProgram**](LoyaltyApi.md#leaveLoyaltyProgram) | **PUT** /v1/customer_profiles/{integrationId}/loyalty/leave | Leave a loyalty program


# **disableLoyaltyProgram**
> \Swagger\Client\Model\IntegrationState disableLoyaltyProgram($application_id, $body)

Disable a loyalty program for an application

Disable an existing loyalty program for an application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "application_id_example"; // string | The identifier for the application, must be unique within the account.
$body = new \Swagger\Client\Model\LoyaltyMembership(); // \Swagger\Client\Model\LoyaltyMembership | 

try {
    $result = $apiInstance->disableLoyaltyProgram($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->disableLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The identifier for the application, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\LoyaltyMembership**](../Model/LoyaltyMembership.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableLoyaltyProgram**
> \Swagger\Client\Model\IntegrationState enableLoyaltyProgram($application_id, $body)

Enable a loyalty program for an application

Enable an existing loyalty program for an application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "application_id_example"; // string | The identifier for the application, must be unique within the account.
$body = new \Swagger\Client\Model\LoyaltyMembership(); // \Swagger\Client\Model\LoyaltyMembership | 

try {
    $result = $apiInstance->enableLoyaltyProgram($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->enableLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| The identifier for the application, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\LoyaltyMembership**](../Model/LoyaltyMembership.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerBalances**
> \Swagger\Client\Model\InlineResponse2007 getLedgerBalances($integration_id, $page_size, $skip, $sort)

List the current point balances for customer

Show the current balances accrued by this customer for loyalty programs with non-expired points and positive balances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = "integration_id_example"; // string | The custom identifier for this profile, must be unique within the account.
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getLedgerBalances($integration_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->getLedgerBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerHistory**
> \Swagger\Client\Model\InlineResponse2006 getLedgerHistory($integration_id, $loyalty_program_id, $page_size, $skip, $sort)

List point transactions for a customer and loyalty program

Show transactions for a customer in a certain loyalty program. Collecting points are recorded as positive amounts referencing an event that triggered the point collection. Similarily, spending points are recorded as negative amounts tied to an event that triggered spending.  Pairs of collected and spent points reference each other to show the clearing of points. The amount spent will link to the same positive amount of points. If only parts of a positive transaction needs to be spend, the whole amount is subtracted and the remaining points added with the same expiration date as the original collected points.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = "integration_id_example"; // string | The custom identifier for this profile, must be unique within the account.
$loyalty_program_id = 56; // int | The custom identifier for the ledger.
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getLedgerHistory($integration_id, $loyalty_program_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->getLedgerHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **loyalty_program_id** | **int**| The custom identifier for the ledger. |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinLoyaltyProgram**
> \Swagger\Client\Model\IntegrationState joinLoyaltyProgram($integration_id, $body)

Join a loyalty program

Sign a customer on to an existing loyalty program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = "integration_id_example"; // string | The custom identifier for this profile, must be unique within the account.
$body = new \Swagger\Client\Model\LoyaltyMembership(); // \Swagger\Client\Model\LoyaltyMembership | 

try {
    $result = $apiInstance->joinLoyaltyProgram($integration_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->joinLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\LoyaltyMembership**](../Model/LoyaltyMembership.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leaveLoyaltyProgram**
> \Swagger\Client\Model\IntegrationState leaveLoyaltyProgram($integration_id, $body)

Leave a loyalty program

Sign customer off a loyalty program that they had joined earlier. Remaining points will be expired.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = "integration_id_example"; // string | The custom identifier for this profile, must be unique within the account.
$body = new \Swagger\Client\Model\LoyaltyMembership(); // \Swagger\Client\Model\LoyaltyMembership | 

try {
    $result = $apiInstance->leaveLoyaltyProgram($integration_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->leaveLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\LoyaltyMembership**](../Model/LoyaltyMembership.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

