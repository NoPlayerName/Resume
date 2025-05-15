@extends('auth.layout.head')
@section('container')

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">
                                        <form id="register" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="fullname" class="form-control" id="inputFirstName" type="text"
                                                            placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Full name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="email" class="form-control" id="inputEmail" type="email"
                                                            placeholder="name@example.com" />
                                                        <label for="inputEmail">Email address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control" id="inputPassword" type="password"
                                                            placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0 ">
                                                <div class="d-grid gap-2 col-6 mx-auto"><button type="submit"
                                                        class="btn btn-primary btn-block">Create
                                                        Account</button> </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </body>
    @push('scripts')
        <script>

            $(document).ready(function () {
                $('#register').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('register.store') }}",
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.status === 201) {
                                toastr.success(response.message);
                                setTimeout(function () {
                                    window.location.href = "{{ route('login') }}";
                                }, 3000);
                            } else {
                                toastr.error('Registeration failed');
                            }
                        },
                        error: function (xhr) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                toastr.error(value[0]);
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
