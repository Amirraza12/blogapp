<h2>Edit Product</h2>

<form action="/products/update/{{ $product->id }}" method="POST">
    @csrf
<input type="text" name="name" value="{{ $product->name }}">
<br><br>

<input type="number" name="price" value="{{ $product->price }}">
<br><br>

<input type="number" name="qty" value="{{ $product->qty }}">
<br><br>

<button type="submit">Update Product</button>

</form>
