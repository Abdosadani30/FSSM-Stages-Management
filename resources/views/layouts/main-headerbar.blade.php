  <?php
    use Illuminate\Support\Facades\Auth;
  ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="dropdown">
          <button class="btn btn-light dropdown-toggle" data-toggle="dropdown">
            {{Auth::user()->name}}
              </button>
          <form action={{route("logout")}} method="POST" class="dropdown-menu">
                @csrf
            {{-- <a class="dropdown-item" href="{{route('logout')}}">Log out</a> --}}
               <button type="submit" class="dropdown-item">Log out</button>
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->