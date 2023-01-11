<!doctype html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
   </script>
</head>

<body background='images/bg.png'>
   @extends('layout')
   @section('content')
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

                  <form action="" id="search-form">
                     <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                        <label for="search">

                           <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                              <path id="Icon_awesome-search" data-name="search"
                                 d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
                              </path>
                           </svg>
                        </label>
                     </span>
                     <input type="text" name="search" id="search" placeholder="Search here" list="search-results"
                        class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 focus:border-cyan-300 transition">
                     <datalist id="search-results">
                     </datalist>
                  </form>
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
                           Transaction ID
                        </th>
                        <th
                           class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Recipient
                        </th>
                        <th
                           class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Created at
                        </th>
                        <th
                           class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Amount
                        </th>

                        <th
                           class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Status
                        </th>

                     </tr>
                  </thead>
                  <tbody id="tbody">
                     @foreach ($transactions as $transaction )
                     <tr>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <p class="text-gray-900 whitespace-no-wrap">{{$transaction['Transaction ID']}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <div class="flex items-center">

                              <div class="ml-3">
                                 <p class="text-gray-900 whitespace-no-wrap">
                                    {{$transaction['Receiver Name']}}
                                 </p>
                              </div>
                           </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <p class="text-gray-900 whitespace-no-wrap">
                              {{$transaction['Transaction Date']}}
                           </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <p class="text-gray-900 whitespace-no-wrap">
                              {{$transaction['Transaction Amount']}}
                           </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                              <span aria-hidden
                                 class="absolute inset-0 opacity rounded-full {{$transaction['Transaction Status'] == 'Success' ? 'bg-green-200' : 'bg-red-500'}}"></span>
                              <span class="relative">{{$transaction['Transaction Status']}}</span>
                           </span>
                        </td>
                     </tr>
                     @endforeach

                  </tbody>

               </table>


            </div>
            {{$transactions->links()}}
         </div>
      </div>
   </div>
   @endsection


   <script>
      var filteredTransactions;
   $(document).ready(function () {
   $("#search").on("keyup", function () {
   // Get the search query
   var search = $(this).val();
   
   // Perform search if the query is not empty
   if (search != "") {
   // Send the search query to the server via AJAX
   $.ajax({
   url: "/search",
   method: "GET",
   data: {
   seacrh: search,
   },
   success: function (data) {
   //filter the transaction by the search query
   filteredTransactions = data.filter(function (transaction) {
   return (
   transaction["Transaction ID"].includes(search) ||
   transaction["Receiver Name"].includes(search) ||
   transaction["Transaction Date"].includes(search) ||
   transaction["Transaction Amount"].includes(
   search
   ) ||
   transaction["Transaction Status"].includes(search)
   );
   });
   var searchResults = $("#search-results");
   console.log(filteredTransactions);
   console.log(searchResults);
   // add the filtered transactions to the search results
   searchResults.html("");
   filteredTransactions.forEach(function (transaction) {
   searchResults.append(
   `<option value="${transaction["Receiver Name"]}">`
      );
      });
      },
      });
      } else {
      // Clear the search results if the query is empty
      $("#search-results").html("");
      }
      });
   
      $("#search-form").on("submit", function (e) {
      e.preventDefault();
      console.log("form submitted");
      //set tbody transactions to the filtered transactions
      var tbody = $("#tbody");
      tbody.html("");
      filteredTransactions.forEach(function (transaction) {
      tbody.append(
      `<tr>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">${
               transaction["Transaction ID"]
               }</p>
         </td>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <div class="flex items-center">
   
               <div class="ml-3">
                  <p class="text-gray-900 whitespace-no-wrap">
                     ${transaction["Receiver Name"]}
                  </p>
               </div>
            </div>
         </td>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
               ${transaction["Transaction Date"]}
            </p>
   
         </td>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
               ${transaction["Transaction Amount"]}
            </p>
         </td>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
               <span aria-hidden class="absolute inset-0 opacity rounded-full ${
                         transaction["Transaction Status"]=="Success" ? "bg-green-200" : "bg-red-500" }"></span>
               <span class="relative">${
                  transaction["Transaction Status"]
                  }</span>
            </span>
         </td>
      </tr>`
      );
      });
      });
      });

   </script>

</body>


</html>