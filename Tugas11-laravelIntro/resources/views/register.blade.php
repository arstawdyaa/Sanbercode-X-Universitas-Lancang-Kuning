<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
      @csrf
        <label>First Name:</label><br>
        <input type="text" Name="fName" id=""><br><br>
        <label>Last Name:</label><br>
        <input type="text" Name="lName" id=""><br><br>
       
        <label> Gender:</label><br>
       <p><input type="radio" name="gender" id="" value="Man">Man<br>
          <input type="radio" name="gender" id="" value="Woman">Woman<br>
          <input type="radio" name="gender" id="" value="Other">Other<br>
       </p>
       
       <label>Nationality:</label> <br>
       <p><select name="nationality">
          <option value="">Indonesia</option>
          <option value="">Singapore</option>
          <option value="">Malaysia</option>
          <option value="">Thailand</option>
       </select> <br> <br> 
       </p>
        
       <label>Language Spoken:</label>
       <p><input type="checkbox" name="skill" id="" value="Bahasa Indonesia"> Bahasa Indonesia <br>
          <input type="checkbox" name="skill" id="" value="English"> English <br>
          <input type="checkbox" name="skill" id="" value="Arabic"> Arabic <br>
          <input type="checkbox" name="skill"id="" value="Japanese"> Japanese <br>
       </p>

       <label>Bio:</label> <br>
       <textarea  name="bio" id="bio" cols="30" rows="10"></textarea> <br><br>

       <input type="Submit" value="Sign Up">


    </form>
</head>
<body>
    
</body>
</html>