@extends('index')
@section('content')
<style>
    body {
        overflow-y: hidden;
    }
</style>
<div class="text-center text-white pt-5">
    <h1 class="fs-1">Layanan Aspirasi dan Pengaduan Online untuk Masyarakat</h1>
    <p class="fs-4 openSans">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
</div>
<div class="card mx-auto mt-5 rounded-0" style="width: 60%;">
  <div class="card-body">
    <h5 class="card-title fs-3 bg-dark text-light p-3">Silahkan Login Terlebih Dahulu</h5>
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="mb-2"> Email :</label>
            <input type="text" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Ketik Email Anda" id="email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password" class="mb-2"> Password :</label>
            <input type="password" name="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Ketik Password Anda" id="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-check float-start mt-1">
                <input type="checkbox" id="remember {{ old('remember') ? 'checked' : '' }}" name="remember" class="form-check-input">
                <label for="remember"> Remember me? </label>
            </div>
            <div class="float-end">
                @if (Route::has('password.request'))
                    <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#register">Register</a>
                <button type="submit" class="btn btn-outline-dark">Login</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST" action="{{ route('register') }}">
            <div class="modal-body">
              @csrf
                <div>
                    <label for="name" class="mb-2"> Username :</label>
                    <input type="text" name="name" class="form-control mb-4 @error('name') is-invalid @enderror" placeholder="Ketik Username Anda" id="name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email" class="mb-2"> Email :</label>
                    <input type="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Ketik Email Anda" id="email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password" class="mb-2"> Password :</label>
                    <input type="password" name="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Ketik Password Anda" id="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password" class="mb-2"> Ketik Ulang Password :</label>
                    <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="Ketik Ulang Password Anda" id="password-confirm" required autocomplete="new-password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Daftar</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
@extends('front/footer')