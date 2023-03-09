<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Занятия по РНР</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header>
            <h1>
                Урок 7.8. SQL запросы. LEFT JOIN и RIGHT JOIN
            </h1>
            <h4>
                Продолжаем изучать основы SQL и рассмотрим запросы LEFT JOIN и RIGHT JOIN
            </h4>
        </header>
        <section class="code_php">
            <?php
            $nickname = "Александр!";
            $hello = "Привет ";
            $offer = "Продолжаем в рамках курса РНР изучать основы SQL запросов.<br>
                      На данном занятии рассмотрим запросы LEFT JOIN и RIGHN JOIN";
            echo "<h2 class='subtitle-php'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "</h2>";
            ?>
        </section>
        <section class="begin">
            <p>
                SQL запросы LEFT JOIN и RIGHT JOIN - это соединение таблиц в зависимости от запроса слева или справа.<br>
                Левое и правое соединение таблиц еще называют внешним.<br>
                Их отличие от внутренного соединения в том, что строка из левой(LEFT JOIN) или из правой таблицы(для RIGHT JOIN) попадает в результаты в любом случаи.<br>
                Левая таблица будет та, которая идет перед написанием ключевых слов LEFT/RIGHN/INNER JOIN, а правая таблица - после них.<br>
                Пример:<br>
                SELECT * FROM movie LEFT JOIN categories USING(id)<br>
                в данном случаи <span class="one-b">movie</span> будет таблицей <span class="two-b">слева</span>, а таблица <span class="third-b">categories</span> <span class="two-b">правой</span>.
            </p>
            <div class="practik-l">
                <p>
                    Теперь переходим к практическим занятиям.<br>
                    Запускаем админ. панель phpMyAdmin управления БД.<br>
                    Теперь активируем нашу таблицу study7.2lesson.<br>
                    Переходим во вкладку SQL.<br>
                    В открывшемся окне пишем следующий код:<br>
                    SELECT * FROM movie LEFT JOIN categories USING(id)<br>
                    После этого жмем кнопку Вперед.<br>
                    В данном случаи в нашем запросе мы написали следующее - выбtри таблицу movie и соедени её с таблицей categories на основе определенного условия, в нашем случаи условие это id.<br>
                    Если строка из левой таблицы movie ссответствует строке из правой таблтцы categories на основе условия(id), эта строка будет включена в результирубщий набор, что мы и видим по 1 и 2 строке.<br>
                    Если же значение в левой таблице movie не соответствует значению в правой таблице categories, строка в левой таблице также выбирается и объединятеся с "условной" строкой в правой таблице.<br>
                    "Условная" строка будет содержать NULL для всех соответствующих столбцов в операторе SELECT.<br>
                    То есть, проще говоря, условие LEFT JOIN MySQL позволяет выбирать строки обеих таблиц, которые совпадают, плюс все строки из левой таблицы movie даже без совпадения со строками из правой таблицы.
                </p>
            </div>
            <div class="practik-r">
                <p>
                    Если повторить данный запрос заменив LEFT на RIGHT, то увидим как изменился результат.<br>
                    Давайте проверим, пишем нащ запрос:<br>
                    SELECT * FROM movie RIGHT JOIN categories USING(id)<br>
                    то мы увидим только две строки потому что соединение делали справа, что мы и видим.<br>
                    Ранее мы делали соединение слева, поэтому и получили результат со строкой NULL.
                </p>
            </div>
            <div class="end">
                <p>
                    Вот и все. Теперь можно переходить к домашней работе для закрепления полученного знания.
                </p>
            </div>
            <p></p>
            <p></p>
        </section>
        <section class=""></section>
    </main>
</body>

</html>