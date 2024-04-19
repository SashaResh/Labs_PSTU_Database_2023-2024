<!DOCTYPE html>
<html lang="en">
<head>
<title>Reshetski Alexander</title>
<style>
    body {
        background-color: white; /* Цвет фона страницы */
    }

    .btn {
        background-color: rgb(256, 256, 256);
        color: black;
        margin: 7px;
		border: 3px solid black;
		width: 30%;

    }

    table {
        background-color: white;
		border-collapse: collapse;
        width: 100%;
    }

    tr:first-child {
        background-color: lightgrey;
		color: black;
    }

    table, th, td {
        border: 3px solid black;
    }

    th, td {
        padding: 1px;
        text-align: center;
		font-size: 20px;
    }
    .buttons {
        text-align: center;
    }
</style>
</head>
<font color="black">
<body>
    <div class="wrapper">
        <div class="buttons">
            <form method="post">
				<input type="submit" class="btn btn-info" name="button1" value="Список сотрудников">
				<input type="submit" class="btn btn-info" name="button2" value="Адреса сотрудников">
				<input type="submit" class="btn btn-info" name="button3" value="Стаж работы сотрудников">
				<input type="submit" class="btn btn-info" name="button4" value="Создать Таблицу CREATE TABLE">
				<input type="submit" class="btn btn-info" name="button6" value="Заполнить таблицу INSERT INTO">
				<input type="submit" class="btn btn-info" name="button8" value="Добавить столбец ALTER">
				<input type="submit" class="btn btn-info" name="button9" value="Обновить столбец Phone UPDATE">
				<input type="submit" class="btn btn-info" name="button10" value="Удалить строку, где номер Не подтвержден DELETE">
				<input type="submit" class="btn btn-info" name="button11" value="Объединение таблиц INNER JOIN">
				<input type="submit" class="btn btn-info" name="button5" value="Удалить Таблицу DROP TABLE">
				<input type="submit" class="btn btn-info" name="button7" value="Вывести таблицу Reshetski2 SELECT">
				<input type="submit" class="btn btn-info" name="button12" value="Показать таблицу Log">
				<input type="submit" class="btn btn-info" name="view1" value="Представление 1 - Список сотрудников">
				<input type="submit" class="btn btn-info" name="view2" value="Представление 2 - Адреса сотрудников">
				<input type="submit" class="btn btn-info" name="view3" value="Представление 3 - Стаж работы сотрудников">
				<input type="submit" class="btn btn-info" name="Procedure" value="Создать продецуру">
				<input type="submit" class="btn btn-info" name="Procedure2" value="Убрать продецуру">
            </form>
		</div>
        <div class="commands">
            <?php
			$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
			$sql_view1 = mysqli_query($link,"CREATE OR REPLACE VIEW view1 AS SELECT Surname, Name, LastName, Phone, Salary FROM TABLE_Reshetski;");
			$sql_view2 = mysqli_query($link,"CREATE OR REPLACE VIEW view2 AS SELECT Surname, Name, LastName, Address FROM TABLE_Reshetski ORDER BY Address;");	
			$sql_view3 = mysqli_query($link,"CREATE OR REPLACE VIEW view3 AS SELECT Surname, Name, LastName, DurationOfEmployment, TIMESTAMPDIFF(year,DurationOfEmployment,CURRENT_DATE) AS 'Work experience' FROM Table_Reshetski WHERE TIMESTAMPDIFF(year,DurationOfEmployment,CURRENT_DATE) > 4");
				function button1() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT Surname, Name, LastName, Phone, Salary FROM TABLE_Reshetski;");
					echo "<br>Список сотрудников</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Номер телефона</td><td>Заработная плата</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['Phone']."</td>";
						echo "<td>".$row['Salary']."</td>";
					}
					echo "</table>";
				}
				function button2() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT Surname, Name, LastName, Address FROM TABLE_Reshetski ORDER BY Address;");
					echo "<br>Список сотрудников с их адресами</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Адрес</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['Address']."</td>";
					}
					echo "</table>";
				}
				function button3() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT Surname, Name, LastName, DurationOfEmployment, FLOOR(DATEDIFF(CURRENT_DATE,DurationOfEmployment)/365) AS 
										'Experience' FROM `Table_Reshetski` WHERE DATEDIFF(CURRENT_DATE,DurationOfEmployment)>=1460;");
					echo "<br>Cписок сотрудников со стажем более 4-х лет</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Стаж</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['DurationOfEmployment']."</td>";
					}
					echo "</table>";
				}
				function button4() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"CREATE TABLE Table_Reshetski2 (
														Surname VARCHAR(20),
														Name VARCHAR(15),
														LastName VARCHAR(20)
													)");
					echo "<br>Таблица создана</br>";
					$sql_logs = mysqli_query($link,"CREATE TABLE IF NOT EXISTS Log(Message VARCHAR(20),Surname VARCHAR(25));");
					$triggers_exists = mysqli_query($link,"SHOW TRIGGERS LIKE 'Table_Reshetski2'");
					if(mysqli_num_rows($triggers_exists) == 0) {
						$trigger1 = mysqli_multi_query($link,"
						CREATE TRIGGER DeleteTrigger BEFORE DELETE ON Table_Reshetski2
						FOR EACH ROW BEGIN
						INSERT INTO Log (Message, Surname) VALUES ('Delete', OLD.Surname);
						END;");

						$trigger2 = mysqli_multi_query($link,"
						CREATE TRIGGER UpdateTrigger BEFORE UPDATE ON Table_Reshetski2
						FOR EACH ROW BEGIN
						INSERT INTO Log (Message, Surname) VALUES ('Update', OLD.Surname);
						END;");

						$trigger3 = mysqli_multi_query($link,"
						CREATE TRIGGER InsertTrigger AFTER INSERT ON Table_Reshetski2
						FOR EACH ROW BEGIN
						INSERT INTO Log (Message, Surname) VALUES ('Insert', NEW.Surname);
						END;");
					}
					$sql_proced_using = mysqli_query($link,"CREATE TABLE IF NOT EXISTS SPU(Surname VARCHAR(20), Name VARCHAR(15), LastName VARCHAR(20), Phone VARCHAR(30));");
					
				}
				function button5() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$table_exists = mysqli_query($link,"SHOW TABLES LIKE 'Table_Reshetski2'");
					if (mysqli_num_rows($table_exists) == 0) {
						echo "Таблицы 'Table_Reshetski2' не существует.";
						return;
					}
					$sql = mysqli_query($link,"DROP TABLE Table_Reshetski2");
					echo "<br>Таблица удалена</br>";
					$sql = mysqli_query($link,"DROP TABLE Log");
					$sql = mysqli_query($link,"DROP TABLE SPU");					
				}
				function button6() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$checkTableNotEmpty = mysqli_query($link, "SELECT COUNT(*) FROM Table_Reshetski2");
    				$rowCount = mysqli_fetch_row($checkTableNotEmpty)[0];
    				if ($rowCount > 0) {
        			echo "Таблица 'Table_Reshetski2' уже заполнена.";
    				} 
					else {
						$sql = mysqli_query($link,"INSERT INTO Table_Reshetski2(Surname, Name, LastName) VALUES 
						('Reshetski','Alexander','Vitalievich'),
						('Chizhov','Vladimir','Victorovich'),
						('Makarenko','Nikolay','Grigoryevich'),
						('Lexinx','Maxim','Vasilyevich'),
						('Tokarev','Denis','Vladimirovich'),
						('Plexenko','Michael','Alexandrovich'),
						('Nikolayev','Nikolay','Nikolayevich'),
						('Maximov','Maxim','Maximovich'),
						('Alexeev','Alexey','Alexeevich'),
						('Furkin','Denis','Albertovich'),
						('Drovin','Ivan','Ivanovich'),
						('Rasmakhin','Roman','Romanovich'),
						('Furev','Albert','Michailovich'),
						('Mikituk','Konstantin','Romanovich'),
						('Mitrakov','Nikita','Sergeevich'),
						('Morozov','Konstantin','Olegovich'),
						('Bochkarev','Alexandr','Anatolevich'),
						('Tarasov','Vyacheslav','Alexeevich'),
						('Vasilev','Ilya','Tagirovich'),
						('Olegov','Oleg','Olegovich')");
						echo "<br>Таблица заполнена</br>";
					}
					
				}
				function button7() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$info = mysqli_query($link,"SHOW COLUMNS FROM Table_Reshetski2");
					echo "<br><table>";
					echo "<tr>";
					while ($column = mysqli_fetch_assoc($info)) {
						echo "<td>" . $column['Field'] . "</td>";
					}
					echo "</tr>";
					$result = mysqli_query($link,"SELECT * FROM Table_Reshetski2");
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						foreach ($row as $value) {
							 echo "<td>" . $value . "</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
			   }
				function button8() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$table_exists = mysqli_query($link,"SHOW TABLES LIKE 'Table_Reshetski2'");
					if (mysqli_num_rows($table_exists) == 0) {
						echo "Таблицы 'Table_Reshetski2' не существует.";
						return;
					}
					$try = mysqli_query($link,"SHOW COLUMNS FROM Table_Reshetski2 LIKE 'Phone'");
					if (mysqli_num_rows($try) > 0) {
							echo "Столбец 'Phone' уже существует в таблице 'Table_Reshetski2'.";
					}
					else {
						$sql = mysqli_query($link,"ALTER TABLE Table_Reshetski2 ADD Phone VARCHAR(30)");
						echo "<br>Солбец добавлен</br>";
					}					
				}
				function button9() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$table_exists = mysqli_query($link,"SHOW TABLES LIKE 'Table_Reshetski2'");
    				if (mysqli_num_rows($table_exists) == 0) {
        				echo "Таблицы 'Table_Reshetski2' не существует.";
        				return;
					}
					else {
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89999999999' WHERE Surname = 'Reshetski'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Chizhov'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89777777777' WHERE Surname = 'Makarenko'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89123456789' WHERE Surname = 'Lexinx'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89987654321' WHERE Surname = 'Tokarev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89999888777' WHERE Surname = 'Plexenko'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89666555444' WHERE Surname = 'Nikolayev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Maximov'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89000111222' WHERE Surname = 'Alexeev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Furkin'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89666777888' WHERE Surname = 'Drovin'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Rasmakhin'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89999000111' WHERE Surname = 'Furev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89222333444' WHERE Surname = 'Mikituk'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89555666888' WHERE Surname = 'Mitrakov'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89955666777' WHERE Surname = 'Morozov'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Bochkarev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = 'Не подтверджен' WHERE Surname = 'Tarasov'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89996777888' WHERE Surname = 'Vasilev'");
						$sql = mysqli_query($link,"UPDATE Table_Reshetski2 SET Phone = '89999777888' WHERE Surname = 'Olegov'");
						echo "<br>Солбец обновлен</br>";
					}	
					
				}
				function button10() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$flag = mysqli_query($link,"SHOW PROCEDURE STATUS WHERE Db = 'Reshetski';");

					if($flag->num_rows!=0) { 
						mysqli_query($link,"CALL SP()"); 
					}

					$sql = mysqli_query($link,"DELETE FROM Table_Reshetski2 WHERE Phone = 'Не подтверджен'");
                    echo "<br><table><td>Surname</td><td>Name</td><td>LastName</td><td>Phone</td>";
					$sql2 = mysqli_query($link,"SELECT * FROM Table_Reshetski2;");
                    	while ($row=mysqli_fetch_array($sql2)) {
                        	echo "<tr>";
                        	echo "<td>".$row['Surname']."</td>";
                        	echo "<td>".$row['Name']."</td>";
                        	echo "<td>".$row['LastName']."</td>";
							echo "<td>".$row['Phone']."</td>";
                    	}
                    	echo "</table>";


                    	if($flag->num_rows!=0) {
                        	$sql_log = mysqli_query($link, "SELECT * FROM SPU;");
                        	echo "<br>Записи об удаленных строках</br>";
                        	echo "<br><table><td>Surname</td><td>Name</td><td>LastName</td><td>Phone</td>";
                        	while ($row=mysqli_fetch_array($sql_log)) {
                            		echo "<tr>";
                            		$count = 0;
                            		foreach ($row as $value) {
                                		if($count%2==0) { echo "<td>".$value."</td>"; }
                                		$count=$count+1;
                            		}
                        	}
                        	echo "</table>";
                    	}
				}
				function button11() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					//$sql = mysqli_query($link,"SELECT * FROM Table_Reshetski2 INNER JOIN Salary ON Phone = 'Не подтвержден'");
					echo "<br><table>";
					echo "<br><table><td>Surname</td><td>Name</td><td>Lastname</td><td>Phone<td>Salary<td>Adress<td>DurationOfEmployment</td>";
					$sql = mysqli_query($link,"SELECT * FROM Table_Reshetski2 INNER JOIN Table_Reshetski ON Table_Reshetski2.Phone = Table_Reshetski.Phone");
					while ($row = mysqli_fetch_assoc($sql)) {
						echo "<tr>";
						foreach ($row as $value) {
							 echo "<td>" . $value . "</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				}
				function button12() {
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$table_exists = mysqli_query($link,"SHOW TABLES LIKE 'Log'");
					if (mysqli_num_rows($table_exists) == 0) {
						echo "Таблицы 'Log' не существует.";
						return;
					}
					$sql = mysqli_query($link, "SELECT * FROM Log;");
					echo "<br>Записи об изменениях</br>";
					echo "<br><table><td>Message</td><td>Surname</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						$count = 0;
						foreach ($row as $value){
							if($count%2==0){
								echo "<td>".$value."</td>";
							}
							$count=$count+1;
						}
					}
					echo "</table>";
				}
				function view1()
				{
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT * FROM view1;");
					echo "<br>Список сотрудников</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Номер телефона</td><td>Заработная плата</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['Phone']."</td>";
						echo "<td>".$row['Salary']."</td>";
					}
					echo "</table>";
				}
				function view2()
				{
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT * FROM view2;");
					echo "<br>Список сотрудников с их адресами</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Адрес</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['Address']."</td>";
					}
					echo "</table>";
				}
				function view3()
				{
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$sql = mysqli_query($link,"SELECT * FROM view3;");
					echo "<br>Cписок сотрудников со стажем более 4-х лет</br>";
					echo "<br><table><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Стаж</td>";
					while ($row=mysqli_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>".$row['Surname']."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['LastName']."</td>";
						echo "<td>".$row['DurationOfEmployment']."</td>";
					}
					echo "</table>";
				}
				function Procedure() {
                    $link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$flag = mysqli_query($link, "SHOW PROCEDURE STATUS WHERE Db = 'Reshetski';");
					if($flag->num_rows!=0) {
						echo "Процедура уже используется";
					}
					else {
						echo "Процедура теперь используется";
						mysqli_multi_query($link,"
							CREATE PROCEDURE IF NOT EXISTS `SP`()
							BEGIN
								INSERT INTO SPU(Surname, Name, LastName, Phone)
								SELECT Surname, Name, LastName, Phone FROM Table_Reshetski2 WHERE Phone = 'Не подтверджен';
							END;");
					}
                }
				function Procedure2()
				{
					$link = mysqli_connect("localhost", "root", "", "Reshetski", "3306");
					$flag = mysqli_query($link, "SHOW PROCEDURE STATUS WHERE Db = 'Reshetski';");
					if($flag->num_rows!=0) {
						echo "Процедура теперь не используется";
						mysqli_query($link,"DROP PROCEDURE IF EXISTS SP;");
					}
					else{
						echo "Процедура уже не используется";
					}
				}

				if (isset($_POST['button1'])) {button1();}
				if (isset($_POST['button2'])) {button2();}
				if (isset($_POST['button3'])) {button3();}
				if (isset($_POST['button4'])) {button4();}
				if (isset($_POST['button5'])) {button5();}
				if (isset($_POST['button6'])) {button6();}
				if (isset($_POST['button7'])) {button7();}
				if (isset($_POST['button8'])) {button8();}
				if (isset($_POST['button9'])) {button9();}
				if (isset($_POST['button10'])) {button10();}
				if (isset($_POST['button11'])) {button11();}
				if (isset($_POST['button12'])) {button12();}
				if (isset($_POST['view1'])) {view1();}
				if (isset($_POST['view2'])) {view2();}
				if (isset($_POST['view3'])) {view3();}
				if (isset($_POST['Procedure'])) {Procedure();}
				if (isset($_POST['Procedure2'])) {Procedure2();}
				?>
        </div>
    </div>
</body>
</html>