var pause = false;
		function play(x) {
		if(x != ' '){
        var audio = document.getElementById(x);
        audio.load();
        audio.play();
		}
    }		
			function sleep(ms) {
			  return new Promise(resolve => setTimeout(resolve, ms));
			}

    	async function read() {
			pause=false;
    		let s = document.getElementById('in').value.toString();
			let select = document.getElementById('in');
			for(var i = 0; i < s.length; i++){
			if(pause == false)
			{
			play(s.charAt(i));
			select.focus();
			select.setSelectionRange(i,i+1);

			await sleep(document.getElementById('zakres').value);
			}
			}
			}
	
	document.addEventListener('keydown', (e) => {
		if(document.getElementById('czyGra').checked){
		play(e.key);

		
		}
		
	})
	function stop(){
		pause=true;
		audio.pause();
	}