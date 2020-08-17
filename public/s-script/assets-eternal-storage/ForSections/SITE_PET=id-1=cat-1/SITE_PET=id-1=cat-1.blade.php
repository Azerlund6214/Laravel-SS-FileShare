@php  $path_to_section = $SS_Assets_eternal."/SITE_PET=id-1=cat-1/";  @endphp
<!-- Site Pet -->
<section id="sec_site_pet_cat">
		<style>
						
			#cat { 
				position: fixed; 
				right: 80px; 
				bottom: 0; 
				width: 146px; 
				height: 55px;
				
				z-index: 400;
				
			} 
			#cat:hover .cat-itself { 
				height: 103px; 
			} 
			#cat:hover .cat-eye { 
				display: none !important; 
			} 
			
			.cat-paws { 
				position: absolute; 
				right: 0; 
				bottom: -4px; 
				width: 132px; 
				height: 33px; 
				z-index: 2; 
				background: url(<?php echo $path_to_section; ?>cat-paws.png) no-repeat right bottom; 
			} 
			
			.cat-itself-wrap { 
				position: absolute; 
				width: 100%; 
				height: 100%; 
				z-index: 1; 
			} 
			.cat-itself { 
				position: absolute; 
				left: 0; 
				bottom: 0; 
				width: 125px; 
				height: 55px; 
				z-index: 0; 
				background: url(<?php echo $path_to_section; ?>cat-itself.png) no-repeat; 
				-webkit-transition: all 0.1s 0.1s ease-out; 
				transition: all 0.1s 0.1s ease-out; 
			} 
			
			.cat-eye { 
				position: absolute; 
				display: none; 
				width: 28px; 
				height: 28px; 
				background: url(<?php echo $path_to_section; ?>cat-eye.png); 
			} 
			.cat-eyeball { 
				position: absolute; 
				left: 7.5px; 
				top: 7.5px; 
				width: 13px; 
				height: 13px; 
				background: url(<?php echo $path_to_section; ?>cat-eyeball.png); 
			}
			
			#cat-eye-left { 
				left: 25px; 
				top: 23px; 
			} 
			#cat-eye-right { 
				left: 74px; 
				top: 26px; 
			}
			
			/*  */
		</style>
			
		<div id="cat"> 
			<div class="cat-paws"></div> 
			<div class="cat-itself-wrap"> 
				<div class="cat-itself"> 
					<div id="cat-eye-left" class="cat-eye"> 
						<div class="cat-eyeball">
						</div> 
					</div> 
					<div id="cat-eye-right" class="cat-eye"> 
						<div class="cat-eyeball">
						</div> 
					</div> 
				</div>	
			</div> 
		</div> 
		
		<script type="text/javascript">
			$(function() 
			{
				
				var el1 = $('#cat-eye-left'),  eyeBall1 = el1.find('div'); el1.show(); 
				var el2 = $('#cat-eye-right'), eyeBall2 = el2.find('div'); el2.show(); 
				
				
				var x1 = el1.offset().left + 37,   y1 = el1.offset().top + 15; 
				var r = 6, x , y, x2, y2, isEyeProcessed = false; 
				
				$(window).mousemove( function(e)
				{
					
					var height = window.event.clientY;
					var width  = window.event.clientX;
					
					
					
					if (!isEyeProcessed)
					{ 
						isEyeProcessed = true; 
						
						//var x2 = e.pageX, y2 = e.pageY; 
						var x2 = width, y2 = height; 
						 
						y = ((r * (y2 - y1)) / Math.sqrt((x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1))) + y1; 
						x = (((y - y1) * (x2 - x1)) / (y2 - y1)) + x1; 
						 
						eyeBall1.css({ 
						marginTop: (y - y1 + 1) + 'px', 
						marginLeft: (x - x1) + 'px' 
						});
						
						eyeBall2.css({ 
						marginTop: (y - y1 - 1) + 'px', 
						marginLeft: (x - x1) + 'px' 
						});
						
						isEyeProcessed = false; 
					} 
				}); 
				 
				$('#cat').mousemove( function(e)
				{ 
					e.stopPropagation(); 
					return false; 
				}); 
			 
			});
		</script>
	
</section>
@php  unset ( $path_to_section );  @endphp
