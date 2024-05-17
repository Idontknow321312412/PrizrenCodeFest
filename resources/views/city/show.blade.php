<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($city) }}</title>
</head>
<body>
    @include('partials.navbar')

    @if ($restaurants->isEmpty())
        <p class="Message">No restaurants found in {{ ucfirst($city) }}!</p>
    @else
    <p class="title">RESTAURANTS IN YOUR CITY</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 margins">
                @foreach ($restaurants as $restaurant)        
                    <div class="height-c">
                        <a href="{{ route('dashboard.restaurant', ['city' => ucfirst($city) , 'restaurant' => $restaurant->name]) }}">
                            <img class="h-custom max-w-full" src="{{ asset('storage/restaurant_picture/' . $restaurant->name . '.jpg') }}" alt="{{ $restaurant->name }}">

                        </a>
                        <p class="location-name">{{ $restaurant->name }}</p>
                        <p class="email">{{ $restaurant->email }}</p>
                    </div>
                @endforeach   
    @endif
    </div>


    @include('partials.footer')

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</html>
