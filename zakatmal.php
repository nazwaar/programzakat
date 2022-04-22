
<html>
    <head>
        <title>Hitung zakat</title>
        <style>
              body{
	background: #F2F2F2;
	font-family: sans-serif;
}

.label{
	width: 335px;
    height: 325px;
	background:orange;
	margin: 100px auto;
	padding: 20px 30px 60px 30px;
	border-radius: 5px;
	
}

.angka{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 13pt;
	border-radius: 5px;
	padding: 10px;	
}

.pilihan{
	border: none;
	width: 300px;
	margin: 5px;
    font-size: 13pt;
	border-radius: 5px;
	padding: 10px;
}

.tombol{
	width: 130px;
	background: #2f4b66;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 12px;
	color: #fff;
	font-size: 12pt center;
}

.judul{
	text-align: center;
	color: #fff;
	font-weight: normal;
    font family: 
}
a:-webkit-any-link {
	text-decoration:none;
}
footer {
	padding-top: 10px;

	text-align: center;
}

.wrapper{
    width: 1100px;
    margin: auto;
    position: relative;
}

.logo a{
    font-size: 38px;
    font-weight: bold;
    float: left;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #92A9BD;
}

.menu{
    float: right;

}

nav{
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: white;
    z-index: 1;
    border-bottom: 1px solid #92A9BD;
}

nav ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li{
    float: left;
}

nav ul li a{
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover{
    text-decoration: underline;
}



        </style>
    </head>

    <body>

	<nav>
        <div class="wrapper">
            <div class="logo"><a href=''>SMK WIKRAMA</a></div>
            <div class="menu">
                <ul>
				<li><a href="zakat.php">HOME</a></li>
                    <li><a href="pengertian.php">PENGERTIAN</a></li>
                    <li><a href="zakatfit.php">ZAKAT FITRAH</a></li>
                    <li><a href="zakatmal.php">ZAKAT MALL</a></li> 
                </ul>
        </div>
    </nav>
      
    <div class="label">
    <h2 class="judul">HITUNG ZAKAT MALL</h2>
    <form method = "post" action = "zakatmal.php">
            <label>Jumlah Pendapatan yang Tersimpan Selama 1 Tahun</label><br><br>
            <input type="text" name="mal">
            
		<br><br/>

             <input type="submit" value="HITUNG">
             <br><br>
	</form>
    

	<?php 
if ($_SERVER ['REQUEST_METHOD']== "POST"){
 $mal = $_POST['mal'];

 $rumusmal= 2.5/100 * $mal ;

 echo "Maka Zakat Mall yang harus dibayarkan adalah sebesar Rp $rumusmal <br/>";
}

?>

        

                

            
    </div>
</div>
    
</body>
</html>
        