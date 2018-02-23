@include('layouts.header')
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    <div class="content-wrapper">
        @include('modules.top-nav')
        @include('modules.left-nav')
        @yield('content')
    </div>
</div>
@include('layouts.footer')