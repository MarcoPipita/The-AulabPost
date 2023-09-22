<x-layout>
    <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 authSfondo p-5 ms-4">
                <h1>Registrati</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif                
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" value="{{old('name')}}"name="name">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" value="{{old('password_confirmation')}}" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-warning">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>