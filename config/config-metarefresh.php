<?php

$config = array(
	'sets' => array(
		'eduid' => array(
		    'cron'=>array('hourly'),
		    'sources'=>array(
          array(
            'whitelist'=>array(
              'https://idp.upce.cz/idp/shibboleth',
              'https://shibbo.tul.cz/idp/shibboleth',
            ),
            'src'=>'https://metadata.eduid.cz/entities/eduid+idp',
          )
		    ),
		    'expireAfter'=>60*60*24,
		    'outputDir'=>'/www/tul/metadata',
		    'outputFormat'=>'flatfile'
		),
	),
);
