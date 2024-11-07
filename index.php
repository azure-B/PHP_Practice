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

    echo "<pre>";
    print_r($rsc);
    ?>


  <body>

        <table class="table" style="width:70%;margin:auto;">
        <thead>
            <tr>
            <th scope="col">번호</th>
            <th scope="col">글쓴이</th>
            <th scope="col">제목</th>
            <th scope="col">등록일</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">3</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>2022.01.17</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>2022.01.17</td>
            </tr>
            <tr>
            <th scope="row">1</th>
            <td colspan="2">Larry the Bird</td>
            <td>2022.01.17</td>
            </tr>
        </tbody>
        </table>

  </body>
</html>