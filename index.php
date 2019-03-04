<!DOCTYPE html>
<html>
<head>
	<title>Learn Javascript</title>
</head>
<style type="text/css">
	body{
		text-align: center;
		background-color: #2f3542;
		color: #ffffff;
	}
</style>
<body>
	<h2>What can javascript do?</h2> 

		<p id="demo">Javascript can change HTML content</p>
			<button type="button" onclick="document.getElementById('demo').innerHTML = 'Hello Javascript!'">Click Me!</button>
			<br>

		<p id="time"></p>
		<button type="button" onclick="document.getElementById('time').innerHTML = Date()">Display Time Here!!</button>
		<br>
		<br>
	<h3>Javascript can change image</h3>
	<img src="image/bee.png" id="img" onclick="changeImage()" width="100" height="180">
	<p>Click image to change!</p>
	<script type="text/javascript">
		function changeImage(){
			var image = document.getElementById('img');
			if (image.src.match("bee")) {
				image.src = "image/shark.png";
			}else{
				image.src = "image/bee.png";
			}
		}
	</script>
	<br>
	<p id="cStyle" style="font-size: 20px;">Javascript can change style!!</p>
	<button type="button" onclick="chaStyle()">Click to Change Color!</button>
	<script type="text/javascript">
		function chaStyle(){
			var x = document.getElementById("cStyle");
			if(x.style.color.match("black")){
				x.style.color = "red";

			}else if(x.style.color.match("red")){
				x.style.color = "yellow";

			}else if(x.style.color.match("yellow")){
				x.style.color = "green";
			}else if(x.style.color.match("green")){
				x.style.color = "blue";
			}else{
				x.style.color = "black";
			}

		}
	</script>
	<br>
	<h3>Javascript can validate input</h3>
	<p>Please input a number between 1 and 10 :</p>

	<input id="numb">
	<button type="button" onclick="validFunc()">Submit</button>

	<p id="valid"></p>
	<script type="text/javascript">
		function validFunc(){
		var x, text;

		//Get the value of the input with id = "numb"
		x = document.getElementById('numb').value;

		//if x is not a number or less than one or greater than 10 
		if (isNaN(x) || x < 1 || x > 10) {
			text = "input not valid";
		}else{
			text = "input OK";
		}
		document.getElementById("valid").innerHTML = text;
	}
	</script>
	<br>
	<p id="coba">Hello world!!</p>
	<button type="button" onclick="coba()">klik here to change</button>
	<br>
	<p id="tambah"></p>
	<script type="text/javascript">
		document.getElementById('tambah').innerHTML = 5 + 9;
	</script>
	<br>
	<script type="text/javascript">
		document.write(40 + 1);
	</script>
	<br>
	<button type="button" onclick="document.write(1 + 2)">Kill All!!</button>
	<!-- window alert -->
	<script type="text/javascript">
		window.alert("Selamat datang di Javascript Fundamentals");
	</script>
