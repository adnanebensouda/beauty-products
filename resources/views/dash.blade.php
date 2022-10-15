@include('css')

@include('nav')

<div class=" mt-5">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50%">
            <div class="card-body">
                @if (session('user_found'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('user_found') }}
                    </div>
                @endif
                <form method="post" action="/mylogin">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" required name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

@include('js')
