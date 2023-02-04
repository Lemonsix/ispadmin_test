@props(['orderDetails'])
<table class="table table-striped table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Material</th>
            <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orderDetails as $orderDetail)
            <tr>
                <td>
                    <a href="">{{ $orderDetail->id }}</a>
                </td>
                <td>{{ $orderDetail->material->name }}</td>
                <td>{{ $orderDetail->qty }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

