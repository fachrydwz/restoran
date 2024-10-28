<html>

    <title>forgetnpassowrd Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <body class="container">

        <h1>
        forgetnpassowrd Page
        </h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
        @endif

        @if (Session::has('error'))
            <li>{{Session::get('error')}}</li>
        @endif

        @if (Session::has('success'))
            <li>{{Session::get('success')}}</li>
        @endif

        <form action="{{route('admin.password_submit')}}" method="post">
            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">email password reset link</button>
          </form>
    </body>
</html>