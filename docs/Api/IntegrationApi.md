# TalonOne\Client\IntegrationApi

All URIs are relative to *https://yourbaseurl.talon.one*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAudienceV2**](IntegrationApi.md#createAudienceV2) | **POST** /v2/audiences | Create audience
[**createCouponReservation**](IntegrationApi.md#createCouponReservation) | **POST** /v1/coupon_reservations/{couponValue} | Create coupon reservation
[**createReferral**](IntegrationApi.md#createReferral) | **POST** /v1/referrals | Create referral code for an advocate
[**createReferralsForMultipleAdvocates**](IntegrationApi.md#createReferralsForMultipleAdvocates) | **POST** /v1/referrals_for_multiple_advocates | Create referral codes for multiple advocates
[**deleteAudienceMembershipsV2**](IntegrationApi.md#deleteAudienceMembershipsV2) | **DELETE** /v2/audiences/{audienceId}/memberships | Delete audience memberships
[**deleteAudienceV2**](IntegrationApi.md#deleteAudienceV2) | **DELETE** /v2/audiences/{audienceId} | Delete audience
[**deleteCouponReservation**](IntegrationApi.md#deleteCouponReservation) | **DELETE** /v1/coupon_reservations/{couponValue} | Delete coupon reservations
[**deleteCustomerData**](IntegrationApi.md#deleteCustomerData) | **DELETE** /v1/customer_data/{integrationId} | Delete customer&#39;s personal data
[**getCustomerInventory**](IntegrationApi.md#getCustomerInventory) | **GET** /v1/customer_profiles/{integrationId}/inventory | List customer data
[**getCustomerSession**](IntegrationApi.md#getCustomerSession) | **GET** /v2/customer_sessions/{customerSessionId} | Get customer session
[**getLoyaltyTransactions**](IntegrationApi.md#getLoyaltyTransactions) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/transactions | Get loyalty ledger transaction logs
[**getReservedCustomers**](IntegrationApi.md#getReservedCustomers) | **GET** /v1/coupon_reservations/customerprofiles/{couponValue} | List customers that have this coupon reserved
[**returnCartItems**](IntegrationApi.md#returnCartItems) | **POST** /v2/customer_sessions/{customerSessionId}/returns | Return cart items
[**syncCatalog**](IntegrationApi.md#syncCatalog) | **PUT** /v1/catalogs/{catalogId}/sync | Sync cart item catalog
[**trackEvent**](IntegrationApi.md#trackEvent) | **POST** /v1/events | Track event
[**trackEventV2**](IntegrationApi.md#trackEventV2) | **POST** /v2/events | Track event V2
[**updateAudienceCustomersAttributes**](IntegrationApi.md#updateAudienceCustomersAttributes) | **PUT** /v2/audience_customers/{audienceId}/attributes | Update profile attributes for all customers in audience
[**updateAudienceV2**](IntegrationApi.md#updateAudienceV2) | **PUT** /v2/audiences/{audienceId} | Update audience name
[**updateCustomerProfileAudiences**](IntegrationApi.md#updateCustomerProfileAudiences) | **POST** /v2/customer_audiences | Update multiple customer profiles&#39; audiences
[**updateCustomerProfileV2**](IntegrationApi.md#updateCustomerProfileV2) | **PUT** /v2/customer_profiles/{integrationId} | Update customer profile
[**updateCustomerProfilesV2**](IntegrationApi.md#updateCustomerProfilesV2) | **PUT** /v2/customer_profiles | Update multiple customer profiles
[**updateCustomerSessionV2**](IntegrationApi.md#updateCustomerSessionV2) | **PUT** /v2/customer_sessions/{customerSessionId} | Update customer session



## createAudienceV2

> \TalonOne\Client\Model\Audience createAudienceV2($body)

Create audience

Create an audience. The audience can be created directly from scratch or can come from third party platforms.  To create an audience from an existing audience from a [technology partner](https://docs.talon.one/docs/dev/technology-partners/overview): 1. Set the `integration` property to `mparticle`, `segment` etc., depending on a third-party platform. 1. Set `integrationId` to the ID of this audience in a third-party platform.  To create an audience from an existing audience in another platform: 1. Do not use the `integration` property. 1. Set `integrationId` to the ID of this audience in the 3rd-party platform.  To create an audience from scratch: 1. Only set the `name` property.  Once you create your first audience, audience-specific rule conditions are enabled in the Rule Builder.

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
$body = new \TalonOne\Client\Model\NewAudience(); // \TalonOne\Client\Model\NewAudience | 

try {
    $result = $apiInstance->createAudienceV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createAudienceV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewAudience**](../Model/NewAudience.md)|  |

### Return type

[**\TalonOne\Client\Model\Audience**](../Model/Audience.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponReservation

> \TalonOne\Client\Model\Coupon createCouponReservation($couponValue, $body)

Create coupon reservation

Create a coupon reservation for specified customer profiles on the specified coupon.  Reserving a coupon allows you to associate a coupon code to a given customer(s). You can then list the reserved coupons of a given customer with the [List customer data endpoint](/integration-api/#operation/getCustomerInventory).  If a coupon gets created for a specific user, it will automatically show up in their coupons.  When a user redeems a coupon, a reservation is automatically created after the redemption and the used coupon will be returned in the [List customer data endpoint](/integration-api/#operation/getCustomerInventory).  **Important:** - This endpoint creates a **soft** reservation. _Any_ customer   can use a reserved coupon code and proceed to checkout. - To create a hard reservation, use the   [Create coupons](/management-api/#operation/createCoupons) or   [Create coupons for multiple recipients](/management-api/#operation/createCouponsForMultipleRecipients) endpoints   setting the `recipientsIntegrationId` property.  For example, you can use this endpoint and `List customer data` to create a _coupon wallet_ by reserving coupon codes for a customer, and then displaying their coupon wallet when they visit your store.

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
$couponValue = 'couponValue_example'; // string | The code of the coupon.
$body = new \TalonOne\Client\Model\CouponReservations(); // \TalonOne\Client\Model\CouponReservations | 

try {
    $result = $apiInstance->createCouponReservation($couponValue, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponValue** | **string**| The code of the coupon. |
 **body** | [**\TalonOne\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

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

> \TalonOne\Client\Model\Referral createReferral($body)

Create referral code for an advocate

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
$body = new \TalonOne\Client\Model\NewReferral(); // \TalonOne\Client\Model\NewReferral | 

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
 **body** | [**\TalonOne\Client\Model\NewReferral**](../Model/NewReferral.md)|  |

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

> \TalonOne\Client\Model\InlineResponse201 createReferralsForMultipleAdvocates($body, $silent)

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
$body = new \TalonOne\Client\Model\NewReferralsForMultipleAdvocates(); // \TalonOne\Client\Model\NewReferralsForMultipleAdvocates | 
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information.

try {
    $result = $apiInstance->createReferralsForMultipleAdvocates($body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createReferralsForMultipleAdvocates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewReferralsForMultipleAdvocates**](../Model/NewReferralsForMultipleAdvocates.md)|  |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information. | [optional] [default to &#39;yes&#39;]

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


## deleteAudienceMembershipsV2

> deleteAudienceMembershipsV2($audienceId)

Delete audience memberships

Remove all members from this audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audienceId = 56; // int | The ID of the audience. You get it via the `id` property when [creating an audience](#operation/createAudienceV2).

try {
    $apiInstance->deleteAudienceMembershipsV2($audienceId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteAudienceMembershipsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audienceId** | **int**| The ID of the audience. You get it via the &#x60;id&#x60; property when [creating an audience](#operation/createAudienceV2). |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAudienceV2

> deleteAudienceV2($audienceId)

Delete audience

Delete an audience created by a third-party integration.  **Warning:** This endpoint also removes any associations recorded between a customer profile and this audience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audienceId = 56; // int | The ID of the audience. You get it via the `id` property when [creating an audience](#operation/createAudienceV2).

try {
    $apiInstance->deleteAudienceV2($audienceId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteAudienceV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audienceId** | **int**| The ID of the audience. You get it via the &#x60;id&#x60; property when [creating an audience](#operation/createAudienceV2). |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCouponReservation

> deleteCouponReservation($couponValue, $body)

Delete coupon reservations

Remove all the coupon reservations from the provided customer profile integration IDs and the provided coupon code.

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
$couponValue = 'couponValue_example'; // string | The code of the coupon.
$body = new \TalonOne\Client\Model\CouponReservations(); // \TalonOne\Client\Model\CouponReservations | 

try {
    $apiInstance->deleteCouponReservation($couponValue, $body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponValue** | **string**| The code of the coupon. |
 **body** | [**\TalonOne\Client\Model\CouponReservations**](../Model/CouponReservations.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomerData

> deleteCustomerData($integrationId)

Delete customer's personal data

Delete all attributes on the customer profile and on entities that reference this customer profile.  **Important:** To preserve performance, we recommend avoiding deleting customer data during peak-traffic hours.

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
$integrationId = 'integrationId_example'; // string | The integration ID of the customer profile. You can get the `integrationId` of a profile using: - A customer session integration Id with the [Update customer session endpoint](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2). - The Management API with the [List application's customers endpoint](https://docs.talon.one/management-api/#operation/getApplicationCustomers).

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
 **integrationId** | **string**| The integration ID of the customer profile. You can get the &#x60;integrationId&#x60; of a profile using: - A customer session integration Id with the [Update customer session endpoint](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2). - The Management API with the [List application&#39;s customers endpoint](https://docs.talon.one/management-api/#operation/getApplicationCustomers). |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerInventory

> \TalonOne\Client\Model\CustomerInventory getCustomerInventory($integrationId, $profile, $referrals, $coupons, $loyalty, $giveaways, $loyaltyProjectionEndDate)

List customer data

Return the customer inventory regarding entities referencing this customer profile's `integrationId`.  Typical entities returned are: customer profile information, referral codes, loyalty points and reserved coupons. Reserved coupons also include redeemed coupons.  You can also use this endpoint to get the projected loyalty balances in order to notify your customers about points that are about to expire, or to remind them how many points they have.

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
$integrationId = 'integrationId_example'; // string | The integration ID of the customer profile. You can get the `integrationId` of a profile using: - A customer session integration Id with the [Update customer session endpoint](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2). - The Management API with the [List application's customers endpoint](https://docs.talon.one/management-api/#operation/getApplicationCustomers).
$profile = True; // bool | Set to `true` to include customer profile information in the response.
$referrals = True; // bool | Set to `true` to include referral information in the response.
$coupons = True; // bool | Set to `true` to include coupon information in the response.
$loyalty = True; // bool | Set to `true` to include loyalty information in the response.
$giveaways = True; // bool | Set to `true` to include giveaways information in the response.
$loyaltyProjectionEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Set an end date to query the projected loyalty balances. You can project results up to 31 days from today.

try {
    $result = $apiInstance->getCustomerInventory($integrationId, $profile, $referrals, $coupons, $loyalty, $giveaways, $loyaltyProjectionEndDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getCustomerInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The integration ID of the customer profile. You can get the &#x60;integrationId&#x60; of a profile using: - A customer session integration Id with the [Update customer session endpoint](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2). - The Management API with the [List application&#39;s customers endpoint](https://docs.talon.one/management-api/#operation/getApplicationCustomers). |
 **profile** | **bool**| Set to &#x60;true&#x60; to include customer profile information in the response. | [optional]
 **referrals** | **bool**| Set to &#x60;true&#x60; to include referral information in the response. | [optional]
 **coupons** | **bool**| Set to &#x60;true&#x60; to include coupon information in the response. | [optional]
 **loyalty** | **bool**| Set to &#x60;true&#x60; to include loyalty information in the response. | [optional]
 **giveaways** | **bool**| Set to &#x60;true&#x60; to include giveaways information in the response. | [optional]
 **loyaltyProjectionEndDate** | **\DateTime**| Set an end date to query the projected loyalty balances. You can project results up to 31 days from today. | [optional]

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


## getCustomerSession

> \TalonOne\Client\Model\IntegrationCustomerSessionResponse getCustomerSession($customerSessionId)

Get customer session

Get the details of the given customer session.  You can get the same data via other endpoints that also apply changes, which can help you save requests and increase performance. See:  - [Update customer session](#tag/Customer-sessions/operation/updateCustomerSessionV2) - [Update customer profile](#tag/Customer-profiles/operation/updateCustomerProfileV2)

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
$customerSessionId = 'customerSessionId_example'; // string | The `integration ID` of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager's **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions).

try {
    $result = $apiInstance->getCustomerSession($customerSessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getCustomerSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSessionId** | **string**| The &#x60;integration ID&#x60; of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager&#39;s **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions). |

### Return type

[**\TalonOne\Client\Model\IntegrationCustomerSessionResponse**](../Model/IntegrationCustomerSessionResponse.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyTransactions

> \TalonOne\Client\Model\InlineResponse2001 getLoyaltyTransactions($loyaltyProgramId, $integrationId, $startDate, $endDate, $pageSize, $skip)

Get loyalty ledger transaction logs

Retrieve paginated loyalty transaction logs for the given Integration ID in the specified loyalty program. You can filter transactions by date. If no filters are applied, the last 30 loyalty transactions for the given integration ID are returned.

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
$loyaltyProgramId = 56; // int | Identifier of the loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs endpoint](https://docs.talon.one/management-api/#operation/getLoyaltyPrograms).
$integrationId = 'integrationId_example'; // string | The integration identifier for this customer profile. Must be: - Unique within the deployment. - Stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  Once set, you cannot update this identifier.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Time from which results are returned. It must be an RFC3339 timestamp string.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results older than this timestamp. It must be an RFC3339 timestamp string.
$pageSize = 56; // int | The number of items in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getLoyaltyTransactions($loyaltyProgramId, $integrationId, $startDate, $endDate, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getLoyaltyTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs endpoint](https://docs.talon.one/management-api/#operation/getLoyaltyPrograms). |
 **integrationId** | **string**| The integration identifier for this customer profile. Must be: - Unique within the deployment. - Stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  Once set, you cannot update this identifier. |
 **startDate** | **\DateTime**| Time from which results are returned. It must be an RFC3339 timestamp string. | [optional]
 **endDate** | **\DateTime**| Only return results older than this timestamp. It must be an RFC3339 timestamp string. | [optional]
 **pageSize** | **int**| The number of items in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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

List customers that have this coupon reserved

Return all customers that have this coupon marked as reserved.  Coupons are reserved in the following ways: - To create a soft reservation (any customer can use the coupon), use the [Create coupon reservation](#operation/createCouponReservation) endpoint. - To create a hard reservation (only the given customer can use the coupon), create a coupon in the Campaign Manager for a given `recipientIntegrationId` or use the [Create coupons](/management-api/#operation/createCoupons) or [Create coupons for multiple recipients](/management-api/#operation/createCouponsForMultipleRecipients) endpoints.

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
$couponValue = 'couponValue_example'; // string | The code of the coupon.

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
 **couponValue** | **string**| The code of the coupon. |

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


## returnCartItems

> \TalonOne\Client\Model\IntegrationStateV2 returnCartItems($customerSessionId, $body, $dry)

Return cart items

Create a new return request for the specified cart items.  This endpoint automatically changes the session state from `closed` to `partially_returned`.  Its behavior depends on whether [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#flattened-cart-items) is enabled for the Application.  **Note:** This will roll back any effects associated with these cart items. For more information, see [our documentation on session states](https://docs.talon.one/docs/dev/concepts/entities#customer-session-states) and [this tutorial](https://docs.talon.one/docs/dev/tutorials/partially-returning-a-session).

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
$customerSessionId = 'customerSessionId_example'; // string | The `integration ID` of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager's **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions).
$body = new \TalonOne\Client\Model\ReturnIntegrationRequest(); // \TalonOne\Client\Model\ReturnIntegrationRequest | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->returnCartItems($customerSessionId, $body, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->returnCartItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSessionId** | **string**| The &#x60;integration ID&#x60; of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager&#39;s **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions). |
 **body** | [**\TalonOne\Client\Model\ReturnIntegrationRequest**](../Model/ReturnIntegrationRequest.md)|  |
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


## syncCatalog

> \TalonOne\Client\Model\Catalog syncCatalog($catalogId, $body)

Sync cart item catalog

Perform one or more of the following sync actions on this cart item catalog, up to 1000 actions:  - Add an item to the catalog. - Edit the attributes of an item in the catalog. - Edit the attributes of more than one item in the catalog. - Remove an item from the catalog. - Remove more than one item from the catalog.  **Note**: For more information, see [our documentation on managing cart item catalogs](https://docs.talon.one/docs/product/account/dev-tools/managing-cart-item-catalogs).  ### Filtering cart items  Use [cart item attributes](https://docs.talon.one/docs/product/account/dev-tools/managing-cart-item-catalogs#displaying-the-details-and-content-of-a-catalog) to filter items and select the ones you want to edit or delete when editing or deleting more than one item at a time.  The `filters` object contains the following properties:  - `attr`: A [cart item attribute](https://docs.talon.one/docs/product/account/dev-tools/managing-attributes)   connected to the catalog. It is applied to all items in the catalog. - `op`: The filtering operator indicating the relationship between the value of each   cart item in the catalog and the value of the `value` property for the attribute selected   in `attr`.    The value of `op` can be one of the following:    - `EQ`: Equal to `value`   - `LT`: Less than `value`   - `LE`: Less than or equal to `value`   - `GT`: Greater than `value`   - `GE`: Greater than or equal to `value`   - `IN`: One of the comma-separated values that `value` is set to.    **Note:** `GE`, `LE`, `GT`, `LT` are for numeric values only.  - `value`: The value of the attribute selected in `attr`.  ### Payload examples  Synchronization actions are sent as `PUT` requests. See the structure for each action:  <details>   <summary><strong>Adding an item to the catalog</strong></summary>   <div>    ```json   {     \"actions\": [       {         \"payload\": {           \"attributes\": {             \"color\": \"Navy blue\",             \"type\": \"shoe\"           },           \"replaceIfExists\": true,           \"sku\": \"SKU1241028\"         },         \"type\": \"ADD\"       }     ]   }   ```   </div> </details>  <details>   <summary><strong>Editing the attributes of an item in the catalog</strong></summary>   <div>    ```json   {     \"actions\": [       {         \"payload\": {           \"attributes\": {             \"age\": 11,             \"origin\": \"germany\"           },           \"createIfNotExists\": false,           \"sku\": \"SKU1241028\"         },         \"type\": \"PATCH\"       }     ]   }   ```   </div> </details>  <details>   <summary><strong>Editing the attributes of several items at once</strong></summary>   <div>    ```json   {     \"actions\": [       {         \"payload\": {           \"attributes\": {             \"color\": \"red\"           },           \"filters\": [             {               \"attr\": \"color\",               \"op\": \"EQ\",               \"value\": \"blue\"             }           ]         },         \"type\": \"PATCH_MANY\"       }     ]   }   ```    </div> </details>  <details>   <summary><strong>Removing an item from the catalog</strong></summary>   <div>    ```json   {     \"actions\": [       {         \"payload\": {           \"sku\": \"SKU1241028\"         },         \"type\": \"REMOVE\"       }     ]   }   ```    </div> </details>  <details>   <summary><strong>Removing several items from the catalog at once</strong></summary>   <div>    ```json   {     \"actions\": [       {         \"payload\": {           \"filters\": [             {               \"attr\": \"color\",               \"op\": \"EQ\",               \"value\": \"blue\"             }           ]         },         \"type\": \"REMOVE_MANY\"       }     ]   }   ```   </div> </details>  <details>   <summary><strong>Removing shoes of sizes above 45 from the catalog</strong></summary>   <div>   <p>   Let's imagine that we have a shoe store and we have decided to stop selling   shoes larger than size 45. We can remove from the catalog all the shoes of sizes above 45   with a single action:</p>    ```json   {     \"actions\": [       {         \"payload\": {           \"filters\": [             {               \"attr\": \"size\",               \"op\": \"GT\",               \"value\": \"45\"             }           ]         },         \"type\": \"REMOVE_MANY\"       }     ]   }   ```   </div> </details>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogId = 56; // int | 
$body = new \TalonOne\Client\Model\CatalogSyncRequest(); // \TalonOne\Client\Model\CatalogSyncRequest | 

try {
    $result = $apiInstance->syncCatalog($catalogId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->syncCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogId** | **int**|  |
 **body** | [**\TalonOne\Client\Model\CatalogSyncRequest**](../Model/CatalogSyncRequest.md)|  |

### Return type

[**\TalonOne\Client\Model\Catalog**](../Model/Catalog.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trackEvent

> \TalonOne\Client\Model\IntegrationState trackEvent($body, $dry)

Track event

**Important:** This endpoint is **DEPRECATED**. Use [Track Event V2](https://docs.talon.one/integration-api/#tag/Events/operation/trackEventV2) instead.  <blockquote>  Triggers a custom event in a customer session. You can then check this event in your rules. **Important:** Talon.One offers a set of [built-in events](/docs/dev/concepts/events), ensure you do not create a custom event when you can use a built-in event.  For example, use this endpoint to trigger an event when a user updates their payment information.   Before using this endpoint, create your event as a custom attribute of type `event`.  See the [Developer docs](/docs/dev/concepts/events/#creating-a-custom-event).   An event is always part of a session. If either the profile or the session does not exist,  a new empty profile/session is created. If the specified session already exists, it must belong to the same `profileId` or an error will be returned. </blockquote>

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
$body = new \TalonOne\Client\Model\NewEvent(); // \TalonOne\Client\Model\NewEvent | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->trackEvent($body, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewEvent**](../Model/NewEvent.md)|  |
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


## trackEventV2

> \TalonOne\Client\Model\IntegrationStateV2 trackEventV2($body, $silent, $dry)

Track event V2

Triggers a custom event. You can then check this event in your rules.  Talon.One offers a set of [built-in events](/docs/dev/concepts/events), ensure you do not create a custom event when you can use a built-in event.  For example, use this endpoint to trigger an event when a customer shares a link to a product. See the [tutorial](https://docs.talon.one/docs/product/tutorials/referrals/incentivizing-product-link-sharing).  **Important:** - `profileId` is required. An event V2 is associated with a customer profile. - Before using this endpoint, create your event as a custom attribute of type `event`. See the [Developer docs](/docs/dev/concepts/events/#creating-a-custom-event).

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
$body = new \TalonOne\Client\Model\IntegrationEventV2Request(); // \TalonOne\Client\Model\IntegrationEventV2Request | 
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information.
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->trackEventV2($body, $silent, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->trackEventV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\IntegrationEventV2Request**](../Model/IntegrationEventV2Request.md)|  |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information. | [optional] [default to &#39;yes&#39;]
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


## updateAudienceCustomersAttributes

> updateAudienceCustomersAttributes($audienceId, $body)

Update profile attributes for all customers in audience

Update the specified profile attributes to the provided values for all customers in the specified audience.

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
$audienceId = 56; // int | The ID of the audience. You get it via the `id` property when [creating an audience](#operation/createAudienceV2).
$body = new \stdClass; // object | 

try {
    $apiInstance->updateAudienceCustomersAttributes($audienceId, $body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateAudienceCustomersAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audienceId** | **int**| The ID of the audience. You get it via the &#x60;id&#x60; property when [creating an audience](#operation/createAudienceV2). |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAudienceV2

> \TalonOne\Client\Model\Audience updateAudienceV2($audienceId, $body)

Update audience name

Update the name of the given audience created by a third-party integration. Sending a request to this endpoint does **not** trigger the rule engine.  To update the audience's members, use the [Update customer profile endpoint](#tag/Customer-profiles/operation/updateCustomerProfileV2).

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
$audienceId = 56; // int | The ID of the audience. You get it via the `id` property when [creating an audience](#operation/createAudienceV2).
$body = new \TalonOne\Client\Model\UpdateAudience(); // \TalonOne\Client\Model\UpdateAudience | 

try {
    $result = $apiInstance->updateAudienceV2($audienceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateAudienceV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audienceId** | **int**| The ID of the audience. You get it via the &#x60;id&#x60; property when [creating an audience](#operation/createAudienceV2). |
 **body** | [**\TalonOne\Client\Model\UpdateAudience**](../Model/UpdateAudience.md)|  |

### Return type

[**\TalonOne\Client\Model\Audience**](../Model/Audience.md)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfileAudiences

> updateCustomerProfileAudiences($body)

Update multiple customer profiles' audiences

Update the specified customer profiles with the specified audiences. Use this endpoint when customers join or leave audiences.  The limit of customer profiles per request is 1000.

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
$body = new \TalonOne\Client\Model\CustomerProfileAudienceRequest(); // \TalonOne\Client\Model\CustomerProfileAudienceRequest | 

try {
    $apiInstance->updateCustomerProfileAudiences($body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfileAudiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\CustomerProfileAudienceRequest**](../Model/CustomerProfileAudienceRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key_v1](../../README.md#api_key_v1)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomerProfileV2

> \TalonOne\Client\Model\IntegrationStateV2 updateCustomerProfileV2($integrationId, $body, $runRuleEngine, $dry)

Update customer profile

Update or create a [Customer Profile](/docs/dev/concepts/entities#customer-profile). This endpoint triggers the Rule Builder.  You can use this endpoint to: - Set attributes on the given customer profile. Ensure you create the attributes in the Campaign Manager, first. - Modify the audience the customer profile is a member of.  <div class=\"redoc-section\">   <p class=\"title\">Performance tips</p>    Updating a customer profile returns a response with the requested integration state.    You can use the `responseContent` property to save yourself extra API calls. For example, you can get   the customer profile details directly without extra requests. </div>

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
$integrationId = 'integrationId_example'; // string | The integration identifier for this customer profile. Must be: - Unique within the deployment. - Stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  Once set, you cannot update this identifier.
$body = new \TalonOne\Client\Model\CustomerProfileIntegrationRequestV2(); // \TalonOne\Client\Model\CustomerProfileIntegrationRequestV2 | 
$runRuleEngine = false; // bool | Indicates whether to run the Rule Engine.  If `true`, the response includes: - The effects generated by the triggered campaigns are returned in the `effects` property. - The created coupons and referral objects.  If `false`: - The rules are not executed and the `effects` property is always empty. - The response time improves. - You cannot use `responseContent` in the body.
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.  This property only works when `runRuleEngine=true`.

try {
    $result = $apiInstance->updateCustomerProfileV2($integrationId, $body, $runRuleEngine, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfileV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The integration identifier for this customer profile. Must be: - Unique within the deployment. - Stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  Once set, you cannot update this identifier. |
 **body** | [**\TalonOne\Client\Model\CustomerProfileIntegrationRequestV2**](../Model/CustomerProfileIntegrationRequestV2.md)|  |
 **runRuleEngine** | **bool**| Indicates whether to run the Rule Engine.  If &#x60;true&#x60;, the response includes: - The effects generated by the triggered campaigns are returned in the &#x60;effects&#x60; property. - The created coupons and referral objects.  If &#x60;false&#x60;: - The rules are not executed and the &#x60;effects&#x60; property is always empty. - The response time improves. - You cannot use &#x60;responseContent&#x60; in the body. | [optional] [default to false]
 **dry** | **bool**| Indicates whether to persist the changes. Changes are ignored when &#x60;dry&#x3D;true&#x60;.  This property only works when &#x60;runRuleEngine&#x3D;true&#x60;. | [optional]

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

> \TalonOne\Client\Model\MultipleCustomerProfileIntegrationResponseV2 updateCustomerProfilesV2($body, $silent)

Update multiple customer profiles

Update (or create) up to 1000 [customer profiles](/docs/dev/concepts/entities#customer-profile) in 1 request.  The `integrationId` must be any identifier that remains stable for the customer. Do not use an ID that the customer can update themselves. For example, you can use a database ID.  A customer profile [can be linked to one or more sessions](/integration-api/#tag/Customer-sessions).

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
$body = new \TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest(); // \TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest | 
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information.

try {
    $result = $apiInstance->updateCustomerProfilesV2($body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerProfilesV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\MultipleCustomerProfileIntegrationRequest**](../Model/MultipleCustomerProfileIntegrationRequest.md)|  |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains essential data such as the updated customer profiles and session-related information. | [optional] [default to &#39;yes&#39;]

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


## updateCustomerSessionV2

> \TalonOne\Client\Model\IntegrationStateV2 updateCustomerSessionV2($customerSessionId, $body, $dry)

Update customer session

Update or create a [customer session](/docs/dev/concepts/entities#customer-session). For example, use this endpoint to share the content of a customer's cart with Talon.One and to check which promotion rules apply.  **Note:** The currency for the session and the cart items in the session is the same as the Application that owns this session.  ### Session management  The Talon.One platform supports multiple simultaneous sessions for the same profile. If you have multiple ways of accessing the same Application you can either:  - Track multiple independent sessions or, - Use the same session across all of them.  You should share sessions when application access points share other state, such as the user's cart. If two points of access to the application have independent states, for example a user can have different items in their cart across the two) they should use independent customer session ID's.  See more information and tips about session management in the [documentation](/docs/dev/concepts/entities#customer-session).  ### Sessions and customer profiles  - To link a session to a customer profile, set the `profileId` parameter in the request body to a customer profile's `integrationId`. - While you can create an anonymous session with `profileId=\"\"`, we recommend you use a guest ID instead.  **Note:** You do **not** have to create a customer profile first. If the specified profile does not exist, an empty profile is created automatically.  <div class=\"redoc-section\">   <p class=\"title\">Performance tips</p>    Updating a customer session returns a response with the requested integration state. Use the `responseContent` property to save yourself extra API calls. For example, you can get   the customer profile details directly without extra requests.    For more information, see the [integration tutorial](https://docs.talon.one/docs/dev/tutorials/integrating-talon-one). </div>

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
$customerSessionId = 'customerSessionId_example'; // string | The `integration ID` of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager's **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions).
$body = new \TalonOne\Client\Model\IntegrationRequest(); // \TalonOne\Client\Model\IntegrationRequest | 
$dry = True; // bool | Indicates whether to persist the changes. Changes are ignored when `dry=true`.

try {
    $result = $apiInstance->updateCustomerSessionV2($customerSessionId, $body, $dry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateCustomerSessionV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSessionId** | **string**| The &#x60;integration ID&#x60; of the customer session. You set this ID when you create a customer session.  You can see existing customer session integration IDs in the Campaign Manager&#39;s **Sessions** menu, or via the [List Application session endpoint](https://docs.talon.one/management-api/#operation/getApplicationSessions). |
 **body** | [**\TalonOne\Client\Model\IntegrationRequest**](../Model/IntegrationRequest.md)|  |
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

