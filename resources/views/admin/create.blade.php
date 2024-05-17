<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Add restaurant to BiteExpress</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            {{-- <label for="name">Restaurant Name:</label> --}}
            <input type="text" name="name" for="name" required placeholder="Restaurant name">
            <br>
            {{-- <label for="owner">Restaurant owner:</label> --}}
            <input type="text" name="owner" for="owner" required placeholder="Restaurant owner">
            <br>
            {{-- <label for="password">Restaurant password:</label> --}}
            <input type="text" name="password" for="password" required placeholder="Password">
            <br>
            {{-- <label for="email">Restaurant email:</label> --}}
            <input type="text" name="email" for="email" required placeholder="Email">
            <br>
            {{-- <label for="operating_cities">Restaurant cities:</label> --}}
            <input type="text" name="operating_cities" for="operating_cities" required placeholder="Active cities">
            <br>
            {{-- <label for="phone_nr">Restaurant number:</label> --}}
            <input type="text" name="phone_nr" for="phone_nr" required placeholder="Phone number">
            <br>
            <!-- Add more fields as needed -->
            <br>
            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>