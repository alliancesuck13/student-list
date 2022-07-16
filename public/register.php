<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация абитуриента</title>
</head>
<body>
    <?php include realpath('../app/widgets/header.php'); ?>
    <main>
        <h2 class="registration__text">Регистрация абитуриента</h2>
        <form class="main-form" action="" method="post">
            <div class="form-container">
                <label class="label-form" for="nameId">Имя</label>
                <input type="text" name="" id="nameId" required placeholder="Иван">
                <label class="label-form" for="surnameId">Фамилия</label>
                <input type="text" name="" id="surnameId" required placeholder="Иванов">
                <label class="label-form" for="">
                    Пол:
                    <label class="label-form" for="maleId">М<input type="radio" name="sex" id="maleId" value="male" required checked></label>
                    <label class="label-form" for="femaleId">Ж<input type="radio" name="sex" id="femaleId" value="female" required></label>
                </label>
                <label class="label-form" for="groupId">Группа</label>
                <input type="text" name="" id="groupId" required placeholder="ПКC19">
                <label class="label-form" for="mailId">E-mail</label>
                <input type="email" name="" id="mailId" required placeholder="email@email.com">
                <label class="label-form" for="summaryId">Сумма баллов ЕГЭ</label>
                <input type="text" name="" id="summaryId" required placeholder="254">
                <label class="label-form" for="birthdayId">Дата рождения</label>
                <input type="date" name="" id="birthdayId" required>
                    <label class="label-form" for="regionalId">
                        Местный <input type="radio" name="regional" id="regionalId" value="regional" required checked>
                    </label>
                    <label class="label-form" for="ootIdd">
                        Иногородний <input type="radio" name="regional" id="ootId" value="oot" required>
                    </label>
                <button class="btn-form" type="submit">Зарегестрироваться</button>
            </div>
        </form>
    </main>
</body>
</html>