<!-- 	console log
 --><script type="text/javascript">
 	console.log(5 + 5);
 	</script>
 	<br>
 	<h3>Javascript Statement</h3>
 	<p id="pertam"></p>
 	<script type="text/javascript">
 		var z, x ,c;
 		z = 1;
 		x = 4;
 		c = z + x;

 		document.getElementById('pertam').innerHTML = "the value is" + " "+ c + " " + "number";
 	</script>
 	<br>
 	
 	<h3>Javascript function</h3>
 	<p id="fun"></p>
 	<script type="text/javascript">
 		var y = myFun(5,10);
 		document.getElementById('fun').innerHTML = y;
 		function myFun(a, b){
 			return a * b;
 		}
 	</script>
 	<p id="arit"></p>
 	<script type="text/javascript">
 		var a , b, c;
 		a = 10;
 		b = 15;
 		c = a + b;

 		document.getElementById('arit').innerHTML = "Aritmatik" + " " + c;

 	</script>
 	<h3>Javascript Assigment</h3>
 	<p id="Ass"></p>
 	<script type="text/javascript">
 		var h = 4;
 		h += 4;
 		document.getElementById('Ass').innerHTML = h;

 	</script>
 	<h3>Javascipt Function</h3>
 	<p id="jadi"></p>
 	<script type="text/javascript">
 		document.getElementById('jadi').innerHTML = k(10, 5);
 	</script>
 	<p id="jim"></p>
 	<script type="text/javascript">
 		function m(n, m){
 			return n + m;
 		}
 		document.getElementById('jim').innerHTML = m(10,2);
 	</script>
 	<h3>Javascipt Convert Celcius</h3>
 	<p id="celsius"></p>
 	<p id="cl"></p>
 	<script type="text/javascript">
 		function toCel(f){
 			return (5/9) * (f-32);
 		}
 		document.getElementById('celsius').innerHTML = toCel(77);
 		document.getElementById('cl').innerHTML = toCel(99);
 	</script>
 	<h3>Javascript Object</h3>
 	<p id="ob"></p>
 	<p id="ca"></p>
 	<script type="text/javascript">
 		var  car = {nama : "jezz", warna : "blue", kondisi : "baik"};
 		document.getElementById('ob').innerHTML = car.kondisi;
 		document.getElementById('ca').innerHTML = car.nama;
 	</script>
 	<p id="lo"></p>
 	<script type="text/javascript">
 		var kucing = {nama : "neko", warna : "putih", kaki : "empat"};
 		document.getElementById('lo').innerHTML = kucing.nama + " " + kucing.warna + " " + kucing.kaki;
 	</script>
 	<p id="aku"></p>
 	<script type="text/javascript">
 		var x = "john";
 		var y = new String("john");
 		//menghitung karakter
 		var i = y.length;

 		document.getElementById('aku').innerHTML = x + " " + i; 
 	</script>
 	<p id="p1">Jika aku dengan dirimu bersatu maka jadilah sebuah hubunngan yang</p>
 	<button type="button" onclick="inof()">Coba disini!</button>
 	<button type="button" onclick="hj()">Search disini!</button>
 	<p id="tampil"></p>
 	<br>
 	<p id="li"></p>
 	<script type="text/javascript">
 		function inof(){
 			var str = document.getElementById('p1').innerHTML;
 			var pos = str.IndexOf("bersatu");
 			document.getElementById('tampil').innerHTML = pos;
 		}
 		function hj(){
 			var co = document.getElementById('p1').innerHTML;
 			var post = co.search("dengan");
 			document.getElementById('li').innerHTML = post;
 		}
 	</script>
 	<p id="buah"></p>
 	<script type="text/javascript">
 		var buah  = "apel, mangga, kiwi";
 		var res = buah.slice(7, 13);
 		document.getElementById('buah').innerHTML = res;
 	</script>
 	<button type="button" onclick="mathRan()">Math random with float</button>
 	<p id="math"></p>
 	<script type="text/javascript">
 		function mathRan(){
 		document.getElementById('math').innerHTML = Math.floor(Math.random() * 56);
 	}
 	</script>
 	<p id="jam"></p>
 	<script type="text/javascript">
 		var w = new Date(9232483898999);
 		document.getElementById('jam').innerHTML = w;
 	</script>
 	<p id="clok"></p>
 	<script type="text/javascript">
 		var m = new Date();
 		document.getElementById('clok').innerHTML = m.toString();
 	</script>
 	<p id="da"></p>
 	<script type="text/javascript">
 		var o = new Date();
 		document.getElementById('da').innerHTML = o.toDateString();
 	</script>
 	<p id="poi"></p>
 	<script type="text/javascript">
 		var l = new Date();
 		document.getElementById('poi').innerHTML = l.toUTCString();
 	</script>
 	<h3>Javascript Array</h3>
 	<p id="buah1"></p>
 	<script type="text/javascript">
 		var b = ["apel", "anggur", "nanas", "jeruk", "salak"];
 		document.getElementById('buah1').innerHTML = b;
 	</script>
 	<p id="adbu"></p>
 	<script type="text/javascript">
 		var binatang = ["ayam", "anjing", "babi"];
 		binatang.push("kucing");
 		binatang.push("burung","bebek");
 		document.getElementById('adbu').innerHTML = binatang;
 	</script>
 	<h3>Looping Array on Javascript</h3>
 	<p id="loop"></p>
 	<script type="text/javascript">
 		var ar = ["mujib", "shafira","dia", "aku", "kamu"];
 		for(var index = 0; index < ar.length; index++){
 			text += ar[index];
 		}
 		document.getElementById('loop').innerHTML = text;

 	</script>
 	<h3>Javascript Boolean</h3>
 	<p id="bool"></p>
 	<script type="text/javascript">
 		var i = 1;
 		document.getElementById('bool').innerHTML = Boolean(i);
 	</script>
 	<h3>Javascript Condition</h3>
 	<p id="konsi"></p>
 	<script type="text/javascript">
 		if (new Date().getHours() < 18) {
 			document.getElementById('konsi').innerHTML = "Good Day!!";
 		}
 	</script>
 	<script type="text/javascript">
 		var jam = 2;
 		if (jam > 6 && jam < 12) {
 			document.getElementById('konsi').innerHTML = "Good Day!!";
 		}else if(jam > 1 && jam < 3){
 			document.getElementById('konsi').innerHTML = "Good Afternoon!!";
 		}else{
 			document.getElementById('konsi').innerHTML = "Good Evening!!";
 		}
 	</script>
 	<input type="numb" id="mas">
 	<button type="button" onclick="hitung()">coba ya gan hehehe</button>
 	<p id="hasil"></p>
 	<script type="text/javascript">
 		function hitung(){
 			var mas, text;
 			mas = document.getElementById('mas').value;

 			if (mas > 5 && mas < 9) {
 				text = "Good Morning!!";
 			}else if(mas > 9 && mas < 15){
 				text = "Good Day!!";
 			}else if(mas > 15 && mas < 19){
 				text = "Good Afternoon!!";
 			}else if(mas > 19 && mas < 24){
 				text = "Good Evening!!";
 			}else{
 				text = "Good Night!!";
 			}
 			document.getElementById('hasil').innerHTML = text;
 		}
 	</script>
 	<h3>Javascript Switch</h3>
 	<p id="swi"></p>
 	<script type="text/javascript">
 		var u, pesan;
 		switch(new Date().getDay()){
 			case 0 :
 			pesan = "Sunday";
 			break;

 			case 1 :
 			pesan = "Monday";
 			break;

 			case 2 :
 			pesan = "Tuesday";
 			break;

 			case 3 :
 			pesan = "Wednesday";
 			break;

 			case 4 :
 			pesan = "Thursday";
 			break;

 			case 5:
 			pesan = "Friday";
 			break;

 			case 6:
 			pesan = "Saturday";
 			break; 
 		}
 		document.getElementById('swi').innerHTML = pesan;
 	</script>
 	<h3>Looping For Javascript</h3>
 	<p id="for"></p>
 	<script type="text/javascript">
 		var text;

 		for (var index = 1; index < 3; index++){
 			text += "Hello" + " " + index + "<br>";
 		}
 		document.getElementById('for').innerHTML = text;
 	</script>
 	<p id="kj"></p>
 	<script type="text/javascript">
 		var m;
 		for(var i = 0; i < 4; i++){
 			m += "coba" + " " + i + "<br>";
 		}
 		document.getElementById('kj').innerHTML = m;
 	</script>
 	<p id="mobel"></p>
 	<script type="text/javascript">
 		var warna = ["merah", "kuning", "hijau","biru","ungu"];
 		var  nam;
 		for( var p = 0; p < warna.length; p++){
 			nam += "warna pelangi" + " " + warna[p] + "<br>";
 		}
 		document.getElementById('mobel').innerHTML = nam;
 	</script>
 	<h3>Loopin While</h3>
 	<p id="whie"></p>
 	<script type="text/javascript">
 		var whil, i = 0;
 		while(i < 5){
 			whil += "The Number is" + " " + i + "<br>";
 			i++;
 		}
 		document.getElementById('whie').innerHTML = whil;
 	</script>
 	<button type="button" onclick="doFun()">Do Javascript</button>
 	<p id="dofunya"></p>
 	<p id="do"></p>
 	<script type="text/javascript">
 		var k = 0; 
 		var ya = "";
 		do{
 			ya += "The Number ya gan hhh" + " " + k + "<br>";
 			k++;
 		}while(k < 4);
 		document.getElementById('do').innerHTML = ya;
 	</script>
 	<script type="text/javascript">
 		function doFun(){
 			var fs = 0;
 			var lk = "";
 			do{
 				lk += "cobafiun" + " " + fs + "<br>";
 				fs++;
 			}while(fs < 3);
 			document.getElementById('dofunya').innerHTML = lk;
 		}
 	</script>
 	<h3>Looping with Condition</h3>
 	<p id="beru"></p>
 	<script type="text/javascript">
 		var anu;
 		var kon = "";
 		for(anu = 0; anu < 10; anu++){
 			if(anu === 4){
 				break;
 			}
 			kon += "anu dari" + " " + anu + "<br>";
 		}
 		document.getElementById('beru').innerHTML = kon;
 	</script>
 	<h3>Javascript Handle Errors</h3>
 	<input id="demo3" type="text">
 	<button type="button" onclick="handel()">Test Input</button>
 	<p id="message"></p>
 	<script type="text/javascript">
 		function handel(){
 			var message, x;

 			message = document.getElementById('message');
 			message.innerHTML = "";
 			x = document.getElementById('demo3').value;
 			try{
 				if (x == "";) throw "Empty";
 				if (isNaN(x)) throw "Not a Number";
 				x = Number(x); 	
 				if (x < 5) throw "too low";
 				if (x > 10)	throw "too high";

 			}
 			catch(err){
 				message.innerHTML = "input is " + err;
 			}
 		}
 	</script>







	<!-- include javascript external -->
	<script type="text/javascript" src="function.js"></script>

</body>
</html>