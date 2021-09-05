<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <link type='text/css' href='../styles/global.css' rel='stylesheet'>
    <link type='text/css' rel='stylesheet' href='styles/global.css'>
    <link type='favicon' rel='shotcut icon' href='images/fav.ico'>
    <title>Lidis | Connect to us | responce</title>

    </head>
    <body>

        <nav class='navigation'>
            <sectoin class='moving_text'>

             </sectoin>

             <section id='navcenter'>
              <ul>
                <li id="nav_mobile">منو</li>
                <li><a href='..'>خانه</a></li>
                <li><a href='about.html'>درباره ما</a></li>
                <li><a href='connect.html'>تماس با ما</a></li>
              </ul>
            </section>
        </nav>

        <main>
            <?php
             if(! (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) ){
              show("اطلاعات دریافتی ناقص است." , "red");
              return;
             }

             $user = "test";
             $pass = "987654321";
             $dbname = "lidis";
             $con = mysqli_connect("localhost" , $user , $pass , $dbname);
             mysqli_query($con , "insert into `message` values ('{$_POST['name']}' , '{$_POST['email']}' , '{$_POST['message']}')");
             if(mysqli_errno($con)){
                 show("خطا در ارتباط با پایگاه داده" , "red");
                 return;
             }else{
                 show("پیام شما با موفقیت ثبت شد." , "green");
                 return;
             }

             function show($message , $color){
              echo "<style>
                    #message{
                        color : $color;
                        font-size: 1.2em;
                    }
                    </style>";
              echo "<p id='message'>$message</p>";
              echo "<a href='connect.html' title='go to connect to us' target='_self'> <input type='button' value='بازگشت'></a>";
             }
            ?>
        </main>
    </body>
</html>
