@extends('layouts.master')
@section('content')
<div class="container flex justify-center mx-auto items-center">
		<div class="flex lg:flex-row flex-col justify-center items-center lg:gap-[139px] gap-[70px]">
			<div class="flex flex-col lg:gap-[70px] gap-[30px]">
				<div class="flex">
					<span class="mr-4">
						<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="2" cy="2" r="2" fill="#E94A65"></circle>
						</svg>
					</span>
					<h1 id="h1-style-mb" class=" text-[#E94A65] xl:text-[#ffff] sm:mx-0 mx-auto font-[Manrope] font-normal font-[700] text-[18px] sm:text-[22px]">
						Thank You Your Order is Successfully Placed.
					</h1>
				</div>
			</div>
		</div>
		<footer class="p-4 w-[80%] sm:p-6">
			<div class="flex justify-center gap-6">
				<a class="text-pink-600 hover:text-pink-600/75" href="/dribbble" target="_blank" rel="noreferrer"
					aria-label="Dribbble">
					<svg  width="154" height="29" viewBox="0 0 154 29" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M28.5 14.25C28.5 22.1201 22.1201 28.5 14.25 28.5C6.37994 28.5 0 22.1201 0 14.25C0 6.37994 6.37994 0 14.25 0C22.1201 0 28.5 6.37994 28.5 14.25ZM12.9291 15.9246C11.4785 15.3895 10.4442 13.9947 10.4442 12.3584C10.4442 10.2597 12.1456 8.55835 14.2442 8.55835C16.3429 8.55835 18.0442 10.2597 18.0442 12.3584C18.0442 13.9958 17.0085 15.3914 15.5564 15.9257C15.6274 16.0208 15.6822 16.1297 15.7162 16.2488L16.4115 18.6821C16.594 19.3209 16.1143 19.9568 15.4499 19.9568H13.0347C12.3704 19.9568 11.8907 19.3209 12.0732 18.6821L12.7685 16.2488C12.8026 16.1292 12.8577 16.02 12.9291 15.9246Z"
							fill="white"></path>
						<path
							d="M49.7881 23.4224L49.0757 20.9967H43.5423L42.8298 23.4224H38.2227L43.7085 6.61026H48.8857L54.3716 23.4224H49.7881ZM44.6347 17.298H47.9833L46.2971 11.5819L44.6347 17.298Z"
							fill="white"></path>
						<path
							d="M63.0043 23.7827C60.5028 23.7827 58.4288 22.9501 56.7822 21.2849C55.1515 19.6037 54.3361 17.5142 54.3361 15.0163C54.3361 12.5185 55.1515 10.437 56.7822 8.77183C58.4288 7.09061 60.5028 6.25 63.0043 6.25C64.5084 6.25 65.9016 6.61026 67.184 7.33078C68.4664 8.05131 69.4718 9.02001 70.2001 10.2369L66.5191 12.3744C66.2024 11.782 65.7275 11.3177 65.0942 10.9814C64.4767 10.6292 63.7801 10.453 63.0043 10.453C61.6744 10.453 60.5978 10.8774 59.7745 11.726C58.9671 12.5586 58.5634 13.6554 58.5634 15.0163C58.5634 16.3773 58.9671 17.4821 59.7745 18.3308C60.5978 19.1634 61.6744 19.5797 63.0043 19.5797C63.7801 19.5797 64.4767 19.4115 65.0942 19.0753C65.7275 18.723 66.2024 18.2427 66.5191 17.6342L70.2001 19.7958C69.4718 21.0287 68.4664 22.0054 67.184 22.7259C65.9174 23.4304 64.5242 23.7827 63.0043 23.7827Z"
							fill="white"></path>
						<path
							d="M79.3545 23.7827C76.853 23.7827 74.779 22.9501 73.1324 21.2849C71.5017 19.6037 70.6864 17.5142 70.6864 15.0163C70.6864 12.5185 71.5017 10.437 73.1324 8.77183C74.779 7.09061 76.853 6.25 79.3545 6.25C80.8586 6.25 82.2518 6.61026 83.5342 7.33078C84.8167 8.05131 85.822 9.02001 86.5503 10.2369L82.8693 12.3744C82.5526 11.782 82.0777 11.3177 81.4444 10.9814C80.8269 10.6292 80.1303 10.453 79.3545 10.453C78.0246 10.453 76.948 10.8774 76.1247 11.726C75.3173 12.5586 74.9136 13.6554 74.9136 15.0163C74.9136 16.3773 75.3173 17.4821 76.1247 18.3308C76.948 19.1634 78.0246 19.5797 79.3545 19.5797C80.1303 19.5797 80.8269 19.4115 81.4444 19.0753C82.0777 18.723 82.5526 18.2427 82.8693 17.6342L86.5503 19.7958C85.822 21.0287 84.8167 22.0054 83.5342 22.7259C82.2677 23.4304 80.8744 23.7827 79.3545 23.7827Z"
							fill="white"></path>
						<path
							d="M103.047 6.60557L96.8775 15.5652L90.6737 6.60557H88.8763V23.4224H90.7665V9.90093L96.8775 18.6377L102.977 9.90093V23.4224H104.855V6.60557H103.047Z"
							fill="white"></path>
						<path
							d="M120.869 23.4224H122.887L116.069 6.60557H113.715L106.908 23.4224H108.926L110.723 18.9075H119.06L120.869 23.4224ZM111.419 17.1835L114.909 8.52884L118.376 17.1835H111.419Z"
							fill="white"></path>
						<path
							d="M136.025 23.4224H138.205L133.741 16.7262C135.04 16.4799 136.06 15.8818 136.802 14.9319C137.544 13.982 137.915 12.9148 137.915 11.7304C137.915 10.4052 137.44 9.22075 136.489 8.17702C135.538 7.1333 134.251 6.6173 132.639 6.6173H124.951V23.4342H126.818V16.8317H131.688L136.025 23.4224ZM126.818 8.35293H132.593C133.637 8.35293 134.483 8.69302 135.121 9.36147C135.759 10.0299 136.083 10.8274 136.083 11.7421C136.083 12.6686 135.759 13.466 135.121 14.1345C134.483 14.8029 133.637 15.1313 132.581 15.1313H126.83L126.818 8.35293Z"
							fill="white"></path>
						<path d="M153.732 6.60557H139.562V8.36466H145.708V23.4224H147.61V8.36466H153.732V6.60557Z"
							fill="white"></path>
					</svg>
				</a>
			</div>
			<nav aria-label="Footer Nav" class=" p-6 sm:block hidden">
				<ul class="flex flex-wrap justify-center gap-6 text-sm font-[Inter]">
					<li>
						<a class="text-[#ffff] transition hover:text-[#ffff]/75" href="index.html" target="_blank"
							rel="noreferrer">
							Home
						</a>
					</li>
					<li>
						<a class="text-[#ffff] transition hover:text-[#ffff]/75" href="index.html" target="_blank"
							rel="noreferrer">
							Features
						</a>
					</li>
					<li>
						<a class="text-[#ffff] transition hover:text-[#ffff]/75" href="index.html" target="_blank"
							rel="noreferrer">
							Process
						</a>
					</li>
					<li>
						<a class="text-[#ffff] transition hover:text-[#ffff]/75" href="index.html" target="_blank"
							rel="noreferrer">
							Contact
						</a>
					</li>
					<li>
						<a class="text-[#ffff] transition hover:text-[#ffff]/75" href="index.html" target="_blank"
							rel="noreferrer">
							Privacy Policy
						</a>
					</li>
				</ul>
			</nav>
			<div class="sm:my-[35px] my-[10px] mx-auto sm:w-full"
				style="border: 1px solid #fff;height : 0;background: #FFFFFF;opacity: 0.2;"></div>
			<div class="flex items-center  sm:gap-0 justify-between footer-sc">
				<span
					class="font-[Inter] text-sm text-[#D9DBE1] text-[6px] sm:text-[16px]  whitespace-nowrap sm:text-center">©
					2020 ACCMART. All rights reserved</span>
				<div class="flex gap-[4px] sm:gap-[16px] sm:justify-center sm:mt-0">
					<a href="#" class="text-gray-500 hover:text-[#ffff] dark:hover:text-white">
						<svg class="sm:w-[24px] w-[10px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
								d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
								fill="white"></path>
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M12.0002 5.6001C10.2621 5.6001 10.0439 5.6077 9.36125 5.63876C8.67991 5.66997 8.21484 5.77783 7.8079 5.9361C7.38696 6.09957 7.02989 6.31824 6.67415 6.67411C6.31815 7.02985 6.09948 7.38692 5.93548 7.80772C5.77681 8.21479 5.66881 8.68 5.63814 9.36107C5.60761 10.0437 5.59961 10.262 5.59961 12.0002C5.59961 13.7383 5.60734 13.9558 5.63828 14.6385C5.66961 15.3198 5.77748 15.7849 5.93561 16.1918C6.09921 16.6127 6.31788 16.9698 6.67375 17.3256C7.02936 17.6816 7.38643 17.9008 7.8071 18.0642C8.2143 18.2225 8.67951 18.3304 9.36072 18.3616C10.0434 18.3926 10.2614 18.4002 11.9994 18.4002C13.7377 18.4002 13.9552 18.3926 14.6378 18.3616C15.3192 18.3304 15.7848 18.2225 16.192 18.0642C16.6128 17.9008 16.9693 17.6816 17.3249 17.3256C17.6809 16.9698 17.8996 16.6127 18.0636 16.1919C18.2209 15.7849 18.3289 15.3197 18.3609 14.6386C18.3916 13.9559 18.3996 13.7383 18.3996 12.0002C18.3996 10.262 18.3916 10.0439 18.3609 9.3612C18.3289 8.67986 18.2209 8.21479 18.0636 7.80785C17.8996 7.38692 17.6809 7.02985 17.3249 6.67411C16.9689 6.31811 16.6129 6.09944 16.1916 5.9361C15.7836 5.77783 15.3182 5.66997 14.6369 5.63876C13.9542 5.6077 13.7369 5.6001 11.9982 5.6001H12.0002ZM11.426 6.75343C11.5964 6.75316 11.7866 6.75343 12.0002 6.75343C13.709 6.75343 13.9115 6.75956 14.5863 6.79023C15.2103 6.81876 15.549 6.92303 15.7746 7.01063C16.0733 7.12663 16.2862 7.2653 16.5101 7.4893C16.7341 7.7133 16.8728 7.92664 16.989 8.22531C17.0766 8.45064 17.181 8.78931 17.2094 9.41332C17.2401 10.088 17.2468 10.2907 17.2468 11.9987C17.2468 13.7067 17.2401 13.9094 17.2094 14.584C17.1809 15.208 17.0766 15.5467 16.989 15.7721C16.873 16.0707 16.7341 16.2834 16.5101 16.5073C16.2861 16.7313 16.0734 16.8699 15.7746 16.9859C15.5493 17.0739 15.2103 17.1779 14.5863 17.2065C13.9117 17.2371 13.709 17.2438 12.0002 17.2438C10.2912 17.2438 10.0887 17.2371 9.41402 17.2065C8.79002 17.1777 8.45134 17.0734 8.22561 16.9858C7.92694 16.8698 7.7136 16.7311 7.4896 16.5071C7.2656 16.2831 7.12693 16.0703 7.01066 15.7715C6.92306 15.5462 6.81866 15.2075 6.79026 14.5835C6.75959 13.9088 6.75346 13.7062 6.75346 11.9971C6.75346 10.288 6.75959 10.0864 6.79026 9.41172C6.81879 8.78771 6.92306 8.44904 7.01066 8.22344C7.12666 7.92477 7.2656 7.71143 7.4896 7.48743C7.7136 7.26343 7.92694 7.12476 8.22561 7.00849C8.45121 6.92049 8.79002 6.81649 9.41402 6.78783C10.0044 6.76116 10.2332 6.75316 11.426 6.75182V6.75343ZM15.4165 7.81611C14.9925 7.81611 14.6485 8.15971 14.6485 8.58385C14.6485 9.00785 14.9925 9.35185 15.4165 9.35185C15.8405 9.35185 16.1845 9.00785 16.1845 8.58385C16.1845 8.15984 15.8405 7.81611 15.4165 7.81611ZM12.0002 8.71345C10.1851 8.71345 8.71352 10.1851 8.71352 12.0001C8.71352 13.8152 10.1851 15.2862 12.0002 15.2862C13.8153 15.2862 15.2864 13.8152 15.2864 12.0001C15.2864 10.1851 13.8153 8.71345 12.0002 8.71345ZM12.0002 9.86679C13.1783 9.86679 14.1336 10.8219 14.1336 12.0001C14.1336 13.1783 13.1783 14.1335 12.0002 14.1335C10.8219 14.1335 9.86684 13.1783 9.86684 12.0001C9.86684 10.8219 10.8219 9.86679 12.0002 9.86679Z"
								fill="white"></path>
						</svg>
					</a>
					<a href="#" class="text-gray-500 hover:text-[#ffff] dark:hover:text-white">
						<svg class="sm:w-[24px] w-[10px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
								d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
								fill="white"></path>
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M11.6406 9.7537L11.6658 10.1689L11.2461 10.1181C9.71843 9.92318 8.38383 9.26221 7.25067 8.15211L6.69668 7.6013L6.55399 8.00805C6.25181 8.91477 6.44487 9.87234 7.0744 10.5164C7.41015 10.8723 7.33461 10.9231 6.75544 10.7113C6.55399 10.6435 6.37772 10.5926 6.36093 10.6181C6.30218 10.6774 6.50363 11.4485 6.66311 11.7536C6.88134 12.1773 7.32621 12.5925 7.81305 12.8382L8.22434 13.0331L7.73751 13.0416C7.26746 13.0416 7.25067 13.0501 7.30103 13.2281C7.46891 13.7789 8.13201 14.3636 8.87066 14.6178L9.39108 14.7957L8.93781 15.0669C8.26631 15.4567 7.4773 15.677 6.68829 15.694C6.31057 15.7025 6 15.7364 6 15.7618C6 15.8465 7.02404 16.3211 7.61999 16.5075C9.40786 17.0583 11.5315 16.821 13.1263 15.8804C14.2595 15.211 15.3926 13.8806 15.9214 12.5925C16.2068 11.9061 16.4922 10.6519 16.4922 10.0503C16.4922 9.66049 16.5174 9.60964 16.9874 9.14357C17.2644 8.8724 17.5246 8.57581 17.575 8.49107C17.6589 8.33007 17.6505 8.33007 17.2224 8.47412C16.509 8.72834 16.4083 8.69445 16.7608 8.31312C17.021 8.04195 17.3316 7.55046 17.3316 7.4064C17.3316 7.38098 17.2057 7.42335 17.063 7.49961C16.9119 7.58435 16.5761 7.71146 16.3243 7.78773L15.8711 7.93179L15.4598 7.65214C15.2331 7.49961 14.9142 7.33013 14.7463 7.27929C14.3182 7.16065 13.6635 7.1776 13.2774 7.31318C12.2282 7.69451 11.5651 8.6775 11.6406 9.7537Z"
								fill="white"></path>
						</svg>
					</a><a href="#" class="text-gray-500 hover:text-[#ffff] dark:hover:text-white">
						<svg class="sm:w-[24px] w-[10px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
								d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
								fill="white"></path>
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M17.0004 7.87476C17.5512 8.02589 17.9849 8.4712 18.1321 9.03671C18.3996 10.0616 18.3996 12.2001 18.3996 12.2001C18.3996 12.2001 18.3996 14.3385 18.1321 15.3635C17.9849 15.929 17.5512 16.3743 17.0004 16.5255C16.0023 16.8001 11.9996 16.8001 11.9996 16.8001C11.9996 16.8001 7.99692 16.8001 6.99874 16.5255C6.44797 16.3743 6.01423 15.929 5.86703 15.3635C5.59961 14.3385 5.59961 12.2001 5.59961 12.2001C5.59961 12.2001 5.59961 10.0616 5.86703 9.03671C6.01423 8.4712 6.44797 8.02589 6.99874 7.87476C7.99692 7.6001 11.9996 7.6001 11.9996 7.6001C11.9996 7.6001 16.0023 7.6001 17.0004 7.87476ZM10.7996 10.4001V14.4001L13.9996 12.4001L10.7996 10.4001Z"
								fill="white"></path>
						</svg>
					</a>
				</div>
			</div>
		</footer>
	</div>
</div>
@endsection