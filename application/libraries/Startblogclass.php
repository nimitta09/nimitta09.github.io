<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Startblogclass {

	function __construct() {
	$this->ci = & get_instance ();
	}


function  friendly_date( $from ){
	static $now = NULL;
	$now == NULL && $now = time();
	! is_numeric( $from ) && $from = strtotime( $from );
	$seconds = $now - $from;
	$minutes = floor( $seconds / 60 );
	$hours   = floor( $seconds / 3600 );
	$day     = round( ( strtotime( date( 'Y-m-d', $now ) ) - strtotime( date( 'Y-m-d', $from ) ) ) / 86400 );
	if( $seconds == 0 ){
		return '刚刚';
	}
	if( ( $seconds >= 0 ) && ( $seconds <= 60 ) ){
		return "{$seconds}";
	}
	if( ( $minutes >= 0 ) && ( $minutes <= 60 ) ){
		return "{$minutes}";
	}
	if( ( $hours >= 0 ) && ( $hours <= 24 ) ){
		return "{$hours}";
	}
	if( ( date( 'Y' ) - date( 'Y', $from ) ) > 0 ) {
		return date( 'Y-m-d', $from );
	}
	
	switch( $day ){
		case 0:
			return date( 'H:i', $from );
		break;
		
		case 1:
			return date( 'H:i', $from );
		break;
		
		default:
			//$day += 1;
			return "{$day} ";
		break;
	}
}

	function notice($str)
	{	
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script>'.$str.'</script>';
	}

	
	
	function is_write($file_path)
	{
		
		if (!file_exists($file_path))
		{
			return false;
		}
		$mark = 0;
		if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')
		{
			
			$test_file = $file_path . '/cf_test.txt';
			
			if (is_dir($file_path))
			{
				
				$dir = @opendir($file_path);
				if ($dir === false)
				{
					return $mark; 
				}
				if (@readdir($dir) !== false)
				{
					$mark ^= 1; 
				}
				@closedir($dir);
				
				$fp = @fopen($test_file, 'wb');
				if ($fp === false)
				{
					return $mark; 
				}
				if (@fwrite($fp, 'directory access testing.') !== false)
				{
					$mark ^= 2; 
				}
				@fclose($fp);
				@unlink($test_file);
				
				$fp = @fopen($test_file, 'ab+');
				if ($fp === false)
				{
					return $mark;
				}
				if (@fwrite($fp, "modify test.\r\n") !== false)
				{
					$mark ^= 4;
				}
				@fclose($fp);
				
				if (@rename($test_file, $test_file) !== false)
				{
					$mark ^= 8;
				}
				@unlink($test_file);
			}
			
			elseif (is_file($file_path))
			{
				
				$fp = @fopen($file_path, 'rb');
				if ($fp)
				{
					$mark ^= 1; 
				}
				@fclose($fp);
				$fp = @fopen($file_path, 'ab+');
				if ($fp && @fwrite($fp, '') !== false)
				{
					$mark ^= 6; 
				}
				@fclose($fp);
				
				if (@rename($test_file, $test_file) !== false)
				{
					$mark ^= 8;
				}
			}
		}
		else
		{
			if (@is_readable($file_path))
			{
				$mark ^= 1;
			}
			if (@is_writable($file_path))
			{
				$mark ^= 14;
			}
		}
		return $mark;
	}


	function get_ip() {
		$url = 'http://iframe.ip138.com/ic.asp';
		if(function_exists('curl_init')){
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$a = curl_exec($ch);
		} else
		{
			$a = @file_get_contents($url);
		}
		preg_match('/\[(.*)\]/', $a, $ip);
		return @$ip[1];
	}
	//

function get_domain($url){ 
	$host=$url?$url:@$_SERVER[HTTP_HOST]; 
	$host=strtolower($host); 
	if(strpos($host,'/')!==false){ 
		$parse = @parse_url($host); 
		$host = $parse['host']; 
	}
	$topleveldomaindb=array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me','cn','tv','in','hk','de','us','tw');
	$str=''; 
	foreach($topleveldomaindb as $v){ 
		$str.=($str ? '|' : '').$v;
	} 
	$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
	if(preg_match("/".$matchstr."/ies",$host,$matchs)){ 
		$domain=$matchs['0'];
	}else{ 
		$domain=$host; 
	}
	return $domain; 
}

}

/* End of file Startblogclass.php */