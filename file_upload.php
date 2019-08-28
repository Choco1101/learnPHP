
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script >
		$(document).ready(function(){
	//upload file ajax hint
			$("#upload_button").click(function(event){

				$("#fileToUpload_error").hide();
				$("#upload-button").html("Uploading...");
			// console.log($('form')[0]);

				if (new FormData($('form')[0]) != "") {

					$.ajax({
						url: 'file_upload_checking.php',
						type: 'POST',

						  // Form data

  						data: new FormData($('form')[0]),

					    // Tell jQuery not to process data or worry about content-type
					    // You *must* include these options!
					    cache: false,
					    contentType: false,
					    processData: false,

						success: function(output) {


							$("#fileToUpload_error").html(output);
							$("#fileToUpload_error").show();

						},
						error: function (xhr, ajaxOptions, thrownError) {
							// alert(xhr.status + " "+ thrownError);
							// alert("Error: please select a valid file size.");
							$("#fileToUpload_error").html("<span class='glyphicon glyphicon-remove'></span> Please select a valid file and upload again. ");
							$("#fileToUpload_error").show();
						},
						timeout: 5000,

					});
					$("#upload-button").html("Upload");
				}

  			});
});

	</script>

</head>
<body>

<form action="eForm_submit.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
	<button type="button" id="upload_button" class="btn btn-info ">Upload</button>
    <div id="fileToUpload_error" class=""></div>

	<button type="submit" id="upload_button" class="btn btn-info ">submit</button>

</form>

</body>
</html>