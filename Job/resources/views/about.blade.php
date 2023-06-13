<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type=" text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Личный кабинет</title>
</head>

<body>
    <div class="form-box-about">
        <form action="{{route ('update')}}" method="post">
            @csrf
            <div class="form-value">
                <h1>Профиль пользователя</h1>
                <fieldset>
                    <legend>Информация о пользователе</legend>
                    <div class="inputbox-about">
                        <ion-icon name="id-card-outline"></ion-icon>
                        <input type="text" name="fam" value="{{$fam}}">
                    </div>

                    <div class="inputbox-about">
                        <ion-icon name="id-card-outline"></ion-icon>
                        <input type="text" name="name" value="{{$name}}">
                    </div>
                    <div class="inputbox-about">
                        <ion-icon name="id-card-outline"></ion-icon>
                        <input type="text" name="otch" value="{{$otch}}">
                    </div>
                    <div class="textarea">
                        <textarea type="text" name="textarea" value="{{$textarea}}" id="" cols="30" rows="10">{{$textarea}}</textarea>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Персональные Данные</legend>
                    <div class="inputbox-about">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="email" value="{{$email}}">
                    </div>
                    <div class="inputbox-about">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <input type="text" name="pasport" value="{{$pasport}}">
                    </div>
                </fieldset>
                <div class="button-about">
                    <button class="button-about" type="submit">Редактировать профиль</button>
                </div>
        </form>

        <div class="button-about" style="margin-top:1em">
            <button class="button" type="submit"><a href="{{route ('logout')}}">Выход</a></button>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>