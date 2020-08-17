/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
pJS('particles-js');
particlesJS.load('particles-js', 'frontend/js/particles/particlesjs-config-2.json');
*/

//alert("p u s 123");

function particles_univ_starter( target_id = "body_id" , json_name = "particlesjs-config-demo" )
{
	
	//alert("p u s");
	
	
	// ’ранитс€ только тут   ћ≈Ќя“№ при переименовке
	var json_path = "s-script/frontend-libs-for-pages/particles/configs/";
	
	
	
	var target_tag = document.getElementById( target_id );
	//console.log(target_tag);
	
	if( target_tag == null)
	{
		alert("particles_univ_starter: Tag whith id '"+target_id+"' not found(="+target_tag+")=>return;");
		return;
	}
	
		
	target_tag.style.position = "relative";
	target_tag.classList.add('particles-content-raise');
	
	
	//if ( target_tag.style.position != "relative")
	//	alert( 123 );
	
	
	
	
	
	particlesJS.load( target_id , json_path+json_name+".json", function(){
	
	console.log("particles.js loaded - callback \n \
				tag_id = " + target_id + "\n \
				json = " + json_name );
	
	}
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
