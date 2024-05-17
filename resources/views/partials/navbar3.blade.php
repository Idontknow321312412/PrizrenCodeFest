<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/order.css') }}">

<nav class="navbar-c">
    <img src="{{ asset('assets/images/placeholder.png') }}" id="nav-logo"><label id="company-name">YumFood</label>
    <form class="select-form" method="post" action="{{ route('process.city') }}">
        @csrf
        <input type="submit" value="SEARCH" id="submit1-btn">
        <select id="city" name="city" placeholder="Select your city:">
            <option value="" disabled selected>Select your city</option>
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
    </form>
    <div class="hamburger-icon" onclick="toggleSidebar()">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
</nav>
<script>
                // Your existing JavaScript code

    function openSidebar() {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.style.right === '0px') {
            // If the sidebar is already open, close it
            closeSidebar();
        } else {
            // If the sidebar is closed, open it
            sidebar.style.right = '0px';
        }
        }

    function closeSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.style.right = '-280px';
        }

        // New JavaScript for toggleSidebar function
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        var hamburgerIcon = document.querySelector('.hamburger-icon');

        if (sidebar.style.right === '0px') {
            // If the sidebar is open, close it and show hamburger icon
            sidebar.style.right = '-280px';
            hamburgerIcon.classList.remove('active');
        } else {
            // If the sidebar is closed, open it and show X icon
            sidebar.style.right = '0px';
            hamburgerIcon.classList.add('active');
        }
        }

</script>
<div class="sidebar" id="sidebar">
    <form class="select-form2" method="post" action="{{ route('process.city2') }}">
        @csrf
        <select id="city2" name="city" placeholder="Select your city:">
            <option value="" disabled selected>Select your city</option>
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
        <input type="submit" value="SEARCH" id="submit1-btn2">
    </form>
      </div>
<script>
    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script>

