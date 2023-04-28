<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <?php
            for($i = 1; $i < 6; $i++){
                ?>
                <label for="prod<?php echo $i; ?>">Producto <?php echo $i; ?></label>
                <input type="text" name="prod<?php echo $i; ?>">
                <select name="marca" id="">
                    <option value="hyu">Hyundai</option>
                    <option value="mic">Microsoft</option>
                    <option value="mar">Marolio</option>
                    <option value="pep">Pepsi</option>
                    <option value="inc">IncaCola</option>
                </select>
                <input type="number" name="precio<?php echo $i; ?>">
                <br>
                <?php
            }
        ?>
        <input type="submit" name="enviar">
        <input type="reset" name="enviar">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $total = $_POST['precio1'] + $_POST['precio2'] + $_POST['precio3'] + $_POST['precio4'] + $_POST['precio5'];
            
            ?> <br> <?php
            echo "Subtotal: $".$total;
            ?> <br> <?php
            echo "IVA: +$".($total * 0.21);
            $total = $total + $total * 0.21;
            ?> <br> <?php
            echo "Total: $".$total;
            
        }
    ?>
</body>
</html>