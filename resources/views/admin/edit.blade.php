<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit item</h2>
    <form action="{{ route('admin.update', $product->id) }}" method="post">
        @csrf
        @method('put') <!-- Use 'put' method for updates -->
    
        <!-- Form fields pre-filled with existing values -->
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="text" name="description" value="{{ $product->price }}">
        <!-- Other form fields... -->
    
        <button type="submit">Update Product</button>
    </form>
</body>
</html>