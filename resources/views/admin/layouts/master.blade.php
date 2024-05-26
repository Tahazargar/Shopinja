<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>
<body>

@include('admin.layouts.header')

<section class="body-container">

    @include('admin.layouts.sidebar')

    <section class="main-body w-100">
        @yield('content')
    </section>
</section>

@include('admin.layouts.scripts')
@yield('scripts')

@include('admin.alerts.sweetalert.success')

<section class="toast-wrapper flex-row-reverse">

</section>

</body>
</html>
