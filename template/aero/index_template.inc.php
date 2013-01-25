<!--
=======================================
Aero | Slims Meranti Template
@2013
Waris Agung Widodo [ido.alit@gmail.com]
=======================================

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
-->
<?php

if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
    die("can not access this file directly");
}
//set default index page
$p = 'home';

if (isset($_GET['p']))
{
 if ($_GET['p'] == 'libinfo') {
  $p = 'libinfo';
 } elseif ($_GET['p'] == 'help') {
  $p = 'help';
 } elseif ($_GET['p'] == 'member') {
  $p = 'member';
 } elseif ($_GET['p'] == 'login') {
  $p = 'login';
 } 
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $page_title; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="webicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
  <link href="template/core.style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/form.js"></script>
  <script type="text/javascript" src="js/gui.js"></script>
  <script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/custom.js"></script>
 </head>
 <body>
    <div id="masking"></div>
  <?php if(isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords'])) { ?>
  <div class="result-search">
    <div id="resultiner">
   <div class="line9 linebottom"></div>
   <div class="line10 linebottom"></div>
   <div class="tabsearch">
    <form name="SearchForm" class="bgright" id="SearchForm" action="index.php" method="get">
     <input type="hidden" name="search" value="Search" />
     <input type="text" name="keywords" id="keyword" placeholder="<?php echo __('Keyword'); ?>" />
    </form>
   <div class="line11 linetop"></div>
   <div class="line12 linetop"></div>
    <a href="#advResult"><div id="advbutton" class="bgleft"><?php echo __('Advanced Search'); ?></div></a>
    <div id="advResult">
    <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/arrow.png">
    <?php include ('advResult.inc.php'); ?>
    </div>
   </div>
  <div class="collections-list">
   <?php echo $main_content;
    include ('menu.inc.php');
    ?>
   <div class="clear">&nbsp;</div>
  </div>
    </div>
  </div>
  <?php } elseif($p == 'member') { ?>
  <div class="sidebarcontent">
   <div class="tagline">
	   <?php echo __('Information'); ?>
   </div>
   <div class="info">
	   <?php echo $info; ?>
   </div>
   <?php if (utility::isMemberLogin()) { ?>	    
   <div class="tagline">
	   <?php echo __('User Login'); ?>
   </div>
   <div class="info">
	   <?php echo $header_info; ?>
   </div>
   <?php  include ('menu.inc.php');
   } ?>
  </div>
	
  <div class="section">
    <?php echo $main_content;  include ('menu.inc.php'); ?>
    <div class="clear">&nbsp;</div>
  </div>

 <?php } elseif(isset($_GET['p'])) { ?>
 <?php if ($_GET['p'] == 'show_detail') {echo $main_content; } else { ?>
 
 <div class="section section2">
    <div class="tagline">
	<?php echo $page_title; ?>
   </div>
	 <?php echo $main_content; ?>
 </div>
 
 <?php
 include ('menu.inc.php');
 } ?>

  
  <?php } else { ?>
  <!-- HOME -->
  <!-- LIBRARY NAME -->
  <div class="libclock">
   <div id="sublib" class="libname">
    <div id="sublibname">
   <?php echo $sysconf['library_subname']; ?>
    </div>
   </div>
   <div id="clock" class="libname">
    <div id="jam-menit"></div>
   </div>
   <div class="line1 libname linetop"></div>
   <div class="line2 libname linebottom"></div>
   <div id="lib" class="libname bgleft">
    <div id="libname">
    <?php echo $sysconf['library_name']; ?>
    <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/logo.png">
    </div>
   </div>
   <div id="Second" class="libname bgright"><?php echo strftime('%p'); ?>
    <div id="detik"></div>
   </div>
   <div class="line3 libname linetop"></div>
   <div class="line4 libname linebottom"></div>
   <div id="year" class="libname"><?php echo date('Y'); ?>&nbsp;</div>
   <div id="date" class="libname">
    <?php
	function tanggal($format,$nilai="now"){
	$en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",
	"01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31",);
	$id=array("Minggu","Senen","Selasa","Rebo","Kemis","Jum'at","Setu","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember",
	"Siji - 1","Loro - 2","Telu - 3","Papat - 4","Lima - 5","Nenem - 6","Pitu - 7","Wolu - 8","Sanga - 9","Sepuluh - 10","Sewelas - 11","Rolas - 12","Telulas - 13","Patbelas - 14","Limolas - 15","Nembelas - 16","Pitulas - 17","Wolulas -18","Sangalas - 19","Rongpuluh - 20","Selikur - 21","Rolikur - 22","Telulikur - 23","Patlikur - 24","Selawe - 25","Nemlikur - 26","Pitulikur - 27","Wolulikur - 28","Sangalikur - 29","Telungpuluh - 30","Telu Siji - 31",);
	return str_replace($en,$id,date($format,strtotime($nilai)));
	}
    echo tanggal('D').'</br>';
    echo tanggal('d').'</br>';
    echo tanggal('M')
    ?>
   </div>
   <div id="licensi" class="libname">
    This software and this template are released Under GNU GPL License Version 3<span>The Winner in the Category of OSS Indonesia ICT Award 2009</span>
   </div>
  </div>
  <!-- LIBRARY NAME END -->
  <!-- SIDEBAR -->
  <div class="sidebar sideleft">
   <div class="sidetitle">&hearts; <?php echo __('10 Most Popular Titles'); ?></div>
   <div class="sidecontent">
    <?php
     $stat_query = $dbs->query('SELECT b.biblio_id,b.title,b.image,l.item_code,COUNT(l.loan_id) AS total_loans FROM `loan` AS l
	 LEFT JOIN item AS i ON l.item_code=i.item_code
	 LEFT JOIN biblio AS b ON i.biblio_id=b.biblio_id
	 GROUP BY b.biblio_id ORDER BY COUNT(l.loan_id) DESC LIMIT 10');
     $stat_data = '<ul>';
     while ($data = $stat_query->fetch_row()) {
	 $stat_data .= '<li><a href="index.php?p=show_detail&id='.$data[0].'">- '.substr($data[1],0,40).'</a></li>';
     }
     $stat_data .= '</ul>';
     echo $stat_data;
    ?>
   </div>
      <div class="sidetitle">&spades; <?php echo __('10 most active members'); ?></div>
   <div class="sidecontent">
    <?php
     $report_q = $dbs->query('SELECT m.member_image, m.member_name, m.member_id, COUNT(loan_id) FROM loan AS l
	 INNER JOIN member AS m ON m.member_id=l.member_id
	 WHERE TO_DAYS(expire_date)>TO_DAYS(\''.date('Y-m-d').'\')
	 GROUP BY l.member_id ORDER BY COUNT(loan_id) DESC LIMIT 10');
     $report_d = '<ul>';
     while ($data = $report_q->fetch_row()) {
	 $report_d .= '<li>- '.substr($data[1],0,40).'</li>';
     }
     echo $report_d;
    ?>
   </div>
  </div>
  <!-- SIDEBAR END -->
  <!-- NEW BOOKS -->
  <div id="slideshow">
  <?php include ('slider.inc.php'); ?>
  <!-- NEW BOOKS -->
  </div>
  <!-- SEARCH & LINK -->
  <div class="tab">
   <div class="line9 linebottom"></div>
   <div class="line10 linebottom"></div>
   <div class="tabsearch">
    <form name="SearchForm" class="bgright" id="SearchForm" action="index.php" method="get">
     <input type="hidden" name="search" value="Search" />
     <input type="text" name="keywords" id="keyword" placeholder="<?php echo __('Keyword'); ?>" />
    </form>
   <div class="line11 linetop"></div>
   <div class="line12 linetop"></div>
    <a href="#advSearch"><div id="advbutton" class="bgleft"><?php echo __('Advanced Search'); ?></div></a>
   </div>
   <div class="tabmenu bgbottom">
        <ul>
     <li>
      <a href="index.php">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/home.png">
       <span><?php echo __('Home'); ?></span>
      </a>
     </li>
     <li>
      <a href="index.php?p=libinfo">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/info.png">
       <span><?php echo __('Library Information'); ?></span>
      </a>
     </li>
     <li>
      <a href="index.php?p=help">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/help.png">
       <span><?php echo __('Help on Search'); ?></span>
      </a>
     </li>
     <li>
      <a href="index.php?p=member">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/user.png">
       <span><?php echo __('Member Area'); ?></span>
      </a>
     </li>
     <li>
      <a href="#bahasa">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/sound.png">
       <span><?php echo __('Select Language'); ?></span>
      </a>
     </li>
     <li>
      <a href="index.php?p=login">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/lock.png">
       <span><?php echo __('Librarian LOGIN'); ?></span>
      </a>
     </li>
    </ul>
   </div>
   <div class="line5 linetop2"></div>
   <div class="line6 linetop2"></div>
   <div class="tablink bgtop">
    <ul>
     <li>
      <a href="http://twitter.com/#!/slims_official" target="blank">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/twitter.png">
       <span>Twitter</span>
      </a>
     </li>
     <li>
      <a href="http://www.facebook.com/groups/senayan.slims/" target="blank">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/facebook.png">
       <span>Facebook</span>
      </a>
     </li>
     <li>
      <a href="https://github.com/slims/" target="blank">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/github.png">
       <span>Github</span>
      </a>
     </li>
     <li>
      <a href="http://slims.web.id/forum/" target="blank">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/forum.png">
       <span>Forum</span>
      </a>
     </li>
     <li>
      <a href="http://www.youtube.com/user/senayanslims" target="blank">
       <img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/youtube.png">
       <span>You Tube</span>
      </a>
     </li>
    </ul>
   </div>
   <div class="line7 linebottom2"></div>
   <div class="line8 linebottom2"></div>
   <!-- LANGUAGE -->
   <div id="bahasa">
    <ul>
     <li><a href="index.php?select_lang=ar_AR"><?php echo __('Arabic'); ?></a></li>
     <li><a href="index.php?select_lang=bn_BD"><?php echo __('Begali'); ?></a></li>
     <li><a href="index.php?select_lang=de_DE"><?php echo __('German'); ?></a></li>
     <li><a href="index.php?select_lang=en_US"><?php echo __('English'); ?></a></li>
     <li><a href="index.php?select_lang=es_ES"><?php echo __('Espanol'); ?></a></li>
     <li><a href="index.php?select_lang=id_ID"><?php echo __('Indonesian'); ?></a></li>
     <li><a href="index.php?select_lang=pt_BR"><?php echo __('Brazilian Portuguese'); ?></a></li>
     <li><a href="index.php?select_lang=th_TH"><?php echo __('Thai'); ?></a></li>
    </ul>
   </div>
   <!-- LANGUAGE END -->
   <!-- ADVSEARCH -->
   <div id="advSearch"><?php include ('advsearch.inc.php'); ?></div>
   <!-- ADVSEARCH END-->
  </div>
  <!-- SEARCH & LINK -->
  <?php } ?>
  <script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/supersized.3.1.3.min.js"></script>
	<script type="text/javascript">
	    jQuery(function($){
	     $.supersized(
	     {
		 transition  : 6,
		 keyboard_nav  : 0,
		 start_slide  : 0,
		 vertical_center : 1,
		 horizontal_center : 1,
		 min_width : 1000,
		 min_height : 700,
		 fit_portrait  : 1,
		 fit_landscape : 0,
		 image_protect : 1,
		 slides  : [
		{ image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/1.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/2.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/3.jpg' },
		 { image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/4.jpg' },
	       ]
	     });
	    });
	</script>
 </body>
</html>