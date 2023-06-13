<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type=" text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Регистрация</title>
</head>

<body>
    <div class="form-box">
        <div class="form-value">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
            <form action="{{route ('regpost')}}" method="post">
                @csrf
                <h1>Регистрация</h1>
                <div class="inputbox">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <input type="text" name="fam" value="{{old('fam')}}" required placeholder="Фамилия">
                </div>

                <div class="inputbox">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <input type="text" name="name" value="{{old('name')}}" required placeholder="Имя">
                </div>

                <div class="inputbox">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <input type="text" name="otch" value="{{old('otch')}}" required placeholder="Отчество">
                </div>

                <div class="inputbox">
                    <ion-icon name="document-text-outline"></ion-icon>
                    <input type="text" name="pasport" value="{{old('pasport')}}" required placeholder="Введите паспортные данные">
                </div>

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" value="{{old('email')}}" required placeholder="Email: example@mail.ru">
                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" value="" id="password" required placeholder="Пароль, минимум 8 символов">
                </div>

                <div class="button-ps">
                    <button class="button-ps" id="GeneratePassword" onclick="generatePassword()">Сгенерировать пароль</button>
                </div>
                <div class="button-ps">
                    <button class="button-ps" id="toggle-btn" onclick="togglePasswordVisibility()" style="margin-left:35px">Показать пароль</button>
                </div>

                <div class="button-reg" style="margin-top:1em">
                    <button type="submit">Отправить</button>
                </div>

                <div class="avto">
                    <p>
                        У меня уже есть аккаунат
                        <a href="{{route('welcome')}}">Авторизация</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
    <script src="password.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</body>

</html>