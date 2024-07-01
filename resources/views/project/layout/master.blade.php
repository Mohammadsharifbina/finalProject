@if (LaravelLocalization::getCurrentLocaleDirection()=="rtl")
<style>
    body{
        direction: rtl;
    }
	@font-face {
		font-family: "bahijTiter";
		src: url('Bahij Badr-Bold.ttf');
	}
    *{
        font-family: bahijTiter;
    }
</style>
@endif
<!DOCTYPE html>

<html lang="en">
@include('project.layout.head')
<body>
    @include('project.layout.header')
    @yield('contents')
    @include('project.layout.footer')
    
</body>
</html>
