<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



    <style>
        *{
            margin:0, auto;
            outline:none;
            font-family: 'Montserrat', sans-serif;
        }

        .nav{
            color:white;
        }

        .container{
            height:100vh;
            max-width:40%;
            background-color: white;
            display: flex;
            float: left;
            border-right: 1px solid rgba(0, 0, 0, 0.486)
        }
        body{
            background: rgb(127,146,221);
            background: linear-gradient(90deg, rgba(127,146,221,1) 0%, rgba(136,219,220,1) 72%); 
        }
        

        .main-row{
            height: 60vh;
            width: 60%;
            margin: auto;
        }
        h3{
            text-align: center;
            height:50px;
            margin:15px;
        }
        .form{
            display: block;
            
        }
        .input{
            width:100%;
            border:none;
            border-bottom:1px solid black;
            background-color: rgba(128, 128, 128, 0);
            height:35px
        }
        .btn{
            width:100%;
        }
        .control{
            padding-bottom:20px;
        }
        .title{
            height:60px;

        }

        .container2{
            width:60%;
            height:100vh;
            float: right;
        }

        .list{
          display:flex;
          flex-wrap:wrap;
          align-itens:center;
          justify-content:center;

        }
        a{
          text-decoration:none;
          color:black;
        }

        .weak{
            color: grey;
        }
        .carousel{
          height: 100vh;
        }
        .img{
          height:100vh;
          object-fit: cover;
        }
        .carousel-caption{
          color: black;
        }
    </style>
    <title>Login</title>
  </head>
  <body>
        

    <div class="container ">    
        
        <div class="row main-row">
          <div class="btn disabled title">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                  <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"/>
              </svg>
              <p>KanNotes</p>
          </div>
            <div class="list">
              <h3><a href="{{ route('login') }}" class="weak">Login</a></h3>
              <h3><a href="{{ route('cadastro') }}">Cadastro</a></h3>
            </div>
            
            
            <div class="form">
                <form action="{{route('cadastro')}}" method="post">
                    @csrf
                    <div class="control">    
                        <label for="name">Nome</label>
                        <input class=" input" type="text" id="name" name="name">
                    </div>
                    <div class="control">
                        <label for="email">Email</label>
                        <input class=" input" type="email" id="email" name="email">
                    </div>
                    <div class="control">
                        <label for="user">Usuário</label>
                        <input class=" input" type="text" id="user" name="user">
                    </div>
                    <div class="control">
                        <label for="password">Senha</label>
                        <input class=" input" type="password" id="password" name="password">
                    </div>
                    <div class="">
                        <input type="submit" value="Enviar" class="btn btn-dark" >
                    </div>
                </form>

            </div>
            
        </div>
    </div>
    <div class="container2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/login1.jpg') }}" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/login2.jpg') }}" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/login3.jpg') }}" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
  </body>
</html>