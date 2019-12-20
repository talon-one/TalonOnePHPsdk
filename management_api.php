<?php

/**
* Generated at Fri Dec 20 2019 10:13:59 GMT+0100 (CET)
* Author: Talon.One
* The contents of this file are auto generated
*/

class TalonOneManagement {
    public $subdomain;
    public $sessionToken;
    
    public function apiRequest($method, $resource, $body, $query) {
        $baseUrl = "https://".$this->subdomain.".talon.one/v1";
        $jsonString = json_encode($body);
        $url = $baseUrl.'/'.$resource;

        if ($query) {
          $queryString = '?';
          foreach($query as $key => $value)
          {
            $queryString = $queryString . urlencode($key) . '=' . urlencode($value) . '&';
          }
          $url = $baseUrl.'/'.$resource.$queryString;
        }

        $headers = array(
            'Content-Type: application/json'
        );

        if ($this->sessionToken) {
            array_push($headers, "Authorization: Bearer ".$this->sessionToken);
        }

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonString);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        curl_close($curl);

        if ($response) {
            $response = json_decode($response, true);
        }
        return $response;
    }

    public function post($resource, $body) {
        return $this->apiRequest("POST", $resource, $body, array());
    }
    
    public function put($resource, $body) {
        return $this->apiRequest("PUT", $resource, $body, array());
    }
    
    public function get($resource, $query) {
        return $this->apiRequest("GET", $resource, array(), $query);
    }
    
    public function delete($resource, $body) {
        return $this->apiRequest("DELETE", $resource, $body, array());
    }
    
    public function createManagementSession($email, $password) {
        $response = $this->post("sessions", array("email" => $email, "password" => $password));
        $this->sessionToken = $response['token'];
        return $response;
    }

    public function destroyManagementSession() {
        $response = $this->delete("sessions", array());
        $this->sessionToken = NULL;
        return $response;
    }


    /**
    * List all application in the current account.
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_applications($query) {
      return $this->get("applications", $query);
    }

    /**
    * Get the application specified by the ID.
    * Arguments
    *
    * @param 	integer	   $applicationId -

    *
    */
 
    public function get_application($applicationId, $query) {
      return $this->get("applications/$applicationId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -

    *
    */
 
    public function create_campaign($applicationId, $body) {
      return $this->post("applications/$applicationId/campaigns", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $campaignState Filter results by the state of the campaign.
    * @param 	string	   $name Filter results performing case-insensitive matching against the name of the campaign.
    * @param 	string	   $tags Filter results performing case-insensitive matching against the tags of the campaign. When used in conjunction with the "name" query parameter, a logical OR will be performed to search both tags and name for the provided values
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the campaign creation timestamp.

    *
    */
 
    public function get_campaigns($applicationId, $query) {
      return $this->get("applications/$applicationId/campaigns", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function update_campaign_set($applicationId, $body) {
      return $this->put("applications/$applicationId/campaign_set", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_campaign_set($applicationId, $query) {
      return $this->get("applications/$applicationId/campaign_set", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function get_campaign($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function update_campaign($applicationId, $campaignId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function delete_campaign($applicationId, $campaignId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId", $body);
    }

    /**
    * Copy the campaign into every specified application.
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function copy_campaign_to_applications($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/copy", $body);
    }

    /**
    * Gets a list of all the campaigns that exactly match a set of attributes. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $campaignState Filter results by the state of the campaign.

    *
    */
 
    public function get_campaign_by_attributes($applicationId, $body) {
      return $this->post("applications/$applicationId/campaigns_search", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function create_ruleset($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/rulesets", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 

    *
    */
 
    public function get_rulesets($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/rulesets", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    *
    */
 
    public function update_ruleset($applicationId, $campaignId, $rulesetId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    *
    */
 
    public function get_ruleset($applicationId, $campaignId, $rulesetId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	integer	   $rulesetId 

    *
    */
 
    public function delete_ruleset($applicationId, $campaignId, $rulesetId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/rulesets/$rulesetId", $body);
    }

    /**
    * Create coupons according to some pattern. Up to 20.000 coupons can be created without a unique prefix. When a unique prefix is provided, up to 200.000 coupons can be created.
    * Arguments
    *
    * @param 	string	   $silent If set to 'yes', response will be an empty 204, otherwise a list of the coupons generated (to to 1000).
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function create_coupons($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 

    *
    */
 
    public function update_coupon_batch($applicationId, $campaignId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/coupons", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $startsAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $startsBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $expiresAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $expiresBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    *
    */
 
    public function get_coupons($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/coupons", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $startsAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $startsBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $expiresAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $expiresBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    *
    */
 
    public function delete_coupons($applicationId, $campaignId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code

    *
    */
 
    public function get_coupons_without_total_count($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/coupons/no_total", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $couponId The ID of the coupon code to update

    *
    */
 
    public function update_coupon($applicationId, $campaignId, $couponId, $body) {
      return $this->put("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $couponId The ID of the coupon code to delete

    *
    */
 
    public function delete_coupon($applicationId, $campaignId, $couponId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/coupons/$couponId", $body);
    }

    /**
    * Gets a list of all the coupons that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a coupon, even if the coupon has more attributes that are not present on the request. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $batchId Filter results by batches of coupons

    *
    */
 
    public function get_coupons_by_attributes($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons_search", $body);
    }

    /**
    * Gets a list of all the coupons with attributes matching the query criteria Application wide 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $campaignState Filter results by the state of the campaign.

    *
    */
 
    public function get_coupons_by_attributes_application_wide($applicationId, $body) {
      return $this->post("applications/$applicationId/coupons_search", $body);
    }

    /**
    * Gets a list of all the coupons with attributes matching the query criteria 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $batchId Filter results by batches of coupons

    *
    */
 
    public function search_coupons_advanced($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons_search_advanced", $body);
    }

    /**
    * Gets a list of all the coupons with attributes matching the query criteria 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $batchId Filter results by batches of coupons

    *
    */
 
    public function search_coupons_advanced_without_total_count($applicationId, $campaignId, $body) {
      return $this->post("applications/$applicationId/campaigns/$campaignId/coupons_search_advanced/no_total", $body);
    }

    /**
    * Gets a list of all the coupons with attributes matching the query criteria in all active campaigns of an application 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $campaignState Filter results by the state of the campaign.

    *
    */
 
    public function search_coupons_advanced_application_wide($applicationId, $body) {
      return $this->post("applications/$applicationId/coupons_search_advanced", $body);
    }

    /**
    * Gets a list of all the coupons with attributes matching the query criteria in all active campaigns of an application 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $value Filter results performing case-insensitive matching against the coupon code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches coupons in which the expiry date is set and in the past. The second matches coupons in which start date is null or in the past and expiry date is null or in the future, the third matches coupons in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only coupons where `usageCounter < usageLimit` will be returned, "false" will return only coupons where `usageCounter >= usageLimit`.
    * @param 	integer	   $referralId Filter the results by matching them with the Id of a referral, that meaning the coupons that had been created as an effect of the usage of a referral code.
    * @param 	string	   $recipientIntegrationId Filter results by match with a profile id specified in the coupon's RecipientIntegrationId field
    * @param 	string	   $batchId Filter results by batches of coupons
    * @param 	boolean	   $exactMatch Filter results to an exact case-insensitive matching against the coupon code
    * @param 	string	   $campaignState Filter results by the state of the campaign.

    *
    */
 
    public function search_coupons_advanced_application_wide_without_total_count($applicationId, $body) {
      return $this->post("applications/$applicationId/coupons_search_advanced/no_total", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $code Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only referrals where `usageCounter < usageLimit` will be returned, "false" will return only referrals where `usageCounter >= usageLimit`.
    * @param 	string	   $advocate Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

    *
    */
 
    public function get_referrals($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/referrals", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $referralId The ID of the referral code to delete

    *
    */
 
    public function delete_referral($applicationId, $campaignId, $referralId, $body) {
      return $this->delete("applications/$applicationId/campaigns/$campaignId/referrals/$referralId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $campaignId 
    * @param 	string	   $code Filter results performing case-insensitive matching against the referral code. Both the code and the query are folded to remove all non-alpha-numeric characters.
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the referral creation timestamp.
    * @param 	string	   $valid Either "expired", "validNow", or "validFuture". The first option matches referrals in which the expiry date is set and in the past. The second matches referrals in which start date is null or in the past and expiry date is null or in the future, the third matches referrals in which start date is set and in the future.
    * @param 	string	   $usable Either "true" or "false". If "true", only referrals where `usageCounter < usageLimit` will be returned, "false" will return only referrals where `usageCounter >= usageLimit`.
    * @param 	string	   $advocate Filter results by match with a profile id specified in the referral's AdvocateProfileIntegrationId field

    *
    */
 
    public function get_referrals_without_total_count($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/referrals/no_total", $query);
    }

    /**
    * 
    * -
    *
    */
 
    public function get_loyalty_programs($query) {
      return $this->get("loyalty_programs", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $programID -

    *
    */
 
    public function get_loyalty_program($programID, $query) {
      return $this->get("loyalty_programs/$programID", $query);
    }

    /**
    * Get the Loyalty Ledger for this profile integration ID.
    * Arguments
    *
    * @param 	string	   $programID The identifier for the application, must be unique within the account.
    * @param 	string	   $integrationID The identifier for the application, must be unique within the account.

    *
    */
 
    public function get_loyalty_points($programID, $integrationID, $query) {
      return $this->get("loyalty_programs/$programID/profile/$integrationID", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $programID -
    * @param 	string	   $integrationID -

    *
    */
 
    public function add_loyalty_points($programID, $integrationID, $body) {
      return $this->put("loyalty_programs/$programID/profile/$integrationID/add_points", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $programID -
    * @param 	string	   $integrationID -

    *
    */
 
    public function remove_loyalty_points($programID, $integrationID, $body) {
      return $this->put("loyalty_programs/$programID/profile/$integrationID/deduct_points", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_api_health($applicationId, $query) {
      return $this->get("applications/$applicationId/health_report", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	string	   $path Only return results where the request path matches the given regular expression.
    * @param 	string	   $method Only return results where the request method matches the given regular expression.
    * @param 	string	   $status Filter results by HTTP status codes.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_access_logs($applicationId, $query) {
      return $this->get("applications/$applicationId/access_logs", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	string	   $path Only return results where the request path matches the given regular expression.
    * @param 	string	   $method Only return results where the request method matches the given regular expression.
    * @param 	string	   $status Filter results by HTTP status codes.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_access_logs_without_total_count($applicationId, $query) {
      return $this->get("applications/$applicationId/access_logs/no_total", $query);
    }

    /**
    * Fetches the access logs for the entire account. Sensitive requests (logins) are _always_ filtered from the logs. 
    * Arguments
    *
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $path Only return results where the request path matches the given regular expression.
    * @param 	string	   $method Only return results where the request method matches the given regular expression.
    * @param 	string	   $status Filter results by HTTP status codes.
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_all_access_logs($query) {
      return $this->get("access_logs", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId 
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $granularity The time interval between the results in the returned time-series.

    *
    */
 
    public function get_campaign_analytics($applicationId, $campaignId, $query) {
      return $this->get("applications/$applicationId/campaigns/$campaignId/analytics", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_customers($applicationId, $query) {
      return $this->get("applications/$applicationId/customers", $query);
    }

    /**
    * Gets a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#CustomerProfile 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.

    *
    */
 
    public function get_customers_by_attributes($body) {
      return $this->post("customer_search/no_total", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_customer_profile($customerId, $query) {
      return $this->get("customers/$customerId", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.

    *
    */
 
    public function get_customer_profiles($query) {
      return $this->get("customers/no_total", $query);
    }

    /**
    * Gets a list of all the customer profiles for the account that exactly match a set of attributes.  The match is successful if all the attributes of the request are found in a profile, even if the profile has more attributes that are not present on the request.  [Customer Profile]: https://help.talon.one/hc/en-us/articles/360005130739-Data-Model#CustomerProfile 
    * Arguments
    *

    *
    */
 
    public function get_application_customers_by_attributes($body) {
      return $this->post("application_customer_search", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_application_customer($applicationId, $customerId, $query) {
      return $this->get("applications/$applicationId/customers/$customerId", $query);
    }

    /**
    * Fetch summary reports for all application customers based on a time range
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	string	   $name Only return reports matching the customer name
    * @param 	string	   $integrationId Only return reports matching the integrationId
    * @param 	string	   $campaignName Only return reports matching the campaignName
    * @param 	string	   $advocateName Only return reports matching the current customer referrer name

    *
    */
 
    public function get_customer_activity_reports($applicationId, $query) {
      return $this->get("applications/$applicationId/customer_activity_reports", $query);
    }

    /**
    * Fetch summary reports for all application customers based on a time range. Instead of having the total number of results in the response, this endpoint only if there are more results.
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	string	   $name Only return reports matching the customer name
    * @param 	string	   $integrationId Only return reports matching the integrationId
    * @param 	string	   $campaignName Only return reports matching the campaignName
    * @param 	string	   $advocateName Only return reports matching the current customer referrer name

    *
    */
 
    public function get_customer_activity_reports_without_total_count($applicationId, $query) {
      return $this->get("applications/$applicationId/customer_activity_reports/no_total", $query);
    }

    /**
    * Fetch summary report for single application customer based on a time range
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $rangeStart Only return results from after this timestamp, must be an RFC3339 timestamp string
    * @param 	string	   $rangeEnd Only return results from before this timestamp, must be an RFC3339 timestamp string
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_customer_activity_report($applicationId, $customerId, $query) {
      return $this->get("applications/$applicationId/customer_activity_reports/$customerId", $query);
    }

    /**
    * Fetch analytics for single application customer
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId 
    * @param 	integer	   $customerId 

    *
    */
 
    public function get_customer_analytics($applicationId, $customerId, $query) {
      return $this->get("applications/$applicationId/customers/$customerId/analytics", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $profile Profile integration ID filter for sessions. Must be exact match.
    * @param 	string	   $state Filter by sessions with this state. Must be exact match.
    * @param 	string	   $coupon Filter by sessions with this coupon. Must be exact match.
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_sessions($applicationId, $query) {
      return $this->get("applications/$applicationId/sessions", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $applicationId 
    * @param 	integer	   $sessionId 

    *
    */
 
    public function get_application_session($applicationId, $sessionId, $query) {
      return $this->get("applications/$applicationId/sessions/$sessionId", $query);
    }

    /**
    * Lists all events recorded for an application. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $type Comma-separated list of types by which to filter events. Must be exact match(es).
    * @param 	string	   $createdBefore Only return events created before this date
    * @param 	string	   $createdAfter Only return events created after this date
    * @param 	string	   $session Session integration ID filter for events. Must be exact match.
    * @param 	string	   $profile Profile integration ID filter for events. Must be exact match.
    * @param 	string	   $customerName Customer name filter for events. Will match substrings case-insensitively.
    * @param 	string	   $customerEmail Customer e-mail address filter for events. Will match substrings case-insensitively.
    * @param 	string	   $effectsQuery Effects filter for events. Will perform a full-text search on the text content of the events effects, if any.
    * @param 	string	   $attributesQuery Attributes filter for events. Will perform a full-text search on the text content of the events attributes, both keys and values.
    * @param 	string	   $ruleQuery Rule name filter for events
    * @param 	string	   $campaignQuery Campaign name filter for events
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_events($applicationId, $query) {
      return $this->get("applications/$applicationId/events", $query);
    }

    /**
    * Lists all events recorded for an application. Instead of having the total number of results in the response, this endpoint only if there are more results. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $type Comma-separated list of types by which to filter events. Must be exact match(es).
    * @param 	string	   $createdBefore Only return events created before this date
    * @param 	string	   $createdAfter Only return events created after this date
    * @param 	string	   $session Session integration ID filter for events. Must be exact match.
    * @param 	string	   $profile Profile integration ID filter for events. Must be exact match.
    * @param 	string	   $customerName Customer name filter for events. Will match substrings case-insensitively.
    * @param 	string	   $customerEmail Customer e-mail address filter for events. Will match substrings case-insensitively.
    * @param 	string	   $effectsQuery Effects filter for events. Will perform a full-text search on the text content of the events effects, if any.
    * @param 	string	   $attributesQuery Attributes filter for events. Will perform a full-text search on the text content of the events attributes, both keys and values.
    * @param 	string	   $ruleQuery Rule name filter for events
    * @param 	string	   $campaignQuery Campaign name filter for events
    * @param 	integer	   $applicationId 

    *
    */
 
    public function get_application_events_without_total_count($applicationId, $query) {
      return $this->get("applications/$applicationId/events/no_total", $query);
    }

    /**
    * Get all of the distinct values of the Event `type` property for events recorded in the application.  See also: [Track an event](/integration-api/reference/#trackEvent) 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -

    *
    */
 
    public function get_application_event_types($applicationId, $query) {
      return $this->get("applications/$applicationId/event_types", $query);
    }

    /**
    * Defines a new _custom attribute_ in this account. Custom attributes allow you to attach new fields to Talon.One domain objects like campaigns, coupons, customers and so on. These attributes can then be given values when creating / updating these objects, and these values can be used in your campaign rules. For example, you could define a `zipCode` field for customer sessions, and add a rule to your campaign that only allows certain ZIP codes.  These attributes are shared across all applications in your account, and are never required. 
    * Arguments
    *

    *
    */
 
    public function create_attribute($body) {
      return $this->post("attributes", $body);
    }

    /**
    * Returns all the defined custom attributes for the account. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_attributes($query) {
      return $this->get("attributes", $query);
    }

    /**
    * Returns custom attribute for the account by its id. 
    * Arguments
    *
    * @param 	integer	   $attributeId -

    *
    */
 
    public function get_attribute($attributeId, $query) {
      return $this->get("attributes/$attributeId", $query);
    }

    /**
    * Updates an existing custom attribute. Once created, the only property of a custom attribute that can be changed is the title (human readable description). This restriction is in place to prevent accidentally breaking live integrations. E.g. if you have a customer profile attribute with the name `region`, and your integration is sending `attributes.region` with customer profile updates, changing the name to `locale` would cause the integration requests to begin failing.  If you **really** need to change the `type` or `name` property of a custom attribute, create a new attribute and update any relevant integrations and rules to use the new attribute. Then delete the old attribute when you are confident you have migrated any needed data from the old attribute to the new one. 
    * Arguments
    *
    * @param 	integer	   $attributeId -

    *
    */
 
    public function update_attribute($attributeId, $body) {
      return $this->put("attributes/$attributeId", $body);
    }

    /**
    * 
    * Arguments
    *
    * @param 	string	   $applicationIds Filter by one or more application ids separated by comma
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.

    *
    */
 
    public function get_webhooks($query) {
      return $this->get("webhooks", $query);
    }

    /**
    * Returns an webhook by its id.
    * Arguments
    *
    * @param 	integer	   $webhookId -

    *
    */
 
    public function get_webhook($webhookId, $query) {
      return $this->get("webhooks/$webhookId", $query);
    }

    /**
    * Webhook activation log entries would be created as soon as an integration request triggered an effect with a webhook
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $integrationRequestUuid Filter results by integration request UUID.
    * @param 	number	   $webhookId Filter results by Webhook.
    * @param 	number	   $applicationId -
    * @param 	number	   $campaignId Filter results by campaign.
    * @param 	string	   $createdBefore Only return events created before this date.
    * @param 	string	   $createdAfter Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

    *
    */
 
    public function get_webhook_activation_logs($query) {
      return $this->get("webhook_activation_logs", $query);
    }

    /**
    * 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	string	   $status Filter results by HTTP status codes.
    * @param 	number	   $webhookId Filter results by Webhook.
    * @param 	number	   $applicationId -
    * @param 	number	   $campaignId Filter results by campaign.
    * @param 	string	   $requestUuid Filter results by request UUID.
    * @param 	string	   $createdBefore Filter results where request and response times to return entries before parameter value, expected to be an RFC3339 timestamp string.
    * @param 	string	   $createdAfter Filter results where request and response times to return entries after parameter value, expected to be an RFC3339 timestamp string.

    *
    */
 
    public function get_webhook_logs($query) {
      return $this->get("webhook_logs", $query);
    }

    /**
    * Fetch all event type definitions for your account. Each event type can be 
    * Arguments
    *
    * @param 	string	   $applicationIds Filter by one or more application ids separated by comma
    * @param 	string	   $name Filter results to event types with the given name. This parameter implies `includeOldVersions`.
    * @param 	boolean	   $includeOldVersions Include all versions of every event type.
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_event_types($query) {
      return $this->get("event_types", $query);
    }

    /**
    * Should be used to trigger a manual refresh of analytics.
    * -
    *
    */
 
    public function refresh_analytics($body) {
      return $this->post("refresh_analytics", $body);
    }

    /**
    * Retrieve all users in your account. 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.

    *
    */
 
    public function get_users($query) {
      return $this->get("users", $query);
    }

    /**
    * Retrieves the data (including an invitation code) for a user. Non-admin users can only get themselves. 
    * Arguments
    *
    * @param 	integer	   $userId 

    *
    */
 
    public function get_user($userId, $query) {
      return $this->get("users/$userId", $query);
    }

    /**
    * Get list of changes caused by API calls for an account. Only accessible for admins.
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	string	   $sort The field by which results should be sorted. Sorting defaults to ascending order, prefix the field name with `-` to sort in descending order.
    * @param 	integer	   $applicationId -
    * @param 	string	   $createdBefore Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp.
    * @param 	string	   $createdAfter Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the change creation timestamp.
    * @param 	boolean	   $withTotalResultSize When this flag is set, the result will include the total size of the result, across all pages. This might decrease performance on large data sets.
    *                                         With this flag set to true, hasMore will be be true whenever there is a next page. totalResultSize will always be zero.
    *                                         With this flag set to false, hasMore will always be set to false. totalResultSize will contain the total number of results for this query.
    * @param 	boolean	   $includeOld When this flag is set to false, the state without the change will not be returned. The default value is true.

    *
    */
 
    public function get_changes($query) {
      return $this->get("changes", $query);
    }

    /**
    * Sends an email with a password recovery link to the email of an existing account. 
    * Arguments
    *

    *
    */
 
    public function create_password_recovery_email($body) {
      return $this->post("password_recovery_emails", $body);
    }

    /**
    * Consumes the supplied password reset token and updates the password for the associated account. 
    * Arguments
    *

    *
    */
 
    public function reset_password($body) {
      return $this->post("reset_password", $body);
    }

    /**
    * Return the details of your companies Talon.One account. 
    * Arguments
    *
    * @param 	integer	   $accountId 

    *
    */
 
    public function get_account($accountId, $query) {
      return $this->get("accounts/$accountId", $query);
    }

    /**
    * Return the analytics of your companies Talon.One account. 
    * Arguments
    *
    * @param 	integer	   $accountId 

    *
    */
 
    public function get_account_analytics($accountId, $query) {
      return $this->get("accounts/$accountId/analytics", $query);
    }

    /**
    * 
    * Arguments
    *

    *
    */
 
    public function create_session($body) {
      return $this->post("sessions", $body);
    }

    /**
    * Get a list of all past exports 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.
    * @param 	integer	   $applicationId -
    * @param 	integer	   $campaignId -
    * @param 	string	   $entity The name of the entity type that was exported.

    *
    */
 
    public function get_exports($query) {
      return $this->get("exports", $query);
    }

    /**
    * Get a list of all past imports 
    * Arguments
    *
    * @param 	integer	   $pageSize The number of items to include in this response. When omitted, the maximum value of 1000 will be used.
    * @param 	integer	   $skip Skips the given number of items when paging through large result sets.

    *
    */
 
    public function get_imports($query) {
      return $this->get("imports", $query);
    }

    /**
    * undefined
    * -
    *
    */
 
    public function get_all_roles($query) {
      return $this->get("roles", $query);
    }

    /**
    * undefined
    * Arguments
    *
    * @param 	integer	   $roleId 

    *
    */
 
    public function get_role($roleId, $query) {
      return $this->get("roles/$roleId", $query);
    }

}

?>