<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Data Buku</h4>
            <a href="{{ route('createDataBuku') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Buku
            </a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Buku</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BK001</td>
                                <td>Algoritma Dasar</td>
                                <td>Andi Wijaya</td>
                                <td>Informatika Press</td>
                                <td>2022</td>
                                <td>TI</td>
                                <td>10</td>
                                <td>
                                    <a href="{{ route('editDataBuku') }}" class="btn btn-sm btn-warning"><i
                                            class="fas fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>BK002</td>
                                <td>Basis Data Lanjut</td>
                                <td>Budi Santoso</td>
                                <td>Gramedia</td>
                                <td>2021</td>
                                <td>Database</td>
                                <td>8</td>
                                <td>
                                    <a href="{{ route('editDataBuku') }}" class="btn btn-sm btn-warning"><i
                                            class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="modalDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {{-- <form action=""> --}}
                            <div class="modal-header bg-danger">
                                <h4 class="modal-title">Konfirmasi Hapus</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus <b>Buku: Algoritma Dasar</b>?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layoutAdmin>
