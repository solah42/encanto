<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body{
            background: url("bg-encanto.png") no-repeat center fixed;
             background-size: cover;
        }
    </style>
</head>
<body>
{{-- <x-app-layout> --}}
 {{--    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        hotel
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-grop">
                                    <label for="name">Name Hotel</label>
                                   <input type="text" class="form-control" name="name" value=" ">
                                </div><br>

                                <div class="form-grop">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" value=" ">
                                </div><br>

                                <div class="form-grop">
                                    <label for="content">content</label>
                                    <textarea type="text" class="form-control" rows="5" name="content" value=" "></textarea>
                                </div><br>

                                <div class="form-grop">
                                    <label for="price">price</label>
                                    <input type="number" class="form-control" name="price" value=" ">
                                </div><br>

                                <div class="form-grop">
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>
{{-- </x-app-layout> --}}
</body>
</html>

