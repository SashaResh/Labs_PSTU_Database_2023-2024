<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Александр Решецкий</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link href="img/russia_3013967.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
    <header>
        <div id="about">
            <a href="" title="Узнать детальнее">Дача</a>
        </div>
    </header>

    <button id="open-modal-btn" class="open1">Добавить растение</button><br>
    <button id="open-modal-btn2">Добавить тип растения</button><br>
    <button id="open-modal-btn3">Добавить здание</button><br>
    <button id="open-modal-btn4">Добавить тип здания</button><br>
    <button id="open-modal-btn6">Добавить удобрение</button><br>
    <button id="open-modal-btn5">Добавить тип удобрения</button><br>
    <button id="open-modal-btn8">Добавить ТО</button><br>
    <button id="open-modal-btn7">Добавить тип ТО</button><br>
    
    
    <div class="my_plant" id="my-plant">
        <form action="plants.php" method="post" class="form_add" id="forma">
            <input type="text" name="name" class="name_plant" id="title" placeholder="Введите название растения"> <br>
            <select name="types_plantss" class="types_plantss">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_type_plants, name_plant FROM types_plants;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>
            <br>
            <select name="free_building" class="free_buildings">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_building, name_building FROM building;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>
            <br>
            <input type="number" step="any" min="0" placeholder="Площадь" class="sq" name="sq"> <br>
            <input type="date" class="date" name="date">
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn" value="Закрыть">
            
        </form>  
         
    </div> 
    
    <div class="my_type_plant" id="my-type-plant">
        <form action="plant_types.php" method="post" class="plant_types" id="forma2">
            
            <input type="text" name="name_type_plant" class="name_type_plant" id="name_type_plant" placeholder="Введите название типа растения"> <br>
            <input type="number" min="0" name="time_germination" class="time_germination" id="time_germination" placeholder="Введите время роста растения"> <br>
            <input type="number" min="0" name="frequency_of_care" class="frequency_of_care" id="frequency_of_care" placeholder="Введите частоту обработки растения"> <br>
            <input type="number" step="any" name="the_necessary_temperature" class="the_necessary_temperature" id="the_necessary_temperature" placeholder="Введите необходимую температуру"> <br>
            <input type="number" step="any" min="0" name="required_humidity" class="required_humidity" id="required_humidity" placeholder="Введите необходимую влажность"> <br>
            <input type="number" step="any" min="0" name="plant_cost" class="plant_cost" id="plant_cost" placeholder="Введите стоимость посадки"> <br>
            <input type="number" step="any" min="0" name="plant_sell" class="plant_sell" id="plant_sell" placeholder="Введите стоимость продажи"> <br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn2" value="Закрыть">
        </form>
    </div>
    
    <div class="my_buildings" id="my-buildings">
        <form action="buildings.php" method="post" class="buildings" id="forma3">
            <input type="text" name="name_building" class="name_building" id="name_building" placeholder="Введите название здания"> <br>
            <select name="id_type_building" class="id_type_building">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_types_built, name_buildings FROM types_buildings;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>
            <input type="date" class="date_built" name="date_built">
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn3" value="Закрыть">
        </form>   
    </div>
    
    <div class="my_built" id="my-built">
        <form action="built_type.php" method="post" class="built_type" id="forma4">
            <input type="text" name="name_type_built" class="name_type_built" id="name_type_built" placeholder="Введите название Вида здания"> <br>
            <input type="number" step="any" name="average_temperature_here" class="average_temperature_here" id="average_temperature_here" placeholder="Введите среднюю температуру в типе здания"> <br>
            <input type="number" step="any" min="0" name="average_humidity_here" class="average_humidity_here" id="average_humidity_here" placeholder="Введите среднюю влажность в типе здания"> <br>
            <input type="number" min="1" name="maintenance_frequency" class="maintenance_frequency" id="maintenance_frequency" placeholder="Введите частоту ТО в типе здания"> <br>
            <input type="number" step="any" min="0" name="square_building" class="square_building" id="square_building" placeholder="Введите площадь в типе здания"> <br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn4" value="Закрыть">
            
        </form>
    </div>

    <div class="my_fertilizer" id="my-fertilizer">
        <form action="fertilizer.php" method="post" class="fertilizer_type" id="forma5">
            <input type="text" name="name_fertilizer" class="name_fertilizer" id="name_fertilizer" placeholder="Введите название Вида удобрения"> <br>
            <input type="number" step="any" min="0" name="fertilizer_cost" class="fertilizer_cost" id="fertilizer_cost" placeholder="Введите стоимость удобрения"> <br>
            <input type="text" name="properties" class="properties" id="properties" placeholder="Введите свойства удобрения"><br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn5" value="Закрыть">    
        </form>
    </div>
    <div class="my_fertilizer_costs" id="my-fertilizer-costs">
        <form action="fertilizer_cost.php" method="post" class="fertilizer_type" id="forma6">
            <select name="id_plant_f" class="id_plant_f">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_plant, name_plant FROM plant;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>
            <select name="id_buildings_f" class="id_buildings_f">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_building, name_building FROM building;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>
            <select name="id_fertilizer_f" class="id_fertilizer_f">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_fertilizer, name_fertilizer FROM fertilizer;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select>     
            <input type="number" min="1970" name="year_fertilizers_costs" class="year_fertilizers_costs" id="year_fertilizers_costs" placeholder="Введите год добавления удобрения"> <br>
            <input type="number" step="any" min="0 "name="fertilizers_kg" class="fertilizers_kg" id="fertilizers_kg" placeholder="Введите количество кг"><br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn6" value="Закрыть">    
        </form>
    </div>

    <div class="my_types_TO" id="my-types_TO">
        <form action="types_TO.php" method="post" class="types_TO" id="forma7">
            <input type="text" name="name_TO" class="name_TO" id="name_TO" placeholder="Введите название ТО"> <br>
            <input type="number" step="any" min="0" name="cost_TO" class="cost_TO" id="cost_TO" placeholder="Введите стоимость ТО"> <br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn7" value="Закрыть">    
        </form>
    </div>
    <div class="my_TO" id="my-TO">
        <form action="TO.php" method="post" class="TO" id="forma8">
            <select name="id_TO_b" class="id_TO_b">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_building, name_building FROM building;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select> 
            <select name="id_TO" class="id_TO">
                <option value="-1">Не выбрано</option>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "kyrs", "3306");
                    if($sql = mysqli_query($link, "SELECT id_TO, name_TO FROM types_TO;"))
                    {
                        if(mysqli_num_rows($sql) > 0)
                        {
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                        }
                    }
                    
                ?>
            </select> 
            <input type="number" min="1970" name="year_TO" class="year_TO" id="year_TO" placeholder="Введите год ТО"> <br>
            <input type="submit" value="Отправить" class="btnok">
            <input type="button" class="btnok2" id="close-modal-btn8" value="Закрыть">    
        </form>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>