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
            <button type="button" id="add-skills" class="btn btn-primary btn-sm">Tambah Skill</button>
        </div>
        <button type="submit" id="btn-action" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>
