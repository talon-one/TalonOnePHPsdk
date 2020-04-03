# OpenAPI\Client\ManagementApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoyaltyPoints**](ManagementApi.md#addLoyaltyPoints) | **PUT** /v1/loyalty_programs/{programID}/profile/{integrationID}/add_points | Add points in a certain loyalty program for the specified customer
[**copyCampaignToApplications**](ManagementApi.md#copyCampaignToApplications) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/copy | Copy the campaign into every specified application
[**createAdditionalCost**](ManagementApi.md#createAdditionalCost) | **POST** /v1/additional_costs | Define a new additional cost
[**createAttribute**](ManagementApi.md#createAttribute) | **POST** /v1/attributes | Define a new custom attribute
[**createCampaign**](ManagementApi.md#createCampaign) | **POST** /v1/applications/{applicationId}/campaigns | Create a Campaign
[**createCoupons**](ManagementApi.md#createCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Create Coupons
[**createPasswordRecoveryEmail**](ManagementApi.md#createPasswordRecoveryEmail) | **POST** /v1/password_recovery_emails | Request a password reset
[**createRuleset**](ManagementApi.md#createRuleset) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | Create a Ruleset
[**createSession**](ManagementApi.md#createSession) | **POST** /v1/sessions | Create a Session
[**deleteCampaign**](ManagementApi.md#deleteCampaign) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId} | Delete a Campaign
[**deleteCoupon**](ManagementApi.md#deleteCoupon) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Delete one Coupon
[**deleteCoupons**](ManagementApi.md#deleteCoupons) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Delete Coupons
[**deleteReferral**](ManagementApi.md#deleteReferral) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Delete one Referral
[**deleteRuleset**](ManagementApi.md#deleteRuleset) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Delete a Ruleset
[**getAccessLogs**](ManagementApi.md#getAccessLogs) | **GET** /v1/applications/{applicationId}/access_logs | Get access logs for application
[**getAccessLogsWithoutTotalCount**](ManagementApi.md#getAccessLogsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/access_logs/no_total | Get access logs for application
[**getAccount**](ManagementApi.md#getAccount) | **GET** /v1/accounts/{accountId} | Get Account Details
[**getAccountAnalytics**](ManagementApi.md#getAccountAnalytics) | **GET** /v1/accounts/{accountId}/analytics | Get Account Analytics
[**getAdditionalCost**](ManagementApi.md#getAdditionalCost) | **GET** /v1/additional_costs/{additionalCostId} | Get an additional cost
[**getAdditionalCosts**](ManagementApi.md#getAdditionalCosts) | **GET** /v1/additional_costs | List additional costs
[**getAllAccessLogs**](ManagementApi.md#getAllAccessLogs) | **GET** /v1/access_logs | Get all access logs
[**getAllRoles**](ManagementApi.md#getAllRoles) | **GET** /v1/roles | Get all roles.
[**getApplication**](ManagementApi.md#getApplication) | **GET** /v1/applications/{applicationId} | Get Application
[**getApplicationApiHealth**](ManagementApi.md#getApplicationApiHealth) | **GET** /v1/applications/{applicationId}/health_report | Get report of health of application API
[**getApplicationCustomer**](ManagementApi.md#getApplicationCustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get Application Customer
[**getApplicationCustomers**](ManagementApi.md#getApplicationCustomers) | **GET** /v1/applications/{applicationId}/customers | List Application Customers
[**getApplicationCustomersByAttributes**](ManagementApi.md#getApplicationCustomersByAttributes) | **POST** /v1/application_customer_search | Get a list of the customer profiles that match the given attributes
[**getApplicationEventTypes**](ManagementApi.md#getApplicationEventTypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications Event Types
[**getApplicationEvents**](ManagementApi.md#getApplicationEvents) | **GET** /v1/applications/{applicationId}/events | List Applications Events
[**getApplicationEventsWithoutTotalCount**](ManagementApi.md#getApplicationEventsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/events/no_total | List Applications Events
[**getApplicationSession**](ManagementApi.md#getApplicationSession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application Session
[**getApplicationSessions**](ManagementApi.md#getApplicationSessions) | **GET** /v1/applications/{applicationId}/sessions | List Application Sessions
[**getApplications**](ManagementApi.md#getApplications) | **GET** /v1/applications | List Applications
[**getAttribute**](ManagementApi.md#getAttribute) | **GET** /v1/attributes/{attributeId} | Get a custom attribute
[**getAttributes**](ManagementApi.md#getAttributes) | **GET** /v1/attributes | List custom attributes
[**getCampaign**](ManagementApi.md#getCampaign) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId} | Get a Campaign
[**getCampaignAnalytics**](ManagementApi.md#getCampaignAnalytics) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/analytics | Get analytics of campaigns
[**getCampaignByAttributes**](ManagementApi.md#getCampaignByAttributes) | **POST** /v1/applications/{applicationId}/campaigns_search | Get a list of all campaigns that match the given attributes
[**getCampaignSet**](ManagementApi.md#getCampaignSet) | **GET** /v1/applications/{applicationId}/campaign_set | List CampaignSet
[**getCampaigns**](ManagementApi.md#getCampaigns) | **GET** /v1/applications/{applicationId}/campaigns | List your Campaigns
[**getChanges**](ManagementApi.md#getChanges) | **GET** /v1/changes | Get audit log for an account
[**getCoupons**](ManagementApi.md#getCoupons) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | List Coupons
[**getCouponsByAttributes**](ManagementApi.md#getCouponsByAttributes) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search | Get a list of the coupons that match the given attributes
[**getCouponsByAttributesApplicationWide**](ManagementApi.md#getCouponsByAttributesApplicationWide) | **POST** /v1/applications/{applicationId}/coupons_search | Get a list of the coupons that match the given attributes in all active campaigns of an application
[**getCouponsWithoutTotalCount**](ManagementApi.md#getCouponsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/no_total | List Coupons
[**getCustomerActivityReport**](ManagementApi.md#getCustomerActivityReport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get Activity Report for Single Customer
[**getCustomerActivityReports**](ManagementApi.md#getCustomerActivityReports) | **GET** /v1/applications/{applicationId}/customer_activity_reports | Get Activity Reports for Application Customers
[**getCustomerActivityReportsWithoutTotalCount**](ManagementApi.md#getCustomerActivityReportsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/customer_activity_reports/no_total | Get Activity Reports for Application Customers
[**getCustomerAnalytics**](ManagementApi.md#getCustomerAnalytics) | **GET** /v1/applications/{applicationId}/customers/{customerId}/analytics | Get Analytics Report for a Customer
[**getCustomerProfile**](ManagementApi.md#getCustomerProfile) | **GET** /v1/customers/{customerId} | Get Customer Profile
[**getCustomerProfiles**](ManagementApi.md#getCustomerProfiles) | **GET** /v1/customers/no_total | List Customer Profiles
[**getCustomersByAttributes**](ManagementApi.md#getCustomersByAttributes) | **POST** /v1/customer_search/no_total | Get a list of the customer profiles that match the given attributes
[**getEventTypes**](ManagementApi.md#getEventTypes) | **GET** /v1/event_types | List Event Types
[**getExports**](ManagementApi.md#getExports) | **GET** /v1/exports | Get Exports
[**getImports**](ManagementApi.md#getImports) | **GET** /v1/imports | Get Imports
[**getLoyaltyPoints**](ManagementApi.md#getLoyaltyPoints) | **GET** /v1/loyalty_programs/{programID}/profile/{integrationID} | get the Loyalty Ledger for this integrationID
[**getLoyaltyProgram**](ManagementApi.md#getLoyaltyProgram) | **GET** /v1/loyalty_programs/{programID} | Get a loyalty program
[**getLoyaltyPrograms**](ManagementApi.md#getLoyaltyPrograms) | **GET** /v1/loyalty_programs | List all loyalty Programs
[**getReferrals**](ManagementApi.md#getReferrals) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals | List Referrals
[**getReferralsWithoutTotalCount**](ManagementApi.md#getReferralsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/no_total | List Referrals
[**getRole**](ManagementApi.md#getRole) | **GET** /v1/roles/{roleId} | Get information for the specified role.
[**getRuleset**](ManagementApi.md#getRuleset) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Get a Ruleset
[**getRulesets**](ManagementApi.md#getRulesets) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | List Campaign Rulesets
[**getUser**](ManagementApi.md#getUser) | **GET** /v1/users/{userId} | Get a single User
[**getUsers**](ManagementApi.md#getUsers) | **GET** /v1/users | List Users in your account
[**getWebhook**](ManagementApi.md#getWebhook) | **GET** /v1/webhooks/{webhookId} | Get Webhook
[**getWebhookActivationLogs**](ManagementApi.md#getWebhookActivationLogs) | **GET** /v1/webhook_activation_logs | List Webhook activation Log Entries
[**getWebhookLogs**](ManagementApi.md#getWebhookLogs) | **GET** /v1/webhook_logs | List Webhook Log Entries
[**getWebhooks**](ManagementApi.md#getWebhooks) | **GET** /v1/webhooks | List Webhooks
[**removeLoyaltyPoints**](ManagementApi.md#removeLoyaltyPoints) | **PUT** /v1/loyalty_programs/{programID}/profile/{integrationID}/deduct_points | Deduct points in a certain loyalty program for the specified customer
[**resetPassword**](ManagementApi.md#resetPassword) | **POST** /v1/reset_password | Reset password
[**searchCouponsAdvanced**](ManagementApi.md#searchCouponsAdvanced) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced | Get a list of the coupons that match the given attributes
[**searchCouponsAdvancedApplicationWide**](ManagementApi.md#searchCouponsAdvancedApplicationWide) | **POST** /v1/applications/{applicationId}/coupons_search_advanced | Get a list of the coupons that match the given attributes in all active campaigns of an application
[**searchCouponsAdvancedApplicationWideWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedApplicationWideWithoutTotalCount) | **POST** /v1/applications/{applicationId}/coupons_search_advanced/no_total | Get a list of the coupons that match the given attributes in all active campaigns of an application
[**searchCouponsAdvancedWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedWithoutTotalCount) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced/no_total | Get a list of the coupons that match the given attributes
[**updateAdditionalCost**](ManagementApi.md#updateAdditionalCost) | **PUT** /v1/additional_costs/{additionalCostId} | Update an additional cost
[**updateAttribute**](ManagementApi.md#updateAttribute) | **PUT** /v1/attributes/{attributeId} | Update a custom attribute
[**updateCampaign**](ManagementApi.md#updateCampaign) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId} | Update a Campaign
[**updateCampaignSet**](ManagementApi.md#updateCampaignSet) | **PUT** /v1/applications/{applicationId}/campaign_set | Update a Campaign Set
[**updateCoupon**](ManagementApi.md#updateCoupon) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Update a Coupon
[**updateCouponBatch**](ManagementApi.md#updateCouponBatch) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Update a Batch of Coupons
[**updateRuleset**](ManagementApi.md#updateRuleset) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Update a Ruleset



## addLoyaltyPoints

> addLoyaltyPoints($program_id, $integration_id, $body)

Add points in a certain loyalty program for the specified customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | 
$integration_id = 'integration_id_example'; // string | 
$body = new \OpenAPI\Client\Model\LoyaltyPoints(); // \OpenAPI\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->addLoyaltyPoints($program_id, $integration_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->addLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**|  |
 **integration_id** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

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

> \OpenAPI\Client\Model\InlineResponse2003 copyCampaignToApplications($application_id, $campaign_id, $body)

Copy the campaign into every specified application

Copy the campaign into every specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\CampaignCopy(); // \OpenAPI\Client\Model\CampaignCopy | 

try {
    $result = $apiInstance->copyCampaignToApplications($application_id, $campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->copyCampaignToApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\CampaignCopy**](../Model/CampaignCopy.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAdditionalCost

> \OpenAPI\Client\Model\AccountAdditionalCost createAdditionalCost($body)

Define a new additional cost

Defines a new _additional cost_ in this account.  These additional costs are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewAdditionalCost(); // \OpenAPI\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->createAdditionalCost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAttribute

> \OpenAPI\Client\Model\Attribute createAttribute($body)

Define a new custom attribute

Defines a new _custom attribute_ in this account. Custom attributes allow you to attach new fields to Talon.One domain objects like campaigns, coupons, customers and so on. These attributes can then be given values when creating / updating these objects, and these values can be used in your campaign rules. For example, you could define a `zipCode` field for customer sessions, and add a rule to your campaign that only allows certain ZIP codes.  These attributes are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewAttribute(); // \OpenAPI\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->createAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCampaign

> \OpenAPI\Client\Model\Campaign createCampaign($application_id, $body)

Create a Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewCampaign(); // \OpenAPI\Client\Model\NewCampaign | 

try {
    $result = $apiInstance->createCampaign($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewCampaign**](../Model/NewCampaign.md)|  |

### Return type

[**\OpenAPI\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCoupons

> \OpenAPI\Client\Model\InlineResponse2001 createCoupons($application_id, $campaign_id, $body, $silent)

Create Coupons

Create coupons according to some pattern. Up to 20.000 coupons can be created without a unique prefix. When a unique prefix is provided, up to 200.000 coupons can be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewCoupons(); // \OpenAPI\Client\Model\NewCoupons | 
$silent = 'silent_example'; // string | If set to 'yes', response will be an empty 204, otherwise a list of the coupons generated (to to 1000).

try {
    $result = $apiInstance->createCoupons($application_id, $campaign_id, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewCoupons**](../Model/NewCoupons.md)|  |
 **silent** | **string**| If set to &#39;yes&#39;, response will be an empty 204, otherwise a list of the coupons generated (to to 1000). | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPasswordRecoveryEmail

> \OpenAPI\Client\Model\NewPasswordEmail createPasswordRecoveryEmail($body)

Request a password reset

Sends an email with a password recovery link to the email of an existing account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewPasswordEmail(); // \OpenAPI\Client\Model\NewPasswordEmail | 

try {
    $result = $apiInstance->createPasswordRecoveryEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createPasswordRecoveryEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRuleset

> \OpenAPI\Client\Model\Ruleset createRuleset($application_id, $campaign_id, $body)

Create a Ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewRuleset(); // \OpenAPI\Client\Model\NewRuleset | 

try {
    $result = $apiInstance->createRuleset($application_id, $campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewRuleset**](../Model/NewRuleset.md)|  |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSession

> \OpenAPI\Client\Model\Session createSession($body)

Create a Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\LoginParams(); // \OpenAPI\Client\Model\LoginParams | 

try {
    $result = $apiInstance->createSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\LoginParams**](../Model/LoginParams.md)|  |

### Return type

[**\OpenAPI\Client\Model\Session**](../Model/Session.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaign

> deleteCampaign($application_id, $campaign_id)

Delete a Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 

try {
    $apiInstance->deleteCampaign($application_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |

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

> deleteCoupon($application_id, $campaign_id, $coupon_id)

Delete one Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$coupon_id = 'coupon_id_example'; // string | The ID of the coupon code to delete

try {
    $apiInstance->deleteCoupon($application_id, $campaign_id, $coupon_id);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **coupon_id** | **string**| The ID of the coupon code to delete |

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


## deleteCoupons

> deleteCoupons($application_id, $campaign_id, $value, $created_before, $created_after, $starts_after, $starts_before, $expires_after, $expires_before, $valid, $batch_id, $usable, $referral_id, $recipient_integration_id, $exact_match)

Delete Coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$starts_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$expires_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$expires_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $apiInstance->deleteCoupons($application_id, $campaign_id, $value, $created_before, $created_after, $starts_after, $starts_before, $expires_after, $expires_before, $valid, $batch_id, $usable, $referral_id, $recipient_integration_id, $exact_match);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **starts_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **starts_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **expires_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **expires_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

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

> deleteReferral($application_id, $campaign_id, $referral_id)

Delete one Referral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$referral_id = 'referral_id_example'; // string | The ID of the referral code to delete

try {
    $apiInstance->deleteReferral($application_id, $campaign_id, $referral_id);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **referral_id** | **string**| The ID of the referral code to delete |

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

> deleteRuleset($application_id, $campaign_id, $ruleset_id)

Delete a Ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$ruleset_id = 56; // int | 

try {
    $apiInstance->deleteRuleset($application_id, $campaign_id, $ruleset_id);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **ruleset_id** | **int**|  |

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


## getAccessLogs

> \OpenAPI\Client\Model\InlineResponse2009 getAccessLogs($application_id, $range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort)

Get access logs for application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAccessLogs($application_id, $range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccessLogsWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse20010 getAccessLogsWithoutTotalCount($application_id, $range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort)

Get access logs for application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAccessLogsWithoutTotalCount($application_id, $range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccessLogsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccount

> \OpenAPI\Client\Model\Account getAccount($account_id)

Get Account Details

Return the details of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->getAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAnalytics

> \OpenAPI\Client\Model\AccountAnalytics getAccountAnalytics($account_id)

Get Account Analytics

Return the analytics of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->getAccountAnalytics($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccountAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AccountAnalytics**](../Model/AccountAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCost

> \OpenAPI\Client\Model\AccountAdditionalCost getAdditionalCost($additional_cost_id)

Get an additional cost

Returns additional cost for the account by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_cost_id = 56; // int | 

try {
    $result = $apiInstance->getAdditionalCost($additional_cost_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_cost_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCosts

> \OpenAPI\Client\Model\InlineResponse20021 getAdditionalCosts($page_size, $skip, $sort)

List additional costs

Returns all the defined additional costs for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAdditionalCosts($page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAdditionalCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllAccessLogs

> \OpenAPI\Client\Model\InlineResponse2009 getAllAccessLogs($range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort)

Get all access logs

Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAllAccessLogs($range_start, $range_end, $path, $method, $status, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAllAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllRoles

> \OpenAPI\Client\Model\InlineResponse20030 getAllRoles()

Get all roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[**\OpenAPI\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplication

> \OpenAPI\Client\Model\Application getApplication($application_id)

Get Application

Get the application specified by the ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 

try {
    $result = $apiInstance->getApplication($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Application**](../Model/Application.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationApiHealth

> \OpenAPI\Client\Model\ApplicationApiHealth getApplicationApiHealth($application_id)

Get report of health of application API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 

try {
    $result = $apiInstance->getApplicationApiHealth($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationApiHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationApiHealth**](../Model/ApplicationApiHealth.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomer

> \OpenAPI\Client\Model\ApplicationCustomer getApplicationCustomer($application_id, $customer_id)

Get Application Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
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
    echo 'Exception when calling ManagementApi->getApplicationCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **customer_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomers

> \OpenAPI\Client\Model\InlineResponse20012 getApplicationCustomers($application_id)

List Application Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
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
    echo 'Exception when calling ManagementApi->getApplicationCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomersByAttributes

> \OpenAPI\Client\Model\InlineResponse20013 getApplicationCustomersByAttributes($body)

Get a list of the customer profiles that match the given attributes

Gets a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#CustomerProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: integration_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Content-Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Content-Signature', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ApplicationCustomerSearch(); // \OpenAPI\Client\Model\ApplicationCustomerSearch | 

try {
    $result = $apiInstance->getApplicationCustomersByAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApplicationCustomerSearch**](../Model/ApplicationCustomerSearch.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[integration_auth](../../README.md#integration_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventTypes

> \OpenAPI\Client\Model\InlineResponse20019 getApplicationEventTypes($application_id, $page_size, $skip, $sort)

List Applications Event Types

Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/reference/#trackEvent)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getApplicationEventTypes($application_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEvents

> \OpenAPI\Client\Model\InlineResponse20017 getApplicationEvents($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $coupon_code, $referral_code, $rule_query, $campaign_query)

List Applications Events

Lists all events recorded for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$type = 'type_example'; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date
$session = 'session_example'; // string | Session integration ID filter for events. Must be exact match.
$profile = 'profile_example'; // string | Profile integration ID filter for events. Must be exact match.
$customer_name = 'customer_name_example'; // string | Customer name filter for events. Will match substrings case-insensitively.
$customer_email = 'customer_email_example'; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$coupon_code = 'coupon_code_example'; // string | Coupon code
$referral_code = 'referral_code_example'; // string | Referral code
$rule_query = 'rule_query_example'; // string | Rule name filter for events
$campaign_query = 'campaign_query_example'; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEvents($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $coupon_code, $referral_code, $rule_query, $campaign_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **created_before** | **\DateTime**| Only return events created before this date | [optional]
 **created_after** | **\DateTime**| Only return events created after this date | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customer_name** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customer_email** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **coupon_code** | **string**| Coupon code | [optional]
 **referral_code** | **string**| Referral code | [optional]
 **rule_query** | **string**| Rule name filter for events | [optional]
 **campaign_query** | **string**| Campaign name filter for events | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventsWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse20018 getApplicationEventsWithoutTotalCount($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $coupon_code, $referral_code, $rule_query, $campaign_query)

List Applications Events

Lists all events recorded for an application. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$type = 'type_example'; // string | Comma-separated list of types by which to filter events. Must be exact match(es).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date
$session = 'session_example'; // string | Session integration ID filter for events. Must be exact match.
$profile = 'profile_example'; // string | Profile integration ID filter for events. Must be exact match.
$customer_name = 'customer_name_example'; // string | Customer name filter for events. Will match substrings case-insensitively.
$customer_email = 'customer_email_example'; // string | Customer e-mail address filter for events. Will match substrings case-insensitively.
$coupon_code = 'coupon_code_example'; // string | Coupon code
$referral_code = 'referral_code_example'; // string | Referral code
$rule_query = 'rule_query_example'; // string | Rule name filter for events
$campaign_query = 'campaign_query_example'; // string | Campaign name filter for events

try {
    $result = $apiInstance->getApplicationEventsWithoutTotalCount($application_id, $page_size, $skip, $sort, $type, $created_before, $created_after, $session, $profile, $customer_name, $customer_email, $coupon_code, $referral_code, $rule_query, $campaign_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationEventsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **type** | **string**| Comma-separated list of types by which to filter events. Must be exact match(es). | [optional]
 **created_before** | **\DateTime**| Only return events created before this date | [optional]
 **created_after** | **\DateTime**| Only return events created after this date | [optional]
 **session** | **string**| Session integration ID filter for events. Must be exact match. | [optional]
 **profile** | **string**| Profile integration ID filter for events. Must be exact match. | [optional]
 **customer_name** | **string**| Customer name filter for events. Will match substrings case-insensitively. | [optional]
 **customer_email** | **string**| Customer e-mail address filter for events. Will match substrings case-insensitively. | [optional]
 **coupon_code** | **string**| Coupon code | [optional]
 **referral_code** | **string**| Referral code | [optional]
 **rule_query** | **string**| Rule name filter for events | [optional]
 **campaign_query** | **string**| Campaign name filter for events | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSession

> \OpenAPI\Client\Model\ApplicationSession getApplicationSession($application_id, $session_id)

Get Application Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
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
    echo 'Exception when calling ManagementApi->getApplicationSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **session_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationSession**](../Model/ApplicationSession.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSessions

> \OpenAPI\Client\Model\InlineResponse20016 getApplicationSessions($application_id, $page_size, $skip, $sort, $profile, $state, $coupon, $referral, $integration_id, $customer_id)

List Application Sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$profile = 'profile_example'; // string | Profile integration ID filter for sessions. Must be exact match.
$state = 'state_example'; // string | Filter by sessions with this state. Must be exact match.
$coupon = 'coupon_example'; // string | Filter by sessions with this coupon. Must be exact match.
$referral = 'referral_example'; // string | Filter by sessions with this referral. Must be exact match.
$integration_id = 'integration_id_example'; // string | Filter by sessions with this integrationId. Must be exact match.
$customer_id = 'customer_id_example'; // string | Filter by integration ID of the customer for the session

try {
    $result = $apiInstance->getApplicationSessions($application_id, $page_size, $skip, $sort, $profile, $state, $coupon, $referral, $integration_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **profile** | **string**| Profile integration ID filter for sessions. Must be exact match. | [optional]
 **state** | **string**| Filter by sessions with this state. Must be exact match. | [optional]
 **coupon** | **string**| Filter by sessions with this coupon. Must be exact match. | [optional]
 **referral** | **string**| Filter by sessions with this referral. Must be exact match. | [optional]
 **integration_id** | **string**| Filter by sessions with this integrationId. Must be exact match. | [optional]
 **customer_id** | **string**| Filter by integration ID of the customer for the session | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplications

> \OpenAPI\Client\Model\InlineResponse2002 getApplications($page_size, $skip, $sort)

List Applications

List all application in the current account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getApplications($page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttribute

> \OpenAPI\Client\Model\Attribute getAttribute($attribute_id)

Get a custom attribute

Returns custom attribute for the account by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 

try {
    $result = $apiInstance->getAttribute($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttributes

> \OpenAPI\Client\Model\InlineResponse20020 getAttributes($page_size, $skip, $sort)

List custom attributes

Returns all the defined custom attributes for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getAttributes($page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaign

> \OpenAPI\Client\Model\Campaign getCampaign($application_id, $campaign_id)

Get a Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 

try {
    $result = $apiInstance->getCampaign($application_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignAnalytics

> \OpenAPI\Client\Model\InlineResponse20011 getCampaignAnalytics($application_id, $campaign_id, $range_start, $range_end, $granularity)

Get analytics of campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$granularity = 'granularity_example'; // string | The time interval between the results in the returned time-series.

try {
    $result = $apiInstance->getCampaignAnalytics($application_id, $campaign_id, $range_start, $range_end, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **granularity** | **string**| The time interval between the results in the returned time-series. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignByAttributes

> \OpenAPI\Client\Model\InlineResponse2003 getCampaignByAttributes($application_id, $body, $page_size, $skip, $sort, $campaign_state)

Get a list of all campaigns that match the given attributes

Gets a list of all the campaigns that exactly match a set of attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \OpenAPI\Client\Model\CampaignSearch(); // \OpenAPI\Client\Model\CampaignSearch | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$campaign_state = 'campaign_state_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->getCampaignByAttributes($application_id, $body, $page_size, $skip, $sort, $campaign_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\CampaignSearch**](../Model/CampaignSearch.md)|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **campaign_state** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignSet

> \OpenAPI\Client\Model\CampaignSet getCampaignSet($application_id)

List CampaignSet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 

try {
    $result = $apiInstance->getCampaignSet($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\CampaignSet**](../Model/CampaignSet.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaigns

> \OpenAPI\Client\Model\InlineResponse2003 getCampaigns($application_id, $page_size, $skip, $sort, $campaign_state, $name, $tags, $created_before, $created_after)

List your Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$campaign_state = 'campaign_state_example'; // string | Filter results by the state of the campaign.
$name = 'name_example'; // string | Filter results performing case-insensitive matching against the name of the campaign.
$tags = 'tags_example'; // string | Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \"name\" query parameter, a logical OR will be performed to search both tags and name for the provided values
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp.

try {
    $result = $apiInstance->getCampaigns($application_id, $page_size, $skip, $sort, $campaign_state, $name, $tags, $created_before, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **campaign_state** | **string**| Filter results by the state of the campaign. | [optional]
 **name** | **string**| Filter results performing case-insensitive matching against the name of the campaign. | [optional]
 **tags** | **string**| Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \&quot;name\&quot; query parameter, a logical OR will be performed to search both tags and name for the provided values | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChanges

> \OpenAPI\Client\Model\InlineResponse20027 getChanges($page_size, $skip, $sort, $application_id, $created_before, $created_after, $with_total_result_size, $include_old)

Get audit log for an account

Get list of changes caused by API calls for an account. Only accessible for admins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$application_id = 56; // int | 
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp.
$with_total_result_size = True; // bool | When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query.
$include_old = True; // bool | When this flag is set to false, the state without the change will not be returned. The default value is true.

try {
    $result = $apiInstance->getChanges($page_size, $skip, $sort, $application_id, $created_before, $created_after, $with_total_result_size, $include_old);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **application_id** | **int**|  | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. | [optional]
 **with_total_result_size** | **bool**| When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets. With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero. With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query. | [optional]
 **include_old** | **bool**| When this flag is set to false, the state without the change will not be returned. The default value is true. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCoupons

> \OpenAPI\Client\Model\InlineResponse2001 getCoupons($application_id, $campaign_id, $page_size, $skip, $sort, $value, $created_before, $created_after, $starts_after, $starts_before, $expires_after, $expires_before, $valid, $batch_id, $usable, $referral_id, $recipient_integration_id, $exact_match)

List Coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$starts_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$expires_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$expires_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $result = $apiInstance->getCoupons($application_id, $campaign_id, $page_size, $skip, $sort, $value, $created_before, $created_after, $starts_after, $starts_before, $expires_after, $expires_before, $valid, $batch_id, $usable, $referral_id, $recipient_integration_id, $exact_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **starts_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **starts_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **expires_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **expires_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsByAttributes

> \OpenAPI\Client\Model\InlineResponse2001 getCouponsByAttributes($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id)

Get a list of the coupons that match the given attributes

Gets a list of all the coupons that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\CouponSearch(); // \OpenAPI\Client\Model\CouponSearch | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->getCouponsByAttributes($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\CouponSearch**](../Model/CouponSearch.md)|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsByAttributesApplicationWide

> \OpenAPI\Client\Model\InlineResponse2001 getCouponsByAttributesApplicationWide($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state)

Get a list of the coupons that match the given attributes in all active campaigns of an application

Gets a list of all the coupons with attributes matching the query criteria Application wide

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \OpenAPI\Client\Model\CouponSearch(); // \OpenAPI\Client\Model\CouponSearch | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaign_state = 'campaign_state_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->getCouponsByAttributesApplicationWide($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsByAttributesApplicationWide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\CouponSearch**](../Model/CouponSearch.md)|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaign_state** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse2005 getCouponsWithoutTotalCount($application_id, $campaign_id, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match)

List Coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code

try {
    $result = $apiInstance->getCouponsWithoutTotalCount($application_id, $campaign_id, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCouponsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReport

> \OpenAPI\Client\Model\CustomerActivityReport getCustomerActivityReport($range_start, $range_end, $application_id, $customer_id, $page_size, $skip)

Get Activity Report for Single Customer

Fetch summary report for single application customer based on a time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$application_id = 56; // int | 
$customer_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerActivityReport($range_start, $range_end, $application_id, $customer_id, $page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReport: ', $e->getMessage(), PHP_EOL;
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
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerActivityReport**](../Model/CustomerActivityReport.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReports

> \OpenAPI\Client\Model\InlineResponse20014 getCustomerActivityReports($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$name = 'name_example'; // string | Only return reports matching the customer name
$integration_id = 'integration_id_example'; // string | Only return reports matching the integrationId
$campaign_name = 'campaign_name_example'; // string | Only return reports matching the campaignName
$advocate_name = 'advocate_name_example'; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReports($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integration_id** | **string**| Only return reports matching the integrationId | [optional]
 **campaign_name** | **string**| Only return reports matching the campaignName | [optional]
 **advocate_name** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReportsWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse20015 getCustomerActivityReportsWithoutTotalCount($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range. Instead of having the total number of results in the response, this endpoint only if there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp, must be an RFC3339 timestamp string
$range_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp, must be an RFC3339 timestamp string
$application_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$name = 'name_example'; // string | Only return reports matching the customer name
$integration_id = 'integration_id_example'; // string | Only return reports matching the integrationId
$campaign_name = 'campaign_name_example'; // string | Only return reports matching the campaignName
$advocate_name = 'advocate_name_example'; // string | Only return reports matching the current customer referrer name

try {
    $result = $apiInstance->getCustomerActivityReportsWithoutTotalCount($range_start, $range_end, $application_id, $page_size, $skip, $sort, $name, $integration_id, $campaign_name, $advocate_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerActivityReportsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **range_start** | **\DateTime**| Only return results from after this timestamp, must be an RFC3339 timestamp string |
 **range_end** | **\DateTime**| Only return results from before this timestamp, must be an RFC3339 timestamp string |
 **application_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integration_id** | **string**| Only return reports matching the integrationId | [optional]
 **campaign_name** | **string**| Only return reports matching the campaignName | [optional]
 **advocate_name** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerAnalytics

> \OpenAPI\Client\Model\CustomerAnalytics getCustomerAnalytics($application_id, $customer_id, $page_size, $skip, $sort)

Get Analytics Report for a Customer

Fetch analytics for single application customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$customer_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getCustomerAnalytics($application_id, $customer_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **customer_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomerAnalytics**](../Model/CustomerAnalytics.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> \OpenAPI\Client\Model\ApplicationCustomer getCustomerProfile($application_id, $customer_id)

Get Customer Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$customer_id = 56; // int | 

try {
    $result = $apiInstance->getCustomerProfile($application_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **customer_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfiles

> \OpenAPI\Client\Model\InlineResponse20013 getCustomerProfiles($page_size, $skip)

List Customer Profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomerProfiles($page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomersByAttributes

> \OpenAPI\Client\Model\InlineResponse20013 getCustomersByAttributes($body, $page_size, $skip)

Get a list of the customer profiles that match the given attributes

Gets a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#CustomerProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ApplicationCustomerSearch(); // \OpenAPI\Client\Model\ApplicationCustomerSearch | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getCustomersByAttributes($body, $page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApplicationCustomerSearch**](../Model/ApplicationCustomerSearch.md)|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventTypes

> \OpenAPI\Client\Model\InlineResponse20025 getEventTypes($application_ids, $name, $include_old_versions, $page_size, $skip, $sort)

List Event Types

Fetch all event type definitions for your account. Each event type can be

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_ids = 'application_ids_example'; // string | Filter by one or more application ids separated by comma
$name = 'name_example'; // string | Filter results to event types with the given name. This parameter implies `includeOldVersions`.
$include_old_versions = false; // bool | Include all versions of every event type.
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getEventTypes($application_ids, $name, $include_old_versions, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_ids** | **string**| Filter by one or more application ids separated by comma | [optional]
 **name** | **string**| Filter results to event types with the given name. This parameter implies &#x60;includeOldVersions&#x60;. | [optional]
 **include_old_versions** | **bool**| Include all versions of every event type. | [optional] [default to false]
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExports

> \OpenAPI\Client\Model\InlineResponse20028 getExports($page_size, $skip, $application_id, $campaign_id, $entity)

Get Exports

Get a list of all past exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$entity = 'entity_example'; // string | The name of the entity type that was exported.

try {
    $result = $apiInstance->getExports($page_size, $skip, $application_id, $campaign_id, $entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **application_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **entity** | **string**| The name of the entity type that was exported. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getImports

> \OpenAPI\Client\Model\InlineResponse20029 getImports($page_size, $skip)

Get Imports

Get a list of all past imports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getImports($page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getImports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPoints

> \OpenAPI\Client\Model\LoyaltyLedger getLoyaltyPoints($program_id, $integration_id)

get the Loyalty Ledger for this integrationID

Get the Loyalty Ledger for this profile integration ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | The identifier for the application, must be unique within the account.
$integration_id = 'integration_id_example'; // string | The identifier for the application, must be unique within the account.

try {
    $result = $apiInstance->getLoyaltyPoints($program_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**| The identifier for the application, must be unique within the account. |
 **integration_id** | **string**| The identifier for the application, must be unique within the account. |

### Return type

[**\OpenAPI\Client\Model\LoyaltyLedger**](../Model/LoyaltyLedger.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyProgram

> \OpenAPI\Client\Model\LoyaltyProgram getLoyaltyProgram($program_id)

Get a loyalty program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | 

try {
    $result = $apiInstance->getLoyaltyProgram($program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPrograms

> \OpenAPI\Client\Model\InlineResponse2008 getLoyaltyPrograms()

List all loyalty Programs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
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

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferrals

> \OpenAPI\Client\Model\InlineResponse2006 getReferrals($application_id, $campaign_id, $page_size, $skip, $sort, $code, $created_before, $created_after, $valid, $usable, $advocate)

List Referrals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only referrals where `usageCounter < usageLimit` will be returned, \"false\" will return only referrals where `usageCounter >= usageLimit`.
$advocate = 'advocate_example'; // string | Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

try {
    $result = $apiInstance->getReferrals($application_id, $campaign_id, $page_size, $skip, $sort, $code, $created_before, $created_after, $valid, $usable, $advocate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferralsWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse2007 getReferralsWithoutTotalCount($application_id, $campaign_id, $page_size, $skip, $sort, $code, $created_before, $created_after, $valid, $usable, $advocate)

List Referrals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only referrals where `usageCounter < usageLimit` will be returned, \"false\" will return only referrals where `usageCounter >= usageLimit`.
$advocate = 'advocate_example'; // string | Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

try {
    $result = $apiInstance->getReferralsWithoutTotalCount($application_id, $campaign_id, $page_size, $skip, $sort, $code, $created_before, $created_after, $valid, $usable, $advocate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getReferralsWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRole

> \OpenAPI\Client\Model\Role getRole($role_id)

Get information for the specified role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | 

try {
    $result = $apiInstance->getRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRuleset

> \OpenAPI\Client\Model\Ruleset getRuleset($application_id, $campaign_id, $ruleset_id)

Get a Ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$ruleset_id = 56; // int | 

try {
    $result = $apiInstance->getRuleset($application_id, $campaign_id, $ruleset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **ruleset_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRulesets

> \OpenAPI\Client\Model\InlineResponse2004 getRulesets($application_id, $campaign_id, $page_size, $skip, $sort)

List Campaign Rulesets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getRulesets($application_id, $campaign_id, $page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \OpenAPI\Client\Model\User getUser($user_id)

Get a single User

Retrieves the data (including an invitation code) for a user. Non-admin users can only get themselves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \OpenAPI\Client\Model\InlineResponse20026 getUsers($page_size, $skip, $sort)

List Users in your account

Retrieve all users in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

try {
    $result = $apiInstance->getUsers($page_size, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhook

> \OpenAPI\Client\Model\Webhook getWebhook($webhook_id)

Get Webhook

Returns an webhook by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 56; // int | 

try {
    $result = $apiInstance->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookActivationLogs

> \OpenAPI\Client\Model\InlineResponse20023 getWebhookActivationLogs($page_size, $skip, $sort, $integration_request_uuid, $webhook_id, $application_id, $campaign_id, $created_before, $created_after)

List Webhook activation Log Entries

Webhook activation log entries would be created as soon as an integration request triggered an effect with a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$integration_request_uuid = 'integration_request_uuid_example'; // string | Filter results by integration request UUID.
$webhook_id = 3.4; // float | Filter results by Webhook.
$application_id = 3.4; // float | 
$campaign_id = 3.4; // float | Filter results by campaign.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

try {
    $result = $apiInstance->getWebhookActivationLogs($page_size, $skip, $sort, $integration_request_uuid, $webhook_id, $application_id, $campaign_id, $created_before, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookActivationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **integration_request_uuid** | **string**| Filter results by integration request UUID. | [optional]
 **webhook_id** | **float**| Filter results by Webhook. | [optional]
 **application_id** | **float**|  | [optional]
 **campaign_id** | **float**| Filter results by campaign. | [optional]
 **created_before** | **\DateTime**| Only return events created before this date. | [optional]
 **created_after** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookLogs

> \OpenAPI\Client\Model\InlineResponse20024 getWebhookLogs($page_size, $skip, $sort, $status, $webhook_id, $application_id, $campaign_id, $request_uuid, $created_before, $created_after)

List Webhook Log Entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$webhook_id = 3.4; // float | Filter results by Webhook.
$application_id = 3.4; // float | 
$campaign_id = 3.4; // float | Filter results by campaign.
$request_uuid = 'request_uuid_example'; // string | Filter results by request UUID.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

try {
    $result = $apiInstance->getWebhookLogs($page_size, $skip, $sort, $status, $webhook_id, $application_id, $campaign_id, $request_uuid, $created_before, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **webhook_id** | **float**| Filter results by Webhook. | [optional]
 **application_id** | **float**|  | [optional]
 **campaign_id** | **float**| Filter results by campaign. | [optional]
 **request_uuid** | **string**| Filter results by request UUID. | [optional]
 **created_before** | **\DateTime**| Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **created_after** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhooks

> \OpenAPI\Client\Model\InlineResponse20022 getWebhooks($application_ids, $sort, $page_size, $skip)

List Webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_ids = 'application_ids_example'; // string | Filter by one or more application ids separated by comma
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.

try {
    $result = $apiInstance->getWebhooks($application_ids, $sort, $page_size, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_ids** | **string**| Filter by one or more application ids separated by comma | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeLoyaltyPoints

> removeLoyaltyPoints($program_id, $integration_id, $body)

Deduct points in a certain loyalty program for the specified customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | 
$integration_id = 'integration_id_example'; // string | 
$body = new \OpenAPI\Client\Model\LoyaltyPoints(); // \OpenAPI\Client\Model\LoyaltyPoints | 

try {
    $apiInstance->removeLoyaltyPoints($program_id, $integration_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->removeLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**|  |
 **integration_id** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\LoyaltyPoints**](../Model/LoyaltyPoints.md)|  |

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

> \OpenAPI\Client\Model\NewPassword resetPassword($body)

Reset password

Consumes the supplied password reset token and updates the password for the associated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewPassword(); // \OpenAPI\Client\Model\NewPassword | 

try {
    $result = $apiInstance->resetPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewPassword**](../Model/NewPassword.md)|  |

### Return type

[**\OpenAPI\Client\Model\NewPassword**](../Model/NewPassword.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvanced

> \OpenAPI\Client\Model\InlineResponse2001 searchCouponsAdvanced($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id)

Get a list of the coupons that match the given attributes

Gets a list of all the coupons with attributes matching the query criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \stdClass; // object | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->searchCouponsAdvanced($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | **object**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWide

> \OpenAPI\Client\Model\InlineResponse2001 searchCouponsAdvancedApplicationWide($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state)

Get a list of the coupons that match the given attributes in all active campaigns of an application

Gets a list of all the coupons with attributes matching the query criteria in all active campaigns of an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \stdClass; // object | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaign_state = 'campaign_state_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->searchCouponsAdvancedApplicationWide($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedApplicationWide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | **object**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaign_state** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWideWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse2005 searchCouponsAdvancedApplicationWideWithoutTotalCount($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state)

Get a list of the coupons that match the given attributes in all active campaigns of an application

Gets a list of all the coupons with attributes matching the query criteria in all active campaigns of an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \stdClass; // object | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaign_state = 'campaign_state_example'; // string | Filter results by the state of the campaign.

try {
    $result = $apiInstance->searchCouponsAdvancedApplicationWideWithoutTotalCount($application_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $batch_id, $exact_match, $campaign_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedApplicationWideWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | **object**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaign_state** | **string**| Filter results by the state of the campaign. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedWithoutTotalCount

> \OpenAPI\Client\Model\InlineResponse2005 searchCouponsAdvancedWithoutTotalCount($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id)

Get a list of the coupons that match the given attributes

Gets a list of all the coupons with attributes matching the query criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \stdClass; // object | 
$page_size = 56; // int | The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
$skip = 56; // int | Skips the given number of items when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referral_id = 56; // int | Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
$recipient_integration_id = 'recipient_integration_id_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$exact_match = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$batch_id = 'batch_id_example'; // string | Filter results by batches of coupons

try {
    $result = $apiInstance->searchCouponsAdvancedWithoutTotalCount($application_id, $campaign_id, $body, $page_size, $skip, $sort, $value, $created_before, $created_after, $valid, $usable, $referral_id, $recipient_integration_id, $exact_match, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->searchCouponsAdvancedWithoutTotalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | **object**|  |
 **page_size** | **int**| The number of items to include in this response. When omitted, the maximum value of 1000 will be used. | [optional]
 **skip** | **int**| Skips the given number of items when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with &#x60;-&#x60; to sort in descending order. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **created_before** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **created_after** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referral_id** | **int**| Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code. | [optional]
 **recipient_integration_id** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exact_match** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batch_id** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAdditionalCost

> \OpenAPI\Client\Model\AccountAdditionalCost updateAdditionalCost($additional_cost_id, $body)

Update an additional cost

Updates an existing additional cost. Once created, the only property of an additional cost that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_cost_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewAdditionalCost(); // \OpenAPI\Client\Model\NewAdditionalCost | 

try {
    $result = $apiInstance->updateAdditionalCost($additional_cost_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_cost_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAttribute

> \OpenAPI\Client\Model\Attribute updateAttribute($attribute_id, $body)

Update a custom attribute

Updates an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations. E.g. if you have a customer profile attribute with the name `region`, and your integration is sending `attributes.region` with customer profile updates, changing the name to `locale` would cause the integration requests to begin failing.  If you **really** need to change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute. Then delete the old attribute when you are confident you have migrated any needed data from the old attribute to the new one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewAttribute(); // \OpenAPI\Client\Model\NewAttribute | 

try {
    $result = $apiInstance->updateAttribute($attribute_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewAttribute**](../Model/NewAttribute.md)|  |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaign

> \OpenAPI\Client\Model\Campaign updateCampaign($application_id, $campaign_id, $body)

Update a Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\UpdateCampaign(); // \OpenAPI\Client\Model\UpdateCampaign | 

try {
    $result = $apiInstance->updateCampaign($application_id, $campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\UpdateCampaign**](../Model/UpdateCampaign.md)|  |

### Return type

[**\OpenAPI\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaignSet

> \OpenAPI\Client\Model\CampaignSet updateCampaignSet($application_id, $body)

Update a Campaign Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewCampaignSet(); // \OpenAPI\Client\Model\NewCampaignSet | 

try {
    $result = $apiInstance->updateCampaignSet($application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCampaignSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewCampaignSet**](../Model/NewCampaignSet.md)|  |

### Return type

[**\OpenAPI\Client\Model\CampaignSet**](../Model/CampaignSet.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCoupon

> \OpenAPI\Client\Model\Coupon updateCoupon($application_id, $campaign_id, $coupon_id, $body)

Update a Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$coupon_id = 'coupon_id_example'; // string | The ID of the coupon code to update
$body = new \OpenAPI\Client\Model\UpdateCoupon(); // \OpenAPI\Client\Model\UpdateCoupon | 

try {
    $result = $apiInstance->updateCoupon($application_id, $campaign_id, $coupon_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **coupon_id** | **string**| The ID of the coupon code to update |
 **body** | [**\OpenAPI\Client\Model\UpdateCoupon**](../Model/UpdateCoupon.md)|  |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCouponBatch

> updateCouponBatch($application_id, $campaign_id, $body)

Update a Batch of Coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$body = new \OpenAPI\Client\Model\UpdateCouponBatch(); // \OpenAPI\Client\Model\UpdateCouponBatch | 

try {
    $apiInstance->updateCouponBatch($application_id, $campaign_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCouponBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\UpdateCouponBatch**](../Model/UpdateCouponBatch.md)|  |

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


## updateRuleset

> \OpenAPI\Client\Model\Ruleset updateRuleset($application_id, $campaign_id, $ruleset_id, $body)

Update a Ruleset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: manager_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | 
$campaign_id = 56; // int | 
$ruleset_id = 56; // int | 
$body = new \OpenAPI\Client\Model\NewRuleset(); // \OpenAPI\Client\Model\NewRuleset | 

try {
    $result = $apiInstance->updateRuleset($application_id, $campaign_id, $ruleset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**|  |
 **campaign_id** | **int**|  |
 **ruleset_id** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewRuleset**](../Model/NewRuleset.md)|  |

### Return type

[**\OpenAPI\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

