<?php

/**
* Generated at Mon May 20 2019 17:06:29 GMT+0200 (CEST)
* Author: Talon.One
* The contents of this file are auto generated
*/

include 'integration_api.php';
include 'management_api.php';

$t = new TalonOne();
$tm = new TalonOneManagement();

$t->subdomain = "demo";
$t->applicationId = 1;
$t->applicationKey = "ff164d01c11d9571";

// Refer to http://developers.talon.one/data-model/attribute-library/ for additional attributes
$response = $t->update_customer_profile("any_give_integration_id",
                    array('attributes' => array('Email' => 'your@customer.org')));
print_r($response);

// get an application by id
if ($tm->createManagementSession("demo@talon.one","Demo1234")) {
    print_r($tm->get_campaign_analytics(1, 1, array('rangeStart' => '2016-06-14T13:09:35.835Z', 'rangeEnd' => '2018-06-14T13:09:35.835Z')));
    $tm->destroyManagementSession();
}
