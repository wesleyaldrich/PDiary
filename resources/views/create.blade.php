<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDiary | Create Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
</head>
<body id="create-body">
    <div class="form-container rounded-4 py-4 px-5 m-5 container-fluid">
        <form action='{{ route('store') }}' method="POST" class="row" id="create-form">
            @csrf
            <input class="input" id="input-title" type="text" name="title" placeholder="Diary Title">
            <textarea class="input" id="input-content" name="content" placeholder="..."></textarea>
            <textarea class="input" id="input-conclusion" name="conclusion" placeholder="What do you think?"></textarea>
            <input id="input-submit" type="submit" value="Create!" class="rounded-4">
        </form>
    </div>
</body>
</html>