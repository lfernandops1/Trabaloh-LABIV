<!DOCTYPE html>
<html lang="pt-br" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Cad-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-image: linear-gradient(#c3ddff, #8bb3ea, #00308F); background-repeat: no-repeat; background-size: auto;">

    <h3 id="titulo-sistema">

        <div id="painel-login" class="panel panel-defaultt" style="margin: auto; width: 30%; background-color: #ff000000; margin-top: 11%;">
            <div class="panel-body" style="background-color: #ff000000; text-align: center;">
                <img src="{{asset('assets/img/iceberg-icon.png')}}" alt="Minha Figura" style="width: 200px" id="tamanho-imagem">
                <h1>
                    DeepCold
                </h1>
                <h2>
                    Cadastro
                </h2>
                <hr style="border-top: 3px solid #4b6792;">
                <div>


                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    <form action="{{route('register')}}" method="POST" style="max-width:300px;margin:auto; display: inline-grid;">
                        @csrf
                        @if (session('senha'))
                            <span>senhas nao coincidem</span>
                        @endif
                        <div style="display: block">
                            <input class="input-field" style="background: #e0e0e00d; border: solid 2px #363d4666; border-radius: 9px;" type="text" placeholder="Digite seu e-mail" name="email">
                        </div>

                        <div style="display: flex; margin-top: 10px;">
                            <input class="input-field" style="background: #e0e0e00d; border: solid 2px #363d4666; border-radius: 9px;" type="password" placeholder="Insira uma senha" name="senha">
                        </div>
                        <div style="display: flex; margin-top: 10px;">
                            <input class="input-field" style="background: #e0e0e00d; border: solid 2px #363d4666; border-radius: 9px;" type="password" placeholder="Confirme a senha" name="senhaConfirm">
                        </div>

                        <button class="button" type="submit" class="button teste; ">Cadastrar</button>
                    </form>
                </div>
            </div>

    </h3>
    </div>

    <div class=" footer ">
        <div style="float: left !important; margin: 5px 10px; ">
            Todos direitos reservados: <a href="http://github.com/bartowskix " target="_blank ">github.com/bartowskix </a>
        </div>
        <div style="float: right !important; margin: 5px 10px; ">
            Versão 0.1
        </div>
    </div>
</body>

</html>