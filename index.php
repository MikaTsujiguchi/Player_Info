<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Resister</title>
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body>

<header class = "header">
    
      <div class = "pic">
          
          <img src="pics/playerinfo.png" id="title" width="200" height="200" alt="">
          
      </div>
    
       <a id="navbar-brand" href="select.php" >Go To List</a>
   


</header>

  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">List</a></div>
    </div>
  </nav> -->


<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   
    <p>Resister Player Info</p>
     <label>Name：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>Age：<input type="text" name="age"></label><br>
     <p>Comment</p>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    
  </div>
</form>

<!-- Main[End] -->


</body>
</html>
