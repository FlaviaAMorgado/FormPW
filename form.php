<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<! -- Criando o forms -- >
    <div class ="global"> 
        <form name="FrmCad" method="post" action="">
            <label> Nome: <input type="text" name="txtNome"/></label><br></br>
            <label> Senha: <input type="password" name="txtsenha"/></label><br></br>

            <p>Sexo:</p>
            <input type="radio" name="rdbsexo"/> Femenino
            <input type="radio" name="rdbsexo"/> Masculino
            
            <p> Estado</p> 
            <select> 
                <option value=""> </option>
                <option name="sltestado">SP</option>
                <option name="sltestado">RJ</option>
                <option name="sltestado">MG</option>
                <option name="sltestado">ES</option>
            </select><br></br>
            <button type="subimit" name="Enviar"> Enviar </button>
        </form>
    </div>
</body>
</html>