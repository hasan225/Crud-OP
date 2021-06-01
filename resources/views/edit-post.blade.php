<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            body{background:#023e77}
        </style>

    <title>Edit Note</title>
</head>

<body>

    <section style="padding-top:60px">

        <div class="container my-5">
            <h1 class="text-center mb-5 display-3" style="letter-spacing: 2px; margin-top:90px;font-weight:bold; color:white">Edit Note</h1>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header bg-info text-white display-6 mb-2">
                            Add Note <a href="/posts" class="btn btn-dark">See All Notes</a>
                        </div>
                        <div class="card-body">
                                 @if (Session('updateMsg'))
                                <div class="my-2 alert">
                                    <strong class="" style="background:green;padding:10px;color:white;border-radius:10px;">{{ Session('updateMsg') }}</strong>
                                </div>
                                @endif
                            <form action="{{route('post.update')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$post->id}}" />
                                <div class="mb-3">
                                    <label for="title" class="form-label mt-2">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                                </div>

                                <div class="mb-3">
                                    <label for="body" class="form-label">Description</label>
                                    <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$post->body}}</textarea>
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-success">Update Note</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
