<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/restaurant.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar-c">
        <img src="{{ asset('assets/images/placeholder.png') }}" id="nav-logo"><label id="company-name">NAME</label>
        <form class="select-form" method="GET">
            <input type="submit" value="SEARCH" id="submit1-btn">
            <select id="city" name="city" placeholder="Select your city:">
                <option value="" disabled selected>Select your city</option>
                <option value="Deçan">Deçan</option>
                <option value="Dragash">Dragash</option>
                <option value="Drenas">Drenas</option>
                <option value="Ferizaj">Ferizaj</option>
                <option value="Fushë Kosovë">Fushë Kosovë</option>
                <option value="Gjakovë">Gjakovë</option>
                <option value="Gjilan">Gjilan</option>
                <option value="Istog">Istog</option>
                <option value="Kaçanik">Kaçanik</option>
                <option value="Kamenicë">Kamenicë</option>
                <option value="Klinë">Klinë</option>
                <option value="Lipjan">Lipjan</option>
                <option value="Malishevë">Malishevë</option>
                <option value="Mitrovicë">Mitrovicë</option>
                <option value="Obiliq">Obiliq</option>
                <option value="Pejë">Pejë</option>
                <option value="Podujevë">Podujevë</option>
                <option value="Prishtinë">Prishtinë</option>
                <option value="Prizren">Prizren</option>
                <option value="Rahovec">Rahovec</option>
                <option value="Skenderaj">Skenderaj</option>
                <option value="Suharekë">Suharekë</option>
                <option value="Shtërpcë">Shtërpcë</option>
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
        <form class="select-form2" method="GET">
            <select id="city2" name="city" placeholder="Select your city:">
                <option value="" disabled selected>Select your city</option>
                <option value="Deçan">Deçan</option>
                <option value="Dragash">Dragash</option>
                <option value="Drenas">Drenas</option>
                <option value="Ferizaj">Ferizaj</option>
                <option value="Fushë Kosovë">Fushë Kosovë</option>
                <option value="Gjakovë">Gjakovë</option>
                <option value="Gjilan">Gjilan</option>
                <option value="Istog">Istog</option>
                <option value="Kaçanik">Kaçanik</option>
                <option value="Kamenicë">Kamenicë</option>
                <option value="Klinë">Klinë</option>
                <option value="Lipjan">Lipjan</option>
                <option value="Malishevë">Malishevë</option>
                <option value="Mitrovicë">Mitrovicë</option>
                <option value="Obiliq">Obiliq</option>
                <option value="Pejë">Pejë</option>
                <option value="Podujevë">Podujevë</option>
                <option value="Prishtinë">Prishtinë</option>
                <option value="Prizren">Prizren</option>
                <option value="Rahovec">Rahovec</option>
                <option value="Skenderaj">Skenderaj</option>
                <option value="Suharekë">Suharekë</option>
                <option value="Shtërpcë">Shtërpcë</option>
                <option value="Shtime">Shtime</option>
                <option value="Viti">Viti</option>
                <option value="Vushtrri">Vushtrri</option>
            </select>
            <input type="submit" value="SEARCH" id="submit1-btn2">
        </form>
          </div>


        <div class="content-c">
            <div class="top-c">
                <img src="{{ asset('assets/images/add-cart.png') }}" class="add-cart-c"  onclick="toggleSidebar2()" id="toggleButton">
            </div>
            <div class="float">

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var sidebar2 = document.getElementById('sidebar2');
                    var toggleButton = document.getElementById('toggleButton');

                    function closeSidebar2() {
                        if (sidebar2.style.right === '0px') {
                            sidebar2.style.right = '-380px';
                            toggleButton.style.display = 'block';
                        }
                    }

                    function toggleSidebar2() {
                        if (sidebar2.style.right === '0px') {
                            // If the sidebar is open, close it and hide the image
                            sidebar2.style.right = '-380px';
                            toggleButton.style.display = 'block';
                        } else {
                            // If the sidebar is closed, open it and show the image
                            sidebar2.style.right = '0px';
                            toggleButton.style.display = 'none';
                        }
                    }

                    // Attach the event listener to the image
                    if (toggleButton) {
                        toggleButton.onclick = toggleSidebar2;
                    }

                    // Add click event listener to the document body
                    document.body.addEventListener('click', function(event) {
                        // Check if the click is outside the sidebar and the toggleButton
                        if (!sidebar2.contains(event.target) && event.target !== toggleButton) {
                            closeSidebar2();
                        }
                    });
                });
    </script>
    <div id="sidebar2"class="sidebar2">
        <p class="cart-s">YOUR CART</p>
        <div class="cart-items-s">
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>    
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>
            <div class="cart-item-s">
                <div class="cart-item-name-s height-c2s">Item name</div>
                <div class="cart-item-price-s height-c2s">1.00€</div>
                <div class="remove-item-s">+</div>
            </div>          
            
        </div>
            <div class="green-line">

            </div>
            <span class="total-text-s">
                Total:
            </span>
            <span class="total-price-s">
                15.00€
            </span>
        <button class="add-item-s">ORDER NOW</button>
    </div>

            <div class="restaurant-c">
                <span class="restaurant-name">restaurant</span><br>
                <span class="shipping">2.00€</span>
                <img src="{{ asset('assets/images/delivery-man.png') }}" class="shipping-icon">
            </div>
            <div class="search-c">
                <form>
                    <input type="search" id="search" placeholder="Search..." class="search">
                </form>
            </div>


            <div class="items-c">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 margins">
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>  
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>
                    <div class="height-c">
                        <label class="item-name">Item name</label>
                        <img class="item-image" src="{{ asset('assets/images/burger2.png') }}" alt="Item image">
                        <label class="item-price">1.00€</label>
                        <button class="add-item">ADD TO CART</button>
                    </div>    
                  </div>
            </div>
        </div>
        <div class="float-2">
            <div class="cart-c">
                <p class="cart-p">YOUR CART</p>
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name2</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name3</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name4</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name5</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name6</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name7</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name8</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name9</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-name height-c2">Item name10</div>
                        <div class="cart-item-price height-c2">1.00€</div>
                        <div class="remove-item">-</div>
                    </div>
                </div>

                <div class="green-line">

                </div>
                <span class="total-text">
                    TOTAL:
                </span>
                <span class="total-price">
                    15.00€
                </span>
                <button class="add-item" style="width: 50%;">ORDER NOW</button>
            </div>            
        </div>
        </div>

        <p></p>
        <div class="footer-margin">
            
        </div>
        <div style="height: 68px; position: relative; overflow: hidden;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 60" preserveAspectRatio="none" style="width: 100%; position: absolute; top: 0; pointer-events: none; height: 72px; border-bottom: 2px solid #4F4F4F">
            <path d="M0,30 Q150,10 300,30 Q450,50 600,30 Q750,10 900,30 Q1050,50 1200,30 V60 H0Z" class="shape-fill" fill="#4F4F4F"></path>
        </svg>
      </div>
      <div class="footer-custom">
      <div class="icons-c">
      <a href=""><img src="{{ asset('assets/images/instagram.png') }}" class="footer-icon" alt="instagram"></a>
      <a href=""><img src="{{ asset('assets/images/facebook.png') }}" class="footer-icon" alt="facebook"></a>
      <a href=""><img src="{{ asset('assets/images/twitter.png') }}" class="footer-icon" alt="twitter"></a>
      <a href=""><img src="{{ asset('assets/images/whatsapp.png') }}" class="footer-icon" alt="whatsapp"></a>
      </div>
      <div class="devide"></div>
      <div class="Dropdown-c">
      <select id="language" name="language">
         <option value="English">English</option>
        <option value="Shqip">Shqip</option>
    </select>
    </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</html>