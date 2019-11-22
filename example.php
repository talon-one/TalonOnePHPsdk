<?php

/**
* Generated at Fri Nov 22 2019 16:26:27 GMT+0100 (CET)
* Author: Talon.One
* The contents of this file are auto generated
*/

include 'integration_api.php';
include 'management_api.php';

$t = new TalonOne();
$tm = new TalonOneManagement();

// set your subdomain
$t->subdomain = "demo";

// set apikey for the integration api
$t->apikey = "dbc644d33aa74d582bd9479c59e16f970fe13bf34a208c39d6c7fa7586968468";

// Refer to http://developers.talon.one/data-model/attribute-library/ for additional attributes
$response = $t->update_customer_profile("any_given_integration_id",
                    array('attributes' => array('Email' => 'your@customer.org')));
print_r($response);

// get an application by id
if ($tm->createManagementSession("admin@talon.one","VerySecurePassword!")) {
    print_r($tm->get_campaign_analytics(1, 1, array('rangeStart' => '2016-06-14T13:09:35.835Z', 'rangeEnd' => '2018-06-14T13:09:35.835Z')));
    $tm->destroyManagementSession();
}
