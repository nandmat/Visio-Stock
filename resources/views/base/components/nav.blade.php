<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->
      <li class="nav-item dropdown">
      @include('base._partials.notifications')
      </li>
      <!-- End Notification Nav -->

      <li class="nav-item dropdown">

        @include('base._partials.messages')

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

          @include('base._partials.profile-nav')

      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->
