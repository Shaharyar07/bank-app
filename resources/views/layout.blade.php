<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banking App - by sherry</title>
</head>
<body background='images/bg.png'>

 
  <x-sidebar   />
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
   
    <x-header :title=$title />
    
    <div class="px-6 pt-6 2xl:container">  
    </div>
     @yield('content')
    </div>

</body>
</html>