<!doctype html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  <script src="{{ asset("/js/main.js") }}"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body background='images/bg.png'>

   <x-sidebar />
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
   
    <x-header :title=$title />

    <div class="px-6 pt-6 2xl:container">
      <div class="w-full">
        <div class="container  mx-auto py-8 mt-10">
          <div class="w-96 mx-auto bg-white rounded shadow">

            <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Transfer your Funds
            </div>

            <form name="fund-transfer" id="fund-transfer" action="">
              <div class="py-4 px-8">

                <div class="mb-4">
                  <label class="block text-grey-darker text-sm font-bold mb-2">ACC NO or IBAN:</label>
                  <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="student_id"
                    id="student_id" value="" placeholder="Enter Your Account Number">

                </div>


                <div class="mb-4">
                  <label class="block text-grey-darker text-sm font-bold mb-2">Account Holder:</label>
                  <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="student_name"
                    id="student_name" value="" placeholder="Name of Account Holder">

                </div>

                <div class="mb-4">
                  <label class="block text-grey-darker text-sm font-bold mb-2">Amount - $</label>
                  <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number" name="course_name"
                    id="course_name" value="" placeholder="Enter the amount ">
                  <p id=error_creater_id></p>
                </div>

                <div class="m-auto flex items-center justify-center">
                  <button
                    class="rounded-full py-2  px-24 bg-gradient-to-r from-sky-600 to-cyan-400 font-epilogue text-white ">
                    Send Now!
                  </button>
                </div>
              </div>
            </form>

          </div>

        </div>
      </div>
    



    </div>
    </form>

  </div>

  </div>
  </div>

  </div>
  </div>

</body>
<script src="{{ asset("/js/main.js") }}"></script>

</html>