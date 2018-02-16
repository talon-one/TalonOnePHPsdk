# Swagger\Client\LogsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessLogs**](LogsApi.md#getAccessLogs) | **GET** /v1/applications/{applicationId}/access_logs | Get access logs for application
[**getAllAccessLogs**](LogsApi.md#getAllAccessLogs) | **GET** /v1/access_logs | Get all access logs
[**getWebhookLogs**](LogsApi.md#getWebhookLogs) | **GET** /v1/webhook_logs | List Webhook Log Entries


# **getAccessLogs**
> \Swagger\Client\Model\InlineResponse20013 getAccessLogs($application_id, $range_start, $range_end, $path, $method, $page_size, $skip, $sort)

Get access logs for application



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = "path_example"; // string | Only return results where the request path matches the given regular expresssion.
$method = "method_example"; // string | Only return results where the request method matches the given regular expresssion.
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAccessLogs($application_id, $range_start, $range_end, $path, $method, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expresssion. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expresssion. | [optional]
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccessLogs**
> \Swagger\Client\Model\InlineResponse20013 getAllAccessLogs($range_start, $range_end, $path, $method, $page_size, $skip, $sort)

Get all access logs

Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = "path_example"; // string | Only return results where the request path matches the given regular expresssion.
$method = "method_example"; // string | Only return results where the request method matches the given regular expresssion.
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAllAccessLogs($range_start, $range_end, $path, $method, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getAllAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expresssion. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expresssion. | [optional]
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookLogs**
> \Swagger\Client\Model\InlineResponse20023 getWebhookLogs($page_size, $skip, $sort, $webhook_id, $application_id, $campaign_id, $request_uuid, $status, $created_before, $created_after)

List Webhook Log Entries



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$webhook_id = 56; // int | Filter results by Webhook.
$application_id = 56; // int | 
$campaign_id = 56; // int | Filter results by campaign.
$request_uuid = "request_uuid_example"; // string | Filter results by request UUID.
$status = "status_example"; // string | Filter results by HTTTP status codes.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

try {
    $result = $apiInstance->getWebhookLogs($page_size, $skip, $sort, $webhook_id, $application_id, $campaign_id, $request_uuid, $status, $created_before, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **webhook_id** | **int**| Filter results by Webhook. | [optional]
 **application_id** | **int**|  | [optional]
 **campaign_id** | **int**| Filter results by campaign. | [optional]
 **request_uuid** | **string**| Filter results by request UUID. | [optional]
 **status** | **string**| Filter results by HTTTP status codes. | [optional]
 **created_before** | **\DateTime**| Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **created_after** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

