<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/addItemForm.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Add New Item</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('addItem') }}" method="post" enctype="multipart/form-data">
                @csrf
        
                <label for="item_name">Item Name:</label>
                <input type="text" name="item_name" id="item_name" required>
        
                <label for="item_price">Item Price:</label>
                <input type="text" name="item_price" id="item_price" required>
        
                <label for="item_picture">Item Picture:</label>
                <input type="file" name="item_picture" id="item_picture" required accept="image/*">
        
                <!-- Add other form fields as needed -->
        
                <button type="submit">Add Item</button>
            </form>
        </div>
    </div>
</body>
</html>