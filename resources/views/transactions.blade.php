<!doctype html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="./css/main.css"> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
   <script src="js/main.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body background='images/bg.png'>

    <x-sidebar />
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
   
    <x-header :title=$title />

      <div class="px-6 pt-6 2xl:container">
         <!-- component -->

         <body class="antialiased font-sans bg-gray-200">
            <div class="container mx-auto px-4 sm:px-8">
               <div class="py-8">
                  <div>
                     <h2 class="text-3xl font-bold text-gray-600 leading-tight text-center border-b-2 py-4 ">Search your
                        Transactions </h2>
                  </div>
                  <div class="my-4 flex sm:flex-row flex-col">

                     <!--search bar -->
                     <div hidden class="md:block">
                        <div class="relative flex items-center text-gray-400 focus-within:text-cyan-400">
                           <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                              <label for="">

                                 <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current"
                                    viewBox="0 0 35.997 36.004">
                                    <path id="Icon_awesome-search" data-name="search"
                                       d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
                                    </path>
                                 </svg>
                              </label>
                           </span>
                           <input type="search" name="leadingIcon" id="leadingIcon" placeholder="Search here"
                              class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 focus:border-cyan-300 transition">
                        </div>
                     </div>
                  </div>
                  <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                     <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                           <thead>
                              <tr>
                                 <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User
                                 </th>
                                 <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Rol
                                 </th>
                                 <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created at
                                 </th>
                                 <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                             alt="" />
                                       </div>
                                       <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                             Vera Carpenter
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">0177002000004468</p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                       Jan 21, 2020
                                    </p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                       class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                       <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                       <span class="relative">Activo</span>
                                    </span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                             src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                             alt="" />
                                       </div>
                                       <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                             Blake Bowman
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                       Jan 01, 2020
                                    </p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                       class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                       <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                       <span class="relative">Activo</span>
                                    </span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                             src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                             alt="" />
                                       </div>
                                       <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                             Dana Moore
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                       Jan 10, 2020
                                    </p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                       class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                       <span aria-hidden
                                          class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                       <span class="relative">Suspended</span>
                                    </span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="px-5 py-5 bg-white text-sm">
                                    <div class="flex items-center">
                                       <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                             src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                             alt="" />
                                       </div>
                                       <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                             Alonzo Cox
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="px-5 py-5 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">0177002000004468</p>
                                 </td>
                                 <td class="px-5 py-5 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                                 </td>
                                 <td class="px-5 py-5 bg-white text-sm">
                                    <span
                                       class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                       <span aria-hidden
                                          class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                       <span class="relative">Inactive</span>
                                    </span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>

                     </div>
                  </div>
               </div>
            </div>
         </body>

      </div>
   </div>

</body>
<script src="js/main.js"></script>

</html>