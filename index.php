<?php
error_reporting(E_ALL);
require('Source/UserAgentParser.php');

$data = array(

//Old School Yo

'Lynx/2.8.6rel.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7l Lynxlet/0.7.0'          
	=> array('platform' => '', 'browser' => 'Lynx', 'version' => '2.8.6'),

'curl/7.19.7 (universal-apple-darwin10.0) libcurl/7.19.7 OpenSSL/0.9.8r zlib/1.2.3' 
	=> array('platform' => '', 'browser' => 'curl', 'version' => '7.19.7'),

'Wget/1.12 (linux-gnu)'                                                             
	=> array('platform' => 'Linux','browser' => 'Wget', 'version' => '1.12'),

'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/12.0' 
	=> array('platform' => 'Linux','browser' => 'Firefox', 'version' => '12.0'),

'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Ubuntu/12.04 Chromium/18.0.1025.151 Chrome/18.0.1025.151 Safari/535.19' 
	=> array('platform' => 'Linux','browser' => 'Chrome', 'version' => '18.0.1025.151'),

'Mozilla/5.0 (X11; U; Linux i386; en-US; rv:1.7.5) Gecko/20041109 Firefox/1.0' 
	=> array('platform' => 'Linux','browser' => 'Firefox', 'version' => '1.0'),

'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11' 
	=> array('platform' => 'Linux','browser' => 'Chrome', 'version' => '20.0.1132.57'),


'Mozilla/4.0 (Windows; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (MSIE 6.0; Windows NT 5.1)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (MSIE 6.0; Windows NT 5.0)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (compatible;MSIE 6.0;Windows 98;Q312461)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (Compatible; Windows NT 5.1; MSIE 6.0) (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (compatible; U; MSIE 6.0; Windows NT 5.1)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '6.0'),

'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET4.0C; .NET4.0E)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '7.0'),

'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; Tablet PC 2.0)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '8.0'),

'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; InfoPath.3; Tablet PC 2.0)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '8.0'),

'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)' 
	=> array('platform' => 'Windows', 'browser' => 'MSIE', 'version' => '9.0'),


'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5 (.NET CLR 3.5.21022)'               
	=> array('platform' => 'Windows', 'browser' => 'Firefox', 'version' => '3.5.5'),

'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15 FirePHP/0.5'                      
	=> array('platform' => 'Windows', 'browser' => 'Firefox', 'version' => '3.6.15'),


'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.98 Safari/534.13'      
	=> array('platform' => 'Windows', 'browser' => 'Chrome', 'version' => '9.0.597.98'),

'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.114 Safari/534.16'    
	=> array('platform' => 'Windows', 'browser' => 'Chrome', 'version' => '10.0.648.114'),

'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.41 Safari/534.7'        
	=> array('platform' => 'Windows', 'browser' => 'Chrome', 'version' => '7.0.517.41'),



'Opera/9.80 (Windows NT 6.0; U; en) Presto/2.8.99 Version/11.10' 
	=> array('platform' => 'Windows', 'browser' => 'Opera', 'version' => '11.10'),

'Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.7.62 Version/11.01' 
	=> array('platform' => 'Windows', 'browser' => 'Opera', 'version' => '11.01'),

'Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; Edition MacAppStore; en) Presto/2.10.229 Version/11.61' 
	=> array('platform' => 'Macintosh', 'browser' => 'Opera', 'version' => '11.61'),

'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/20101213 Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01' 
	=> array('platform' => 'Windows', 'browser' => 'Opera', 'version' => '11.01'),

'Mozilla/5.0 (Windows NT 6.1; U; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01'                                                      
	=> array('platform' => 'Windows', 'browser' => 'Opera', 'version' => '11.01'),

'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01'                                                                            
	=> array('platform' => 'Windows', 'browser' => 'Opera', 'version' => '11.01'),

'Mozilla/5.0 (Windows; U; Windows NT 6.1; tr-TR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27'                      
	=> array('platform' => 'Windows', 'browser' => 'Safari', 'version' => '5.0.4'),



/// MAC BROWSERS

'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3'                                     
	=> array('platform' => 'Macintosh', 'browser' => 'Firefox', 'version' => '3.6.3'),

'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:11.0) Gecko/20100101 Firefox/11.0'                                                   
	=> array('platform' => 'Macintosh', 'browser' => 'Firefox', 'version' => '11.0'),

'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; en) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7'         
	=> array('platform' => 'Macintosh', 'browser' => 'Safari', 'version' => '4.0.5'),

'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; en) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/4.1.2 Safari/533.18.5'         
	=> array('platform' => 'Macintosh', 'browser' => 'Safari', 'version' => '4.1.2'),

'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16'           
	=> array('platform' => 'Macintosh', 'browser' => 'Safari', 'version' => '5.0'),

'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.5; it; rv:1.9.0.19) Gecko/2010111021 Camino/2.0.6 (MultiLang) (like Firefox/3.0.19)'      
	=> array('platform' => 'Macintosh', 'browser' => 'Camino', 'version' => '2.0.6'),

'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en; rv:1.9.0.18) Gecko/2010021619 Camino/2.0.2 (like Firefox/3.0.18)'                
	=> array('platform' => 'Macintosh', 'browser' => 'Camino', 'version' => '2.0.2'),

'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; it; rv:1.8.1.21) Gecko/20090327 Camino/1.6.7 (MultiLang) (like Firefox/2.0.0.21pre)' 
	=> array('platform' => 'Macintosh', 'browser' => 'Camino', 'version' => '1.6.7'),

'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.11) Gecko/20071128 Camino/1.5.4'                                             
	=> array('platform' => 'Macintosh', 'browser' => 'Camino', 'version' => '1.5.4'),


/// MOBLE BROWSERS

'Mozilla/5.0 (Linux; U; Android 2.2; en-us; SGH-T959 Build/FROYO) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1'                 
	=> array('platform' => 'Android', 'browser' => 'Chrome', 'version' => '4.0'),

'Mozilla/5.0 (Linux; U; Android Itfunz2.1_Eclipse_Terminator_II_Final; zh-cn; Milestone Build/SHOLS_U2_02.36.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17' 
	=> array('platform' => 'Android', 'browser' => 'Chrome', 'version' => '4.0'),


'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10'          
	=> array('platform' => 'iPad', 'browser' => 'Safari', 'version' => '4.0.4'),

'Mozilla/5.0 (iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10'    
	=> array('platform' => 'iPad', 'browser' => 'Safari', 'version' => '4.0.4'),

'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10'          
	=> array('platform' => 'iPad', 'browser' => 'Safari', 'version' => '4.0.4'),


'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2_6 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8E200 Safari/6533.18.5' 
	=> array('platform' => 'iPhone', 'browser' => 'Safari', 'version' => '5.0.2'),

'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1C25 Safari/419.3'                               
	=> array('platform' => 'iPhone', 'browser' => 'Safari', 'version' => '3.0'),


'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0) Asus;Galaxy6'					
	=> array('platform' => 'Windows Phone OS', 'browser' => 'IEMobile', 'version' => '7.0'),

'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0; LG; GW910)'					
	=> array('platform' => 'Windows Phone OS', 'browser' => 'IEMobile', 'version' => '7.0'),

'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0) LG;LG-E900h)'					
	=> array('platform' => 'Windows Phone OS', 'browser' => 'IEMobile', 'version' => '7.0'),


'Mozilla/5.0 (BlackBerry; U; BlackBerry 9780; en) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.723 Mobile Safari/534.8+'	
	=> array('platform' => 'BlackBerry', 'browser' => 'BlackBerry Browser', 'version' => '6.0.0.723'),		


/// EBOOK READERS

'Mozilla/4.0 (compatible; Linux 2.6.10) NetFront/3.3 Kindle/1.0 (screen 600x800)' 
	=> array('platform' => 'Kindle', 'browser' => 'Kindle', 'version' => '1'),

'Mozilla/5.0 (Linux; U; en-US) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) Version/4.0 Kindle/3.0 (screen 600x800; rotate)' 
	=> array('platform' => 'Kindle', 'browser' => 'Kindle', 'version' => '3.0'),

'Mozilla/5.0 (Linux; U; en-US) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/538.5+) Version/4.0 Kindle/3.0 (screen 600x800; rotate)' 
	=> array('platform' => 'Kindle', 'browser' => 'Kindle', 'version' => '3.0'),

'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Kindle Fire Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1'
	=> array('platform' => 'Kindle Fire', 'browser' => 'Kindle', 'version' => '4.0'),

'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Silk/1.1.0-84) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1 Silk-Accelerated=false'
	=> array('platform' => 'Kindle Fire', 'browser' => 'Silk', 'version' => '1.1.0'),

'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us; Silk/1.1.0-80) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16 Silk-Accelerated=true'
	=> array('platform' => 'Kindle Fire', 'browser' => 'Silk', 'version' => '1.1.0'),


'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us; Silk/1.0.13.81_10003810) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16 Silk-Accelerated=true' 
	=> array('platform' => 'Kindle Fire', 'browser' => 'Silk', 'version' => '1.0.13.81'),

'Mozilla/5.0 (Linux; U; en-us; KFTT Build/IML74K) AppleWebKit/535.19 (KHTML, like Gecko) Silk/2.2 Safari/535.19 Silk-Accelerated=true'
	=> array('platform' => 'Kindle Fire', 'browser' => 'Silk', 'version' => '2.2'),


/// Video Game Consoles

'Mozilla/5.0 (PLAYSTATION 3; 1.00)'                                                         
	=> array('platform' => 'PLAYSTATION 3', 'browser' => 'NetFront', 'version' => '1.00'),

'Mozilla/5.0 (PLAYSTATION 3 4.20) AppleWebKit/531.22.8 (KHTML, like Gecko)'                 
	=> array('platform' => 'PLAYSTATION 3', 'browser' => 'NetFront', 'version' => '4.20'),


'Opera/9.00 (Nintendo Wii; U; ; 1038-58; Wii Shop Channel/1.0; en)'                         
	=> array('platform' => 'Nintendo Wii', 'browser' => 'Opera', 'version' => '9.00'),

'Opera/9.30 (Nintendo Wii; U; ; 2071; Wii Shop Channel/1.0; en)'                            
	=> array('platform' => 'Nintendo Wii', 'browser' => 'Opera', 'version' => '9.30'),

'Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.52 (KHTML, like Gecko) NX/2.1.0.8.21 NintendoBrowser/1.0.0.7494.US'
	=> array('platform' => 'Nintendo WiiU', 'browser' => 'NintendoBrowser', 'version' => '1.0.0.7494.US'),

'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)'                     
	=> array('platform' => 'Xbox', 'browser' => 'MSIE', 'version' => '9.0'),

'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; Xbox)' 
	=> array('platform' => 'Xbox', 'browser' => 'IEMobile', 'version' => '9.0'), //Xbox Masquerading as Windows Phone

// Chrome Book

'Mozilla/5.0 (X11; CrOS i686 2268.111.0) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11'
	=> array('platform' => 'Chrome OS', 'browser' => 'Chrome', 'version' => '20.0.1132.57'),
'Mozilla/5.0 (X11; U; CrOS i686 0.9.128; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.339'
	=> array('platform' => 'Chrome OS', 'browser' => 'Chrome', 'version' => '8.0.552.339'),

);

