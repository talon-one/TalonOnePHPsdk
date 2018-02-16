# Swagger\Client\APIKeyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAPIKey**](APIKeyApi.md#createAPIKey) | **POST** /v1/api_keys | Create an API Key
[**createRole**](APIKeyApi.md#createRole) | **POST** /v1/roles | Create a role
[**deleteAPIKey**](APIKeyApi.md#deleteAPIKey) | **DELETE** /api_keys/{apiKeyId} | Delete an API key
[**deleteRole**](APIKeyApi.md#deleteRole) | **DELETE** /roles/{roleId} | Delete a role
[**getAPIKey**](APIKeyApi.md#getAPIKey) | **GET** /api_keys/{apiKeyId} | Get API Key
[**getRole**](APIKeyApi.md#getRole) | **GET** /roles/{roleId} | Get role
[**renewAPIToken**](APIKeyApi.md#renewAPIToken) | **PUT** /v1/api_keys/{apiKeyId}/renew_token | Renew the token for an API key
[**updateAPIKey**](APIKeyApi.md#updateAPIKey) | **PUT** /api_keys/{apiKeyId} | Update API key data
[**updateRole**](APIKeyApi.md#updateRole) | **PUT** /roles/{roleId} | Update role data


# **createAPIKey**
> \Swagger\Client\Model\ApiKey createAPIKey($body)

Create an API Key

Create a new API key in the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewApiKey(); // \Swagger\Client\Model\NewApiKey | 

try {
    $result = $apiInstance->createAPIKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->createAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewApiKey**](../Model/NewApiKey.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRole**
> \Swagger\Client\Model\Role createRole($body)

Create a role

Create a new role in the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewRole(); // \Swagger\Client\Model\NewRole | 

try {
    $result = $apiInstance->createRole($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewRole**](../Model/NewRole.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPIKey**
> deleteAPIKey($api_key_id)

Delete an API key

Delete an API Key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | The identifier for the API key

try {
    $apiInstance->deleteAPIKey($api_key_id);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->deleteAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_id** | **int**| The identifier for the API key |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> deleteRole($role_id)

Delete a role

Delete a role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | The identifier for the role

try {
    $apiInstance->deleteRole($role_id);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| The identifier for the role |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPIKey**
> \Swagger\Client\Model\ApiKeyWithUsage getAPIKey($api_key_id)

Get API Key

Get a specific API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | The identifier for the API key

try {
    $result = $apiInstance->getAPIKey($api_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->getAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_id** | **int**| The identifier for the API key |

### Return type

[**\Swagger\Client\Model\ApiKeyWithUsage**](../Model/ApiKeyWithUsage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRole**
> \Swagger\Client\Model\Role getRole($role_id)

Get role

Get a specific role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | The identifier for the role

try {
    $result = $apiInstance->getRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| The identifier for the role |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewAPIToken**
> \Swagger\Client\Model\ApiKeyWithUsage renewAPIToken($api_key_id, $body)

Renew the token for an API key

Renew the token for an API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | The identifier for the API key
$body = new \Swagger\Client\Model\NewApiKey(); // \Swagger\Client\Model\NewApiKey | 

try {
    $result = $apiInstance->renewAPIToken($api_key_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->renewAPIToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_id** | **int**| The identifier for the API key |
 **body** | [**\Swagger\Client\Model\NewApiKey**](../Model/NewApiKey.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyWithUsage**](../Model/ApiKeyWithUsage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAPIKey**
> \Swagger\Client\Model\ApiKeyWithUsage updateAPIKey($api_key_id, $body)

Update API key data

Change an existing API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 56; // int | The identifier for the API key
$body = new \Swagger\Client\Model\NewApiKey(); // \Swagger\Client\Model\NewApiKey | 

try {
    $result = $apiInstance->updateAPIKey($api_key_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->updateAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_id** | **int**| The identifier for the API key |
 **body** | [**\Swagger\Client\Model\NewApiKey**](../Model/NewApiKey.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyWithUsage**](../Model/ApiKeyWithUsage.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> \Swagger\Client\Model\Role updateRole($role_id, $body)

Update role data

Change an existing role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\APIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = "role_id_example"; // string | The identifier for this role.
$body = new \Swagger\Client\Model\NewRole(); // \Swagger\Client\Model\NewRole | 

try {
    $result = $apiInstance->updateRole($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeyApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The identifier for this role. |
 **body** | [**\Swagger\Client\Model\NewRole**](../Model/NewRole.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

