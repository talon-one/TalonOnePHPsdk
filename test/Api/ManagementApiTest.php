<?php
/**
 * ManagementApiTest
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you access the Campaign Manager at `https://yourbaseurl.talon.one/`, the URL for the [updateCustomerSessionV2](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint is `https://yourbaseurl.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace TalonOne\Client;

use \TalonOne\Client\Configuration;
use \TalonOne\Client\ApiException;
use \TalonOne\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ManagementApiTest Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManagementApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for activateUserByEmail
     *
     * Enable user by email address.
     *
     */
    public function testActivateUserByEmail()
    {
    }

    /**
     * Test case for addLoyaltyCardPoints
     *
     * Add points to card.
     *
     */
    public function testAddLoyaltyCardPoints()
    {
    }

    /**
     * Test case for addLoyaltyPoints
     *
     * Add points to customer profile.
     *
     */
    public function testAddLoyaltyPoints()
    {
    }

    /**
     * Test case for copyCampaignToApplications
     *
     * Copy the campaign into the specified Application.
     *
     */
    public function testCopyCampaignToApplications()
    {
    }

    /**
     * Test case for createAccountCollection
     *
     * Create account-level collection.
     *
     */
    public function testCreateAccountCollection()
    {
    }

    /**
     * Test case for createAchievement
     *
     * Create achievement.
     *
     */
    public function testCreateAchievement()
    {
    }

    /**
     * Test case for createAdditionalCost
     *
     * Create additional cost.
     *
     */
    public function testCreateAdditionalCost()
    {
    }

    /**
     * Test case for createAttribute
     *
     * Create custom attribute.
     *
     */
    public function testCreateAttribute()
    {
    }

    /**
     * Test case for createCampaignFromTemplate
     *
     * Create campaign from campaign template.
     *
     */
    public function testCreateCampaignFromTemplate()
    {
    }

    /**
     * Test case for createCollection
     *
     * Create campaign-level collection.
     *
     */
    public function testCreateCollection()
    {
    }

    /**
     * Test case for createCoupons
     *
     * Create coupons.
     *
     */
    public function testCreateCoupons()
    {
    }

    /**
     * Test case for createCouponsAsync
     *
     * Create coupons asynchronously.
     *
     */
    public function testCreateCouponsAsync()
    {
    }

    /**
     * Test case for createCouponsForMultipleRecipients
     *
     * Create coupons for multiple recipients.
     *
     */
    public function testCreateCouponsForMultipleRecipients()
    {
    }

    /**
     * Test case for createInviteEmail
     *
     * Resend invitation email.
     *
     */
    public function testCreateInviteEmail()
    {
    }

    /**
     * Test case for createInviteV2
     *
     * Invite user.
     *
     */
    public function testCreateInviteV2()
    {
    }

    /**
     * Test case for createPasswordRecoveryEmail
     *
     * Request a password reset.
     *
     */
    public function testCreatePasswordRecoveryEmail()
    {
    }

    /**
     * Test case for createSession
     *
     * Create session.
     *
     */
    public function testCreateSession()
    {
    }

    /**
     * Test case for createStore
     *
     * Create store.
     *
     */
    public function testCreateStore()
    {
    }

    /**
     * Test case for deactivateUserByEmail
     *
     * Disable user by email address.
     *
     */
    public function testDeactivateUserByEmail()
    {
    }

    /**
     * Test case for deductLoyaltyCardPoints
     *
     * Deduct points from card.
     *
     */
    public function testDeductLoyaltyCardPoints()
    {
    }

    /**
     * Test case for deleteAccountCollection
     *
     * Delete account-level collection.
     *
     */
    public function testDeleteAccountCollection()
    {
    }

    /**
     * Test case for deleteAchievement
     *
     * Delete achievement.
     *
     */
    public function testDeleteAchievement()
    {
    }

    /**
     * Test case for deleteCampaign
     *
     * Delete campaign.
     *
     */
    public function testDeleteCampaign()
    {
    }

    /**
     * Test case for deleteCollection
     *
     * Delete campaign-level collection.
     *
     */
    public function testDeleteCollection()
    {
    }

    /**
     * Test case for deleteCoupon
     *
     * Delete coupon.
     *
     */
    public function testDeleteCoupon()
    {
    }

    /**
     * Test case for deleteCoupons
     *
     * Delete coupons.
     *
     */
    public function testDeleteCoupons()
    {
    }

    /**
     * Test case for deleteLoyaltyCard
     *
     * Delete loyalty card.
     *
     */
    public function testDeleteLoyaltyCard()
    {
    }

    /**
     * Test case for deleteReferral
     *
     * Delete referral.
     *
     */
    public function testDeleteReferral()
    {
    }

    /**
     * Test case for deleteStore
     *
     * Delete store.
     *
     */
    public function testDeleteStore()
    {
    }

    /**
     * Test case for deleteUser
     *
     * Delete user.
     *
     */
    public function testDeleteUser()
    {
    }

    /**
     * Test case for deleteUserByEmail
     *
     * Delete user by email address.
     *
     */
    public function testDeleteUserByEmail()
    {
    }

    /**
     * Test case for destroySession
     *
     * Destroy session.
     *
     */
    public function testDestroySession()
    {
    }

    /**
     * Test case for disconnectCampaignStores
     *
     * Disconnect stores.
     *
     */
    public function testDisconnectCampaignStores()
    {
    }

    /**
     * Test case for exportAccountCollectionItems
     *
     * Export account-level collection's items.
     *
     */
    public function testExportAccountCollectionItems()
    {
    }

    /**
     * Test case for exportAchievements
     *
     * Export achievement customer data.
     *
     */
    public function testExportAchievements()
    {
    }

    /**
     * Test case for exportAudiencesMemberships
     *
     * Export audience members.
     *
     */
    public function testExportAudiencesMemberships()
    {
    }

    /**
     * Test case for exportCampaignStores
     *
     * Export stores.
     *
     */
    public function testExportCampaignStores()
    {
    }

    /**
     * Test case for exportCollectionItems
     *
     * Export campaign-level collection's items.
     *
     */
    public function testExportCollectionItems()
    {
    }

    /**
     * Test case for exportCoupons
     *
     * Export coupons.
     *
     */
    public function testExportCoupons()
    {
    }

    /**
     * Test case for exportCustomerSessions
     *
     * Export customer sessions.
     *
     */
    public function testExportCustomerSessions()
    {
    }

    /**
     * Test case for exportCustomersTiers
     *
     * Export customers' tier data.
     *
     */
    public function testExportCustomersTiers()
    {
    }

    /**
     * Test case for exportEffects
     *
     * Export triggered effects.
     *
     */
    public function testExportEffects()
    {
    }

    /**
     * Test case for exportLoyaltyBalance
     *
     * Export customer loyalty balance to CSV.
     *
     */
    public function testExportLoyaltyBalance()
    {
    }

    /**
     * Test case for exportLoyaltyBalances
     *
     * Export customer loyalty balances.
     *
     */
    public function testExportLoyaltyBalances()
    {
    }

    /**
     * Test case for exportLoyaltyCardBalances
     *
     * Export all card transaction logs.
     *
     */
    public function testExportLoyaltyCardBalances()
    {
    }

    /**
     * Test case for exportLoyaltyCardLedger
     *
     * Export card's ledger log.
     *
     */
    public function testExportLoyaltyCardLedger()
    {
    }

    /**
     * Test case for exportLoyaltyLedger
     *
     * Export customer's transaction logs.
     *
     */
    public function testExportLoyaltyLedger()
    {
    }

    /**
     * Test case for exportPoolGiveaways
     *
     * Export giveaway codes of a giveaway pool.
     *
     */
    public function testExportPoolGiveaways()
    {
    }

    /**
     * Test case for exportReferrals
     *
     * Export referrals.
     *
     */
    public function testExportReferrals()
    {
    }

    /**
     * Test case for getAccessLogsWithoutTotalCount
     *
     * Get access logs for Application.
     *
     */
    public function testGetAccessLogsWithoutTotalCount()
    {
    }

    /**
     * Test case for getAccount
     *
     * Get account details.
     *
     */
    public function testGetAccount()
    {
    }

    /**
     * Test case for getAccountAnalytics
     *
     * Get account analytics.
     *
     */
    public function testGetAccountAnalytics()
    {
    }

    /**
     * Test case for getAccountCollection
     *
     * Get account-level collection.
     *
     */
    public function testGetAccountCollection()
    {
    }

    /**
     * Test case for getAchievement
     *
     * Get achievement.
     *
     */
    public function testGetAchievement()
    {
    }

    /**
     * Test case for getAdditionalCost
     *
     * Get additional cost.
     *
     */
    public function testGetAdditionalCost()
    {
    }

    /**
     * Test case for getAdditionalCosts
     *
     * List additional costs.
     *
     */
    public function testGetAdditionalCosts()
    {
    }

    /**
     * Test case for getAllAccessLogs
     *
     * List access logs.
     *
     */
    public function testGetAllAccessLogs()
    {
    }

    /**
     * Test case for getApplication
     *
     * Get Application.
     *
     */
    public function testGetApplication()
    {
    }

    /**
     * Test case for getApplicationApiHealth
     *
     * Get Application health.
     *
     */
    public function testGetApplicationApiHealth()
    {
    }

    /**
     * Test case for getApplicationCustomer
     *
     * Get application's customer.
     *
     */
    public function testGetApplicationCustomer()
    {
    }

    /**
     * Test case for getApplicationCustomerFriends
     *
     * List friends referred by customer profile.
     *
     */
    public function testGetApplicationCustomerFriends()
    {
    }

    /**
     * Test case for getApplicationCustomers
     *
     * List application's customers.
     *
     */
    public function testGetApplicationCustomers()
    {
    }

    /**
     * Test case for getApplicationCustomersByAttributes
     *
     * List application customers matching the given attributes.
     *
     */
    public function testGetApplicationCustomersByAttributes()
    {
    }

    /**
     * Test case for getApplicationEventTypes
     *
     * List Applications event types.
     *
     */
    public function testGetApplicationEventTypes()
    {
    }

    /**
     * Test case for getApplicationEventsWithoutTotalCount
     *
     * List Applications events.
     *
     */
    public function testGetApplicationEventsWithoutTotalCount()
    {
    }

    /**
     * Test case for getApplicationSession
     *
     * Get Application session.
     *
     */
    public function testGetApplicationSession()
    {
    }

    /**
     * Test case for getApplicationSessions
     *
     * List Application sessions.
     *
     */
    public function testGetApplicationSessions()
    {
    }

    /**
     * Test case for getApplications
     *
     * List Applications.
     *
     */
    public function testGetApplications()
    {
    }

    /**
     * Test case for getAttribute
     *
     * Get custom attribute.
     *
     */
    public function testGetAttribute()
    {
    }

    /**
     * Test case for getAttributes
     *
     * List custom attributes.
     *
     */
    public function testGetAttributes()
    {
    }

    /**
     * Test case for getAudienceMemberships
     *
     * List audience members.
     *
     */
    public function testGetAudienceMemberships()
    {
    }

    /**
     * Test case for getAudiences
     *
     * List audiences.
     *
     */
    public function testGetAudiences()
    {
    }

    /**
     * Test case for getAudiencesAnalytics
     *
     * List audience analytics.
     *
     */
    public function testGetAudiencesAnalytics()
    {
    }

    /**
     * Test case for getCampaign
     *
     * Get campaign.
     *
     */
    public function testGetCampaign()
    {
    }

    /**
     * Test case for getCampaignAnalytics
     *
     * Get analytics of campaigns.
     *
     */
    public function testGetCampaignAnalytics()
    {
    }

    /**
     * Test case for getCampaignByAttributes
     *
     * List campaigns that match the given attributes.
     *
     */
    public function testGetCampaignByAttributes()
    {
    }

    /**
     * Test case for getCampaignGroup
     *
     * Get campaign access group.
     *
     */
    public function testGetCampaignGroup()
    {
    }

    /**
     * Test case for getCampaignGroups
     *
     * List campaign access groups.
     *
     */
    public function testGetCampaignGroups()
    {
    }

    /**
     * Test case for getCampaignTemplates
     *
     * List campaign templates.
     *
     */
    public function testGetCampaignTemplates()
    {
    }

    /**
     * Test case for getCampaigns
     *
     * List campaigns.
     *
     */
    public function testGetCampaigns()
    {
    }

    /**
     * Test case for getChanges
     *
     * Get audit logs for an account.
     *
     */
    public function testGetChanges()
    {
    }

    /**
     * Test case for getCollection
     *
     * Get campaign-level collection.
     *
     */
    public function testGetCollection()
    {
    }

    /**
     * Test case for getCollectionItems
     *
     * Get collection items.
     *
     */
    public function testGetCollectionItems()
    {
    }

    /**
     * Test case for getCouponsWithoutTotalCount
     *
     * List coupons.
     *
     */
    public function testGetCouponsWithoutTotalCount()
    {
    }

    /**
     * Test case for getCustomerActivityReport
     *
     * Get customer's activity report.
     *
     */
    public function testGetCustomerActivityReport()
    {
    }

    /**
     * Test case for getCustomerActivityReportsWithoutTotalCount
     *
     * Get Activity Reports for Application Customers.
     *
     */
    public function testGetCustomerActivityReportsWithoutTotalCount()
    {
    }

    /**
     * Test case for getCustomerAnalytics
     *
     * Get customer's analytics report.
     *
     */
    public function testGetCustomerAnalytics()
    {
    }

    /**
     * Test case for getCustomerProfile
     *
     * Get customer profile.
     *
     */
    public function testGetCustomerProfile()
    {
    }

    /**
     * Test case for getCustomerProfileAchievementProgress
     *
     * List customer achievements.
     *
     */
    public function testGetCustomerProfileAchievementProgress()
    {
    }

    /**
     * Test case for getCustomerProfiles
     *
     * List customer profiles.
     *
     */
    public function testGetCustomerProfiles()
    {
    }

    /**
     * Test case for getCustomersByAttributes
     *
     * List customer profiles matching the given attributes.
     *
     */
    public function testGetCustomersByAttributes()
    {
    }

    /**
     * Test case for getEventTypes
     *
     * List event types.
     *
     */
    public function testGetEventTypes()
    {
    }

    /**
     * Test case for getExports
     *
     * Get exports.
     *
     */
    public function testGetExports()
    {
    }

    /**
     * Test case for getLoyaltyCard
     *
     * Get loyalty card.
     *
     */
    public function testGetLoyaltyCard()
    {
    }

    /**
     * Test case for getLoyaltyCardTransactionLogs
     *
     * List card's transactions.
     *
     */
    public function testGetLoyaltyCardTransactionLogs()
    {
    }

    /**
     * Test case for getLoyaltyCards
     *
     * List loyalty cards.
     *
     */
    public function testGetLoyaltyCards()
    {
    }

    /**
     * Test case for getLoyaltyPoints
     *
     * Get customer's full loyalty ledger.
     *
     */
    public function testGetLoyaltyPoints()
    {
    }

    /**
     * Test case for getLoyaltyProgram
     *
     * Get loyalty program.
     *
     */
    public function testGetLoyaltyProgram()
    {
    }

    /**
     * Test case for getLoyaltyProgramTransactions
     *
     * List loyalty program transactions.
     *
     */
    public function testGetLoyaltyProgramTransactions()
    {
    }

    /**
     * Test case for getLoyaltyPrograms
     *
     * List loyalty programs.
     *
     */
    public function testGetLoyaltyPrograms()
    {
    }

    /**
     * Test case for getLoyaltyStatistics
     *
     * Get loyalty program statistics.
     *
     */
    public function testGetLoyaltyStatistics()
    {
    }

    /**
     * Test case for getReferralsWithoutTotalCount
     *
     * List referrals.
     *
     */
    public function testGetReferralsWithoutTotalCount()
    {
    }

    /**
     * Test case for getRoleV2
     *
     * Get role.
     *
     */
    public function testGetRoleV2()
    {
    }

    /**
     * Test case for getRuleset
     *
     * Get ruleset.
     *
     */
    public function testGetRuleset()
    {
    }

    /**
     * Test case for getRulesets
     *
     * List campaign rulesets.
     *
     */
    public function testGetRulesets()
    {
    }

    /**
     * Test case for getStore
     *
     * Get store.
     *
     */
    public function testGetStore()
    {
    }

    /**
     * Test case for getUser
     *
     * Get user.
     *
     */
    public function testGetUser()
    {
    }

    /**
     * Test case for getUsers
     *
     * List users in account.
     *
     */
    public function testGetUsers()
    {
    }

    /**
     * Test case for getWebhook
     *
     * Get webhook.
     *
     */
    public function testGetWebhook()
    {
    }

    /**
     * Test case for getWebhookActivationLogs
     *
     * List webhook activation log entries.
     *
     */
    public function testGetWebhookActivationLogs()
    {
    }

    /**
     * Test case for getWebhookLogs
     *
     * List webhook log entries.
     *
     */
    public function testGetWebhookLogs()
    {
    }

    /**
     * Test case for getWebhooks
     *
     * List webhooks.
     *
     */
    public function testGetWebhooks()
    {
    }

    /**
     * Test case for importAccountCollection
     *
     * Import data into existing account-level collection.
     *
     */
    public function testImportAccountCollection()
    {
    }

    /**
     * Test case for importAllowedList
     *
     * Import allowed values for attribute.
     *
     */
    public function testImportAllowedList()
    {
    }

    /**
     * Test case for importAudiencesMemberships
     *
     * Import audience members.
     *
     */
    public function testImportAudiencesMemberships()
    {
    }

    /**
     * Test case for importCampaignStores
     *
     * Import stores.
     *
     */
    public function testImportCampaignStores()
    {
    }

    /**
     * Test case for importCollection
     *
     * Import data into existing campaign-level collection.
     *
     */
    public function testImportCollection()
    {
    }

    /**
     * Test case for importCoupons
     *
     * Import coupons.
     *
     */
    public function testImportCoupons()
    {
    }

    /**
     * Test case for importLoyaltyCards
     *
     * Import loyalty cards.
     *
     */
    public function testImportLoyaltyCards()
    {
    }

    /**
     * Test case for importLoyaltyCustomersTiers
     *
     * Import customers into loyalty tiers.
     *
     */
    public function testImportLoyaltyCustomersTiers()
    {
    }

    /**
     * Test case for importLoyaltyPoints
     *
     * Import loyalty points.
     *
     */
    public function testImportLoyaltyPoints()
    {
    }

    /**
     * Test case for importPoolGiveaways
     *
     * Import giveaway codes into a giveaway pool.
     *
     */
    public function testImportPoolGiveaways()
    {
    }

    /**
     * Test case for importReferrals
     *
     * Import referrals.
     *
     */
    public function testImportReferrals()
    {
    }

    /**
     * Test case for inviteUserExternal
     *
     * Invite user from identity provider.
     *
     */
    public function testInviteUserExternal()
    {
    }

    /**
     * Test case for listAccountCollections
     *
     * List collections in account.
     *
     */
    public function testListAccountCollections()
    {
    }

    /**
     * Test case for listAchievements
     *
     * List achievements.
     *
     */
    public function testListAchievements()
    {
    }

    /**
     * Test case for listAllRolesV2
     *
     * List roles.
     *
     */
    public function testListAllRolesV2()
    {
    }

    /**
     * Test case for listCatalogItems
     *
     * List items in a catalog.
     *
     */
    public function testListCatalogItems()
    {
    }

    /**
     * Test case for listCollections
     *
     * List collections in campaign.
     *
     */
    public function testListCollections()
    {
    }

    /**
     * Test case for listCollectionsInApplication
     *
     * List collections in Application.
     *
     */
    public function testListCollectionsInApplication()
    {
    }

    /**
     * Test case for listStores
     *
     * List stores.
     *
     */
    public function testListStores()
    {
    }

    /**
     * Test case for notificationActivation
     *
     * Activate or deactivate notification.
     *
     */
    public function testNotificationActivation()
    {
    }

    /**
     * Test case for oktaEventHandlerChallenge
     *
     * Validate Okta API ownership.
     *
     */
    public function testOktaEventHandlerChallenge()
    {
    }

    /**
     * Test case for postAddedDeductedPointsNotification
     *
     * Create notification about added or deducted loyalty points.
     *
     */
    public function testPostAddedDeductedPointsNotification()
    {
    }

    /**
     * Test case for postCatalogsStrikethroughNotification
     *
     * Create strikethrough notification.
     *
     */
    public function testPostCatalogsStrikethroughNotification()
    {
    }

    /**
     * Test case for postPendingPointsNotification
     *
     * Create notification about pending loyalty points.
     *
     */
    public function testPostPendingPointsNotification()
    {
    }

    /**
     * Test case for removeLoyaltyPoints
     *
     * Deduct points from customer profile.
     *
     */
    public function testRemoveLoyaltyPoints()
    {
    }

    /**
     * Test case for resetPassword
     *
     * Reset password.
     *
     */
    public function testResetPassword()
    {
    }

    /**
     * Test case for scimCreateUser
     *
     * Create SCIM user.
     *
     */
    public function testScimCreateUser()
    {
    }

    /**
     * Test case for scimDeleteUser
     *
     * Delete SCIM user.
     *
     */
    public function testScimDeleteUser()
    {
    }

    /**
     * Test case for scimGetResourceTypes
     *
     * List supported SCIM resource types.
     *
     */
    public function testScimGetResourceTypes()
    {
    }

    /**
     * Test case for scimGetSchemas
     *
     * List supported SCIM schemas.
     *
     */
    public function testScimGetSchemas()
    {
    }

    /**
     * Test case for scimGetServiceProviderConfig
     *
     * Service config endpoint for SCIM provisioning protocol.
     *
     */
    public function testScimGetServiceProviderConfig()
    {
    }

    /**
     * Test case for scimGetUser
     *
     * Get SCIM user.
     *
     */
    public function testScimGetUser()
    {
    }

    /**
     * Test case for scimGetUsers
     *
     * List SCIM users.
     *
     */
    public function testScimGetUsers()
    {
    }

    /**
     * Test case for scimPatchUser
     *
     * Update SCIM user attributes.
     *
     */
    public function testScimPatchUser()
    {
    }

    /**
     * Test case for scimReplaceUserAttributes
     *
     * Update SCIM user.
     *
     */
    public function testScimReplaceUserAttributes()
    {
    }

    /**
     * Test case for searchCouponsAdvancedApplicationWideWithoutTotalCount
     *
     * List coupons that match the given attributes (without total count).
     *
     */
    public function testSearchCouponsAdvancedApplicationWideWithoutTotalCount()
    {
    }

    /**
     * Test case for searchCouponsAdvancedWithoutTotalCount
     *
     * List coupons that match the given attributes in campaign (without total count).
     *
     */
    public function testSearchCouponsAdvancedWithoutTotalCount()
    {
    }

    /**
     * Test case for transferLoyaltyCard
     *
     * Transfer card data.
     *
     */
    public function testTransferLoyaltyCard()
    {
    }

    /**
     * Test case for updateAccountCollection
     *
     * Update account-level collection.
     *
     */
    public function testUpdateAccountCollection()
    {
    }

    /**
     * Test case for updateAchievement
     *
     * Update achievement.
     *
     */
    public function testUpdateAchievement()
    {
    }

    /**
     * Test case for updateAdditionalCost
     *
     * Update additional cost.
     *
     */
    public function testUpdateAdditionalCost()
    {
    }

    /**
     * Test case for updateAttribute
     *
     * Update custom attribute.
     *
     */
    public function testUpdateAttribute()
    {
    }

    /**
     * Test case for updateCampaign
     *
     * Update campaign.
     *
     */
    public function testUpdateCampaign()
    {
    }

    /**
     * Test case for updateCollection
     *
     * Update campaign-level collection's description.
     *
     */
    public function testUpdateCollection()
    {
    }

    /**
     * Test case for updateCoupon
     *
     * Update coupon.
     *
     */
    public function testUpdateCoupon()
    {
    }

    /**
     * Test case for updateCouponBatch
     *
     * Update coupons.
     *
     */
    public function testUpdateCouponBatch()
    {
    }

    /**
     * Test case for updateLoyaltyCard
     *
     * Update loyalty card status.
     *
     */
    public function testUpdateLoyaltyCard()
    {
    }

    /**
     * Test case for updateReferral
     *
     * Update referral.
     *
     */
    public function testUpdateReferral()
    {
    }

    /**
     * Test case for updateRoleV2
     *
     * Update role.
     *
     */
    public function testUpdateRoleV2()
    {
    }

    /**
     * Test case for updateStore
     *
     * Update store.
     *
     */
    public function testUpdateStore()
    {
    }

    /**
     * Test case for updateUser
     *
     * Update user.
     *
     */
    public function testUpdateUser()
    {
    }
}
