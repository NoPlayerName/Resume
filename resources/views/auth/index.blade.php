@extends('auth.layout.head')
@section('container')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form id="login" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input name="email" class="form-control" id="inputEmail"/>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="password" class="form-control" id="inputPassword" type="password"
                                                />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary" href="index.html">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @push('scripts')
        <script>

            $(document).ready(function () {
                $('#login').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('login.sign') }}",
                        data: $(this).serialize(),
                        success: function (response) {
                            toastr.success(response.message);
                                setTimeout(function () {
                                    window.location.href = response.data.redirect_url;
                                }, 3000);
                            // if (response.status === 200) {

                            // } else {
                            //     toastr.error(response.message);
                            // }
                        },
                        error: function (xhr) {
                            if (xhr.responseJSON && Array.isArray(xhr.responseJSON.errors)) {
                                xhr.responseJSON.errors.forEach(function (err) {
                                    toastr.error(err.detail || err.title || 'Terjadi kesalahan.');
                                });
                            } else if (xhr.responseJSON && typeof xhr.responseJSON.errors === 'object') {
                                // Untuk error validasi Laravel
                                $.each(xhr.responseJSON.errors, function (key, value) {
                                    toastr.error(value[0]);
                                });
                            } else {
                                toastr.error('Terjadi kesalahan yang tidak diketahui.');
                            }
                        }
                    });
                });
            });
        </script>
    @endpush
    @endsection
