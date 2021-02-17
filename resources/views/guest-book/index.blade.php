<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Koding Bareng Petra">
    <title>Buku Tamu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
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
    </style>
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Buku Tamu</h2>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" method="POST">
          @csrf <!-- {{ csrf_field() }} -->
          <div class="row g-3">
            <div class="col-12">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required/>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder=""/>
            </div>

            <div class="col-12">
              <label for="comment" class="form-label">Komentar</label>
              <textarea type="text" class="form-control" name="comment" id="comment" placeholder="Komentar" required></textarea>
            </div>
          </div>
          <br />
          <button class="w-100 btn btn-primary btn-lg" type="submit">Tulis Komentar</button>
        </form>
        <hr />
        <div> 
          <h3>Komentar</h3>
        @foreach ($posts as $post)
          <div>
            <div><strong>{{ $post->name }}</strong></div>
            <div><p>{{ $post->comment }}</p></div>
          </div>
        @endforeach
        </div>
      </div>
      
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Koding Bareng Petra</p>
  </footer>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


      <script src="form-validation.js"></script>
  </body>
</html>
