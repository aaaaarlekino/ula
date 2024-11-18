<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form">  
        <form name="form" method="post" action="register.php" >
            <div class="input-name">
                <p>Имя</p>
                <input type="text" placeholder="Ваше имя" name="user">
            </div>
            <div class="input-surname">
                <p>Фамилия</p>
                <input type="text" placeholder="Ваша фамилия" name="surname">
            </div>
        </div>
        <div class="email-input">
            <p class="free-analysis-email-p">Почта</p>
        <input type="email" class="free-analysis-email-input" placeholder="Ваша почта" name="email">
        </div>
        <div class="input-tel">
            <p>Номер телефона</p>
            <input class="input-tel-form" placeholder="Ваш номер телефона" type="text" name="telephone" id="telephone">
        </div>
        <div class="div-free-analysis-df">
            <div class="free-analysis-btn">
                <input type="submit" id="btn">
            </div>
        </div>
    </form>
    </div>
</body>
</html>