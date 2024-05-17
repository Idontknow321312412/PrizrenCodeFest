<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <!-- Include the Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <!-- Include jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include the Select2 JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 style="color: #11D900">Add a restaurant to YumFood</h2>
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
            {{-- <input type="text" name="operating_cities" for="operating_cities" required placeholder="Active cities"> --}}
            <div class="margin_l">
            <select name="operating_cities[]" id="operating_cities" multiple required>
                <option value="" disabled selected>Operating cities</option>
                <option value="Deçan">Deçan</option>
                <option value="Dragash">Dragash</option>
                <option value="Drenas">Drenas</option>
                <option value="Ferizaj">Ferizaj</option>
                <option value="Fushë Kosova">Fushë Kosovë</option>
                <option value="Gjakova">Gjakovë</option>
                <option value="Gjilan">Gjilan</option>
                <option value="Istog">Istog</option>
                <option value="Kaçanik">Kaçanik</option>
                <option value="Kamenica">Kamenicë</option>
                <option value="Klina">Klinë</option>
                <option value="Lipjan">Lipjan</option>
                <option value="Malisheva">Malishevë</option>
                <option value="Mitrovica">Mitrovicë</option>
                <option value="Obiliq">Obiliq</option>
                <option value="Peja">Pejë</option>
                <option value="Podujeva">Podujevë</option>
                <option value="Prishtina">Prishtinë</option>
                <option value="Prizren">Prizren</option>
                <option value="Rahovec">Rahovec</option>
                <option value="Skenderaj">Skenderaj</option>
                <option value="Suhareka">Suharekë</option>
                <option value="Shtërpca">Shtërpcë</option>
                <option value="Shtime">Shtime</option>
                <option value="Viti">Viti</option>
                <option value="Vushtrri">Vushtrri</option>
                <!-- Add more cities as needed -->
            </select>
            </div>
            
            <br>
            {{-- <label for="phone_nr">Restaurant number:</label> --}}
            <input type="text" name="phone_nr" for="phone_nr" required placeholder="Phone number" style="margin-top: 0">
            <br>
            <input type="file" name="restaurant_picture" for="restaurant_picture" required placeholder="Add a picture for your restaurant" accept=".png, .jpg, .jpeg, .gif, .svg">
            <br>
            <button type="submit">Create</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            // Initialize Select2 on the select element with the id 'cities'
            $('#operating_cities').select2();
        });
    </script>

</body>
</html>