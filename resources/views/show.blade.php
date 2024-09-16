<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDiary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="diary-inside container-sm p-5 mt-5 rounded-4">
        <h3 class="diary-title-inside mb-4">{{ $diary->title }}</h3>
        <hr class="mb-4">
        <h5 class="diary-content-inside mb-5">{{ $diary->content }}</h5>
        <hr class="mb-4">
        <h5 class="diary-conclusion-inside m-0">{{ $diary->conclusion }}</h5>
    </div>
    <a class="edit-container-link" href="{{ route('edit', $diary->id) }}">
        <img src="{{ asset('assets/edit.png') }}" class="edit-container p-4">
    </a>
    <form action="{{ route('delete', $diary->id) }}" method="POST" class="delete-container-link">
        @csrf
        @method('DELETE')
        <input type="image" src="{{ asset('assets/delete.png') }}" class="delete-container p-4">
    </form>
</body>
</html>