@extends('layout_admin.head')
@extends('component.sidebar')
@section('main')
        <main>
            <div class="container-fluid px-4">
                <div class="card mt-4">
                    <div class="card-header">{{ @$title }}</div>
                    <div class="card-body">Primary Card</div>
                </div>
            </div>
        </main>
@endsection
