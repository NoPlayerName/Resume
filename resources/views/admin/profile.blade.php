@extends('layout_admin.head')
@extends('component.sidebar')
@section('main')
        <main>
            <div class="container-fluid px-4">
                <div class="card shadow-lg mt-4 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="font-weight-light ">{{ @$title }}</h3>
                        </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <img src="..." class="img-thumbnail" alt="...">
                                        <div class="form-grup mb-3 mb-md-0">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input class="form-control form-control-sm" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
