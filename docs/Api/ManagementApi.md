# TalonOne\Client\ManagementApi

All URIs are relative to *http://your_domain.your_region.talon.one*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoyaltyPoints**](ManagementApi.md#addLoyaltyPoints) | **PUT** /v1/loyalty_programs/{programID}/profile/{integrationID}/add_points | Add points in a loyalty program for the specified customer
[**copyCampaignToApplications**](ManagementApi.md#copyCampaignToApplications) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/copy | Copy the campaign into every specified application
[**createAdditionalCost**](ManagementApi.md#createAdditionalCost) | **POST** /v1/additional_costs | Define a new additional cost
[**createAttribute**](ManagementApi.md#createAttribute) | **POST** /v1/attributes | Define a new custom attribute
[**createCampaign**](ManagementApi.md#createCampaign) | **POST** /v1/applications/{applicationId}/campaigns | Create campaign
[**createCoupons**](ManagementApi.md#createCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Create coupons
[**createCouponsForMultipleRecipients**](ManagementApi.md#createCouponsForMultipleRecipients) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_with_recipients | Create coupons for multiple recipients
[**createPasswordRecoveryEmail**](ManagementApi.md#createPasswordRecoveryEmail) | **POST** /v1/password_recovery_emails | Request a password reset
[**createRuleset**](ManagementApi.md#createRuleset) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | Create ruleset
[**createSession**](ManagementApi.md#createSession) | **POST** /v1/sessions | Create session
[**deleteCampaign**](ManagementApi.md#deleteCampaign) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId} | Delete campaign
[**deleteCoupon**](ManagementApi.md#deleteCoupon) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Delete coupon
[**deleteCoupons**](ManagementApi.md#deleteCoupons) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Delete coupons
[**deleteReferral**](ManagementApi.md#deleteReferral) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Delete referral
[**deleteRuleset**](ManagementApi.md#deleteRuleset) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Delete ruleset
[**exportCoupons**](ManagementApi.md#exportCoupons) | **GET** /v1/applications/{applicationId}/export_coupons | Export coupons to a CSV file
[**exportCustomerSessions**](ManagementApi.md#exportCustomerSessions) | **GET** /v1/applications/{applicationId}/export_customer_sessions | Export Customer Sessions to a CSV file
[**exportEffects**](ManagementApi.md#exportEffects) | **GET** /v1/applications/{applicationId}/export_effects | Export triggered Effects to a CSV file
[**exportLoyaltyBalance**](ManagementApi.md#exportLoyaltyBalance) | **GET** /v1/loyalty_programs/{programID}/export_customer_balance | Export customer loyalty balance to a CSV file
[**exportLoyaltyLedger**](ManagementApi.md#exportLoyaltyLedger) | **GET** /v1/loyalty_programs/{programID}/profile/{integrationID}/export_log | Export a customer&#39;s loyalty ledger log to a CSV file
[**getAccessLogs**](ManagementApi.md#getAccessLogs) | **GET** /v1/applications/{applicationId}/access_logs | Get access logs for application (with total count)
[**getAccessLogsWithoutTotalCount**](ManagementApi.md#getAccessLogsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/access_logs/no_total | Get access logs for application
[**getAccount**](ManagementApi.md#getAccount) | **GET** /v1/accounts/{accountId} | Get Account Details
[**getAccountAnalytics**](ManagementApi.md#getAccountAnalytics) | **GET** /v1/accounts/{accountId}/analytics | Get Account Analytics
[**getAdditionalCost**](ManagementApi.md#getAdditionalCost) | **GET** /v1/additional_costs/{additionalCostId} | Get an additional cost
[**getAdditionalCosts**](ManagementApi.md#getAdditionalCosts) | **GET** /v1/additional_costs | List additional costs
[**getAllAccessLogs**](ManagementApi.md#getAllAccessLogs) | **GET** /v1/access_logs | List access logs
[**getAllRoles**](ManagementApi.md#getAllRoles) | **GET** /v1/roles | List roles
[**getApplication**](ManagementApi.md#getApplication) | **GET** /v1/applications/{applicationId} | Get Application
[**getApplicationApiHealth**](ManagementApi.md#getApplicationApiHealth) | **GET** /v1/applications/{applicationId}/health_report | Get report of health of application API
[**getApplicationCustomer**](ManagementApi.md#getApplicationCustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get Application Customer
[**getApplicationCustomers**](ManagementApi.md#getApplicationCustomers) | **GET** /v1/applications/{applicationId}/customers | List Application Customers
[**getApplicationCustomersByAttributes**](ManagementApi.md#getApplicationCustomersByAttributes) | **POST** /v1/application_customer_search | Get a list of the customer profiles that match the given attributes (with total count)
[**getApplicationEventTypes**](ManagementApi.md#getApplicationEventTypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications Event Types
[**getApplicationEvents**](ManagementApi.md#getApplicationEvents) | **GET** /v1/applications/{applicationId}/events | List Applications Events (with total count)
[**getApplicationEventsWithoutTotalCount**](ManagementApi.md#getApplicationEventsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/events/no_total | List Applications Events
[**getApplicationSession**](ManagementApi.md#getApplicationSession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application Session
[**getApplicationSessions**](ManagementApi.md#getApplicationSessions) | **GET** /v1/applications/{applicationId}/sessions | List Application Sessions
[**getApplications**](ManagementApi.md#getApplications) | **GET** /v1/applications | List Applications
[**getAttribute**](ManagementApi.md#getAttribute) | **GET** /v1/attributes/{attributeId} | Get a custom attribute
[**getAttributes**](ManagementApi.md#getAttributes) | **GET** /v1/attributes | List custom attributes
[**getAudiences**](ManagementApi.md#getAudiences) | **GET** /v1/audiences | List audiences
[**getCampaign**](ManagementApi.md#getCampaign) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId} | Get campaign
[**getCampaignAnalytics**](ManagementApi.md#getCampaignAnalytics) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/analytics | Get analytics of campaigns
[**getCampaignByAttributes**](ManagementApi.md#getCampaignByAttributes) | **POST** /v1/applications/{applicationId}/campaigns_search | List campaigns that match the given attributes
[**getCampaigns**](ManagementApi.md#getCampaigns) | **GET** /v1/applications/{applicationId}/campaigns | List campaigns
[**getChanges**](ManagementApi.md#getChanges) | **GET** /v1/changes | Get audit log for an account
[**getCoupons**](ManagementApi.md#getCoupons) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | List coupons (with total count)
[**getCouponsByAttributes**](ManagementApi.md#getCouponsByAttributes) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search | List coupons that match the given attributes
[**getCouponsByAttributesApplicationWide**](ManagementApi.md#getCouponsByAttributesApplicationWide) | **POST** /v1/applications/{applicationId}/coupons_search | List coupons that match the given attributes in all active campaigns of an application (with total count)
[**getCouponsWithoutTotalCount**](ManagementApi.md#getCouponsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/no_total | List coupons
[**getCustomerActivityReport**](ManagementApi.md#getCustomerActivityReport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get Activity Report for Single Customer
[**getCustomerActivityReports**](ManagementApi.md#getCustomerActivityReports) | **GET** /v1/applications/{applicationId}/customer_activity_reports | Get Activity Reports for Application Customers (with total count)
[**getCustomerActivityReportsWithoutTotalCount**](ManagementApi.md#getCustomerActivityReportsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/customer_activity_reports/no_total | Get Activity Reports for Application Customers
[**getCustomerAnalytics**](ManagementApi.md#getCustomerAnalytics) | **GET** /v1/applications/{applicationId}/customers/{customerId}/analytics | Get Analytics Report for a Customer
[**getCustomerProfile**](ManagementApi.md#getCustomerProfile) | **GET** /v1/customers/{customerId} | Get Customer Profile
[**getCustomerProfiles**](ManagementApi.md#getCustomerProfiles) | **GET** /v1/customers/no_total | List Customer Profiles
[**getCustomersByAttributes**](ManagementApi.md#getCustomersByAttributes) | **POST** /v1/customer_search/no_total | List customer profiles that match the given attributes
[**getEventTypes**](ManagementApi.md#getEventTypes) | **GET** /v1/event_types | List event types
[**getExports**](ManagementApi.md#getExports) | **GET** /v1/exports | Get exports
[**getLoyaltyPoints**](ManagementApi.md#getLoyaltyPoints) | **GET** /v1/loyalty_programs/{programID}/profile/{integrationID} | Get integration&#39;s Loyalty Ledger
[**getLoyaltyProgram**](ManagementApi.md#getLoyaltyProgram) | **GET** /v1/loyalty_programs/{programID} | Get a loyalty program
[**getLoyaltyPrograms**](ManagementApi.md#getLoyaltyPrograms) | **GET** /v1/loyalty_programs | List loyalty programs
[**getLoyaltyStatistics**](ManagementApi.md#getLoyaltyStatistics) | **GET** /v1/loyalty_programs/{programID}/statistics | Get loyalty program statistics by loyalty program ID
[**getReferrals**](ManagementApi.md#getReferrals) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals | List referrals (with total count)
[**getReferralsWithoutTotalCount**](ManagementApi.md#getReferralsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/no_total | List referrals
[**getRole**](ManagementApi.md#getRole) | **GET** /v1/roles/{roleId} | Get information for the specified role
[**getRuleset**](ManagementApi.md#getRuleset) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Get ruleset
[**getRulesets**](ManagementApi.md#getRulesets) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | List rulesets
[**getUser**](ManagementApi.md#getUser) | **GET** /v1/users/{userId} | Get a single User
[**getUsers**](ManagementApi.md#getUsers) | **GET** /v1/users | List users
[**getWebhook**](ManagementApi.md#getWebhook) | **GET** /v1/webhooks/{webhookId} | Get Webhook
[**getWebhookActivationLogs**](ManagementApi.md#getWebhookActivationLogs) | **GET** /v1/webhook_activation_logs | List Webhook activation Log Entries
[**getWebhookLogs**](ManagementApi.md#getWebhookLogs) | **GET** /v1/webhook_logs | List Webhook Log Entries
[**getWebhooks**](ManagementApi.md#getWebhooks) | **GET** /v1/webhooks | List Webhooks
[**importCoupons**](ManagementApi.md#importCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_coupons | Import coupons via CSV file
[**importLoyaltyPoints**](ManagementApi.md#importLoyaltyPoints) | **POST** /v1/loyalty_programs/{programID}/import_points | Import loyalty points via CSV file
[**importPoolGiveaways**](ManagementApi.md#importPoolGiveaways) | **POST** /v1/giveaways/pools/{poolId}/import | Import giveaways codes into a giveaways pool
[**importReferrals**](ManagementApi.md#importReferrals) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_referrals | Import referrals via CSV file
[**removeLoyaltyPoints**](ManagementApi.md#removeLoyaltyPoints) | **PUT** /v1/loyalty_programs/{programID}/profile/{integrationID}/deduct_points | Deduct points in a loyalty program for the specified customer
[**resetPassword**](ManagementApi.md#resetPassword) | **POST** /v1/reset_password | Reset password
[**searchCouponsAdvanced**](ManagementApi.md#searchCouponsAdvanced) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced | List coupons that match the given attributes (with total count)
[**searchCouponsAdvancedApplicationWide**](ManagementApi.md#searchCouponsAdvancedApplicationWide) | **POST** /v1/applications/{applicationId}/coupons_search_advanced | List coupons that match the given attributes in all active campaigns of an application (with total count)
[**searchCouponsAdvancedApplicationWideWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedApplicationWideWithoutTotalCount) | **POST** /v1/applications/{applicationId}/coupons_search_advanced/no_total | List coupons that match the given attributes in all active campaigns of an application
[**searchCouponsAdvancedWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedWithoutTotalCount) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced/no_total | List coupons that match the given attributes
[**updateAdditionalCost**](ManagementApi.md#updateAdditionalCost) | **PUT** /v1/additional_costs/{additionalCostId} | Update an additional cost
[**updateAttribute**](ManagementApi.md#updateAttribute) | **PUT** /v1/attributes/{attributeId} | Update a custom attribute
[**updateCampaign**](ManagementApi.md#updateCampaign) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId} | Update campaign
[**updateCoupon**](ManagementApi.md#updateCoupon) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Update coupon
[**updateCouponBatch**](ManagementApi.md#updateCouponBatch) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Update a batch of coupons
[**updateReferral**](ManagementApi.md#updateReferral) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Update referral
[**updateRuleset**](ManagementApi.md#updateRuleset) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Update ruleset



## addLoyaltyPoints

> addLoyaltyPoints($programID, $integrationID, $loyaltyPoints)

Add points in a loyalty program for the specified customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.
$integrationID = 'integrationID_example'; // string | 
$loyaltyPoints = new \TalonOne\Client\Model\LoyaltyPoints(); // \TalonOne\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->addLoyaltyPoints($programID, $integrationID, $loyaltyPoints);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->addLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |
 **integrationID** | **string**|  |
 **loyaltyPoints** | [**\TalonOne\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

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


## copyCampaignToApplications

> \TalonOne\Client\Model\InlineResponse2002 copyCampaignToApplications($applicationId, $campaignId, $campaignCopy)

Copy the campaign into every specified application

Copy the campaign into every specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$campaignCopy = new \TalonOne\Client\Model\CampaignCopy(); // \TalonOne\Client\Model\CampaignCopy | 

try {
    $result = $apiInstance->copyCampaignToApplications($applicationId, $campaignId, $campaignCopy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->copyCampaignToApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **campaignCopy** | [**\TalonOne\Client\Model\CampaignCopy**](../Model/CampaignCopy.md)|  |

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost createAdditionalCost($newAdditionalCost)

Define a new additional cost

Defines a new _additional cost_ in this account.  These additional costs are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newAdditionalCost = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->createAdditionalCost($newAdditionalCost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newAdditionalCost** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAttribute

> \TalonOne\Client\Model\Attribute createAttribute($newAttribute)

Define a new custom attribute

Defines a new _custom attribute_ in this account. Custom attributes allow you to attach new fields to Talon.One domain objects like campaigns, coupons, customers and so on. These attributes can then be given values when creating / updating these objects, and these values can be used in your campaign rules. For example, you could define a `zipCode` field for customer sessions, and add a rule to your campaign that only allows certain ZIP codes.  These attributes are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newAttribute = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->createAttribute($newAttribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newAttribute** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCampaign

> \TalonOne\Client\Model\Campaign createCampaign($applicationId, $newCampaign)

Create campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$newCampaign = new \TalonOne\Client\Model\NewCampaign(); // \TalonOne\Client\Model\NewCampaign | 

try {
    $result = $apiInstance->createCampaign($applicationId, $newCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **newCampaign** | [**\TalonOne\Client\Model\NewCampaign**](../Model/NewCampaign.md)|  |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCoupons

> \TalonOne\Client\Model\InlineResponse2004 createCoupons($applicationId, $campaignId, $newCoupons, $silent)

Create coupons

Create coupons according to some pattern. Up to 20.000 coupons can be created without a unique prefix. When a unique prefix is provided, up to 200.000 coupons can be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$newCoupons = new \TalonOne\Client\Model\NewCoupons(); // \TalonOne\Client\Model\NewCoupons | 
$silent = 'silent_example'; // string | If set to `yes`, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000).

try {
    $result = $apiInstance->createCoupons($applicationId, $campaignId, $newCoupons, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **newCoupons** | [**\TalonOne\Client\Model\NewCoupons**](../Model/NewCoupons.md)|  |
 **silent** | **string**| If set to &#x60;yes&#x60;, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000). | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponsForMultipleRecipients

> \TalonOne\Client\Model\InlineResponse2004 createCouponsForMultipleRecipients($applicationId, $campaignId, $newCouponsForMultipleRecipients, $silent)

Create coupons for multiple recipients

Create coupons according to the specified pattern for up to 1000 recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$newCouponsForMultipleRecipients = new \TalonOne\Client\Model\NewCouponsForMultipleRecipients(); // \TalonOne\Client\Model\NewCouponsForMultipleRecipients | 
$silent = 'silent_example'; // string | If set to `yes`, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000).

try {
    $result = $apiInstance->createCouponsForMultipleRecipients($applicationId, $campaignId, $newCouponsForMultipleRecipients, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCouponsForMultipleRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **newCouponsForMultipleRecipients** | [**\TalonOne\Client\Model\NewCouponsForMultipleRecipients**](../Model/NewCouponsForMultipleRecipients.md)|  |
 **silent** | **string**| If set to &#x60;yes&#x60;, response will be an empty 204, otherwise a list of integration states will be generated (up to 1000). | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPasswordRecoveryEmail

> \TalonOne\Client\Model\NewPasswordEmail createPasswordRecoveryEmail($newPasswordEmail)

Request a password reset

Sends an email with a password recovery link to the email of an existing account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newPasswordEmail = new \TalonOne\Client\Model\NewPasswordEmail(); // \TalonOne\Client\Model\NewPasswordEmail | 

try {
    $result = $apiInstance->createPasswordRecoveryEmail($newPasswordEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createPasswordRecoveryEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newPasswordEmail** | [**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)|  |

### Return type

[**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRuleset

> \TalonOne\Client\Model\Ruleset createRuleset($applicationId, $campaignId, $newRuleset)

Create ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$newRuleset = new \TalonOne\Client\Model\NewRuleset(); // \TalonOne\Client\Model\NewRuleset | 

try {
    $result = $apiInstance->createRuleset($applicationId, $campaignId, $newRuleset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **newRuleset** | [**\TalonOne\Client\Model\NewRuleset**](../Model/NewRuleset.md)|  |

### Return type

[**\TalonOne\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSession

> \TalonOne\Client\Model\Session createSession($loginParams)

Create session

Create a session to use the other Management API endpoints. Use the `token` property of the response as bearer token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loginParams = new \TalonOne\Client\Model\LoginParams(); // \TalonOne\Client\Model\LoginParams | 

try {
    $result = $apiInstance->createSession($loginParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loginParams** | [**\TalonOne\Client\Model\LoginParams**](../Model/LoginParams.md)|  |

### Return type

[**\TalonOne\Client\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaign

> deleteCampaign($applicationId, $campaignId)

Delete campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 

try {
    $apiInstance->deleteCampaign($applicationId, $campaignId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupon

> deleteCoupon($applicationId, $campaignId, $couponId)

Delete coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$couponId = 'couponId_example'; // string | The ID of the coupon code to delete

try {
    $apiInstance->deleteCoupon($applicationId, $campaignId, $couponId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **couponId** | **string**| The ID of the coupon code to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupons

> deleteCoupons($applicationId, $campaignId, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch)

Delete coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $apiInstance->deleteCoupons($applicationId, $campaignId, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReferral

> deleteReferral($applicationId, $campaignId, $referralId)

Delete referral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$referralId = 'referralId_example'; // string | The ID of the referral code to delete

try {
    $apiInstance->deleteReferral($applicationId, $campaignId, $referralId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **referralId** | **string**| The ID of the referral code to delete |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRuleset

> deleteRuleset($applicationId, $campaignId, $rulesetId)

Delete ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$rulesetId = 56; // int | 

try {
    $apiInstance->deleteRuleset($applicationId, $campaignId, $rulesetId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **rulesetId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCoupons

> string exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState)

Export coupons to a CSV file

Download a file with the coupons that match the given attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 3.4; // float | Filter results by campaign.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCustomerSessions

> string exportCustomerSessions($applicationId, $createdBefore, $createdAfter, $profileIntegrationId, $dateFormat, $customerSessionState)

Export Customer Sessions to a CSV file

Download a file with the customer sessions that match the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string.
$profileIntegrationId = 'profileIntegrationId_example'; // string | Only return sessions for the customer that matches this customer integration ID.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.
$customerSessionState = 'customerSessionState_example'; // string | Filter results by state.

try {
    $result = $apiInstance->exportCustomerSessions($applicationId, $createdBefore, $createdAfter, $profileIntegrationId, $dateFormat, $customerSessionState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCustomerSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **profileIntegrationId** | **string**| Only return sessions for the customer that matches this customer integration ID. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **customerSessionState** | **string**| Filter results by state. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportEffects

> string exportEffects($applicationId, $campaignId, $createdBefore, $createdAfter, $dateFormat)

Export triggered Effects to a CSV file

Download a file with the triggered effects that match the given attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportEffects($applicationId, $campaignId, $createdBefore, $createdAfter, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportEffects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyBalance

> string exportLoyaltyBalance($programID)

Export customer loyalty balance to a CSV file

Download a file with the balance of each customer in the loyalty program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.

try {
    $result = $apiInstance->exportLoyaltyBalance($programID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyLedger

> string exportLoyaltyLedger($programID, $integrationID, $rangeStart, $rangeEnd, $dateFormat)

Export a customer's loyalty ledger log to a CSV file

Download a file with a customer's ledger log in the loyalty program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.
$integrationID = 'integrationID_example'; // string | 
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportLoyaltyLedger($programID, $integrationID, $rangeStart, $rangeEnd, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |
 **integrationID** | **string**|  |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccessLogs

> \TalonOne\Client\Model\InlineResponse2008 getAccessLogs($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

Get access logs for application (with total count)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getAccessLogs($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccessLogsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2009 getAccessLogsWithoutTotalCount($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

Get access logs for application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getAccessLogsWithoutTotalCount($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccessLogsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccount

> \TalonOne\Client\Model\Account getAccount($accountId)

Get Account Details

Return the details of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | 

try {
    $result = $apiInstance->getAccount($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Account**](../Model/Account.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAnalytics

> \TalonOne\Client\Model\AccountAnalytics getAccountAnalytics($accountId)

Get Account Analytics

Return the analytics of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | 

try {
    $result = $apiInstance->getAccountAnalytics($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccountAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\AccountAnalytics**](../Model/AccountAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost getAdditionalCost($additionalCostId)

Get an additional cost

Returns additional cost for the account by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | 

try {
    $result = $apiInstance->getAdditionalCost($additionalCostId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additionalCostId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCosts

> \TalonOne\Client\Model\InlineResponse20021 getAdditionalCosts($pageSize, $skip, $sort)

List additional costs

Returns all the defined additional costs for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getAdditionalCosts($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllAccessLogs

> \TalonOne\Client\Model\InlineResponse2008 getAllAccessLogs($rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

List access logs

Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getAllAccessLogs($rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAllAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllRoles

> \TalonOne\Client\Model\InlineResponse20029 getAllRoles()

List roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAllRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TalonOne\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplication

> \TalonOne\Client\Model\Application getApplication($applicationId)

Get Application

Get the application specified by the ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 

try {
    $result = $apiInstance->getApplication($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Application**](../Model/Application.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationApiHealth

> \TalonOne\Client\Model\ApplicationApiHealth getApplicationApiHealth($applicationId)

Get report of health of application API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 

try {
    $result = $apiInstance->getApplicationApiHealth($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationApiHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\ApplicationApiHealth**](../Model/ApplicationApiHealth.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomer

> \TalonOne\Client\Model\ApplicationCustomer getApplicationCustomer($applicationId, $customerId)

Get Application Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$customerId = 56; // int | 

try {
    $result = $apiInstance->getApplicationCustomer($applicationId, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **customerId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomers

> \TalonOne\Client\Model\InlineResponse20011 getApplicationCustomers($applicationId, $integrationId, $pageSize, $skip, $withTotalResultSize)

List Application Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$integrationId = 'integrationId_example'; // string | Filter results performing an exact matching against the profile integration identifier.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomers($applicationId, $integrationId, $pageSize, $skip, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **integrationId** | **string**| Filter results performing an exact matching against the profile integration identifier. | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20012 getApplicationCustomersByAttributes($applicationCustomerSearch)

Get a list of the customer profiles that match the given attributes (with total count)

Gets a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#/customerProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationCustomerSearch = new \TalonOne\Client\Model\ApplicationCustomerSearch(); // \TalonOne\Client\Model\ApplicationCustomerSearch | 

try {
    $result = $apiInstance->getApplicationCustomersByAttributes($applicationCustomerSearch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationCustomerSearch** | [**\TalonOne\Client\Model\ApplicationCustomerSearch**](../Model/ApplicationCustomerSearch.md)|  |

### Return type

[**\TalonOne\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventTypes

> \TalonOne\Client\Model\InlineResponse20018 getApplicationEventTypes($applicationId, $pageSize, $skip, $sort)

List Applications Event Types

Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/reference/#trackEvent)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getApplicationEventTypes($applicationId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEvents

> \TalonOne\Client\Model\InlineResponse20016 getApplicationEvents($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery)

List Applications Events (with total count)

Lists all events recorded for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$type = 'type_example'; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.
$session = 'session_example'; // string | Session integration ID filter for events. Must be exact match.
$profile = 'profile_example'; // string | Profile integration ID filter for events. Must be exact match.
$customerName = 'customerName_example'; // string | Customer name filter for events. Will match substrings case-insensitively.
$customerEmail = 'customerEmail_example'; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$couponCode = 'couponCode_example'; // string | Coupon code
$referralCode = 'referralCode_example'; // string | Referral code
$ruleQuery = 'ruleQuery_example'; // string | Rule name filter for events
$campaignQuery = 'campaignQuery_example'; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEvents($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customerName** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customerEmail** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **couponCode** | **string**| Coupon code | [optional]
 **referralCode** | **string**| Referral code | [optional]
 **ruleQuery** | **string**| Rule name filter for events | [optional]
 **campaignQuery** | **string**| Campaign name filter for events | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20017 getApplicationEventsWithoutTotalCount($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery)

List Applications Events

Lists all events recorded for an application. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$type = 'type_example'; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.
$session = 'session_example'; // string | Session integration ID filter for events. Must be exact match.
$profile = 'profile_example'; // string | Profile integration ID filter for events. Must be exact match.
$customerName = 'customerName_example'; // string | Customer name filter for events. Will match substrings case-insensitively.
$customerEmail = 'customerEmail_example'; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$couponCode = 'couponCode_example'; // string | Coupon code
$referralCode = 'referralCode_example'; // string | Referral code
$ruleQuery = 'ruleQuery_example'; // string | Rule name filter for events
$campaignQuery = 'campaignQuery_example'; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEventsWithoutTotalCount($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customerName** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customerEmail** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **couponCode** | **string**| Coupon code | [optional]
 **referralCode** | **string**| Referral code | [optional]
 **ruleQuery** | **string**| Rule name filter for events | [optional]
 **campaignQuery** | **string**| Campaign name filter for events | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSession

> \TalonOne\Client\Model\ApplicationSession getApplicationSession($applicationId, $sessionId)

Get Application Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$sessionId = 56; // int | 

try {
    $result = $apiInstance->getApplicationSession($applicationId, $sessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **sessionId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\ApplicationSession**](../Model/ApplicationSession.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSessions

> \TalonOne\Client\Model\InlineResponse20015 getApplicationSessions($applicationId, $pageSize, $skip, $sort, $profile, $state, $createdBefore, $createdAfter, $coupon, $referral, $integrationId)

List Application Sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$profile = 'profile_example'; // string | Profile integration ID filter for sessions. Must be exact match.
$state = 'state_example'; // string | Filter by sessions with this state. Must be exact match.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.
$coupon = 'coupon_example'; // string | Filter by sessions with this coupon. Must be exact match.
$referral = 'referral_example'; // string | Filter by sessions with this referral. Must be exact match.
$integrationId = 'integrationId_example'; // string | Filter by sessions with this integrationId. Must be exact match.

try {
    $result = $apiInstance->getApplicationSessions($applicationId, $pageSize, $skip, $sort, $profile, $state, $createdBefore, $createdAfter, $coupon, $referral, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **profile** | **string**| Profile integration ID filter for sessions. Must be exact match. | [optional]
 **state** | **string**| Filter by sessions with this state. Must be exact match. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **coupon** | **string**| Filter by sessions with this coupon. Must be exact match. | [optional]
 **referral** | **string**| Filter by sessions with this referral. Must be exact match. | [optional]
 **integrationId** | **string**| Filter by sessions with this integrationId. Must be exact match. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplications

> \TalonOne\Client\Model\InlineResponse2001 getApplications($pageSize, $skip, $sort)

List Applications

List all application in the current account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getApplications($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttribute

> \TalonOne\Client\Model\Attribute getAttribute($attributeId)

Get a custom attribute

Returns custom attribute for the account by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | 

try {
    $result = $apiInstance->getAttribute($attributeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttributes

> \TalonOne\Client\Model\InlineResponse20020 getAttributes($pageSize, $skip, $sort, $entity)

List custom attributes

Returns all the defined custom attributes for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$entity = 'entity_example'; // string | 

try {
    $result = $apiInstance->getAttributes($pageSize, $skip, $sort, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **entity** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAudiences

> \TalonOne\Client\Model\InlineResponse20019 getAudiences($pageSize, $skip, $sort, $withTotalResultSize)

List audiences

Get All audiences created in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$withTotalResultSize = True; // bool | When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query.

try {
    $result = $apiInstance->getAudiences($pageSize, $skip, $sort, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAudiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaign

> \TalonOne\Client\Model\Campaign getCampaign($applicationId, $campaignId)

Get campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 

try {
    $result = $apiInstance->getCampaign($applicationId, $campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignAnalytics

> \TalonOne\Client\Model\InlineResponse20010 getCampaignAnalytics($applicationId, $campaignId, $rangeStart, $rangeEnd, $granularity)

Get analytics of campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$granularity = 'granularity_example'; // string | The time interval between the results in the returned time-series.

try {
    $result = $apiInstance->getCampaignAnalytics($applicationId, $campaignId, $rangeStart, $rangeEnd, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **granularity** | **string**| The time interval between the results in the returned time-series. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignByAttributes

> \TalonOne\Client\Model\InlineResponse2002 getCampaignByAttributes($applicationId, $campaignSearch, $pageSize, $skip, $sort, $campaignState)

List campaigns that match the given attributes

Gets a list of all the campaigns that exactly match a set of attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignSearch = new \TalonOne\Client\Model\CampaignSearch(); // \TalonOne\Client\Model\CampaignSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->getCampaignByAttributes($applicationId, $campaignSearch, $pageSize, $skip, $sort, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignSearch** | [**\TalonOne\Client\Model\CampaignSearch**](../Model/CampaignSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaigns

> \TalonOne\Client\Model\InlineResponse2002 getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId)

List campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.
$name = 'name_example'; // string | Filter results performing case-insensitive matching against the name of the campaign.
$tags = 'tags_example'; // string | Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \"name\" query parameter, a logical OR will be performed to search both tags and name for the provided values
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$campaignGroupId = 56; // int | Filter results to campaigns owned by the specified campaign group ID.

try {
    $result = $apiInstance->getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]
 **name** | **string**| Filter results performing case-insensitive matching against the name of the campaign. | [optional]
 **tags** | **string**| Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \&quot;name\&quot; query parameter, a logical OR will be performed to search both tags and name for the provided values | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **campaignGroupId** | **int**| Filter results to campaigns owned by the specified campaign group ID. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChanges

> \TalonOne\Client\Model\InlineResponse20027 getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $includeOld)

Get audit log for an account

Get list of changes caused by API calls for an account. Only accessible for admins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$applicationId = 56; // int | 
$entityPath = 'entityPath_example'; // string | Filter results on a case insensitive matching of the url path of the entity
$userId = 56; // int | 
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$withTotalResultSize = True; // bool | When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query.
$includeOld = True; // bool | When this flag is set to false, the state without the change will not be returned. The default value is true.

try {
    $result = $apiInstance->getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $includeOld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **applicationId** | **int**|  | [optional]
 **entityPath** | **string**| Filter results on a case insensitive matching of the url path of the entity | [optional]
 **userId** | **int**|  | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query. | [optional]
 **includeOld** | **bool**| When this flag is set to false, the state without the change will not be returned. The default value is true. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCoupons

> \TalonOne\Client\Model\InlineResponse2004 getCoupons($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch)

List coupons (with total count)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $result = $apiInstance->getCoupons($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsByAttributes

> \TalonOne\Client\Model\InlineResponse2004 getCouponsByAttributes($applicationId, $campaignId, $couponSearch, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes

Gets a list of all the coupons that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$couponSearch = new \TalonOne\Client\Model\CouponSearch(); // \TalonOne\Client\Model\CouponSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batchId = 'batchId_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->getCouponsByAttributes($applicationId, $campaignId, $couponSearch, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **couponSearch** | [**\TalonOne\Client\Model\CouponSearch**](../Model/CouponSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsByAttributesApplicationWide

> \TalonOne\Client\Model\InlineResponse2004 getCouponsByAttributesApplicationWide($applicationId, $couponSearch, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState)

List coupons that match the given attributes in all active campaigns of an application (with total count)

Gets a list of all the coupons with attributes matching the query criteria Application wide

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$couponSearch = new \TalonOne\Client\Model\CouponSearch(); // \TalonOne\Client\Model\CouponSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->getCouponsByAttributesApplicationWide($applicationId, $couponSearch, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsByAttributesApplicationWide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **couponSearch** | [**\TalonOne\Client\Model\CouponSearch**](../Model/CouponSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 getCouponsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch)

List coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $result = $apiInstance->getCouponsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReport

> \TalonOne\Client\Model\CustomerActivityReport getCustomerActivityReport($rangeStart, $rangeEnd, $applicationId, $customerId, $pageSize, $skip)

Get Activity Report for Single Customer

Fetch summary report for single application customer based on a time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$applicationId = 56; // int | 
$customerId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerActivityReport($rangeStart, $rangeEnd, $applicationId, $customerId, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **applicationId** | **int**|  |
 **customerId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerActivityReport**](../Model/CustomerActivityReport.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReports

> \TalonOne\Client\Model\InlineResponse20013 getCustomerActivityReports($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName)

Get Activity Reports for Application Customers (with total count)

Fetch summary reports for all application customers based on a time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$name = 'name_example'; // string | Only return reports matching the customer name
$integrationId = 'integrationId_example'; // string | Only return reports matching the integrationId
$campaignName = 'campaignName_example'; // string | Only return reports matching the campaignName
$advocateName = 'advocateName_example'; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReports($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integrationId** | **string**| Only return reports matching the integrationId | [optional]
 **campaignName** | **string**| Only return reports matching the campaignName | [optional]
 **advocateName** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReportsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20014 getCustomerActivityReportsWithoutTotalCount($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$applicationId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$name = 'name_example'; // string | Only return reports matching the customer name
$integrationId = 'integrationId_example'; // string | Only return reports matching the integrationId
$campaignName = 'campaignName_example'; // string | Only return reports matching the campaignName
$advocateName = 'advocateName_example'; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReportsWithoutTotalCount($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReportsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **applicationId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integrationId** | **string**| Only return reports matching the integrationId | [optional]
 **campaignName** | **string**| Only return reports matching the campaignName | [optional]
 **advocateName** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerAnalytics

> \TalonOne\Client\Model\CustomerAnalytics getCustomerAnalytics($applicationId, $customerId, $pageSize, $skip, $sort)

Get Analytics Report for a Customer

Fetch analytics for single application customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$customerId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getCustomerAnalytics($applicationId, $customerId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **customerId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerAnalytics**](../Model/CustomerAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> \TalonOne\Client\Model\ApplicationCustomer getCustomerProfile($customerId)

Get Customer Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->getCustomerProfile($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfiles

> \TalonOne\Client\Model\InlineResponse20012 getCustomerProfiles($pageSize, $skip)

List Customer Profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerProfiles($pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20012 getCustomersByAttributes($applicationCustomerSearch, $pageSize, $skip)

List customer profiles that match the given attributes

Get a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#/customerProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationCustomerSearch = new \TalonOne\Client\Model\ApplicationCustomerSearch(); // \TalonOne\Client\Model\ApplicationCustomerSearch | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomersByAttributes($applicationCustomerSearch, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationCustomerSearch** | [**\TalonOne\Client\Model\ApplicationCustomerSearch**](../Model/ApplicationCustomerSearch.md)|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventTypes

> \TalonOne\Client\Model\InlineResponse20025 getEventTypes($applicationIds, $name, $includeOldVersions, $pageSize, $skip, $sort)

List event types

Fetch all event type definitions for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationIds = 'applicationIds_example'; // string | Filter by one or more application ids separated by comma
$name = 'name_example'; // string | Filter results to event types with the given name. This parameter implies `includeOldVersions`.
$includeOldVersions = false; // bool | Include all versions of every event type.
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getEventTypes($applicationIds, $name, $includeOldVersions, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationIds** | **string**| Filter by one or more application ids separated by comma | [optional]
 **name** | **string**| Filter results to event types with the given name. This parameter implies &#x60;includeOldVersions&#x60;. | [optional]
 **includeOldVersions** | **bool**| Include all versions of every event type. | [optional] [default to false]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExports

> \TalonOne\Client\Model\InlineResponse20028 getExports($pageSize, $skip, $applicationId, $campaignId, $entity)

Get exports

Get a list of all past exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$entity = 'entity_example'; // string | The name of the entity type that was exported.

try {
    $result = $apiInstance->getExports($pageSize, $skip, $applicationId, $campaignId, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **applicationId** | **int**|  | [optional]
 **campaignId** | **int**|  | [optional]
 **entity** | **string**| The name of the entity type that was exported. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPoints

> \TalonOne\Client\Model\LoyaltyLedger getLoyaltyPoints($programID, $integrationID)

Get integration's Loyalty Ledger

Get the Loyalty Ledger for this profile integration ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.
$integrationID = 'integrationID_example'; // string | The identifier for the application, must be unique within the account.

try {
    $result = $apiInstance->getLoyaltyPoints($programID, $integrationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |
 **integrationID** | **string**| The identifier for the application, must be unique within the account. |

### Return type

[**\TalonOne\Client\Model\LoyaltyLedger**](../Model/LoyaltyLedger.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyProgram

> \TalonOne\Client\Model\LoyaltyProgram getLoyaltyProgram($programID)

Get a loyalty program

Get a loyalty program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.

try {
    $result = $apiInstance->getLoyaltyProgram($programID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |

### Return type

[**\TalonOne\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPrograms

> \TalonOne\Client\Model\InlineResponse2007 getLoyaltyPrograms()

List loyalty programs

List all the loyalty programs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoyaltyPrograms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TalonOne\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyStatistics

> \TalonOne\Client\Model\LoyaltyStatistics getLoyaltyStatistics($programID)

Get loyalty program statistics by loyalty program ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.

try {
    $result = $apiInstance->getLoyaltyStatistics($programID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |

### Return type

[**\TalonOne\Client\Model\LoyaltyStatistics**](../Model/LoyaltyStatistics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferrals

> \TalonOne\Client\Model\InlineResponse201 getReferrals($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate)

List referrals (with total count)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only referrals where `usageCounter < usageLimit` will be returned, \"false\" will return only referrals where `usageCounter >= usageLimit`.
$advocate = 'advocate_example'; // string | Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

try {
    $result = $apiInstance->getReferrals($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferralsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2006 getReferralsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate)

List referrals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only referrals where `usageCounter < usageLimit` will be returned, \"false\" will return only referrals where `usageCounter >= usageLimit`.
$advocate = 'advocate_example'; // string | Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

try {
    $result = $apiInstance->getReferralsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getReferralsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRole

> \TalonOne\Client\Model\Role getRole($roleId)

Get information for the specified role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$roleId = 56; // int | 

try {
    $result = $apiInstance->getRole($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRuleset

> \TalonOne\Client\Model\Ruleset getRuleset($applicationId, $campaignId, $rulesetId)

Get ruleset

Retrieve the details of a ruleset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$rulesetId = 56; // int | 

try {
    $result = $apiInstance->getRuleset($applicationId, $campaignId, $rulesetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **rulesetId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRulesets

> \TalonOne\Client\Model\InlineResponse2003 getRulesets($applicationId, $campaignId, $pageSize, $skip, $sort)

List rulesets

List all rulesets in the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getRulesets($applicationId, $campaignId, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \TalonOne\Client\Model\User getUser($userId)

Get a single User

Retrieves the data (including an invitation code) for a user. Non-admin users can only get themselves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | 

try {
    $result = $apiInstance->getUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\User**](../Model/User.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \TalonOne\Client\Model\InlineResponse20026 getUsers($pageSize, $skip, $sort)

List users

Retrieve all users in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 

try {
    $result = $apiInstance->getUsers($pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhook

> \TalonOne\Client\Model\Webhook getWebhook($webhookId)

Get Webhook

Returns an webhook by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookId = 56; // int | 

try {
    $result = $apiInstance->getWebhook($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **int**|  |

### Return type

[**\TalonOne\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookActivationLogs

> \TalonOne\Client\Model\InlineResponse20023 getWebhookActivationLogs($pageSize, $skip, $sort, $integrationRequestUuid, $webhookId, $applicationId, $campaignId, $createdBefore, $createdAfter)

List Webhook activation Log Entries

Webhook activation log entries would be created as soon as an integration request triggered an effect with a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$integrationRequestUuid = 'integrationRequestUuid_example'; // string | Filter results by integration request UUID.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | 
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally.

try {
    $result = $apiInstance->getWebhookActivationLogs($pageSize, $skip, $sort, $integrationRequestUuid, $webhookId, $applicationId, $campaignId, $createdBefore, $createdAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookActivationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **integrationRequestUuid** | **string**| Filter results by integration request UUID. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**|  | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookLogs

> \TalonOne\Client\Model\InlineResponse20024 getWebhookLogs($pageSize, $skip, $sort, $status, $webhookId, $applicationId, $campaignId, $requestUuid, $createdBefore, $createdAfter)

List Webhook Log Entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$status = 'status_example'; // string | Filter results by HTTP status codes.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | 
$campaignId = 3.4; // float | Filter results by campaign.
$requestUuid = 'requestUuid_example'; // string | Filter results by request UUID.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally.

try {
    $result = $apiInstance->getWebhookLogs($pageSize, $skip, $sort, $status, $webhookId, $applicationId, $campaignId, $requestUuid, $createdBefore, $createdAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**|  | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **requestUuid** | **string**| Filter results by request UUID. | [optional]
 **createdBefore** | **\DateTime**| Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhooks

> \TalonOne\Client\Model\InlineResponse20022 getWebhooks($applicationIds, $sort, $pageSize, $skip)

List Webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationIds = 'applicationIds_example'; // string | Filter by one or more application ids separated by comma
$sort = 'sort_example'; // string | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getWebhooks($applicationIds, $sort, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationIds** | **string**| Filter by one or more application ids separated by comma | [optional]
 **sort** | **string**|  | [optional]
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCoupons

> \TalonOne\Client\Model\Import importCoupons($applicationId, $campaignId, $upfile)

Import coupons via CSV file

Upload a CSV file containing the coupons that should be created. The file should be sent as multipart data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$upfile = 'upfile_example'; // string | The file with the information about the loyalty points that should be imported.

try {
    $result = $apiInstance->importCoupons($applicationId, $campaignId, $upfile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **upfile** | **string**| The file with the information about the loyalty points that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importLoyaltyPoints

> \TalonOne\Client\Model\Import importLoyaltyPoints($programID, $upFile)

Import loyalty points via CSV file

Upload a CSV file containing the loyalty points that should be created. The file should be sent as multipart data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.
$upFile = 'upFile_example'; // string | The file with the information about the loyalty points that should be imported.

try {
    $result = $apiInstance->importLoyaltyPoints($programID, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |
 **upFile** | **string**| The file with the information about the loyalty points that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importPoolGiveaways

> \TalonOne\Client\Model\Import importPoolGiveaways($poolId, $upfile)

Import giveaways codes into a giveaways pool

Upload a CSV file containing the giveaways codes that should be created. Send the file as multipart data.  The CSV file can contain the following columns: - `code` (required): the code of your giveaway, for instance, a gift card redemption code. - `startdate`:  the start date in RFC3339 of the code redemption period. - `enddate`: the last date in RFC3339 of the code redemption period. - `attributes`: A json object describing _custom_ giveaways attribute names and their values. Double the double-quotes in the object.   For example, if you created a custom attribute called `provider`, set it with `\"{\"\"provider\"\": \"\"myPartnerCompany\"\"}\"`.  The `startdate` and `enddate` have nothing to do with the _validity_ of the codes. They are only used by the Rule Engine to award the codes or not. You can use the timezone of your choice. It is converted to UTC internally by Talon.One.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$poolId = 56; // int | 
$upfile = 'upfile_example'; // string | The file with the information about the loyalty points that should be imported.

try {
    $result = $apiInstance->importPoolGiveaways($poolId, $upfile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importPoolGiveaways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poolId** | **int**|  |
 **upfile** | **string**| The file with the information about the loyalty points that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importReferrals

> \TalonOne\Client\Model\Import importReferrals($applicationId, $campaignId, $upFile)

Import referrals via CSV file

Upload a CSV file containing the referrals that should be created. The file should be sent as multipart data.  The CSV file can contain the following colums:  - `code` (required): the referral code. - `advocateprofileintegrationid` (required): The profile ID of the advocate. - `startdate`: the start date in RFC3339 of the code redemption period. - `expirydate`: the end date in RFC3339 of the code redemption period. - `limitval`: The maximum amount of redemptions of this code. Unlimited (0) when blank. - `attributes`: A json object describing _custom_ referral attribute names and their values. Double the double-quotes in the object.   For example, if you created a custom attribute called `category`, set it with `\"{\"\"category\"\": \"\"10_off\"\"}\"`.  You can use the timezone of your choice. It is converted to UTC internally by Talon.One.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$upFile = 'upFile_example'; // string | The file with the information about the loyalty points that should be imported.

try {
    $result = $apiInstance->importReferrals($applicationId, $campaignId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **upFile** | **string**| The file with the information about the loyalty points that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeLoyaltyPoints

> removeLoyaltyPoints($programID, $integrationID, $loyaltyPoints)

Deduct points in a loyalty program for the specified customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programID = 56; // int | The identifier for the loyalty program, must be unique within the account.
$integrationID = 'integrationID_example'; // string | 
$loyaltyPoints = new \TalonOne\Client\Model\LoyaltyPoints(); // \TalonOne\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->removeLoyaltyPoints($programID, $integrationID, $loyaltyPoints);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->removeLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programID** | **int**| The identifier for the loyalty program, must be unique within the account. |
 **integrationID** | **string**|  |
 **loyaltyPoints** | [**\TalonOne\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

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


## resetPassword

> \TalonOne\Client\Model\NewPassword resetPassword($newPassword)

Reset password

Consumes the supplied password reset token and updates the password for the associated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newPassword = new \TalonOne\Client\Model\NewPassword(); // \TalonOne\Client\Model\NewPassword | 

try {
    $result = $apiInstance->resetPassword($newPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newPassword** | [**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)|  |

### Return type

[**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvanced

> \TalonOne\Client\Model\InlineResponse2004 searchCouponsAdvanced($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes (with total count)

Gets a list of all the coupons with attributes matching the query criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batchId = 'batchId_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->searchCouponsAdvanced($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWide

> \TalonOne\Client\Model\InlineResponse2004 searchCouponsAdvancedApplicationWide($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState)

List coupons that match the given attributes in all active campaigns of an application (with total count)

Get a list of all the coupons with attributes matching the query criteria in all active campaigns of an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->searchCouponsAdvancedApplicationWide($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedApplicationWide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWideWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 searchCouponsAdvancedApplicationWideWithoutTotalCount($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState)

List coupons that match the given attributes in all active campaigns of an application

List of all the coupons with attributes matching the query criteria in all active campaigns of an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->searchCouponsAdvancedApplicationWideWithoutTotalCount($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedApplicationWideWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaignState** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2005 searchCouponsAdvancedWithoutTotalCount($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes

List of all the coupons with attributes matching the query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$body = new \stdClass; // object | 
$pageSize = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batchId = 'batchId_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->searchCouponsAdvancedWithoutTotalCount($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **body** | **object**|  |
 **pageSize** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**|  | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost updateAdditionalCost($additionalCostId, $newAdditionalCost)

Update an additional cost

Updates an existing additional cost. Once created, the only property of an additional cost that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | 
$newAdditionalCost = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->updateAdditionalCost($additionalCostId, $newAdditionalCost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additionalCostId** | **int**|  |
 **newAdditionalCost** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAttribute

> \TalonOne\Client\Model\Attribute updateAttribute($attributeId, $newAttribute)

Update a custom attribute

Updates an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations. E.g. if you have a customer profile attribute with the name `region`, and your integration is sending `attributes.region` with customer profile updates, changing the name to `locale` would cause the integration requests to begin failing.  If you **really** need to change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute. Then delete the old attribute when you are confident you have migrated any needed data from the old attribute to the new one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | 
$newAttribute = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->updateAttribute($attributeId, $newAttribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**|  |
 **newAttribute** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaign

> \TalonOne\Client\Model\Campaign updateCampaign($applicationId, $campaignId, $updateCampaign)

Update campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$updateCampaign = new \TalonOne\Client\Model\UpdateCampaign(); // \TalonOne\Client\Model\UpdateCampaign | 

try {
    $result = $apiInstance->updateCampaign($applicationId, $campaignId, $updateCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **updateCampaign** | [**\TalonOne\Client\Model\UpdateCampaign**](../Model/UpdateCampaign.md)|  |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCoupon

> \TalonOne\Client\Model\Coupon updateCoupon($applicationId, $campaignId, $couponId, $updateCoupon)

Update coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$couponId = 'couponId_example'; // string | The ID of the coupon code to update
$updateCoupon = new \TalonOne\Client\Model\UpdateCoupon(); // \TalonOne\Client\Model\UpdateCoupon | 

try {
    $result = $apiInstance->updateCoupon($applicationId, $campaignId, $couponId, $updateCoupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **couponId** | **string**| The ID of the coupon code to update |
 **updateCoupon** | [**\TalonOne\Client\Model\UpdateCoupon**](../Model/UpdateCoupon.md)|  |

### Return type

[**\TalonOne\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCouponBatch

> updateCouponBatch($applicationId, $campaignId, $updateCouponBatch)

Update a batch of coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$updateCouponBatch = new \TalonOne\Client\Model\UpdateCouponBatch(); // \TalonOne\Client\Model\UpdateCouponBatch | 

try {
    $apiInstance->updateCouponBatch($applicationId, $campaignId, $updateCouponBatch);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCouponBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **updateCouponBatch** | [**\TalonOne\Client\Model\UpdateCouponBatch**](../Model/UpdateCouponBatch.md)|  |

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


## updateReferral

> \TalonOne\Client\Model\Referral updateReferral($applicationId, $campaignId, $referralId, $updateReferral)

Update referral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$referralId = 'referralId_example'; // string | The ID of the referral code to delete
$updateReferral = new \TalonOne\Client\Model\UpdateReferral(); // \TalonOne\Client\Model\UpdateReferral | 

try {
    $result = $apiInstance->updateReferral($applicationId, $campaignId, $referralId, $updateReferral);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **referralId** | **string**| The ID of the referral code to delete |
 **updateReferral** | [**\TalonOne\Client\Model\UpdateReferral**](../Model/UpdateReferral.md)|  |

### Return type

[**\TalonOne\Client\Model\Referral**](../Model/Referral.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateRuleset

> \TalonOne\Client\Model\Ruleset updateRuleset($applicationId, $campaignId, $rulesetId, $newRuleset)

Update ruleset

Update the specified ruleset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | 
$campaignId = 56; // int | 
$rulesetId = 56; // int | 
$newRuleset = new \TalonOne\Client\Model\NewRuleset(); // \TalonOne\Client\Model\NewRuleset | 

try {
    $result = $apiInstance->updateRuleset($applicationId, $campaignId, $rulesetId, $newRuleset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**|  |
 **campaignId** | **int**|  |
 **rulesetId** | **int**|  |
 **newRuleset** | [**\TalonOne\Client\Model\NewRuleset**](../Model/NewRuleset.md)|  |

### Return type

[**\TalonOne\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

