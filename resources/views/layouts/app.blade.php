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
	<head><base href="/../../../">
		<title>NIA</title>
		<meta charset="utf-8" />
		<meta name="description" content="Nayasa in house app" />
		<meta name="keywords" content="Nayasa in house app" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Nayasa in house app" />
{{--		<meta property="og:url" content="https://keenthemes.com/metronic" />--}}
		<meta property="og:site_name" content="Nayasa in house app" />
{{--		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />--}}
		<link rel="shortcut icon" href="{{asset('images/logo.png')}}" />
		<!--begin::Fonts-->
{{--		<link rel="stylesheet" href="{{asset('assets/css/font.css')}}" type="text/css" />--}}
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
{{--		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />--}}
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <!--DataTables CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatables/datatables.min.css')}}"/>
        <!--end::Global Stylesheets Bundle-->
        <!--Calendar CSS-->
{{--        <link href={{asset('assets/plugins/calendar/main.css')}} rel='stylesheet' />--}}
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

{{--                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />--}}
	</head>
    <style>
        .box-shadow, .card{
            box-shadow: 0 10px 30px 0 rgb(0 0 0 / 13%) !important;
        }

        #error{
            color: red;
            margin-right: 20px;
            background-color: white !important;
            border: white !important;
        }

        #success{
            color: green;
            margin-right: 20px;
            background-color: white !important;
            border: white !important;
        }

    </style>
    @stack('page-css')
	<!--end::Head-->
	<!--begin::Body-->
	<body onload="display_c()" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="">
						<!--begin::Logo-->
						<a>
							<img alt="Logo" src="{{asset('images/gold.png')}}" class="h-70px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
                    @include('includes.sidebar')
					<!--end::Aside menu-->
					<!--begin::Footer-->
					@include('includes.footer')
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Toast-->
                            <div class="position-fixed end-0" style="z-index: 11">
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="background-color: #1e1e2d" data-kt-docs-toast="stack">
                                    <div class="toast-header">
                                        <strong class="me-auto" style="color: red">Alert</strong>
                                        <small style="color: red" id="time">some mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div id="message" class="toast-body">
                                    </div>
                                </div>
                            </div>
                            <!--end::Toast-->
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a class="d-lg-none">
									<img alt="Logo" src="{{asset('images/logo.png')}}" class="h-100px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-stretch flex-xl-shrink-1">
                                    <!--begin::Notifications-->
                                    @php($loginUser = auth()->user())
                                    @if($loginUser->role_id == 2 && $loginUser->transport_privilege == 'yes')
                                        @php($pendingTransportRequests_ = \App\Models\TransportRequest::query()->where('status','pending')->orderByDesc('updated_at')->get())
                                        @php($pendingPettyCashes_ = \App\Models\PettyCash::query()->where('finance_manager_status','pending')->orderByDesc('updated_at')->get())
                                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                                            <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                                <!--begin::Drawer toggle-->
                                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                                    <span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />

											</svg>
										</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Drawer toggle-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-color: #0a6aa1">
                                                    <!--begin::Title-->
                                                    <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                        <span class="fs-8 opacity-75 ps-3">{{$pendingTransportRequests_->count()}} pending transport requests and {{$pendingPettyCashes_->count()}} pending petty cashes</span>
                                                    </h3>

                                                    <!--begin::Tabs-->
                                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                        <li class="nav-item">
                                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Transport Request</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Petty Cashes</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Tabs-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Transport Request Tab content-->
                                                <div class="tab-content">
                                                    <!--begin::Transport Request Tab panel-->
                                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-325px my-5 px-8">
                                                            <!--begin::Item-->
                                                            @foreach($pendingTransportRequests_ as $transport)
                                                                <div class="d-flex flex-stack py-4">
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="red" />
																			</svg>
																		</span>
                                                                        <!--end::Svg Icon-->
																	</span>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Title-->
                                                                        <div class="mb-0 me-2">
                                                                            <a href="{{route('user.transport.request.view',$transport->id)}}" class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ucwords(($transport->user ? $transport->user->first_name : '').' '.($transport->user ? $transport->user->last_name : ''))}}</a>
                                                                            <div class="text-gray-400 fs-7">{{$transport->reason}}</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light fs-8">{{\Illuminate\Support\Carbon::parse($transport->created_at)->format('d M Y')}}</span>
                                                                    <!--end::Label-->
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!--end::Items-->
                                                        <!--begin::View more-->
                                                        @if($pendingTransportRequests_->count() > 0)
                                                            <div class="py-3 text-center border-top">
                                                                <a href="{{route('user.transport.request.index')}}" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                            </div>
                                                        @endif
                                                        <!--end::View more-->
                                                    </div>
                                                    <!--end::Transport Request Tab panel-->
                                                    <!--begin::Petty Cash Tab panel-->
                                                    <div class="tab-pane fade show" id="kt_topbar_notifications_2" role="tabpanel">
                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-325px my-5 px-8">
                                                            <!--begin::Item-->
                                                            @foreach($pendingPettyCashes_ as $pettyCash_)
                                                                <div class="d-flex flex-stack py-4">
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="red" />
																			</svg>
																		</span>
                                                                        <!--end::Svg Icon-->
																	</span>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Title-->
                                                                        <div class="mb-0 me-2">
                                                                            <a href="{{route('user.petty.cash.view',$pettyCash_->id)}}" class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ucwords(($pettyCash_->user ? $pettyCash_->user->first_name : '').' '.($pettyCash_->user ? $pettyCash_->user->last_name : ''))}}</a>
                                                                            <div class="text-gray-400 fs-7">{{$pettyCash_->reason}}</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light fs-8">{{\Illuminate\Support\Carbon::parse($pettyCash_->created_at)->format('d M Y')}}</span>
                                                                    <!--end::Label-->
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!--end::Items-->
                                                        <!--begin::View more-->
                                                        @if($pendingTransportRequests_->count() > 0)
                                                            <div class="py-3 text-center border-top">
                                                                <a href="{{route('user.petty.cash.index')}}" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                            </div>
                                                        @endif
                                                        <!--end::View more-->
                                                    </div>
                                                    <!--end::Petty Cash Tab panel-->
                                                </div>
                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Menu wrapper-->
                                        </div>
                                    @elseif($loginUser->role_id == 2)
                                        @php($pendingPettyCashes_ = \App\Models\PettyCash::query()->where('finance_manager_status','pending')->orderByDesc('updated_at')->get())
                                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                                            <!--begin::Menu- wrapper-->
                                            <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                                <!--begin::Drawer toggle-->
                                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                                    <span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />

											</svg>
										</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Drawer toggle-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-color: #0a6aa1">
                                                    <!--begin::Title-->
                                                    <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                        <span class="fs-8 opacity-75 ps-3">{{$pendingPettyCashes_->count()}} pending petty cashes </span>
                                                    </h3>

                                                    <!--end::Title-->
                                                    <!--begin::Tabs-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Tab content-->
                                                <div class="tab-content">
                                                    <!--begin::Tab panel-->
                                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-325px my-5 px-8">
                                                            <!--begin::Item-->
                                                            @foreach($pendingPettyCashes_ as $pettyCash_)
                                                                <div class="d-flex flex-stack py-4">
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="red" />
																			</svg>
																		</span>
                                                                        <!--end::Svg Icon-->
																	</span>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Title-->
                                                                        <div class="mb-0 me-2">
                                                                            <a href="{{route('user.petty.cash.view',$pettyCash_->id)}}" class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ucwords(($pettyCash_->user ? $pettyCash_->user->first_name : '').' '.($pettyCash_->user ? $pettyCash_->user->last_name : ''))}}</a>
                                                                            <div class="text-gray-400 fs-7">{{$pettyCash_->reason}}</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light fs-8">{{\Illuminate\Support\Carbon::parse($pettyCash_->created_at)->format('d M Y')}}</span>
                                                                    <!--end::Label-->
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!--end::Items-->
                                                        <!--begin::View more-->
                                                        @if($pendingPettyCashes_->count() > 0)
                                                            <div class="py-3 text-center border-top">
                                                                <a href="{{route('user.petty.cash.index')}}" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                            </div>
                                                        @endif
                                                        <!--end::View more-->
                                                    </div>
                                                    <!--end::Tab panel-->
                                                </div>
                                                <!--end::Tab content-->
                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Menu wrapper-->
                                        </div>
                                    @elseif($loginUser->transport_privilege == 'yes')
                                        @php($pendingTransportRequests_ = \App\Models\TransportRequest::query()->where('status','pending')->orderByDesc('updated_at')->get())
                                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                                            <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                                <!--begin::Drawer toggle-->
                                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                                    <span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />

											</svg>
										</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Drawer toggle-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-color: #0a6aa1">
                                                    <!--begin::Title-->
                                                    <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                        <span class="fs-8 opacity-75 ps-3">{{$pendingTransportRequests_->count()}} pending transport requests</span>
                                                    </h3>

                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Tab content-->
                                                <div class="tab-content">
                                                    <!--begin::Tab panel-->
                                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-325px my-5 px-8">
                                                            <!--begin::Item-->
                                                            @foreach($pendingTransportRequests_ as $transport)
                                                                <div class="d-flex flex-stack py-4">
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Symbol-->
                                                                        <div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="red" />
																			</svg>
																		</span>
                                                                        <!--end::Svg Icon-->
																	</span>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Title-->
                                                                        <div class="mb-0 me-2">
                                                                            <a href="{{route('user.transport.request.view',$transport->id)}}" class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ucwords(($transport->user ? $transport->user->first_name : '').' '.($transport->user ? $transport->user->last_name : ''))}}</a>
                                                                            <div class="text-gray-400 fs-7">{{$transport->reason}}</div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light fs-8">{{\Illuminate\Support\Carbon::parse($transport->created_at)->format('d M Y')}}</span>
                                                                    <!--end::Label-->
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!--end::Items-->
                                                        <!--begin::View more-->
                                                        @if($pendingTransportRequests_->count() > 0)
                                                            <div class="py-3 text-center border-top">
                                                                <a href="{{route('user.transport.request.index')}}" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
                                                                    <!--end::Svg Icon--></a>
                                                            </div>
                                                        @endif
                                                        <!--end::View more-->
                                                    </div>
                                                    <!--end::Tab panel-->
                                                </div>
                                                <!--end::Tab content-->
                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Menu wrapper-->
                                        </div>
                                    @endif
                                    <!--end::Notifications-->

									<!--begin::User menu-->
                                    @php($user_ = auth()->user())
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
                                        @if(isset($user_->image))
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img src="{{asset($user_->image)}}" alt="user" />
										</div>
                                        @else
                                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                                <img src="{{asset('images/user.png')}}" alt="user" />
                                            </div>
                                        @endif
										<!--begin::User account menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
                                                        @if(isset($user_->image))
                                                            <img alt="Logo" src="{{asset($user_->image)}}" />
                                                        @else
                                                            <img alt="Logo" src="{{asset('images/user.png')}}" />
                                                        @endif
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">{{ucwords($user_->first_name.' '.$user_->last_name)}}
														<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ucfirst($user_->role->name) ?? ''}}</span></div>
														<a class="fw-bold text-muted text-hover-primary fs-7">{{$user_->email}}</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
                                            <div class="menu-item px-5 my-1">
                                                <a data-bs-toggle="modal" data-bs-target="#kt_modal_change_password" class="menu-link px-5">Change Password</a>
                                            </div>
											<div class="menu-item px-5 my-1">
												<a href="{{asset('files/Nayasa_employee_handbook.docx')}}" class="menu-link px-5">Download Employee Manual</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="{{route('user.logout')}}" class="menu-link px-5">Sign Out</a>
											</div>
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User menu-->
									<!--begin::Header menu toggle-->
									<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
										<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
											<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
													<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Header menu toggle-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
                    @yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2022©</span>
								<a href="https://softweavergh.com" target="_blank" class="text-gray-800 text-hover-primary">Softweaver</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a target="_blank" class="menu-link px-2">Service</a>
								</li>
							</ul>
							<!--end::Menu-->
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
                <!--begin::Modal - Customers - Add-->
                <div class="modal fade" id="kt_modal_change_password" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form addForm" method="POST" action="{{route('user.change.password')}}" id="kt_modal_add_customer_form">
                                @csrf
                                @method('POST')
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Change Password</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">Old Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input id="old_password" type="text" class="form-control form-control-solid" placeholder="Enter old password" name="old_password">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required">New Password</span>
                                                {{--                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>--}}
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input id="new_password" type="text" class="form-control form-control-solid" placeholder="Enter new password" name="new_password" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Billing form-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">Confirm New Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            {{--                                            <input class="form-control form-control-solid" placeholder="Pick date & time" id="kt_datepicker_3"/>--}}
                                            <input id="confirm_new_password" type="text" class="form-control form-control-solid time" placeholder="Re-enter new password" name="confirm_new_password">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->s
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Engage drawers-->
		<!--begin::Demos drawer-->
		<!--end::Modal - Users Search-->
		<!--end::Modals-->
		<!--begin::Javascript-->
        <!-- Jquery Core Js -->
        <script src="{{ asset('nia_assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('jQuery/assets/js/jquery-3.4.1.min.js') }}"></script>
        <!-- Jquery Page Js -->
        <script src="{{ asset('nia_assets/js/template.js') }}"></script>
        <script src="{{ asset('nia_assets/js/page/hr.js') }}"></script>
        <script src="{{ asset('nia_assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('nia_assets/js/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('nia_assets/js/notiflix-aio-3.2.5.min.js') }}"></script>
        <script src="{{ asset('nia_assets/js/notify_settings.js') }}"></script>

		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
{{--		<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>--}}
		<script src="{{asset('assets/js/custom/apps/calender/calendar.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="{{asset('assets/js/layout/app.js')}}"></script>

        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{asset('assets/js/custom/documentation/documentation.js')}}"></script>

            <!--begin::CKEditor-->
{{--        <script src="{{ asset('nia_assets/js/ckeditor.js') }}"></script>--}}
            <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
            <!--end::CKEditor-->
            <!--begin::Calendar-->
{{--<script src={{asset('assets/js/custom/apps/calendar/calendar.js')}}></script>--}}
<script src={{asset('assets/plugins/calendar/index.global.js')}}></script>
{{--            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>--}}
<!--end::Calendar-->

            <script>
            $(document).ready(function () {
                $.ajax({
                    method: 'GET',
                    url: `{{route('user.notifications')}}`,
                    dataType: 'JSON',
                }).done(function (response) {
                    if (response.code === 200)
                        Notiflix.Notify.warning(response.msg);
                })
            })

            function display_c(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct() {
                var x = new Date()
                var x1=x.toUTCString();// changing the display to UTC string
                document.getElementById('ct').innerHTML = x1;
                tt=display_c();
            }

            // const date1 = new Date("08/05/2022 23:41:20");
            // const date2 = new Date("08/06/2022 02:56:32");
            //
            // const diff = date2.getTime() - date1.getTime();
            //
            // let msec = diff;
            // const hh = Math.floor(msec / 1000 / 60 / 60);
            // msec -= hh * 1000 * 60 * 60;
            // const mm = Math.floor(msec / 1000 / 60);
            // msec -= mm * 1000 * 60;
            // const ss = Math.floor(msec / 1000);
            // msec -= ss * 1000;
            //
            // console.log('mm ',mm)


            setInterval(function() {
                //your jQuery ajax code
                $.ajax({
                    method: 'GET',
                    url: `{{route('user.petty.cash.notifications')}}`,
                    dataType: 'JSON',
                }).done(function (response) {
                    console.log('response ',response)
                    if (response.code === 200){
                        if(Array.isArray(response.data)){
                            for(var record of response.data){
                                notify(record)
                                console.log('called')
                            }
                        }else {
                            notify(response.data)
                        }
                    }
                })

            }, 1000 * 60 * 0.3);

            function notify(data){
                $('#message').html('<a href="'+data.url+'" style="color: white">'+data.message+'</a>')
                var toastLiveExample = document.getElementById('liveToast')
                var toast = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                toast.show()
            }

        </script>
            <script src="{{ asset('nia_assets/js/custom.js') }}"></script>
@stack('page-js')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