echo '<h1>Test Suite</h1>';

$result = array('fail' => array(), 'pass' => array());

foreach( $data as $agent => &$row ) {

	$x = parse_user_agent($agent);
	$row = array('expected' => $row, 'received' => $x, 'agent' => $agent);
	
	if($row['expected'] != $row['received']) {
		$result['fail'][] = $row;
	}else{
		$result['pass'][] = $row;
	}
}

foreach( $result['fail'] as $row ) {

	echo '<div class="row fail">';
	echo '<div class="aspects incorrect">';
	aspects( $row['received'] );
	echo '</div>';

	echo '<div class="aspects">';
	aspects( $row['expected'] );
	echo '</div>';

	echo '<small>'. $row['agent'] .'</small><br />';

	echo '</div>';

}

foreach( $result['pass'] as $row ) {
	
	echo '<div class="row">';

	echo '<div class="aspects">';
	aspects( $row['received'] );
	echo '</div>';

	echo '<small>'. $row['agent'] .'</small><br />';

	echo '</div>';

}

function aspects($aspect) {
	echo '<div class="version">' .  $aspect['version'] .  '</div>';
	echo '<div class="browser">' .  $aspect['browser'] .  '</div>';
	if( $aspect['platform'] ) {
		echo '<div class="platform">' . $aspect['platform'] . '</div>';
	}
}

?>
<style type="text/css">

div.row {
	background: #a0b96a;
	border-bottom: 1px solid #eee;
	font-size: 10px;
}

div.row.fail {
	background: #b96a6a;
	font-size: 12px;
}

div.row br {
	clear: both;
}

div.row small {
	display: block;
	font-size: .9em;
	padding: 8px 0 0 8px;
}

div.aspects {
	float: right;
	clear: right;
}

div.aspects div {
	float: right;
	color: white;
	padding: 4px;
	text-align: center;
	min-width: 100px;
	margin: 1px;
	border-radius: 3px;
}

div.platform {
	background: #3693c1;	
}

div.version {
	background: #c080e5;	
}

div.browser{
	background: #ed4f23;	
}

div.aspects.incorrect div {
	background: red;
}

body {
	margin: 0; 
	padding: 0;	
	font-size: 11px;
	font-family: Helvetica, Arial;
}

h1 {
	text-align: center;	
}


</style>