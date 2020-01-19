		//ZAGRANIE DŹWIĘKU KRYJĄCEGO SIĘ POD LITERĄ
		function play(x) {
        var audio = document.getElementById(x);
        if (audio !== null){
        audio.load();
        audio.play();
    		}		
    	}		

    	//PODFUNKCJA ODPOWIADAJĄCA ZA PRĘDKOŚĆ ODTWARZANIA
		function sleep(ms) {
		return new Promise(resolve => setTimeout(resolve, ms));
		}

		//ZATRZYMANIE ODTWARZANIA DŹWIĘKU
		var pause = false;

		function stop(){
		pause=true;
		}

	
		//ODCZYT WPISANEGO TEKSTU
		let s = "";
		var select = 0;
		
    	async function read() {

    		//ZATRZYMANIE ODTWARZANIA GDYBY BYŁO JUŻ WŁĄCZONE
    		pause = true; 
    		await sleep(document.getElementById('zakres').value); 
    		
    		//WŁĄCZENIE TRYBU GRANIA     
			pause=false;
    		s = document.getElementById('in').value.toString();

    		//ODCZYT POZYCJI STARTOWEJ KURSORA (DOMYSLNIE 0)
			select = document.getElementById('in');	
			var startPos = select.selectionStart;

			//USTALENIE PUNKTU STARTOWEGO I GRANIE ZACZYNAJĄC OD NIEGO
			for(var i = startPos; i < s.length; i++){
			if(pause == false)
			{
			play(s.charAt(i));
			select.focus(); //PODŚWIETLANIE GRANEGO AKTUALNIE DŹWIĘKU
			select.setSelectionRange(i,i+1);

			await sleep(document.getElementById('zakres').value); //ODCZEKANIE CZASU TRWANIA

			}
			}
			//USTAWIENIE KURSORA NA WARTOŚĆ DOMYŚLNĄ
			select.setSelectionRange(0,1); 
			}

	//EVENTLISTENER ABY DAŁO SIĘ GRAĆ 'NA ŻYWO'
	
	document.addEventListener('keydown', (e) => {
		if(document.getElementById('czyGra').checked){
		play(e.key);

		
		}
		
	})
	