<html>
    <head></head>
    <body>
        <?php
            if (isset($_POST['cmdEnviar']) && $_POST['cmdEnviar'] == "Enviar") {
                echo "Oi! Conseguiu no " . $_POST['link'] . " . Se sim, por favor, como?";
                echo "<br /><hr />";
            }
        ?>
        <form name="formulario" method="post">
            <fildset>
                <label for="link">Link:</label>
                <input type="text" name="link" id="link" />
            </fieldset>
            <input type="submit" name="cmdEnviar" value="Enviar" />
        </form>
    </body>
</html>
