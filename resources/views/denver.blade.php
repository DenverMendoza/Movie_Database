<form action="user" method="post">
   @csrf
   <input type="text" name="first_name" placeholder="first name" id=""><br>
   <input type="text" name="middle_name" placeholder="middle name" id=""><br>
   <input type="text" name="last_name" placeholder="last name" id=""><br><br>
   <input type="date" name="birthday" id=""><br><br>
   <input type="email" name="address" id=""><br><br>
   <input type="submit" value="submit">
</form>