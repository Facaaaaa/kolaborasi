@section('form')
@endsection


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    

<link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

        .form-signin {
        max-width: 330px;
        padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>

  </head>


<body>
  @include('part.navbar')
    <main class="form-signin w-80 m-auto">
        <form action="/dashboard/obat" method="post">
        @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
        <input type="text" name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="judul_berita" required value="{{old('judul_berita')}}">
        <label for="judul_berita">Judul Berita</label>
        @error('judul_berita')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
    <div class="floating">
        <label for="pembuat_obat">Pembuat Berita</label>
        <input type="text" name="pembuat_berita" class="form-control @error('pembuat_berita') is-invalid @enderror" id="pembuat_berita" placeholder="pembuat_berita" required value="{{old('pembuat_berita')}}">
        @error('pembuat_berita')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
    <div class="floating">
        <label for="isi">Isi</label>
        <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror" id="isi" placeholder="isi" required value="{{old('isi')}}">
        @error('isi')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
    </div>
    <div class="floating">
        <label for="tanggal_terbit">Tanggal Terbit</label>
      <input type="date" name="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" id="tanggal_terbit" placeholder="tanggal_terbit" required value="{{old('tanggal_terbit')}}">
      @error('tanggal_terbit')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>
    
   


    <button class="btn btn-primary w-100 py-2" type="submit">CREATE</button>
    
  </form>
  
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
