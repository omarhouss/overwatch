@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
           <!-- HERO -->
        <section class="container flex flex-col items-center md:justify-start justify-center md:mt-[184px] mt-[84px] md:mb-[11.375rem] mb[84p]">
            <div class="flex flex-row items-center md:justify-start justify-center w-full pl-0 md:pl-[5.5rem]">
                <h2 class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">THE BEST &nbsp;</h2>
                <h2 class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#e94a65] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">OVERWATCH 2 &nbsp;</h2>
                <h2 class="md:text-[0.875rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.2rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">BOOSTING SERVICE</h2>
            </div>
            <div class="flex md:justify-start justify-center md:w-full w-[80%] pl-0 md:pl-[5.5rem]">
                <svg class="w-[full]"  width="450" height="48" viewBox="0 0 450 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M445.306 0H414.694C412.102 0 410 2.10352 410 4.69834V43.3017C410 45.8965 412.102 48 414.694 48H445.306C447.898 48 450 45.8965 450 43.3017V4.69834C450 2.10352 447.898 0 445.306 0ZM426.668 33.9782L438.593 22.4065C439.329 21.7598 440.004 21.0428 440.609 20.2653C441.428 19.1615 441.911 17.8329 441.996 16.4474C442.057 15.5264 442.05 14.5975 442.042 13.6765C442.039 13.2536 441.998 12.8319 441.919 12.4169C441.823 11.9302 441.676 11.4553 441.483 11L421.326 30.6169C420.661 31.2392 420.026 31.896 419.426 32.5849C418.494 33.7178 417.988 35.156 418 36.6389V41H438.578C439.368 41.0006 440.139 40.7504 440.785 40.2836C441.523 39.764 442.115 39.0539 442.501 38.2248C442.887 37.3957 443.054 36.4768 442.985 35.5605V33.9861L426.668 33.9782ZM436.108 7C437.173 7.01391 438.198 7.41284 439 8.12535L432.817 14.0375H424.943V18H418.004V14.83C417.956 13.223 418.356 11.6351 419.158 10.2493C419.898 8.7895 421.171 7.68273 422.705 7.16642C423.099 7.05564 423.505 6.99966 423.914 7H436.108Z" fill="#EA4A65"/>
                    <path d="M384.541 7.33348V20.0059C384.541 20.0923 384.506 20.1751 384.446 20.2362C384.385 20.2973 384.303 20.3316 384.217 20.3316H364.782C364.697 20.3316 364.615 20.2973 364.554 20.2362C364.494 20.1751 364.459 20.0923 364.459 20.0059V7.33348C364.459 7.29172 364.451 7.25038 364.435 7.2118C364.42 7.17322 364.396 7.13819 364.367 7.10866C364.338 7.07913 364.303 7.05569 364.265 7.03971C364.227 7.02374 364.186 7.01553 364.144 7.01553H353.323C353.281 7.01449 353.239 7.02195 353.2 7.03747C353.161 7.05298 353.125 7.07624 353.095 7.10587C353.065 7.1355 353.041 7.17089 353.025 7.20998C353.008 7.24907 353 7.29106 353 7.33348V40.6819C353 40.7243 353.008 40.7664 353.025 40.8055C353.041 40.8445 353.065 40.8799 353.095 40.9096C353.125 40.9392 353.161 40.9624 353.2 40.978C353.239 40.9935 353.281 41.0009 353.323 40.9999H364.144C364.228 40.9999 364.308 40.9664 364.367 40.9068C364.426 40.8471 364.459 40.7663 364.459 40.6819V27.994C364.459 27.9076 364.494 27.8248 364.554 27.7637C364.615 27.7026 364.697 27.6683 364.782 27.6683H384.217C384.303 27.6683 384.385 27.7026 384.446 27.7637C384.506 27.8248 384.541 27.9076 384.541 27.994V40.6664C384.541 40.7508 384.574 40.8316 384.633 40.8913C384.692 40.9509 384.772 40.9844 384.856 40.9844H395.685C395.768 40.9844 395.849 40.9509 395.908 40.8913C395.967 40.8316 396 40.7508 396 40.6664V7.31798C396 7.23364 395.967 7.15276 395.908 7.09313C395.849 7.0335 395.768 7 395.685 7H384.856C384.813 6.99995 384.771 7.00867 384.731 7.02561C384.692 7.04255 384.657 7.06736 384.627 7.09855C384.598 7.12974 384.575 7.16666 384.56 7.20705C384.545 7.24743 384.538 7.29044 384.541 7.33348Z" fill="white"/>
                    <path d="M125.939 15.5797V7.31847C125.939 7.27601 125.931 7.23397 125.914 7.19483C125.898 7.15569 125.875 7.12026 125.845 7.0906C125.815 7.06094 125.779 7.03765 125.741 7.02212C125.702 7.00659 125.66 6.99912 125.619 7.00016H97.2327C97.1746 6.99828 97.1171 7.01335 97.0671 7.04361C97.0171 7.07388 96.9767 7.11807 96.9505 7.17097L92.0085 17.0471C91.9972 17.0956 91.9972 17.1461 92.0085 17.1946V40.6816C92.0085 40.724 92.0168 40.7661 92.033 40.8052C92.0492 40.8444 92.0729 40.8798 92.1028 40.9095C92.1326 40.9391 92.168 40.9624 92.2068 40.9779C92.2456 40.9935 92.2871 41.0009 92.3288 40.9999H125.68C125.721 41.0009 125.763 40.9935 125.802 40.9779C125.841 40.9624 125.876 40.9391 125.906 40.9095C125.936 40.8798 125.959 40.8444 125.975 40.8052C125.992 40.7661 126 40.724 126 40.6816V32.4049C126 32.3184 125.966 32.2354 125.906 32.1743C125.846 32.1131 125.765 32.0788 125.68 32.0788H103.662C103.577 32.0788 103.495 32.0444 103.435 31.9832C103.375 31.9221 103.342 31.8391 103.342 31.7526V28.0025C103.342 27.916 103.375 27.8331 103.435 27.7719C103.495 27.7108 103.577 27.6764 103.662 27.6764H121.851C121.893 27.6764 121.935 27.668 121.974 27.6516C122.013 27.6352 122.048 27.6112 122.078 27.5809C122.107 27.5506 122.131 27.5147 122.147 27.4751C122.163 27.4356 122.171 27.3931 122.171 27.3503V20.6653C122.171 20.5788 122.138 20.4958 122.078 20.4347C122.018 20.3735 121.936 20.3392 121.851 20.3392H103.662C103.577 20.3392 103.495 20.3048 103.435 20.2437C103.375 20.1825 103.342 20.0996 103.342 20.0131V16.2552C103.342 16.1687 103.375 16.0857 103.435 16.0246C103.495 15.9634 103.577 15.9291 103.662 15.9291H125.642C125.684 15.9272 125.726 15.9165 125.764 15.8976C125.802 15.8788 125.836 15.8522 125.864 15.8195C125.892 15.7868 125.913 15.7487 125.926 15.7075C125.939 15.6662 125.943 15.6227 125.939 15.5797Z" fill="white"/>
                    <path d="M255.767 7.00016H243.236C243.177 6.99828 243.119 7.01334 243.068 7.04358C243.018 7.07383 242.977 7.11799 242.95 7.17085L226.031 40.5343C226.008 40.584 225.997 40.6389 226.001 40.6938C226.004 40.7487 226.021 40.8018 226.05 40.8483C226.08 40.8948 226.12 40.9331 226.168 40.9596C226.216 40.9861 226.27 40.9999 226.325 40.9998H238.523C238.582 41.0017 238.641 40.9866 238.691 40.9564C238.742 40.9261 238.783 40.882 238.809 40.8291L249.216 20.3223C249.243 20.2704 249.285 20.227 249.335 20.1968C249.385 20.1665 249.443 20.1506 249.501 20.1506C249.56 20.1506 249.618 20.1665 249.668 20.1968C249.718 20.227 249.76 20.2704 249.787 20.3223L260.186 40.8291C260.214 40.882 260.257 40.926 260.309 40.9561C260.361 40.9862 260.42 41.0014 260.479 40.9998H272.678C272.733 41.0007 272.787 40.9873 272.835 40.9608C272.884 40.9343 272.924 40.8957 272.953 40.8487C272.982 40.8018 272.998 40.7481 273 40.693C273.002 40.6379 272.989 40.5832 272.964 40.5343L256.053 7.17085C256.026 7.11859 255.984 7.07493 255.934 7.04479C255.883 7.01465 255.826 6.9992 255.767 7.00016Z" fill="white"/>
                    <path d="M225.246 7.17097L217.86 21.781C217.834 21.8352 217.794 21.881 217.744 21.913C217.693 21.9451 217.635 21.9621 217.575 21.9621C217.516 21.9621 217.458 21.9451 217.407 21.913C217.357 21.881 217.316 21.8352 217.291 21.781L209.905 7.17097C209.878 7.11811 209.838 7.07394 209.787 7.0437C209.737 7.01345 209.679 6.99839 209.62 7.00027H201.388C201.328 6.99875 201.269 7.01388 201.218 7.044C201.166 7.07413 201.124 7.11808 201.095 7.17097L193.717 21.781C193.691 21.8352 193.651 21.881 193.601 21.913C193.55 21.9451 193.492 21.9621 193.432 21.9621C193.373 21.9621 193.314 21.9451 193.264 21.913C193.214 21.881 193.173 21.8352 193.148 21.781L185.762 7.17097C185.735 7.11811 185.694 7.07394 185.644 7.0437C185.594 7.01345 185.536 6.99839 185.477 7.00027H173.328C173.273 6.99797 173.218 7.01039 173.169 7.03631C173.12 7.06222 173.079 7.10072 173.049 7.1479C173.019 7.19509 173.003 7.2493 173 7.3051C172.998 7.36091 173.01 7.41632 173.036 7.46579L189.885 40.8291C189.912 40.882 189.953 40.9262 190.003 40.9564C190.054 40.9867 190.112 41.0017 190.17 40.9998H196.694C196.753 41.0008 196.811 40.9854 196.861 40.9552C196.911 40.9251 196.952 40.8814 196.979 40.8291L205.219 24.5354C205.247 24.4835 205.288 24.4402 205.338 24.4099C205.388 24.3797 205.446 24.3637 205.504 24.3637C205.562 24.3637 205.62 24.3797 205.67 24.4099C205.72 24.4402 205.761 24.4835 205.789 24.5354L214.029 40.8291C214.055 40.882 214.096 40.9262 214.146 40.9564C214.197 40.9867 214.255 41.0017 214.313 40.9998H220.822C220.882 41.0005 220.94 40.985 220.992 40.955C221.043 40.9249 221.086 40.8815 221.115 40.8291L237.964 7.46579C237.989 7.41691 238.002 7.36224 238 7.30712C237.998 7.25199 237.982 7.19831 237.953 7.15136C237.924 7.10441 237.884 7.06578 237.836 7.03929C237.788 7.0128 237.734 6.99937 237.679 7.00027H225.531C225.472 6.99839 225.414 7.01345 225.364 7.0437C225.313 7.07394 225.273 7.11811 225.246 7.17097Z" fill="white"/>
                    <path d="M340.059 7.00009H314.85C313.742 6.99567 312.641 7.16059 311.582 7.48924C311.541 7.50124 311.502 7.52197 311.469 7.55007C311.436 7.57816 311.409 7.61299 311.39 7.65229L306.009 18.3437C305.997 18.3922 305.997 18.4428 306.009 18.4913V33.9655C306.009 37.8477 309.991 41 314.896 41H340.105C345.018 41 349 37.8555 349 33.9655V27.9637C349 27.8772 348.966 27.7943 348.905 27.7331C348.845 27.672 348.763 27.6376 348.677 27.6376H337.814C337.728 27.6376 337.646 27.672 337.586 27.7331C337.525 27.7943 337.491 27.8772 337.491 27.9637V30.425C337.491 30.8554 337.322 31.2681 337.02 31.5725C336.719 31.8768 336.31 32.0478 335.884 32.0478H319.024C318.599 32.0457 318.191 31.8741 317.89 31.5702C317.59 31.2663 317.42 30.8548 317.418 30.425V17.5052C317.42 17.0754 317.59 16.6639 317.89 16.36C318.191 16.0561 318.599 15.8845 319.024 15.8825H335.884C336.31 15.8825 336.719 16.0534 337.02 16.3578C337.322 16.6621 337.491 17.0748 337.491 17.5052V19.9665C337.491 20.053 337.525 20.1359 337.586 20.1971C337.646 20.2582 337.728 20.2926 337.814 20.2926H348.631C348.717 20.2926 348.799 20.2582 348.859 20.1971C348.92 20.1359 348.954 20.053 348.954 19.9665V13.988C348.954 10.1058 344.971 7.00009 340.059 7.00009Z" fill="white"/>
                    <path d="M305.692 7.00004H261.325C261.27 6.99914 261.215 7.01261 261.166 7.03912C261.118 7.06562 261.077 7.10426 261.048 7.15124C261.019 7.19822 261.002 7.25194 261 7.3071C260.998 7.36227 261.011 7.417 261.036 7.46591L265.27 15.7427C265.297 15.7964 265.338 15.8417 265.389 15.8733C265.44 15.9049 265.499 15.9215 265.559 15.9212H277.372C277.415 15.9212 277.458 15.9297 277.497 15.9461C277.537 15.9625 277.573 15.9865 277.604 16.0168C277.634 16.047 277.658 16.083 277.675 16.1225C277.691 16.1621 277.7 16.2045 277.7 16.2473V40.6817C277.7 40.7661 277.733 40.8471 277.793 40.9068C277.853 40.9665 277.934 41 278.019 41H288.998C289.083 41 289.164 40.9665 289.224 40.9068C289.284 40.8471 289.318 40.7661 289.318 40.6817V16.2085C289.318 16.122 289.352 16.0391 289.414 15.9779C289.475 15.9168 289.558 15.8824 289.645 15.8824H301.458C301.518 15.8818 301.577 15.8648 301.628 15.8333C301.678 15.8018 301.72 15.757 301.747 15.7038L305.981 7.42707C305.998 7.37992 306.004 7.32938 305.998 7.27957C305.992 7.22976 305.974 7.18212 305.946 7.14048C305.917 7.09885 305.88 7.06442 305.836 7.04002C305.792 7.01561 305.743 7.00191 305.692 7.00004Z" fill="white"/>
                    <path d="M74.0527 40.806L90.9639 7.4653C90.9894 7.41646 91.0017 7.36183 90.9998 7.30674C90.9979 7.25165 90.9817 7.19801 90.9529 7.15109C90.924 7.10417 90.8835 7.06557 90.8354 7.0391C90.7872 7.01263 90.733 6.9992 90.6781 7.0001H78.4795C78.4196 6.99859 78.3605 7.0137 78.3087 7.04381C78.2569 7.07391 78.2144 7.11784 78.1859 7.17069L67.8028 27.6868C67.775 27.7387 67.7338 27.782 67.6834 27.8122C67.6331 27.8424 67.5756 27.8584 67.5169 27.8584C67.4583 27.8584 67.4007 27.8424 67.3504 27.8122C67.3001 27.782 67.2588 27.7387 67.2311 27.6868L56.8093 7.19395C56.7829 7.14112 56.7419 7.09698 56.6912 7.06676C56.6406 7.03654 56.5824 7.02149 56.5235 7.02336H44.3249C44.2701 7.02329 44.2162 7.03714 44.1682 7.06361C44.1202 7.09009 44.0797 7.12831 44.0504 7.17476C44.021 7.2212 44.0039 7.27435 44.0006 7.32922C43.9973 7.38409 44.0078 7.4389 44.0313 7.48856L60.9502 40.8293C60.9767 40.8821 61.0177 40.9262 61.0683 40.9564C61.119 40.9867 61.1772 41.0017 61.2361 40.9998H73.7669C73.8281 40.9987 73.8877 40.9798 73.9384 40.9454C73.9891 40.911 74.0288 40.8626 74.0527 40.806Z" fill="white"/>
                    <path d="M37.1013 7.5202C37.0821 7.47892 37.0543 7.44231 37.0198 7.41284C36.9853 7.38337 36.9449 7.36173 36.9014 7.34938C35.9863 7.11674 35.0462 6.99939 34.1025 7H8.88894C3.97542 7.03882 0 10.1445 0 14.0267V33.9577C0.00342644 34.9974 0.285046 36.0168 0.815076 36.9082C0.837601 36.9488 0.868503 36.9842 0.905698 37.0118C0.942892 37.0394 0.985515 37.0586 1.03069 37.0682C1.07587 37.0778 1.12256 37.0774 1.1676 37.0672C1.21265 37.0571 1.255 37.0372 1.29182 37.0091L11.3342 29.1827C11.3725 29.1521 11.4035 29.1132 11.4248 29.0688C11.4462 29.0244 11.4572 28.9758 11.4572 28.9264V17.5439C11.4592 17.1142 11.6292 16.7026 11.9301 16.3987C12.2311 16.0949 12.6387 15.9232 13.0643 15.9212H29.9271C30.3527 15.9232 30.7603 16.0949 31.0613 16.3987C31.3622 16.7026 31.5322 17.1142 31.5342 17.5439V30.456C31.5322 30.8858 31.3622 31.2973 31.0613 31.6012C30.7603 31.9051 30.3527 32.0767 29.9271 32.0788H15.3788C15.3085 32.0779 15.2402 32.1027 15.1866 32.1486L5.28262 39.8664C5.23639 39.9023 5.20068 39.9502 5.17927 40.005C5.15786 40.0598 5.15155 40.1195 5.16102 40.1776C5.17048 40.2357 5.19536 40.2902 5.23302 40.3352C5.27068 40.3802 5.3197 40.4141 5.37489 40.4332C6.50832 40.8122 7.69499 41.0036 8.88894 41H34.1025C39.016 41 42.9914 37.8554 42.9914 33.9655V19.2754C43.0029 19.2269 43.0029 19.1764 42.9914 19.1279L37.1013 7.5202Z" fill="white"/>
                    <path d="M158.3 20.3299H147.333C147.291 20.3299 147.25 20.3384 147.212 20.3549C147.173 20.3713 147.138 20.3955 147.109 20.4258C147.08 20.4562 147.057 20.4922 147.042 20.5317C147.027 20.5712 147.02 20.6134 147.021 20.6558V27.4449C147.019 27.5121 147.032 27.5788 147.058 27.6404C147.085 27.702 147.124 27.7571 147.173 27.8019L161.116 40.899C161.144 40.9277 161.177 40.9501 161.213 40.9648C161.25 40.9795 161.29 40.9862 161.329 40.9844H175.69C175.756 40.9838 175.82 40.9623 175.872 40.9228C175.925 40.8834 175.965 40.8279 175.985 40.7644C176.005 40.7009 176.005 40.6325 175.985 40.5689C175.965 40.5054 175.926 40.4498 175.873 40.4102L162.28 27.6467H162.516C167.379 27.6467 171.314 24.4965 171.314 20.617V14.0296C171.314 10.1501 167.379 7 162.516 7H131.312C131.271 7 131.23 7.00824 131.193 7.02422C131.155 7.04021 131.12 7.06364 131.091 7.09318C131.062 7.12272 131.039 7.15777 131.024 7.19637C131.008 7.23496 131 7.27635 131 7.31812V40.6818C131 40.7662 131.033 40.8471 131.091 40.9067C131.15 40.9664 131.229 40.9999 131.312 40.9999H142.02C142.062 41.0009 142.103 40.9935 142.142 40.978C142.181 40.9624 142.216 40.9391 142.246 40.9095C142.276 40.8799 142.299 40.8444 142.316 40.8053C142.332 40.7662 142.34 40.7242 142.34 40.6818V16.2487C142.34 16.1623 142.374 16.0794 142.434 16.0183C142.494 15.9572 142.575 15.9228 142.66 15.9228H158.247C158.668 15.9228 159.073 16.0937 159.371 16.3978C159.67 16.7019 159.837 17.1144 159.837 17.5445V18.685C159.845 19.1105 159.688 19.522 159.401 19.83C159.113 20.1381 158.717 20.3177 158.3 20.3299Z" fill="white"/>
                </svg>		
            </div>
            <h2 class="w-full pl-0 md:pl-[5.5rem] md:text-[3.125rem] text-[2rem] md:text-left text-center font-[600] font-[Rubik] text-[#FFFFFF] tracking-[-0.025em] uppercase leading-[3rem] md:leading-[4.5rem]">Boosting & Coaching Service</h2>
            <div class="flex mt-[2.3125rem] w-full pl-0 md:pl-[5.5rem] md:flex-row flex-col md:justify-start justify-center items-center">
                <button class="flex flex-row justify-center items-center font-[Inter] text-[1rem] color-[#FFFFFF] w-[60%] md:w-[11.938rem] h-[3.625rem] bg-[#E94A65] rounded-[1.875rem] text-white">Get Booster
                    <svg class="relative left-1.5 top-0.5" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 1L15 6L10 11" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 6H15" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="flex flex-row justify-center items-center font-[Inter] text-[1rem] w-[60%] md:w-[11.938rem] h-[3.625rem] rounded-[1.875rem] text-[#EA4A65]">
                    <svg class="relative top-[0.5] mr-[0.625rem]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#EA4A65" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 8L16 12L10 16V8Z" stroke="#EA4A65" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>Learn More
                </button>
            </div>
        </section>
        <!-- title content 2  -->
        <section class="flex flex-col items-center jusitify-center mx-auto mt-[154px] mb-[100px] w-[55%]" data-aos="fade-up">
            <h2 class="md:text-[2.625rem] text-[1.5rem] text-center mb-[-1.2rem] leading-[3.125rem] font-[900] font-[Rubik] text-[#ffff] uppercase font-[900] font-[Rubik] text-[#ffff]"><span class="text-[#E94A65]">Why</span> Choose Us?</h2>
            <br>
            <p class="md:text-[1.125rem] text-[0.7rem] leading[1.625rem] tracking-[-0.04em] text-center text-[#757095] font-[Manrope]">Safe & Reliable Overwatch 2  Boosting & Coaching Services.</p>
        </section>
        <!-- main content 2  -->
        <section class="flex flex-col justify-center mx-auto w-[90%] mb-[137px] items-start h-fit" data-aos="fade-up">
            <!-- row 1 -->
            <div class="r1 flex xl:flex-row flex-col items-center w-full xl:items-start justify-center md:mb-[1.563rem] mb-0">
                <!-- box 1 -->
                <div class="c3-box mb-[1.563rem]">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/Frame.svg')}}" alt=""></div>
                    <h2 >Highest Quality & Privacy
                    </h2>
                    <p class="font-[Manrope]">AccMart strives to provide top quality service from the point of purchase until the end of the boosting process. All data that flows through the site is encrypted to keep the utmost privacy of our customers. We strive to be the highest quality service provider on the boosting market, with our customers' privacy at the forefront. </p>
                </div>
                <!-- box 2 -->
                <div class="c3-box mb-[1.563rem]">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/frame1.svg')}}" alt=""></div>
                    <h2 >Best Performing Boosters</h2>
                    <p class="font-[Manrope]">We hire carefully selected professional boosters in order to complete any request that may arise to achieve the highest possible win rate. Our goal is to provide you with a fast and efficient boosting service in a timely manner with most boosts being started within the first 15 minutes of the order being placed.</p>
                </div>
                <!-- box 3 -->
                <div class="c3-box">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/frame3.svg')}}" alt=""></div>
                    <h2 class="mb-[40px]">All Regions / Global Network</h2>
                    <p class="font-[Manrope]">We have a team of support staff & boosters that are based all 
                        over the world that are here to help you with your problems, inqueries anytime. All regions will pay the same price in their currency of choice.
                    </p>
                </div>
            </div>
            <!-- row 2 -->
            <div class="r1 flex xl:flex-row flex-col items-center w-full xl:items-start justify-center mb-[1.563rem]">
                <!-- box 4 -->
                <div class="c3-box mb-[1.563rem]">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/coin.svg')}}" alt=""></div>
                    <h2 class="font-[Manrope]">Fair Prices
                    </h2>
                    <p class="font-[Manrope]">There is a significant competition when it comes to Overwatch 2 boosting prices. That is why we're always gonna strive to provide fair market prices with the best value for all of our Boosting Services!</p>
                </div>
                <!-- box 5 -->
                <div class="c3-box mb-[1.563rem]">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/like.svg')}}" alt=""></div>
                    <h2 class="font-[Manrope]">Simple & Carefree </h2>
                    <p class="font-[Manrope]">We understand that these days people don’t have much time, and especially not enough time to waste on long and dull checkout and boosting procedures. </p>
                </div>
                <!-- box 6 -->
                <div class="c3-box">
                    <div class="flex flex-col justify-start items-start my-[22px]"><img src="{{asset('assets/img/flash.svg')}}" alt=""></div>
                    <h2 class="font-[Manrope]">Same Day Delivery</h2>
                    <p class="font-[Manrope]">Over 90% of our orders are started within minutes after purchasing, and will be completed the same day, depending on the size of the order.
                </div>
            </div>
        </section>
           <!-- backround 2 -->
        <section style="background-image: url(img/backround\ 2.png); background-repeat:no-repeat; background-size: 100% auto;" class="w-full">
            <!-- container -->
            <div class="container">
                <section class="flex flex-row items-center justify-between lg:w-[80%] w-[95%] mx-auto my-[8.875rem]">
                    <div class="flex flex-row items-center justify-start">
                        <div class="border-l-solid border-l-[#E94A65] border-l-[0.125rem] lg:h-[4.125rem] h-[2rem] mr-[1rem]"></div>
                        <div class="flex flex-col items-start justify-center">
                            <h2 class="lg:text-[1.75rem] text-[0.7rem] font-[700] font-[Rubik] text-[#FFFFFF]">8 HOURS</h2>
                            <h2 class="lg:text-[1rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] uppercase">Average Boosting Time</h2>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-start">
                        <div class="border-l-solid border-l-[#E94A65] border-l-[0.125rem] lg:h-[4.125rem] h-[2rem] mr-[1rem]"></div>
                        <div class="flex flex-col items-start justify-center">
                            <h2 class="lg:text-[1.75rem] text-[0.7rem] font-[700] font-[Rubik] text-[#FFFFFF]">10+</h2>
                            <h2 class="lg:text-[1rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] uppercase">BOOSTERS IN OUR TEAM</h2>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-start">
                        <div class="border-l-solid border-l-[#E94A65] border-l-[0.125rem] lg:h-[4.125rem] h-[2rem] mr-[1rem]"></div>
                        <div class="flex flex-col items-start justify-center">
                            <h2 class="lg:text-[1.75rem] text-[0.7rem] font-[700] font-[Rubik] text-[#FFFFFF]">+1000</h2>
                            <h2 class="lg:text-[1rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] uppercase">ORDERS COMPLETED</h2>
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-start">
                        <div class="border-l-solid border-l-[#E94A65] border-l-[0.125rem] lg:h-[4.125rem] h-[2rem] mr-[1rem]"></div>
                        <div class="flex flex-col items-start justify-center">
                            <h2 class="lg:text-[1.75rem] text-[0.7rem] font-[700] font-[Rubik] text-[#FFFFFF]">+500</h2>
                            <h2 class="lg:text-[1rem] text-[0.5rem] font-[400] font-[Rubik] text-[#FFFFFF] uppercase">POSITIVE REVIEWS</h2>
                        </div>
                    </div>
                </section>
                <section class="flex flex-col items-center jusitify-center mx-auto mt-[154px] mb-[100px] w-[55%]" data-aos="fade-up">
                    <h2 class="md:text-[2.625rem] text-[1.5rem] text-center mb-[-1.2rem] md:leading-[3.125rem]  leading-[2rem] font-[900] font-[Rubik] text-[#ffff] uppercase">The <span class="text-[#E94A65]">process</span> we follow</h2>
                    <br>
                    <p class="md:text-[1.125rem] text-[0.7rem] leading[1.625rem] tracking-[-0.04em] text-center text-[#757095] font-[Manrope]">Accmart Latest customer reviews and feedback about products &  services quality.</p>
                </section>
                <section class="flex flex-col mx-auto items-center justify-center">
                    <div class="flex xl:flex-row flex-col items-center w-[100%] justify-center mb-[2.5rem]">
                        <div class="flex flex-row items-center justify-start lg:w-[37.125rem] w-full h-[6.563rem] bg-[#17182D] rounded-[0.813rem] pl-[1.438rem] mb-[2.5rem] xl:mb-0">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32.5" cy="32.5" r="32.5" fill="#E94A65"/>
                                <path d="M43.7274 39.891L41.733 40.5629C41.1823 40.7461 40.7419 41.1736 40.5583 41.7355L39.8853 43.7265C39.3103 45.4487 36.8876 45.4121 36.3492 43.6898L34.0855 36.4221C33.6451 34.9807 34.9788 33.6371 36.4104 34.089L43.7029 36.3488C45.416 36.8862 45.4404 39.3169 43.7274 39.891Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M45 32.5C45 25.6 39.4 20 32.5 20C25.6 20 20 25.6 20 32.5C20 39.4 25.6 45 32.5 45" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="flex flex-col items-start justify-center ml-[1.063rem]">
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#E94A65] uppercase leading-4	 md:leading-8">Step 1</p>
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#FFFF] uppercase lleading-4	 md:leading-8">Choose between a Boosting / Coaching Service.</p>
                            </div>
                        </div>
                        <div class="flex xl:ml-[3.375rem] ml-0 flex-row items-center justify-start lg:w-[37.125rem] w-full h-[6.563rem] bg-[#17182D] rounded-[0.813rem] pl-[1.438rem]">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32.5" cy="32.5" r="32.5" fill="#E94A65"/>
                                <path d="M27.3256 26.11L36.8769 22.9262C41.1631 21.4975 43.4919 23.8375 42.0744 28.1237L38.8906 37.675C36.7531 44.0987 33.2431 44.0987 31.1056 37.675L30.1606 34.84L27.3256 33.895C20.9019 31.7575 20.9019 28.2587 27.3256 26.11Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M30.373 34.3563L34.4005 30.3175" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>							
                            <div class="flex flex-col items-start justify-center ml-[1.063rem]">
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#E94A65] uppercase leading-4	 md:leading-8">Step 2</p>
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#FFFF] uppercase leading-4	 md:leading-8">Get assigned a Professional Booster/Coach.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex xl:flex-row flex-col w-[100%] items-center justify-center lg:mb-0">
                        <div class="flex flex-row items-center justify-start lg:w-[37.125rem] w-full h-[6.563rem] bg-[#17182D] rounded-[0.813rem] pl-[1.438rem] mb-[2.5rem] xl:mb-0">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32.5" cy="32.5" r="32.5" fill="#E94A65"/>
                                <path d="M32.5 42.1875C37.8503 42.1875 42.1875 37.8503 42.1875 32.5C42.1875 27.1497 37.8503 22.8125 32.5 22.8125C27.1497 22.8125 22.8125 27.1497 22.8125 32.5C22.8125 37.8503 27.1497 42.1875 32.5 42.1875Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M32.5 36.375C34.6401 36.375 36.375 34.6401 36.375 32.5C36.375 30.3599 34.6401 28.625 32.5 28.625C30.3599 28.625 28.625 30.3599 28.625 32.5C28.625 34.6401 30.3599 36.375 32.5 36.375Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M32.5 22.1666V19.5833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22.1673 32.5H19.584" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M32.5 42.8333V45.4166" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M42.834 32.5H45.4173" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>							
                            <div class="flex flex-col items-start justify-center ml-[1.063rem]">
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#E94A65] uppercase leading-4	 md:leading-8">Step 3</p>
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#FFFF] uppercase lleading-4	 md:leading-8">Track your order’s status in real time!</p>
                            </div>
                        </div>
                        <div class="flex xl:ml-[3.375rem] ml-0 flex-row items-center justify-start lg:w-[37.125rem] w-full h-[6.563rem] bg-[#17182D] rounded-[0.813rem] pl-[1.438rem] ">
                            <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32.5" cy="32.5" r="32.5" fill="#E94A65"/>
                                <path d="M29.2578 35.1L31.1361 36.5584C31.3811 36.8034 31.9295 36.92 32.2912 36.92H34.6011C35.3245 36.92 36.1178 36.3717 36.3045 35.6483L37.7628 31.2266C38.0662 30.3749 37.5178 29.6516 36.6078 29.6516H34.1811C33.8195 29.6516 33.5162 29.3483 33.5745 28.9283L33.8778 26.9916C33.9945 26.4433 33.6328 25.8366 33.0845 25.6616C32.5945 25.4749 31.9878 25.7199 31.7545 26.0816L29.2695 29.78" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path d="M26.166 35.1001V29.1616C26.166 28.31 26.5277 28.0067 27.3793 28.0067H27.986C28.8377 28.0067 29.1994 28.31 29.1994 29.1616V35.1001C29.1994 35.9517 28.8377 36.2551 27.986 36.2551H27.3793C26.5277 36.2551 26.166 35.9517 26.166 35.1001Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M39 41.0033H38.1133C37.18 41.0033 36.2933 41.365 35.64 42.0183L33.645 43.9901C32.735 44.8884 31.2533 44.8884 30.3433 43.9901L28.3483 42.0183C27.695 41.365 26.7967 41.0033 25.875 41.0033H25C23.0633 41.0033 21.5 39.4517 21.5 37.5384V24.81C21.5 22.8967 23.0633 21.345 25 21.345H39C40.9367 21.345 42.5 22.8967 42.5 24.81V37.5384C42.5 39.44 40.9367 41.0033 39 41.0033Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>													
                            <div class="flex flex-col items-start justify-center ml-[1.063rem]">
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#E94A65] uppercase leading-4	 md:leading-8">Step 4</p>
                                <p class="font-[500] md:text-[1rem] text-[0.5rem] font-[Manrope] text-[#FFFF] uppercase leading-4	 md:leading-8">Order Completed, see you next time!</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="flex flex-col items-center jusitify-center mx-auto mt-[154px] mb-[100px] w-[55%]" data-aos="fade-up">
                    <h2 class="md:text-[2.625rem] text-[1.5rem] text-center mb-[-1.2rem] md:leading-[3.125rem] leading-[2rem] font-[900] font-[Rubik] text-[#ffff] uppercase">What <span class="text-[#E94A65]">our clients</span> say</h2>
                    <br>
                    <p class="md:text-[1.125rem] text-[0.7rem] leading[1.625rem] tracking-[-0.04em] text-center text-[#757095] font-[Manrope]">Accmart Latest customer reviews and feedback about products &  services quality.</p>
                </section>
            </div>
            <!-- backround 2 end -->
            <!-- slider -->
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] w-[380px] w-full flex flex-col justify-start items-start md:h-[22.875rem]  h-fit bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">great communication. fast boost. 10/10.</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Duo Q - Support<br><span class="text-[#E94A65]">Bronze 5 - Gold 5</span></p>
                        </div>
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] md:w-[23.75rem] w-full flex flex-col justify-start items-start md:h-[22.875rem]  bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">Very friendly and great person! Extremely fast turn around time, and very understanding when having some issues getting on my account! Highly Reccomend</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Skill Rating Boost<br><span class="text-[#E94A65]">2278 - 2500</span></p>
                        </div>
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] md:w-[23.75rem] w-full flex flex-col justify-start items-start md:h-[22.875rem]  bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">Did an excellent job. Was very friendly and responsive. Great Service :)</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Placement Games : 10 Games<br><span class="text-[#E94A65]">Grandmaster 4000-4200</span></p>
                        </div>
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] md:w-[23.75rem] w-full flex flex-col justify-start items-start md:h-[22.875rem] bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">Very reliable and fast service. The boosters are very good and can finish your order very quickly.</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Skill Rating Boost<br><span class="text-[#E94A65]">2278 - 2500</span></p>
                        </div>
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] md:w-[23.75rem] w-full flex flex-col justify-start items-start md:h-[22.875rem]  bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">Very reliable and fast service. The boosters are very good and can finish your order very quickly.</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Skill Rating Boost<br><span class="text-[#E94A65]">2278 - 2500</span></p>
                        </div>
                        <div class="swiper-slide min-h-[400px] px-[2.375rem] pt-[3.25rem] md:w-[23.75rem] w-full flex flex-col justify-start items-start md:h-[22.875rem] bg-[#17182D] rounded-[0.625rem]">
                            <svg class="mb-[1.813rem]" width="96" height="17" viewBox="0 0 96 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49106 0.681559C8.56875 0.457383 8.88579 0.457382 8.96349 0.681558L10.6284 5.48537C10.6633 5.58601 10.7581 5.6535 10.8646 5.6535H16.2163C16.4623 5.6535 16.5604 5.9716 16.357 6.11012L12.0558 9.03984C11.9625 9.10341 11.9233 9.22164 11.9603 9.32833L13.6097 14.0873C13.6885 14.3148 13.4317 14.5114 13.2327 14.3758L8.86801 11.4029C8.7831 11.345 8.67145 11.345 8.58654 11.4029L4.22183 14.3758C4.02282 14.5114 3.76602 14.3148 3.84488 14.0873L5.49425 9.32833C5.53123 9.22164 5.4921 9.10341 5.39877 9.03984L1.09753 6.11012C0.894156 5.9716 0.992198 5.6535 1.23827 5.6535H6.58993C6.69645 5.6535 6.79127 5.58601 6.82615 5.48537L8.49106 0.681559Z" fill="#E94A65"/>
                                <path d="M28.1278 0.681559C28.2055 0.457383 28.5225 0.457382 28.6002 0.681558L30.2651 5.48537C30.3 5.58601 30.3948 5.6535 30.5013 5.6535H35.853C36.0991 5.6535 36.1971 5.9716 35.9937 6.11012L31.6925 9.03984C31.5992 9.10341 31.56 9.22164 31.597 9.32833L33.2464 14.0873C33.3252 14.3148 33.0685 14.5114 32.8694 14.3758L28.5047 11.4029C28.4198 11.345 28.3082 11.345 28.2233 11.4029L23.8585 14.3758C23.6595 14.5114 23.4027 14.3148 23.4816 14.0873L25.131 9.32833C25.1679 9.22164 25.1288 9.10341 25.0355 9.03984L20.7342 6.11012C20.5309 5.9716 20.6289 5.6535 20.875 5.6535H26.2267C26.3332 5.6535 26.428 5.58601 26.4629 5.48537L28.1278 0.681559Z" fill="#E94A65"/>
                                <path d="M47.7645 0.681559C47.8422 0.457383 48.1592 0.457382 48.2369 0.681558L49.9018 5.48537C49.9367 5.58601 50.0315 5.6535 50.1381 5.6535H55.4897C55.7358 5.6535 55.8338 5.9716 55.6305 6.11012L51.3292 9.03984C51.2359 9.10341 51.1968 9.22164 51.2337 9.32833L52.8831 14.0873C52.962 14.3148 52.7052 14.5114 52.5062 14.3758L48.1414 11.4029C48.0565 11.345 47.9449 11.345 47.86 11.4029L43.4953 14.3758C43.2963 14.5114 43.0395 14.3148 43.1183 14.0873L44.7677 9.32833C44.8047 9.22164 44.7655 9.10341 44.6722 9.03984L40.371 6.11012C40.1676 5.9716 40.2656 5.6535 40.5117 5.6535H45.8634C45.9699 5.6535 46.0647 5.58601 46.0996 5.48537L47.7645 0.681559Z" fill="#E94A65"/>
                                <path d="M67.3993 0.681559C67.477 0.457383 67.794 0.457382 67.8717 0.681558L69.5366 5.48537C69.5715 5.58601 69.6663 5.6535 69.7728 5.6535H75.1245C75.3706 5.6535 75.4686 5.9716 75.2652 6.11012L70.964 9.03984C70.8707 9.10341 70.8315 9.22164 70.8685 9.32833L72.5179 14.0873C72.5967 14.3148 72.3399 14.5114 72.1409 14.3758L67.7762 11.4029C67.6913 11.345 67.5797 11.345 67.4947 11.4029L63.13 14.3758C62.931 14.5114 62.6742 14.3148 62.7531 14.0873L64.4025 9.32833C64.4394 9.22164 64.4003 9.10341 64.307 9.03984L60.0057 6.11012C59.8024 5.9716 59.9004 5.6535 60.1465 5.6535H65.4981C65.6047 5.6535 65.6995 5.58601 65.7344 5.48537L67.3993 0.681559Z" fill="#E94A65"/>
                                <path d="M87.036 0.681559C87.1137 0.457383 87.4307 0.457382 87.5084 0.681558L89.1733 5.48537C89.2082 5.58601 89.303 5.6535 89.4095 5.6535H94.7612C95.0073 5.6535 95.1053 5.9716 94.9019 6.11012L90.6007 9.03984C90.5074 9.10341 90.4682 9.22164 90.5052 9.32833L92.1546 14.0873C92.2334 14.3148 91.9767 14.5114 91.7776 14.3758L87.4129 11.4029C87.328 11.345 87.2164 11.345 87.1315 11.4029L82.7668 14.3758C82.5677 14.5114 82.3109 14.3148 82.3898 14.0873L84.0392 9.32833C84.0761 9.22164 84.037 9.10341 83.9437 9.03984L79.6425 6.11012C79.4391 5.9716 79.5371 5.6535 79.7832 5.6535H85.1349C85.2414 5.6535 85.3362 5.58601 85.3711 5.48537L87.036 0.681559Z" fill="#E94A65"/>
                            </svg>
                            <p class="text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope] md:max-h-[20rem] h-[50%] flex items-center">Came back the next day for another request and was done right away, would 100% recommend these guys. They only lose with a leaver on the team and hard carry. Was gold now I'm master.</p>
                            <p class="p-s text-[#FFFFFF] mb-[2rem] text-[1rem] leading-[1.75rem] font-[Manrope]">Skill Rating Boost<br><span class="text-[#E94A65]">Gold 3 - Master 4 DPS</span></p>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- slider end -->
            <div class="container">
                <section class="mt-[80px]">
                    <div class="container max-w-4xl px-6 py-10 mx-auto">
                        <div class="mt-12 space-y-8">
                            <h4 class="md:text-[2.625rem] text-[1.5rem] text-center mb-[-1.2rem] md:leading-[3.125rem] leading-[2rem] text-center text-[#ffff] dark:text-[#ffff] font-semibold font-[Rubik]">FAQ<span class="text-[#E94A65]">s</span></h4>
                            <h1 class="md:text-[1.125rem] text-[0.7rem] leading[1.625rem] tracking-[-0.04em] text-center text-[#757095] font-[Manrope]"> Overwatch 2 boosting frequently asked questions answered.</h1>
                            <br>
                            <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc1', 'svg1')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">What is your Refund Policy? </h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg1"  width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <div x-ref="tab":style="han">
                                <p  id="psc1" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white " style="margin-top: -50px;">
                                    For any reason you change your mind and decide to not use our services, we offer full refunds before the start of the start of the boost! Once the boost has already begun, we will calculate a partial refund for you.							</div>
                                </div>
                                <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc2', 'svg2')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">Who will play on my account?</h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg2"   width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <p  id="psc2" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white" style="margin-top: -50px;">
                                    We only hire players who were able to get 4000+ Skill Rating on their Overwatch accounts (Specific Roles). We carefully check the candidates for the reality of this rating. In the process, we ban boosters that violate our internal rules, such as chat with client’s friends without permission, toxic behavior, or taking an order without being ready to start a boost.							</div>
                            <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc3', 'svg3')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">How long will it take to complete my order?</h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg3"   width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <p  id="psc3" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white" style="margin-top: -50px;">
                                    This is usually really fast. Most small orders with shorter lengths end on the same day. The speed of execution depends on a number of factors such as the length of the order, the desired rating and your MMR. Duo orders are also executed longer than solo orders, so duo orders require you and your booster to be ready to play at the same time.
                            </div>
                            <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc4', 'svg4')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">Is it possible to make the booster play on the heroes of my choice?</h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg4"   width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <p  id="psc4" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white" style="margin-top: -50px;">
                                    Yes, we provide such a service as an extra option you can choose while creating your order!
                            </div>
                            <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc5', 'svg5')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">Will my account got banned?</h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg5"   width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <p  id="psc5" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white" style="margin-top: -50px;">
                                    At the moment, we have not encountered ANY cases of ban for Overwatch boost. Perhaps this can change, but at the moment everything looks very safe.
                            </div>
                            <div class="bg-[#17182D] border-2 border-[#75709540] rounded-lg bo">
                                <button class="flex items-center justify-between w-full p-8" onclick="ft_sc('psc6', 'svg6')">
                                    <h1 class="font-[Manrope] text-[1.375rem] font-bold	text-white leading-8">What happens after payment?</h1>
                                    <span class="text-white  rounded-full">
                                        <svg id="svg6"   width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.84 7.19587L10.32 1.68412C9.55 1.03319 8.29 1.03319 7.52 1.68412L1 7.19587" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </button>
                                <p id="psc6" class="font-[Manrope] font-medium p-8 text-[1rem] leading-[1.75rem] text-white" style="margin-top: -50px;">
                                    You will be redirected back to the page of our client area, where you can register an account on our service. It takes a couple of minutes. After that, your order will go to our database, where carefully selected boosters will be able to pick up your order and start right away! The whole process for most orders takes no more than 5-15 minutes.                
                            </div>
                        </div>
                    </div>
                </section>
            <!-- content 5 -->
                <section style="background-image: url(img/getbosted.png); justify-content: space-between; background-size: cover; background-repeat: no-repeat;" class="flex flex-row items-center justify-between mx-auto mb-[176px] mt-[156px]" data-aos="fade-up" class="rounded-[1.25rem] 2xl:w-[75rem] w-[98%] md:w-[90%] lg:h-[23.063rem] h-fit">
                    <div style="background: linear-gradient(96.71deg, #E94A65 -7.49%, #FF274C 104.29%);" class="rounded-[1.25rem] px-[3.688rem] py-[4rem] opacity-90 w-full h-full">
                        <div class="flex flex-col justify-start items-center">
                            <div class="flex flex-row items-start justify-start w-full">
                                <h2 class="md:text-[0.875rem] text-[0.4rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.1rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">THE BEST &nbsp;</h2>
                                <h2 class="md:text-[0.875rem] text-[0.4rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.1rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">OVERWATCH 2 &nbsp;</h2>
                                <h2 class="md:text-[0.875rem] text-[0.4rem] font-[400] font-[Rubik] text-[#FFFFFF] md:tracking-[0.435rem] tracking-[0.1rem] uppercase leading-[1.5rem] md:leading-[3.125rem]">BOOSTING SERVICE</h2>
                            </div>
                            <div class="flex flex-col items-start justify-start w-full">
                                <h2 class="lg:text-[3.100rem] md:text-[2.5rem] text-[1.5rem] font-extralight font-[Rubik] text-[#FFFFFF] tracking-[-0.03em] uppercase md:leading-[3.125rem] leading-[2rem]">CHEAP OVERWATCH 2</h2>
                                <h2 class="pb-[1.438rem] lg:text-[3.100rem] md:text-[2.5rem] text-[1.5rem] font-bold font-[Rubik] text-[#FFFFFF] tracking-[-0.03em] uppercase md:leading-[3.125rem] leading-[2rem]">BOOST BY THE BEST BOOSTERS</h2>
                                <button style="background: rgba(19, 20, 41, 0.2);" class="flex flex-row justify-center items-center font-[Inter] text-[1rem] color-[#FFFFFF] w-[11.938rem] h-[3.625rem] bg-[#E94A65]  rounded-[1.875rem] text-white">Get Booster
                                    <svg  class="relative left-1.5 top-0.5" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1L15 6L10 11" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 6H15" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div style="background-image: url(img/backround\ 3.png); background-repeat:no-repeat; background-position: bottom; background-size: 100% auto;" class="w-full">
                <footer class="p-4 w-[80%] mx-auto sm:p-6">
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
                                <a class="text-[#ffff] transition hover:text-[#ffff]/75" href="/" target="_blank"
                                    rel="noreferrer">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="text-[#ffff] transition hover:text-[#ffff]/75" href="/" target="_blank"
                                    rel="noreferrer">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a class="text-[#ffff] transition hover:text-[#ffff]/75" href="/" target="_blank"
                                    rel="noreferrer">
                                    Process
                                </a>
                            </li>
                            <li>
                                <a class="text-[#ffff] transition hover:text-[#ffff]/75" href="/" target="_blank"
                                    rel="noreferrer">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a class="text-[#ffff] transition hover:text-[#ffff]/75" href="/" target="_blank"
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
@endsection

@section('script')
<script>
        var swiper = new Swiper(".slide-content",
        {
            slidesPerView: 5,
            spaceBetween: 25,
            slidesPerGroup: 2,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            breakpoints:{
                400: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
                1494: {
                slidesPerView: 4,
                },
                1500: {
                slidesPerView: 5,
                },
            },
        });
    </script>
	<script src="{{asset('assets/script/script.js')}}" ></script>
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

@endsection