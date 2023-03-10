<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../">
    <title>NIA</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
{{--    <meta property="og:url" content="https://keenthemes.com/metronic" />--}}
{{--    <meta property="og:site_name" content="Keenthemes | Metronic" />--}}
{{--    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />--}}
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="auth-bg">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Error 500 -->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
            <!--begin::Logo-->
{{--            <a href="../../demo1/dist/index.html" class="mb-10 pt-lg-10">--}}
{{--                <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px mb-5" />--}}
{{--            </a>--}}
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="pt-lg-10 mb-10">
                <!--begin::Logo-->
                <h1 class="fw-bolder fs-2qx text-gray-800 mb-10">System Error</h1>
                <!--end::Logo-->
                <!--begin::Message-->
                <div class="fw-bold fs-3 text-muted mb-15">Something went wrong!
                    <br />Please try again later.</div>
                <!--end::Message-->
                <!--begin::Action-->
                <div class="text-center">
                    <a href="{{route('user.dashboard')}}" class="btn btn-lg btn-primary fw-bolder">Go to homepage</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Illustration-->
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{asset('assets/media/illustrations/sketchy-1/17.png')}})"></div>
            <!--end::Illustration-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
{{--        <div class="d-flex flex-center flex-column-auto p-10">--}}
{{--            <!--begin::Links-->--}}
{{--            <div class="d-flex align-items-center fw-bold fs-6">--}}
{{--                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>--}}
{{--                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>--}}
{{--                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>--}}
{{--            </div>--}}
{{--            <!--end::Links-->--}}
{{--        </div>--}}
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Error 500-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
