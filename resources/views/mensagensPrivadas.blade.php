<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/css-msgpvd.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <title>Chat Privado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat-app">
            <div id="plist" class="people-list">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                </div>
                <ul class="list-unstyled chat-list mt-2 mb-0">
                    <li class="clearfix">
                        <img src="{{asset('assets/img/arthur.jpg')}}" alt="avatar">
                        <div class="about">
                            <div class="name">Arthur Porto</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> 7 min atrás</div>                                            
                        </div>
                    </li>
                    <li class="clearfix active">
                        <img src="{{asset('assets/img/cleiton.jpg')}}" alt="avatar">
                        <div class="about">
                            <div class="name">Cleiton Pinheiro</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="{{asset('assets/img/rezende.jpg')}}" alt="avatar">
                        <div class="about">
                            <div class="name">Lucas N Rezende</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>                                    
                    <li class="clearfix">
                        <img src="{{asset('assets/img/gustavo.jpg')}}" alt="avatar">
                        <div class="about">
                            <div class="name">Luiz Gustavo</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> 10 horas atrás </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="{{asset('assets/img/carlos.jpg')}}" alt="avatar">
                        <div class="about">
                            <div class="name">Carlos W Gama</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="{{asset('assets/img/cleiton.jpg')}}" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0">Cleiton Pinheiro</h6>
                                <small>Visto por ultimo: 10 min atrás</small>
                            </div>
                        </div>
                        <div class="col-lg-6 hidden-sm text-right">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <li class="clearfix">
                            <div class="message-data text-right">
                                <span class="message-data-time">10:10 , Hoje</span>
                                <img src="{{asset('assets/img/perfil.jpg')}}" alt="avatar">
                            </div>
                            <div class="message other-message float-right"> Ow Cleiton tem como tu me dar um help no trab do carlos? sou muito ruim em php </div>
                        </li>
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:12, Hoje</span>
                            </div>
                            <div class="message my-message">que horas?</div>                                    
                        </li>                               
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:13, Hoje</span>
                            </div>
                            <div class="message my-message">vou terminar o serviço la do trabalho e ja fico livre ai so colar discord k</div>
                        </li>
                    </ul>
                </div>
                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Envie uma mensagem...">                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>