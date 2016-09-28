<?php
      require("functions.php");
	  
	  // kas on sisseloginud, kui ei ole siis
	  // suunata login lehele
	  
	 

?>
<h1>Data</h1>
<p>
   Tere tulemast <?=$_SESSIONI["email"]; ?>!
    <a href="?logout=1">logi välja</a>
</p>