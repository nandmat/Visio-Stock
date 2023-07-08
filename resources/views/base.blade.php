@extends('_partials.head-index')
<!-- ======= Header ======= -->
@include('components.header')

<aside id="sidebar" class="sidebar">

    @include('components.sidebar')

</aside><!-- End Sidebar-->


@yield('content')

@extends('_partials.end-index')
