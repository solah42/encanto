<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        /* ... */
    </script>
    <style type="text/tailwindcss">
        @layer utilities { .content-auto { content-visibility: auto; } }
    </style>
</head>

<body class="bg-cover" style="background-image: url({{asset('img/5555.png')}})">
    <div class="lg:content-auto">
        <div>
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8 bg-black">
                <nav class="relative flex items-center justify-between sm:h-12 lg:justify-start" aria-label="Global  ">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0 ">
                        <div class="flex items-center justify-between w-full md:w-auto ">
                            <a href="#">
                                <img src="{{asset('img/logo.png')}}" alt="" width="150px">
                            </a>
                            <a href="#" class="font-serif text-white text-3xl mb-7 ml--7 hover:text-slate-500 ">ENCANTO</a>
                        </div>
                    </div>

                </nav>

            </div>

        </div>
        <div class="lg:justify-center text-white text-center  font-serif mt-28 text-8xl">
            <i>The Encanta</i>
        </div>
        <div class="justify-items-center text-center mt-80 py-4 px-6  w-50 h-16">

            <a href="{{route('showUser')}}" class="lg:justify-center text-black py-4 px-9 text-center  bg-white  font-serif   text-2xl mt-80 rounded-md hover:text-red-500">View</a>

        </div>
</body>

</html>
