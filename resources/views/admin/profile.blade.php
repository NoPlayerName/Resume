@extends('layout admin.head')
@extends('component.sidebar')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mt-4">
                        <img class="mb-4 img-error" src="{{ url('assets/img/error-404-monochrome.svg') }}" />
                        <p class="lead">This requested URL was not found on this server.</p>
                        <a href="index.html">
                            <i class="fas fa-arrow-left me-1"></i>
                            Return to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Muhammad Ruhiyat &copy; {{ date('Y') }}</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
