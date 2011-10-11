<?php
//require ('html5_core.php');
require('html5_template.php');

$page_title = 'Ronaldo Barbacahno - Web Sites';
$meta_description = 'Web sites created and living on the web by Ronaldo Barbachano.';

$test []= new _h2('Web Sites');

$test []= img_li::_('<a href="http://www.myparse.org" title="Myparse"><img src="img/screens/rxnix_1.gif" alt="myparse framework"></a>','RxNix','A web app combining the RxNorm, RxTerms, Medline and NDF-RT PHP 5 API libraries creating an easy to navigate drug and medical terminology reference. Makes heavy use of new CouchDB technology to
		cache and reorganize records to reduce space and increase speed.');

$test []= img_li::_('<a href="http://www.myparse.org" title="Myparse"><img src="img/screens/myparse_1.gif" alt="myparse framework"></a>','MyParse','Lightweight lamp framework. Aims to be standards compliant, seo friendly, and easily expandable.');

$test []= img_li::_('<a href="http://www.ikipress.org" title="ikipress"><img src="img/screens/ikipress_1.gif" alt="ikipress"></a>','ikipress','myparse plugin that I author that hijacks an existing wordpress site to display it (faster, with fewer queries, and much less memory). And eases much of the pains involved with template editing/creation.');

$test []= img_li::_('<a href="http://www.doinglines.com" title="Doing Lines"><img src="http://www.redcapmedia.com/img/web/thumbs/doinglines.gif" alt="Doing Lines"></a>','Doing Lines','A ikipress powered site where I publish various articles related to web programming/ code.');

$test []= img_li::_('<a href="http://www.sfblotter.com" title="sfblotter"><img src="img/screens/sfblotter_1.gif" alt="sfblotter"></a>','sfblotter','A Custom ikipress magazine style site that covers events in and around the San Francisco bay area.');

$test []= img_li::_('<a href="http://www.floricavlad.com" title="Floricas Site"><img src="http://www.redcapmedia.com/img/web/floricavlad_iki.jpg" alt="Floricas Site" width="85%"></a>','Floricas Site','Florica Vlad.com - ikipress site that uses wordpress for content/user management.');
		
	foreach($test as $obj){
		$content .= $obj->make();
	}
	
	$content = new _ul($content,array('class'=>'img'));	
	
	$content = $content->make();
	
		
require ('page.php');