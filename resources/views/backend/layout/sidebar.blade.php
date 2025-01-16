<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0" href="{{ route('dashboard') }}">
            <img class="navbar-brand-img" src="{{ asset('assets/backend/img/Code_bunon_fd_logo2.png') }}" alt="">
            <span class="font-weight-bold ms-2">Code Bunon</span>
        </a>
    </div>
    <div class="collapse navbar-collapse px-3  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white opacity-9 {{ Request::route()->named('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <svg width="16px" height="16px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(453.000000, 454.000000)">
                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-2">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#slider"
                    class="nav-link text-white opacity-9
                    {{ Request::route()->named('slider_List') ? 'active' : '' }}
                    {{ Request::route()->named('create_Page') ? 'active' : '' }}
                    {{ Request::route()->named('edit_Page') ? 'active' : '' }}
                    "
                    aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <svg width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(154.000000, 300.000000)">
                                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-2">Sliders</span>
                </a>
                <div class="collapse 
                    {{ Request::route()->named('slider_List') ? 'show' : '' }}
                    {{ Request::route()->named('create_Page') ? 'show' : '' }}
                    {{ Request::route()->named('edit_Page') ? 'show' : '' }}
                    "
                    id="slider">
                    <ul class="nav border-start ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-9 
                            {{ Request::route()->named('slider_List') ? 'active' : '' }}
                            {{ Request::route()->named('create_Page') ? 'active' : '' }}
                            {{ Request::route()->named('edit_Page') ? 'active' : '' }}
                                " href="{{ route('slider_List') }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal">Slider</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#service"
                    class="nav-link text-white opacity-9
                    {{ Request::route()->named('service_List') ? 'active' : '' }}
                    {{ Request::route()->named('service_create_Page') ? 'active' : '' }}
                    {{ Request::route()->named('service_edit_Page') ? 'active' : '' }}
                    "
                    aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <svg width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(154.000000, 300.000000)">
                                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-2">Services</span>
                </a>
                <div class="collapse 
                    {{ Request::route()->named('service_List') ? 'show' : '' }}
                    {{ Request::route()->named('service_create_Page') ? 'show' : '' }}
                    {{ Request::route()->named('service_edit_Page') ? 'show' : '' }}
                    "
                    id="service">
                    <ul class="nav border-start ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-9 
                            {{ Request::route()->named('service_List') ? 'active' : '' }}
                            {{ Request::route()->named('service_edit_Page') ? 'active' : '' }}
                            {{ Request::route()->named('service_create_Page') ? 'active' : '' }}
                                " href="{{ route('service_List') }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal">Service</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#message"
                    class="nav-link text-white opacity-9
                    {{ Request::route()->named('message_List') ? 'active' : '' }}
                    "
                    aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <svg width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(154.000000, 300.000000)">
                                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-2">Client Message</span>
                </a>
                <div class="collapse 
                    {{ Request::route()->named('message_List') ? 'show' : '' }}
                    "
                    id="message">
                    <ul class="nav border-start ms-4">
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-9 
                            {{ Request::route()->named('message_List') ? 'active' : '' }}
                                " href="{{ route('message_List') }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal">Message</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



        </ul>
    </div>
</aside>
