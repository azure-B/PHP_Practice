<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set( 'display_errors', '0' );

        include $_SERVER["DOCUMENT_ROOT"]."/dbcon.php";

        $ID=$_GET["ID"];
        $result = $mysqli->query("select * from CRUD where ID=".$ID) or die("query error => ".$mysqli->error);
        $rs = $result->fetch_object();

        echo "<pre>";
        print_r($rs);

        if (isset($_POST['del'])) {
            // 삭제 쿼리 실행
            $delete_query = "DELETE FROM CRUD WHERE ID = ?";
            $stmt = $mysqli->prepare($delete_query);
            $stmt->bind_param("i", $ID); // ID를 정수로 바인딩
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<p>삭제되었습니다.</p>";
                // 삭제 후 리다이렉트 (예: 목록 페이지로 이동)
                header("Location: index.php"); // list.php는 게시글 목록 페이지 예시
                exit;
            } else {
                echo "<p>삭제에 실패했습니다.</p>";
            }
        }
    ?>
    
    <form method="POST">
        <button type="submit" name="del" class="btn btn-primary">제거</button>
    </form>
    </body>
</html>
