<!--

  $$$$$$$$  $$        $$  $$$$      $$$$    $$$$$$$$
$$          $$            $$$$      $$$$  $$        
$$          $$        $$  $$  $$  $$  $$  $$        
  $$$$$$    $$        $$  $$  $$  $$  $$    $$$$$$  
        $$  $$        $$  $$    $$    $$          $$
        $$  $$        $$  $$    $$    $$          $$
        $$  $$        $$  $$          $$          $$
$$$$$$$$    $$$$$$$$  $$  $$          $$  $$$$$$$$  

                                                                              ##  ##                
                                                                                  ##                
  ######    ######    ######  ####    ######  ####    ##      ##  ########    ##  ######  ##      ##
##        ##      ##  ##    ##    ##  ##    ##    ##  ##      ##  ##      ##  ##  ##      ##      ##
##        ##      ##  ##    ##    ##  ##    ##    ##  ##      ##  ##      ##  ##  ##        ##  ##  
##        ##      ##  ##    ##    ##  ##    ##    ##  ##      ##  ##      ##  ##  ##        ##  ##  
##        ##      ##  ##    ##    ##  ##    ##    ##  ##      ##  ##      ##  ##  ##          ##    
  ######    ######    ##    ##    ##  ##    ##    ##    ########  ##      ##  ##    ####      ##    
                                                                                            ##      
                                                                                            ##      
=======================================
Slims Meranti Template 
@2012
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="webicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
	<link href="template/core.style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
	<link type="text/css" href="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/gui.js"></script>
	<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/jquery.jscrollpane.min.js"></script>	
</head>

<body>
	<div id="start">
		<a href="index.php"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/start.png" alt=""></a>
	</div>
	<!-- Advace Search -->
	<div id="advSearch" class="sidepage">
		<a class="back" style="position:absolute; top:20px; left:20px;" href="javascript: history.back();"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="30" height="30">
		</a>
		<div class="titleSide">
			<?php echo __('Advanced Search'); ?>
		</div>
		<div id="advance-search">
			<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
				<div class="advance">
					<table width="100%">
						<tr>
							<td class="advForm">
							<?php echo __('Author(s)'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo $advsearch_author; ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo __('Subject(s)'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo $advsearch_topic; ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
							<?php echo __('ISBN/ISSN'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<input type="text" name="isbn" />
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('GMD'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="gmd">
								<?php echo $gmd_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('Collection Type'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="colltype">
								<?php echo $colltype_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<?php echo __('Location'); ?>
							</td>
						</tr>
						<tr>
							<td class="advForm">
								<select name="location">
								<?php echo $location_list; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="advForm" style="text-align:center;">
								<button type="submit" name="search" value="<?php echo __('Search'); ?>" class="searchButton"><?php echo __('Search'); ?></button>
							</td>
						</tr>
					</table>
				</div>
			</form>
	    </div>
	</div>
	<!-- AdvaceSearch end -->

	<!-- Language -->
	<div id="bahasa" class="sidepage">
		<a class="back" style="position:absolute; top:20px; left:20px;" href="javascript: history.back();"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="30" height="30">
		</a>
		<div class="titleSide">
			<?php echo __('Select Language'); ?>
		</div>
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
	<!-- Language end -->
	
	<div id="main">
	
		<?php if(isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords'])) { ?>
		
		<div  class="nduwur">
			<a class="back" href="javascript: history.back();">
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="40" height="40">
			</a>
			<span>Result Search</span>
		</div>
		
		<div id="nav-result">
			<?php include ("nav.php") ?>
		</div>
		
		<div id="search-result">
			<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
				<button id="submit-button" type="submit" value="search" name="search" /></button>
				<input type="text" name="keywords" id="keyword" />
			</form>
			<a href="#advSearch">
				<abbr title="<?php echo __('Advanced Search'); ?>">
					<div id="adv-result">
						<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/adv-s.png" alt="adddddd">
					</div>
				</abbr>
			</a>
		</div>
	
		<div class="sidebar-result">
			<div class="tagline">
				<?php echo __('Information'); ?>
			</div>
			<div class="search-result-info">
				<?php echo $search_result_info; ?>
			</div>
			<?php if ($sysconf['enable_search_clustering']) { ?>
			<div class="tagline">
				<?php echo __('Search Cluster'); ?>
			</div>
	  
			<div style="height:312px">
				<div class="scroll-pane">
					<div id="search-cluster">
						<div class="cluster-loading">
							<?php echo __('Generating search cluster...');  ?>
						</div>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				$('document').ready( function() {
					$.ajax({
						url: 'index.php?p=clustering&q=<?php echo urlencode($criteria); ?>',
						type: 'GET',
						success: function(data, status, jqXHR) {
							$('#search-cluster').html(data);
						}
					});
				});
			</script>
			<?php } ?>
		</div>
	
		<div class="result-search">
			<div class="resultiner">
				<div class="scroll-pane horizontal-only">
					<div style="width: 3250px; height: 521px;">
						<?php echo $main_content; ?>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	
		<?php } elseif($p == 'member') { ?>
	
		<div class="sidebar">
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
			<?php } ?>
		</div>
	
		<div  class="nduwur">
			<a class="back" href="javascript: history.back();">
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="40" height="40">
			</a>
			<span><?php echo __('Member Area'); ?></span>
		</div>
	
		<?php include ("nav.php") ?>
		<div class="section">
			<div class="collections-list">
				<?php echo $main_content; ?>
				<div class="clear">&nbsp;</div>
			</div>
		</div>

		<!-- Detile Spesifik -->
		<?php } elseif(isset($_GET['p'])) { ?>
		<?php if ($_GET['p'] == 'show_detail') {
			echo $main_content;
	    } else { 
		?>
	
		<div  class="nduwur">
			<a class="back" href="javascript: history.back();">
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="40" height="40">
			</a>
			<span><?php echo $page_title; ?></span>
		</div>
		
		<?php include ("nav.php") ?>
		<div class="section">
			<?php echo $main_content; ?>
		</div>
		
		<?php } ?>
		<!-- Detile Spesifik end -->
		
		<?php } else { ?>
		
		<!-- Home -->
		<div id="header-1">
			<?php include ("header.php") ?>
		</div>
		<div class="pageHome">
			<div id="search">
				<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
					<button id="submit-button-home" type="submit" value="search" name="search" /></button>
					<input type="text" name="keywords" id="keyword"/>
				</form>
			</div>
			<div id="slims">SLiMS</div>
				<?php include ("nav_metro.php") ?>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<!-- Home end -->
	</div>
</body>
</html>