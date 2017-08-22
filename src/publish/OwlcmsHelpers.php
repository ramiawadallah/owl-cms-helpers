<?php 
return [
	/* 
	| You Can Add Costom Definds And View Variables
	|
	*/
	// System Defines 
	'defines' => [
		'cp' => 'admin/',
		'cpanel' => 'admin',
		'upload_path' => public_path('upload').'/',
		'IMG' => url('public/themes/default/assets/cms/images').'/',
		'upload_url' => url('public/upload').'/',
		'flugs_url' => url('public/themes/default/assets/cms/images/flags').'/',
		'flugs_path' => public_path('/themes/default/assets/cms/images/flags').'/',

	],

	// View Variables
	'viewShareVariables' => [
		'cpanel' => url('public/themes/default/assets/cms').'/',
		'logo' => url('public/themes/default/assets/cms/images/logo.png'),
		'icon' => url('public/themes/default/assets/cms/images/favicon.png'),
	],


];