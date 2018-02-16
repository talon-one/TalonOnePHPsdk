# Swagger\Client\CustomerDataApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApplicationCustomer**](CustomerDataApi.md#getApplicationCustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get Application Customer
[**getApplicationCustomers**](CustomerDataApi.md#getApplicationCustomers) | **GET** /v1/applications/{applicationId}/customers | List Application Customers
[**getApplicationEventTypes**](CustomerDataApi.md#getApplicationEventTypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications Event Types
[**getApplicationEvents**](CustomerDataApi.md#getApplicationEvents) | **GET** /v1/applications/{applicationId}/events | List Applications Events
[**getApplicationSession**](CustomerDataApi.md#getApplicationSession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application Session
[**getApplicationSessions**](CustomerDataApi.md#getApplicationSessions) | **GET** /v1/applications/{applicationId}/sessions | List Application Sessions
[**getCustomerActivityReport**](CustomerDataApi.md#getCustomerActivityReport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get Activity Report for Single Customer
[**getCustomerActivityReports**](CustomerDataApi.md#getCustomerActivityReports) | **GET** /v1/applications/{applicationId}/customer_activity_reports | Get Activity Reports for Application Customers


# **getApplicationCustomer**
> \Swagger\Client\Model\ApplicationProfile getApplicationCustomer($application_id, $customer_id)

Get Application Customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$customer_id = 56; // int | 

try {
    $result = $apiInstance->getApplicationCustomer($application_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **customer_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApplicationProfile**](../Model/ApplicationProfile.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationCustomers**
> \Swagger\Client\Model\InlineResponse20015 getApplicationCustomers($application_id)

List Application Customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 

try {
    $result = $apiInstance->getApplicationCustomers($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationEventTypes**
> \Swagger\Client\Model\InlineResponse20019 getApplicationEventTypes($application_id, $page_size, $skip, $sort)

List Applications Event Types

Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/reference/#trackEvent)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getApplicationEventTypes($application_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationEvents**
> \Swagger\Client\Model\InlineResponse20018 getApplicationEvents($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $effects_query, $attributes_query, $rule_query, $campaign_query)

List Applications Events

Lists all events recorded for an application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$type = "type_example"; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date
$session = "session_example"; // string | Session integration ID filter for events. Must be exact match.
$profile = "profile_example"; // string | Profile integration ID filter for events. Must be exact match.
$customer_name = "customer_name_example"; // string | Customer name filter for events. Will match substrings case-insensitively.
$customer_email = "customer_email_example"; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$effects_query = "effects_query_example"; // string | Effects filter for events. Will perform a full-text search on the text content of the events effects, if any.
$attributes_query = "attributes_query_example"; // string | Attributes filter for events. Will perform a full-text search on the text content of the events attributes, both keys and values.
$rule_query = "rule_query_example"; // string | Rule name filter for events
$campaign_query = "campaign_query_example"; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEvents($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $effects_query, $attributes_query, $rule_query, $campaign_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **created_before** | **\DateTime**| Only return events created before this date | [optional]
 **created_after** | **\DateTime**| Only return events created after this date | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customer_name** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customer_email** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **effects_query** | **string**| Effects filter for events. Will perform a full-text search on the text content of the events effects, if any. | [optional]
 **attributes_query** | **string**| Attributes filter for events. Will perform a full-text search on the text content of the events attributes, both keys and values. | [optional]
 **rule_query** | **string**| Rule name filter for events | [optional]
 **campaign_query** | **string**| Campaign name filter for events | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationSession**
> \Swagger\Client\Model\ApplicationSession getApplicationSession($application_id, $session_id)

Get Application Session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$session_id = 56; // int | 

try {
    $result = $apiInstance->getApplicationSession($application_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **session_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApplicationSession**](../Model/ApplicationSession.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationSessions**
> \Swagger\Client\Model\InlineResponse20017 getApplicationSessions($application_id, $page_size, $skip, $sort, $profile)

List Application Sessions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$profile = "profile_example"; // string | Profile integration ID filter for sessions. Must be exact match.

try {
    $result = $apiInstance->getApplicationSessions($application_id, $page_size, $skip, $sort, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getApplicationSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **profile** | **string**| Profile integration ID filter for sessions. Must be exact match. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerActivityReport**
> \Swagger\Client\Model\CustomerActivityReport getCustomerActivityReport($range_start, $range_end, $application_id, $customer_id, $page_size, $skip)

Get Activity Report for Single Customer

Fetch summary report for single application customer based on a time range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$application_id = 56; // int | 
$customer_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerActivityReport($range_start, $range_end, $application_id, $customer_id, $page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getCustomerActivityReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **application_id** | **int**|  |
 **customer_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerActivityReport**](../Model/CustomerActivityReport.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerActivityReports**
> \Swagger\Client\Model\InlineResponse20016 getCustomerActivityReports($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: manager_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = "sort_example"; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$name = "name_example"; // string | Only return reports matching the customer name
$integration_id = "integration_id_example"; // string | Only return reports matching the integrationId
$campaign_name = "campaign_name_example"; // string | Only return reports matching the campaignName
$advocate_name = "advocate_name_example"; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReports($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->getCustomerActivityReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integration_id** | **string**| Only return reports matching the integrationId | [optional]
 **campaign_name** | **string**| Only return reports matching the campaignName | [optional]
 **advocate_name** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

