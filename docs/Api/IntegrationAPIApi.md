# Swagger\Client\IntegrationAPIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReferral**](IntegrationAPIApi.md#createReferral) | **POST** /v1/referrals | Create a referral code for an advocate
[**getCustomerProfilesByAttributes**](IntegrationAPIApi.md#getCustomerProfilesByAttributes) | **POST** /v1/customer_profiles_search | Get a list of the customer profiles that match the given attributes
[**trackEvent**](IntegrationAPIApi.md#trackEvent) | **POST** /v1/events | Track an Event
[**updateCustomerProfile**](IntegrationAPIApi.md#updateCustomerProfile) | **PUT** /v1/customer_profiles/{integrationId} | Update a Customer Profile
[**updateCustomerSession**](IntegrationAPIApi.md#updateCustomerSession) | **PUT** /v1/customer_sessions/{customerSessionId} | Update a Customer Session


# **createReferral**
> \Swagger\Client\Model\Referral createReferral($body)

Create a referral code for an advocate

Creates a referral code for an advocate. The code will be valid for the referral campaign for which is created, indicated in the `campaignId` parameter, and will be associated with the profile specified in the `advocateProfileIntegrationId` parameter as the advocate's profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: IntegrationAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewReferral(); // \Swagger\Client\Model\NewReferral | 

try {
    $result = $apiInstance->createReferral($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->createReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewReferral**](../Model/NewReferral.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[IntegrationAuth](../../README.md#IntegrationAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerProfilesByAttributes**
> \Swagger\Client\Model\InlineResponse200 getCustomerProfilesByAttributes($body)

Get a list of the customer profiles that match the given attributes

Gets a list of all the cusomer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: http://help.talon.one/customer/en/portal/articles/2525263-data-model?b_id=14115#customer-profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: IntegrationAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerProfileSearch(); // \Swagger\Client\Model\CustomerProfileSearch | 

try {
    $result = $apiInstance->getCustomerProfilesByAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->getCustomerProfilesByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerProfileSearch**](../Model/CustomerProfileSearch.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[IntegrationAuth](../../README.md#IntegrationAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackEvent**
> \Swagger\Client\Model\IntegrationState trackEvent($body)

Track an Event

Records an arbitrary event in a customer session. For example, an integration might record an event when a user updates their payment information.  The `sessionId` body parameter is required, an event is always part of a session. Much like updating a customer session, if either the profile or the session do not exist, a new empty one will be created. Note that if the specified session already exists, it must belong to the same `profileId` or an error will be returned.  As with customer sessions, you can use an empty string for `profileId` to indicate that this is an anonymous session.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: IntegrationAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewEvent(); // \Swagger\Client\Model\NewEvent | 

try {
    $result = $apiInstance->trackEvent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEvent**](../Model/NewEvent.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[IntegrationAuth](../../README.md#IntegrationAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerProfile**
> \Swagger\Client\Model\IntegrationState updateCustomerProfile($integration_id, $body)

Update a Customer Profile

Update (or create) a [Customer Profile][]. This profile information can then be matched and/or updated by campaign [Rules][].  The `integrationId` may be any identifier that will remain stable for the customer. For example, you might use a database ID, an email, or a phone number as the `integrationId`. It is vital that this ID **not** change over time, so **don't** use any identifier that the customer can update themselves. E.g. if your application allows a customer to update their e-mail address, you should instead use a database ID.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  [Customer Profile]: /entities/#customer-profile [Rules]: /entities/#campaigns-rulesets-and-coupons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: IntegrationAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = "integration_id_example"; // string | The custom identifier for this profile, must be unique within the account.
$body = new \Swagger\Client\Model\NewCustomerProfile(); // \Swagger\Client\Model\NewCustomerProfile | 

try {
    $result = $apiInstance->updateCustomerProfile($integration_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\NewCustomerProfile**](../Model/NewCustomerProfile.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[IntegrationAuth](../../README.md#IntegrationAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerSession**
> \Swagger\Client\Model\IntegrationState updateCustomerSession($customer_session_id, $body)

Update a Customer Session

Update (or create) a [Customer Session][]. For example, the items in a customers cart are part of a session.  The Talon.One platform supports multiple simultaneous sessions for the same profile, so if you have multiple ways of accessing the same application you have the option of either tracking multiple independent sessions or using the same session across all of them. You should share sessions when application access points share other state, such as the users cart. If two points of access to the application have independent state (e.g. a user can have different items in their cart across the two) they should use independent customer session ID's.  The `profileId` parameter in the request body should correspond to an `integrationId` for a customer profile, to track an anonymous session use the empty string (`\"\"`) as the `profileId`. Note that you do **not** need to create a customer profile first: if the specified profile does not yet exist, an empty profile will be created automatically.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.  [Customer Session]: /entities/#customer-session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: IntegrationAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_session_id = "customer_session_id_example"; // string | The custom identifier for this session, must be unique within the account.
$body = new \Swagger\Client\Model\NewCustomerSession(); // \Swagger\Client\Model\NewCustomerSession | 

try {
    $result = $apiInstance->updateCustomerSession($customer_session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAPIApi->updateCustomerSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_session_id** | **string**| The custom identifier for this session, must be unique within the account. |
 **body** | [**\Swagger\Client\Model\NewCustomerSession**](../Model/NewCustomerSession.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[IntegrationAuth](../../README.md#IntegrationAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

