	<nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/dashboard') }}" class="navbar-brand"><b>Estatement</b>CMS</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Cari Nasabah <span class="sr-only">(current)</span></a></li>
            <!--<li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Data User</a></li>
                <li><a href="#">Image Onboarding Mobile</a></li>
                <li class="divider"></li>
                <li><a href="#">URL API</a></li>
              </ul>
            </li>-->
          </ul>
          <!--
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>-->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- include navbar right menu hidden(tidak dimunculkan) -->
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                
                   <img src="@if(Session::get('foto')) {{ asset('themes/admin/dist/img/'.Session::get('foto'))}}  @else {{ asset('themes/admin/dist/img/user2-160x160.jpg')}} @endif" class="user-image" alt="Image">
                
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Session::get('nama') }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  @if(Session::get('nama') == null || Session::get('foto') == '' )  
                <img src="{{ asset('themes/admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="{{ Session::get('nama') }} Image">
                @else 
                <img src="{{ asset('themes/admin/dist/img/'.Session::get('foto'))}}" class="user-image" alt="{{ Session::get('nama') }} Image">
                @endif

                  <p>
                    {{ Session::get('nama') }}
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>