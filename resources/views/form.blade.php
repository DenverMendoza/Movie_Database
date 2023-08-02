<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   @if (Session::has('error'))
      <h1>{{ Session('error') }}</h1>  
   @endif
   <form action="user" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="first_name" placeholder="first name" id=""><br>
      <input type="text" name="middle_name" placeholder="middle name" id=""><br>
      <input type="text" name="last_name" placeholder="last name" id=""><br><br>
      <input type="date" name="birthday" id=""><br><br>
      <input type="email" name="address" id="email_add"><br>
      <span id="check_message"></span><br>
      <input type="file" name="image" id="">

      <input type="submit" value="submit" id="submitbutton" disabled>
   </form>
   
   <script src="{{ asset('js/addValidation.js') }}"></script>
</body>
</html>

