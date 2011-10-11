<?php

if(!$meta_description) $meta_description = 'Web site portfolio for open source developer, designer, Ronaldo Barbachano.';

$page = new page(
			array(
					new _meta(NULL,array('charset'=>'utf-8')),
					new _meta (NULL,array('name'=>'description', 'content'=>$meta_description)),
					new _meta(NULL,array('name'=>'author', 'content'=>'Ronaldo Barbacahno')),
					new _meta(NULL,array('name'=>'viewport', 'content'=>'width=device-width,initial-scale=1')),
					new _link(NULL,array('href'=>'http://fonts.googleapis.com/css?family=Geo', 'rel'=>'stylesheet' ,'type'=>'text/css')),
					new _link(NULL,array('rel'=>"stylesheet", 'href'=>'css/style.css'))
					
				 ),
			array(
					new _div(
						array(
							new _header(
								array(
									new _h1('Ronaldo Barbachano'),
									new _nav(
										array(
//											 new _a('web',array('href'=>'web.html')  )
											 new _a('who',array('href'=>'index.php')  ),
											 new _a('web.php','web','Web Projects'), 
											 new _a('open source',array('href'=>'foss.php')  )
										//	 new _a('video',array('href'=>'video.php')  ),
										//	 new _a('sound',array('href'=>'sound.php')  ),
											 
											)
										)
								)
								),
							new _div( $content,
									array('id'=>'main','role'=>'main')
								),
							new _footer(
								new _h4('Ronaldo Barbachano 2011
<a href="http://www.linkedin.com/in/ronaldob" title="Linkedin">Linked In</a>
<a href="https://launchpad.net/%7Eronaldo-barbachano" title="Launchpad">Launchpad</a>
<a href="https://github.com/redcap3000" title="github">Github</a>')
							)
									)		
					 ,array('id'=>'container')
			)),$page_title);
			

$page->make_page();	
echo $page->stats();
