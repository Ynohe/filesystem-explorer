<?php

//$archivo = "data.txt";
//if (file_exists($archivo)) {
 //   echo "the file exists\n";
 //   echo "size of archive : " . filesize($archivo) . "bytes\n";
//}


//move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); 
//if( $filetype == "image" ) 

//if ($_FILES['file']['size'] > 0) {
// if ($_FILES['file']['size'] <= 183400) {
//if (move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $_FILES['file']['name'])) {
//
//           <script type="text/javascript">             parent.document.getElementById("message").innerHTML = "";
//       parent.document.getElementById("file").value = "";
//      window.parent.uploadpic("<?php echo 'img/' . $_FILES['file']['name']; ")
//</script>
//  <?php
//  } else {
//    <script type="text/javascript">
//     parent.document.getElementById("message").innerHTML = '<font color="#dedeff">file upload error</font>';
//  </script>
//   <?php
//   }
//  } else {

// <script type="text/javascript">
//    alert('$file size is too big');
//  parent.document.getElementById("message").innerHTML = '<font color="#dedeff">file size is too big</font>';
// </script>


// // Check the existence of file
// if (file_exists($file)) {
//     // Open the file for reading & writting
//     $handle = fopen($file, "r+") or die("ERROR: Cannot open the file.");

//     // Read fixed number of bytes from the file
//     $content = fread($handle, "20");

//     // Closing the file handle
//     fclose($handle);

//     // Display the file content 
//     echo $content;
// } else {
//     echo "ERROR: File does not exist.";
// }

// // String of data to be written
// $data = "blah blah blah .";

// // Open the file for writing
// $handle = fopen($file, "w") or die("ERROR: Cannot open the file.");

// // Write data to the file
// fwrite($handle, $data) or die("ERROR: Cannot write the file.");

// // Closing the file handle
// fclose($handle);

// echo "Data written to the file successfully.";

// // Write data to the file
// file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");

// echo "Data written to the file successfully.";


// //renaming the name fo the file 
// // Check the existence of file
// if (file_exists($file)) {
//     // Attempt to rename the file
//     if (rename($file, "newfile.txt")) {
//         echo "File renamed successfully.";
//     } else {
//         echo "ERROR: File cannot be renamed.";
//     }
// } else {
//     echo "ERROR: File does not exist.";
// }

// //Removing Files with PHP unlink() Function
// // Check the existence of file
// if (file_exists($file)) {
//     // Attempt to delete the file
//     if (unlink($file)) {
//         echo "File removed successfully.";
//     } else {
//         echo "ERROR: File cannot be removed.";
//     }
// } else {
//     echo "ERROR: File does not exist.";
// }
