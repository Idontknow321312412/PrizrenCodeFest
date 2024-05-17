<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Item</title>
</head>
<body>
    <div class="container">
        <h2>Delete Item</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('delete', ['product_id' => $product->id]) }}" method="post">
                @csrf
                @method('DELETE')
                
                <button type="submit">Delete</button>
            </form>
            
        </div>
    </div>
</body>
</html>
