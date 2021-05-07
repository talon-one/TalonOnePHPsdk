# TalonOne\Client\IntegrationApi

All URIs are relative to *http://your_domain.your_region.talon.one*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponReservation**](IntegrationApi.md#createCouponReservation) | **POST** /v1/coupon_reservations/{couponValue} | Create a new coupon reservation
[**createReferral**](IntegrationApi.md#createReferral) | **POST** /v1/referrals | Create a referral code for an advocate
[**createReferralsForMultipleAdvocates**](IntegrationApi.md#createReferralsForMultipleAdvocates) | **POST** /v1/referrals_for_multiple_advocates | Create referral codes for multiple advocates
[**deleteCouponReservation**](IntegrationApi.md#deleteCouponReservation) | **DELETE** /v1/coupon_reservations/{couponValue} | Delete coupon reservations
[**deleteCustomerData**](IntegrationApi.md#deleteCustomerData) | **DELETE** /v1/customer_data/{integrationId} | Delete the personal data of a customer
[**getCustomerInventory**](IntegrationApi.md#getCustomerInventory) | **GET** /v1/customer_profiles/{integrationId}/inventory | Get an inventory of all data associated with a specific customer profile
[**getReservedCustomers**](IntegrationApi.md#getReservedCustomers) | **GET** /v1/coupon_reservations/customerprofiles/{couponValue} | Get the users that have this coupon reserved
[**trackEvent**](IntegrationApi.md#trackEvent) | **POST** /v1/events | Track an Event
[**updateCustomerProfile**](IntegrationApi.md#updateCustomerProfile) | **PUT** /v1/customer_profiles/{integrationId} | Update a Customer Profile V1
[**updateCustomerProfileAudiences**](IntegrationApi.md#updateCustomerProfileAudiences) | **POST** /v2/customer_audiences | Update a Customer Profile Audiences
[**updateCustomerProfileV2**](IntegrationApi.md#updateCustomerProfileV2) | **PUT** /v2/customer_profiles/{integrationId} | Update a Customer Profile
[**updateCustomerProfilesV2**](IntegrationApi.md#updateCustomerProfilesV2) | **PUT** /v2/customer_profiles | Update multiple Customer Profiles
[**updateCustomerSession**](IntegrationApi.md#updateCustomerSession) | **PUT** /v1/customer_sessions/{customerSessionId} | Update a Customer Session V1
[**updateCustomerSessionV2**](IntegrationApi.md#updateCustomerSessionV2) | **PUT** /v2/customer_sessions/{customerSessionId} | Update a Customer Session



## createCouponReservation

> \TalonOne\Client\Model\Coupon createCouponReservation($couponValue, $couponReservations)

Create a new coupon reservation

Creates a coupon reservation for all passed customer profiles on this couponID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponValue = 'couponValue_example'; // string | The value of a coupon
$couponReservations = new \TalonOne\Client\Model\CouponReservations(); // \TalonOne\Client\Model\CouponReservations | 

try {
    $result = $apiInstance->createCouponReservation($couponValue, $couponReservations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponValue** | **string**| The value of a coupon |
 **couponReservations** | [**\TalonOne\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

### Return type

[**\TalonOne\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReferral

> \TalonOne\Client\Model\Referral createReferral($newReferral)

Create a referral code for an advocate

Creates a referral code for an advocate. The code will be valid for the referral campaign for which is created, indicated in the `campaignId` parameter, and will be associated with the profile specified in the `advocateProfileIntegrationId` parameter as the advocate's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newReferral = new \TalonOne\Client\Model\NewReferral(); // \TalonOne\Client\Model\NewReferral | 

try {
    $result = $apiInstance->createReferral($newReferral);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newReferral** | [**\TalonOne\Client\Model\NewReferral**](../Model/NewReferral.md)|  |

### Return type

[**\TalonOne\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReferralsForMultipleAdvocates

> \TalonOne\Client\Model\InlineResponse201 createReferralsForMultipleAdvocates($newReferralsForMultipleAdvocates, $silent)

Create referral codes for multiple advocates

Creates unique referral codes for multiple advocates. The code will be valid for the referral campaign for which it is created, indicated in the `campaignId` parameter, and one referral code will be associated with one advocate using the profile specified in the `advocateProfileIntegrationId` parameter as the advocate's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newReferralsForMultipleAdvocates = new \TalonOne\Client\Model\NewReferralsForMultipleAdvocates(); // \TalonOne\Client\Model\NewReferralsForMultipleAdvocates | 
$silent = 'silent_example'; // string | If set to `yes`, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000).

try {
    $result = $apiInstance->createReferralsForMultipleAdvocates($newReferralsForMultipleAdvocates, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createReferralsForMultipleAdvocates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newReferralsForMultipleAdvocates** | [**\TalonOne\Client\Model\NewReferralsForMultipleAdvocates**](../Model/NewReferralsForMultipleAdvocates.md)|  |
 **silent** | **string**| If set to &#x60;yes&#x60;, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000). | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCouponReservation

> deleteCouponReservation($couponValue, $couponReservations)

Delete coupon reservations

Removes all passed customer profiles reservation from this coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponValue = 'couponValue_example'; // string | The value of a coupon
$couponReservations = new \TalonOne\Client\Model\CouponReservations(); // \TalonOne\Client\Model\CouponReservations | 

try {
    $apiInstance->deleteCouponReservation($couponValue, $couponReservations);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponValue** | **string**| The value of a coupon |
 **couponReservations** | [**\TalonOne\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomerData

> deleteCustomerData($integrationId)

Delete the personal data of a customer

Delete all attributes on the customer profile and on entities that reference that customer profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = 'integrationId_example'; // string | The custom identifier for this profile, must be unique within the account.

try {
    $apiInstance->deleteCustomerData($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteCustomerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The custom identifier for this profile, must be unique within the account. |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerInventory

> \TalonOne\Client\Model\CustomerInventory getCustomerInventory($integrationId, $profile, $referrals, $coupons, $loyalty, $giveaways)

Get an inventory of all data associated with a specific customer profile

Get information regarding entities referencing this customer profile's integrationId. Currently we support customer profile information, referral codes and reserved coupons. In the future, this will be expanded with loyalty points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = 'integrationId_example'; // string | The custom identifier for this profile, must be unique within the account.
$profile = True; // bool | optional flag to decide if you would like customer profile information in the response
$referrals = True; // bool | optional flag to decide if you would like referral information in the response
$coupons = True; // bool | optional flag to decide if you would like coupon information in the response
$loyalty = True; // bool | optional flag to decide if you would like loyalty information in the response
$giveaways = True; // bool | optional flag to decide if you would like giveaways information in the response

try {
    $result = $apiInstance->getCustomerInventory($integrationId, $profile, $referrals, $coupons, $loyalty, $giveaways);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getCustomerInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The custom identifier for this profile, must be unique within the account. |
 **profile** | **bool**| optional flag to decide if you would like customer profile information in the response | [optional]
 **referrals** | **bool**| optional flag to decide if you would like referral information in the response | [optional]
 **coupons** | **bool**| optional flag to decide if you would like coupon information in the response | [optional]
 **loyalty** | **bool**| optional flag to decide if you would like loyalty information in the response | [optional]
 **giveaways** | **bool**| optional flag to decide if you would like giveaways information in the response | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerInventory**](../Model/CustomerInventory.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReservedCustomers

> \TalonOne\Client\Model\InlineResponse200 getReservedCustomers($couponValue)

Get the users that have this coupon reserved

Returns all users that have this coupon marked as reserved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponValue = 'couponValue_example'; // string | The value of a coupon

try {
    $result = $apiInstance->getReservedCustomers($couponValue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getReservedCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponValue** | **string**| The value of a coupon |

### Return type

[**\TalonOne\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trackEvent

> \TalonOne\Client\Model\IntegrationState trackEvent($newEvent, $dry)

Track an Event

Records an arbitrary event in a customer session. For example, an integration might record an event when a user updates their payment information.  The `sessionId` body parameter is required, an event is always part of a session. Much like updating a customer session, if either the profile or the session do not exist, a new empty one will be created. Note that if the specified session already exists, it must belong to the same `profileId` or an error will be returned.  As with customer sessions, you can use an empty string for `profileId` to indicate that this is an anonymous session.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newEvent = new \TalonOne\Client\Model\NewEvent(); // \TalonOne\Client\Model\NewEvent | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->trackEvent($newEvent, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newEvent** | [**\TalonOne\Client\Model\NewEvent**](../Model/NewEvent.md)|  |
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;. | [optional]

### Return type

[**\TalonOne\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfile

> \TalonOne\Client\Model\IntegrationState updateCustomerProfile($integrationId, $newCustomerProfile, $dry)

Update a Customer Profile V1

⚠️ Deprecation Notice: Support for requests to this endpoint will end on 15.07.2021. We will not remove the endpoint, and it will still be accessible for you to use. For new features support, migrate to [API V2.0](/Getting-Started/APIV2).  Update (or create) a [Customer Profile](https://developers.talon.one/Getting-Started/entities#/customer-profile). This profile information can then be matched and/or updated by campaign [Rules][].  The `integrationId` may be any identifier that will remain stable for the customer. For example, you might use a database ID, an email, or a phone number as the `integrationId`. It is vital that this ID **not** change over time, so **don't** use any identifier that the customer can update themselves. E.g. if your application allows a customer to update their e-mail address, you should instead use a database ID.  Updating a customer profile will return a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  [Customer Profile]: /Getting-Started/entities#/customer-profile [Rules]: /Getting-Started/entities#/campaigns-rulesets-and-coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = 'integrationId_example'; // string | The custom identifier for this profile, must be unique within the account.
$newCustomerProfile = new \TalonOne\Client\Model\NewCustomerProfile(); // \TalonOne\Client\Model\NewCustomerProfile | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->updateCustomerProfile($integrationId, $newCustomerProfile, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The custom identifier for this profile, must be unique within the account. |
 **newCustomerProfile** | [**\TalonOne\Client\Model\NewCustomerProfile**](../Model/NewCustomerProfile.md)|  |
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;. | [optional]

### Return type

[**\TalonOne\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfileAudiences

> updateCustomerProfileAudiences($customerProfileAudienceRequest)

Update a Customer Profile Audiences

Update one ore multiple Customer Profiles with the specified Audiences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerProfileAudienceRequest = new \TalonOne\Client\Model\CustomerProfileAudienceRequest(); // \TalonOne\Client\Model\CustomerProfileAudienceRequest | 

try {
    $apiInstance->updateCustomerProfileAudiences($customerProfileAudienceRequest);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfileAudiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerProfileAudienceRequest** | [**\TalonOne\Client\Model\CustomerProfileAudienceRequest**](../Model/CustomerProfileAudienceRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfileV2

> \TalonOne\Client\Model\IntegrationStateV2 updateCustomerProfileV2($integrationId, $customerProfileIntegrationRequestV2, $runRuleEngine, $dry)

Update a Customer Profile

Update (or create) a [Customer Profile](https://developers.talon.one/Getting-Started/entities#/customer-profile).  The `integrationId` must be any identifier that remains stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  Updating a customer profile returns a response with the requested integration state. If `runRuleEngine` is set to `true`, the response includes:  - The effects generated by the triggered campaigns. - The created coupons and referral objects. - Any entity that was requested in the `responseContent` request parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = 'integrationId_example'; // string | The custom identifier for this profile. Must be unique within the account.
$customerProfileIntegrationRequestV2 = new \TalonOne\Client\Model\CustomerProfileIntegrationRequestV2(); // \TalonOne\Client\Model\CustomerProfileIntegrationRequestV2 | 
$runRuleEngine = false; // bool | Indicates whether to run the rule engine.
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`. Only used when `runRuleEngine` is set to `true`.

try {
    $result = $apiInstance->updateCustomerProfileV2($integrationId, $customerProfileIntegrationRequestV2, $runRuleEngine, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfileV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The custom identifier for this profile. Must be unique within the account. |
 **customerProfileIntegrationRequestV2** | [**\TalonOne\Client\Model\CustomerProfileIntegrationRequestV2**](../Model/CustomerProfileIntegrationRequestV2.md)|  |
 **runRuleEngine** | **bool**| Indicates whether to run the rule engine. | [optional] [default to false]
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;. Only used when &#x60;runRuleEngine&#x60; is set to &#x60;true&#x60;. | [optional]

### Return type

[**\TalonOne\Client\Model\IntegrationStateV2**](../Model/IntegrationStateV2.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfilesV2

> \TalonOne\Client\Model\MultipleCustomerProfileIntegrationResponseV2 updateCustomerProfilesV2($multipleCustomerProfileIntegrationRequest, $silent)

Update multiple Customer Profiles

Update (or create) up to 1000 [Customer Profiles](https://developers.talon.one/Getting-Started/entities#/customer-profile) in 1 request.  The `integrationId` must be any identifier that remains stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  A customer profile [can be linked to one or more sessions](https://developers.talon.one/Integration-API/API-Reference#updateCustomerSessionV2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$multipleCustomerProfileIntegrationRequest = new \TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest(); // \TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest | 
$silent = 'silent_example'; // string | If set to `yes`, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000).

try {
    $result = $apiInstance->updateCustomerProfilesV2($multipleCustomerProfileIntegrationRequest, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfilesV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multipleCustomerProfileIntegrationRequest** | [**\TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest**](../Model/MultipleCustomerProfileIntegrationRequest.md)|  |
 **silent** | **string**| If set to &#x60;yes&#x60;, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000). | [optional]

### Return type

[**\TalonOne\Client\Model\MultipleCustomerProfileIntegrationResponseV2**](../Model/MultipleCustomerProfileIntegrationResponseV2.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerSession

> \TalonOne\Client\Model\IntegrationState updateCustomerSession($customerSessionId, $newCustomerSession, $dry)

Update a Customer Session V1

⚠️ Deprecation Notice: Support for requests to this endpoint will end on 15.07.2021. We will not remove the endpoint, and it will still be accessible for you to use. For new features support, migrate to [API V2.0](https://developers.talon.one/Getting-Started/APIV2).  Update (or create) a [Customer Session](https://developers.talon.one/Getting-Started/entities#/customer-session). For example, use this endpoint to represent which items are in the customer's cart.  The Talon.One platform supports multiple simultaneous sessions for the same profile. If you have multiple ways of accessing the same application you can either:  - Track multiple independent sessions or, - Use the same session across all of them.  You should share sessions when application access points share other state, such as the user's cart. If two points of access to the application have independent states, for example a user can have different items in their cart across the two) they should use independent customer session ID's.  To link a session to a customer profile, set the `profileId` parameter in the request body to a customer profile's `integrationId`. To track an anonymous session use the empty string (`\"\"`) as the `profileId`. **Note:** You do **not** have to create a customer profile first. If the specified profile does not exist, an empty profile is created automatically.  Updating a customer profile returns a response with the full integration state. This includes the current state of the customer profile, the customer session, the event that was recorded, and an array of effects that took place.  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerSessionId = 'customerSessionId_example'; // string | The custom identifier for this session, must be unique within the account.
$newCustomerSession = new \TalonOne\Client\Model\NewCustomerSession(); // \TalonOne\Client\Model\NewCustomerSession | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->updateCustomerSession($customerSessionId, $newCustomerSession, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSessionId** | **string**| The custom identifier for this session, must be unique within the account. |
 **newCustomerSession** | [**\TalonOne\Client\Model\NewCustomerSession**](../Model/NewCustomerSession.md)|  |
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;. | [optional]

### Return type

[**\TalonOne\Client\Model\IntegrationState**](../Model/IntegrationState.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerSessionV2

> \TalonOne\Client\Model\IntegrationStateV2 updateCustomerSessionV2($customerSessionId, $integrationRequest, $dry)

Update a Customer Session

Update (or create) a [Customer Session](https://developers.talon.one/Getting-Started/entities#/customer-session). For example, use this endpoint to represent which items are in the customer's cart.  The Talon.One platform supports multiple simultaneous sessions for the same profile. If you have multiple ways of accessing the same application you can either:  - Track multiple independent sessions or, - Use the same session across all of them.  You should share sessions when application access points share other state, such as the user's cart. If two points of access to the application have independent states, for example a user can have different items in their cart across the two) they should use independent customer session ID's.  To link a session to a customer profile, set the `profileId` parameter in the request body to a customer profile's `integrationId`. To track an anonymous session use the empty string (`\"\"`) as the `profileId`. **Note:** You do **not** have to create a customer profile first. If the specified profile does not exist, an empty profile is created automatically.  Updating a customer session returns a response with the requested integration state. If `runRuleEngine` is set to `true`, the response includes:  - The effects generated by the triggered campaigns. - The created coupons and referral objects. - Any entity that was requested in the `responseContent` request parameter.  The currency for the session and the cart items in the session is the same as that of the application with which the session is associated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key_v1
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerSessionId = 'customerSessionId_example'; // string | The custom identifier for this session, must be unique within the account.
$integrationRequest = new \TalonOne\Client\Model\IntegrationRequest(); // \TalonOne\Client\Model\IntegrationRequest | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->updateCustomerSessionV2($customerSessionId, $integrationRequest, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSessionV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSessionId** | **string**| The custom identifier for this session, must be unique within the account. |
 **integrationRequest** | [**\TalonOne\Client\Model\IntegrationRequest**](../Model/IntegrationRequest.md)|  |
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;. | [optional]

### Return type

[**\TalonOne\Client\Model\IntegrationStateV2**](../Model/IntegrationStateV2.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

