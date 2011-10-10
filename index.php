<?php
require ('html5_core.php');
$page_title = 'Who is Ronaldo Barbacahno';

$content [] = new _h2('What I do');
$content []= new _p('I am Ronaldo Barbachano and a LAMP developer. I specifically design database-driven web applications using PHP and MySQL. I have expertise in PHP, JavaScript, CSS, HTML, MySQL (query writing). I am the developer of framework <a href="http://myparse.org">myparse</a> and Wordpress display engine <a href="http://www.ikipress.org">ikipress.</a> I enjoy adapting existing open source technologies to fit the specific needs of a client. My sites strive to be standards compliant, fast loading, and logically organized. I also create music on the side, for fun, and have had a background creating experimental video, and in graphic design and photography');
$content []= new _p(
			new _ul( 
				array( new _li(  new _h3('Profiles')), new _li ('<a href="http://www.linkedin.com/in/ronaldob" title="Linkedin">Linked In</a>'), new _li('<a href="https://launchpad.net/~ronaldo-barbachano" title="Launchpad">Launchpad</a>'), new _li('<a href="https://github.com/redcap3000" title="github">Github</a>')  ),
				array('id'=>'profiles')
			));
				
require ('page.php');