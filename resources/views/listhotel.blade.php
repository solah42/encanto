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
    <script>
        /* ... */
    </script>
    <style type="text/tailwindcss">
        @layer utilities { .content-auto { content-visibility: auto; } }
    </style>
    <style>
        body{
            background: url("img/bg-show.png") no-repeat center fixed;
            background-size: cover;
        }
        .container{
            margin: 100px auto 50px auto;
            padding: 20px 10px;
            background-color: white;
            border-radius: 10px;
        }
        .card-img{
            width: 600px;
            height: 600px;
            border-radius: 20px;
        }
        .header{
            background-color: #FFFBF5;
            border: solid 2px #4D3F28;
            margin-right: 20px;
            padding: 5px 10px;
            border-radius: 10px;
        }
        .comment{
            border: solid 2px #4D3F28;
            margin-top: 20px;
            margin-right: 20px;
            padding: 15px 5px;
            background-color: #CFB4AC;
            border-radius: 20px;
        }
        #name{
            color: #4D3F28;
            margin-left: 20px;
        }
        #com{
            width: 380px;
            margin: 5px 10px;
            border-radius: 5px;
        }
        #sub{
            border-radius: 5px;
            margin-left: 5px;
            width: 80px;
            background-color: #4D3F28;
        }
        #sub:hover{
            background-color: white;
        }
        .showcom{
            background-color: #FFFBF5;
            padding: 10px;
            margin: 10px 20px;
            border-radius: 10px;
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
    <div class="mt-5" style="width:1024px;margin:0 auto;">
        <div class="row">
            <div class="col-md-6">
                 <img src="{{asset($post->image)}}" class="card-img" id="imgt" alt="..."  >
            </div>
            <div class="col-md-6">
                <div class="header">
                    <h3>{{$post->name}}</h3><hr>
                    <p>{{$post->content}}</p>
                </div>
                <div class="comment">
                    <form action="{{route('comment_create')}}" method="post" >
                        @csrf
                        <label id="name">COMMENT</label>
                        <input type="text" id="com"  name="comment">
                        <input type="text" id="com"  name="post_id" value="{{$post->id}}" hidden>
                        <input type="submit"  id="sub name" name="submit" value="send">
                    </form>
                    @foreach ($comment as $c)
                        <div class="showcom">
                            <label>{{$c->comment}}</label>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</body>
</html>
