<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
    <center>
        <img src="https://th.bing.com/th/id/R.b739942e859e521abbcdb2ecca420d26?rik=sER0n9E9ZKDpfw&pid=ImgRaw&r=0" alt="esith">
    </center>
</head>

<body>

    <div class="container">
        <div class="box form-box">
            <header>
                <center>Connexion</center>
            </header>
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Mot de passe </label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="connexion" required>
                </div>

            </form>

            @if($errors->has('email'))
                <p style="color:red;">{{ $errors->first('email') }}</p>
            @endif

            @if($errors->has('password'))
                <p style="color:red;">{{ $errors->first('password') }}</p>
            @endif

            @if(Session::has('error'))
                <p style="color:red;">{{ Session::get('error') }}</p>
            @endif
        </div>
    </div>
</body>

</html>
