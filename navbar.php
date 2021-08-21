<!-- navbar --> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  </head>
  <style>
    .navbar {
    display: flex;
    background-color: #333;
    justify-content: center;
    border-radius: 18px;
    margin: 17px;
  }
  
  .navbar a {
    color: white;
    padding: 11px 20px;
    text-decoration: none;
    text-align: center;
  }
  
  .navbar a:hover {

    background-color: #ddd;
    border-radius: 13px;
    color: black;
    margin: 1px;
  }
}
  .row {  
    display: flex;
    flex-flow: row wrap;
  }
  
  
  .side {
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
  }
  
  .main {
    flex: 70%;
    background-color: white;
    padding: 20px;
  }
  
  /* Fake image, just for this example */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }
    </style>

<body>

<div class="navbar">
  <a href="index.php">HOME</a>
  <a href="index.php#services">Services</a>
  <a href="index.php#about">About</a>
</div>

</body>
</html>