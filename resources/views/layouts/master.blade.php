<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
            @yield('title')
        </title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
		<link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
		<link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        @yield('head')
    </head>
    <body style="background-image: url({{asset('assets/img/backround1.png')}}); background-repeat:no-repeat; background-size: 100% auto;" class="bg-[#131429] ">
        <!-- container  -->
        <div  class="container">
            <!-- nav bar -->
            <nav class="relative px-2 py-4 flex justify-between mx-auto lg:w-full w-[70%] items-center mt-4">
                <a class="text-3xl font-bold leading-none" href="#">
                    <svg width="154" height="29" viewBox="0 0 154 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M28.5 14.25C28.5 22.1201 22.1201 28.5 14.25 28.5C6.37994 28.5 0 22.1201 0 14.25C0 6.37994 6.37994 0 14.25 0C22.1201 0 28.5 6.37994 28.5 14.25ZM12.9291 15.9246C11.4785 15.3895 10.4442 13.9947 10.4442 12.3584C10.4442 10.2597 12.1456 8.55835 14.2442 8.55835C16.3429 8.55835 18.0442 10.2597 18.0442 12.3584C18.0442 13.9958 17.0085 15.3914 15.5564 15.9257C15.6274 16.0208 15.6822 16.1297 15.7162 16.2488L16.4115 18.6821C16.594 19.3209 16.1143 19.9568 15.4499 19.9568H13.0347C12.3704 19.9568 11.8907 19.3209 12.0732 18.6821L12.7685 16.2488C12.8026 16.1292 12.8577 16.02 12.9291 15.9246Z"
                            fill="#E94A65" />
                        <path
                            d="M49.7881 23.4224L49.0757 20.9967H43.5423L42.8298 23.4224H38.2227L43.7085 6.61026H48.8857L54.3716 23.4224H49.7881ZM44.6347 17.298H47.9833L46.2971 11.5819L44.6347 17.298Z"
                            fill="#E94A65" />
                        <path
                            d="M63.0043 23.7827C60.5028 23.7827 58.4288 22.9501 56.7822 21.2849C55.1515 19.6037 54.3361 17.5142 54.3361 15.0163C54.3361 12.5185 55.1515 10.437 56.7822 8.77183C58.4288 7.09061 60.5028 6.25 63.0043 6.25C64.5084 6.25 65.9016 6.61026 67.184 7.33078C68.4664 8.05131 69.4718 9.02001 70.2001 10.2369L66.5191 12.3744C66.2024 11.782 65.7275 11.3177 65.0942 10.9814C64.4767 10.6292 63.7801 10.453 63.0043 10.453C61.6744 10.453 60.5978 10.8774 59.7745 11.726C58.9671 12.5586 58.5634 13.6554 58.5634 15.0163C58.5634 16.3773 58.9671 17.4821 59.7745 18.3308C60.5978 19.1634 61.6744 19.5797 63.0043 19.5797C63.7801 19.5797 64.4767 19.4115 65.0942 19.0753C65.7275 18.723 66.2024 18.2427 66.5191 17.6342L70.2001 19.7958C69.4718 21.0287 68.4664 22.0054 67.184 22.7259C65.9174 23.4304 64.5242 23.7827 63.0043 23.7827Z"
                            fill="#E94A65" />
                        <path
                            d="M79.3545 23.7827C76.853 23.7827 74.779 22.9501 73.1324 21.2849C71.5017 19.6037 70.6864 17.5142 70.6864 15.0163C70.6864 12.5185 71.5017 10.437 73.1324 8.77183C74.779 7.09061 76.853 6.25 79.3545 6.25C80.8586 6.25 82.2518 6.61026 83.5342 7.33078C84.8167 8.05131 85.822 9.02001 86.5503 10.2369L82.8693 12.3744C82.5526 11.782 82.0777 11.3177 81.4444 10.9814C80.8269 10.6292 80.1303 10.453 79.3545 10.453C78.0246 10.453 76.948 10.8774 76.1247 11.726C75.3173 12.5586 74.9136 13.6554 74.9136 15.0163C74.9136 16.3773 75.3173 17.4821 76.1247 18.3308C76.948 19.1634 78.0246 19.5797 79.3545 19.5797C80.1303 19.5797 80.8269 19.4115 81.4444 19.0753C82.0777 18.723 82.5526 18.2427 82.8693 17.6342L86.5503 19.7958C85.822 21.0287 84.8167 22.0054 83.5342 22.7259C82.2677 23.4304 80.8744 23.7827 79.3545 23.7827Z"
                            fill="#E94A65" />
                        <path
                            d="M103.047 6.60557L96.8775 15.5652L90.6737 6.60557H88.8763V23.4224H90.7665V9.90093L96.8775 18.6377L102.977 9.90093V23.4224H104.855V6.60557H103.047Z"
                            fill="white" />
                        <path
                            d="M120.869 23.4224H122.887L116.069 6.60557H113.715L106.908 23.4224H108.926L110.723 18.9075H119.06L120.869 23.4224ZM111.419 17.1835L114.909 8.52884L118.376 17.1835H111.419Z"
                            fill="white" />
                        <path
                            d="M136.025 23.4224H138.205L133.741 16.7262C135.04 16.4799 136.06 15.8818 136.802 14.9319C137.544 13.982 137.915 12.9148 137.915 11.7304C137.915 10.4052 137.44 9.22075 136.489 8.17702C135.538 7.1333 134.251 6.6173 132.639 6.6173H124.951V23.4342H126.818V16.8317H131.688L136.025 23.4224ZM126.818 8.35293H132.593C133.637 8.35293 134.483 8.69302 135.121 9.36147C135.759 10.0299 136.083 10.8274 136.083 11.7421C136.083 12.6686 135.759 13.466 135.121 14.1345C134.483 14.8029 133.637 15.1313 132.581 15.1313H126.83L126.818 8.35293Z"
                            fill="white" />
                        <path d="M153.732 6.60557H139.562V8.36466H145.708V23.4224H147.61V8.36466H153.732V6.60557Z"
                            fill="white" />
                    </svg>
                </a>
                <div class="lg:hidden">
                    <button class="navbar-burger flex items-center hover:text-[#E94A65] text-white p-3">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="hidden gap-[58px] lg:flex lg:ml-auto lg:items-center lg:jusitify-center">
                    <li><a class="text-white text-[1rem] font-[Rubik] font-normal" href="#">Home</a></li>
                    <li><a class="text-white text-[1rem] font-[Rubik] font-normal" href="#">Overwatch Boosting</a></li>
                    <li><a class="text-white text-[1rem] font-[Rubik] font-normal" href="#">TBD</a></li>
                    <li><a class="text-white text-[1rem] font-[Rubik] font-normal" href="#">Testimonials</a></li>
                </ul>
                <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6  border border-[#EA4A65] hover:bg-[#EA4A65] text-sm text-white font-[Rubik] font-bold  rounded-xl transition duration-200"
                    href="#">LOGIN</a>
                <a class="hidden lg:inline-block py-2 px-6 bg-[#EA4A65] hover:bg-[#131429] text-sm text-white font-bold rounded-xl transition font-[Rubik] duration-200"
                    href="#">REGISTER</a>
            </nav>
            <!-- nav bar mobile -->
            <div class="navbar-menu relative z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#17182D] overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                            <svg width="154" height="29" viewBox="0 0 154 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.5 14.25C28.5 22.1201 22.1201 28.5 14.25 28.5C6.37994 28.5 0 22.1201 0 14.25C0 6.37994 6.37994 0 14.25 0C22.1201 0 28.5 6.37994 28.5 14.25ZM12.9291 15.9246C11.4785 15.3895 10.4442 13.9947 10.4442 12.3584C10.4442 10.2597 12.1456 8.55835 14.2442 8.55835C16.3429 8.55835 18.0442 10.2597 18.0442 12.3584C18.0442 13.9958 17.0085 15.3914 15.5564 15.9257C15.6274 16.0208 15.6822 16.1297 15.7162 16.2488L16.4115 18.6821C16.594 19.3209 16.1143 19.9568 15.4499 19.9568H13.0347C12.3704 19.9568 11.8907 19.3209 12.0732 18.6821L12.7685 16.2488C12.8026 16.1292 12.8577 16.02 12.9291 15.9246Z" fill="#E94A65"></path>
                                <path d="M49.7881 23.4224L49.0757 20.9967H43.5423L42.8298 23.4224H38.2227L43.7085 6.61026H48.8857L54.3716 23.4224H49.7881ZM44.6347 17.298H47.9833L46.2971 11.5819L44.6347 17.298Z" fill="#E94A65"></path>
                                <path d="M63.0043 23.7827C60.5028 23.7827 58.4288 22.9501 56.7822 21.2849C55.1515 19.6037 54.3361 17.5142 54.3361 15.0163C54.3361 12.5185 55.1515 10.437 56.7822 8.77183C58.4288 7.09061 60.5028 6.25 63.0043 6.25C64.5084 6.25 65.9016 6.61026 67.184 7.33078C68.4664 8.05131 69.4718 9.02001 70.2001 10.2369L66.5191 12.3744C66.2024 11.782 65.7275 11.3177 65.0942 10.9814C64.4767 10.6292 63.7801 10.453 63.0043 10.453C61.6744 10.453 60.5978 10.8774 59.7745 11.726C58.9671 12.5586 58.5634 13.6554 58.5634 15.0163C58.5634 16.3773 58.9671 17.4821 59.7745 18.3308C60.5978 19.1634 61.6744 19.5797 63.0043 19.5797C63.7801 19.5797 64.4767 19.4115 65.0942 19.0753C65.7275 18.723 66.2024 18.2427 66.5191 17.6342L70.2001 19.7958C69.4718 21.0287 68.4664 22.0054 67.184 22.7259C65.9174 23.4304 64.5242 23.7827 63.0043 23.7827Z" fill="#E94A65"></path>
                                <path d="M79.3545 23.7827C76.853 23.7827 74.779 22.9501 73.1324 21.2849C71.5017 19.6037 70.6864 17.5142 70.6864 15.0163C70.6864 12.5185 71.5017 10.437 73.1324 8.77183C74.779 7.09061 76.853 6.25 79.3545 6.25C80.8586 6.25 82.2518 6.61026 83.5342 7.33078C84.8167 8.05131 85.822 9.02001 86.5503 10.2369L82.8693 12.3744C82.5526 11.782 82.0777 11.3177 81.4444 10.9814C80.8269 10.6292 80.1303 10.453 79.3545 10.453C78.0246 10.453 76.948 10.8774 76.1247 11.726C75.3173 12.5586 74.9136 13.6554 74.9136 15.0163C74.9136 16.3773 75.3173 17.4821 76.1247 18.3308C76.948 19.1634 78.0246 19.5797 79.3545 19.5797C80.1303 19.5797 80.8269 19.4115 81.4444 19.0753C82.0777 18.723 82.5526 18.2427 82.8693 17.6342L86.5503 19.7958C85.822 21.0287 84.8167 22.0054 83.5342 22.7259C82.2677 23.4304 80.8744 23.7827 79.3545 23.7827Z" fill="#E94A65"></path>
                                <path d="M103.047 6.60557L96.8775 15.5652L90.6737 6.60557H88.8763V23.4224H90.7665V9.90093L96.8775 18.6377L102.977 9.90093V23.4224H104.855V6.60557H103.047Z" fill="white"></path>
                                <path d="M120.869 23.4224H122.887L116.069 6.60557H113.715L106.908 23.4224H108.926L110.723 18.9075H119.06L120.869 23.4224ZM111.419 17.1835L114.909 8.52884L118.376 17.1835H111.419Z" fill="white"></path>
                                <path d="M136.025 23.4224H138.205L133.741 16.7262C135.04 16.4799 136.06 15.8818 136.802 14.9319C137.544 13.982 137.915 12.9148 137.915 11.7304C137.915 10.4052 137.44 9.22075 136.489 8.17702C135.538 7.1333 134.251 6.6173 132.639 6.6173H124.951V23.4342H126.818V16.8317H131.688L136.025 23.4224ZM126.818 8.35293H132.593C133.637 8.35293 134.483 8.69302 135.121 9.36147C135.759 10.0299 136.083 10.8274 136.083 11.7421C136.083 12.6686 135.759 13.466 135.121 14.1345C134.483 14.8029 133.637 15.1313 132.581 15.1313H126.83L126.818 8.35293Z" fill="white"></path>
                                <path d="M153.732 6.60557H139.562V8.36466H145.708V23.4224H147.61V8.36466H153.732V6.60557Z" fill="white"></path>
                            </svg>
                        </a>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul >
                            <li class="mb-1">
                                <a class="block p-4 text-sm font-[Rubik] font-normal font-semibold text-gray-400 hover:bg-[#17182D] hover:text-[#E94A65] rounded" href="#">Home</a>
                            </li>
                            <li class="mb-1">
                                <a class="block p-4 text-sm font-[Rubik] font-normal font-semibold text-gray-400 hover:bg-[#17182D] hover:text-[#E94A65] rounded" href="#">Overwatch Boosting</a>
                            </li>
                            <li class="mb-1">
                                <a class="block p-4 text-sm font-[Rubik] font-normal font-semibold text-gray-400 hover:bg-[#17182D] hover:text-[#E94A65] rounded" href="#">TBD</a>
                            </li>
                            <li class="mb-1">
                                <a class="block p-4 text-sm font-[Rubik] font-normal font-semibold text-gray-400 hover:bg-[#17182D] hover:text-[#E94A65] rounded" href="#">Testimonials</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="pt-6">
                            <a class="font-[Rubik] block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
                            <a class="font-[Rubik] block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-[#E94A65] hover:bg-blue-700  rounded-xl" href="#">Sign Up</a>
                        </div>
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © 2021</span>
                        </p>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    
    <script src="{{asset('assets/script/swiper-bundle.min.js')}}"></script>
    @yield('script')
</body>
</html>