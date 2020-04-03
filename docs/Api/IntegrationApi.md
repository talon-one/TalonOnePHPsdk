# OpenAPI\Client\IntegrationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponReservation**](IntegrationApi.md#createCouponReservation) | **POST** /v1/coupon_reservations/{couponValue} | Create a new coupon reservation
[**createReferral**](IntegrationApi.md#createReferral) | **POST** /v1/referrals | Create a referral code for an advocate
[**deleteCouponReservation**](IntegrationApi.md#deleteCouponReservation) | **DELETE** /v1/coupon_reservations/{couponValue} | Delete coupon reservations
[**deleteCustomerData**](IntegrationApi.md#deleteCustomerData) | **DELETE** /v1/customer_data/{integrationId} | Delete the personal data of a customer.
[**getCustomerInventory**](IntegrationApi.md#getCustomerInventory) | **GET** /v1/customer_profiles/{integrationId}/inventory | Get an inventory of all data associated with a specific customer profile.
[**getReservedCoupons**](IntegrationApi.md#getReservedCoupons) | **GET** /v1/coupon_reservations/coupons/{integrationId} | Get all valid reserved coupons
[**getReservedCustomers**](IntegrationApi.md#getReservedCustomers) | **GET** /v1/coupon_reservations/customerprofiles/{couponValue} | Get the users that have this coupon reserved
[**trackEvent**](IntegrationApi.md#trackEvent) | **POST** /v1/events | Track an Event
[**updateCustomerProfile**](IntegrationApi.md#updateCustomerProfile) | **PUT** /v1/customer_profiles/{integrationId} | Update a Customer Profile
[**updateCustomerSession**](IntegrationApi.md#updateCustomerSession) | **PUT** /v1/customer_sessions/{customerSessionId} | Update a Customer Session
[**updateCustomerSessionV2**](IntegrationApi.md#updateCustomerSessionV2) | **PUT** /v2/customer_sessions/{customerSessionId} | Update a Customer Session



## createCouponReservation

> \OpenAPI\Client\Model\Coupon createCouponReservation($coupon_value, $body)

Create a new coupon reservation

Creates a coupon reservation for all passed customer profiles on this couponID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_value = 'coupon_value_example'; // string | The value of a coupon
$body = new \OpenAPI\Client\Model\CouponReservations(); // \OpenAPI\Client\Model\CouponReservations | 

try {
    $result = $apiInstance->createCouponReservation($coupon_value, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_value** | **string**| The value of a coupon |
 **body** | [**\OpenAPI\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReferral

> \OpenAPI\Client\Model\Referral createReferral($body)

Create a referral code for an advocate

Creates a referral code for an advocate. The code will be valid for the referral campaign for which is created, indicated in the `campaignId` parameter, and will be associated with the profile specified in the `advocateProfileIntegrationId` parameter as the advocate's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewReferral(); // \OpenAPI\Client\Model\NewReferral | 

try {
    $result = $apiInstance->createReferral($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewReferral**](../Model/NewReferral.md)|  |

### Return type

[**\OpenAPI\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCouponReservation

> deleteCouponReservation($coupon_value, $body)

Delete coupon reservations

Removes all passed customer profiles reservation from this coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_value = 'coupon_value_example'; // string | The value of a coupon
$body = new \OpenAPI\Client\Model\CouponReservations(); // \OpenAPI\Client\Model\CouponReservations | 

try {
    $apiInstance->deleteCouponReservation($coupon_value, $body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_value** | **string**| The value of a coupon |
 **body** | [**\OpenAPI\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomerData

> deleteCustomerData($integration_id)

Delete the personal data of a customer.

Delete all attributes on the customer profile and on entities that reference that customer profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string | The custom identifier for this profile, must be unique within the account.

try {
    $apiInstance->deleteCustomerData($integration_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteCustomerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerInventory

> \OpenAPI\Client\Model\CustomerInventory getCustomerInventory($integration_id, $profile, $referrals)

Get an inventory of all data associated with a specific customer profile.

Get information regarding entities referencing this customer profile's integrationId. Currently we support customer profile information and referral codes. In the future, this will be expanded with coupon codes and loyalty points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string | The custom identifier for this profile, must be unique within the account.
$profile = new \stdClass; // object | optional flag to decide if you would like customer profile information in the response
$referrals = new \stdClass; // object | optional flag to decide if you would like referral information in the response

try {
    $result = $apiInstance->getCustomerInventory($integration_id, $profile, $referrals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getCustomerInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **profile** | [**object**](../Model/.md)| optional flag to decide if you would like customer profile information in the response | [optional]
 **referrals** | [**object**](../Model/.md)| optional flag to decide if you would like referral information in the response | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerInventory**](../Model/CustomerInventory.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReservedCoupons

> \OpenAPI\Client\Model\InlineResponse2001 getReservedCoupons($integration_id)

Get all valid reserved coupons

Returns all coupons this user is subscribed to that are valid and usable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string | The custom identifier for this profile, must be unique within the account.

try {
    $result = $apiInstance->getReservedCoupons($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getReservedCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReservedCustomers

> \OpenAPI\Client\Model\InlineResponse200 getReservedCustomers($coupon_value)

Get the users that have this coupon reserved

Returns all users that have this coupon marked as reserved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_value = 'coupon_value_example'; // string | The value of a coupon

try {
    $result = $apiInstance->getReservedCustomers($coupon_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getReservedCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_value** | **string**| The value of a coupon |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trackEvent

> \OpenAPI\Client\Model\IntegrationState trackEvent($body)

Track an Event

Records an arbitrary event in a customer session. For example, an integration might record an event when a user updates their payment information.  The `sessionId` body parameter is required, an event is always part of a session. Much like updating a customer session, if either the profile or the session do not exist, a new empty one will be created. Note that if the specified session already exists, it must belong to the same `profileId` or an error will be returned.  As with customer sessions, you can use an empty string for `profileId` to indicate that this is an anonymous session.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewEvent(); // \OpenAPI\Client\Model\NewEvent | 

try {
    $result = $apiInstance->trackEvent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewEvent**](../Model/NewEvent.md)|  |

### Return type

[**\OpenAPI\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfile

> \OpenAPI\Client\Model\IntegrationState updateCustomerProfile($integration_id, $body)

Update a Customer Profile

Update (or create) a [Customer Profile][]. This profile information can then be matched and/or updated by campaign [Rules][].  The `integrationId` may be any identifier that will remain stable for the customer. For example, you might use a database ID, an email, or a phone number as the `integrationId`. It is vital that this ID **not** change over time, so **don't** use any identifier that the customer can update themselves. E.g. if your application allows a customer to update their e-mail address, you should instead use a database ID.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  [Customer Profile]: /Getting-Started/entities#customer-profile [Rules]: /Getting-Started/entities#campaigns-rulesets-and-coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string | The custom identifier for this profile, must be unique within the account.
$body = new \OpenAPI\Client\Model\NewCustomerProfile(); // \OpenAPI\Client\Model\NewCustomerProfile | 

try {
    $result = $apiInstance->updateCustomerProfile($integration_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **string**| The custom identifier for this profile, must be unique within the account. |
 **body** | [**\OpenAPI\Client\Model\NewCustomerProfile**](../Model/NewCustomerProfile.md)|  |

### Return type

[**\OpenAPI\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerSession

> \OpenAPI\Client\Model\IntegrationState updateCustomerSession($customer_session_id, $body)

Update a Customer Session

Update (or create) a [Customer Session][]. For example, the items in a customers cart are part of a session.  The Talon.One platform supports multiple simultaneous sessions for the same profile, so if you have multiple ways of accessing the same application you have the option of either tracking multiple independent sessions or using the same session across all of them. You should share sessions when application access points share other state, such as the users cart. If two points of access to the application have independent state (e.g. a user can have different items in their cart across the two) they should use independent customer session ID's.  The `profileId` parameter in the request body should correspond to an `integrationId` for a customer profile, to track an anonymous session use the empty string (`\"\"`) as the `profileId`. Note that you do **not** need to create a customer profile first: if the specified profile does not yet exist, an empty profile will be created automatically.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.  [Customer Session]: /Getting-Started/entities#customer-session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_session_id = 'customer_session_id_example'; // string | The custom identifier for this session, must be unique within the account.
$body = new \OpenAPI\Client\Model\NewCustomerSession(); // \OpenAPI\Client\Model\NewCustomerSession | 

try {
    $result = $apiInstance->updateCustomerSession($customer_session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_session_id** | **string**| The custom identifier for this session, must be unique within the account. |
 **body** | [**\OpenAPI\Client\Model\NewCustomerSession**](../Model/NewCustomerSession.md)|  |

### Return type

[**\OpenAPI\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1), [integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerSessionV2

> \OpenAPI\Client\Model\IntegrationStateV2 updateCustomerSessionV2($customer_session_id, $body)

Update a Customer Session

Update (or create) a [Customer Session][]. For example, the items in a customers cart are part of a session.  The Talon.One platform supports multiple simultaneous sessions for the same profile, so if you have multiple ways of accessing the same application you have the option of either tracking multiple independent sessions or using the same session across all of them. You should share sessions when application access points share other state, such as the users cart. If two points of access to the application have independent state (e.g. a user can have different items in their cart across the two) they should use independent customer session ID's.  The `profileId` parameter in the request body should correspond to an `integrationId` for a customer profile, to track an anonymous session use the empty string (`\"\"`) as the `profileId`. Note that you do **not** need to create a customer profile first: if the specified profile does not yet exist, an empty profile will be created automatically.  Updating a customer profile will return a response with the requested integration state. This includes the effects that were generated due to triggered campaigns, the created coupons and referral objects, as well as any entity that was requested in the request parameter \"responseContent\".  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.  [Customer Session]: /Getting-Started/entities#customer-session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_session_id = 'customer_session_id_example'; // string | The custom identifier for this session, must be unique within the account.
$body = new \OpenAPI\Client\Model\IntegrationRequest(); // \OpenAPI\Client\Model\IntegrationRequest | 

try {
    $result = $apiInstance->updateCustomerSessionV2($customer_session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSessionV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_session_id** | **string**| The custom identifier for this session, must be unique within the account. |
 **body** | [**\OpenAPI\Client\Model\IntegrationRequest**](../Model/IntegrationRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IntegrationStateV2**](../Model/IntegrationStateV2.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

