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
                            <form class="row" id="skill" method="POST">
                                @csrf
                                <input type="hidden" id="profile_id" value="">
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <ul id="input-list">
                                                {{-- list ditambah dengan jquery sortable --}}
                                            </ul>
                                        </div>
                                        <button type="button" id="add-skills" class="btn btn-primary btn-sm">Tambah Role</button>
                                    </div>
                                    <button type="submit" id="btn-action" class="btn btn-primary btn-sm">Simpan</button>
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


                    const inputList = $('#input-list');

                    // Inisialisasi Sortable
                    new Sortable(inputList[0], {
                        animation: 1000,
                        handle: '.handle',
                        onEnd: updateInputNames
                    });

                    // Tambah item baru
                    $('#add-skills').on('click', function () {
                        const index = inputList.children().length;

                        const $newItem = $(`
                            <li class="input-item mb-2">
                              <div class="row g-2 align-items-center">
                                    <div class="col-auto">
                                        <span class="handle"><i class="fa-solid fa-bars"></i></span>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-sm" type="text" name="skills[${index}][name]" placeholder="Nama skill">
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-sm" type="text" name="skills[${index}][icon]" placeholder="Icon (opsional)">
                                    </div>
                                    <input type="hidden" name="skills[${index}][order]" value="${index}">
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-sm remove-btn" data-bs-toggle="tooltip" title="Hapus">
                                            <i class="fa-solid fa-trash" style="color: #b30000;"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        `);

                        inputList.append($newItem);
                    });

                    // Hapus item
                    inputList.on('click', '.remove-btn', function () {
                        $(this).closest('.input-item').remove();
                        updateInputNames();
                    });

                    // Update semua input name dan order agar konsisten
                    function updateInputNames() {
                        inputList.children('.input-item').each(function (i) {
                            $(this).find('[name$="[name]"]').attr('name', `skills[${i}][name]`);
                            $(this).find('[name$="[icon]"]').attr('name', `skills[${i}][icon]`);
                            $(this).find('[name$="[order]"]').attr('name', `skills[${i}][order]`).val(i);
                        });
                    }

                    function escapeHtml(unsafe) {
                        return unsafe
                            .replace(/&/g, "&amp;")
                            .replace(/</g, "&lt;")
                            .replace(/>/g, "&gt;")
                            .replace(/"/g, "&quot;")
                            .replace(/'/g, "&#39;");
                    }

                    const loadData = () => {
                        inputList.empty(); // Kosongkan daftar sebelum memuat ulang
                        $.ajax({
                            type: 'GET',
                            url: "{{ route('admin.get-skills') }}",
                            success: function (response) {
                                    const data = response.data;

                                            if (data) {
                                                data.forEach(function(item, index) {
                                                    const skills = item.skills; 
                                                    const skillItem = `<li class="input-item mb-2">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-auto">
                                                            <span class="handle"><i class="fa-solid fa-bars"></i></span>
                                                        </div>
                                                        <div class="col">
                                                            <input class="form-control form-control-sm" type="text" name="skills[${index}][name]" value="${skills.name}" placeholder="Nama skill">
                                                        </div>
                                                        <div class="col">
                                                            <input class="form-control form-control-sm" type="text" name="skills[${index}][icon]" value="${escapeHtml(skills.icon)}" placeholder="Icon (opsional)">
                                                           
                                                        </div>
                                                        <input type="hidden" name="skills[${index}][order]" value="${skills.order}">
                                                        <input type="hidden" name="skills[${index}][id]" value="${skills.id}">
                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-sm remove-btn" data-bs-toggle="tooltip" title="Hapus">
                                                                <i class="fa-solid fa-trash" style="color: #b30000;"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>`;

                                                inputList.append(skillItem);
                                                });
                                                
                                            }else{
                                                
                                               const Skills = `<li class="input-item mb-2">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-auto">
                                                            <span class="handle"><i class="fa-solid fa-bars"></i></span>
                                                        </div>
                                                        <div class="col">
                                                            <input class="form-control form-control-sm" type="text" name="skills[0][name]" placeholder="Nama skill">
                                                        </div>
                                                        <div class="col">
                                                            <input class="form-control form-control-sm" type="text" name="skills[0][icon]" placeholder="Icon (opsional)">
                                                        </div>
                                                        <input type="hidden" name="skills[0][order]" value="0">
                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-sm remove-btn" data-bs-toggle="tooltip" title="Hapus">
                                                                <i class="fa-solid fa-trash" style="color: #b30000;"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>`;

                                                inputList.append(Skills);
                                           
                                            }
                                    

                            },
                            error: function (xhr) {
                                toastr.error('Terjadi kesalahan saat memuat data.');
                            }
                        });
                    };



                    $('#skill').on('submit', function (e) {
                        e.preventDefault();

                        const id = $('#profile_id').val();

                        //  console.log(CKEDITOR.instances.ckEditor.getData());

                        
                        let ajaxUrl = "{{ route('admin.skills.store') }}";
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
