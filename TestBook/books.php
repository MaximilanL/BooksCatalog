<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">             
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>  
    <body>
        <div id='btp'>   
        <a id="bt" href="/index.php"><button type="button" class="btn btn-outline-secondary btn-lg btn-block">Go to Authors List</button></a>
        </div>
        <div class="table-responsive" id="pagination_data">  
        </div>    

    <div class="overlay formx">
        <div class="popup formix">
	       <form class="form" id="form" name="form">
		      <p><input type="text" class="form-field" name="name" placeholder="Enter name..." required></p>
		      <p><input type="email" class="form-field" name="email" placeholder="Enter email..." required></p>
		      <button class="form-button btn btn-outline-warning"><span class="text-button">Send request!</span></button>
	       </form>
           <div class="close-popup js-close-formix"></div>
        </div>
    </div>

	<footer>
		<div class="overlay js-overlay-thank-you">
			<div class="popup js-thank-you">
				<h3>Thank you for the request!</h3>
                <p>Information sent to your mail</p>
				<div class="close-popup js-close-thank-you"></div>
			</div>
		</div>
	</footer>	             
     
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>      
    <script src="js/pag2.js"></script>    
</body>
</html>