<?php
/*
##############################
	SMS Attack
	coded By Magic_404
	Thanks to Indoxploit And Myfreind
#############################
*/
$ban="  ________ ___  ___________  ____    __ _ 
 / ___/   |   |/ ___/      |/    |  /  ]  |/ ]
(   \_| _   _ (   \_|      |  o  | /  /|  ' / 
 \__  |  \_/  |\__  |_|  |_|     |/  / |    \ 
 /  \ |   |   |/  \ | |  | |  _  /   \_|     |
 \    |   |   |\    | |  | |  |  \     |  .  |
  \___|___|___| \___| |__| |__|__|\____|__|\_|
                                            by AnoneAnone \n ";
                                            echo $ban;
                                            echo"Nomer Target : ";
                                            $target=trim(fgets(STDIN));
                                            echo"Pesan : ";
                                            $pesan=trim(fgets(STDIN));
                                            $gas=gas($target,$pesan);
                                            function gas($target,$pesan){
                                            	$ch=curl_init();
                                            	curl_setopt($ch, CURLOPT_URL,"http://bnerr.com/api/sms.php?send=1&no=$target&msg=$pesan&sender=LOLZ");
                                            	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
												curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
												curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
												curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
												curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
												curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
												$server_output = curl_exec ($ch);
												curl_close ($ch);
												
												$server_output = json_decode($server_output,true);
												if ($server_output['status']) 
												{
												echo "$target [sukses]";
												}
												else{
												echo"$target [gagal]";
												}
											}
						
?>						
                                            