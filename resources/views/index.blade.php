<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
  <!-- Content -->
  <div class="content-s">
<nav class="border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/images/placeholder.png') }}" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white navbar-text-color">YumFood Kosova</span>
    </a>
    </div>
  </nav>  


    <form class="select-form" method="post" action="{{ route('process.city') }}">
      @csrf
        <select id="city" name="city" placeholder="Select your city:">
            <option value="" disabled selected id="translatedText">Select your city</option>
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
        </select>
        <input type="submit" value="SEARCH" id="submit1-btn">
        <img src="{{ asset('assets/images/burger.png') }}"alt="burger" class="burger-img">
      </form>
      <div class="custom-shape-divider-bottom-1703694413">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
          <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
  </div>


      <div class="content-a">
        
        <p class="text-c">RECOMMENDED PLACES</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 margins">    
        @foreach ($randomRestaurants as $restaurant)  
      <div class="height-c">
          <img class="h-custom max-w-full" src="{{ asset('storage/restaurant_picture/' . $restaurant->name . '.jpg') }}" alt="">
          <p class="location-name">{{ $restaurant->name }}</p>
          <p class="locations-nr">{{ $restaurant->email }}</p>
      </div>   
    @endforeach
    </div>
      </div>

      <div class="about-div">
        <label class="about-label">
          FAST DELIVERY
          <img src="{{ asset('assets/images/fast-delivery.png') }}" class="about-icon-c">
        </label>
        
      </div>


      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
        <!-- First div, fixed width of 340px with margin on both sides -->
        <div class="w-full md:w-340px mx-auto md:ml-10 md:mr-10 p-8 fixed-m">
            <div class="fixed-w">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc faucibus a pellentesque sit amet porttitor eget dolor. Cursus vitae congue mauris rhoncus aenean vel scelerisque mauris. Sapien eget mi proin sed libero enim sed.
            </div>
        </div>
    
        <!-- Second div, fixed width of 340px with margin on both sides -->
        <div class="w-full md:w-340px mx-auto md:ml-10 md:mr-10 p-8 align-center">
            <div class="fixed-w2">
              <img src="{{ asset('assets/images/biker.jpg') }}" class="about-image">
            </div>
        </div>
    </div>
    <br><br><br><br>

    @include('partials.footer')
  
  </div>

  <script>
    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script>
<script>
// Translation function
        function translateText(text, language) {
            // You can implement your own translation logic here
            // For simplicity, we'll use a basic example
            const translations = {
                'en': {
                    'Hello, World!': 'Hello, World!',
                },
                'sq': {
                    'Hello, World!': 'Përshëndetje, Bota!',
                }
            };

            return translations[language][text];
        }

        // Function to change language
        function changeLanguage() {
            const languageSelect = document.getElementById('languageSelect');
            const selectedLanguage = languageSelect.value;
            const translatedText = translateText('Hello, World!', selectedLanguage);
            const translatedElement = document.getElementById('translatedText');
            translatedElement.textContent = translatedText;
        }

        // Initial language setup (English)
        changeLanguage();
    </script>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</html>