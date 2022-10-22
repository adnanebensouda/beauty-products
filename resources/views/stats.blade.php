@include('css')


@include('nav')
@auth()
    <div class="row">
        <div class="col-sm-12 mt-5">
            <ul>
                <li>
                    <a href="/mylogin" class="btn btn-info">Go back to Reservations</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-12">
            <div class="card mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">View Count</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)
                        <tr>
                            <th scope="row"><img src="{{$p->img}}" alt="" style="width: 5rem; height: 3rem">
                            </th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->view_count}}</td>
                            <td>
                                <a href="/products/delete/{{$p->id}}" class="btn btn-info">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>

@endauth

@include('js')
