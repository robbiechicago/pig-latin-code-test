<!DOCTYPE html>
<html>
  <head>
    <title>Rob Holloway - Pig Latin Translator</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php  
    include('translator.php');
    ?>

    <h1>Rob Holloway - Pig Latin Translator</h1>

    <form method="get" action="/">
      <input type="text" name="translate-me" id="translate-me" placeholder="Enter a word to be translated">
      <input type="submit" name="submit" id="submit" value="Translate">
    </form>

    <?php  

    if ($_GET['submit'] && $_GET['translate-me'] != '') {
      if ($new_word == 'space') {
        echo 'One word at a time please!';
      } elseif ($new_word == 'non-alpha') {
        echo 'Only letters please folks!';
      } else {
        echo 'The English word <strong><em>'.$word.'</em></strong> translated to Pig Latin is "<strong><em>'.$new_word.'</em></strong>"';
      }
    }
    ?>

    

</body>
</html>