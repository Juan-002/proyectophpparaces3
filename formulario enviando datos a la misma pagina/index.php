<?php
if($_POST){
    echo $_POST['nombre'];

}

?>
<!DOCTYPE html>
    <html lang = "en">
    <head>
            <meta charset="UTF-8">
            <title> Document </title>
    </head>
    <body>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" placeholder="Nombre:" name="nombre">
                <br>

                <label for="hombre">Hombre</label>
                <input type="radio" name="Sexo" value="hombre" id="hombre">
                <br>

            
                <label for="mujer">Mujer</label>
                <input type="radio" name="Sexo" value="mujer" id="mujer">
                <br>

                <h4> por favor elija su fecha de naciemento:
                <select name="year" id="year">
                
                    <option value="2000">1995</option>
                    <option value="2000">2000</option>
                    <option value="2000">2001</option>
                    <option value="2000">2002</option>
                    <option value="2000">2003</option>
                </select>
                 </h4>

                <label for="terminos">Acepta los terminos? </label>
                <input type="checkbox" name="terminos" id="terminos" value="fueron aceptados">
                
                <input type="submit" value="Emviar"> 
            </form>
</body>
</html>
    