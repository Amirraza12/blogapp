<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

    <h1>Add Product</h1>

    <form action="/add-product" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Product Name">
        <br><br>

        <input type="number" name="price" placeholder="Price">
        <br><br>

        <input type="number" name="qty" placeholder="Quantity">
        <br><br>

        <button type="submit">Add Product</button>

    </form>

</body>
</html>