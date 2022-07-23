<?php

function milvus_param_redirect()
{
	if (isset($_GET['id'])) {
		setcookie('id', $_GET['id'], time() + 3600, '/');
	}

	if (isset($_COOKIE['id'])) {
		if (!isset($_GET['id'])) {
			$location = esc_url(add_query_arg('id', $_COOKIE['id']));
			wp_redirect($location);
			exit;
		}
	}
}
add_action('template_redirect', 'milvus_param_redirect');