<?php
require ('html5_core.php');
$page_title = 'Who is Ronaldo Barbacahno';

$content [] = new _h2('What I do');
$content []= new _ul( 
			array (
				new _li(new _p('I am a free and open source developer with a strong background in journalism, graphic design, multimedia and video production.')),
				new _li(new _strong('Front End')),
				new _li('HTML5 and CSS, some Javascript. Adobe Creative Suite'),
				new _li(new _strong('Back End')),
				new _li('Apache Couch, MySQL, Postgres'),
				new _li(new _strong('Server Side')),
				new _li('Apache / PHP server optimization, Linux server setup (Debian, Ubuntu and others.')
				), array ('id'=>'who'));
$content [] = new _img(NULL,array('src' => 'http://www.redcapmedia.com/sandbox/img/rrb_bw.gif'));				

/*
<h2>What I do</h2>


<ul>
<li><p>
I am a free and open source developer with a strong background in journalism, graphic design, multimedia and video production.</p>
</li>
<li><strong>Front End</strong></li>
<li>HTML5 and CSS, some Javascript. Adobe Creative Suite</li>

<li><strong>Backend</strong></li>
<li>Apache Couch, MySQL, Postgres</li>

<li><strong>Server Side</strong></li>
<li>Apache / PHP server optimization, Linux server setup (Debian, Ubuntu and others</li>


</ul>


<img style="float:right;"src="http://www.redcapmedia.com/sandbox/img/rrb_bw.gif">
*/
require ('sandbox/page.php');
