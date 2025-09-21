<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h3>Dashboard Anggota</h3>
            <p>Halo, {{ auth()->user()->name }}! Berikut ringkasan pinjamanmu.</p>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Buku Dipinjam</p>
                        </div>
                        <div class="icon"><i class="fas fa-book-reader"></i></div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Belum Dikembalikan</p>
                        </div>
                        <div class="icon"><i class="fas fa-clock"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutAdmin>
