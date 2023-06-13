<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type=" text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Авторизация</title>
</head>

<body>
    <div class="form-box">
        <div class="form-value">
            @foreach ($errors->all() as $message)
            <li>{{$message}}</li>
            @endforeach
            <form action="{{route('welcome')}}" method="post">
                @csrf
                <h1>Авторизация</h1>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required placeholder="Email">

                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required placeholder="Пароль">
                </div>

                <div class="button">
                    <button type="submit">Войти</button>
                </div>

                <div class="register">
                    <p>
                        У меня нет аккаунат
                        <a href="{{route('reg')}}">Регистрация</a>
                    </p>
                </div>

            </form>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>