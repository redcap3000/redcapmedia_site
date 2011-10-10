<?php
// perhaps store as a 'template class ?'


require ('html5_core.php');
$page_title = 'Ronaldo Barbachano - Web Sites';
$meta_description = 'Open source projects and involvements.';
class m_ul{
// ideally design these template classes like the other tag classes
// describes the order of the method arguments and which each one refers to
	public static $o = array('h5','strong','p');

	static function _(){
		foreach(func_get_args() as $loc=>$item){
			if(self::$o[$loc] && $item != NULL){
				$class_name = '_'.self::$o[$loc];
				$li [] = new $class_name($item);
			// make and store as string to save memory ??
			}
			
		}
		foreach($li as $item)
			$raw .= $item->make();
	
	 return new _ul( "\n<li>".$raw."</li>");
	}
	
}

$content []= new _h2('Dev Tools');


$content []= m_ul::_('<a href="https://github.com/redcap3000/html5_core" title="html 5 core">html5 core</a>','PHP5 HTML 5 Object Classes','Write standards conforming, and parameter validating html 5 using PHP5 objects. Flexible, definable syntax methods for each HTML5 supported tag. Store and retrieve pages in json format, file system json files also supported. Github page');

$content []= m_ul::_('<a href="https://github.com/redcap3000/couchCurl" title="couchCurl">couchCurl</a>','Basic class for Apache Couch db interactions','A simple set of functions that generate and execute curl calls using php exec(). Supports most of the API methods, including; put, post, copy, updates, etc.');

$content []= m_ul::_('<a href="https://github.com/redcap3000/pmpf" title="Postgress Framework">pmpf</a>',
				  'Postgres framework based on myparse',
				  'Project involving powering most of a framework via postgres database through the use of inherited design, database functions, rules, and types.'
				  );

$content []= m_ul::_('<a href="https://github.com/redcap3000/pgdb" title="Postgress php class">pgdb</a>',
				  'Postgres framework based on myparse',
				  'Simple php class for interacting with a Postgress database.'
				  );

$content []= m_ul::_('<a href="https://github.com/redcap3000/sqlee" title="pmpf">sqlee</a>',
    			'MySQL Form Generation',
    			'Generates forms based on MySQL tables (CRUD) using PHP5 and MySQLi, includes easy to use syntax wizard for creating advanced forms (validations, file uploads,table record linking, select lists, etc.'
    			 );

$content []= m_ul::_('<a href="https://github.com/redcap3000/sqlee" title="pmpf">conf_class</a>','Simple PHP5 Configuration Classes','Outlines a design method for replacing config files with a configuration class. Includes a web-based editor that reads and writes php conf class files.');


$content []= new _h2('API Libraries');
/*
$content []= m_ul::_('rxNormRef',
				  NULL,
				  'A web app that interacts with APIs from the National Health Library to display drug and medical terminology.'
					);
*/					
$content []= m_ul::_('<a title="PHP Product Recall API Library" href="https://github.com/codeforamerica/product_recall_php">product_recall_php</a>',
				  NULL,
				  'Search known Federal Product Recall data.'
				  );
				  
$content []= m_ul::_('<a title="USA Spending" href="https://github.com/codeforamerica/usa_spending_php">usa_spending_php</a>',
				  NULL,
				  'Search databases that track USA spending.'
				  );
$content []= m_ul::_('<a title="Faa" href="https://github.com/codeforamerica/faa_php">faa_php</a>',
				  NULL,
				  'Query FAA for Airport delays/updates.'
				  );
				  
				  
$content []= m_ul::_('<a title="Chronicling America" href="https://github.com/codeforamerica/chronicling-america-php">chronicling-america-php</a>',NULL, ' Search American periodicals.');
$content []= m_ul::_('<a title="World Bank" href="https://github.com/codeforamerica/world_bank_php">world_bank_php</a>',NULL, ' Search database with World Bank statistics.');
$content []= m_ul::_('<a title="Open311" href="https://github.com/codeforamerica/open311_php">open311_php</a>',NULL,' For interacting with municipal based help-ticket system; updated for v2.');
$content []= m_ul::_('<a title="RxNorm" href="https://github.com/codeforamerica/rxNorm_php"> RxNorm</a>',NULL, 'Semantic Medications Tool.');
$content []= m_ul::_('<a title="NDF-RT" href="https://github.com/codeforamerica/ndfRT_php"> NDF-rt</a>',NULL, 'Searches drug interactions.');
$content []= m_ul::_('<a title="Toxnet" href="https://github.com/codeforamerica/toxnet_php">Toxnet</a>',NULL,'Searches known toxin databases.');
$content []= m_ul::_('<a title="Pillbox" href="https://github.com/codeforamerica/pillbox_php">Pillbox</a>',NULL, 'Search drugs based on physical pill descriptions.');				  				  					  					

require ('page.php');