<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="row mt-5">
        <div class="col-lg-4 offset-4">
            <div class="card">
                <div class="card-header">
                    login Form
                </div>
                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                            @error('email') <p class="text text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                            @error('password') <p class="text text-danger">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>