<div class="navHome">
	<div class="navHome-1">
	<ul class="metro">
		<li class="box-s1 ho">
			<a class="box" href="index.php"><span style="top:10px; width:240px; font-size:11pt;"><?php echo $info; ?></span>
				<span style="bottom:45px;"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/home.png" alt="" width="40" height="40"></span>	
			</a>
		</li>
		
		<li class="box-s2 in">
			<a class="box" href="index.php?p=libinfo">
				<span><?php echo __('Library Information'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/info.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 me">
			<a class="box" href="index.php?p=member">
				<span><?php echo __('Member Area'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/android.png" alt="" width="90" height="90">
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/android.png" alt="" width="90" height="90">
			</a>
		</li>

		<li class="box-s2 ad">
			<a class="box" href="#advSearch">
				<span><?php echo __('Advanced Search'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/search-m.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 he">
			<a class="box" href="index.php?p=help">
				<span><?php echo __('Help on Search'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/help.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 gb">
			<a class="box" href="javascript: openHTMLpop('index.php?p=visitor',900,500,'')">
				<span><?php echo __('Visitor Counter'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/gb.png" alt="" width="90" height="90">
			</a>
		</li>
		
		
		
		<li class="box-s2 ho">
			<a class="box" href="index.php?p=peta" target="blank">
				<span>Map</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/peta.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 lo">
			<a class="box" href="index.php?p=login">
				<span><?php echo __('Librarian LOGIN')?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/lock.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 lg">
			<a class="box lang" href="#bahasa">
				<span><?php echo __('Select Language'); ?></span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/sound.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 cl">
			<a class="box">
				<span>Clock</span>
				<div id="jam-menit" 
				style="
						font-size:24px;
						color:#fff;
						text-align:center;
						padding:5px;
						cursor:pointer;
						"></div>
						
				<div id="detik" 
				style="
						font-size:82px;
						color:#fff;
						text-align:center;
						padding: 0 5px 5px 5px;
						margin-top:-10px;
						cursor:pointer;
					"></div>
			</a>
		</li>
		
		<li class="box-s1 in">
			<a class="box" href="index.php"><span style="top:10px; width:240px; font-size:9pt;">This software and this template are released Under GNU GPL License Version 3 <br/><br/> The Winner in the Category of OSS Indonesia ICT Award 2009</span>
				<span style="bottom:45px;"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/logo-inaicta.png" alt=""></span><span id="inyong">template by ido alit</span>
			</a>
		</li>
	</ul>
	</div>
<div class="navHome-2">
	<ul class="metro">
		<li class="box-s2 fb">
			<a class="box" href="http://www.facebook.com/groups/senayan.slims/" target="blank">
				<span>Facebook</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/facebook.png" alt="" width="90" height="90">
			</a>
		</li>
				
		<li class="box-s2 in">
			<a class="box" href="http://twitter.com/#!/slims_official" target="blank">
				<span>Twitter</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/twitter.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 yt">
			<a class="box" href="http://www.youtube.com/user/senayanslims" target="blank">
				<span>Youtube</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/youtube.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s3 gl dw">
			<div class="box">
				<span>
					<div id="divTrigger">
						<a href="javascript:;" onClick="openContent(this,'div1')" id="firstSlide">
							<?php
							//gambar 1
							$query_string = "SELECT image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'" width="200px" height="270px">';
							?>
						</a>
						<a href="javascript:;" onClick="openContent(this,'div2')">
							<?php
							//gambar 2
							$query_string = "SELECT image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 2, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'" width="200px" height="270px">';
							?>
						</a>
						<a href="javascript:;" onClick="openContent(this,'div3')">
							<?php
							//gambar 3
							$query_string = "SELECT image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 3, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'" width="200px" height="270px">';
							?>
						</a>
						<a href="javascript:;" onClick="openContent(this,'div4')">
							<?php
							//gambar 4
							$query_string = "SELECT image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 4, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'" width="200px" height="270px">';
							?>
						</a>
					</div>
				</span>
				
				<div id="side-image" >
					<div id="divImage">
						<div id="div1">
							<?php
							//gambar 1
							$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'"></a>';
							?>
						</div>
						<div id="div2">
							<?php
							//gambar 2
							$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 2, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'"></a>';
							?>
						</div>
						<div id="div3">
							<?php
							//gambar 3
							$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 3, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'"></a>';
							?>
						</div>
						<div id="div4">
							<?php
							//gambar 4
							$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 4, 1";
							$query = $dbs->query($query_string);
							$data = $query->fetch_assoc();
							echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="'.SENAYAN_WEB_ROOT_DIR.IMAGES_DIR.'/docs/'.$data['image'].'"></a>';
							?>
						</div>
					</div>
	
					
				</div>
			</div>
		</li>
		
		<li class="box-s2 me">
			<a class="box" href="https://github.com/slims/" target="blank">
				<span>Github</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/github.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 he">
			<a class="box" href="http://slims.web.id/forum/" target="blank">
				<span>Forum</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/forum.png" alt="" width="90" height="90">
			</a>
		</li>
	</ul>
</div>
<div class="navHome-3">
	<ul class="metro">
		<li class="box-s2 ge">
			<a class="box" href="https://docs.google.com/demo/edit?id=scAB0VLY2VFVPOHJsrnDmPiNV&hl=in&utm_medium=gaia&utm_campaign=Try%2Bit%2Bnow%2Bdemo&utm_source=homepage&dt=document#document" target="blank">
				<span>Document</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/doc.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 ge">
			<a class="box" href="https://docs.google.com/demo/edit?id=scAB0VLY2VFVPOHJsrnDmPiNV&hl=in&utm_medium=gaia&utm_campaign=Try%2Bit%2Bnow%2Bdemo&utm_source=homepage&dt=spreadsheet#spreadsheet" target="blank">
				<span>Spreadsheet</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/sheet.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 ge">
			<a class="box" href="https://docs.google.com/demo/edit?id=scAB0VLY2VFVPOHJsrnDmPiNV&hl=in&utm_medium=gaia&utm_campaign=Try%2Bit%2Bnow%2Bdemo&utm_source=homepage&dt=presentation#presentation" target="blank">
				<span>Presentation</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/presentation.png" alt="" width="90" height="90">
			</a>
		</li>
		
		<li class="box-s2 ge">
			<a class="box" href="https://docs.google.com/demo/edit?id=scAB0VLY2VFVPOHJsrnDmPiNV&hl=in&utm_medium=gaia&utm_campaign=Try%2Bit%2Bnow%2Bdemo&utm_source=homepage&dt=drawing#drawing" target="blank">
				<span>Drawing</span>
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/drawing.png" alt="" width="90" height="90">
			</a>
		</li>
	</ul>
</div>
</div>