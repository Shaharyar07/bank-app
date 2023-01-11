<!doctype html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body background='images/bg.png'>
  @extends('layout')
  @section('content')
  <div class="w-full">
    <div class="container  mx-auto py-8 mt-10">
      <div class="w-96 mx-auto bg-white rounded shadow">

        <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Transfer your Funds
        </div>

        <form action="/fundTransfer" method="POST">
          @csrf
          <div class="py-4 px-8">

            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2">ACC NO or IBAN:</label>
              <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="accountNumber"
                id="accountNumber" value="{{old('accountNumber')}}" placeholder="Enter Your Account Number">
              <p id=error_creater_id>
                @error('accountNumber')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
              </p>
            </div>


            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2">Account Holder:</label>
              <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="Account Holder"
                id="Account Holder" value="{{old('Account Holder')}}" placeholder="Name of Account Holder">
              <p id=error_creater_id>
                @error('Account Holder')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
              </p>
            </div>


            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2">Amount - $</label>
              <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number" name="amount" id="amount"
                value="{{old('Amount')}}" placeholder="Enter the Amount ">
              <p id=error_creater_id>
                @error('amount')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
              </p>
            </div>


            <div class="mb-4">
              <label class="block text-grey-darker text-sm font-bold mb-2"> extra</label>
              <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="number" name="amount" id="amount"
                value="{{old('Amount')}}" placeholder="Enter the Amount ">
              <p id=error_creater_id>
                @error('amount')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
              </p>
            </div>

            <div class="m-auto flex items-center justify-center">
              <button type="submit"
                class="rounded-full py-2  px-24 bg-gradient-to-r from-sky-600 to-cyan-400 font-epilogue text-white ">
                Send Now!
              </button>
            </div>
          </div>
        </form>

      </div>

    </div>
  </div>
  @endsection

</body>
<script src="{{ asset(" /js/main.js") }}"></script>

</html>