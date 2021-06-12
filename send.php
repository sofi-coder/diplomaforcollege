<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if($_POST['submit']) {    

      $title = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);

       $mess =  substr(htmlspecialchars(trim($_POST['text'])), 0, 100000);

       $email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100000);

       $to = 'oleg96697@gmail.com';     

       $from='osavruchello@gmail.com';   

       $allmail ="
       Вітаю! <br>
       Поступив запит від користувача $title <br>
       Електронна пошта: $email,<br>
       Текст звернення: $mess";
     

ini_set("SMTP","aspmx.l.google.com");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: osavruchello@gmail.com" . "\r\n";
mail($to, $title, $allmail,$headers);
//header('Location: /final');
      // echo 'Повідомлення відправлено.';
       }

//}
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://localhost:8000/index.html");}
window.setTimeout("changeurl();",100);
</script>
