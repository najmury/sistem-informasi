<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Form Tambah Buku</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dataBuku') }}">Data buku</a></li>
                        <li class="breadcrumb-item active">Form tambah buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Buku</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" placeholder="BK001">
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" placeholder="Masukkan judul buku">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" placeholder="Masukkan penulis">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" placeholder="Masukkan penerbit">
                        </div>
                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="number" class="form-control" placeholder="2023">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukkan kategori">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" placeholder="10">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                        <a href="index.html" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </section>
</x-layoutAdmin>
