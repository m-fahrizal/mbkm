<x-guest-layout>
    <!-- Session Status -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <br><br><br><br>
                                    <div class="text-center">
                                        <img class="logo mx-auto" src="img/upn.png" alt=""><br><br>
                                        <h1 class="text-xl">MBKM Fakultas Ilmu Komputer</h1>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST" class="admin">
                                        @csrf
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="usernameHelp"
                                                placeholder="Username" value="{{ Session::get('username') }}">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <input name="submit" type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-guest-layout>
