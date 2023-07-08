@extends('base._partials.head-index')
<!-- ======= Header ======= -->
@include('base.components.header')

<aside id="sidebar" class="sidebar">

    @include('base.components.sidebar')

</aside><!-- End Sidebar-->


@yield('content')

@extends('base._partials.end-index')
