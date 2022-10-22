@include('css')

@include('nav')

<div class="container">

    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    @endif

    <div class="card">
        <div class="card-header">
            <h3>Add a Product</h3>
        </div>
        <div class="card-body">
            <form method="post" action="/add_product" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mt-1">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group mt-1">
                    <label>Image</label>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="form-group mt-1">
                    <label>Category:</label>
                    <br>
                    <select name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="textarea" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>


@include('js')
