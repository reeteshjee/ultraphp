<?php

function getCacheFolder(){
	$config = getConfig();
	switch ($config['cache']) {
		case 'hour':
			$folder = $config['cache_path'].date('Y/m/d/H/');
			break;
		case 'day':
			$folder = $config['cache_path'].date('Y/m/d/');
			break;
		case 'month':
			$folder = $config['cache_path'].date('Y/m/');
			break;
		case 'year':
			$folder = $config['cache_path'].date('Y/');
			break;
		default:
			$folder = $config['cache_path'].date('Y/');
			break;
	}
    if(!is_dir($folder)){
        mkdir($folder,0755,true);
    }
	return $folder;
}

function getCacheFile(){
	return getCacheFolder().md5(getFullURL()).'.cache';
}