@section('content')
<div class="text-center text-white pt-5">
    <h1 class="fs-1">Layanan Aspirasi dan Pengaduan Online untuk Masyarakat</h1>
    <p class="fs-4 openSans">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
</div>
<div class="card mx-auto mt-5 rounded-0" style="width: 60%;">
  <div class="card-body">
    <h5 class="card-title fs-3 bg-dark text-light p-3">Sampaikan Laporan Anda</h5>
    <form method="POST" action="/success">
        @csrf
        <label for="klasifikasi" class="form-label"></label>
            <select id="klasifikasi" name="klasifikasi" class="form-select">
                <option>Pilih Klasifikasi</option>
                <option value="pengaduan">Pengaduan</option>
                <option value="informasi">Permintaan Informasi</option>
            </select>
            <br>
            <p class="openSans fw-bold">Wajib memilih salah satu klasifikasi. <span style="color: red;">*</span></p>
        <div class="openSans mt-4">
            <p class="fs-5 fw-bold">Perhatikan cara Menyampaikan Pengaduan yang Baik dan Benar <a href="" class="text-dark">Klik disini</a>.</p>
        </div>
        <div>
            <label for="sender"></label>
            <input type="text" name="sender" class="form-control mb-3" value="{{ Auth::user()->id }}_{{ Auth::user()->name }}" id="sender">

            <label for="title"></label>
            <input type="text" name="title" class="form-control mb-3" placeholder="Ketik Judul Laporan Anda" id="title">

            <label for="content"></label>
            <textarea class="form-control mb-3" name="content" placeholder="Ketik Isi Laporan Anda" id="content"></textarea>

            <div class="row">
                <div class="col">
                    <label for="time"></label>
                    <input type="time" name="time" id="time" placeholder="Pilih Waktu Kejadian" class="col-2 form-control mb-3">
                </div>
                <div class="col">
                    <label for="date"></label>
                    <input type="date" name="date" id="date" placeholder="Pilih Tanggal Kejadian" class="form-control mb-3">
                </div>
            </div>
            <label for="location"></label>
            <input type="text" name="location" id="location" placeholder="Ketik Lokasi Kejadian" class="form-control mb-3">
            
            <div class="mb-3">
                <label for="category" class="form-label"></label>
                <select id="category" name="category" class="form-select">
                    <option>Pilih Kategori</option>
                    <option value="pengaduan">Pengaduan</option>
                    <option value="informasi">Permintaan Informasi</Permintaan Iption>
                    <option value="ekonomi_keuangan">Ekonomi dan Keuangan</option>
                    <option value="virus">Virus</option>
                    <option value="budaya">Budaya</option>
                </select>
            </div>

            <label for="file"></label>
            <input type="file" name="file" id="file" class="form-control mb-3">
            <div class="form-check float-start mt-1 col-9">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input">
                <label for="checkbox"> Anonim (Jika anda meminta Informasi dan mencentang anonim, maka anda tidak dapat menerima informasi tersebut). </label>
            </div>
            <button href="" class="btn btn-outline-dark float-end">LAPOR!</button>
        </div>
    </form>
  </div>
</div>
@endsection