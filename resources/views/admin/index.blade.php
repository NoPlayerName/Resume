@extends('layout_admin.head')
@extends('component.sidebar')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome to {{$user->name}}</li>
                </ol>

            </div>
        </main>
    </div>
@endsection
