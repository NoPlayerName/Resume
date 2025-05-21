@extends('layout_admin.head')
@include('component.sidebar')
@section('main')
        <main>
            <div class="container-fluid px-4">
                <div class="card shadow-lg mt-4 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="font-weight-light ">{{ @$title }}</h3>
                        </div>
                    <div class="card-body">
                        <div class="container">
                            <form class="row" id="profile" method="POST">
                                @csrf
                                <input type="hidden" id="profile_id" value="">
                                <div class="col-md-4 mb-3">
                                    <div class="col">
                                        <div class="form-grup mb-2">
                                            <label for="formFile" class="form-label">Foto</label>
                                            <input class="form-control form-control-sm" name="foto" type="file" id="formFile">
                                        </div>
                                        <img id="foto" src="{{ asset('storage/dummy.jpg')}}" class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="col-md-6 mt-2 ">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1">Nama</span>
                                            <input id="nama" type="text" name="name" class="form-control form-control-sm" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 ">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1">Tempat Lahir</span>
                                            <input id="tmpt_lahir" type="text" name="tmpt_lahir" class="form-control form-control-sm" placeholder="Tempat Lahir" aria-label="Tempat Lahir" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 ">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1">Tgl Lahir</span>
                                            <input id="tgl_lahir" type="date" name="tgl_lahir" class="form-control form-control-sm" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 ">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                            <input id="email" type="email" name="kontak[email]" class="form-control form-control-sm" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 ">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile"></i></span>
                                            <input id="hp" type="text" name="kontak[hp]" class="form-control form-control-sm" placeholder="No Hp" aria-label="No Hp" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div id="role-wrapper">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text" id="basic-addon1">Role</span>
                                                <input type="text" name="role[]" class="form-control form-control-sm" placeholder="Masukkan role">
                                                <button type="button" class="btn btn-sm ms-2 remove-role" data-bs-toggle="tooltip" title="Hapus"><i class="fa-solid fa-trash" style="color: #b30000;"></i></button>
                                            </div>
                                        </div>
                                        <button type="button" id="add-role" class="btn btn-primary btn-sm mt-2">Tambah Role</button>
                                    </div>
                                     <div class="col-md-12 mt-2 ">
                                        <div class="form-grup">
                                            <label for="formFile" class="form-label">About Me</label>
                                            <textarea id="ckEditor" name="about_me" class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" id="btn-action" class="btn btn-primary btn-sm mt-2">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @push('scripts')
            <script>
                $(document).ready(function () {
                      CKEDITOR.replace('ckEditor', {
                        // extraPlugins: 'justify',
                        allowedContent: true,
                        extraAllowedContent: '*[*]{*}',
                        toolbar: [
                            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
                            { name: 'editing', items: ['Find', 'Replace'] },
                            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                            { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
                            { name: 'alignment', items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                            { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
                            { name: 'colors', items: ['TextColor', 'BGColor'] },
                            { name: 'tools', items: ['Maximize'] }
                        ]
                    });

                    const syncCkEditor = () => {
                        Object.values(CKEDITOR.instances).forEach(instance => instance.updateElement());
                    };

                    const loadData = () => {
                        $.ajax({
                            type: 'GET',
                            url: "{{ route('admin.get-profile') }}",
                            success: function (response) {
                                    const data = response.data;
                                    if (data) {

                                            $('#nama').val(data.name);
                                            $('#tmpt_lahir').val(data.tmpt_lahir);
                                            $('#tgl_lahir').val(data.tgl_lahir);
                                            $('#email').val(data.kontak["email"]);
                                            $('#hp').val(data.kontak["hp"]);
                                            $('#profile_id').val(data.id);
                                            $('#ckEditor').val(data.about_me);
                                            $('#foto').attr('src', data.foto ? `${data.foto}` : '{{ asset(`storage/dummy.jpg`) }}');

                                            $('#role-wrapper').empty();

                                            data.role.forEach(function(role, index) {
                                                    const inputGroup = `
                                                        <div class="input-group mb-2">
                                                            <span class="input-group-text" id="basic-addon1">Role</span>
                                                            <input type="text" name="role[]" class="form-control form-control-sm" placeholder="Masukkan role" value="${role}">
                                                            <button type="button" class="btn btn-sm ms-2 remove-role" data-bs-toggle="tooltip" title="Hapus"><i class="fa-solid fa-trash" style="color: #b30000;"></i></button>
                                                        </div>
                                                    `;
                                                    $('#role-wrapper').append(inputGroup);
                                            });
                                    }

                            },
                            error: function (xhr) {
                                toastr.error('Terjadi kesalahan saat memuat data.');
                            }
                        });
                    };


                    $('#add-role').on('click', function () {

                        const inputGroup = `
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">Role</span>
                                <input type="text" name="role[]" class="form-control form-control-sm" placeholder="Masukkan role">
                                <button type="button" class="btn btn-sm ms-2 remove-role" data-bs-toggle="tooltip" title="Hapus"><i class="fa-solid fa-trash" style="color: #b30000;"></i></button>
                            </div>
                        `;
                        $('#role-wrapper').append(inputGroup);
                    });


                    $('#role-wrapper').on('click', '.remove-role', function () {
                        $(this).closest('.input-group').remove();
                    });


                    $('#profile').on('submit', function (e) {
                        e.preventDefault();

                        const id = $('#profile_id').val();

                        syncCkEditor();
                        let ajaxUrl = "{{ route('admin.profile.store') }}";
                        const formData = new FormData(this);
                        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                        if (id) {
                            ajaxUrl = `/admin/profile/${id}`;
                            formData.append('_method', 'PUT');
                        }

                        $.ajax({
                            type: 'POST',
                            url: ajaxUrl,
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                toastr.success(response.message);
                                loadData();
                                // setTimeout(function () {
                                //     window.location.href = response.data.redirect_url;
                                // }, 3000);
                            },
                            error: function (xhr) {
                                if (xhr.responseJSON && Array.isArray(xhr.responseJSON.errors)) {
                                    xhr.responseJSON.errors.forEach(function (err) {
                                        toastr.error(err.detail || err.title || 'Terjadi kesalahan.');
                                    });
                                } else if (xhr.responseJSON && typeof xhr.responseJSON.errors === 'object') {
                                    for (const key in xhr.responseJSON.errors) {
                                        if (xhr.responseJSON.errors.hasOwnProperty(key)) {
                                            const errorMessage = xhr.responseJSON.errors[key];
                                            toastr.error(errorMessage[0]);
                                        }
                                    }
                                } else {
                                    toastr.error('Terjadi kesalahan.');
                                }
                            }
                        });
                    });

                    loadData();

                })
            </script>
        @endpush
@endsection
