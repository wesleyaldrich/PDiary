<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDiary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('storage/assets/style.css') }}">
    <link rel="icon" href="{{ asset('storage/assets/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach($diaries as $diary)
                <div class="diary p-2 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a class="diary-container-link" href="{{ route('show', $diary->id) }}">
                        <div class="diary-content p-3 rounded-2">
                            <h5>{{ $diary->title }}</h5>
                            <hr>
                            <p>{{ $diary->conclusion }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <a class="create-container-link" href="{{ route('create') }}">
        <img src="{{ asset('storage/assets/add.png') }}" class="create-container p-4">
    </a>
</body>
</html>
