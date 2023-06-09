@extends('layouts.master')

@section('title')
    Home
@endsection
@php
	use App\Models\Curentrank;
	use App\Models\platform;
	$curentrank = Curentrank::All();
	$curentrank = Curentrank::distinct()->pluck('name');
	//dd($platform);
@endphp
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.css" rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}">


@section('content')
<section class="flex flex-col items-center md:justify-start justify-center md:mt-[205px] mt-[84px] mb-[103px]">
			<div class="flex justify-center items-center mx-auto">
				<svg class="sm:w-[450px] w-[248px]" width="450" height="48" viewBox="0 0 450 48" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M445.306 0H414.694C412.102 0 410 2.10352 410 4.69834V43.3017C410 45.8965 412.102 48 414.694 48H445.306C447.898 48 450 45.8965 450 43.3017V4.69834C450 2.10352 447.898 0 445.306 0ZM426.668 33.9782L438.593 22.4065C439.329 21.7598 440.004 21.0428 440.609 20.2653C441.428 19.1615 441.911 17.8329 441.996 16.4474C442.057 15.5264 442.05 14.5975 442.042 13.6765C442.039 13.2536 441.998 12.8319 441.919 12.4169C441.823 11.9302 441.676 11.4553 441.483 11L421.326 30.6169C420.661 31.2392 420.026 31.896 419.426 32.5849C418.494 33.7178 417.988 35.156 418 36.6389V41H438.578C439.368 41.0006 440.139 40.7504 440.785 40.2836C441.523 39.764 442.115 39.0539 442.501 38.2248C442.887 37.3957 443.054 36.4768 442.985 35.5605V33.9861L426.668 33.9782ZM436.108 7C437.173 7.01391 438.198 7.41284 439 8.12535L432.817 14.0375H424.943V18H418.004V14.83C417.956 13.223 418.356 11.6351 419.158 10.2493C419.898 8.7895 421.171 7.68273 422.705 7.16642C423.099 7.05564 423.505 6.99966 423.914 7H436.108Z"
						fill="#EA4A65"></path>
					<path
						d="M384.541 7.33348V20.0059C384.541 20.0923 384.506 20.1751 384.446 20.2362C384.385 20.2973 384.303 20.3316 384.217 20.3316H364.782C364.697 20.3316 364.615 20.2973 364.554 20.2362C364.494 20.1751 364.459 20.0923 364.459 20.0059V7.33348C364.459 7.29172 364.451 7.25038 364.435 7.2118C364.42 7.17322 364.396 7.13819 364.367 7.10866C364.338 7.07913 364.303 7.05569 364.265 7.03971C364.227 7.02374 364.186 7.01553 364.144 7.01553H353.323C353.281 7.01449 353.239 7.02195 353.2 7.03747C353.161 7.05298 353.125 7.07624 353.095 7.10587C353.065 7.1355 353.041 7.17089 353.025 7.20998C353.008 7.24907 353 7.29106 353 7.33348V40.6819C353 40.7243 353.008 40.7664 353.025 40.8055C353.041 40.8445 353.065 40.8799 353.095 40.9096C353.125 40.9392 353.161 40.9624 353.2 40.978C353.239 40.9935 353.281 41.0009 353.323 40.9999H364.144C364.228 40.9999 364.308 40.9664 364.367 40.9068C364.426 40.8471 364.459 40.7663 364.459 40.6819V27.994C364.459 27.9076 364.494 27.8248 364.554 27.7637C364.615 27.7026 364.697 27.6683 364.782 27.6683H384.217C384.303 27.6683 384.385 27.7026 384.446 27.7637C384.506 27.8248 384.541 27.9076 384.541 27.994V40.6664C384.541 40.7508 384.574 40.8316 384.633 40.8913C384.692 40.9509 384.772 40.9844 384.856 40.9844H395.685C395.768 40.9844 395.849 40.9509 395.908 40.8913C395.967 40.8316 396 40.7508 396 40.6664V7.31798C396 7.23364 395.967 7.15276 395.908 7.09313C395.849 7.0335 395.768 7 395.685 7H384.856C384.813 6.99995 384.771 7.00867 384.731 7.02561C384.692 7.04255 384.657 7.06736 384.627 7.09855C384.598 7.12974 384.575 7.16666 384.56 7.20705C384.545 7.24743 384.538 7.29044 384.541 7.33348Z"
						fill="white"></path>
					<path
						d="M125.939 15.5797V7.31847C125.939 7.27601 125.931 7.23397 125.914 7.19483C125.898 7.15569 125.875 7.12026 125.845 7.0906C125.815 7.06094 125.779 7.03765 125.741 7.02212C125.702 7.00659 125.66 6.99912 125.619 7.00016H97.2327C97.1746 6.99828 97.1171 7.01335 97.0671 7.04361C97.0171 7.07388 96.9767 7.11807 96.9505 7.17097L92.0085 17.0471C91.9972 17.0956 91.9972 17.1461 92.0085 17.1946V40.6816C92.0085 40.724 92.0168 40.7661 92.033 40.8052C92.0492 40.8444 92.0729 40.8798 92.1028 40.9095C92.1326 40.9391 92.168 40.9624 92.2068 40.9779C92.2456 40.9935 92.2871 41.0009 92.3288 40.9999H125.68C125.721 41.0009 125.763 40.9935 125.802 40.9779C125.841 40.9624 125.876 40.9391 125.906 40.9095C125.936 40.8798 125.959 40.8444 125.975 40.8052C125.992 40.7661 126 40.724 126 40.6816V32.4049C126 32.3184 125.966 32.2354 125.906 32.1743C125.846 32.1131 125.765 32.0788 125.68 32.0788H103.662C103.577 32.0788 103.495 32.0444 103.435 31.9832C103.375 31.9221 103.342 31.8391 103.342 31.7526V28.0025C103.342 27.916 103.375 27.8331 103.435 27.7719C103.495 27.7108 103.577 27.6764 103.662 27.6764H121.851C121.893 27.6764 121.935 27.668 121.974 27.6516C122.013 27.6352 122.048 27.6112 122.078 27.5809C122.107 27.5506 122.131 27.5147 122.147 27.4751C122.163 27.4356 122.171 27.3931 122.171 27.3503V20.6653C122.171 20.5788 122.138 20.4958 122.078 20.4347C122.018 20.3735 121.936 20.3392 121.851 20.3392H103.662C103.577 20.3392 103.495 20.3048 103.435 20.2437C103.375 20.1825 103.342 20.0996 103.342 20.0131V16.2552C103.342 16.1687 103.375 16.0857 103.435 16.0246C103.495 15.9634 103.577 15.9291 103.662 15.9291H125.642C125.684 15.9272 125.726 15.9165 125.764 15.8976C125.802 15.8788 125.836 15.8522 125.864 15.8195C125.892 15.7868 125.913 15.7487 125.926 15.7075C125.939 15.6662 125.943 15.6227 125.939 15.5797Z"
						fill="white"></path>
					<path
						d="M255.767 7.00016H243.236C243.177 6.99828 243.119 7.01334 243.068 7.04358C243.018 7.07383 242.977 7.11799 242.95 7.17085L226.031 40.5343C226.008 40.584 225.997 40.6389 226.001 40.6938C226.004 40.7487 226.021 40.8018 226.05 40.8483C226.08 40.8948 226.12 40.9331 226.168 40.9596C226.216 40.9861 226.27 40.9999 226.325 40.9998H238.523C238.582 41.0017 238.641 40.9866 238.691 40.9564C238.742 40.9261 238.783 40.882 238.809 40.8291L249.216 20.3223C249.243 20.2704 249.285 20.227 249.335 20.1968C249.385 20.1665 249.443 20.1506 249.501 20.1506C249.56 20.1506 249.618 20.1665 249.668 20.1968C249.718 20.227 249.76 20.2704 249.787 20.3223L260.186 40.8291C260.214 40.882 260.257 40.926 260.309 40.9561C260.361 40.9862 260.42 41.0014 260.479 40.9998H272.678C272.733 41.0007 272.787 40.9873 272.835 40.9608C272.884 40.9343 272.924 40.8957 272.953 40.8487C272.982 40.8018 272.998 40.7481 273 40.693C273.002 40.6379 272.989 40.5832 272.964 40.5343L256.053 7.17085C256.026 7.11859 255.984 7.07493 255.934 7.04479C255.883 7.01465 255.826 6.9992 255.767 7.00016Z"
						fill="white"></path>
					<path
						d="M225.246 7.17097L217.86 21.781C217.834 21.8352 217.794 21.881 217.744 21.913C217.693 21.9451 217.635 21.9621 217.575 21.9621C217.516 21.9621 217.458 21.9451 217.407 21.913C217.357 21.881 217.316 21.8352 217.291 21.781L209.905 7.17097C209.878 7.11811 209.838 7.07394 209.787 7.0437C209.737 7.01345 209.679 6.99839 209.62 7.00027H201.388C201.328 6.99875 201.269 7.01388 201.218 7.044C201.166 7.07413 201.124 7.11808 201.095 7.17097L193.717 21.781C193.691 21.8352 193.651 21.881 193.601 21.913C193.55 21.9451 193.492 21.9621 193.432 21.9621C193.373 21.9621 193.314 21.9451 193.264 21.913C193.214 21.881 193.173 21.8352 193.148 21.781L185.762 7.17097C185.735 7.11811 185.694 7.07394 185.644 7.0437C185.594 7.01345 185.536 6.99839 185.477 7.00027H173.328C173.273 6.99797 173.218 7.01039 173.169 7.03631C173.12 7.06222 173.079 7.10072 173.049 7.1479C173.019 7.19509 173.003 7.2493 173 7.3051C172.998 7.36091 173.01 7.41632 173.036 7.46579L189.885 40.8291C189.912 40.882 189.953 40.9262 190.003 40.9564C190.054 40.9867 190.112 41.0017 190.17 40.9998H196.694C196.753 41.0008 196.811 40.9854 196.861 40.9552C196.911 40.9251 196.952 40.8814 196.979 40.8291L205.219 24.5354C205.247 24.4835 205.288 24.4402 205.338 24.4099C205.388 24.3797 205.446 24.3637 205.504 24.3637C205.562 24.3637 205.62 24.3797 205.67 24.4099C205.72 24.4402 205.761 24.4835 205.789 24.5354L214.029 40.8291C214.055 40.882 214.096 40.9262 214.146 40.9564C214.197 40.9867 214.255 41.0017 214.313 40.9998H220.822C220.882 41.0005 220.94 40.985 220.992 40.955C221.043 40.9249 221.086 40.8815 221.115 40.8291L237.964 7.46579C237.989 7.41691 238.002 7.36224 238 7.30712C237.998 7.25199 237.982 7.19831 237.953 7.15136C237.924 7.10441 237.884 7.06578 237.836 7.03929C237.788 7.0128 237.734 6.99937 237.679 7.00027H225.531C225.472 6.99839 225.414 7.01345 225.364 7.0437C225.313 7.07394 225.273 7.11811 225.246 7.17097Z"
						fill="white"></path>
					<path
						d="M340.059 7.00009H314.85C313.742 6.99567 312.641 7.16059 311.582 7.48924C311.541 7.50124 311.502 7.52197 311.469 7.55007C311.436 7.57816 311.409 7.61299 311.39 7.65229L306.009 18.3437C305.997 18.3922 305.997 18.4428 306.009 18.4913V33.9655C306.009 37.8477 309.991 41 314.896 41H340.105C345.018 41 349 37.8555 349 33.9655V27.9637C349 27.8772 348.966 27.7943 348.905 27.7331C348.845 27.672 348.763 27.6376 348.677 27.6376H337.814C337.728 27.6376 337.646 27.672 337.586 27.7331C337.525 27.7943 337.491 27.8772 337.491 27.9637V30.425C337.491 30.8554 337.322 31.2681 337.02 31.5725C336.719 31.8768 336.31 32.0478 335.884 32.0478H319.024C318.599 32.0457 318.191 31.8741 317.89 31.5702C317.59 31.2663 317.42 30.8548 317.418 30.425V17.5052C317.42 17.0754 317.59 16.6639 317.89 16.36C318.191 16.0561 318.599 15.8845 319.024 15.8825H335.884C336.31 15.8825 336.719 16.0534 337.02 16.3578C337.322 16.6621 337.491 17.0748 337.491 17.5052V19.9665C337.491 20.053 337.525 20.1359 337.586 20.1971C337.646 20.2582 337.728 20.2926 337.814 20.2926H348.631C348.717 20.2926 348.799 20.2582 348.859 20.1971C348.92 20.1359 348.954 20.053 348.954 19.9665V13.988C348.954 10.1058 344.971 7.00009 340.059 7.00009Z"
						fill="white"></path>
					<path
						d="M305.692 7.00004H261.325C261.27 6.99914 261.215 7.01261 261.166 7.03912C261.118 7.06562 261.077 7.10426 261.048 7.15124C261.019 7.19822 261.002 7.25194 261 7.3071C260.998 7.36227 261.011 7.417 261.036 7.46591L265.27 15.7427C265.297 15.7964 265.338 15.8417 265.389 15.8733C265.44 15.9049 265.499 15.9215 265.559 15.9212H277.372C277.415 15.9212 277.458 15.9297 277.497 15.9461C277.537 15.9625 277.573 15.9865 277.604 16.0168C277.634 16.047 277.658 16.083 277.675 16.1225C277.691 16.1621 277.7 16.2045 277.7 16.2473V40.6817C277.7 40.7661 277.733 40.8471 277.793 40.9068C277.853 40.9665 277.934 41 278.019 41H288.998C289.083 41 289.164 40.9665 289.224 40.9068C289.284 40.8471 289.318 40.7661 289.318 40.6817V16.2085C289.318 16.122 289.352 16.0391 289.414 15.9779C289.475 15.9168 289.558 15.8824 289.645 15.8824H301.458C301.518 15.8818 301.577 15.8648 301.628 15.8333C301.678 15.8018 301.72 15.757 301.747 15.7038L305.981 7.42707C305.998 7.37992 306.004 7.32938 305.998 7.27957C305.992 7.22976 305.974 7.18212 305.946 7.14048C305.917 7.09885 305.88 7.06442 305.836 7.04002C305.792 7.01561 305.743 7.00191 305.692 7.00004Z"
						fill="white"></path>
					<path
						d="M74.0527 40.806L90.9639 7.4653C90.9894 7.41646 91.0017 7.36183 90.9998 7.30674C90.9979 7.25165 90.9817 7.19801 90.9529 7.15109C90.924 7.10417 90.8835 7.06557 90.8354 7.0391C90.7872 7.01263 90.733 6.9992 90.6781 7.0001H78.4795C78.4196 6.99859 78.3605 7.0137 78.3087 7.04381C78.2569 7.07391 78.2144 7.11784 78.1859 7.17069L67.8028 27.6868C67.775 27.7387 67.7338 27.782 67.6834 27.8122C67.6331 27.8424 67.5756 27.8584 67.5169 27.8584C67.4583 27.8584 67.4007 27.8424 67.3504 27.8122C67.3001 27.782 67.2588 27.7387 67.2311 27.6868L56.8093 7.19395C56.7829 7.14112 56.7419 7.09698 56.6912 7.06676C56.6406 7.03654 56.5824 7.02149 56.5235 7.02336H44.3249C44.2701 7.02329 44.2162 7.03714 44.1682 7.06361C44.1202 7.09009 44.0797 7.12831 44.0504 7.17476C44.021 7.2212 44.0039 7.27435 44.0006 7.32922C43.9973 7.38409 44.0078 7.4389 44.0313 7.48856L60.9502 40.8293C60.9767 40.8821 61.0177 40.9262 61.0683 40.9564C61.119 40.9867 61.1772 41.0017 61.2361 40.9998H73.7669C73.8281 40.9987 73.8877 40.9798 73.9384 40.9454C73.9891 40.911 74.0288 40.8626 74.0527 40.806Z"
						fill="white"></path>
					<path
						d="M37.1013 7.5202C37.0821 7.47892 37.0543 7.44231 37.0198 7.41284C36.9853 7.38337 36.9449 7.36173 36.9014 7.34938C35.9863 7.11674 35.0462 6.99939 34.1025 7H8.88894C3.97542 7.03882 0 10.1445 0 14.0267V33.9577C0.00342644 34.9974 0.285046 36.0168 0.815076 36.9082C0.837601 36.9488 0.868503 36.9842 0.905698 37.0118C0.942892 37.0394 0.985515 37.0586 1.03069 37.0682C1.07587 37.0778 1.12256 37.0774 1.1676 37.0672C1.21265 37.0571 1.255 37.0372 1.29182 37.0091L11.3342 29.1827C11.3725 29.1521 11.4035 29.1132 11.4248 29.0688C11.4462 29.0244 11.4572 28.9758 11.4572 28.9264V17.5439C11.4592 17.1142 11.6292 16.7026 11.9301 16.3987C12.2311 16.0949 12.6387 15.9232 13.0643 15.9212H29.9271C30.3527 15.9232 30.7603 16.0949 31.0613 16.3987C31.3622 16.7026 31.5322 17.1142 31.5342 17.5439V30.456C31.5322 30.8858 31.3622 31.2973 31.0613 31.6012C30.7603 31.9051 30.3527 32.0767 29.9271 32.0788H15.3788C15.3085 32.0779 15.2402 32.1027 15.1866 32.1486L5.28262 39.8664C5.23639 39.9023 5.20068 39.9502 5.17927 40.005C5.15786 40.0598 5.15155 40.1195 5.16102 40.1776C5.17048 40.2357 5.19536 40.2902 5.23302 40.3352C5.27068 40.3802 5.3197 40.4141 5.37489 40.4332C6.50832 40.8122 7.69499 41.0036 8.88894 41H34.1025C39.016 41 42.9914 37.8554 42.9914 33.9655V19.2754C43.0029 19.2269 43.0029 19.1764 42.9914 19.1279L37.1013 7.5202Z"
						fill="white"></path>
					<path
						d="M158.3 20.3299H147.333C147.291 20.3299 147.25 20.3384 147.212 20.3549C147.173 20.3713 147.138 20.3955 147.109 20.4258C147.08 20.4562 147.057 20.4922 147.042 20.5317C147.027 20.5712 147.02 20.6134 147.021 20.6558V27.4449C147.019 27.5121 147.032 27.5788 147.058 27.6404C147.085 27.702 147.124 27.7571 147.173 27.8019L161.116 40.899C161.144 40.9277 161.177 40.9501 161.213 40.9648C161.25 40.9795 161.29 40.9862 161.329 40.9844H175.69C175.756 40.9838 175.82 40.9623 175.872 40.9228C175.925 40.8834 175.965 40.8279 175.985 40.7644C176.005 40.7009 176.005 40.6325 175.985 40.5689C175.965 40.5054 175.926 40.4498 175.873 40.4102L162.28 27.6467H162.516C167.379 27.6467 171.314 24.4965 171.314 20.617V14.0296C171.314 10.1501 167.379 7 162.516 7H131.312C131.271 7 131.23 7.00824 131.193 7.02422C131.155 7.04021 131.12 7.06364 131.091 7.09318C131.062 7.12272 131.039 7.15777 131.024 7.19637C131.008 7.23496 131 7.27635 131 7.31812V40.6818C131 40.7662 131.033 40.8471 131.091 40.9067C131.15 40.9664 131.229 40.9999 131.312 40.9999H142.02C142.062 41.0009 142.103 40.9935 142.142 40.978C142.181 40.9624 142.216 40.9391 142.246 40.9095C142.276 40.8799 142.299 40.8444 142.316 40.8053C142.332 40.7662 142.34 40.7242 142.34 40.6818V16.2487C142.34 16.1623 142.374 16.0794 142.434 16.0183C142.494 15.9572 142.575 15.9228 142.66 15.9228H158.247C158.668 15.9228 159.073 16.0937 159.371 16.3978C159.67 16.7019 159.837 17.1144 159.837 17.5445V18.685C159.845 19.1105 159.688 19.522 159.401 19.83C159.113 20.1381 158.717 20.3177 158.3 20.3299Z"
						fill="white"></path>
				</svg>
			</div>
			<div class="flex flex justify-center items-center mx-auto">
				<h2
					class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">
					THE BEST &nbsp;</h2>
				<h2
					class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#e94a65] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">
					OVERWATCH 2 &nbsp;</h2>
				<h2
					class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">
					BOOSTING SERVICE</h2>
			</div>
		</section>
		<div class="rank-boost px-8 mx-auto xl:w-fit w-full flex mb-[60px] ">
			<div>
				<ol class="flex flex-row items-center justify-center sm:gap-[51px] gap-[40px] text-sm">
					<div class="flex flex-row items-center justify-center sm:gap-[72px] gap-[80px] ">

					<li
						class="flex items-center justify-center text-[#72B218] bg-[#E94A65] h-[40px] lg:w-[276px] lg:h-[56px] w-[240px] rounded-[39px]">
						<svg class="" width="29" height="29" viewBox="0 0 29 29" fill="none"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<mask id="mask0_463_3795" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
								width="29" height="29">
								<rect width="29" height="29" fill="url(#pattern0)"></rect>
							</mask>
							<g mask="url(#mask0_463_3795)">
								<rect width="29" height="29" fill="white"></rect>
							</g>
							<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_463_3795" transform="scale(0.00195312)"></use>
								</pattern>
								<image id="image0_463_3795" width="512" height="512"
									xlink:href="data:image/png;base64,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">
								</image>
							</defs>
						</svg>
						<span
							class="text-[#ffff] whitespace-nowrap font-[Rubik] font-normal  font-[500] lg:text-[18px] text-[14px] ml-[7px] sm:ml-4">RANK
							BOOSTING</span>
					</li>
					<li class="flex items-center justify-center text-[#72B218]">
						<img src="img/444.svg" alt="">
						<span
							class=" text-[#ffff] whitespace-nowrap font-[Rubik] font-normal font-[500] lg:text-[18px] text-[14px] xl:ml-4 ml-[7px]"><a href="boost2.html">WIN BOOSTING</a> 
						</span>
					</li>
						<li class="flex items-center justify-center text-[#72B218]">
							<img  src="img/356.svg" alt="">
							<span
								class="text-[#ffff] whitespace-nowrap font-[Rubik] font-normal font-[500] lg:text-[18px] text-[14px]  ml-[7px] sm:ml-4"><a href="boost3.html">PLACEMENT MATCHES</a> 
								</span>
						</li>
						<li class="flex items-center justify-center text-[#72B218]">
							<img src="img/666.svg" alt="">
							<span
								class=" text-[#ffff]  whitespace-nowrap	 font-[Rubik] font-normal font-[500] lg:text-[18px] text-[14px] ml-[7px] sm:ml-4"><a href="boost4.html">QUICK PLAY</a> 
							</span>
						</li>
						<li class="flex items-center justify-center text-[#72B218]">
							<img  src="img/888.svg" alt="">
							<span
								class=" text-[#ffff] whitespace-nowrap	 font-[Rubik] font-normal font-[500] lg:text-[18px] text-[14px] ml-[7px] sm:ml-4"><a href="">COACHING</a> </span>
						</li>
					</div>
				</ol>
			</div>
		</div>

	<div class="container flex justify-center mx-auto items-center">
		<div class="flex lg:flex-row flex-col justify-center items-center lg:gap-[139px] gap-[70px]">
			<div class="flex flex-col lg:gap-[70px] gap-[30px]">
				<div class="flex">
					<span class="mr-4">
						<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="2" cy="2" r="2" fill="#E94A65"></circle>
						</svg>
					</span>
					<h1 id="h1-style-mb" class=" text-[#E94A65] xl:text-[#ffff] font-[Manrope] font-normal font-[700] sm:mx-0 mx-auto text-[18px] sm:text-[22px]">
						<span class="text-[#ffff] font-[Manrope] font-normal font-[700]">SELECT YOUR </span><span class="text-[#E94A65]">CURRENT
						RANK </span> 
					</h1>
				</div>
				<div class="flex flex-row justify-center item-center gap-[139px]">
					<li class="flex items-center justify-center text-[#72B218] rounded-[39px]">
						<select  id="c-rank" style="outline: none; " name="" class=" sm:w-[245px] w-[134px] sm:pl-[30%] pl-[25%] sm:h-[49px] h-[33px] font-[Manrope] font-bold  bg-[#E94A65] text-[#ffff] sm:text-[16px] text-[10px] rounded-[7px] mr-4">
							<option class="font-[Manrope] font-[600] text-[16px]" value="bronze">Bronze</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Silver">Silver</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Gold">Gold </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Platinum">Platinum </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Diamond">Diamond</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="">Master </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="">Grandmaster </option>
						</select>
						<select style="outline: none; " name="" id="c-num" class=" sm:w-[78px] w-[60px] sm:pl-[8%] pl-[10%] h-[33px] sm:h-[48px] font-[Inter] font-bold sm:text-[16px] text-[10px] bg-[#131429] text-[#ffff] rounded-[7px] border border-[#E14A7D]">
							<option class="font-[Inter] font-normal" value="1">1</option>
							<option class="font-[Inter] font-normal" value="2">2</option>
							<option class="font-[Inter] font-normal" value="3">3</option>
							<option class="font-[Inter] font-normal" value="4">4</option>
							<option class="font-[Inter] font-normal " value="5">5</option>
						</select>
					</li>
				</div>
			</div>
			<div class="flex flex-col lg:gap-[70px] gap-[30px]">
				<div class="flex">
					<span class="mr-4">
						<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="2" cy="2" r="2" fill="#E94A65"></circle>
						</svg>
					</span>
					<h1 id="h1-style-mb" class=" text-[#E94A65] xl:text-[#ffff] sm:mx-0 mx-auto font-[Manrope] font-normal font-[700] text-[18px] sm:text-[22px]">
						<span class="text-[#ffff] font-[Manrope] font-normal font-[700] ">SELECT YOUR </span> <span class="text-[#E94A65]">DESIRED
						RANK</span> 
					</h1>
				</div>
				<div class="flex flex-row justify-center item-center gap-[139px]">
					<li class="flex items-center justify-center text-[#72B218] rounded-[39px]">
						<select  id="d-rank" style="outline: none; " name="" class=" sm:w-[245px] w-[134px] sm:pl-[30%] pl-[25%] sm:h-[49px] h-[33px] font-[Manrope] font-bold  bg-[#E94A65] text-[#ffff] sm:text-[16px] text-[10px] rounded-[7px] mr-4">
						<option class="font-[Manrope] font-[600] text-[16px]" value="bronze">Bronze</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Silver">Silver</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Gold">Gold </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Platinum">Platinum </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="Diamond">Diamond</option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="">Master </option>
							<option class="font-[Manrope] font-[600] text-[16px]" value="">Grandmaster </option>						
						</select>
						<select style="outline: none; " name="" id="d-num" class=" sm:w-[78px] w-[60px] h-[33px] sm:pl-[8%] pl-[10%] sm:h-[48px] font-[Inter] font-bold sm:text-[16px] text-[10px] bg-[#131429] text-[#ffff] rounded-[7px] border border-[#E14A7D]">
							<option class="font-[Inter] font-normal" value="1">1</option>
							<option class="font-[Inter] font-normal" value="2">2</option>
							<option class="font-[Inter] font-normal" value="3">3</option>
							<option class="font-[Inter] font-normal" value="4">4</option>
							<option class="font-[Inter] font-normal" value="5">5</option>
						</select>
					</li>
				</div>
			</div>
		</div>
		<section
			class="flex flex-col items-center jusitify-center mx-auto sm:mt-[66px] mt-[42px] mb-[30px] sm:mb-[66px]"
			data-aos="fade-up">
			<div class="mb-[-1.2rem] flex flex-row justify-between items-center">
				<span class="mr-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65"></circle>
				</svg>
				<h2 id="h1-style-mb"
					class="mx-[14px] sm:text-[22px] text-[18px]  text-center md:leading-[3.125rem] leading-[60px] whitespace-nowrap	 font-[700] font-[Manrope] text-[#ffff] uppercase">
					SELECT YOUR PLATFORM</h2>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65"></circle>
				</svg>
				<span class="ml-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
			</div>
		</section>
		<div class="flex justify-center items-center mx-auto">
        <div  class="flex grid-cols-3 gap-[8px] sm:gap-[19px] platform">
            <!-- Removed x-data and added a common class 'platform-button' -->
            <div class="flex items-center text-[#72B218] w-full rounded-[39px]">
                <button id="pcButton" data-value="pc" class="platform-button focus:outline-none focus:bg-[#E94A65] border border-[#E14A7D] rounded-[24.5px] flex flex-row justify-center items-center font-[Inter] text-[10px] sm:text-[1rem] color-[#FFFFFF] lg:w-[245px] w-[102px] sm:w-[150px] sm:h-[49px] h-[33px] bg-[#131429] text-white">
                    <img src="{{asset('assets/img/monitor.svg')}}" alt="" class="mr-2 sm:w-[17px] w-[10px]">
                    PC
                </button>
            </div>
            <div class="flex items-center text-[#72B218] w-full rounded-[39px]">
                <button id="ps4ps5Button" data-value="PS4/PS5" class="platform-button focus:outline-none focus:bg-[#E94A65] border border-[#E14A7D] rounded-[24.5px] flex flex-row justify-center items-center font-[Inter] text-[10px] sm:text-[1rem] color-[#FFFFFF] lg:w-[245px] w-[102px] sm:w-[150px] sm:h-[49px] h-[33px] bg-[#131429] text-white">
                    <img src="{{asset('assets/img/playstation 2.svg')}}" alt="" class="mr-2 sm:w-[29px] w-[11px]">
                    PS4/PS5
                </button>
            </div>
            <div class="flex items-center text-[#72B218] w-full rounded-[39px]">
                <button id="xboxButton" data-value="XBOX" class="platform-button focus:outline-none focus:bg-[#E94A65] border border-[#E14A7D] rounded-[24.5px] flex flex-row justify-center items-center font-[Inter] text-[10px] sm:text-[1rem] color-[#FFFFFF] lg:w-[245px] w-[102px] sm:w-[150px] sm:h-[49px] h-[33px] bg-[#131429] text-white">
                    <img src="{{asset('assets/img/xbox.svg')}}" alt="" class="mr-2 sm:w-[20px] w-[9px]">
                    XBOX
                </button>
            </div>
        </div>
    </div>
		<section
			class="flex flex-col items-center jusitify-center mx-auto sm:mt-[66px] mt-[42px] mb-[20px] sm:mb-[66px]"
			data-aos="fade-up">
			<div class="mb-[-1.2rem] flex flex-row justify-between items-center">
				<span class="mr-[41px] xl:inline hidden "
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<h2 id="h1-style-mb"
					class="mx-[14px] sm:text-[22px] text-[18px] text-center md:leading-[3.125rem] whitespace-nowrap leading-[60px] font-[600] font-[Manrope] text-[#ffff] uppercase">
					SELECT ROLE & SERVER</h2>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<span class="ml-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
			</div>
		</section>
		<div class="role-server justify-center grow columns-2 gap-[20px] sm:gap-[50px]">
			<div class="roleandtank-p">
				<h3 class="text-[#ffff] font-[Manrope] font-normal font-[500] text-[18px]">Role:</h3>
				<div
					class="mt-[15px] roleandtank flex justify-center item-center gap-[19px] columns-3 text-sm font-[Inter] ">
					<div class="flex items-center   text-[#72B218] rounded-[39px]" x-data="{ active: false }">
						<button :class="{ 'bg-[#E94A65]': active }" @click="active = !active" class="focus:outline-none  focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] md:w-[200px] w-[102px] md:h-[83px] h-[33px] bg-[#131429] text-white">
							<img src="{{asset('assets/img/shield 2.svg')}}" alt="" class="mr-2 md:w-[32px] w-[18px]">
							Tank
						</button>
					</div>
					<div class="flex items-center  text-[#72B218] w-full rounded-[39px]" x-data="{ active: false }">
						<button :class="{ 'bg-[#E94A65]': active }" @click="active = !active" class="focus:outline-none  focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] md:w-[200px] w-[102px] md:h-[83px] h-[33px] bg-[#131429] text-white">
							<img src="{{asset('assets/img/demage.svg')}}" alt="" class="mr-2 md:w-[32px] w-[10px]">
							Damage
						</button>
					</div>
					<div class="flex items-center  text-[#72B218] w-full rounded-[39px]" x-data="{ active: false }">
						<button :class="{ 'bg-[#E94A65]': active }" @click="active = !active"class="focus:outline-none focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] w-[102px]  md:w-[200px] md:h-[83px] h-[33px] bg-[#131429] text-white">
							<img src="{{asset('assets/img/support.png')}}" alt="" class="mr-2 md:w-[32px] w-[11px]">
							Support
						</button>
					</div>
				</div>
			</div>
			<div class="roleandtank-p">
				<h3 class="text-[#ffff] font-[Manrope] font-normal font-[500] text-[18px]">Server:</h3>
				<div
					class="mt-[15px] server flex justify-center item-center gap-[19px] columns-3 text-sm font-[Inter] ">
					<button
					 class="focus:outline-none  focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] md:w-[200px] w-[102px] md:h-[83px] h-[33px] bg-[#131429] text-white">
						<img src="{{asset('assets/img/europe.svg')}}" alt="" class="mr-2 md:w-[40px] w-[14px]">
						Europe
					</button>
					<button
					 class="focus:outline-none  focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] md:w-[200px] w-[102px] md:h-[83px] h-[33px] bg-[#131429] text-white">
						<img src="{{asset('assets/img/north.svg')}}" alt="" class="mr-2 md:w-[40px] w-[22px]">
						North America
					</button>
					<button
					 class="focus:outline-none  focus:bg-[#E94A65] border border-[#E14A7D]  rounded-[7px] flex flex-row justify-center items-center font-[Inter] md:text-[1rem] text-[10px] color-[#FFFFFF] xl:w-[182px] md:w-[200px] w-[102px] md:h-[83px] h-[33px] bg-[#131429] text-white">
						<img src="{{asset('assets/img/assia.svg')}}" alt="" class="mr-2 md:w-[34px] w-[17px]">
						Asia
					</button>
				</div>
			</div>
		</div>
		<section
			class="flex flex-col items-center jusitify-center mx-auto sm:mt-[66px] mt-[42px] mb-[30px] sm:mb-[66px]"
			data-aos="fade-up">
			<div class="mb-[-1.2rem] flex flex-row justify-between items-center">
				<span class="mr-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<h2 id="h1-style-mb"
					class="mx-[14px] whitespace-nowrap sm:text-[22px] text-[18px]  text-center md:leading-[3.125rem] leading-[60px] font-[700] font-[Manrope] text-[#ffff] uppercase">
					BOOSTING ADDONS</h2>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<span class="ml-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
			</div>
		</section>
		<div class="flex flex-col justify-center items-center">
			<div class="flex md:gap-[53px] w-full gap-[18px] mb-[49px] boosting-add">
				<div id="el-bo" class="flex justify-between form-check form-check-inline md:w-[200px] w-fit">
					<div class="flex flex-row items-center ">
						<input datat-addon-percent="0"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#2CA8FF] bg-[#131429] checked:bg-[#2CA8FF] checked:border-[#2CA8FF] focus:outline-none transition duration-200  bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label md:text-[18px] text-[10px] font-[Manrope] font-medium inline-block text-[#ffff]"
							for="inlineRadio10">Open queue</label>
					</div>
					<p
						class="border border-[#2CA8FF] rounded-[12px] md:ml-0 ml-[8px] flex  justify-center items-center font-[Inter] text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#2CA8FF]">
						Free</p>
				</div>
				<div id="el-bo" class="flex form-check form-check-inline justify-between  md:w-[200px]  w-fit">
					<div class="flex flex-row items-center">
						<input datat-addon-percent="0"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#2CA8FF] bg-[#131429] checked:bg-blue-600 checked:border-[#2CA8FF] focus:outline-none transition duration-200  bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label inline-block md:text-[18px] text-[10px] font-[Manrope] font-medium text-[#ffff]"
							for="inlineRadio20">Appear offline</label>
					</div>
					<p
						class="border border-[#2CA8FF] rounded-[12px] md:ml-0 ml-[8px] flex  justify-center items-center font-[Inter] text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#2CA8FF]">
						Free</p>
				</div>
				<div id="el-bo" class="flex form-check form-check-inline justify-between  md:w-[200px] w-fit">
					<div class="flex flex-row items-center">
						<input datat-addon-percent="15"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#E94A65] bg-[#131429] checked:bg-[#E94A65] checked:border-[#E94A65] focus:outline-none transition duration-200  bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label inline-block md:text-[18px] text-[10px] font-[Manrope] font-medium text-[#ffff] mr-4"
							for="inlineRadio20">Streaming</label>
							
						</div>
					<p
						class="border border-[#E94A65] rounded-[12px] flex  justify-center md:ml-0 ml-[8px]  items-center font-[Inter] text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#E94A65]">
						+15%</p>
				</div>
			</div>
			<div class="flex md:gap-[53px] gap-[18px] boosting-add">
				<div class="flex form-check form-check-inline justify-between  ">
					<div class="flex flex-row items-center">
						<input datat-addon-percent="20"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#E94A65] bg-[#131429] checked:bg-[#E94A65] checked:border-[#E94A65] focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label inline-block md:text-[18px] text-[10px] font-[Manrope] font-medium  text-[#ffff]"
							for="inlineRadio20">Specific Heroes</label>
					</div>
					<p
						class="ml-4 border border-[#E94A65] rounded-[12px] flex  justify-center items-center font-[Inter]  text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#E94A65] ml-4">
						+20%</p>
				</div>
				<div class="flex form-check form-check-inline justify-between  ">
					<div class="flex flex-row items-center">
						<input datat-addon-percent="20"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#E94A65] bg-[#131429] checked:bg-[#E94A65] checked:border-[#E94A65] focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label inline-block md:text-[18px] text-[10px] font-[Manrope] font-medium  text-[#ffff]"
							for="inlineRadio20">One Trick Pony</label>
					</div>
					<p
						class="ml-4 border border-[#E94A65] rounded-[12px] flex  justify-center items-center font-[Inter]  text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#E94A65] ml-4">
						+30%</p>
				</div>
				<div class="flex form-check form-check-inline justify-between  ">
					<div class="flex flex-row items-center">
						<input datat-addon-percent="40"
							class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-[#E94A65] bg-[#131429] checked:bg-[#E94A65] checked:border-[#E94A65] focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
							type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label inline-block md:text-[18px] text-[10px]  font-[Manrope] font-medium text-[#ffff]"
						for="inlineRadio20">Play with booster</label>
					</div>
					<p
						class="ml-4 border border-[#E94A65] rounded-[12px] flex  justify-center items-center font-[Inter]  text-[8px] sm:text-[12px] color-[#FFFFFF] sm:h-[24px] h-[14px] sm:w-[49px] w-[30px] text-[#E94A65] ml-4">
						+50%</p>
				</div>
			</div>
		</div>
		<section
			class="flex flex-col items-center jusitify-center mx-auto sm:mt-[66px] mt-[42px] mb-[30px] sm:mb-[66px] order-summary"
			data-aos="fade-up">
			<div class="mb-[-1.2rem] flex flex-row justify-between items-center">
				<span class="mr-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<h2 id="h1-style-mb"
					class="mx-[14px] whitespace-nowrap sm:text-[22px] text-[18px]  text-center md:leading-[3.125rem] leading-[60px] font-[700] font-[Manrope] text-[#ffff] uppercase">
					ORDER SUMMARY</h2>
				<svg width="4" class="xl:inline hidden" height="4" viewBox="0 0 4 4" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<circle cx="2" cy="2" r="2" fill="#E94A65" />
				</svg>
				<span class="ml-[41px] xl:inline hidden"
					style="width: 361px; border: 1px solid rgba(117, 112, 149, 0.2);"></span>
			</div>
		</section>
		<div style="margin-right: 0px;" id="box2" class="price-box">
			<div class="price-content mt-4 lg:mr-[80px]">
				<h3 class="text-[#E94A65] mt-6 font-[DM Sans] font-[600] sm:text-[16px] text-[12px]  leading-[20px]">
					Your Order</h3>
				<h3 class="font-[Rubik] font-bold text-[14px] sm:text-[22px] leading-[35px] text-[#ffff]">GOLD ⟶
					PLATINIUM</h3>
				<div style="margin-top: 18px;" class="price-dollar space-x-4">
					<h3 id="ordertoltal" class="font-[Rubik] font-[600] text-[40px] sm:text-[54px] leading-[66px] text-[#E94A65]">
					</h3>
					<select style="outline: none; " name="" id="sel"
						class="w-[63px] sm:w-[75px] h-[28px] text-[12px] sm:text-[1rem] font-[Inter] font-bold  bg-[#232236] text-[#ffff]  pl-3 rounded-[14px]">
						<option class="font-[Inter] font-normal" value="">USD</option>
						<option class="font-[Inter] font-normal" value=""></option>
						<option class="font-[Inter] font-normal" value="BTC"></option>
						<option class="font-[Inter] font-normal" value=""></option>
					</select>
				</div>
				<h3 style="margin-top: 33px;"
					class="include font-[Rubik] font-normal font-[500] text-[14px] sm:text-[18px] leading-[20px] tracking-[-0.03em] mb-[27px]">
					What’s included</h3>
				<div class="flex flex-col pl-[-20px] gap-[21px] mb-[38px]">
					<div class="check-items">
						<img  src="{{asset('assets/img/Check Circle.svg')}}" alt="">
						<p
							class="sm:ml-[12px] ml-[8px] text-white font-[Manrope] font-[500] text-[14px] sm:text-[18px] leading-[20px]">
							Guaranteed Safety</p>
					</div>
					<div class="check-items">
						<img  src="{{asset('assets/img/Check Circle.svg')}}" alt="">
						<p
							class="sm:ml-[12px] ml-[8px] text-white font-[Manrope] font-[500] text-[14px] sm:text-[18px] leading-[20px]">
							Chat with Booster</p>
					</div>
					<div class="check-items">
						<img  src="{{asset('assets/img/Check Circle.svg')}}" alt="">
						<p
							class="sm:ml-[12px] ml-[8px] text-white font-[Manrope] font-[500] text-[14px] sm:text-[18px] leading-[20px]">
							Order Tracking &amp; Scheduling</p>
					</div>
					<div class="check-items">
						<img  src="{{asset('assets/img/Check Circle.svg')}}" alt="">
						<p
							class="sm:ml-[12px] ml-[8px] text-white font-[Manrope] font-[500] text-[14px] sm:text-[18px] leading-[20px]">
							24/7 Live Support</p>
					</div>
				</div>

			</div>
			<div id="purshar"
				class="flex items-center sm:w-[391px] w-[276px] h-13 pl-3 border border-2 border-dashed border-[#6F6C9040] rounded-lg">
				<span>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M3.32408 12.2157L2.05742 10.949C1.54076 10.4324 1.54076 9.58237 2.05742 9.0657L3.32408 7.79902C3.54075 7.58235 3.71575 7.15735 3.71575 6.85735V5.06566C3.71575 4.33233 4.31575 3.73235 5.04909 3.73235H6.84075C7.14075 3.73235 7.56575 3.55737 7.78242 3.34071L9.04908 2.07402C9.56574 1.55736 10.4158 1.55736 10.9324 2.07402L12.1991 3.34071C12.4158 3.55737 12.8407 3.73235 13.1407 3.73235H14.9324C15.6658 3.73235 16.2657 4.33233 16.2657 5.06566V6.85735C16.2657 7.15735 16.4407 7.58235 16.6574 7.79902L17.9241 9.0657C18.4408 9.58237 18.4408 10.4324 17.9241 10.949L16.6574 12.2157C16.4407 12.4324 16.2657 12.8574 16.2657 13.1574V14.949C16.2657 15.6823 15.6658 16.2824 14.9324 16.2824H13.1407C12.8407 16.2824 12.4158 16.4574 12.1991 16.674L10.9324 17.9407C10.4158 18.4574 9.56574 18.4574 9.04908 17.9407L7.78242 16.674C7.56575 16.4574 7.14075 16.2824 6.84075 16.2824H5.04909C4.31575 16.2824 3.71575 15.6823 3.71575 14.949V13.1574C3.71575 12.8491 3.54075 12.4241 3.32408 12.2157Z"
							stroke="#E94A65" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M7.5 12.5L12.5 7.5" stroke="#E94A65" stroke-linecap="round" stroke-linejoin="round">
						</path>
						<path d="M12.0789 12.083H12.0863" stroke="#E94A65" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round"></path>
						<path d="M7.91209 7.91667H7.91957" stroke="#E94A65" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round"></path>
					</svg>
				</span>
				<input type="coupon" name="code" id="coupon" value=""
					class="w-full h-[45px] pl-[15px] outline-none text-white bg-[#18172D] focus:outline-none active:outline-none">
				<button type="submit"
					class="text-[1rem] flex items-center px-3 py-1 text-[#E94A65] bg-[#18172D] rounded-full outline-none md:px-4 focus:out line-none active:outline-none">
					<span class="font-medium">Apply </span>
				</button>
			</div>
			<div id="purshase-now" class="purshase-now sm:w-[391px] w-[276px] h-[60px] mb-[33px]">
				<button id="purchase" href="#" class="text-[#ffff] font-[Manrope] font-600 text-[18px] leading-[20px]">Purchase</button>
			</div>
			<div class="flex items-center space-x-4">
				<span>
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M7.5 14C11.075 14 14 11.075 14 7.5C14 3.925 11.075 1 7.5 1C3.925 1 1 3.925 1 7.5C1 11.075 3.925 14 7.5 14Z"
							stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M5 7.5L6.66471 9L10 6" stroke="white" stroke-linecap="round" stroke-linejoin="round">
						</path>
					</svg>
				</span>
				<p class="text-[#ffff] font-[Manrope] font-normal font-[500] text-[12px] leading-[60px]">Approximate
					complection time: 2 days</p>
			</div>
		</div>
		<section class=" mx-auto mb-[33px] mt-[16px]  sm:mb-[83px]" data-aos="fade-up">
			<div class="">
				<div class=" flex justify-center items-center">
					<div class="w-full">
						<div class="flex flex-wrap items-center justify-center gap-[9px] columns-5">
							<img id="lg1" src="{{asset('assets/img/Visa.svg')}}" alt="image">
							<img class="img-s" src="{{asset('assets/img/Maestro.svg')}}" alt="image">
							<img class="img-s" src="{{asset('assets/img/Stripe.svg')}}" alt="image">
							<img class="img-s" src="{{asset('assets/img/Bitcoin.svg')}}" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<div
			class="flex flex-col bg-[#131429] border-2 p-[20px] border-[#75709540] mx-[10px] rounded-[17px] mb-[79px] sm:mb-[106px]">
			<div class="">
				<h1 class="font-[Manrope] sm:text-[20px] text-[14px] font-[600] text-[#E94A65]">Rank boosting in
					Overwatch </h1>
			</div>
			<p class="font-[Manrope] font-[400] sm:text-[16px] text-[12px] leading-[1.75rem] text-white">
				Please make sure to have no losses played since your rank last updated. If you played losses since your
				rank last updated, consider switching to our win boosting service or playing until your rank is updated
				and buying the boost afterward, otherwise, you might be asked to pay for the losses played before the
				boost.
			</p>
		</div>
		<footer class="p-4 w-[80%] sm:p-6">
			<div class="flex justify-center gap-6">
				<a class="text-pink-600 hover:text-pink-600/75" href="/dribbble" target="_blank" rel="noreferrer"
					aria-label="Dribbble">
					<svg class="w-[76px] sm:w-[154px]" width="154" height="29" viewBox="0 0 154 29" fill="none"
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
					class="font-[Inter] text-sm text-[#D9DBE1] text-[10px] sm:text-[16px]  whitespace-nowrap sm:text-center">©
					2020 ACCMART. All rights reserved</span>
				<div class="flex gap-[4px] sm:gap-[16px] sm:justify-center sm:mt-0">
					<a href="#" class="text-gray-500 hover:text-[#ffff] dark:hover:text-white">
						<svg class="sm:w-[24px] w-[16px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
						<svg class="sm:w-[24px] w-[16px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
								d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z"
								fill="white"></path>
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M11.6406 9.7537L11.6658 10.1689L11.2461 10.1181C9.71843 9.92318 8.38383 9.26221 7.25067 8.15211L6.69668 7.6013L6.55399 8.00805C6.25181 8.91477 6.44487 9.87234 7.0744 10.5164C7.41015 10.8723 7.33461 10.9231 6.75544 10.7113C6.55399 10.6435 6.37772 10.5926 6.36093 10.6181C6.30218 10.6774 6.50363 11.4485 6.66311 11.7536C6.88134 12.1773 7.32621 12.5925 7.81305 12.8382L8.22434 13.0331L7.73751 13.0416C7.26746 13.0416 7.25067 13.0501 7.30103 13.2281C7.46891 13.7789 8.13201 14.3636 8.87066 14.6178L9.39108 14.7957L8.93781 15.0669C8.26631 15.4567 7.4773 15.677 6.68829 15.694C6.31057 15.7025 6 15.7364 6 15.7618C6 15.8465 7.02404 16.3211 7.61999 16.5075C9.40786 17.0583 11.5315 16.821 13.1263 15.8804C14.2595 15.211 15.3926 13.8806 15.9214 12.5925C16.2068 11.9061 16.4922 10.6519 16.4922 10.0503C16.4922 9.66049 16.5174 9.60964 16.9874 9.14357C17.2644 8.8724 17.5246 8.57581 17.575 8.49107C17.6589 8.33007 17.6505 8.33007 17.2224 8.47412C16.509 8.72834 16.4083 8.69445 16.7608 8.31312C17.021 8.04195 17.3316 7.55046 17.3316 7.4064C17.3316 7.38098 17.2057 7.42335 17.063 7.49961C16.9119 7.58435 16.5761 7.71146 16.3243 7.78773L15.8711 7.93179L15.4598 7.65214C15.2331 7.49961 14.9142 7.33013 14.7463 7.27929C14.3182 7.16065 13.6635 7.1776 13.2774 7.31318C12.2282 7.69451 11.5651 8.6775 11.6406 9.7537Z"
								fill="white"></path>
						</svg>
					</a><a href="#" class="text-gray-500 hover:text-[#ffff] dark:hover:text-white">
						<svg class="sm:w-[24px] w-[16px]" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
@endsection

@section('script')
<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const burger = document.querySelectorAll('.navbar-burger');
		const menu = document.querySelectorAll('.navbar-menu');
	
		if (burger.length && menu.length) {
			for (var i = 0; i < burger.length; i++) {
				burger[i].addEventListener('click', function() {
					for (var j = 0; j < menu.length; j++) {
						menu[j].classList.toggle('hidden');
					}
				});
			}
		}
	
		const close = document.querySelectorAll('.navbar-close');
		const backdrop = document.querySelectorAll('.navbar-backdrop');
	
		if (close.length) {
			for (var i = 0; i < close.length; i++) {
				close[i].addEventListener('click', function() {
					for (var j = 0; j < menu.length; j++) {
						menu[j].classList.toggle('hidden');
					}
				});
			}
		}
	
		if (backdrop.length) {
			for (var i = 0; i < backdrop.length; i++) {
				backdrop[i].addEventListener('click', function() {
					for (var j = 0; j < menu.length; j++) {
						menu[j].classList.toggle('hidden');
					}
				});
			}
		}
	});
