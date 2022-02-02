<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <style>
  .p{
    font-family: 'Raleway', sans-serif;
   color: cornflowerblue;
   font-size: 18px;
   }

   .inp{
       border-radius: 4px;
       border-style: solid;
       padding: 5px;
      
   }

   

   [placeholder]{
       font-size: 13px;
       
   }

   .inp:focus{
       background-color: #3355aa22;
   }

   .btn{
       background-color: #3b83bd44;
       border-radius: 4px;
       border-style: solid;
       padding: 5px;
       font-family:'Raleway', sans-serif;
   }

   .btn:focus {
     background-color: #3b83bd88;
   }

   body{
       text-align: center;
       
   }

    </style>
    <form action="1feb.php" method="post">

      <p class="p">Digite el año presente</p>
      <input type="text" name="apresente" placeholder="Digite año presente" class="inp">
      <br>
      <p class="p">Digite el año en que nacio</p>
      <input type="text" name="anacimiento" placeholder="Digite año en que nacio" class="inp">
      <br>
      <br>
      <input type="submit" value="calcular" class="btn">

    </form>

    <br>

    <?php 

    $apresente=$_REQUEST['apresente'];

    $anacimiento=$_REQUEST['anacimiento'];
    //se puede utilizar tambien asi:
    // $apresente=$_POST['apresente']
    // el metedo REQUEST se utliza para funciones de un solo formulario  el POST para funciones de varios formularios...
    $edad=$apresente-$anacimiento;

    echo "su edad edad es $edad años";

    ?>
    
    
    
    



</body>
</html>