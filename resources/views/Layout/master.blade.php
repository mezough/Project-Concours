<!DOCTYPE html>
<html lang="en">

@include('Layout/Sections/master-head')

<body id="page-top">
    
    <!-- Navigation-->
   @include('Layout/Sections/navbar')
    <!-- Masthead-->

    @yield('content')

    <!-- Footer-->
   @include('Layout/Sections/footer')

    <!-- Script core JS-->
    @include('Layout.Styles.script')
    
</body>
</html>
