<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body background='images/bg.png'>
    <div class=" w-full min-h-screen flex items-center justify-center">
        <div class="lg:flex items-center space-x-16">
            <div class="w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg">

                <h2 class="text-center text-2xl font-bold tracking-wide text-gray-800">Sign Up</h2>
                <p class="text-center text-sm text-gray-600 mt-2">Already have an account? <a href="/"
                        class="text-blue-600 hover:text-blue-700 hover:underline" title="Sign In">Sign in here</a></p>

                <form class="my-8 text-sm"  method="POST" action="/register">
                    @csrf
                    <div class="flex flex-col my-4">
                    <div class="flex relative ">
                        <span
                            class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                                </path>
                            </svg>
                        </span>
                        <input type="email" id="email" name="email"
                            class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Email" value="{{old('email')}}" />
                    </div>
                    </div>
                    <div class="flex flex-col my-4">
                    <div class="flex relative ">    
                        <span
                            class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
					fill="currentColor">
					<path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
						clip-rule="evenodd" />
				</svg>
                        </span>
                        <input type="text" id="name" name="name"
                            class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Name" value="{{old('name')}}" />
                    </div>
                    </div>

                    

                    <div class="flex relative ">
                        <span
                            class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z">
                                </path>
                            </svg>
                        </span>
                        <input type="password" id="password" name="password"
                        value="{{old('password')}}"
                            class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Password" />
                    </div>

                <div class="flex flex-col pt-4 mb-12">
                    <div class="flex relative ">
                        <span
                            class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
						viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
					</svg>
                        </span>
                        <input type="password" id="confirm" name="confirm"
                            class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Confirm Password " value="{{old('confirm')}}" />
                    </div>
                </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="remember_me" id="remember_me" class="mr-2 focus:ring-0 rounded">
                        <label for="remember_me" class="text-gray-700">I accept the <a href="#"
                                class="text-blue-600 hover:text-blue-700 hover:underline">terms</a> and <a href="#"
                                class="text-blue-600 hover:text-blue-700 hover:underline">privacy policy</a></label>
                    </div>

                    <div class="my-4 flex items-center justify-end space-x-4">
                        <button
                        type="submit"
                            class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-black shadow-md hover:text-black hover:bg-white focus:outline-none focus:ring-2">Sign
                            Up</button>
                    </div>
                </form>
            </div>
            <div class="flex items-center justify-center">
                <svg class="text-blue-600 w-5/6" style="transform: scale(-1,1);" xmlns="http://www.w3.org/2000/svg"
                    data-name="Layer 1" width="582.544228" height="350.249375" viewBox="0 0 832.20604 500.35625"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M227.31663,699.06c-.05567-.24512-5.44-24.79785,5.55615-45.19043,10.99609-20.39166,34.46826-29.38477,34.7041-29.47363l1.07275-.40235.25342,1.11817c.05566.24511,5.43994,24.79785-5.55615,45.19043-10.99561,20.39166-34.46826,29.38476-34.7041,29.47363l-1.07325.40234Zm39.86181-72.33783c-4.70166,2.02246-23.25781,10.874-32.54492,28.09668-9.28809,17.22461-6.48584,37.59375-5.59229,42.63086,4.69971-2.01758,23.24854-10.85547,32.54493-28.09668C270.87375,652.1293,268.07248,631.76211,267.17844,626.72213Z"
                        transform="translate(-183.89698 -199.82188)" fill="#f1f1f1"></path>
                    <path
                        d="M254.94373,663.14907c-19.76056,11.88861-27.371,35.50269-27.371,35.50269s24.42779,4.3388,44.18835-7.54981,27.371-35.50268,27.371-35.50268S274.70429,651.26046,254.94373,663.14907Z"
                        transform="translate(-183.89698 -199.82188)" fill="#f1f1f1"></path>
                    <path
                        d="M554.19262,472.56441a10.83726,10.83726,0,0,0-10.47951-12.89681l-9.15082-23.01244-15.3409,2.15012,13.37918,32.31652a10.896,10.896,0,0,0,21.59205,1.44261Z"
                        transform="translate(-183.89698 -199.82188)" fill="#9f616a"></path>
                    <path
                        d="M525.92964,464.47855l-4.75346-11.3351-29.62149-56.38484,1.61062-104.33228.30923-.041c18.954-2.50423,31.77818,84.82857,32.315,88.54784l18.71553,64.00809,4.45518,14.10849Z"
                        transform="translate(-183.89698 -199.82188)" fill="currentColor"></path>
                    <polygon points="296.518 484.658 310.92 484.657 317.771 429.106 296.515 429.107 296.518 484.658"
                        fill="#9f616a"></polygon>
                    <path
                        d="M476.741,679.77772l28.363-.00114h.00115a18.07611,18.07611,0,0,1,18.07514,18.07485v.58737l-46.43846.00172Z"
                        transform="translate(-183.89698 -199.82188)" fill="#2f2e41"></path>
                    <polygon points="164.095 462.715 175.912 470.949 213.294 429.291 195.854 417.138 164.095 462.715"
                        fill="#9f616a"></polygon>
                    <path
                        d="M347.66667,656.57887l23.27053,16.21554.00094.00065a18.07611,18.07611,0,0,1,4.49515,25.16356l-.33583.4819L336.997,671.89089Z"
                        transform="translate(-183.89698 -199.82188)" fill="#2f2e41"></path>
                    <path
                        d="M472.49955,671.42229l-.62235-104.21007L462.81533,501.686,445.9204,559.31028l-.03285.04733-61.225,88.88515-23.82325-12.07048.13051-.31012c1.45591-3.46284,35.76216-84.7936,44.98333-84.7936a4.97985,4.97985,0,0,0,4.24236-1.86422c2.70645-3.614.50244-11.28284.47983-11.35983-2.63969-10.94588,3.99742-14.67362,5.3193-15.296l3.55555-73.397.36857.02543,96.38955,6.76108-4.04386,91.76589-8.69878,120.23153-.29881.03391Z"
                        transform="translate(-183.89698 -199.82188)" fill="#2f2e41"></path>
                    <path
                        d="M517.781,472.20177l-.41678-.03391L413.69966,463.8117l.25589-34.29989,5.07382-89.55836.02878-.06216,20.66277-44.85865,14.6473-6.63252,21.37023-1.12461.0521.01307,19.50283,4.83187,20.288,145.63873Z"
                        transform="translate(-183.89698 -199.82188)" fill="currentColor"></path>
                    <circle cx="465.99537" cy="251.83011" r="27.29373"
                        transform="translate(-247.58414 54.55847) rotate(-28.66324)" fill="#9f616a"></circle>
                    <path
                        d="M438.54633,258.68144v-10.6343s-8.576-10.10035.85759-12.64464c0,0,2.57278-25.44285,24.87023-13.56952,0,0,30.87339-5.08857,27.443,12.72143,0,0,7.71835-4.64962,5.14556,7.22372L491.88689,260.904s2.40306-12.634-5.31529-14.33024l-4.288-2.54429s-12.00632,11.87334-30.0158-2.54428c0,0-7.71834-1.84217-6.86075,5.79069S438.54633,258.68144,438.54633,258.68144Z"
                        transform="translate(-183.89698 -199.82188)" fill="#2f2e41"></path>
                    <path
                        d="M463.15358,446.58748a10.83729,10.83729,0,0,0-12.62376-10.80688l-13.13193-20.99672-14.706,4.86818,18.96129,29.391a10.896,10.896,0,0,0,21.50042-2.45556Z"
                        transform="translate(-183.89698 -199.82188)" fill="#9f616a"></path>
                    <path
                        d="M429.23633,439.96884l-23.75756-48.2346.021-.11726c.09572-.53405,9.659-53.63372,16.97316-73.15156,7.36048-19.64146,17.43552-23.585,17.86078-23.74325l.21263-.07912,9.03379,8.66522-12.51394,83.527,13.489,40.28392Z"
                        transform="translate(-183.89698 -199.82188)" fill="currentColor"></path>
                    <rect x="786.20604" width="46" height="46" fill="#f1f1f1"></rect>
                    <rect x="426.20604" y="179" width="46" height="46" fill="#f1f1f1"></rect>
                    <path d="M635.92184,404.66451H999.59653V220.55582H635.92184Z"
                        transform="translate(-183.89698 -199.82188)" fill="#fff"></path>
                    <path
                        d="M1002.59656,407.66458H632.92176V217.5557h369.6748Zm-363.6748-6h357.6748V223.5557H638.92176Z"
                        transform="translate(-183.89698 -199.82188)" fill="#e5e5e5"></path>
                    <rect x="495.67778" y="85.31585" width="279.80647" height="9.27916" fill="#e5e5e5"></rect>
                    <rect x="495.67778" y="107.81893" width="279.80647" height="9.27916" fill="#e5e5e5"></rect>
                    <rect x="723.48425" y="141.04542" width="52" height="8.05267" fill="currentColor"></rect>
                    <path d="M565.897,700.13773h-381a1,1,0,1,1,0-2h381a1,1,0,0,1,0,2Z"
                        transform="translate(-183.89698 -199.82188)" fill="#cbcbcb"></path>
                </svg>
            </div>
        </div>
    </div>
</body>

</html>