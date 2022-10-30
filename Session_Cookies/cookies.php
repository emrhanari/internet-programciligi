<?php
// detect form submission
      if (isset($_POST['submit'])) {
      // set chosen colour values
    $select = $_POST["select"];
                setcookie("colour",$select);
            // reload page so has new cookie variables
                header('Location: cookies.php');
        }
        
//check is cookie is set
 if (isset($_COOKIE["colour"])) {
    $colourvalue = $_COOKIE["colour"];
  } else {
// if not set use default colour
   $colourvalue = "#0000FF";
  }
?>
<html>
<head>
<style>
body {
    background-color:<?php echo $colourvalue ?>;
    display: flex;
    align-content: center;
    align-items: center; 
}
.container {
    width: 100%;
    max-width: 500px;
    border: 1px solid #0000003b;
    border-radius: 10px;
    box-shadow: rgb(38 57 77) 0px 20px 30px -10px;
    background: #d7d7d785;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0 auto;
}
p {
    text-align: center;
    font-size: 1.4em;
    font-family: monospace;
}
form {
    display: flex;
    flex-direction: column;
    margin: 0%;
}
select {
    width: 150px;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 15px;
    padding: 5px;
    cursor: pointer;
}
input[type="submit"] {
    padding: 5px;
    background: #4cdeff45;
    color: white;
    border: 1px solid #00000052;
    border-radius: 10px;
    box-shadow: rgb(0 0 0 / 15%) 0px 15px 25px, rgb(0 0 0 / 5%) 0px 5px 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
</style>
</head>
<body>
  <div class="container">
    <P>Bir Renk Seçin</P>
    <form action="cookies.php" method="post">
        <select name="select">
            <option value="#cbf078">Green</option>
            <option value="#eec60a">Yellow</option>
            <option value="#f83e4b">Red</option>
            <option value="#3ab1c8">Blue</option>
      </select> 
      <input type="submit" name="submit" value="Uygula" />
    </form>
  <p>Bu Sitede Cookie'ler kullanılmaktadır! </p>
  </div>
</body>
</html>