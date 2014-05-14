<?php
$l = OC_L10N::get('files_trashbin');

// register hooks
\OCA\Files_Trashbin\Trashbin::registerHooks();

\OCA\Files\App::getNavigationManager()->add(
array(
	"id" => 'trashbin',
	"appname" => 'files_trashbin',
	"script" => 'list.php',
	"order" => 1,
	"name" => $l->t('Deleted files')
)
);
