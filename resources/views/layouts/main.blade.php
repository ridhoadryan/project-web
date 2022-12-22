<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Title -->
  <title>
    @if(!Route::is('homepage'))
      Informatika | {{$title}}
    @else
      Informatika
    @endif
  </title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('partials.assets.stylesheet')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('partials.header')

  <!-- ======= Hero Section ======= -->
  @if (Route::is('homepage'))
    @include('partials.hero')
  @endif

  <main id="main">
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col" data-aos="fade-right">
            @yield('content')
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  @include('partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Scripts -->
  @include('partials.assets.scripts')

</body>

</html>