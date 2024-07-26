<div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $pengembalian->nik ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengembalian->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" class="form-control"
        value="{{ old('judul_buku', $pengembalian->judul_buku ?? '') }}">
</div>
<div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $pengembalian->isbn ?? '') }}">
</div>
<div class="form-group">
    <label for="tanggal_pinjam">Tanggal Pinjam</label>
    <input type="text" name="tanggal_pinjam" class="form-control"
        value="{{ old('tanggal_pinjam', $pengembalian->tanggal_pinjam ?? '') }}">
</div>
<div class="form-group">
    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
    <input type="text" name="tanggal_pengembalian" class="form-control"
        value="{{ old('tanggal_pengembalian', $pengembalian->tanggal_pengembalian ?? '') }}">
</div>
<div class="form-group">
    <label for="kondisi_buku">Kondisi Buku</label>
    <input type="text" name="kondisi_buku" class="form-control"
        value="{{ old('kondisi_buku', $pengembalian->kondisi_buku ?? '') }}">
</div>
<div class="form-group">
    <label for="denda">Denda</label>
    <input type="text" name="denda" class="form-control" value="{{ old('denda', $pengembalian->denda ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
