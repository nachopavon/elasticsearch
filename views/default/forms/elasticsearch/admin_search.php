<?php

$client = elasticsearch_get_client();
if (empty($client)) {
	echo elgg_echo('elasticsearch:error:no_client');
	return;
}

elgg_require_js('elasticsearch/admin_search');

echo elgg_view('input/plaintext', [
	'name' => 'q',
	'placeholder' => elgg_echo('elasticsearch:forms:admin_search:query:placeholder'),
]);

try {
	$status = $client->indices()->status();
} catch (Exception $e){}

$indices = array_keys(elgg_extract('indices', $status));

echo elgg_view('input/select', [
	'name' => 'index',
	'options' => $indices,
	'value' => $client->getIndex()
]);

echo elgg_view('input/submit', ['value' => elgg_echo('search')]);
