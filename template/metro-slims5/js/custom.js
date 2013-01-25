/* Page Transition */

$(document).ready(function() {
	
	$("body").css("display", "none");

    $("body").fadeIn(1000);
    
	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(500, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
});

/* Clock */

window.setTimeout("waktu()",1000);  
			function waktu() {   
			var tanggal = new Date();  
			setTimeout("waktu()",1000);  
			document.getElementById("jam-menit").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes();
			document.getElementById("detik").innerHTML = tanggal.getSeconds();
}

/* Slidshow */

var timer = null; 
function openContent(trigger,divID){ 
	$('#divImage div').hide();
	$('#'+divID).fadeIn('slow');
	if(timer != null) clearTimeout(timer);
	timer = setTimeout( 
		function(){		
		var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
		nextAnchor.click();
		}, 10000
	);
}	 
$(document).ready(
	function(){
	openContent($('#firstSlide'),'div1');			
	}
)

/* Srolln*/

$(function()
			{
				$('.scroll-pane').each(
					function()
					{
						$(this).jScrollPane(
							{
								showArrows: $(this).is('.arrow')
							}
						);
						var api = $(this).data('jsp');
						var throttleTimeout;
						$(window).bind(
							'resize',
							function()
							{
								if ($.browser.msie) {
									// IE fires multiple resize events while you are dragging the browser window which
									// causes it to crash if you try to update the scrollpane on every one. So we need
									// to throttle it to fire a maximum of once every 50 milliseconds...
									if (!throttleTimeout) {
										throttleTimeout = setTimeout(
											function()
											{
												api.reinitialise();
												throttleTimeout = null;
											},
											50
										);
									}
								} else {
									api.reinitialise();
								}
							}
						);
					}
				)

			});