<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Digitalni potpis</title>
    </head>
    
    <body>
    	<div class="container">
          <div class="jumbotron">
            <h1>Digitalni potpis</h1>
            <p>Projekt iz kolegija Operacijski sustavi 2</p>
          </div>
        </div>
    
    	<div class="container">
    		<div class="panel-group" id="accordion">
            
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Generiranje kriptografskih ključeva</a>
                    </h4>
                  </div>

                  <?php
        				  	if(isset($_POST['prvi'])){
          						echo "<div id='collapse1' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse1' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                        <p>Generiranje privatnog, javnog i tajnog ključa te njihovo spremanje na disk.</p>
                        <form method="post" action="OS2_projekt.php">
                            <button type="submit" class="btn btn-primary" name="prvi">Generiraj ključeve</button>
                        </form>
                        
                        <?php
                            generiraj_kljuceve();
                        ?>
                        
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Kriptiranje sinkronom metodom</a>
                    </h4>
                  </div>
                  
                  <?php
        				  	if(isset($_POST['drugi'])){
          						echo "<div id='collapse2' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse2' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    <form method="post" action="OS2_projekt.php" enctype="multipart/form-data">
                    	
                        <div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Tajni ključ: </label>
                            <input type="file" name="input_key" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="drugi">Kriptiraj</button>
                        </div>
                        
                    </form>
                    
           				<?php
        						kriptiraj_aes();
        					?>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Dekriptiranje sinkronom metodom</a>
                    </h4>
                  </div>
                  
                  <?php
        				  	if(isset($_POST['treci'])){
          						echo "<div id='collapse3' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse3' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    
                    <form method="post" action="OS2_projekt.php" enctype="multipart/form-data">
                    	
                        <div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Tajni ključ: </label>
                            <input type="file" name="input_key" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="treci">Dekriptiraj</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						dekriptiraj_aes();
        					?>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Kriptiranje asinkronom metodom</a>
                    </h4>
                  </div>
                  
                  <?php
        				  	if(isset($_POST['cetvrti'])){
          						echo "<div id='collapse4' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse4' class='panel-collapse collapse'>";
          					}
                  ?>
                  
                    <div class="panel-body">
                    
                    <form method="post" action="OS2_projekt.php" enctype="multipart/form-data">
                    	
                        <div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Javni ključ: </label>
                            <input type="file" name="input_key" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="cetvrti">Kriptiraj</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						kripitiraj_rsa();
        					?>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Dekriptiranje asinkronom metodom</a>
                    </h4>
                  </div>
                  
                  <?php
        				  	if(isset($_POST['peti'])){
          						echo "<div id='collapse5' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse5' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    
                    <form method="post" action="OS2_projekt.php" enctype="multipart/form-data">
                    	
                        <div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Privatni ključ: </label>
                            <input type="file" name="input_key" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="peti">Dekriptiraj</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						dekriptiraj_rsa();
        					?>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Izračunavanje sažetka poruke</a>
                    </h4>
                  </div>

                  <?php
        				  	if(isset($_POST['sesti'])){
          						echo "<div id='collapse6' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse6' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    <form method="post" action="OS2_projekt.php" enctype="multipart/form-data">
                    	
                        <div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="sesti">Izračunaj sažetak</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						izracunaj_sazetak();
        					?>
                    
                  	</div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Digitalno potpisivanje dokumenta</a>
                    </h4>
                  </div>
                  
                  <?php
        				  	if(isset($_POST['sedmi'])){
          						echo "<div id='collapse7' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse7' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    <form action="OS2_projekt.php" method="post" enctype="multipart/form-data">
                    
                    	<div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Privatni ključ: </label>
                            <input type="file" name="input_key" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="sedmi">Digitalno potpiši</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						digitalni_potpis();					
        					?>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Provjera digitalnog potpisa</a>
                    </h4>
                  </div>

                  <?php
        				  	if(isset($_POST['osmi'])){
          						echo "<div id='collapse8' class='panel-collapse collapse in'>";
          					}
          					
          					else{
          						echo "<div id='collapse8' class='panel-collapse collapse'>";
          					}
                  ?>

                    <div class="panel-body">
                    <form action="OS2_projekt.php" method="post" enctype="multipart/form-data">
                    
                    	<div class="form-group">
                    		<label for="input">Ulazni tekst: </label>
                            <input type="file" name="input_text" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Digitalni potpis: </label>
                            <input type="file" name="input_signature" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                    		<label for="input">Javni ključ: </label>
                            <input type="file" name="input_key" id="input" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary" name="osmi">Provjeri potpis</button>
                        </div>
                        
                    </form>
                    
                  <?php
        						digitalni_potpis_provjera();					
        					?>
                    
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="well well-lg">
          <p><b><i>Izradio: Matija Sabolić</i></b></p>
          <p><b><i>Fakultet organizacije i inforamatike Varaždin</i></b></p></div>
        </div>
        
    </body>
</html>

<?php
	function generiraj_kljuceve(){
    if(isset($_POST['prvi'])){
			
			$generated_key = bin2hex(random_bytes(24));
			
			$config = array(
				"digest_alg" => "sha512",
				"private_key_bits" => 2048,
				"private_key_type" => OPENSSL_KEYTYPE_RSA
			);

      $res = openssl_pkey_new($config);

			openssl_pkey_export($res, $privKey);
			
			$pubKey = openssl_pkey_get_details($res);
			$pubKey = $pubKey["key"];
			
			$myfile = fopen("files/privatni_kljuc.txt", "w+");
			fwrite($myfile, $privKey);
			fclose($myfile);
				
			$myfile = fopen("files/javni_kljuc.txt", "w+");
			fwrite($myfile, $pubKey);
			fclose($myfile);
			
			$myfile = fopen("files/tajni_kljuc.txt", "w+");
			fwrite($myfile, $generated_key);
			fclose($myfile);
			
			echo "<br><div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Gotovo!</strong> Generirani su vam parovi ključeva.
			</div>";
			
			echo "<div class='well'>
			<p><b>Pohrani kriptografske ključeve</b></p>
			<button type='button' class='btn btn-default'><a href='files/privatni_kljuc.txt' download>Privatni ključ</a></button>
			<button type='button' class='btn btn-default'><a href='files/javni_kljuc.txt' download>Javni ključ</a></button>
			<button type='button' class='btn btn-default'><a href='files/tajni_kljuc.txt' download>Tajni ključ</a></button>
			</div>";
		}
	}
	
	function kriptiraj_aes(){
		if(isset($_POST['drugi'])){

			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name'])){
				echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
					</div>";
			}
			
			else{
				$key = pack('H*', $input_key);
        $iv_size = mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_CBC);
        $iv = mcrypt_create_iv($iv_size, "9");
	
				$ciphertext = mcrypt_encrypt(MCRYPT_3DES, $key, $input_text, MCRYPT_MODE_CBC, $iv);

        $ciphertext = $iv . $ciphertext;

        $ciphertext64 = base64_encode($ciphertext);
				
				echo "<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Gotovo!</strong> Datoteka je uspješno kripirana!
					</div>";

        $myfile = fopen("files/kriptirano_aes.txt", "w+");
        fwrite($myfile, $ciphertext64);
        fclose($myfile);

        echo "<div class='well'>
        <p><b>Pohrani kriptirani tekst</b></p>
        <button type='button' class='btn btn-default'><a href='files/kriptirano_aes.txt' download>Kriptirani tekst</a>
        </button></div>";
			}
		}
	}
	
	function dekriptiraj_aes(){
		if(isset($_POST['treci'])){

			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name'])){
				echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
					</div>";
			}
			
			else{
				$key = pack('H*', $input_key);

        $iv_size = mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_CBC);
        $iv = mcrypt_create_iv($iv_size, "9");
        $ciphertext_dec = base64_decode($input_text);

        $iv_dec = substr($ciphertext_dec, 0, $iv_size);
        $ciphertext_dec = substr($ciphertext_dec, $iv_size);

				$plaintext = mcrypt_decrypt(MCRYPT_3DES, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
				
				echo "<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Gotovo!</strong> Datoteka je uspješno dekripirana!
					</div>";
					
				$myfile = fopen("files/dekriptirano_aes.txt", "w+");
        fwrite($myfile, $plaintext);
        fclose($myfile);

        echo "<div class='well'>
          <p><b>Pohrani dekriptirani tekst</b></p>
          <button type='button' class='btn btn-default'><a href='files/dekriptirano_aes.txt' download>Dekriptirani tekst</a>
          </button></div>";
			}
		}
	}
	
	function kripitiraj_rsa(){
		if(isset($_POST['cetvrti'])){

			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name'])){
				echo "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
				</div>";
			}
			
			else{
				if(openssl_public_encrypt($input_text, $encrypted, $input_key)){
          $encrypted = base64_encode($encrypted);

          $myfile = fopen("files/kriptirano_rsa.txt", "w+");
          fwrite($myfile, $encrypted);
          fclose($myfile);
          
          echo "<div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gotovo!</strong> Datoteka je uspješno kripirana!
          </div>";

          echo "<div class='well'>
          <p><b>Pohrani kriptirni tekst</b></p>
          <button type='button' class='btn btn-default'><a href='files/kriptirano_rsa.txt' download>Kriptirani tekst</a>
          </button></div>";

        }
				
        else{
          echo "<div class='alert alert-danger'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Pogreška!</strong> Javni ključ nije ispravnog oblika!
          </div>";
        } 
			}
		}
	}
	
	function dekriptiraj_rsa(){
		if(isset($_POST['peti'])){
			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name'])){
				echo "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
				</div>";
			}
			
			else{
        $input_text = base64_decode($input_text);

        if(openssl_private_decrypt($input_text, $decrypted, $input_key)){
          $myfile = fopen("files/dekriptirano_rsa.txt", "w+");
          fwrite($myfile, $decrypted);
          fclose($myfile);
          
          echo "<div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gotovo!</strong> Datoteka je uspješno dekripirana!
          </div>";
            
          echo "<div class='well'>
          <p><b>Pohrani dekriptirni tekst</b></p>
          <button type='button' class='btn btn-default'><a href='files/dekriptirano_rsa.txt' download>Dekriptirani tekst</a>
          </button></div>";
        }

        else{
          echo "<div class='alert alert-danger'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Pogeška!</strong> Privatni ključ nije ispravnog oblika!
          </div>";
        }	
			}
		}
	}

	function izracunaj_sazetak(){
		if(isset($_POST['sesti'])){
			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$text = hash("md5", $input_text);
			
			if(empty($_FILES['input_text']['tmp_name'])){
				echo "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Pogeška!</strong> Datoteka za izračunavanje nije prenesena!
				</div>";
			}
			
			else{
				$myfile = fopen("files/sazetak_poruke.txt", "w+");
				fwrite($myfile, $text);
				fclose($myfile);
				
				echo "<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Gotovo!</strong> Sažetak poruke je uspješno izračunat!
					</div>";
				
				echo "<div class='well'>
					<p><b>Pohrani sažetak poruke</b></p>
					<button type='button' class='btn btn-default'><a href='files/sazetak_poruke.txt' download>Sažetak poruke</a></button>
					</div>";
			}
		}	
	}
	
	function digitalni_potpis(){
		if(isset($_POST['sedmi'])){
			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name'])){
				echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
					</div>";
			}
			
			else{
				$hash_text = hash('md5', $input_text, false);
				
        if(openssl_private_encrypt($hash_text, $encrypted, $input_key)){
          $encrypted = base64_encode($encrypted);

          $myfile = fopen("files/digitalni_potpis.txt", "w+");
          fwrite($myfile, $encrypted);
          fclose($myfile);
          
          echo "<div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gotovo!</strong> Datoteka je uspješno digitalno potpisana!
          </div>";
          
          echo "<div class='well'>
          <p><b>Pohrani digitalni potpis</b></p>
          <button type='button' class='btn btn-default'><a href='files/digitalni_potpis.txt' download>Digitalni potpis</a>
          </button></div>";
        }

        else{
          echo "<div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Pogeška!</strong> Privatni ključ nije ispravnog oblika!
            </div>";
        }
			}
		}
	}
	
	function digitalni_potpis_provjera(){
		if(isset($_POST['osmi'])){
			$input_text = file_get_contents($_FILES['input_text']['tmp_name']);
			$input_key = file_get_contents($_FILES['input_key']['tmp_name']);
			$input_signature = file_get_contents($_FILES['input_signature']['tmp_name']);
			
			if(empty($_FILES['input_text']['tmp_name']) || empty($_FILES['input_key']['tmp_name']) || empty($_FILES['input_signature']['tmp_name'])){
				echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pogeška!</strong> Jedna ili više datoteka nije prenesena!
					</div>";
			}
			
			else{
				$hash_text = hash('md5', $input_text, false);
        $signature = base64_decode($input_signature);
				
        if(openssl_public_decrypt($signature, $decrypted, $input_key)){
          if($hash_text == $decrypted){
            echo "<div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Gotovo!</strong> Datotaka i digiralni potpis su identični!
            </div>";
          }
        
          else{
            echo "<div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Pogeška!</strong> Datoteka ne odgovara digitalnom potpisu!
            </div>";
          }
        }

        else{
            echo "<div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Pogeška!</strong> Javni ključ nije ispravnog oblika!
            </div>";
        }
			}
		}
	}
?>
