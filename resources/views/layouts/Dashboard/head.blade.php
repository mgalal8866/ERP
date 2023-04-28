

    <link rel="apple-touch-icon" href={{URL::asset('app-assets/images/ico/apple-icon-120.png')}}>
    <link rel="shortcut icon" type="image/x-icon" href={{URL::asset('app-assets/images/ico/favicon.ico')}}>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet"> --}}
    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl' )
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/vendors/css/vendors-rtl.min.css')}}>
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/bootstrap.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/bootstrap-extended.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/colors.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/components.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/dark-layout.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/bordered-layout.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/themes/semi-dark-layout.css')}}>

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}>
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css-rtl/custom-rtl.css')}}>
        <link rel="stylesheet" type="text/css" href={{URL::asset('assets/css/style-rtl.css')}}>
        <!-- END: Custom CSS-->

    @else
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/vendors/css/vendors-rtl.min.css')}}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/bootstrap.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/bootstrap-extended.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/colors.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/components.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/themes/dark-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/themes/bordered-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/themes/semi-dark-layout.css')}}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{URL::asset('assets/css/style.css')}}>
    <!-- END: Custom CSS-->

    @endif

