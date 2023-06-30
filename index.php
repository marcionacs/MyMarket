<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/principal.css">
    
    
  </head>
  <body>
   <div id='container'>
    <h2 class="" id='ttl'>ENTER</h2>
     <form action='js/getForm.js' id='form' method='POST'>
     <h3>LOGIN</h3>
     <h3><input type='text' name='lg' id='lg'/></h3>
     <h3>PASSWORD</h3>
     <h3><input type='text' name='pss' id='pss'/></h3>
     
     <h4><input type='button' value='SEND' onClick="ajaxPost('getForm.php','#result');" /></h4>
     <div id='result'></div>
     </form>
     
   </div>
    
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
    <script src='js/post.js' ></script>
  </body>
  
</html>
