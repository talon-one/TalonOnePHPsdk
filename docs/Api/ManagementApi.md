# TalonOne\Client\ManagementApi

All URIs are relative to *https://yourbaseurl.talon.one*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoyaltyCardPoints**](ManagementApi.md#addLoyaltyCardPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/add_points | Add points to card
[**addLoyaltyPoints**](ManagementApi.md#addLoyaltyPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/add_points | Add points to customer profile
[**copyCampaignToApplications**](ManagementApi.md#copyCampaignToApplications) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/copy | Copy the campaign into the specified Application
[**createAccountCollection**](ManagementApi.md#createAccountCollection) | **POST** /v1/collections | Create account-level collection
[**createAdditionalCost**](ManagementApi.md#createAdditionalCost) | **POST** /v1/additional_costs | Create additional cost
[**createAttribute**](ManagementApi.md#createAttribute) | **POST** /v1/attributes | Create custom attribute
[**createCampaignFromTemplate**](ManagementApi.md#createCampaignFromTemplate) | **POST** /v1/applications/{applicationId}/create_campaign_from_template | Create campaign from campaign template
[**createCollection**](ManagementApi.md#createCollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | Create campaign-level collection
[**createCoupons**](ManagementApi.md#createCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Create coupons
[**createCouponsAsync**](ManagementApi.md#createCouponsAsync) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_async | Create coupons asynchronously
[**createCouponsForMultipleRecipients**](ManagementApi.md#createCouponsForMultipleRecipients) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_with_recipients | Create coupons for multiple recipients
[**createPasswordRecoveryEmail**](ManagementApi.md#createPasswordRecoveryEmail) | **POST** /v1/password_recovery_emails | Request a password reset
[**createSession**](ManagementApi.md#createSession) | **POST** /v1/sessions | Create session
[**createStore**](ManagementApi.md#createStore) | **POST** /v1/applications/{applicationId}/stores | Create store
[**deductLoyaltyCardPoints**](ManagementApi.md#deductLoyaltyCardPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/deduct_points | Deduct points from card
[**deleteAccountCollection**](ManagementApi.md#deleteAccountCollection) | **DELETE** /v1/collections/{collectionId} | Delete account-level collection
[**deleteCampaign**](ManagementApi.md#deleteCampaign) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId} | Delete campaign
[**deleteCollection**](ManagementApi.md#deleteCollection) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Delete campaign-level collection
[**deleteCoupon**](ManagementApi.md#deleteCoupon) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Delete coupon
[**deleteCoupons**](ManagementApi.md#deleteCoupons) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Delete coupons
[**deleteLoyaltyCard**](ManagementApi.md#deleteLoyaltyCard) | **DELETE** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Delete loyalty card
[**deleteReferral**](ManagementApi.md#deleteReferral) | **DELETE** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Delete referral
[**deleteStore**](ManagementApi.md#deleteStore) | **DELETE** /v1/applications/{applicationId}/stores/{storeId} | Delete store
[**destroySession**](ManagementApi.md#destroySession) | **DELETE** /v1/sessions | Destroy session
[**exportAccountCollectionItems**](ManagementApi.md#exportAccountCollectionItems) | **GET** /v1/collections/{collectionId}/export | Export account-level collection&#39;s items
[**exportCollectionItems**](ManagementApi.md#exportCollectionItems) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/export | Export campaign-level collection&#39;s items
[**exportCoupons**](ManagementApi.md#exportCoupons) | **GET** /v1/applications/{applicationId}/export_coupons | Export coupons
[**exportCustomerSessions**](ManagementApi.md#exportCustomerSessions) | **GET** /v1/applications/{applicationId}/export_customer_sessions | Export customer sessions
[**exportCustomersTiers**](ManagementApi.md#exportCustomersTiers) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customers_tiers | Export customers&#39; tier data
[**exportEffects**](ManagementApi.md#exportEffects) | **GET** /v1/applications/{applicationId}/export_effects | Export triggered effects
[**exportLoyaltyBalance**](ManagementApi.md#exportLoyaltyBalance) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customer_balance | Export customer loyalty balance to CSV
[**exportLoyaltyBalances**](ManagementApi.md#exportLoyaltyBalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_customer_balances | Export customer loyalty balances
[**exportLoyaltyCardBalances**](ManagementApi.md#exportLoyaltyCardBalances) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/export_card_balances | Export all card transaction logs
[**exportLoyaltyCardLedger**](ManagementApi.md#exportLoyaltyCardLedger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/export_log | Export card&#39;s ledger log
[**exportLoyaltyLedger**](ManagementApi.md#exportLoyaltyLedger) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/export_log | Export customer&#39;s transaction logs
[**exportPoolGiveaways**](ManagementApi.md#exportPoolGiveaways) | **GET** /v1/giveaways/pools/{poolId}/export | Export giveaway codes of a giveaway pool
[**exportReferrals**](ManagementApi.md#exportReferrals) | **GET** /v1/applications/{applicationId}/export_referrals | Export referrals
[**getAccessLogsWithoutTotalCount**](ManagementApi.md#getAccessLogsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/access_logs/no_total | Get access logs for Application
[**getAccount**](ManagementApi.md#getAccount) | **GET** /v1/accounts/{accountId} | Get account details
[**getAccountAnalytics**](ManagementApi.md#getAccountAnalytics) | **GET** /v1/accounts/{accountId}/analytics | Get account analytics
[**getAccountCollection**](ManagementApi.md#getAccountCollection) | **GET** /v1/collections/{collectionId} | Get account-level collection
[**getAdditionalCost**](ManagementApi.md#getAdditionalCost) | **GET** /v1/additional_costs/{additionalCostId} | Get additional cost
[**getAdditionalCosts**](ManagementApi.md#getAdditionalCosts) | **GET** /v1/additional_costs | List additional costs
[**getAllAccessLogs**](ManagementApi.md#getAllAccessLogs) | **GET** /v1/access_logs | List access logs
[**getAllRoles**](ManagementApi.md#getAllRoles) | **GET** /v1/roles | List roles
[**getApplication**](ManagementApi.md#getApplication) | **GET** /v1/applications/{applicationId} | Get Application
[**getApplicationApiHealth**](ManagementApi.md#getApplicationApiHealth) | **GET** /v1/applications/{applicationId}/health_report | Get Application health
[**getApplicationCustomer**](ManagementApi.md#getApplicationCustomer) | **GET** /v1/applications/{applicationId}/customers/{customerId} | Get application&#39;s customer
[**getApplicationCustomerFriends**](ManagementApi.md#getApplicationCustomerFriends) | **GET** /v1/applications/{applicationId}/profile/{integrationId}/friends | List friends referred by customer profile
[**getApplicationCustomers**](ManagementApi.md#getApplicationCustomers) | **GET** /v1/applications/{applicationId}/customers | List application&#39;s customers
[**getApplicationCustomersByAttributes**](ManagementApi.md#getApplicationCustomersByAttributes) | **POST** /v1/applications/{applicationId}/customer_search | List application customers matching the given attributes
[**getApplicationEventTypes**](ManagementApi.md#getApplicationEventTypes) | **GET** /v1/applications/{applicationId}/event_types | List Applications event types
[**getApplicationEventsWithoutTotalCount**](ManagementApi.md#getApplicationEventsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/events/no_total | List Applications events
[**getApplicationSession**](ManagementApi.md#getApplicationSession) | **GET** /v1/applications/{applicationId}/sessions/{sessionId} | Get Application session
[**getApplicationSessions**](ManagementApi.md#getApplicationSessions) | **GET** /v1/applications/{applicationId}/sessions | List Application sessions
[**getApplications**](ManagementApi.md#getApplications) | **GET** /v1/applications | List Applications
[**getAttribute**](ManagementApi.md#getAttribute) | **GET** /v1/attributes/{attributeId} | Get custom attribute
[**getAttributes**](ManagementApi.md#getAttributes) | **GET** /v1/attributes | List custom attributes
[**getAudiences**](ManagementApi.md#getAudiences) | **GET** /v1/audiences | List audiences
[**getCampaign**](ManagementApi.md#getCampaign) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId} | Get campaign
[**getCampaignAnalytics**](ManagementApi.md#getCampaignAnalytics) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/analytics | Get analytics of campaigns
[**getCampaignByAttributes**](ManagementApi.md#getCampaignByAttributes) | **POST** /v1/applications/{applicationId}/campaigns_search | List campaigns that match the given attributes
[**getCampaignTemplates**](ManagementApi.md#getCampaignTemplates) | **GET** /v1/campaign_templates | List campaign templates
[**getCampaigns**](ManagementApi.md#getCampaigns) | **GET** /v1/applications/{applicationId}/campaigns | List campaigns
[**getChanges**](ManagementApi.md#getChanges) | **GET** /v1/changes | Get audit logs for an account
[**getCollection**](ManagementApi.md#getCollection) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Get campaign-level collection
[**getCollectionItems**](ManagementApi.md#getCollectionItems) | **GET** /v1/collections/{collectionId}/items | Get collection items
[**getCouponsWithoutTotalCount**](ManagementApi.md#getCouponsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/no_total | List coupons
[**getCustomerActivityReport**](ManagementApi.md#getCustomerActivityReport) | **GET** /v1/applications/{applicationId}/customer_activity_reports/{customerId} | Get customer&#39;s activity report
[**getCustomerActivityReportsWithoutTotalCount**](ManagementApi.md#getCustomerActivityReportsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/customer_activity_reports/no_total | Get Activity Reports for Application Customers
[**getCustomerAnalytics**](ManagementApi.md#getCustomerAnalytics) | **GET** /v1/applications/{applicationId}/customers/{customerId}/analytics | Get customer&#39;s analytics report
[**getCustomerProfile**](ManagementApi.md#getCustomerProfile) | **GET** /v1/customers/{customerId} | Get customer profile
[**getCustomerProfiles**](ManagementApi.md#getCustomerProfiles) | **GET** /v1/customers/no_total | List customer profiles
[**getCustomersByAttributes**](ManagementApi.md#getCustomersByAttributes) | **POST** /v1/customer_search/no_total | List customer profiles matching the given attributes
[**getEventTypes**](ManagementApi.md#getEventTypes) | **GET** /v1/event_types | List event types
[**getExports**](ManagementApi.md#getExports) | **GET** /v1/exports | Get exports
[**getLoyaltyCard**](ManagementApi.md#getLoyaltyCard) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Get loyalty card
[**getLoyaltyCardTransactionLogs**](ManagementApi.md#getLoyaltyCardTransactionLogs) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/logs | List card&#39;s transactions
[**getLoyaltyCards**](ManagementApi.md#getLoyaltyCards) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/cards | List loyalty cards
[**getLoyaltyPoints**](ManagementApi.md#getLoyaltyPoints) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId} | Get customer&#39;s full loyalty ledger
[**getLoyaltyProgram**](ManagementApi.md#getLoyaltyProgram) | **GET** /v1/loyalty_programs/{loyaltyProgramId} | Get loyalty program
[**getLoyaltyProgramTransactions**](ManagementApi.md#getLoyaltyProgramTransactions) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/transactions | List loyalty program transactions
[**getLoyaltyPrograms**](ManagementApi.md#getLoyaltyPrograms) | **GET** /v1/loyalty_programs | List loyalty programs
[**getLoyaltyStatistics**](ManagementApi.md#getLoyaltyStatistics) | **GET** /v1/loyalty_programs/{loyaltyProgramId}/statistics | Get loyalty program statistics
[**getReferralsWithoutTotalCount**](ManagementApi.md#getReferralsWithoutTotalCount) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/no_total | List referrals
[**getRole**](ManagementApi.md#getRole) | **GET** /v1/roles/{roleId} | Get role
[**getRuleset**](ManagementApi.md#getRuleset) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets/{rulesetId} | Get ruleset
[**getRulesets**](ManagementApi.md#getRulesets) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/rulesets | List campaign rulesets
[**getStore**](ManagementApi.md#getStore) | **GET** /v1/applications/{applicationId}/stores/{storeId} | Get store
[**getUser**](ManagementApi.md#getUser) | **GET** /v1/users/{userId} | Get user
[**getUsers**](ManagementApi.md#getUsers) | **GET** /v1/users | List users in account
[**getWebhook**](ManagementApi.md#getWebhook) | **GET** /v1/webhooks/{webhookId} | Get webhook
[**getWebhookActivationLogs**](ManagementApi.md#getWebhookActivationLogs) | **GET** /v1/webhook_activation_logs | List webhook activation log entries
[**getWebhookLogs**](ManagementApi.md#getWebhookLogs) | **GET** /v1/webhook_logs | List webhook log entries
[**getWebhooks**](ManagementApi.md#getWebhooks) | **GET** /v1/webhooks | List webhooks
[**importAccountCollection**](ManagementApi.md#importAccountCollection) | **POST** /v1/collections/{collectionId}/import | Import data into existing account-level collection
[**importAllowedList**](ManagementApi.md#importAllowedList) | **POST** /v1/attributes/{attributeId}/allowed_list/import | Import allowed values for attribute
[**importCollection**](ManagementApi.md#importCollection) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId}/import | Import data into existing campaign-level collection
[**importCoupons**](ManagementApi.md#importCoupons) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_coupons | Import coupons
[**importLoyaltyCards**](ManagementApi.md#importLoyaltyCards) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_cards | Import loyalty cards
[**importLoyaltyCustomersTiers**](ManagementApi.md#importLoyaltyCustomersTiers) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_customers_tiers | Import customers into loyalty tiers
[**importLoyaltyPoints**](ManagementApi.md#importLoyaltyPoints) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/import_points | Import loyalty points
[**importPoolGiveaways**](ManagementApi.md#importPoolGiveaways) | **POST** /v1/giveaways/pools/{poolId}/import | Import giveaway codes into a giveaway pool
[**importReferrals**](ManagementApi.md#importReferrals) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/import_referrals | Import referrals
[**listAccountCollections**](ManagementApi.md#listAccountCollections) | **GET** /v1/collections | List collections in account
[**listCatalogItems**](ManagementApi.md#listCatalogItems) | **GET** /v1/catalogs/{catalogId}/items | List items in a catalog
[**listCollections**](ManagementApi.md#listCollections) | **GET** /v1/applications/{applicationId}/campaigns/{campaignId}/collections | List collections in campaign
[**listCollectionsInApplication**](ManagementApi.md#listCollectionsInApplication) | **GET** /v1/applications/{applicationId}/collections | List collections in Application
[**listStores**](ManagementApi.md#listStores) | **GET** /v1/applications/{applicationId}/stores | List stores
[**notificationActivation**](ManagementApi.md#notificationActivation) | **PUT** /v1/notifications/{notificationId}/activation | Activate or deactivate notification
[**postAddedDeductedPointsNotification**](ManagementApi.md#postAddedDeductedPointsNotification) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/notifications/added_deducted_points | Create notification about added or deducted loyalty points
[**postCatalogsStrikethroughNotification**](ManagementApi.md#postCatalogsStrikethroughNotification) | **POST** /v1/applications/{applicationId}/catalogs/notifications/strikethrough | Create strikethrough notification
[**postPendingPointsNotification**](ManagementApi.md#postPendingPointsNotification) | **POST** /v1/loyalty_programs/{loyaltyProgramId}/notifications/pending_points | Create notification about pending loyalty points
[**removeLoyaltyPoints**](ManagementApi.md#removeLoyaltyPoints) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/profile/{integrationId}/deduct_points | Deduct points from customer profile
[**resetPassword**](ManagementApi.md#resetPassword) | **POST** /v1/reset_password | Reset password
[**searchCouponsAdvancedApplicationWideWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedApplicationWideWithoutTotalCount) | **POST** /v1/applications/{applicationId}/coupons_search_advanced/no_total | List coupons that match the given attributes (without total count)
[**searchCouponsAdvancedWithoutTotalCount**](ManagementApi.md#searchCouponsAdvancedWithoutTotalCount) | **POST** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons_search_advanced/no_total | List coupons that match the given attributes in campaign (without total count)
[**transferLoyaltyCard**](ManagementApi.md#transferLoyaltyCard) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId}/transfer | Transfer card data
[**updateAccountCollection**](ManagementApi.md#updateAccountCollection) | **PUT** /v1/collections/{collectionId} | Update account-level collection
[**updateAdditionalCost**](ManagementApi.md#updateAdditionalCost) | **PUT** /v1/additional_costs/{additionalCostId} | Update additional cost
[**updateAttribute**](ManagementApi.md#updateAttribute) | **PUT** /v1/attributes/{attributeId} | Update custom attribute
[**updateCampaign**](ManagementApi.md#updateCampaign) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId} | Update campaign
[**updateCollection**](ManagementApi.md#updateCollection) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/collections/{collectionId} | Update campaign-level collection&#39;s description
[**updateCoupon**](ManagementApi.md#updateCoupon) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons/{couponId} | Update coupon
[**updateCouponBatch**](ManagementApi.md#updateCouponBatch) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/coupons | Update coupons
[**updateLoyaltyCard**](ManagementApi.md#updateLoyaltyCard) | **PUT** /v1/loyalty_programs/{loyaltyProgramId}/cards/{loyaltyCardId} | Update loyalty card status
[**updateReferral**](ManagementApi.md#updateReferral) | **PUT** /v1/applications/{applicationId}/campaigns/{campaignId}/referrals/{referralId} | Update referral
[**updateStore**](ManagementApi.md#updateStore) | **PUT** /v1/applications/{applicationId}/stores/{storeId} | Update store



## addLoyaltyCardPoints

> addLoyaltyCardPoints($loyaltyProgramId, $loyaltyCardId, $body)

Add points to card

Add points to the given loyalty card in the specified card-based loyalty program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$body = new \TalonOne\Client\Model\AddLoyaltyPoints(); // \TalonOne\Client\Model\AddLoyaltyPoints | body

try {
    $apiInstance->addLoyaltyCardPoints($loyaltyProgramId, $loyaltyCardId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->addLoyaltyCardPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **body** | [**\TalonOne\Client\Model\AddLoyaltyPoints**](../Model/AddLoyaltyPoints.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addLoyaltyPoints

> addLoyaltyPoints($loyaltyProgramId, $integrationId, $body)

Add points to customer profile

Add points in the specified loyalty program for the given customer.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$body = new \TalonOne\Client\Model\AddLoyaltyPoints(); // \TalonOne\Client\Model\AddLoyaltyPoints | body

try {
    $apiInstance->addLoyaltyPoints($loyaltyProgramId, $integrationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->addLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **body** | [**\TalonOne\Client\Model\AddLoyaltyPoints**](../Model/AddLoyaltyPoints.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## copyCampaignToApplications

> \TalonOne\Client\Model\InlineResponse2006 copyCampaignToApplications($applicationId, $campaignId, $body)

Copy the campaign into the specified Application

Copy the campaign into all specified Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CampaignCopy(); // \TalonOne\Client\Model\CampaignCopy | body

try {
    $result = $apiInstance->copyCampaignToApplications($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->copyCampaignToApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CampaignCopy**](../Model/CampaignCopy.md)| body |

### Return type

[**\TalonOne\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAccountCollection

> \TalonOne\Client\Model\Collection createAccountCollection($body)

Create account-level collection

Create an account-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewCollection(); // \TalonOne\Client\Model\NewCollection | body

try {
    $result = $apiInstance->createAccountCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\NewCollection**](../Model/NewCollection.md)| body |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost createAdditionalCost($body)

Create additional cost

Create an [additional cost](https://docs.talon.one/docs/product/account/dev-tools/managing-additional-costs).  These additional costs are shared across all applications in your account, and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | body

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
 **body** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)| body |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAttribute

> \TalonOne\Client\Model\Attribute createAttribute($body)

Create custom attribute

Create a _custom attribute_ in this account. [Custom attributes](https://docs.talon.one/docs/dev/concepts/attributes) allow you to add data to Talon.One domain entities like campaigns, coupons, customers and so on.  These attributes can then be given values when creating/updating these entities, and these values can be used in your campaign rules.  For example, you could define a `zipCode` field for customer sessions, and add a rule to your campaign that only allows certain ZIP codes.  These attributes are shared across all Applications in your account and are never required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | body

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
 **body** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)| body |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCampaignFromTemplate

> \TalonOne\Client\Model\CreateTemplateCampaignResponse createCampaignFromTemplate($applicationId, $body)

Create campaign from campaign template

Use the campaign template referenced in the request body to create a new campaign in one of the connected Applications.  If the template was created from a campaign with rules referencing [campaign collections](https://docs.talon.one/docs/product/campaigns/managing-collections), the corresponding collections for the new campaign are created automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CreateTemplateCampaign(); // \TalonOne\Client\Model\CreateTemplateCampaign | body

try {
    $result = $apiInstance->createCampaignFromTemplate($applicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCampaignFromTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CreateTemplateCampaign**](../Model/CreateTemplateCampaign.md)| body |

### Return type

[**\TalonOne\Client\Model\CreateTemplateCampaignResponse**](../Model/CreateTemplateCampaignResponse.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCollection

> \TalonOne\Client\Model\Collection createCollection($applicationId, $campaignId, $body)

Create campaign-level collection

Create a campaign-level collection in a given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCampaignCollection(); // \TalonOne\Client\Model\NewCampaignCollection | body

try {
    $result = $apiInstance->createCollection($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCampaignCollection**](../Model/NewCampaignCollection.md)| body |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCoupons

> \TalonOne\Client\Model\InlineResponse2008 createCoupons($applicationId, $campaignId, $body, $silent)

Create coupons

Create coupons according to some pattern. Up to 20.000 coupons can be created without a unique prefix. When a unique prefix is provided, up to 200.000 coupons can be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCoupons(); // \TalonOne\Client\Model\NewCoupons | body
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains the updated customer profiles.

try {
    $result = $apiInstance->createCoupons($applicationId, $campaignId, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCoupons**](../Model/NewCoupons.md)| body |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains the updated customer profiles. | [optional] [default to &#39;yes&#39;]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponsAsync

> \TalonOne\Client\Model\AsyncCouponCreationResponse createCouponsAsync($applicationId, $campaignId, $body)

Create coupons asynchronously

Create up to 5,000,000 coupons asynchronously. You should typically use this enpdoint when you create at least 20,001 coupons. You receive an email when the creation is complete.  If you want to create less than 20,001 coupons, you can use the [Create coupons](https://docs.talon.one/management-api#tag/Coupons/operation/createCoupons) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCouponCreationJob(); // \TalonOne\Client\Model\NewCouponCreationJob | body

try {
    $result = $apiInstance->createCouponsAsync($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCouponsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCouponCreationJob**](../Model/NewCouponCreationJob.md)| body |

### Return type

[**\TalonOne\Client\Model\AsyncCouponCreationResponse**](../Model/AsyncCouponCreationResponse.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCouponsForMultipleRecipients

> \TalonOne\Client\Model\InlineResponse2008 createCouponsForMultipleRecipients($applicationId, $campaignId, $body, $silent)

Create coupons for multiple recipients

Create coupons according to some pattern for up to 1000 recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewCouponsForMultipleRecipients(); // \TalonOne\Client\Model\NewCouponsForMultipleRecipients | body
$silent = 'yes'; // string | Possible values: `yes` or `no`. - `yes`: Increases the perfomance of the API call by returning a 204 response. - `no`: Returns a 200 response that contains the updated customer profiles.

try {
    $result = $apiInstance->createCouponsForMultipleRecipients($applicationId, $campaignId, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCouponsForMultipleRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewCouponsForMultipleRecipients**](../Model/NewCouponsForMultipleRecipients.md)| body |
 **silent** | **string**| Possible values: &#x60;yes&#x60; or &#x60;no&#x60;. - &#x60;yes&#x60;: Increases the perfomance of the API call by returning a 204 response. - &#x60;no&#x60;: Returns a 200 response that contains the updated customer profiles. | [optional] [default to &#39;yes&#39;]

### Return type

[**\TalonOne\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPasswordRecoveryEmail

> \TalonOne\Client\Model\NewPasswordEmail createPasswordRecoveryEmail($body)

Request a password reset

Send an email with a password recovery link to the email address of an existing account.  **Note:** The password recovery link expires 30 minutes after this endpoint is triggered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewPasswordEmail(); // \TalonOne\Client\Model\NewPasswordEmail | body

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
 **body** | [**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)| body |

### Return type

[**\TalonOne\Client\Model\NewPasswordEmail**](../Model/NewPasswordEmail.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSession

> \TalonOne\Client\Model\Session createSession($body)

Create session

Create a session to use the Management API endpoints. Use the value of the `token` property provided in the response as bearer token in other API calls.  A token is valid for 3 months. In accordance with best pratices, use your generated token for all your API requests. Do **not** regenerate a token for each request.  This endpoint has a rate limit of 3 to 6 requests per second per account, depending on your setup.  <div class=\"redoc-section\">   <p class=\"title\">Granular API key</p>   Instead of using a session, you can also use the <a href=\"https://docs.talon.one/docs/product/account/dev-tools/managing-mapi-keys\">Management API key feature</a>   in the Campaign Manager to decide which endpoints can be used with a given key. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\LoginParams(); // \TalonOne\Client\Model\LoginParams | body

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
 **body** | [**\TalonOne\Client\Model\LoginParams**](../Model/LoginParams.md)| body |

### Return type

[**\TalonOne\Client\Model\Session**](../Model/Session.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createStore

> \TalonOne\Client\Model\Store createStore($applicationId, $body)

Create store

Create a new store in a specific Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewStore(); // \TalonOne\Client\Model\NewStore | body

try {
    $result = $apiInstance->createStore($applicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewStore**](../Model/NewStore.md)| body |

### Return type

[**\TalonOne\Client\Model\Store**](../Model/Store.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deductLoyaltyCardPoints

> deductLoyaltyCardPoints($loyaltyProgramId, $loyaltyCardId, $body)

Deduct points from card

Deduct points from the given loyalty card in the specified card-based loyalty program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$body = new \TalonOne\Client\Model\DeductLoyaltyPoints(); // \TalonOne\Client\Model\DeductLoyaltyPoints | body

try {
    $apiInstance->deductLoyaltyCardPoints($loyaltyProgramId, $loyaltyCardId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deductLoyaltyCardPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **body** | [**\TalonOne\Client\Model\DeductLoyaltyPoints**](../Model/DeductLoyaltyPoints.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAccountCollection

> deleteAccountCollection($collectionId)

Delete account-level collection

Delete a given account-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.

try {
    $apiInstance->deleteAccountCollection($collectionId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCampaign

> deleteCampaign($applicationId, $campaignId)

Delete campaign

Delete the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCollection

> deleteCollection($applicationId, $campaignId, $collectionId)

Delete campaign-level collection

Delete a given campaign-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint.

try {
    $apiInstance->deleteCollection($applicationId, $campaignId, $collectionId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupon

> deleteCoupon($applicationId, $campaignId, $couponId)

Delete coupon

Delete the specified coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$couponId = 'couponId_example'; // string | The internal ID of the coupon code. You can find this value in the `id` property from the [List coupons](https://docs.talon.one/management-api#tag/Coupons/operation/getCouponsWithoutTotalCount) endpoint response.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **couponId** | **string**| The internal ID of the coupon code. You can find this value in the &#x60;id&#x60; property from the [List coupons](https://docs.talon.one/management-api#tag/Coupons/operation/getCouponsWithoutTotalCount) endpoint response. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCoupons

> deleteCoupons($applicationId, $campaignId, $value, $createdBefore, $createdAfter, $startsAfter, $startsBefore, $expiresAfter, $expiresBefore, $valid, $batchId, $usable, $referralId, $recipientIntegrationId, $exactMatch)

Delete coupons

Deletes all the coupons matching the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$startsBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$expiresBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | - `expired`: Matches coupons in which the expiration date is set and in the past. - `validNow`: Matches coupons in which start date is null or in the past and expiration date is null or in the future. - `validFuture`: Matches coupons in which start date is set and in the future.
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$usable = 'usable_example'; // string | - `true`: only coupons where `usageCounter < usageLimit` will be returned. - `false`: only coupons where `usageCounter >= usageLimit` will be returned.
$referralId = 56; // int | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's `RecipientIntegrationId` field.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **startsBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **expiresBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| - &#x60;expired&#x60;: Matches coupons in which the expiration date is set and in the past. - &#x60;validNow&#x60;: Matches coupons in which start date is null or in the past and expiration date is null or in the future. - &#x60;validFuture&#x60;: Matches coupons in which start date is set and in the future. | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **usable** | **string**| - &#x60;true&#x60;: only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned. - &#x60;false&#x60;: only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60; will be returned. | [optional]
 **referralId** | **int**| Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s &#x60;RecipientIntegrationId&#x60; field. | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteLoyaltyCard

> deleteLoyaltyCard($loyaltyProgramId, $loyaltyCardId)

Delete loyalty card

Delete the given loyalty card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.

try {
    $apiInstance->deleteLoyaltyCard($loyaltyProgramId, $loyaltyCardId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteLoyaltyCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReferral

> deleteReferral($applicationId, $campaignId, $referralId)

Delete referral

Delete the specified referral.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$referralId = 'referralId_example'; // string | The ID of the referral code.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **referralId** | **string**| The ID of the referral code. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteStore

> deleteStore($applicationId, $storeId)

Delete store

Delete the specified store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$storeId = 'storeId_example'; // string | The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint.

try {
    $apiInstance->deleteStore($applicationId, $storeId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **storeId** | **string**| The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint. |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroySession

> destroySession()

Destroy session

Destroys the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->destroySession();
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->destroySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportAccountCollectionItems

> string exportAccountCollectionItems($collectionId)

Export account-level collection's items

Download a CSV file containing items from a given account-level collection.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.

try {
    $result = $apiInstance->exportAccountCollectionItems($collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportAccountCollectionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCollectionItems

> string exportCollectionItems($applicationId, $campaignId, $collectionId)

Export campaign-level collection's items

Download a CSV file containing items from a given campaign-level collection.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint.

try {
    $result = $apiInstance->exportCollectionItems($applicationId, $campaignId, $collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCollectionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint. |

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCoupons

> string exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState, $valuesOnly)

Export coupons

Download a CSV file containing the coupons that match the given properties.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The CSV file can contain the following columns:  - `accountid`: The ID of your deployment. - `applicationid`: The ID of the Application this coupon is related to. - `attributes`: A json object describing _custom_ referral attribute names and their values. - `batchid`: The ID of the batch this coupon is part of. - `campaignid`: The ID of the campaign this coupon is related to. - `counter`: The number of times this coupon has been redeemed. - `created`: The creation date of the coupon code. - `deleted`: Whether the coupon code is deleted. - `deleted_changelogid`: The ID of the delete event in the logs. - `discount_counter`: The amount of discount given by this coupon. - `discount_limitval`: The maximum discount amount that can be given be this coupon. - `expirydate`: The end date in RFC3339 of the code redemption period. - `id`: The internal ID of the coupon code. - `importid`: The ID of the import job that created this coupon. - `is_reservation_mandatory`: Whether this coupon requires a reservation to be redeemed. - `limits`: The limits set on this coupon. - `limitval`: The maximum number of redemptions of this code. - `recipientintegrationid`: The integration ID of the customer considered as recipient of the coupon.   Only the customer with this integration ID can redeem the corresponding coupon code.   Learn about [coupon reservation](https://docs.talon.one/docs/product/rules/effects/using-effects#reserving-a-coupon-code). - `referralid`: The ID of the referral code that triggered the creation of this coupon (create coupon effect). - `reservation`: Whether the coupon is reserved. - `reservation_counter`: How many times this coupon has been reserved. - `reservation_limitval`: The maximum of number of reservations this coupon can have. - `startdate`: The start date in RFC3339 of the code redemption period. - `value`: The coupon code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 3.4; // float | Filter results by campaign.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field.
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.
$valuesOnly = false; // bool | Filter results to only return the coupon codes (`value` column) without the associated coupon data.

try {
    $result = $apiInstance->exportCoupons($applicationId, $campaignId, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $dateFormat, $campaignState, $valuesOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field. | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code. | [optional] [default to false]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]
 **valuesOnly** | **bool**| Filter results to only return the coupon codes (&#x60;value&#x60; column) without the associated coupon data. | [optional] [default to false]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCustomerSessions

> string exportCustomerSessions($applicationId, $createdBefore, $createdAfter, $profileIntegrationId, $dateFormat, $customerSessionState)

Export customer sessions

Download a CSV file containing the customer sessions that match the request.  **Important:** Archived sessions cannot be exported. See the [retention policy](https://docs.talon.one/docs/product/server-infrastructure-and-data-retention#data-retention-policy).  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  - `id`: The internal ID of the session. - `firstsession`: Whether this is a first session. - `integrationid`: The integration ID of the session. - `applicationid`: The ID of the Application. - `profileid`: The internal ID of the customer profile. - `profileintegrationid`: The integration ID of the customer profile. - `created`: The timestamp when the session was created. - `state`: The [state](https://docs.talon.one/docs/dev/concepts/entities/customer-sessions#customer-session-states) of the session. - `cartitems`: The cart items in the session. - `discounts`: The discounts in the session. - `total`: The total value of cart items and additional costs in the session, before any discounts are applied. - `attributes`: The attributes set in the session. - `closedat`: Timestamp when the session was closed. - `cancelledat`: Timestamp when the session was cancelled. - `referral`: The referral code in the session. - `identifiers`: The identifiers in the session. - `additional_costs`: The [additional costs](https://docs.talon.one/docs/product/account/dev-tools/managing-additional-costs) in the session. - `updated`: Timestamp of the last session update. - `store_integration_id`: The integration ID of the store. - `coupons`: Coupon codes in the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string. | [optional]
 **profileIntegrationId** | **string**| Only return sessions for the customer that matches this customer integration ID. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]
 **customerSessionState** | **string**| Filter results by state. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportCustomersTiers

> string exportCustomersTiers($loyaltyProgramId, $subledgerIds, $tierNames)

Export customers' tier data

Download a CSV file containing the tier information for customers of the specified loyalty program.  The generated file contains the following columns:  - `programid`: The identifier of the loyalty program. It is displayed in your Talon.One deployment URL. - `subledgerid`: The ID of the subledger associated with the loyalty program. This column is empty if the loyalty program has no subledger. In this case, refer to the export file name to get the ID of the loyalty program. - `customerprofileid`: The ID used to integrate customer profiles with the loyalty program. - `tiername`: The name of the tier. - `startdate`: The tier start date in RFC3339. - `expirydate`: The tier expiry date in RFC3339.  You can filter the results by providing the following optional input parameters:  - `subledgerId` (optional): Filter results by subledger ID. If no value is provided, all subledger data for the specified loyalty program will be exported. - `tierName` (optional): Filter results by tier name. If no value is provided, all tier data for the specified loyalty program will be exported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$subledgerIds = array('subledgerIds_example'); // string[] | An array of subledgers IDs to filter the export by.
$tierNames = array('tierNames_example'); // string[] | An array of tier names to filter the export by.

try {
    $result = $apiInstance->exportCustomersTiers($loyaltyProgramId, $subledgerIds, $tierNames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportCustomersTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **subledgerIds** | [**string[]**](../Model/string.md)| An array of subledgers IDs to filter the export by. | [optional]
 **tierNames** | [**string[]**](../Model/string.md)| An array of tier names to filter the export by. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportEffects

> string exportEffects($applicationId, $campaignId, $createdBefore, $createdAfter, $dateFormat)

Export triggered effects

Download a CSV file containing the triggered effects that match the given attributes.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The generated file can contain the following columns:  - `applicationid`: The ID of the Application. - `campaignid`: The ID of the campaign. - `couponid`: The ID of the coupon, when applicable to the effect. - `created`: The timestamp of the effect. - `event_type`: The name of the event. See the [docs](https://docs.talon.one/docs/dev/concepts/entities/events). - `eventid`: The internal ID of the effect. - `name`: The effect name. See the [docs](https://docs.talon.one/docs/dev/integration-api/api-effects). - `profileintegrationid`: The ID of the customer profile, when applicable. - `props`: The [properties](https://docs.talon.one/docs/dev/integration-api/api-effects) of the effect. - `ruleindex`: The index of the rule. - `rulesetid`: The ID of the rule set. - `sessionid`: The internal ID of the session that triggered the effect. - `profileid`: The internal ID of the customer profile. - `sessionintegrationid`: The integration ID of the session. - `total_revenue`: The total revenue. - `store_integration_id`: The integration ID of the store. You choose this ID when you create a store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyBalance

> string exportLoyaltyBalance($loyaltyProgramId, $endDate)

Export customer loyalty balance to CSV

⚠️ Deprecation notice: Support for requests to this endpoint will end soon. To export customer loyalty balances to CSV, use the [Export customer loyalty balances to CSV](/management-api#tag/Loyalty/operation/exportLoyaltyBalances) endpoint.  Download a CSV file containing the balance of each customer in the loyalty program.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string.

try {
    $result = $apiInstance->exportLoyaltyBalance($loyaltyProgramId, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **endDate** | **\DateTime**| Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyBalances

> string exportLoyaltyBalances($loyaltyProgramId, $endDate)

Export customer loyalty balances

Download a CSV file containing the balance of each customer in the loyalty program.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The generated file can contain the following columns:  - `loyaltyProgramID`: The ID of the loyalty program. - `loyaltySubledger`: The name of the subdleger, when applicatble. - `profileIntegrationID`: The integration ID of the customer profile. - `currentBalance`: The current point balance. - `pendingBalance`: The number of pending points. - `expiredBalance`: The number of expired points. - `spentBalance`: The number of spent points. - `currentTier`: The tier that the customer is in at the time of the export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string.

try {
    $result = $apiInstance->exportLoyaltyBalances($loyaltyProgramId, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **endDate** | **\DateTime**| Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyCardBalances

> string exportLoyaltyCardBalances($loyaltyProgramId, $endDate)

Export all card transaction logs

Download a CSV file containing the balances of all cards in the loyalty program.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The CSV file contains the following columns: - `loyaltyProgramID`: The ID of the loyalty program. - `loyaltySubledger`: The name of the subdleger, when applicatble. - `cardIdentifier`: The alphanumeric identifier of the loyalty card. - `cardState`:The state of the loyalty card. It can be `active` or `inactive`. - `currentBalance`: The current point balance. - `pendingBalance`: The number of pending points. - `expiredBalance`: The number of expired points. - `spentBalance`: The number of spent points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string.

try {
    $result = $apiInstance->exportLoyaltyCardBalances($loyaltyProgramId, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyCardBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **endDate** | **\DateTime**| Used to return expired, active, and pending loyalty balances before this timestamp. You can enter any past, present, or future timestamp value.  **Note:** It must be an RFC3339 timestamp string. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyCardLedger

> string exportLoyaltyCardLedger($loyaltyProgramId, $loyaltyCardId, $rangeStart, $rangeEnd, $dateFormat)

Export card's ledger log

Download a CSV file containing a loyalty card ledger log of the loyalty program.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportLoyaltyCardLedger($loyaltyProgramId, $loyaltyCardId, $rangeStart, $rangeEnd, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyCardLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportLoyaltyLedger

> string exportLoyaltyLedger($rangeStart, $rangeEnd, $loyaltyProgramId, $integrationId, $dateFormat)

Export customer's transaction logs

Download a CSV file containing a customer's transaction logs in the loyalty program.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The generated file can contain the following columns:  - `customerprofileid`: The ID of the profile. - `customersessionid`: The ID of the customer session. - `rulesetid`: The ID of the rule set. - `rulename`: The name of the rule. - `programid`: The ID of the loyalty program. - `type`: The type of the loyalty program. - `name`: The name of the loyalty program. - `subledgerid`: The ID of the subledger, when applicable. - `startdate`: The start date of the program. - `expirydate`: The expiration date of the program. - `id`: The ID of the transaction. - `created`: The timestamp of the creation of the loyalty program. - `amount`: The number of points in that transaction. - `archived`: Whether the session related to the transaction is archived.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportLoyaltyLedger($rangeStart, $rangeEnd, $loyaltyProgramId, $integrationId, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportLoyaltyLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportPoolGiveaways

> string exportPoolGiveaways($poolId, $createdBefore, $createdAfter)

Export giveaway codes of a giveaway pool

Download a CSV file containing the giveaway codes of a specific giveaway pool.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The CSV file contains the following columns:  - `id`: The internal ID of the giveaway. - `poolid`: The internal ID of the giveaway pool. - `code`: The giveaway code. - `startdate`: The validity start date in RFC3339 of the giveaway (can be empty). - `enddate`: The validity end date in RFC3339 of the giveaway (can be empty). - `attributes`: Any custom attributes associated with the giveaway code (can be empty). - `used`: An indication of whether the giveaway is already awarded. - `importid`: The ID of the import which created the giveaway. - `created`: The creation time of the giveaway code. - `profileintegrationid`: The third-party integration ID of the customer profile that was awarded the giveaway. Can be empty if the giveaway was not awarded. - `profileid`: The internal ID of the customer profile that was awarded the giveaway. Can be empty if the giveaway was not awarded or an internal ID does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poolId = 56; // int | The ID of the pool. You can find it in the Campaign Manager, in the **Giveaways** section.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp that filters the results to only contain giveaways created before this date. Must be an RFC3339 timestamp string.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp that filters the results to only contain giveaways created after this date. Must be an RFC3339 timestamp string.

try {
    $result = $apiInstance->exportPoolGiveaways($poolId, $createdBefore, $createdAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportPoolGiveaways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poolId** | **int**| The ID of the pool. You can find it in the Campaign Manager, in the **Giveaways** section. |
 **createdBefore** | **\DateTime**| Timestamp that filters the results to only contain giveaways created before this date. Must be an RFC3339 timestamp string. | [optional]
 **createdAfter** | **\DateTime**| Timestamp that filters the results to only contain giveaways created after this date. Must be an RFC3339 timestamp string. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## exportReferrals

> string exportReferrals($applicationId, $campaignId, $createdBefore, $createdAfter, $valid, $usable, $batchId, $dateFormat)

Export referrals

Download a CSV file containing the referrals that match the given parameters.  **Tip:** If the exported CSV file is too large to view, you can [split it into multiple files](https://www.makeuseof.com/tag/how-to-split-a-huge-csv-excel-workbook-into-seperate-files/).  The CSV file contains the following columns:  - `code`: The referral code. - `advocateprofileintegrationid`: The profile ID of the advocate. - `startdate`: The start date in RFC3339 of the code redemption period. - `expirydate`: The end date in RFC3339 of the code redemption period. - `limitval`: The maximum number of redemptions of this code. Defaults to `1` when left blank. - `attributes`: A json object describing _custom_ referral attribute names and their values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | - `expired`: Matches referrals in which the expiration date is set and in the past. - `validNow`: Matches referrals in which start date is null or in the past and expiration date is null or in the future. - `validFuture`: Matches referrals in which start date is set and in the future.
$usable = 'usable_example'; // string | - `true`, only referrals where `usageCounter < usageLimit` will be returned. - `false`, only referrals where `usageCounter >= usageLimit` will be returned.
$batchId = 'batchId_example'; // string | Filter results by batches of referrals
$dateFormat = 'dateFormat_example'; // string | Determines the format of dates in the export document.

try {
    $result = $apiInstance->exportReferrals($applicationId, $campaignId, $createdBefore, $createdAfter, $valid, $usable, $batchId, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->exportReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| - &#x60;expired&#x60;: Matches referrals in which the expiration date is set and in the past. - &#x60;validNow&#x60;: Matches referrals in which start date is null or in the past and expiration date is null or in the future. - &#x60;validFuture&#x60;: Matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| - &#x60;true&#x60;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned. - &#x60;false&#x60;, only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60; will be returned. | [optional]
 **batchId** | **string**| Filter results by batches of referrals | [optional]
 **dateFormat** | **string**| Determines the format of dates in the export document. | [optional]

### Return type

**string**

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccessLogsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20019 getAccessLogsWithoutTotalCount($applicationId, $rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

Get access logs for Application

Retrieve the list of API calls sent to the specified Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccount

> \TalonOne\Client\Model\Account getAccount($accountId)

Get account details

Return the details of your companies Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The identifier of the account. Retrieve it via the [List users in account](https://docs.talon.one/management-api#operation/getUsers) endpoint in the `accountId` property.

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
 **accountId** | **int**| The identifier of the account. Retrieve it via the [List users in account](https://docs.talon.one/management-api#operation/getUsers) endpoint in the &#x60;accountId&#x60; property. |

### Return type

[**\TalonOne\Client\Model\Account**](../Model/Account.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAnalytics

> \TalonOne\Client\Model\AccountAnalytics getAccountAnalytics($accountId)

Get account analytics

Return the analytics of your Talon.One account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The identifier of the account. Retrieve it via the [List users in account](https://docs.talon.one/management-api#operation/getUsers) endpoint in the `accountId` property.

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
 **accountId** | **int**| The identifier of the account. Retrieve it via the [List users in account](https://docs.talon.one/management-api#operation/getUsers) endpoint in the &#x60;accountId&#x60; property. |

### Return type

[**\TalonOne\Client\Model\AccountAnalytics**](../Model/AccountAnalytics.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountCollection

> \TalonOne\Client\Model\Collection getAccountCollection($collectionId)

Get account-level collection

Retrieve a given account-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.

try {
    $result = $apiInstance->getAccountCollection($collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost getAdditionalCost($additionalCostId)

Get additional cost

Returns the additional cost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | The ID of the additional cost. You can find the ID the the Campaign Manager's URL when you display the details of the cost in **Account** > **Tools** > **Additional costs**.

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
 **additionalCostId** | **int**| The ID of the additional cost. You can find the ID the the Campaign Manager&#39;s URL when you display the details of the cost in **Account** &gt; **Tools** &gt; **Additional costs**. |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAdditionalCosts

> \TalonOne\Client\Model\InlineResponse20034 getAdditionalCosts($pageSize, $skip, $sort)

List additional costs

Returns all the defined additional costs for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllAccessLogs

> \TalonOne\Client\Model\InlineResponse20020 getAllAccessLogs($rangeStart, $rangeEnd, $path, $method, $status, $pageSize, $skip, $sort)

List access logs

Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$path = 'path_example'; // string | Only return results where the request path matches the given regular expression.
$method = 'method_example'; // string | Only return results where the request method matches the given regular expression.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **path** | **string**| Only return results where the request path matches the given regular expression. | [optional]
 **method** | **string**| Only return results where the request method matches the given regular expression. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllRoles

> \TalonOne\Client\Model\InlineResponse20042 getAllRoles()

List roles

List all roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
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

[**\TalonOne\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

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


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\Application**](../Model/Application.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationApiHealth

> \TalonOne\Client\Model\ApplicationApiHealth getApplicationApiHealth($applicationId)

Get Application health

Display the health of the Application and show the last time the Application was used.  You can also display this information from the **Settings** of an Application, in the **Developer Settings** menu. See the [docs](https://docs.talon.one/docs/dev/tutorials/monitoring-integration-status).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\ApplicationApiHealth**](../Model/ApplicationApiHealth.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomer

> \TalonOne\Client\Model\ApplicationCustomer getApplicationCustomer($applicationId, $customerId)

Get application's customer

Retrieve the customers of the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List Application's customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List Application&#39;s customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint. |

### Return type

[**\TalonOne\Client\Model\ApplicationCustomer**](../Model/ApplicationCustomer.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomerFriends

> \TalonOne\Client\Model\InlineResponse20031 getApplicationCustomerFriends($applicationId, $integrationId, $pageSize, $skip, $sort, $withTotalResultSize)

List friends referred by customer profile

List the friends referred by the specified customer profile in this Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$integrationId = 'integrationId_example'; // string | The Integration ID of the Advocate's Profile.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomerFriends($applicationId, $integrationId, $pageSize, $skip, $sort, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomerFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **integrationId** | **string**| The Integration ID of the Advocate&#39;s Profile. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomers

> \TalonOne\Client\Model\InlineResponse20022 getApplicationCustomers($applicationId, $integrationId, $pageSize, $skip, $withTotalResultSize)

List application's customers

List all the customers of the specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$integrationId = 'integrationId_example'; // string | Filter results performing an exact matching against the profile integration identifier.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **integrationId** | **string**| Filter results performing an exact matching against the profile integration identifier. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20023 getApplicationCustomersByAttributes($applicationId, $body, $pageSize, $skip, $withTotalResultSize)

List application customers matching the given attributes

Get a list of the application customers matching the provided criteria.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CustomerProfileSearchQuery(); // \TalonOne\Client\Model\CustomerProfileSearchQuery | body
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

try {
    $result = $apiInstance->getApplicationCustomersByAttributes($applicationId, $body, $pageSize, $skip, $withTotalResultSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getApplicationCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CustomerProfileSearchQuery**](../Model/CustomerProfileSearchQuery.md)| body |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventTypes

> \TalonOne\Client\Model\InlineResponse20029 getApplicationEventTypes($applicationId, $pageSize, $skip, $sort)

List Applications event types

Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](https://docs.talon.one/integration-api#tag/Events/operation/trackEventV2)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationEventsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20028 getApplicationEventsWithoutTotalCount($applicationId, $pageSize, $skip, $sort, $type, $createdBefore, $createdAfter, $session, $profile, $customerName, $customerEmail, $couponCode, $referralCode, $ruleQuery, $campaignQuery)

List Applications events

Lists all events recorded for an application. Instead of having the total number of results in the response, this endpoint only mentions whether there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
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

[**\TalonOne\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSession

> \TalonOne\Client\Model\ApplicationSession getApplicationSession($applicationId, $sessionId)

Get Application session

Get the details of the given session. You can list the sessions with the [List Application sessions](https://docs.talon.one/management-api#tag/Customer-data/operation/getApplicationSessions) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$sessionId = 56; // int | The **internal** ID of the session. You can get the ID with the [List Application sessions](https://docs.talon.one/management-api#tag/Customer-data/operation/getApplicationSessions) endpoint.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **sessionId** | **int**| The **internal** ID of the session. You can get the ID with the [List Application sessions](https://docs.talon.one/management-api#tag/Customer-data/operation/getApplicationSessions) endpoint. |

### Return type

[**\TalonOne\Client\Model\ApplicationSession**](../Model/ApplicationSession.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplicationSessions

> \TalonOne\Client\Model\InlineResponse20027 getApplicationSessions($applicationId, $pageSize, $skip, $sort, $profile, $state, $createdBefore, $createdAfter, $coupon, $referral, $integrationId)

List Application sessions

List all the sessions of the specified Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **profile** | **string**| Profile integration ID filter for sessions. Must be exact match. | [optional]
 **state** | **string**| Filter by sessions with this state. Must be exact match. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **coupon** | **string**| Filter by sessions with this coupon. Must be exact match. | [optional]
 **referral** | **string**| Filter by sessions with this referral. Must be exact match. | [optional]
 **integrationId** | **string**| Filter by sessions with this integrationId. Must be exact match. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApplications

> \TalonOne\Client\Model\InlineResponse2005 getApplications($pageSize, $skip, $sort)

List Applications

List all applications in the current account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttribute

> \TalonOne\Client\Model\Attribute getAttribute($attributeId)

Get custom attribute

Retrieve the specified custom attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | The ID of the attribute. You can find the ID in the Campaign Manager's URL when you display the details of an attribute in **Account** > **Tools** > **Attributes**.

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
 **attributeId** | **int**| The ID of the attribute. You can find the ID in the Campaign Manager&#39;s URL when you display the details of an attribute in **Account** &gt; **Tools** &gt; **Attributes**. |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttributes

> \TalonOne\Client\Model\InlineResponse20032 getAttributes($pageSize, $skip, $sort, $entity)

List custom attributes

Return all the custom attributes for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$entity = 'entity_example'; // string | Returned attributes will be filtered by supplied entity.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **entity** | **string**| Returned attributes will be filtered by supplied entity. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAudiences

> \TalonOne\Client\Model\InlineResponse20030 getAudiences($pageSize, $skip, $sort, $withTotalResultSize)

List audiences

Get all audiences created in the account. To create an audience, use [Create audience](https://docs.talon.one/integration-api#tag/Audiences/operation/createAudienceV2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaign

> \TalonOne\Client\Model\Campaign getCampaign($applicationId, $campaignId)

Get campaign

Retrieve the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignAnalytics

> \TalonOne\Client\Model\InlineResponse20021 getCampaignAnalytics($applicationId, $campaignId, $rangeStart, $rangeEnd, $granularity)

Get analytics of campaigns

Retrieve statistical data about the performance of the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **granularity** | **string**| The time interval between the results in the returned time-series. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignByAttributes

> \TalonOne\Client\Model\InlineResponse2006 getCampaignByAttributes($applicationId, $body, $pageSize, $skip, $sort, $campaignState)

List campaigns that match the given attributes

Get a list of all the campaigns that match a set of attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\CampaignSearch(); // \TalonOne\Client\Model\CampaignSearch | body
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.

try {
    $result = $apiInstance->getCampaignByAttributes($applicationId, $body, $pageSize, $skip, $sort, $campaignState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\CampaignSearch**](../Model/CampaignSearch.md)| body |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaignTemplates

> \TalonOne\Client\Model\InlineResponse20011 getCampaignTemplates($pageSize, $skip, $sort, $state, $name, $tags, $userId)

List campaign templates

Retrieve a list of campaign templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$state = 'state_example'; // string | Filter results by the state of the campaign template.
$name = 'name_example'; // string | Filter results performing case-insensitive matching against the name of the campaign template.
$tags = 'tags_example'; // string | Filter results performing case-insensitive matching against the tags of the campaign template. When used in conjunction with the \"name\" query parameter, a logical OR will be performed to search both tags and name for the provided values.
$userId = 56; // int | Filter results by user ID.

try {
    $result = $apiInstance->getCampaignTemplates($pageSize, $skip, $sort, $state, $name, $tags, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaignTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **state** | **string**| Filter results by the state of the campaign template. | [optional]
 **name** | **string**| Filter results performing case-insensitive matching against the name of the campaign template. | [optional]
 **tags** | **string**| Filter results performing case-insensitive matching against the tags of the campaign template. When used in conjunction with the \&quot;name\&quot; query parameter, a logical OR will be performed to search both tags and name for the provided values. | [optional]
 **userId** | **int**| Filter results by user ID. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCampaigns

> \TalonOne\Client\Model\InlineResponse2006 getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId, $templateId, $storeId)

List campaigns

List the campaigns of the specified application that match your filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.
$name = 'name_example'; // string | Filter results performing case-insensitive matching against the name of the campaign.
$tags = 'tags_example'; // string | Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \"name\" query parameter, a logical OR will be performed to search both tags and name for the provided values
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$campaignGroupId = 56; // int | Filter results to campaigns owned by the specified campaign access group ID.
$templateId = 56; // int | The ID of the Campaign Template this Campaign was created from.
$storeId = 56; // int | Filter results to campaigns linked to the specified store ID.

try {
    $result = $apiInstance->getCampaigns($applicationId, $pageSize, $skip, $sort, $campaignState, $name, $tags, $createdBefore, $createdAfter, $campaignGroupId, $templateId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]
 **name** | **string**| Filter results performing case-insensitive matching against the name of the campaign. | [optional]
 **tags** | **string**| Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the \&quot;name\&quot; query parameter, a logical OR will be performed to search both tags and name for the provided values | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **campaignGroupId** | **int**| Filter results to campaigns owned by the specified campaign access group ID. | [optional]
 **templateId** | **int**| The ID of the Campaign Template this Campaign was created from. | [optional]
 **storeId** | **int**| Filter results to campaigns linked to the specified store ID. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChanges

> \TalonOne\Client\Model\InlineResponse20040 getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $managementKeyId, $includeOld)

Get audit logs for an account

Retrieve the audit logs displayed in **Accounts > Audit logs**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$applicationId = 3.4; // float | Filter results by Application ID.
$entityPath = 'entityPath_example'; // string | Filter results on a case insensitive matching of the url path of the entity
$userId = 56; // int | Filter results by user ID.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$managementKeyId = 56; // int | Filter results that match the given management key ID.
$includeOld = True; // bool | When this flag is set to false, the state without the change will not be returned. The default value is true.

try {
    $result = $apiInstance->getChanges($pageSize, $skip, $sort, $applicationId, $entityPath, $userId, $createdBefore, $createdAfter, $withTotalResultSize, $managementKeyId, $includeOld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **entityPath** | **string**| Filter results on a case insensitive matching of the url path of the entity | [optional]
 **userId** | **int**| Filter results by user ID. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **managementKeyId** | **int**| Filter results that match the given management key ID. | [optional]
 **includeOld** | **bool**| When this flag is set to false, the state without the change will not be returned. The default value is true. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCollection

> \TalonOne\Client\Model\Collection getCollection($applicationId, $campaignId, $collectionId)

Get campaign-level collection

Retrieve a given campaign-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint.

try {
    $result = $apiInstance->getCollection($applicationId, $campaignId, $collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint. |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCollectionItems

> \TalonOne\Client\Model\InlineResponse20017 getCollectionItems($collectionId, $pageSize, $skip)

Get collection items

Retrieve items from a given collection.  You can retrieve items from both account-level collections and campaign-level collections using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.

try {
    $result = $apiInstance->getCollectionItems($collectionId, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCollectionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCouponsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2009 getCouponsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch)

List coupons

List all the coupons matching the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReport

> \TalonOne\Client\Model\CustomerActivityReport getCustomerActivityReport($rangeStart, $rangeEnd, $applicationId, $customerId, $pageSize, $skip)

Get customer's activity report

Fetch the summary report of a given customer in the given application, in a time range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List Application's customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.

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
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List Application&#39;s customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerActivityReport**](../Model/CustomerActivityReport.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerActivityReportsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20026 getCustomerActivityReportsWithoutTotalCount($rangeStart, $rangeEnd, $applicationId, $pageSize, $skip, $sort, $name, $integrationId, $campaignName, $advocateName)

Get Activity Reports for Application Customers

Fetch summary reports for all application customers based on a time range. Instead of having the total number of results in the response, this endpoint only mentions whether there are more results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rangeStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from after this timestamp. This must be an RFC3339 timestamp string.
$rangeEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return results from before this timestamp. This must be an RFC3339 timestamp string.
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$name = 'name_example'; // string | Only return reports matching the customer name
$integrationId = 'integrationId_example'; // string | Filter results performing an exact matching against the profile integration identifier.
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
 **rangeStart** | **\DateTime**| Only return results from after this timestamp. This must be an RFC3339 timestamp string. |
 **rangeEnd** | **\DateTime**| Only return results from before this timestamp. This must be an RFC3339 timestamp string. |
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **name** | **string**| Only return reports matching the customer name | [optional]
 **integrationId** | **string**| Filter results performing an exact matching against the profile integration identifier. | [optional]
 **campaignName** | **string**| Only return reports matching the campaignName | [optional]
 **advocateName** | **string**| Only return reports matching the current customer referrer name | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerAnalytics

> \TalonOne\Client\Model\CustomerAnalytics getCustomerAnalytics($applicationId, $customerId, $pageSize, $skip, $sort)

Get customer's analytics report

Fetch analytics for a given customer in the given application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List Application's customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List Application&#39;s customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\CustomerAnalytics**](../Model/CustomerAnalytics.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfile

> \TalonOne\Client\Model\CustomerProfile getCustomerProfile($customerId)

Get customer profile

Return the details of the specified customer profile.  <div class=\"redoc-section\">   <p class=\"title\">Performance tips</p>    You can retrieve the same information via the Integration API, which can save you extra API requests. consider these options:    - Request the customer profile to be part of the response content using     [Update Customer Session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2).   - Send an empty update with the [Update Customer Profile](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/updateCustomerProfileV2) endpoint with `runRuleEngine=false`. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | The value of the `id` property of a customer profile. Get it with the [List Application's customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint.

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
 **customerId** | **int**| The value of the &#x60;id&#x60; property of a customer profile. Get it with the [List Application&#39;s customers](https://docs.talon.one/management-api#operation/getApplicationCustomers) endpoint. |

### Return type

[**\TalonOne\Client\Model\CustomerProfile**](../Model/CustomerProfile.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerProfiles

> \TalonOne\Client\Model\InlineResponse20025 getCustomerProfiles($pageSize, $skip, $sandbox)

List customer profiles

List all customer profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sandbox = false; // bool | Indicates whether you are pointing to a sandbox or Live customer.

try {
    $result = $apiInstance->getCustomerProfiles($pageSize, $skip, $sandbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomerProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sandbox** | **bool**| Indicates whether you are pointing to a sandbox or Live customer. | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomersByAttributes

> \TalonOne\Client\Model\InlineResponse20024 getCustomersByAttributes($body, $pageSize, $skip, $sandbox)

List customer profiles matching the given attributes

Get a list of the customer profiles matching the provided criteria.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\CustomerProfileSearchQuery(); // \TalonOne\Client\Model\CustomerProfileSearchQuery | body
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sandbox = false; // bool | Indicates whether you are pointing to a sandbox or Live customer.

try {
    $result = $apiInstance->getCustomersByAttributes($body, $pageSize, $skip, $sandbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomersByAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TalonOne\Client\Model\CustomerProfileSearchQuery**](../Model/CustomerProfileSearchQuery.md)| body |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sandbox** | **bool**| Indicates whether you are pointing to a sandbox or Live customer. | [optional] [default to false]

### Return type

[**\TalonOne\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventTypes

> \TalonOne\Client\Model\InlineResponse20038 getEventTypes($name, $includeOldVersions, $pageSize, $skip, $sort)

List event types

Fetch all event type definitions for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Filter results to event types with the given name. This parameter implies `includeOldVersions`.
$includeOldVersions = false; // bool | Include all versions of every event type.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

try {
    $result = $apiInstance->getEventTypes($name, $includeOldVersions, $pageSize, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter results to event types with the given name. This parameter implies &#x60;includeOldVersions&#x60;. | [optional]
 **includeOldVersions** | **bool**| Include all versions of every event type. | [optional] [default to false]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExports

> \TalonOne\Client\Model\InlineResponse20041 getExports($pageSize, $skip, $applicationId, $campaignId, $entity)

Get exports

List all past exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$applicationId = 3.4; // float | Filter results by Application ID.
$campaignId = 56; // int | Filter by the campaign ID on which the limit counters are used.
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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **int**| Filter by the campaign ID on which the limit counters are used. | [optional]
 **entity** | **string**| The name of the entity type that was exported. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyCard

> \TalonOne\Client\Model\LoyaltyCard getLoyaltyCard($loyaltyProgramId, $loyaltyCardId)

Get loyalty card

Get the given loyalty card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.

try {
    $result = $apiInstance->getLoyaltyCard($loyaltyProgramId, $loyaltyCardId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |

### Return type

[**\TalonOne\Client\Model\LoyaltyCard**](../Model/LoyaltyCard.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyCardTransactionLogs

> \TalonOne\Client\Model\InlineResponse20015 getLoyaltyCardTransactionLogs($loyaltyProgramId, $loyaltyCardId, $startDate, $endDate, $pageSize, $skip, $subledgerId)

List card's transactions

Retrieve the transaction logs for the given [loyalty card](https://docs.talon.one/docs/product/loyalty-programs/card-based/card-based-overview) within the specified [card-based loyalty program](https://docs.talon.one/docs/product/loyalty-programs/overview#loyalty-program-types) with filtering options applied. If no filtering options are applied, the last 50 loyalty transactions for the given loyalty card are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time from which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time by which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$subledgerId = 'subledgerId_example'; // string | The ID of the subledger by which we filter the data.

try {
    $result = $apiInstance->getLoyaltyCardTransactionLogs($loyaltyProgramId, $loyaltyCardId, $startDate, $endDate, $pageSize, $skip, $subledgerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyCardTransactionLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **startDate** | **\DateTime**| Date and time from which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string. | [optional]
 **endDate** | **\DateTime**| Date and time by which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **subledgerId** | **string**| The ID of the subledger by which we filter the data. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyCards

> \TalonOne\Client\Model\InlineResponse20014 getLoyaltyCards($loyaltyProgramId, $pageSize, $skip, $sort, $identifier, $profileId)

List loyalty cards

For the given card-based loyalty program, list the loyalty cards that match your filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$identifier = 'identifier_example'; // string | Optional query parameter to search cards by identifier.
$profileId = 56; // int | Filter by the profile ID.

try {
    $result = $apiInstance->getLoyaltyCards($loyaltyProgramId, $pageSize, $skip, $sort, $identifier, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **identifier** | **string**| Optional query parameter to search cards by identifier. | [optional]
 **profileId** | **int**| Filter by the profile ID. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPoints

> \TalonOne\Client\Model\LoyaltyLedger getLoyaltyPoints($loyaltyProgramId, $integrationId)

Get customer's full loyalty ledger

Get the loyalty ledger for this profile integration ID.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint.  **Important:** To get loyalty transaction logs for a given Integration ID in a loyalty program, we recommend using the Integration API's [Get customer's loyalty logs](https://docs.talon.one/integration-api#tag/Loyalty/operation/getLoyaltyProgramProfileTransactions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.

try {
    $result = $apiInstance->getLoyaltyPoints($loyaltyProgramId, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |

### Return type

[**\TalonOne\Client\Model\LoyaltyLedger**](../Model/LoyaltyLedger.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyProgram

> \TalonOne\Client\Model\LoyaltyProgram getLoyaltyProgram($loyaltyProgramId)

Get loyalty program

Get the specified [loyalty program](https://docs.talon.one/docs/product/loyalty-programs/overview). To list all loyalty programs in your Application, use [List loyalty programs](#operation/getLoyaltyPrograms).  To list the loyalty programs that a customer profile is part of, use the [List customer data](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/getCustomerInventory)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.

try {
    $result = $apiInstance->getLoyaltyProgram($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |

### Return type

[**\TalonOne\Client\Model\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyProgramTransactions

> \TalonOne\Client\Model\InlineResponse20013 getLoyaltyProgramTransactions($loyaltyProgramId, $loyaltyTransactionType, $subledgerId, $startDate, $endDate, $pageSize, $skip)

List loyalty program transactions

Retrieve all loyalty program transaction logs in a given loyalty program with filtering options applied. Manual and imported transactions are also included. If no filters are applied, the last 50 loyalty transactions for the given loyalty program are returned.  **Important:** To get loyalty transaction logs for a given Integration ID in a loyalty program, we recommend using the Integration API's [Get customer's loyalty logs](https://docs.talon.one/integration-api#tag/Loyalty/operation/getLoyaltyProgramProfileTransactions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyTransactionType = 'loyaltyTransactionType_example'; // string | Filter results by loyalty transaction type: - `manual`: Loyalty transaction that was done manually. - `session`: Loyalty transaction that resulted from a customer session. - `import`: Loyalty transaction that was imported from a CSV file.
$subledgerId = 'subledgerId_example'; // string | The ID of the subledger by which we filter the data.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time from which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time by which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string.
$pageSize = 50; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.

try {
    $result = $apiInstance->getLoyaltyProgramTransactions($loyaltyProgramId, $loyaltyTransactionType, $subledgerId, $startDate, $endDate, $pageSize, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyProgramTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyTransactionType** | **string**| Filter results by loyalty transaction type: - &#x60;manual&#x60;: Loyalty transaction that was done manually. - &#x60;session&#x60;: Loyalty transaction that resulted from a customer session. - &#x60;import&#x60;: Loyalty transaction that was imported from a CSV file. | [optional]
 **subledgerId** | **string**| The ID of the subledger by which we filter the data. | [optional]
 **startDate** | **\DateTime**| Date and time from which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string. | [optional]
 **endDate** | **\DateTime**| Date and time by which results are returned. Results are filtered by transaction creation date.  **Note:** It must be an RFC3339 timestamp string. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 50]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyPrograms

> \TalonOne\Client\Model\InlineResponse20012 getLoyaltyPrograms()

List loyalty programs

List the loyalty programs of the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


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

[**\TalonOne\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoyaltyStatistics

> \TalonOne\Client\Model\LoyaltyDashboardData getLoyaltyStatistics($loyaltyProgramId)

Get loyalty program statistics

Retrieve the statistics of the specified loyalty program such as the total active points, pending points, spent points, and expired points.  **Important:** The returned data does not include the current day. All statistics are updated daily at 11:59 PM in the loyalty program time zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.

try {
    $result = $apiInstance->getLoyaltyStatistics($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getLoyaltyStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |

### Return type

[**\TalonOne\Client\Model\LoyaltyDashboardData**](../Model/LoyaltyDashboardData.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReferralsWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse20010 getReferralsWithoutTotalCount($applicationId, $campaignId, $pageSize, $skip, $sort, $code, $createdBefore, $createdAfter, $valid, $usable, $advocate)

List referrals

List all referrals of the specified campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$code = 'code_example'; // string | Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches referrals in which the expiration date is set and in the past. The second matches referrals in which start date is null or in the past and expiration date is null or in the future, the third matches referrals in which start date is set and in the future.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **code** | **string**| Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches referrals in which the expiration date is set and in the past. The second matches referrals in which start date is null or in the past and expiration date is null or in the future, the third matches referrals in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only referrals where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only referrals where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **advocate** | **string**| Filter results by match with a profile id specified in the referral&#39;s AdvocateProfileIntegrationId field | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRole

> \TalonOne\Client\Model\Role getRole($roleId)

Get role

Get the details of a specific role. To see all the roles, use [List roles](#operation/getAllRoles).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = 56; // int | The ID of role.

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
 **roleId** | **int**| The ID of role. |

### Return type

[**\TalonOne\Client\Model\Role**](../Model/Role.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRuleset

> \TalonOne\Client\Model\Ruleset getRuleset($applicationId, $campaignId, $rulesetId)

Get ruleset

Retrieve the specified ruleset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$rulesetId = 56; // int | The ID of the ruleset.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **rulesetId** | **int**| The ID of the ruleset. |

### Return type

[**\TalonOne\Client\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRulesets

> \TalonOne\Client\Model\InlineResponse2007 getRulesets($applicationId, $campaignId, $pageSize, $skip, $sort)

List campaign rulesets

List all rulesets of this campaign. A ruleset is a revision of the rules of a campaign. **Important:** The response also includes deleted rules. You should only consider the latest revision of the returned rulesets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getStore

> \TalonOne\Client\Model\Store getStore($applicationId, $storeId)

Get store

Get store details for a specific store ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$storeId = 'storeId_example'; // string | The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint.

try {
    $result = $apiInstance->getStore($applicationId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **storeId** | **string**| The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint. |

### Return type

[**\TalonOne\Client\Model\Store**](../Model/Store.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \TalonOne\Client\Model\User getUser($userId)

Get user

Retrieve the data (including an invitation code) for a user. Non-admin users can only get their own profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | The ID of the user.

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
 **userId** | **int**| The ID of the user. |

### Return type

[**\TalonOne\Client\Model\User**](../Model/User.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \TalonOne\Client\Model\InlineResponse20039 getUsers($pageSize, $skip, $sort)

List users in account

Retrieve all users in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhook

> \TalonOne\Client\Model\Webhook getWebhook($webhookId)

Get webhook

Returns a webhook by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookId = 56; // int | The ID of the webhook. You can find the ID in the Campaign Manager's URL when you display the details of the webhook in **Account** > **Webhooks**.

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
 **webhookId** | **int**| The ID of the webhook. You can find the ID in the Campaign Manager&#39;s URL when you display the details of the webhook in **Account** &gt; **Webhooks**. |

### Return type

[**\TalonOne\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookActivationLogs

> \TalonOne\Client\Model\InlineResponse20036 getWebhookActivationLogs($pageSize, $skip, $sort, $integrationRequestUuid, $webhookId, $applicationId, $campaignId, $createdBefore, $createdAfter)

List webhook activation log entries

Webhook activation log entries are created as soon as an integration request triggers a webhook effect. See the [docs](https://docs.talon.one/docs/dev/getting-started/webhooks).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$integrationRequestUuid = 'integrationRequestUuid_example'; // string | Filter results by integration request UUID.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | Filter results by Application ID.
$campaignId = 3.4; // float | Filter results by campaign.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally.

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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **integrationRequestUuid** | **string**| Filter results by integration request UUID. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **createdBefore** | **\DateTime**| Only return events created before this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Only return events created after this date. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhookLogs

> \TalonOne\Client\Model\InlineResponse20037 getWebhookLogs($pageSize, $skip, $sort, $status, $webhookId, $applicationId, $campaignId, $requestUuid, $createdBefore, $createdAfter)

List webhook log entries

Retrieve all webhook log entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$status = 'status_example'; // string | Filter results by HTTP status codes.
$webhookId = 3.4; // float | Filter results by Webhook.
$applicationId = 3.4; // float | Filter results by Application ID.
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
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **status** | **string**| Filter results by HTTP status codes. | [optional]
 **webhookId** | **float**| Filter results by Webhook. | [optional]
 **applicationId** | **float**| Filter results by Application ID. | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **requestUuid** | **string**| Filter results by request UUID. | [optional]
 **createdBefore** | **\DateTime**| Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string. You can use any timezone. Talon.One will convert to UTC internally. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWebhooks

> \TalonOne\Client\Model\InlineResponse20035 getWebhooks($applicationIds, $sort, $pageSize, $skip, $creationType, $visibility, $outgoingIntegrationsTypeId, $title)

List webhooks

List all webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationIds = 'applicationIds_example'; // string | Filter by one or more Application IDs, separated by a comma.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$creationType = 'creationType_example'; // string | Filter results by creation type.
$visibility = 'visibility_example'; // string | Filter results by visibility.
$outgoingIntegrationsTypeId = 56; // int | Filter results by outgoing integration type ID.
$title = 'title_example'; // string | Filter results performing case-insensitive matching against the webhook title.

try {
    $result = $apiInstance->getWebhooks($applicationIds, $sort, $pageSize, $skip, $creationType, $visibility, $outgoingIntegrationsTypeId, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationIds** | **string**| Filter by one or more Application IDs, separated by a comma. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **creationType** | **string**| Filter results by creation type. | [optional]
 **visibility** | **string**| Filter results by visibility. | [optional]
 **outgoingIntegrationsTypeId** | **int**| Filter results by outgoing integration type ID. | [optional]
 **title** | **string**| Filter results performing case-insensitive matching against the webhook title. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importAccountCollection

> \TalonOne\Client\Model\Import importAccountCollection($collectionId, $upFile)

Import data into existing account-level collection

Upload a CSV file containing the collection of string values that should be attached as payload for collection. The file should be sent as multipart data.  The import **replaces** the initial content of the collection.  The CSV file **must** only contain the following column:  - `item`: the values in your collection.  A collection is limited to 500,000 items.  Example:  ``` item Addidas Nike Asics ```  **Note:** Before sending a request to this endpoint, ensure the data in the CSV to import is different from the data currently stored in the collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importAccountCollection($collectionId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importAllowedList

> \TalonOne\Client\Model\Import importAllowedList($attributeId, $upFile)

Import allowed values for attribute

Upload a CSV file containing a list of [picklist values](https://docs.talon.one/docs/product/account/dev-tools/managing-attributes#picklist-values) for the specified attribute.  The file should be sent as multipart data.  The import **replaces** the previous list of allowed values for this attribute, if any.  The CSV file **must** only contain the following column: - `item` (required): the values in your allowed list, for example a list of SKU's.  An allowed list is limited to 500,000 items.  Example:  ```text item CS-VG-04032021-UP-50D-10 CS-DV-04042021-UP-49D-12 CS-DG-02082021-UP-50G-07 ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | The ID of the attribute. You can find the ID in the Campaign Manager's URL when you display the details of an attribute in **Account** > **Tools** > **Attributes**.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importAllowedList($attributeId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importAllowedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**| The ID of the attribute. You can find the ID in the Campaign Manager&#39;s URL when you display the details of an attribute in **Account** &gt; **Tools** &gt; **Attributes**. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCollection

> \TalonOne\Client\Model\Import importCollection($applicationId, $campaignId, $collectionId, $upFile)

Import data into existing campaign-level collection

Upload a CSV file containing the collection of string values that should be attached as payload for collection. The file should be sent as multipart data.  The import **replaces** the initial content of the collection.  The CSV file **must** only contain the following column:  - `item`: the values in your collection.  A collection is limited to 500,000 items.  Example:  ``` item Addidas Nike Asics ```  **Note:** Before sending a request to this endpoint, ensure the data in the CSV to import is different from the data currently stored in the collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importCollection($applicationId, $campaignId, $collectionId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importCoupons

> \TalonOne\Client\Model\Import importCoupons($applicationId, $campaignId, $upFile)

Import coupons

Upload a CSV file containing the coupons that should be created. The file should be sent as multipart data.  The CSV file contains the following columns:  - `value` (required): The coupon code. - `expirydate`: The end date in RFC3339 of the code redemption period. - `startdate`: The start date in RFC3339 of the code redemption period. - `recipientintegrationid`: The integration ID of the customer who receives the coupon.   Only the customer with this integration ID can redeem the corresponding coupon code.   Learn about [coupon reservation](https://docs.talon.one/docs/product/rules/effects/using-effects#reserving-a-coupon-code). - `limitval`: The maximum number of redemptions of this code. For unlimited redemptions, use `0`. Defaults to `1` when not provided. - `discountlimit`: The total discount value that the code can give. This is typically used to represent a gift card value. - `attributes`: A JSON object describing _custom_ coupon attribute names and their values, enclosed with double quotation marks.    For example, if you created a [custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `category` associated with the coupon entity, the object in the CSV file, when opened in a text editor, must be: `\"{\"category\": \"10_off\"}\"`.  You can use the time zone of your choice. It is converted to UTC internally by Talon.One.  **Note:** We recommend limiting your file size to 500MB.  **Example:**  ```text \"value\",\"expirydate\",\"startdate\",\"recipientintegrationid\",\"limitval\",\"attributes\",\"discountlimit\" COUP1,2018-07-01T04:00:00Z,2018-05-01T04:00:00Z,cust123,1,\"{\"\"Category\"\": \"\"10_off\"\"}\",2.4 ```  Once imported, you can find the `batchId` in the Campaign Manager or by using [List coupons](#tag/Coupons/operation/getCouponsWithoutTotalCount).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importCoupons($applicationId, $campaignId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importLoyaltyCards

> \TalonOne\Client\Model\Import importLoyaltyCards($loyaltyProgramId, $upFile)

Import loyalty cards

Upload a CSV file containing the loyalty cards that you want to use in your card-based loyalty program. Send the file as multipart data.  It contains the following columns for each card:  - `identifier` (required): The alphanumeric identifier of the loyalty card. - `state` (required): The state of the loyalty card. It can be `active` or `inactive`. - `customerprofileids` (optional): An array of strings representing the identifiers of the customer profiles linked to the loyalty card.  **Note:** We recommend limiting your file size to 500MB.  **Example:**  ```csv identifier,state,customerprofileids 123-456-789AT,active,Alexa001;UserA ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importLoyaltyCards($loyaltyProgramId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importLoyaltyCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importLoyaltyCustomersTiers

> \TalonOne\Client\Model\Import importLoyaltyCustomersTiers($loyaltyProgramId, $upFile)

Import customers into loyalty tiers

Upload a CSV file containing existing customers to be assigned to existing tiers. Send the file as multipart data.  **Important:** This endpoint only works with loyalty programs with advanced tiers (with expiration and downgrade policy) feature enabled.  The CSV file should contain the following columns: - `subledgerid` (optional): The ID of the subledger. If this field is empty, the main ledger will be used. - `customerprofileid`: The integration ID of the customer profile to whom the tier should be assigned. - `tiername`: The name of an existing tier to assign to the customer. - `expirydate`: The expiration date of the tier. It should be a future date.  About customer assignment to a tier: - If the customer isn't already in a tier, the customer is assigned to the specified tier during the tier import. - If the customer is already in a tier, the customer is assigned to match the new information provided in the CSV file. - If the customer is already in the tier that's specified in the CSV file, only the expiration date is updated.  You can use the time zone of your choice. It is converted to UTC internally by Talon.One.  **Note:** We recommend limiting your file size to 500MB.  **Example:** ```csv subledgerid,customerprofileid,tiername,expirydate SUB1,alexa,Gold,2024-03-21T07:32:14Z ,george,Silver,2025-04-16T21:12:37Z SUB2,avocado,Bronze,2026-05-03T11:47:01Z ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importLoyaltyCustomersTiers($loyaltyProgramId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importLoyaltyCustomersTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importLoyaltyPoints

> \TalonOne\Client\Model\Import importLoyaltyPoints($loyaltyProgramId, $upFile)

Import loyalty points

Upload a CSV file containing the loyalty points you want to import into a given loyalty program. Send the file as multipart data.  Depending on the loyalty program type, you can import the points into a given customer profile or into a given _active_ loyalty card.  The CSV file contains the following columns:  - `customerprofileid` (optional): For profile-based loyalty programs, the integration ID of the customer profile where the loyalty points are imported. - `identifier` (optional): For card-based loyalty programs, the identifier of the loyalty card where the loyalty points are imported. - `amount`: The amount of points to award to the customer profile. - `startdate` (optional): The earliest date when the points can be redeemed. The points are `active` from this date until the expiration date.    **Note**: It must be an RFC3339 timestamp string or string `immediate`. Empty or missing values are considered `immediate`. - `expirydate` (optional): The latest date when the points can be redeemed. The points are `expired` after this date.    **Note**: It must be an RFC3339 timestamp string or string `unlimited`. Empty or missing values are considered `unlimited`. - `subledgerid` (optional): The ID of the subledger that should received the points. - `reason` (optional): The reason why these points are awarded.  You can use the time zone of your choice. It is converted to UTC internally by Talon.One.  **Note:** For existing customer profiles and loyalty cards, the imported points are added to any previous active or pending points, depending on the value provided for `startdate`. If `startdate` matches the current date, the imported points are _active_. If it is later, the points are _pending_ until the date provided for `startdate` is reached.  **Note:** We recommend limiting your file size to 500MB.  **Example for profile-based programs:**  ```text customerprofileid,amount,startdate,expirydate,subledgerid,reason URNGV8294NV,100,2009-11-10T23:00:00Z,2009-11-11T23:00:00Z,subledger1,appeasement ```  **Example for card-based programs:**  ```text identifier,amount,startdate,expirydate,subledgerid,reason summer-loyalty-card-0543,100,2009-11-10T23:00:00Z,2009-11-11T23:00:00Z,subledger1,appeasement ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importLoyaltyPoints($loyaltyProgramId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importPoolGiveaways

> \TalonOne\Client\Model\Import importPoolGiveaways($poolId, $upFile)

Import giveaway codes into a giveaway pool

Upload a CSV file containing the giveaway codes that should be created. Send the file as multipart data.  The CSV file contains the following columns: - `code` (required): the code of your giveaway, for instance, a gift card redemption code. - `startdate`:  the start date in RFC3339 of the code redemption period. - `enddate`: the last date in RFC3339 of the code redemption period. - `attributes`: A JSON object describing _custom_ giveaway attribute names and their values, enclosed with double quotation marks.    For example, if you created a [custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `provider` associated with the giveaway entity, the object in the CSV file, when opened in a text editor, must be: `\"{\"provider\": \"myPartnerCompany\"}\"`.  The `startdate` and `enddate` have nothing to do with the _validity_ of the codes. They are only used by the Rule Engine to award the codes or not. You can use the time zone of your choice. The values are converted to UTC internally by Talon.One.  **Note:**  - We recommend limiting your file size to 500MB. - You can import the same code multiple times. Duplicate codes are treated and distributed to customers as unique codes.  **Example:**  ```text code,startdate,enddate,attributes GIVEAWAY1,2020-11-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Amazon\"\"}\" GIVEAWAY2,2020-11-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Amazon\"\"}\" GIVEAWAY3,2021-01-10T23:00:00Z,2022-11-11T23:00:00Z,\"{\"\"provider\"\": \"\"Aliexpress\"\"}\" ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poolId = 56; // int | The ID of the pool. You can find it in the Campaign Manager, in the **Giveaways** section.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

try {
    $result = $apiInstance->importPoolGiveaways($poolId, $upFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->importPoolGiveaways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poolId** | **int**| The ID of the pool. You can find it in the Campaign Manager, in the **Giveaways** section. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importReferrals

> \TalonOne\Client\Model\Import importReferrals($applicationId, $campaignId, $upFile)

Import referrals

Upload a CSV file containing the referrals that should be created. The file should be sent as multipart data.  The CSV file contains the following columns:  - `code` (required): The referral code. - `advocateprofileintegrationid` (required): The profile ID of the advocate. - `startdate`: The start date in RFC3339 of the code redemption period. - `expirydate`: The end date in RFC3339 of the code redemption period. - `limitval`: The maximum number of redemptions of this code. Defaults to `1` when left blank. - `attributes`: A JSON object describing _custom_ referral attribute names and their values, enclosed with double quotation marks.    For example, if you created a [custom attribute](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes)   called `category` associated with the referral entity, the object in the CSV file, when opened in a text editor, must be: `\"{\"category\": \"10_off\"}\"`.  You can use the time zone of your choice. It is converted to UTC internally by Talon.One.  **Important:** When you import a CSV file with referrals, a [customer profile](https://docs.talon.one/docs/dev/concepts/entities/customer-profiles) is **not** automatically created for each `advocateprofileintegrationid` column value. Use the [Update customer profile](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/updateCustomerProfileV2) endpoint or the [Update multiple customer profiles](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/updateCustomerProfilesV2) endpoint to create the customer profiles.  **Note:** We recommend limiting your file size to 500MB.  **Example:**  ```text code,startdate,expirydate,advocateprofileintegrationid,limitval,attributes REFERRAL_CODE1,2020-11-10T23:00:00Z,2021-11-11T23:00:00Z,integid_4,1,\"{\"\"my_attribute\"\": \"\"10_off\"\"}\" REFERRAL_CODE2,2020-11-10T23:00:00Z,2021-11-11T23:00:00Z,integid1,1,\"{\"\"my_attribute\"\": \"\"20_off\"\"}\" ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$upFile = 'upFile_example'; // string | The file with the information about the data that should be imported.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **upFile** | **string**| The file with the information about the data that should be imported. | [optional]

### Return type

[**\TalonOne\Client\Model\Import**](../Model/Import.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAccountCollections

> \TalonOne\Client\Model\InlineResponse20016 listAccountCollections($pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections in account

List account-level collections in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by collection name.

try {
    $result = $apiInstance->listAccountCollections($pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listAccountCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by collection name. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCatalogItems

> \TalonOne\Client\Model\InlineResponse20033 listCatalogItems($catalogId, $pageSize, $skip, $withTotalResultSize, $sku)

List items in a catalog

Return a paginated list of cart items in the given catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogId = 56; // int | The ID of the catalog. You can find the ID in the Campaign Manager in **Account** > **Tools** > **Cart item catalogs**.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$sku = 'sku_example'; // string | The SKU of the item.

try {
    $result = $apiInstance->listCatalogItems($catalogId, $pageSize, $skip, $withTotalResultSize, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogId** | **int**| The ID of the catalog. You can find the ID in the Campaign Manager in **Account** &gt; **Tools** &gt; **Cart item catalogs**. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **sku** | **string**| The SKU of the item. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollections

> \TalonOne\Client\Model\InlineResponse20018 listCollections($applicationId, $campaignId, $pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections in campaign

List collections in a given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by collection name.

try {
    $result = $apiInstance->listCollections($applicationId, $campaignId, $pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by collection name. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollectionsInApplication

> \TalonOne\Client\Model\InlineResponse20018 listCollectionsInApplication($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $name)

List collections in Application

List campaign-level collections from all campaigns in a given Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$name = 'name_example'; // string | Filter by collection name.

try {
    $result = $apiInstance->listCollectionsInApplication($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCollectionsInApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **name** | **string**| Filter by collection name. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listStores

> \TalonOne\Client\Model\InlineResponse20043 listStores($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $campaignId, $name, $integrationId)

List stores

List all stores for a specific Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$withTotalResultSize = True; // bool | When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When `true`: `hasMore` is true when there is a next page. `totalResultSize` is always zero. - When `false`: `hasMore` is always false. `totalResultSize` contains the total number of results for this query.
$campaignId = 3.4; // float | Filter results by campaign.
$name = 'name_example'; // string | The name of the store.
$integrationId = 'integrationId_example'; // string | The integration ID of the store.

try {
    $result = $apiInstance->listStores($applicationId, $pageSize, $skip, $sort, $withTotalResultSize, $campaignId, $name, $integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **withTotalResultSize** | **bool**| When this flag is set, the result includes the total size of the result, across all pages. This might decrease performance on large data sets.  - When &#x60;true&#x60;: &#x60;hasMore&#x60; is true when there is a next page. &#x60;totalResultSize&#x60; is always zero. - When &#x60;false&#x60;: &#x60;hasMore&#x60; is always false. &#x60;totalResultSize&#x60; contains the total number of results for this query. | [optional]
 **campaignId** | **float**| Filter results by campaign. | [optional]
 **name** | **string**| The name of the store. | [optional]
 **integrationId** | **string**| The integration ID of the store. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## notificationActivation

> notificationActivation($notificationId, $body)

Activate or deactivate notification

Activate or deactivate the given notification. When `enabled` is false, updates will no longer be sent for the given notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notificationId = 56; // int | The ID of the notification. Get it with the appropriate _List notifications_ endpoint.
$body = new \TalonOne\Client\Model\NotificationActivation(); // \TalonOne\Client\Model\NotificationActivation | body

try {
    $apiInstance->notificationActivation($notificationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->notificationActivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notificationId** | **int**| The ID of the notification. Get it with the appropriate _List notifications_ endpoint. |
 **body** | [**\TalonOne\Client\Model\NotificationActivation**](../Model/NotificationActivation.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAddedDeductedPointsNotification

> \TalonOne\Client\Model\BaseNotification postAddedDeductedPointsNotification($loyaltyProgramId, $body)

Create notification about added or deducted loyalty points

Create a notification about added or deducted loyalty points in a given profile-based loyalty program. A notification for added or deducted loyalty points is different from regular webhooks in that it is loyalty program-scoped and has a predefined payload.  For more information, see [Managing loyalty notifications](https://docs.talon.one/docs/product/loyalty-programs/profile-based/managing-loyalty-notifications).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the profile-based loyalty program. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$body = new \TalonOne\Client\Model\NewBaseNotification(); // \TalonOne\Client\Model\NewBaseNotification | body

try {
    $result = $apiInstance->postAddedDeductedPointsNotification($loyaltyProgramId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->postAddedDeductedPointsNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the profile-based loyalty program. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **body** | [**\TalonOne\Client\Model\NewBaseNotification**](../Model/NewBaseNotification.md)| body |

### Return type

[**\TalonOne\Client\Model\BaseNotification**](../Model/BaseNotification.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCatalogsStrikethroughNotification

> \TalonOne\Client\Model\BaseNotification postCatalogsStrikethroughNotification($applicationId, $body)

Create strikethrough notification

Create a notification for the in the given Application. For more information, see [Managing notifications](https://docs.talon.one/docs/product/applications/outbound-notifications).  See the [payload](https://docs.talon.one/outbound-notifications) you will receive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\NewBaseNotification(); // \TalonOne\Client\Model\NewBaseNotification | body

try {
    $result = $apiInstance->postCatalogsStrikethroughNotification($applicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->postCatalogsStrikethroughNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\NewBaseNotification**](../Model/NewBaseNotification.md)| body |

### Return type

[**\TalonOne\Client\Model\BaseNotification**](../Model/BaseNotification.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postPendingPointsNotification

> \TalonOne\Client\Model\BaseNotification postPendingPointsNotification($loyaltyProgramId, $body)

Create notification about pending loyalty points

Create a notification about pending loyalty points for a given profile-based loyalty program. For more information, see [Managing loyalty notifications](https://docs.talon.one/docs/product/loyalty-programs/profile-based/managing-loyalty-notifications).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the profile-based loyalty program. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$body = new \TalonOne\Client\Model\NewBaseNotification(); // \TalonOne\Client\Model\NewBaseNotification | body

try {
    $result = $apiInstance->postPendingPointsNotification($loyaltyProgramId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->postPendingPointsNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the profile-based loyalty program. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **body** | [**\TalonOne\Client\Model\NewBaseNotification**](../Model/NewBaseNotification.md)| body |

### Return type

[**\TalonOne\Client\Model\BaseNotification**](../Model/BaseNotification.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeLoyaltyPoints

> removeLoyaltyPoints($loyaltyProgramId, $integrationId, $body)

Deduct points from customer profile

Deduct points from the specified loyalty program and specified customer profile.  **Important:** - Only active points can be deducted. - Only pending points are rolled back when a session is cancelled or reopened.  To get the `integrationId` of the profile from a `sessionId`, use the [Update customer session](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | The identifier for the loyalty program.
$integrationId = 'integrationId_example'; // string | The identifier of the profile.
$body = new \TalonOne\Client\Model\DeductLoyaltyPoints(); // \TalonOne\Client\Model\DeductLoyaltyPoints | body

try {
    $apiInstance->removeLoyaltyPoints($loyaltyProgramId, $integrationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->removeLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **string**| The identifier for the loyalty program. |
 **integrationId** | **string**| The identifier of the profile. |
 **body** | [**\TalonOne\Client\Model\DeductLoyaltyPoints**](../Model/DeductLoyaltyPoints.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resetPassword

> \TalonOne\Client\Model\NewPassword resetPassword($body)

Reset password

Consumes the supplied password reset token and updates the password for the associated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TalonOne\Client\Model\NewPassword(); // \TalonOne\Client\Model\NewPassword | body

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
 **body** | [**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)| body |

### Return type

[**\TalonOne\Client\Model\NewPassword**](../Model/NewPassword.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedApplicationWideWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2009 searchCouponsAdvancedApplicationWideWithoutTotalCount($applicationId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $batchId, $exactMatch, $campaignState)

List coupons that match the given attributes (without total count)

List the coupons whose attributes match the query criteria in all the campaigns of the given Application.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request.  **Note:** The total count is not included in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$body = new \stdClass; // object | body
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code.
$recipientIntegrationId = 'recipientIntegrationId_example'; // string | Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
$batchId = 'batchId_example'; // string | Filter results by batches of coupons
$exactMatch = false; // bool | Filter results to an exact case-insensitive matching against the coupon code
$campaignState = 'campaignState_example'; // string | Filter results by the state of the campaign.  - `enabled`: Campaigns that are scheduled, running (activated), or expired. - `running`: Campaigns that are running (activated). - `disabled`: Campaigns that are disabled. - `expired`: Campaigns that are expired. - `archived`: Campaigns that are archived. - `draft`: Campaigns that are drafts.

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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **body** | **object**| body |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **batchId** | **string**| Filter results by batches of coupons | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **campaignState** | **string**| Filter results by the state of the campaign.  - &#x60;enabled&#x60;: Campaigns that are scheduled, running (activated), or expired. - &#x60;running&#x60;: Campaigns that are running (activated). - &#x60;disabled&#x60;: Campaigns that are disabled. - &#x60;expired&#x60;: Campaigns that are expired. - &#x60;archived&#x60;: Campaigns that are archived. - &#x60;draft&#x60;: Campaigns that are drafts. | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCouponsAdvancedWithoutTotalCount

> \TalonOne\Client\Model\InlineResponse2009 searchCouponsAdvancedWithoutTotalCount($applicationId, $campaignId, $body, $pageSize, $skip, $sort, $value, $createdBefore, $createdAfter, $valid, $usable, $referralId, $recipientIntegrationId, $exactMatch, $batchId)

List coupons that match the given attributes in campaign (without total count)

List the coupons whose attributes match the query criteria in the given campaign.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request.  **Note:** The total count is not included in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \stdClass; // object | body
$pageSize = 1000; // int | The number of items in this response.
$skip = 56; // int | The number of items to skip when paging through large result sets.
$sort = 'sort_example'; // string | The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with `-`.  **Note:** This parameter works only with numeric fields.
$value = 'value_example'; // string | Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally.
$valid = 'valid_example'; // string | Either \"expired\", \"validNow\", or \"validFuture\". The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future.
$usable = 'usable_example'; // string | Either \"true\" or \"false\". If \"true\", only coupons where `usageCounter < usageLimit` will be returned, \"false\" will return only coupons where `usageCounter >= usageLimit`.
$referralId = 56; // int | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code.
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
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | **object**| body |
 **pageSize** | **int**| The number of items in this response. | [optional] [default to 1000]
 **skip** | **int**| The number of items to skip when paging through large result sets. | [optional]
 **sort** | **string**| The field by which results should be sorted. By default, results are sorted in ascending order. To sort them in descending order, prefix the field name with &#x60;-&#x60;.  **Note:** This parameter works only with numeric fields. | [optional]
 **value** | **string**| Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters. | [optional]
 **createdBefore** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **createdAfter** | **\DateTime**| Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any timezone. Talon.One will convert to UTC internally. | [optional]
 **valid** | **string**| Either \&quot;expired\&quot;, \&quot;validNow\&quot;, or \&quot;validFuture\&quot;. The first option matches coupons in which the expiration date is set and in the past. The second matches coupons in which start date is null or in the past and expiration date is null or in the future, the third matches coupons in which start date is set and in the future. | [optional]
 **usable** | **string**| Either \&quot;true\&quot; or \&quot;false\&quot;. If \&quot;true\&quot;, only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned, \&quot;false\&quot; will return only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60;. | [optional]
 **referralId** | **int**| Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional]
 **recipientIntegrationId** | **string**| Filter results by match with a profile id specified in the coupon&#39;s RecipientIntegrationId field | [optional]
 **exactMatch** | **bool**| Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
 **batchId** | **string**| Filter results by batches of coupons | [optional]

### Return type

[**\TalonOne\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transferLoyaltyCard

> transferLoyaltyCard($loyaltyProgramId, $loyaltyCardId, $body)

Transfer card data

Transfer loyalty card data, such as linked customers, loyalty balances and transactions, from a given loyalty card to a new, automatically created loyalty card.  **Important:**  - The original card is automatically blocked once the new card is created, and it cannot be activated again. - The default status of the new card is _active_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$body = new \TalonOne\Client\Model\TransferLoyaltyCard(); // \TalonOne\Client\Model\TransferLoyaltyCard | body

try {
    $apiInstance->transferLoyaltyCard($loyaltyProgramId, $loyaltyCardId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->transferLoyaltyCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **body** | [**\TalonOne\Client\Model\TransferLoyaltyCard**](../Model/TransferLoyaltyCard.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAccountCollection

> \TalonOne\Client\Model\Collection updateAccountCollection($collectionId, $body)

Update account-level collection

Edit the description of a given account-level collection and enable or disable the collection in the specified Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint.
$body = new \TalonOne\Client\Model\UpdateCollection(); // \TalonOne\Client\Model\UpdateCollection | body

try {
    $result = $apiInstance->updateAccountCollection($collectionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAccountCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in account](#operation/listAccountCollections) endpoint. |
 **body** | [**\TalonOne\Client\Model\UpdateCollection**](../Model/UpdateCollection.md)| body |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAdditionalCost

> \TalonOne\Client\Model\AccountAdditionalCost updateAdditionalCost($additionalCostId, $body)

Update additional cost

Updates an existing additional cost. Once created, the only property of an additional cost that cannot be changed is the `name` property (or **API name** in the Campaign Manager). This restriction is in place to prevent accidentally breaking live integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additionalCostId = 56; // int | The ID of the additional cost. You can find the ID the the Campaign Manager's URL when you display the details of the cost in **Account** > **Tools** > **Additional costs**.
$body = new \TalonOne\Client\Model\NewAdditionalCost(); // \TalonOne\Client\Model\NewAdditionalCost | body

try {
    $result = $apiInstance->updateAdditionalCost($additionalCostId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additionalCostId** | **int**| The ID of the additional cost. You can find the ID the the Campaign Manager&#39;s URL when you display the details of the cost in **Account** &gt; **Tools** &gt; **Additional costs**. |
 **body** | [**\TalonOne\Client\Model\NewAdditionalCost**](../Model/NewAdditionalCost.md)| body |

### Return type

[**\TalonOne\Client\Model\AccountAdditionalCost**](../Model/AccountAdditionalCost.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAttribute

> \TalonOne\Client\Model\Attribute updateAttribute($attributeId, $body)

Update custom attribute

Update an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the description.  To change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeId = 56; // int | The ID of the attribute. You can find the ID in the Campaign Manager's URL when you display the details of an attribute in **Account** > **Tools** > **Attributes**.
$body = new \TalonOne\Client\Model\NewAttribute(); // \TalonOne\Client\Model\NewAttribute | body

try {
    $result = $apiInstance->updateAttribute($attributeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeId** | **int**| The ID of the attribute. You can find the ID in the Campaign Manager&#39;s URL when you display the details of an attribute in **Account** &gt; **Tools** &gt; **Attributes**. |
 **body** | [**\TalonOne\Client\Model\NewAttribute**](../Model/NewAttribute.md)| body |

### Return type

[**\TalonOne\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCampaign

> \TalonOne\Client\Model\Campaign updateCampaign($applicationId, $campaignId, $body)

Update campaign

Update the given campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\UpdateCampaign(); // \TalonOne\Client\Model\UpdateCampaign | body

try {
    $result = $apiInstance->updateCampaign($applicationId, $campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\UpdateCampaign**](../Model/UpdateCampaign.md)| body |

### Return type

[**\TalonOne\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCollection

> \TalonOne\Client\Model\Collection updateCollection($applicationId, $campaignId, $collectionId, $body)

Update campaign-level collection's description

Edit the description of a given campaign-level collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$collectionId = 56; // int | The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint.
$body = new \TalonOne\Client\Model\UpdateCampaignCollection(); // \TalonOne\Client\Model\UpdateCampaignCollection | body

try {
    $result = $apiInstance->updateCollection($applicationId, $campaignId, $collectionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **collectionId** | **int**| The ID of the collection. You can get it with the [List collections in Application](#operation/listCollectionsInApplication) endpoint. |
 **body** | [**\TalonOne\Client\Model\UpdateCampaignCollection**](../Model/UpdateCampaignCollection.md)| body |

### Return type

[**\TalonOne\Client\Model\Collection**](../Model/Collection.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCoupon

> \TalonOne\Client\Model\Coupon updateCoupon($applicationId, $campaignId, $couponId, $body)

Update coupon

Update the specified coupon.  <div class=\"redoc-section\">   <p class=\"title\">Important</p>    <p>With this PUT endpoint only, any property you do not explicitly set in your request   will be set to <code>null</code>.</p>  </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$couponId = 'couponId_example'; // string | The internal ID of the coupon code. You can find this value in the `id` property from the [List coupons](https://docs.talon.one/management-api#tag/Coupons/operation/getCouponsWithoutTotalCount) endpoint response.
$body = new \TalonOne\Client\Model\UpdateCoupon(); // \TalonOne\Client\Model\UpdateCoupon | body

try {
    $result = $apiInstance->updateCoupon($applicationId, $campaignId, $couponId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **couponId** | **string**| The internal ID of the coupon code. You can find this value in the &#x60;id&#x60; property from the [List coupons](https://docs.talon.one/management-api#tag/Coupons/operation/getCouponsWithoutTotalCount) endpoint response. |
 **body** | [**\TalonOne\Client\Model\UpdateCoupon**](../Model/UpdateCoupon.md)| body |

### Return type

[**\TalonOne\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCouponBatch

> updateCouponBatch($applicationId, $campaignId, $body)

Update coupons

Update all coupons, or a specific batch of coupons in the given campaign. You can find the `batchId` in the **Coupons** view of your Application in the Campaign Manager, or you can use [List coupons](#operation/getCouponsWithoutTotalCount).  <div class=\"redoc-section\">   <p class=\"title\">Important</p>    <ul>     <li>Only send sequential requests to this endpoint.</li>     <li>Requests to this endpoint timeout after 30 minutes. If you hit a timeout, reach out to our support team.</li>   </ul>  </div>  To update a specific coupon, use [Update coupon](#operation/updateCoupon).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$body = new \TalonOne\Client\Model\UpdateCouponBatch(); // \TalonOne\Client\Model\UpdateCouponBatch | body

try {
    $apiInstance->updateCouponBatch($applicationId, $campaignId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCouponBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **body** | [**\TalonOne\Client\Model\UpdateCouponBatch**](../Model/UpdateCouponBatch.md)| body |

### Return type

void (empty response body)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateLoyaltyCard

> \TalonOne\Client\Model\LoyaltyCard updateLoyaltyCard($loyaltyProgramId, $loyaltyCardId, $body)

Update loyalty card status

Update the status of the given loyalty card. A card can be _active_ or _inactive_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 56; // int | Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint.
$loyaltyCardId = 'loyaltyCardId_example'; // string | Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint.
$body = new \TalonOne\Client\Model\UpdateLoyaltyCard(); // \TalonOne\Client\Model\UpdateLoyaltyCard | body

try {
    $result = $apiInstance->updateLoyaltyCard($loyaltyProgramId, $loyaltyCardId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateLoyaltyCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loyaltyProgramId** | **int**| Identifier of the card-based loyalty program containing the loyalty card. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. |
 **loyaltyCardId** | **string**| Identifier of the loyalty card. You can get the identifier with the [List loyalty cards](https://docs.talon.one/management-api#tag/Loyalty-cards/operation/getLoyaltyCards) endpoint. |
 **body** | [**\TalonOne\Client\Model\UpdateLoyaltyCard**](../Model/UpdateLoyaltyCard.md)| body |

### Return type

[**\TalonOne\Client\Model\LoyaltyCard**](../Model/LoyaltyCard.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReferral

> \TalonOne\Client\Model\Referral updateReferral($applicationId, $campaignId, $referralId, $body)

Update referral

Update the specified referral.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$campaignId = 56; // int | The ID of the campaign. It is displayed in your Talon.One deployment URL.
$referralId = 'referralId_example'; // string | The ID of the referral code.
$body = new \TalonOne\Client\Model\UpdateReferral(); // \TalonOne\Client\Model\UpdateReferral | body

try {
    $result = $apiInstance->updateReferral($applicationId, $campaignId, $referralId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateReferral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **campaignId** | **int**| The ID of the campaign. It is displayed in your Talon.One deployment URL. |
 **referralId** | **string**| The ID of the referral code. |
 **body** | [**\TalonOne\Client\Model\UpdateReferral**](../Model/UpdateReferral.md)| body |

### Return type

[**\TalonOne\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateStore

> \TalonOne\Client\Model\Store updateStore($applicationId, $storeId, $body)

Update store

Update store details for a specific store ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: management_key
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: manager_auth
$config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TalonOne\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TalonOne\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | The ID of the Application. It is displayed in your Talon.One deployment URL.
$storeId = 'storeId_example'; // string | The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint.
$body = new \TalonOne\Client\Model\NewStore(); // \TalonOne\Client\Model\NewStore | body

try {
    $result = $apiInstance->updateStore($applicationId, $storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| The ID of the Application. It is displayed in your Talon.One deployment URL. |
 **storeId** | **string**| The ID of the store. You can get this ID with the [List stores](#tag/Stores/operation/listStores) endpoint. |
 **body** | [**\TalonOne\Client\Model\NewStore**](../Model/NewStore.md)| body |

### Return type

[**\TalonOne\Client\Model\Store**](../Model/Store.md)

### Authorization

[management_key](../../README.md#management_key), [manager_auth](../../README.md#manager_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

