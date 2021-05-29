<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Polls UI</title>
  <title>Favourite Author</title>
  <meta name="description" content="Poll">
        <link rel="stylesheet" href="./styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="./scripts/script.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">   
</head>
<body id='body'>
 <div class="container-main">
	<h1>Who is your favorite author?</h1>
	<form method="post" id="poll_form">
      <ul>
      <li>
        <input type="radio" class="poll_option" id="f-option" name="poll_option" value="Miguel de Cerventes">
        <label for="f-option">Miguel de Cerventes</label>
        
        <div class="check"></div>
      </li>
      
      <li>
        <input type="radio" class="poll_option" id="s-option" name="poll_option" value="Charles Dickens">
        <label for="s-option">Charles Dickens</label>
        <div class="check"><div class="inside"></div></div>
      </li>
      
      <li>
        <input type="radio" class="poll_option" id="t-option"  name="poll_option" value="JRR Tolkien">
        <label for="t-option">JRR Tolkien</label>
        <div class="check"><div class="inside"></div></div>
      </li>

      <li>
        <input type="radio" class="poll_option" id="ss-option" name="poll_option" value="Antoine de Saint Exuper">
        <label for="ss-option">Antoine de Saint Exuper</label>
        <div class="check"><div class="inside"></div></div>
      </li>
    </ul>
      <div class="btn-wrapper">        
        <input type="submit" name="poll_button" id="poll_button" class="button2" />
      </form>
        <a href="./app/fetch_poll_data.php" class="button1"> Display chart </a>
      </div>
</div>
   
  

  
</body>
<script>
$(function() {
  $( "#button" ).click(function() {
    $( "#button" ).addClass( "onclic", 250, validate);
  });

  function validate() {
    setTimeout(function() {
      $( "#button" ).removeClass( "onclic" );
      $( "#button" ).addClass( "validate", 450, callback );
    }, 2250 );
  }
    function callback() {
      setTimeout(function() {
        $( "#button" ).removeClass( "validate" );
      }, 1250 );
    }
  });

</script>
</html>
