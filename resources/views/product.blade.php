<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
</head>
<body>

    <h1>Add Product</h1>

    <form action="{{ route('product.store') }}" method="POST">

        @csrf

        <!-- NAME -->
        <div>
            <label>Product Name</label><br>

            <input type="text"
                   name="name"
                   value="{{ old('name') }}">

            @error('name')
                <p style="color:red">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <br>

        <!-- PRICE -->
        <div>
            <label>Price</label><br>

            <input type="text"
                   name="price"
                   value="{{ old('price') }}">

            @error('price')
                <p style="color:red">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <br>

        <!-- QTY -->
        <div>
            <label>Quantity</label><br>

            <input type="text"
                   name="qty"
                   value="{{ old('qty') }}">

            @error('qty')
                <p style="color:red">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <br>

        <button type="submit">
            Save Product
        </button>

    </form>

</body>
</html>