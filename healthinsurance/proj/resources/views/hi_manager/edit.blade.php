<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kebele</title>

    <link rel="stylesheet" href="{{ asset ('stylee.css') }}" />
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
    
    <form  action="{{url('update-data/'.$Customers->id)}}" method="POST">
        {{ csrf_field()}}
        @method('PUT')
    <div class="firstform">
        <label for="fname">First name</label><br />
        <input class="ff"type="text"id="fname" name="firstname" value="{{$Customers->firstname}}" required/><br />
        <label for="lname">Last name</label><br />
        <input class="ff"type="text" id="lname" name="lastname" value="{{$Customers->lastname}}"required/><br />
        <label for="kebele">Kebele</label><br />
        <input class="ff" type="text"id="kebele" name="kebele" value="{{$Customers->kebele}}"required/><br />
        <label for="familymembers">family members</label><br />
        <input class="ff" type="text"id="familymembers" name="familymembers" value="{{$Customers->familymembers}}"required/><br />
        
        <button class="btn" type="submit">update</button>
        <!-- <input class="pay" type="radio" id="pay" name="payment" value="Pay" />
        <label for="pay">Pay</label><br />
        <input class="pay"type="radio"id="dis"name="payment"value="Disable"/>
        <label for="disable">Disable</label><br /> -->
    </div>
</form>
  </body>
</html>
