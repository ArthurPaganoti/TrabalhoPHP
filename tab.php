<select>
    <?php
    $op = array("Porshe", "McLaren", "Nissan",  "Pagani", "BMW", "Ferrari", "Mercedes");
    for($i = 0; $i <7; $i ++)
    {
        echo "<option>".$op[$i]. "</option>";
    }
    ?>
</select>
<form action="escolha.php">
    <input type="submit" value="Escolha o modelo de carro de sua preferencia">
</form>