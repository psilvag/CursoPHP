<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 10px;
            box-sizing: border-box;
            position: fixed;
            width: 100%;
            height: 100%;
            background-color:#234567;
            top: 0;
            left: 0;
            overscroll-behavior-y: auto;
            
        }
        .section_app{
            height: 100%;
            display: flex;
            justify-content: space-around;
            
        }
        .formulario{
            width: 30%;
            height: 200px;
            border: 1px solid #2A2C36;
            margin-top: 5%;
        }
        .formulario h2{
            text-align:center;
            
        }
        .formulario input{
            width: 70%;
            height: 40px;
            outline: none;
            border-style: none;
            padding: 10px 10px;
            cursor: pointer;
        }
     
        .formulario .button{
            width: 100px;
            height: 40px;
            color: white;
            background-color: #2A2C36;
            border: 1px solid white;
            font-weight: 400;
            outline: none;
            border-style: none;
            padding: 5px 8px;
            border-radius: 5px;
        }
        .formulario .button:hover{
            cursor: pointer;
            filter: brightness(1.2);
        }
        .files{
            width: 55%;
           
            border: 1px solid #2A2C36;
        }
        .files h2{
            text-align: center;
        }

    </style>
</head>


<body>
<section class="section_app">
<div class="formulario">
      <h2>FILE</h2>
      <form action=""  method="">
        <input type="file" name="input_file" id="input">
        <button class="button">Subir Archivo</button>
      </form>
</div>
<div class="files">
   <h2>FILES</h2>
</div>
</section>



</body>

</html>