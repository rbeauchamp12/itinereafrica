<?php 

	function setComments($link) {
		if (isset($_POST['commentSubmit'])) {
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";

			$result = mysqli_query($link, $sql);
			
		}

	}

	function getComments($link){
		$sql = "SELECT * FROM comments";
		$result = mysqli_query($link, $sql);

		while($row = $result->fetch_assoc()) {
			echo " <div class ='container'>
			         <div class='row'>
					  <div class = 'col-md-12 comment-box'>
			";
				
				echo $row['uid']."<br>";

				echo $row['date']."<br>";

				echo $row['message'];
			echo "     </div>
					</div>
				   </div>
			";
				
		}
	}


 ?>
