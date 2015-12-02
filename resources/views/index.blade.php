<!DOCTYPE html>
<html>
<head>
	<title>PPU HMSI</title>
  <meta name="_csrf_token" value={{ csrf_token() }}>
	<link rel="stylesheet" type="text/css" href="lib/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="lib/css/styles.css">
  <link href='lib/css/mapbox.css' type="text/css" rel='stylesheet' />
</head>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper container">
        <a href="#!" class="brand-logo">PPU HMSI</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- LOGIN FORM -->
  <div class="container">
    <div class="col s12">
      <h4 class="center blue-text heading">Siapa Ketua dan Wakil Himpunanmu ?</h4>

      <div class="row">
        @foreach($candidates as $candidate)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="uploads/image/{{ $candidate->photos }}" class="circle">
              <span class="card-title blue-text">{{ $candidate->tagline }}</span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <h5>Nomor Urut {{$candidate->no_urut}}</h5>
              <p>{{ $candidate->ketua }}|{{ $candidate->wakil }}</p>
              <h5>Visi</h5>
              <p>{{ $candidate->visi}}</p>
              <h5>Misi</h5> 
              <p>{{ $candidate->misi}}</p>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Deskripsi<i class="material-icons right">more_vert</i></span>
              <div class="center">
                <a href="#" class="btn white-text pick center" candidate_id="{{ $candidate->id }}">Pick</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <footer class="page-footer">
    <div class="container"><a href="">
    </a>
    <div class="row"><a href="">
      <div class="col l6 s12">
        <h5 class="white-text">PPHU</h5>
        <p class="grey-text text-lighten-4"></p>
      </div>
    </a>
    <div class="col l3 s12">
      <h5 class="white-text">Pages</h5>
      <ul>
        <li><a href=""></a><a class="white-text" href="/">Page 1</a>
        </li>
        <li><a class="white-text" href="#">Page 2</a>
        </li>
        <li><a class="white-text" href="#">Page 3</a>
        </li>
      </ul>
    </div>
    <div class="col l3 s12">
      <h5 class="white-text">Developer Team</h5>
      <h6 class="white-text">Panda</h6>
    </div>
  </div>
</div>
<div class="footer-copyright center">
  <div class="container">
    PPHU | Made with 
    <a class="grey-text text-lighten-2" href="http://materializecss.com/">Materialize CSS</a>
  </div>
</div>
</footer>
<script type="text/javascript" src="lib/js/jquery.js"></script>
<script type="text/javascript" src="lib/js/materialize.min.js"></script>
<script type="text/javascript">
  $(".pick").on('click', function(e){
    $candidate_id = $(this).attr('candidate_id');
    $token = $("meta[name=_csrf_token]").attr('value');

    $.ajax({
      url: "{{'pick'}}",
      method: "POST",
      data: "_token="+$token+"&candidate_id="+$candidate_id,
      success: function(result){
        alert(result.message);
        location.reload();
      },
      error: function(e, data){
        alert('Terjadi kesalahan saat melakukan pemilihan kandidat, silahkan dicoba kembali');
      }
    });
    e.preventDefault();
  });
</script>
</body>
</html>