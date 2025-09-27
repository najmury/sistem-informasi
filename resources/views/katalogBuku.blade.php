<x-layoutAdmin>
    <section class="content-header">
        <div class="container-fluid">
            <h4>Katalog Buku</h4>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Search Form -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <form action="{{ route('katalogBuku') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari judul, penulis, atau penerbit..." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                @foreach($buku as $b)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title">{{ $b->judul }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                @if($b->gambar)
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('storage/' . $b->gambar) }}" alt="{{ $b->judul }}"
                                            class="img-fluid" style="max-height: 200px; object-fit: cover;">
                                    </div>
                                @else
                                    <div class="text-center mb-3 text-muted">
                                        <i class="fas fa-book fa-5x"></i>
                                    </div>
                                @endif
                                <strong>Penulis:</strong> {{ $b->penulis }}<br>
                                <strong>Penerbit:</strong> {{ $b->penerbit }}<br>
                                <strong>Tahun Terbit:</strong> {{ $b->tahun_terbit }}<br>
                                <strong>Stok:</strong>
                                <span class="badge {{ $b->stok > 0 ? 'badge-success' : 'badge-danger' }}">
                                    {{ $b->stok }} buku
                                </span>
                            </p>
                        </div>
                        <div class="card-footer">
                            @if($b->stok > 0)
                                <button class="btn btn-primary btn-sm" onclick="pinjamBuku({{ $b->id }})">
                                    <i class="fas fa-book"></i> Pinjam Buku
                                </button>
                            @else
                                <button class="btn btn-secondary btn-sm" disabled>
                                    <i class="fas fa-times"></i> Stok Habis
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($buku->hasPages())
            <div class="row mt-3">
                <div class="col-md-12">
                    {{ $buku->links() }}
                </div>
            </div>
            @endif

            @if($buku->isEmpty())
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle"></i> Tidak ada buku yang tersedia.
            </div>
            @endif
        </div>
    </section>

    <script>
        function pinjamBuku(bukuId) {
            Swal.fire({
                title: 'Pinjam Buku?',
                text: "Anda yakin ingin meminjam buku ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Pinjam!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Tambahkan logika peminjaman buku di sini
                    Swal.fire(
                        'Berhasil!',
                        'Buku berhasil dipinjam.',
                        'success'
                    )
                }
            })
        }
    </script>
</x-layoutAdmin>
