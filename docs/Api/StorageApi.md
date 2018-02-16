# Swagger\Client\StorageApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStorage**](StorageApi.md#createStorage) | **POST** /v1/applications/{applicationId}/storages | Create an application storage
[**createStorageData**](StorageApi.md#createStorageData) | **POST** /v1/applications/{applicationId}/storages/{storageId} | Create application storage data
[**deleteStorageValue**](StorageApi.md#deleteStorageValue) | **DELETE** /v1/applications/{applicationId}/storages/{storageId}/data/{keyName} | Delete one application storage value
[**getStorage**](StorageApi.md#getStorage) | **GET** /v1/applications/{applicationId}/storages/{storageId} | Get an application storage
[**getStorageData**](StorageApi.md#getStorageData) | **GET** /v1/applications/{applicationId}/storages/{storageId}/data | Get application storage data
[**getStorageValue**](StorageApi.md#getStorageValue) | **GET** /v1/applications/{applicationId}/storages/{storageId}/data/{keyName} | Get application storage value
[**getStorages**](StorageApi.md#getStorages) | **GET** /v1/applications/{applicationId}/storages | List application storages
[**updateStorage**](StorageApi.md#updateStorage) | **PUT** /v1/applications/{applicationId}/storages/{storageId} | Update an application storage
[**updateStorageValue**](StorageApi.md#updateStorageValue) | **PUT** /v1/applications/{applicationId}/storages/{storageId}/data/{keyName} | Update one application storage value


# **createStorage**
> \Swagger\Client\Model\ApplicationStorage createStorage($application_id, $body)

Create an application storage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$body = new \Swagger\Client\Model\NewApplicationStorage(); // \Swagger\Client\Model\NewApplicationStorage | 

try {
    $result = $apiInstance->createStorage($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **body** | [**\Swagger\Client\Model\NewApplicationStorage**](../Model/NewApplicationStorage.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicationStorage**](../Model/ApplicationStorage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStorageData**
> \Swagger\Client\Model\InlineResponse20012 createStorageData($application_id, $storage_id, $silent, $body)

Create application storage data

Creates new application storage data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage
$silent = "silent_example"; // string | If set to 'yes', response will be an empty 204, otherwise a list of the key value pairs generated.
$body = new \Swagger\Client\Model\NewApplicationStorageData(); // \Swagger\Client\Model\NewApplicationStorageData | 

try {
    $result = $apiInstance->createStorageData($application_id, $storage_id, $silent, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createStorageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |
 **silent** | **string**| If set to &#39;yes&#39;, response will be an empty 204, otherwise a list of the key value pairs generated. | [optional]
 **body** | [**\Swagger\Client\Model\NewApplicationStorageData**](../Model/NewApplicationStorageData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStorageValue**
> deleteStorageValue($application_id, $storage_id, $key_name)

Delete one application storage value

Deletes a key-value pair.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = "storage_id_example"; // string | The identifier for the storage
$key_name = "key_name_example"; // string | The key for the item

try {
    $apiInstance->deleteStorageValue($application_id, $storage_id, $key_name);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteStorageValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **string**| The identifier for the storage |
 **key_name** | **string**| The key for the item |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorage**
> \Swagger\Client\Model\ApplicationStorage getStorage($application_id, $storage_id)

Get an application storage

Receive the configuration of a specific storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage

try {
    $result = $apiInstance->getStorage($application_id, $storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |

### Return type

[**\Swagger\Client\Model\ApplicationStorage**](../Model/ApplicationStorage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorageData**
> \Swagger\Client\Model\InlineResponse20012 getStorageData($application_id, $storage_id)

Get application storage data

Receive the data of a specific storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage

try {
    $result = $apiInstance->getStorageData($application_id, $storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getStorageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorageValue**
> \Swagger\Client\Model\ApplicationStorageTuple getStorageValue($application_id, $storage_id, $key_name)

Get application storage value

Receive a value for a key from an application storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage
$key_name = "key_name_example"; // string | The key for the item

try {
    $result = $apiInstance->getStorageValue($application_id, $storage_id, $key_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getStorageValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |
 **key_name** | **string**| The key for the item |

### Return type

[**\Swagger\Client\Model\ApplicationStorageTuple**](../Model/ApplicationStorageTuple.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorages**
> \Swagger\Client\Model\InlineResponse20011 getStorages($application_id, $page_size, $skip, $sort)

List application storages

Lists all storages for this application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getStorages($application_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getStorages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStorage**
> \Swagger\Client\Model\ApplicationStorage updateStorage($application_id, $storage_id, $body)

Update an application storage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage
$body = new \Swagger\Client\Model\NewApplicationStorage(); // \Swagger\Client\Model\NewApplicationStorage | 

try {
    $result = $apiInstance->updateStorage($application_id, $storage_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |
 **body** | [**\Swagger\Client\Model\NewApplicationStorage**](../Model/NewApplicationStorage.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicationStorage**](../Model/ApplicationStorage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStorageValue**
> \Swagger\Client\Model\ApplicationStorageTuple updateStorageValue($application_id, $storage_id, $key_name, $body)

Update one application storage value

Update an existing application storage value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | The identifier for the application
$storage_id = 56; // int | The identifier for the storage
$key_name = "key_name_example"; // string | The key for the item
$body = new \Swagger\Client\Model\NewApplicationStorageTuple(); // \Swagger\Client\Model\NewApplicationStorageTuple | 

try {
    $result = $apiInstance->updateStorageValue($application_id, $storage_id, $key_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateStorageValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| The identifier for the application |
 **storage_id** | **int**| The identifier for the storage |
 **key_name** | **string**| The key for the item |
 **body** | [**\Swagger\Client\Model\NewApplicationStorageTuple**](../Model/NewApplicationStorageTuple.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicationStorageTuple**](../Model/ApplicationStorageTuple.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

