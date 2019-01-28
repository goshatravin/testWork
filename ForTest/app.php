<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

  <style>
    *{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    html{
        font-size: 16px;
    
    }
    .block{
    width: 28rem;
    margin: 0 auto;
    transition: all 0.5s;
    }
    .container{
        /* border: 1px solid black; */
        width: 28rem;
        margin: 0 auto;
        margin-top: 1rem;
        box-shadow: 0px 0px 40px -14px rgba(0,0,0,0.75);
        border-radius: 3px;
        margin-bottom: 1rem;
    }
    .col-block{
        display: flex;
        flex-direction: column;
    }
    .form{
        display: flex;
        align-items: flex-end;
        padding: 0.8rem 0rem 0 1.5rem;
    }
    .inp{
        font-size: 1.2rem;
        border: none;
        border-bottom: 2px solid #738190;
        margin-bottom: 1.2rem;
        padding-bottom: 0.4rem;
        color: #8c96a0;
    }
    .col-sub{
        margin-bottom: 1.2rem;
        margin-left: 3rem;
    }
    .inp_sub{
        background: #f04539;
        color: white;
        font-size: 1.1rem;
        border: none;
        font-weight: 500;
        border-radius: 18px;
        width: 8rem;
        height: 2.3rem;
    }
    input[type="text"]:focus{
        background: #66afe9;
        color: white;
    
    }

    .output{
        width: 28rem;
        margin: 0 auto;
    }

    .output-title{ 
        padding-top: 1.5rem;
        padding-bottom: 1.3rem;
    

    }
    .title__text{
        font-size: 1.5rem;
        color: #546271;
    }

    .output-info__text{
        color: #546271;
        font-size: 1rem;
        font-weight: 500;
        
    }
    .output-info__price{
        color: #546271;
        font-size: 1rem;
        font-weight: 500;
    }
    .output-info{
        display: flex;
        justify-content: space-between;
        font-size: 1.2rem;
        padding-bottom: 1rem;
    }

    @media (max-width: 576px) { 
        html{
            font-size: 10px;
        }
    }
  </style>

    <div class="block">
        <h1>Расходы</h1>
    </div>
    <div class="container">
        <form action="" class="form" method="post">
            <div class="col-block">
                <input class="inp inp-data" type="date" name="date" value="" placeholder="Введите дату">
                <input class="inp" type="text" name="price" value="" placeholder="Введите сумму">
                <input class="inp" type="text" name="desc" value="" placeholder="Введите описание">
            </div>
            <div class="col-sub">
                <input class="inp_sub" name="add" type="submit" value="Добавить">
            </div>

        </form>
    </div>
    <?php 
     $connection = mysql_connect("localhost","mybd_user", "630096");
     $db = mysql_select_db("newtest_bd");
     mysql_set_charset("utf8");
     if(!$connection || !$db ){
        exit(mysql_error());
     }
     $result = mysql_query("SELECT * FROM newcosts  ORDER BY date DESC ");
     mysql_close();
     $date = NULL;
     echo "<div class='output'>";
     while( $row = mysql_fetch_array($result)){
        $curr_date = $row['date'];
        if ($date != $curr_date) {
            echo "<div class='output-title'>";
            $date = $curr_date;
            echo   "<p class='title__text'>".$date ."</p>";
            echo "</div>";
        }
            echo "<div class='output-info'>";
            echo "<p class='output-info__text'>".$row['description']."</p>"."<p class='output-info__price'>".$row['price'];
            echo "</div>";
       
     }
     echo "</div>";
        $connection = mysql_connect("localhost","mybd_user", "630096");
        $db = mysql_select_db("newtest_bd");
        mysql_set_charset("utf8");
         if(isset($_POST['add'])){
         $date = strip_tags(trim($_POST['date']));
         $price = strip_tags(trim($_POST['price']));
         $desc = strip_tags(trim($_POST['desc']));
         mysql_query("INSERT INTO newcosts( date , price , description)
                      VALUES ('$date' , '$price' , '$desc')");
     
          mysql_close();
          echo "<meta http-equiv='refresh' content='0'>";
      }
     ?>



    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        const date = [...document.getElementsByClassName('title__text')];
        const today = new Date;
        const yesterday = new Date(new Date().setDate(new Date().getDate() - 1));
        const pastDay = yesterday.toISOString().substring(0, 10);
        const curDay = today.toISOString().substring(0, 10);
        for (i = 0; i < date.length; i++) {
            if (date[i].textContent == curDay) {
                date[i].textContent = "Сегодня";
            } else if (date[i].textContent == pastDay) {
                date[i].textContent = "Вчера";
            }

        }
    </script>




</body>
</html>