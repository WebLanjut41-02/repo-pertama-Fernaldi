<html>
<head> 
<title>Menghitung Berat Badan Ideal</title>
</head>
<body>
   <form method="post">
    <h4>Menghitung Berat Badan Ideal</h4>
      <table>
         <tr>
              <td>Tinggi Badan</td>
              <td>:</td>
              <td><input type="text"  name="tb" > cm</td> 
         </tr> 
         <tr>
         	<td>Berat Badan</td>
         	<td>:</td>
         	<td><input type="text" name="bb"> kg</td>
         </tr>
         <tr>
         	<td>Jenis Kelamin</td>
         	<td>:</td>
         	<td><input type="radio" name="jk" value="Laki-laki">Laki-laki</td>
         	<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
         </tr>
          <tr>
              <td></td>
              <td><input type="submit" name="submit"></td> 
         </tr> 
      </table>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
$tinggi=$_POST['tb'];
$berat=$_POST['bb'];
$jenis=$_POST['jk'];
// $bbn=$tb/100;
// $bbi=$bb/($bbn*$bbn);

// echo "Jenis Kelamin anda : $jk<br>";
// echo "Tinggi Badan Anda : $tb cm<br>";
// echo "Berat Badan : $bb kg<br>";
// echo "Jadi Berat Badan Ideal Anda : $bbi kg";
// echo "";
}

class kalkulator{
	public $tb;
	public $bb;
	public $jk;

	function tampil($tb,$bb,$jk){
		echo "Tinggi :".$tb."<br>";
		echo "Berat :".$bb."<br>";
		echo "Jenis Kelamin :".$jk."<br>";

	}
	function BMI($tb,$bb,$jk){

		$tg = $tb/100;
		$akhir = $bb/($tg*$tg);

		if ($jk=="Perempuan") {
			if ($akhir<18) {
				echo "Under Weight/Kurus";
			}else
			if($akhir >=18 && $akhir <25){
				echo "Normal Weight/Normal";
			}else
			if ($akhir >=25 && $akhir <27) {
				echo "Over Weight/Kegemukkan";
			}else
			if ($akhir >= 27) {
				echo "Obesitas";
			}
		}
		if ($jk=="Laki-laki") {
			if ($akhir<17) {
				echo "Under Weight/Kurus";
			}else
			if($akhir >=17 && $akhir <23){
				echo "Normal Weight/Normal";
			}else
			if ($akhir >=23 && $akhir <27) {
				echo "Over Weight/Kegemukkan";
			}else
			if ($akhir >= 27) {
				echo "Obesitas";
			}
		}
	}

}
$h1 = new kalkulator;
$h1->tampil($tb,$bb,$jk);
$h1->BMI($tb,$bb,$jk);
?>
