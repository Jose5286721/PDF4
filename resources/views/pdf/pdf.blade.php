<html>
<style>
@font-face{
    font-family: 'Satisfy';
    src: url({{storage_path("fonts/Satisfy-Regular.ttf")}}) format('truetype');
    font-weight: bold;
    font-style: normal;
}
@font-face{
    font-family: 'Montserrat';
    src: url({{storage_path("fonts/Montserrat-Regular.ttf")}}) format('truetype');
    font-weight: bold;
    font-style: normal;
}

@page {
	padding:0;
	font-family: 'Satisfy';
}

.titulos{
	color:#525557;
	width:491.338583px;
	font-family: 'Montserrat';
	border-collapse: separate;
	text-align: left;
}
header,
footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
header {
    top: 0px;
}
footer {
	left:-400px;
    bottom: 80px;
}
.titulos tr th.a1{
	width: 188.976378px;
	text-align:left;
}
.titulos tr th.a2{
	width: 113.385827px;
	text-align:left;
}
.titulos tr th.a3{
	width: 94.488189px;
	text-align:left;
}
.titulos tr th.a4{
	width: 94.488189px;
	text-align:left;
}
.cabecera{
	width: 377.952756;
	margin-top:40;
	margin-left:90;
	height:12%;
	color:#525557;
	font-size:50px;
	font-family: 'Satisfy';
}
.barra{
	margin-top:20;
	margin-left:90;
	width: 491.338583px;
	height:2mm;
	background-color: #a4c3cb;
}
.seccion{
}
.inclinacion-texto{
	position: absolute;
	transform: rotate(-90deg);
	margin-left: 1000px;

}
.productos{
	color:#8c8c8c;
	width:491.338583px;
	border-collapse: separate;
	text-align: left;
}

.productos div.b1{
	float:left;
	text-align:left;
}
.productos div.b2{
	float:left;
	text-align:left;
	
}
.productos div.b3{
	float:left;
	width:250px;
	text-align:right;
}
.productos div.b4{
	float:left;
	width:250px;
	text-align:right;
}
.totales{
	margin-top:5%;
	margin-left:60%;
	width:80%;
	height:30%;
}
.iz{
	font-weight: bold;
	text-align:right;
	width:70%;
	height: 5%;
	margin-top:1%;
	float:left;
	color:#525557;
}
.der{
	color:#8c8c8c;
	text-indent: 20;
	text-align:left;
	height:5%;
	width:30%;
	float:right;
}
.pie-pagina{
	font-size: 22px;
	font-family: 'Satisfy';
	color:#525557;
}
.contenido{
	margin-left:7%;
	width: 50%;
	float:left;
}
.contenido h1{
	font-size:50px;
}
.barra{
	margin-top:7.5%;
	margin-left: -4%;
	width: 142.8%;
	height:6px;
	background-color: #a4c3cb;
}
.barra2{
	margin-top:1.4%;
	margin-left: -4%;
	width: 142.8%;
	height:6px;
	background-color: #a4c3cb;
}
.container{
	position: absolute;
	transform:rotate(-90deg);
	margin-left: -33%;
	text-align: right;
	margin-top: 363px;
	width: 160%;
	height: 300px;
	background-color: #a2bfc7;
	color:white; 
	float:left;
}
.container h1{
	margin-right: 10%;
	margin-top:5%;
	font-size: 50px;
}
.izq{
	width:60%;
	height:5%;
	float:left;
}
.dere{
	width: 40%;
	height:5%;
	float:right;
}
    </style>
<body>
	<div class="contenido">
		<h1>Cotizacion</h1>
		<div class="barra"></div>
		<table class="titulos">
			<tr>
				<th class="a1">PRODUCTO</th>
				<th class="a2">COSTO UNITARIO</th>
				<th class="a3">CANTIDAD</th>
				<th class="a4">TOTAL</th>
			</tr>
		</table>
		<div class="barra2" ></div>
		<table class="titulos">
			<tr>
				<td width="25" class="a1">Serie lineal 100m 
					(Blancocálido)</td>
				<td width="35"class="a2">$1,900</td>
				<td width="25" class="a3 b3">22</td>
				<td width="20" class="a4 b4">$41,800</td>
			</tr>
		</table>
		<div class="barra2"></div>
		<div class="totales">
			<div class="iz">SUBTOTAL</div><div class="der">$41,800</div><br/>
		<div class="iz">DESCUENTO (10%)</div><div class="der">-$4,180</div><br/>
		<div class="iz">TOTAL</div><div class="der">$37,620</div>
		</div>
	</div>
	<div class="container">
		<h1>Shabbyshop</h1>
	</div>
	<footer class="pie-pagina">
		<h1>Shabbyshop</h1>
	</footer>
</body>
</html>