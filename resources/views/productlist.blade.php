<h2>All Products</h2>

@if(session('success')) <p style="color:green">
{{ session('success') }} </p>
@endif

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Action</th>
</tr>

@foreach($products as $product)

<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->qty }}</td>

    <td>
        <a href="/products/edit/{{ $product->id }}">
            Edit
        </a>

        |

        <a href="/products/delete/{{ $product->id }}">
            Delete
        </a>
    </td>
</tr>

@endforeach


</table>