</script>
<script src="https://cdn.sellix.io/static/js/checkout.js"></script>
<script>
	const curentRank = document.getElementById('c-rank');
	const currentNum = document.getElementById('c-num')
	const desireedRank = document.getElementById('d-rank');
	const desirednum = document.getElementById('d-num')
	const radioButtons = document.querySelectorAll('input[type="radio"]');
	let addonPercentage = 0;

	const rankPricing = {
		"bronze": {
			"1": 10.50,
			"2": 10.50,
			"3": 10.50,
			"4": 10.50,
			"5": 0,
    	},
		"Silver":{
			"1": 11.50,
			"2": 11.50,
			"3": 11.50,
			"4": 11.50,
			"5": 0,
		},
		"Gold":{
			"1": 13,
			"2": 13,
			"3": 12.50,
			"4": 12.50,
			"5": 0,
		},
		"Platinum":{
			"1": 19,
			"2": 17.50,
			"3": 16,
			"4": 15,
			"5": 0,
		},
		"Diamond":{
			"1": 40,
			"2": 35,
			"3": 30,
			"4": 28,
			"5": 0,
		},
  	};

	function calculateTotalPrice(){
		const currentRank = curentRank.value;
		const currentNumber = parseInt(currentNum.value);
		const desiredRank = desireedRank.value;
		const desiredNumber = parseInt(desirednum.value);
		let total = 0;
		let addonPrice = 0;
		if (currentRank === desiredRank) {
			const steps = currentNumber - desiredNumber ;
			if (steps > 0) {
				for (let i = desiredNumber; i <= currentNumber ; i++) {
					total += rankPricing[currentRank][i.toString()];
				}
				const addonPrice = total* (addonPercentage / 100);
				total += addonPrice;
			}
		}else {
			// Calculate total for current rank
			for (let i = desiredNumber; i <= Object.keys(rankPricing[desiredRank]).length; i++) {
				total += rankPricing[desiredRank][i.toString()];
				console.log("the total of this rank is",total);
			}
						// Calculate total for ranks in between
			const ranks = Object.keys(rankPricing);
			const currentRankIndex = ranks.indexOf(currentRank);
			const desiredRankIndex = ranks.indexOf(desiredRank);
			for (let i = currentRankIndex + 1; i < desiredRankIndex; i++) {
				const rank = ranks[i];
				for (let j = 1; j <= Object.keys(rankPricing[rank]).length; j++) {
					total += rankPricing[rank][j.toString()];
				}
				
			}

			// Calculate total for desired rank
			for (let i = 1; i <= currentNumber; i++) {
				total += rankPricing[desiredRank][i.toString()];
			}
			const addonPrice = total* (addonPercentage / 100);
			total += addonPrice;
		}
		console.log(total);
		const orderTotalElement = document.getElementById('ordertoltal');
		orderTotalElement.textContent = '$' + total.toFixed(2);
	}
	calculateTotalPrice();
	[curentRank, currentNum, desireedRank, desirednum].forEach(element => {
    	element.addEventListener('change', calculateTotalPrice);
	});
	
  // Update the total price when the rank or number of wins changes
	radioButtons.forEach((radioButton) => {
			radioButton.addEventListener('change', () => {
				addonPercentage = parseInt(radioButton.getAttribute('datat-addon-percent')) || 0;
				calculateTotalPrice();
			});
		});
