<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #F3F3E0;
        }   
    </style>
</head>
<body>
    
    <div class="flex min-h-100">
        @include('layout.navbar')

        <div class="mt-5 ms-3 mb-5">
            <h3>{{$category}}</h3>
        </div>

        <div class="d-flex justify-content-center">
            <img src="/thumbnail.jpeg" class="rounded-3" style="width: 95%; height: 300px;" alt="banner">
        </div>

        <div class="mt-1 m-5">
            {{$post->upload_date}}| by: {{$post->writer->name}}
        </div>

        <div class="mt-5 mb-5 ms-5 col">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempore consequatur ex nisi officia repellat vel suscipit amet hic praesentium vitae modi, incidunt assumenda illum labore sequi dignissimos ipsam. Quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus placeat omnis tempora quibusdam provident blanditiis perferendis ab voluptas veritatis, qui obcaecati sed inventore sequi incidunt similique molestiae id. Numquam?
            </p>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat nemo temporibus, rerum aspernatur quisquam provident ut laborum sit quidem porro esse cum minima, itaque vel consectetur atque sunt ea! Repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim porro et labore magnam explicabo sequi magni ea commodi alias, laboriosam libero culpa quis doloremque rem dolor, repellat sit. Eveniet, consectetur?
            </p>
        </div>

    </div>

    @include('layout.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>