<?php
    include_once("getData.php");
    $getData = new getData("Data");
    $UserData = $getData-> getUserData();
    $PostData = $getData-> getPostData();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>divパズルlv2</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="main clearfix">
            <div class="header-left"><img src="1599315827_logo.png"width="200" height="120"alt="Y&I画像"></div>
            <div class="header-right-top" align="right">
                <?php
                    echo "ようこそ ".$UserData['last_name'].$UserData['first_name']." さん";
                ?>
            </div>    
            <div class="header-right-bottom" align="right">
                <?php
                    echo "最終ログイン日：";            
                    echo $UserData['last_login'];
                ?>
            </div>
        </div>      
        <div class="main clearfix">
            <div class="content">
                <table>
                    <tr>
                        <th>記事ID</th>
                        <th>タイトル</th>
                        <th>カテゴリ</th>
                        <th>本文</th>
                        <th>投稿日</th>
                    </tr>    

                    <?php 
                        while ($row = $PostData->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['title']}</td>";
                            echo "<td>{$row['category_no']}</td>";
                            echo "<td>{$row['comment']}</td>";
                            echo "<td>{$row['created']}</td>";
                            echo "</tr>";
                        }        
                    ?>        
                </table>
            </div>
        </div>
        <div class="footer">Y&I group.inc</div>  
    </div>  
</body>
</html>
 
 