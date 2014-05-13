<?php
console.log("error log");
OC_JSON::checkSubAdminUser();
OCP\JSON::callCheck();

$selectedGroups = json_decode($_POST["selectedGroups"]);
$changedGroup = $_POST["changedGroup"];

if(($key = array_search($changedGroup, $selectedGroups)) !== false) {
    unset($selectedGroups[$key]);
} else {
	$selectedGroups[] = $changedGroup;
}

\OC_Appconfig::setValue('core', 'shareapi_exclude_groups_list', implode(',', $selectedGroups));

echo "yuhu";
