<div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $member->nik ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $member->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $member->alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value="{{ old('email', $member->email ?? '') }}">
</div>
<div class="form-group">
    <label for="telepon">Telepon</label>
    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $member->telepon ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
