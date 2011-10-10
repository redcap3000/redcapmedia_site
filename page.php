<?php
$page = new page(
			array(
					new _meta(NULL,array('charset'=>'utf-8')),
					new _meta (NULL,array('name'=>'description', 'content'=>'Web site portfolio for open source developer, designer, Ronaldo Barbachano.')),
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
											 new _a('web.php','web','Web Projects'), 
											 new _a('open source',array('href'=>'foss.php')  ),
											 //new _a('video',array('href'=>'video.php')  ),
											 //new _a('sound',array('href'=>'sound.php')  ),
											 new _a('contact',array('href'=>'contact.php')  )
											)
										)
								)
								),
							new _div( $content,
									array('id'=>'main','role'=>'main')
								),
							new _footer(
								new _h4('Ronaldo Barbachano 2011')
							)
									)		
					 ,array('id'=>'container')
			)),$page_title);
			
echo $page->make_page();			