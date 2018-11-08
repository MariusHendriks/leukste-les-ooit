<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <!-- Bootstrap Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leukste les ooit</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Github workshop</h1> 
        <p>Als jullie goed opletten begrijpen jullie waarom en hoe je Github gebruikt!</p> 
      </div>
      <!-- bootstrap list group -->
      <ul class="list-group">
        <?php
        //Checkt of er PHP files in "Mensen" zijn.
        if(glob("Mensen/*.php") != null){
          //Als dat zo, maakt hij voor elke user een list-group-item aan met daarin de content van die file. 
          foreach (glob("Mensen/*.php") as $mens){
            ?>
            <li class="list-group-item">
              <!-- hier wordt dus de daadwerkelijke content ingeladen -->
              <?php include $mens; ?>
            </li>
          <?php } 
            //Als er geen files zijn, laat de code No users yet zien.
            }else{
              echo "<li class='list-group-item'>No users yet</li>";
            }?>  
      </ul>
    </div>
  </body>
</html>
