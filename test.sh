# run docer
docker run --rm -it -v $PWD:/app -w /app --network host composer:1.10.1 /bin/bash

# install dependencies
composer install

# test commands
vendor/bin/phpunit --filter testGetCustomerInventory test/Api/IntegrationApiTest.php
vendor/bin/phpunit --filter testUpdateCustomerProfile$ test/Api/IntegrationApiTest.php
vendor/bin/phpunit --filter testUpdateCustomerProfileV2 test/Api/IntegrationApiTest.php
vendor/bin/phpunit --filter testUpdateCustomerSession$ test/Api/IntegrationApiTest.php
vendor/bin/phpunit --filter testUpdateCustomerSessionV2 test/Api/IntegrationApiTest.php
vendor/bin/phpunit --filter testGetApplication$ test/Api/ManagementApiTest.php
vendor/bin/phpunit --filter testGetLoyaltyPoints$ test/Api/ManagementApiTest.php
vendor/bin/phpunit --filter testGetLoyaltyPoints$ test/Api/ManagementApiTest.php
vendor/bin/phpunit --filter testExportLoyaltyBalance$ test/Api/ManagementApiTest.php