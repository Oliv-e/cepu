@section('footer')
<div class="mt-5" style="min-height: 15vh;">
    <div class="text-white text-center openSans fs-4">
        
        @if (Auth::guest())
            <a href="" class="m-3">HUBUNGI KAMI</a>
            <a href="" class="m-3">KETENTUAN LAYANAN</a>
            <a href="" class="m-3">TENTANG KAMI</a>
        @else
            <a href="" class="m-3">BERANDA</a>
            <a href="" class="m-3">HUBUNGI KAMI</a>
            <a href="" class="m-3">KETENTUAN LAYANAN</a>
            <a href="" class="m-3">TENTANG KAMI</a>
        @endif
    </div>
    <p class="fs-5 m-3 text-center text-white">Copyright 2021. CEPU Official - Made by Olivers. </p>
</div>
@endsection