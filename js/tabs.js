function generuj() {		
		let tekst = document.getElementById('in').value.toString();
		var dlugosc = tekst.length;
		document.getElementById('tab').innerHTML = "";
		var start = 0;
		var ogr = 30;
		var przebiegi = tekst.length/ogr;
		let s1 = "";
		let s2 = "";
		let s3 = "";
		let s4 = "";

		for (var j = 0; j < przebiegi; j++){
		s1 = "";
		s2 = "";
		s3 = "";
		s4 = "";

		for (var i = start; i < tekst.length && i < ogr + start; i++) {
			switch(tekst[i]){
				case "z":
				s1 += "--";
				s2 += "--";
				s3 += "0-";
				s4 += "--";
				break;

				case "s":
				s1 += "--";
				s2 += "--";
				s3 += "1-";
				s4 += "--";
				break;

				case "x":
				s1 += "--";
				s2 += "--";
				s3 += "2-";
				s4 += "--";
				break;

				case "d":
				s1 += "--";
				s2 += "--";
				s3 += "3-";
				s4 += "--";
				break;

				case "c":
				s1 += "--";
				s2 += "0-";
				s3 += "--";
				s4 += "--";
				break;

				case "v":
				s1 += "--";
				s2 += "1-";
				s3 += "--";
				s4 += "--";
				break;

				case "g":
				s1 += "--";
				s2 += "2-";
				s3 += "--";
				s4 += "--";
				break;
				
				case "b":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "0-";
				break;
				
				case "h":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "1-";
				break;
				
				case "n":
				s1 += "0-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case "j":
				s1 += "1-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case "m":
				s1 += "2-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case ",":
				s1 += "3-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case "l":
				s1 += "4-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case ".":
				s1 += "5-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case ";":
				s1 += "6-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;
				
				case "/":
				s1 += "7-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				break;


				default:
				break;
			}
		}
		document.getElementById('tab').innerHTML += "<br>" + s1 + "<br>" + s2 + "<br>" + s3 + "<br>" + s4 + "<br>" ;
		start +=30;
		}
	}


function generuj2() {		
		let tekst = document.getElementById('in').value.toString();
		var dlugosc = tekst.length;
		document.getElementById('tab').innerHTML = "";
		var start = 0;
		var ogr = 30;
		var przebiegi = tekst.length/ogr;
		let s1 = "";
		let s2 = "";
		let s3 = "";
		let s4 = "";
		let s5 = "";
		let s6 = "";

		for (var j = 0; j < przebiegi; j++){
		s1 = "";
		s2 = "";
		s3 = "";
		s4 = "";
		s5 = "";
		s6 = "";


		for (var i = start; i < tekst.length && i < ogr + start; i++) {
			switch(tekst[i]){
				case "z":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				s5 += "3-";
				s6 += "--";
				break;

				case "s":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				s5 += "4-";
				s6 += "--";
				break;

				case "x":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "0-";
				s5 += "--";
				s6 += "--";
				break;

				case "d":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "1-";
				s5 += "--";
				s6 += "--";
				break;

				case "c":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "2-";
				s5 += "--";
				s6 += "--";
				break;

				case "v":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "3-";
				s5 += "--";
				s6 += "--";
				break;

				case "g":
				s1 += "--";
				s2 += "--";
				s3 += "--";
				s4 += "4-";
				s5 += "--";
				s6 += "--";
				break;
				
				case "b":
				s1 += "--";
				s2 += "--";
				s3 += "0-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "h":
				s1 += "--";
				s2 += "--";
				s3 += "1-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "n":
				s1 += "--";
				s2 += "--";
				s3 += "2-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "j":
				s1 += "--";
				s2 += "--";
				s3 += "3-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "m":
				s1 += "--";
				s2 += "--";
				s3 += "4-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case ",":
				s1 += "--";
				s2 += "--";
				s3 += "5-";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "l":
				s1 += "--";
				s2 += "2-";
				s3 += "--";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case ".":
				s1 += "--";
				s2 += "3-";
				s3 += "--";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case ";":
				s1 += "--";
				s2 += "4-";
				s3 += "--";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;
				
				case "/":
				s1 += "0-";
				s2 += "--";
				s3 += "--";
				s4 += "--";
				s5 += "--";
				s6 += "--";
				break;


				default:
				break;
			}
		}
		document.getElementById('tab').innerHTML += "<br>" + s1 + "<br>" + s2 + "<br>" + s3 + "<br>" + s4 + "<br>" + s5 + "<br>" + s6 + "<br>" ;
		start +=30;
		}
	}