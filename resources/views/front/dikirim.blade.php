@section('dikirim')
<div style="width: 60%; min-height: 65vh;" class="ms-auto me-auto p-5">
    <div class="card">
    <div class="card-header">
        Terima Kasih!
        Laporan anda sudah kami terima.
    </div>
    <div class="card-body">
        <h5 class="card-title">Id akun anda nomor {{ auth::user()->id  }} dengan nama {{ auth::user()->name }}.</h5>
        <p class="card-text">Terima Kasih sudah melaporkan dan memberikan dukungan kepada kami, mari kita sama-sama menjadikan negeri ini menjadi lebih baik.</p>
        <a href="/" class="btn btn-primary">Kembali</a>
    </div>
</div>

</div>
@endsection