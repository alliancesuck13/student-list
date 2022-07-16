<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Список абитуриентов</title>
</head>
<body>
    <?php include realpath('../app/widgets/header.php'); ?>
    <main class="container-width container">
        <div class="student-list">
            <div class="list-header">
                <h3>Список абитуриентов</h3>
                <form action="" method="get">
                    <label for="search-id">Поиск: <input type="search" name="search" id="search-id" placeholder="Имя, фамилия, группа..."></label>
                    <button type="submit">Найти</button>
                </form>
            </div>
            <table class="students">
                <tr><th>Имя</th><th>Фамилия</th><th>Номер группы</th><th>Баллов</th></tr>
                <tr><td>Иван</td><td>Иванов</td><td>П1819</td><td>230</td></tr>
                <tr><td>Иван</td><td>Иванов</td><td>П1819</td><td>230</td></tr>
            </table>
            <div class="pages">
                <p>Страницы: </p>
                <ul class="pages-li">
                    <li>
                        <a href="?p=1">1</a>
                    </li>
                    <li>
                        <a href="?p=2">2</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>