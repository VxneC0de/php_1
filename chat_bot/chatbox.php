<?php

  function chat(){

?>
	
  <div id="chatbox">

	  <div id="head">
	    <div id="photo"></div>
	    <div id="name"></div>
	  </div>

	  <div id="talk">

	    <form method="post" action="ansChat.php">

	    <input type="text" name="ask">	

	    <button type="submit">ASK</button>

	    <form>

	  </div>

	</div>

	<?php
}

?>



?>