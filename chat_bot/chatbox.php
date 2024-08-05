<?php

  function chat(){

		$connection = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("Could not connect to DB");

		$date=date("Y-m-d");

?>

<style>

#chatbox {
  position: fixed;
  bottom: 1px; 
  right: 1px; 
  width: 300px; 
  height: 400px;
  background-color: #f1f1f1; 
  border: 1px solid #ccc;
  overflow-y: auto; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

</style>
	
  <div id="chatbox">

	  <div id="head">
	    <div id="photo"></div>
	    <div id="name"></div>
	  </div>

		<div id="conversation">

				<?php
				$cv="select ASK, ANSWER, DATE_DAY, HOUR_DAY from chatbox where ID_USER='$_SESSION[who]' and DATE_DAY='$date'";

				$qq = mysqli_query($connection, $cv);

				while($k=mysqli_fetch_array($qq)){
					?>
					<p><?php echo $_SESSION['nick'].": ".$k[0];
					?></p>

					<p><?php echo "Bot: ".$k[1]; ?> </p>
				
					<?php
				}
			?>

		</div>

		<div id="talk">

	    <form method="post" action="chat_bot/restChat.php">

	      <input type="text" name="ask">	

	      <button type="submit">ASK</button>

	    <form>

	  </div>

	</div>

<?php
}

?>



?>