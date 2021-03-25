<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSV to DB</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
      <div class="container mt-5">

        <form method="post" action="{{ route('file-submit') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
            <label for="exampleFormControlFile1">CSV file to import</label>
            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
          </div>

          @if (session('status') !== null)
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          @if ($errors->any())
            @foreach($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                {{ $error }}
              </div>
            @endforeach
          @endif

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </body>
</html>
