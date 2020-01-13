function zegarek() {
    var data = new Date();
    var godzina = data.getHours();
    var minuta = data.getMinutes();
    var sekunda = data.getSeconds();

    if (minuta < 10) minuta = "0" + minuta; /* zeby bylo np 07:08 */
    if (sekunda < 10) sekunda = "0" + sekunda;

    

    var pokazDate =  + godzina + ':' + minuta + ':' + sekunda;
    document.getElementById("zegar").innerHTML = pokazDate;

    setTimeout(zegarek, 1000);
}