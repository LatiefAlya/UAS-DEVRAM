<div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $pinjam->nik ?? '') }}">
</div>
<div class="form-group">
    <label for="nama_peminjam">Nama Peminjam</label>
    <input type="text" name="nama_peminjam" class="form-control"
        value="{{ old('nama_peminjam', $pinjam->nama_peminjam ?? '') }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value="{{ old('email', $pinjam->email ?? '') }}">
</div>
<div class="form-group">
    <label for="telepon">telepon</label>
    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $pinjam->telepon ?? '') }}">
</div>
<div class="form-group">
    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" class="form-control"
        value="{{ old('judul_buku', $pinjam->judul_buku ?? '') }}">
</div>
<div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $pinjam->isbn ?? '') }}">
</div>
<div class="form-group">
    <label for="tanggal_peminjaman">Tgl Peminjaman</label>
    <input type="text" name="tanggal_peminjaman" class="form-control"
        value="{{ old('tanggal_peminjaman', $pinjam->tanggal_peminjaman ?? '') }}">
</div>
<div class="form-group">
    <label for="tanggal_pengembalian">Tgl Pengembalian</label>
    <input type="text" name="tanggal_pengembalian" class="form-control"
        value="{{ old('tanggal_pengembalian', $pinjam->tanggal_pengembalian ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
