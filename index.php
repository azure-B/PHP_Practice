<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <?php
    $hostname="localhost";

    $dbuserid="HelloSQL";

    $dbpasswd="13467979!Q";

    $dbname="HelloSQL";

    

    $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);

    if ($mysqli->connect_errno) {

        die('Connect Error: '.$mysqli->connect_error);

    }

    $result = $mysqli->query("select * from CRUD") or die("query error => ".$mysqli->error);
    
    while($rs = $result->fetch_object()){
        $rsc[]=$rs;
    }
    ?>

<body>

  <table class="table" style="width:70%;margin:auto;">
    <thead>
      <tr>
      <th scope="col">번호</th>
      <th scope="col">글쓴이</th>
      <th scope="col">제목</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i=1;
        foreach($rsc as $r){
      ?>
    <tr>
      <th scope="row"><?php echo $i++;?></th>
      <td><?php echo $r->userID?></td>
      <td>
        <a href="/view.php?ID=<?php echo $r->ID;?>">
          <?php echo $r->Title?>
        </a>
      </td>
      </tr>
    <?php }?>
    </tbody>
  </table>

  </body>
</html>