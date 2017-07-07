	<?php
		function rndstr(){
			$d = '0123456789abcdefghijklmnopqrstuvwxyz';
			$rnd = '';
			for($i=0; $i<5; $i++){
				$rnd .= $d[rand(0, strlen($d)-1)];
			}
			return $rnd;
		}
	?>
		<?php
			$rand = rndstr();
			 echo "You can acces your code snippet at http://www.sri.com/$rand"; 
				$h = fopen("$rand".".txt", "w");
				$u = $_POST["code"];
				fwrite($h, $u);
				fclose($h);
		?>