<?php

$config = array(
	'sets' => array(
		'eduid' => array(
		    'cron'=>array('hourly'),
		    'sources'=>array(
			array(
			    'src'=>'https://metadata.eduid.cz/entities/eduid+idp',
			)
		    ),
		    'expireAfter'=>60*60*24,
		    'outputDir'=>'/www/wiki/metadata',
		    'outputFormat'=>'flatfile'
		),
	),
);



