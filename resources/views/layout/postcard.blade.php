<div class="col">

    <div class="row justify-content-center m-3">
        <div class="col-3">
            <img src="/thumbnail.jpeg" class="w-80 rounded-3" alt="thumb">
        </div>

        <div class="col-7">
            <h2>
                {{$title}}
            </h2>
            <p>
                {{$description}}
            </p>

            <div class="d-md-flex justify-content-md-end">
                <a href="{{ route('post', $title)}}">
                    <button class="btn btn-secondary rounded-pill" type="button">Read More</button>
                </a>
            </div>

        </div>
    </div>

</div>