@include('css')


@include('nav')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Reservations
        </div>
        <div class="carb-body">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Client</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $r)
                    <tr>
                        <th scope="row"><img src="{{$r->product->img}}" alt="" style="width: 5rem; height: 5rem"></th>
                        <td>{{$r->product->name}}</td>
                        <td>{{$r->product->price}}</td>
                        <td>{{$r->qte}}</td>
                        <td>{{$r->price_total}}</td>
                        <td>{{$r->client}}</td>
                        <td>{{$r->tel}}</td>
                        <td>{{$r->adress}}</td>
                        <td>{{$r->created_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>

@include('js')