const platformButtons = document.querySelectorAll('.platform-button');
const roleButtons = document.querySelectorAll('.roleandtank button');
const serverButtons = document.querySelectorAll('.server button');

// Create variables to store the selected role and server
let selectedRole = null;
let selectedServer = null;

// Add click event listeners to the role buttons
roleButtons.forEach(button => {
  button.addEventListener('click', () => {
    selectedRole = button.textContent.trim();
    console.log(selectedRole);
  });
});

// Add click event listeners to the server buttons
serverButtons.forEach(button => {
  button.addEventListener('click', () => {
    selectedServer = button.textContent.trim();
	console.log(selectedServer);
  });
});

// Add click event listeners to the platform buttons
platformButtons.forEach(button => {
  // Add a click event listener to each button
  button.addEventListener('click', (event) => {
    // Store the chosen platform
    const chosenPlatform = event.target.getAttribute('data-value');
    console.log('Chosen platform:', chosenPlatform);

    const purchaseButton = document.getElementById('purchase');
    purchaseButton.addEventListener('click', async () => {
      const currentrank = curentRank.value;
      const desiredrank = desireedRank.value;
      const currentNumber = parseInt(currentNum.value);
      const desiredNumber = parseInt(desirednum.value);
      const orderTotalElement = document.getElementById('ordertoltal');
      const total_price = parseFloat(orderTotalElement.textContent.replace('$', ''));
      const service = "rank boost";
      const response = await fetch('/order', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({ currentrank, desiredrank, total_price, service, currentNumber, desiredNumber, chosenPlatform, selectedRole, selectedServer }),
      });

      if (response.ok) {
        const order = await response.json();
        window.location.href = order;
      } else {
        console.error('Error:', response.statusText);
      }
    });
  });
});






</script>
@endsection

</html>