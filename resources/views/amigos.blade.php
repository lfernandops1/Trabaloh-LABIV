<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/css-amigos.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="create-post">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <img src="{{asset('assets/img/perfil.jpg')}}" alt="" class="img-thumbnail profile-photo-md" />
                                <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Procure um amigo..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="tools">
                                <ul class="publishing-tools list-inline">
                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-image-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-video-camera"></i></a></li>
                                    <li><a href="#"><i class="fa fa-map"></i></a></li>
                                </ul>
                                <button class="btn btn-primary pull-right">Adicionar um novo amigo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="friend-list">
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-md-4 col-sm-6">
                        <div class="friend-card">
                            <img src="{{$user['imageBack']}}" alt="profile-cover" class="img-responsive cover">
                            <div class="card-info">
                                <img src="{{$user['imageCard']}}" alt="user" class="profile-photo-lg">
                                <div class="friend-info">
                                    <a href="#" class="pull-right text-green">Amigo</a>
                                    <h5><a href="timeline.html" class="profile-link">{{$user['name']}}</a></h5>
                                    <p>{{$user['description']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>