<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="enviaemail.php" method="post">

        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="text" name="email" placeholder="Digite seu e-mail">
        <input type="tel" name="tel" id="tel" placeholder="Digite seu numero">
        <select name="opcoes" id="opcoes">
            <option value="">Em branco</option>
            <option value="Admnistrativo">Admnistrativo</option>
            <option value="Comercial">Comercial</option>
        </select>
        <input type="file" name="curriculo" id="curriculo">

        <button type="submit">Enviar</button>
    </form>

</body>
</html>