<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/order.css') }}">
    <title>Restaurant</title>
</head>
<body>
    @include('partials.navbar3')
          <div class="top-c">

          </div>
          <div class="content-c">
            <div class="content-header">
                <label class="restaurant">Restaurant</label>
                <img src="{{ asset('assets/images/delivery-man.png') }}" class="shipping-icon">
                <label class="shipping-price">2.00€</label>
            </div>
            <p class="order-header">YOUR ORDER</p>
            <form method="post" class="order-form" id="orderForm" action="https://formspree.io/f/xpzvpdkr">
            <div class="order-c">


                <ul id="order-items2"></ul>
            </div>


            <div class="green-line"></div>
            <div class="total-c">
                <div class="shipping-amount">
                    <label class="shipping-price-o">Shipping:</label>
                    <label class="shipping-price-a">€2.00</label><br>
                </div>
                <div class="total-amount">
                    <label class="total-o">TOTAL:</label>
                    <span class="total-price" id="total-price">€
                        <span id="total">
                            0
                        </span>
                    </span>
                </div>
            </div>
            
            <input type="text" placeholder="Enter your location" class="location"><br>
                <input type="number" placeholder="Enter your phone number" class="phone-nr">
            <div class="center-items">
                <input type="submit" value="ORDER NOW" class="submit-order" onclick="submitOrder()" style="cursor: pointer">
            </div>
            </form>
          </div>
          <div id="orderConfirmationAlert" class="order-alert">
            <p class="order-alert-p">Order confirmed!</p>
            <div class="order-container">
            <img src="{{ asset('assets/images/verified.png') }}" class="order-alert-img">
            </div>
        </div>
        <div id="checkInputsAlert" class="input-alert">
            <p class="input-alert-p">Please fill out all the inputs!</p>
            <div class="order-container">
            <img src="{{ asset('assets/images/input.png') }}" class="input-alert-img">
            </div>
        </div>
        
            <script>
                const cartData = JSON.parse(localStorage.getItem('cartData')) || [];

                function displayOrderItems() {
                    const orderItemsElement = document.getElementById('order-items2');

                    cartData.forEach(item => {
                    const listItem = document.createElement('li');

                    const itemContainer = document.createElement('div');
                    itemContainer.classList.add('cart-item-container');

                    const nameDiv = document.createElement('div');
                    nameDiv.classList.add('item-name2');
                    nameDiv.textContent = item.name;
                    itemContainer.appendChild(nameDiv);

                    const priceDiv = document.createElement('div');
                    priceDiv.classList.add('item-price2');
                    priceDiv.textContent = `€${item.price.toFixed(2)}`;
                    itemContainer.appendChild(priceDiv);

                    listItem.appendChild(itemContainer);
                    orderItemsElement.appendChild(listItem);
                    });
                }

                function confirmOrder() {
                    alert('Order confirmed!');

                    localStorage.removeItem('cartData');

                    window.location.href = "{{ route('order') }}";
                }

                function updateTotal() {
                    const totalSpan = document.getElementById('total-price');
                    const shippingCost = 2.00;

                    const totalPrice = cartData.reduce((acc, item) => acc + item.price, 0);

                    const totalPriceWithShipping = totalPrice + shippingCost;

                    totalSpan.textContent = `€${totalPriceWithShipping.toFixed(2)}`;
                }

                window.onload = function () {
                    displayOrderItems();
                    updateTotal();
                };

                document.getElementById('orderForm').addEventListener('submit', function (event) {
                    event.preventDefault();
                    submitOrder();
                    displayOrderItems();
                });

function validateInputs() {
    const locationInput = document.querySelector('.location').value;
    const phoneInput = document.querySelector('.phone-nr').value;

    // Check if location and phone number inputs are empty
    if (!locationInput || !phoneInput) {
        document.getElementById('checkInputsAlert').style.display = 'block';
        setTimeout(function() {
            document.getElementById('checkInputsAlert').style.display = 'none';
        }, 2000); // Hide after 3 seconds
        return false;
    }
    return true;
}

function submitOrder() {
    if (!validateInputs()) {
        return; // Don't proceed if inputs are empty
    }

    const form = document.getElementById('orderForm');
    const location = form.querySelector('.location').value;
    const phone_number = form.querySelector('.phone-nr').value;

    // Create a FormData object to send form data
    const formData = new FormData(form);
    
    // Append cartData, location, and phone_number to FormData
    formData.append('cart_data', JSON.stringify(cartData));
    formData.append('location', location);
    formData.append('phone_number', phone_number);

    // Send the form data to Formspree endpoint
    fetch('https://formspree.io/f/xpzvpdkr', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        },
    })
    .then(response => response.json())
    .then(data => {
        // Show the order confirmation alert
        document.getElementById('orderConfirmationAlert').style.display = 'block';
        // Assuming you want to clear the cart after successful submission
        localStorage.removeItem('cartData');
        // Display cart items again after form submission
        displayOrderItems();
        updateTotal();
        // Redirect back to the main page after a short delay
        setTimeout(() => {
            window.location.href = "{{ route('order') }}";
        }, 2000); // Adjust the delay as needed
    })
    .catch(error => {
        console.error('Error submitting order:', error);
        alert('There was an error submitting your order. Please try again.');
    });
}



            </script>
                
          
          @include('partials.footer')
        </div>
        </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</html>