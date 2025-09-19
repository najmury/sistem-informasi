<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Form Edit Buku</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dataBuku') }}">Data buku</a></li>
                        <li class="breadcrumb-item active">Form edit buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i> Form Edit Buku</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" value="BK001">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" value="Algoritma Dasar">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" value="Andi Wijaya">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" value="Informatika Press">
                        </div>
                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="number" class="form-control" value="2022">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" value="TI">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" value="10">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index_buku.html" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</x-layoutAdmin>
