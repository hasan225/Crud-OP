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
        body {
            background: #023e77
        }

    </style>

    <title>All Notes</title>
</head>

<body>

    <section style="padding-top:60px">

        <div class="container my-5">
            <h1 class="text-center mb-5 display-3"
                style="letter-spacing: 2px; margin-top:90px;font-weight:bold; color:white">All Notes</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white display-6 mb-2" style="font-weight:bold">
                            All Notes <a href="/" class="btn btn-success">Add A Note</a>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <p>{{$post->id}}</p>
                                        </td>
                                        <td>
                                            <h4>{{$post->title}}</h4>
                                        </td>
                                        <td>
                                            <h5>{{$post->body}}</h5>
                                        </td>
                                        <td><a href="/posts/{{$post->id}}" class="btn btn-info text-white" style="font-weight:bold">Details</a>
                                            <a href="/edit-post/{{$post->id}}" class="btn btn-primary" style="font-weight:bold">Edit</a>
                                            <a href="/delete-post/{{$post->id}}" class="btn btn-danger" style="font-weight:bold">Delete</a>
                                        </td>
                                    </tr>


                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if (Session('postDelete'))
                <div class="my-2 alert">
                    <strong class=""
                        style="background:rgb(240, 98, 3);padding:10px;color:white;border-radius:10px;">{{ Session('postDelete') }}</strong>
                </div>
                @endif
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
