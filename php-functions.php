<?php 
	
	include 'credentials/connection.php';

	if (isset($_POST['btn_submit'])) {

		$image = $_FILES['image']['name'];
    	$target = "picture/".basename($image);

		$query = mysqli_query($conn, "INSERT INTO upload_photo (image) VALUES ('$image')");

		echo "
				<script>
                	window.alert('SUCCESSFULLY UPLOAD PHOTO!');
                	window.location.href = 'success-photo.php';
				</script>
			";
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	        $msg = "Image Uploaded Successfully!";
	      }else{
	        $err_msg = "There was a problem uploading image!";
	      }

	}
	mysqli_close($conn);

?>