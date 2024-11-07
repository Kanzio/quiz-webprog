<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #F3F3E0;
        }   
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="flex">
            @include('layout.navbar')
            <div>
                <img src="/banner.jpg" class="w-100 mh-25" style="max-height: 350px;" alt="banner">
            </div>
            
            <div class="row">
                <div class="col">
                    @foreach($posts as $post)
                            @include('layout.postcard', [
                                'title' => $post->title,
                                'thumbnail' => $post->thumbnail,
                                'upload_date' => $post->upload_date,
                                'writer' => $post->writer->name,
                                'viewers' => $post->viewers,
                                'description' => $post->description,    
                            ])
                    @endforeach
                </div>
            </div>
    
    
        </div>
    </div>

    @include('layout.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>