<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            background: url("img/bg-show.png") no-repeat center fixed;
            background-size: cover;
        }
        h1{
            margin-top: 100px;
            color: white;
        }
        .container{
            margin: 150px auto 50px auto;
            border-radius: 20px;
        }
        .card{
            text-align: center;
            padding: 20px 15px;
            margin-bottom: 50px;
        }
        .card-img{
            margin: auto;
            border-radius: 20px;
            width: 350px;
            height: 300px;
        }
        #price{
            padding: 2px 50px;
            background-color: #FFFBF5;
            color: #957B68;
        }
    </style>
</head>
<body style="background-image: url({{asset('img/bg2.png')}})">
    <div class="lg:content-auto">
        <div>
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8 bg-yellow-900">
                <nav class="relative flex items-center justify-between sm:h-12 lg:justify-start" aria-label="Global  ">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0 ">
                        <div class="flex items-center justify-between w-full md:w-auto ">
                            <a href="#">
                                <img src="{{asset('img/logo.png')}}" alt="" width="150px">
                            </a>
                            <a href="#" class="font-serif text-white text-3xl mb-7 ml--7 hover:text-slate-500 ">ENCANTO</a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                  <span class="sr-only">Open main menu</span>
                                  <!-- Heroicon name: outline/menu -->
                                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                  </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8 mb-7">
                            <a href="/" class="font-medium text-white hover:text-gray-900">Home</a>

                            <a href="{{route('showUser')}}" class="font-medium text-white hover:text-gray-900">Hotels</a>
                            <div class="absolute top-0 right-5  ">
                                <a href="/login" class="btn btn-secondary">Login</a>
                            </div>
                        </div>

                    </div>


                </nav>

            </div>

        </div>
    <div class="container">
        <div class="row">
            @foreach ($post as $data)
            <div class="col-md-4">
                <div class="card">
                    <h2>{{$data->name}}</h2>
                    <img src="{{asset($data->image)}}" class="card-img" id="imgt" alt="..."  >
                    <div class="card-body">
                        <p>{{$data->content}}</p>
                        <button id="price" >{{$data->price}}$</button>
                    </div>
                    <a href='{{route('showId',$data->id)}}' class="btn btn-primary">Read more</a>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
