<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kebele</title>
    <link rel="stylesheet" href="stylee.css" />
    <link rel="stylesheet" href="b.css" />
    <link rel="stylesheet" a href="message.css" />
    <link rel="stylesheet" a href="v.css" />

    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class ="form-group col-12 9-0">
        <div>
          <div class="alert alert success">
</div>
</div>
    
    <form  method="POST" action="/customer_store">
        @csrf
    <div class="firstform">
        <label for="fname">First name</label><br />
        <input value="{{ old('firstname') }}" class="ff"type="text"id="fname" name="firstname" required/><br />
        <label for="lname">Last name</label><br />
        <input value="{{ old('lastname') }}" class="ff"type="text" id="lname" name="lastname"/><br />
        <label for="gender">Gender</label><br />
        <input value="{{ old('gender') }}" class="ff"type="text" id="gender"name="gender"/><br />
        <label for="kebele">Kebele</label><br />
        <input value="{{ old('kebele') }}" class="ff" type="text"id="kebele" name="kebele"/><br />
        <label for="familymembers">family members</label><br />
        <input value="{{ old('familymembers') }}" class="ff" type="text"id="familymembers" name="familymembers"/><br />
        <label for="age">Age</label><br />
        <input value="{{ old('age') }}" class="ff" type="number" id="age" name="age"  /><br />
        <label for="bdate">Birth of date</label><br />
        <input value="{{ old('birthofdate') }}" class="ff" type="text" id="bdate" name="birthofdate"/><br/>
        <label for="occapa">Occupation</label><br />
        <input value="{{ old('occupation') }}" class="ff" type="text" id="occapa" name="occupation" /><br/>
        <label for="ephone">Emergency phone no</label><br />
        <input value="{{ old('emergencyphoneno') }}" class="ff" type="number"id="ephone" name="emergencyphoneno"/><br />
    </div>
    <div class="secondform">
        <label for="text">Date</label><br />
        <input value="{{ old('date') }}" class="sf" type="text" id="date" name="date"/><br />
        <label for="subcity">Subcity</label><br />
        <input value="{{ old('subcity') }}" class="sf" type="text"id="subcity"name="subcity" /><br />
        <label for="rship">Relationship</label><br />
        <input value="{{ old('relationship') }}" class="sf" type="text" id="rship" name="relationship"  /><br />
        <label for="tax">Tax type </label><br>
        <select class="taxs" id="tax" name="tax">
          <option value="type A">Type A</option>
          <option value="type B">Type B</option>
          <option value="type C">Type C</option>
        </select><br>
       
        <!-- <input value="" class="pay" type="radio" id="pay" name="payment" value="Pay" />
        <label for="pay">Pay</label><br />
        <input value="" class="pay"type="radio"id="dis"name="payment"value="Disable"/>
        <label for="disable">Disable</label><br /> -->
    </div>
    <button class="btn" type="submit">Register</button>
</form>
  </body>
</html>
