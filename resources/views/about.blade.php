
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=number], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=tel], select {
        width: 94%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 48%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=reset] {
        width: 48%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }
      input[type=reset]:hover {
        background-color: #45a049;
      }
      label {
          margin: 5px;
      }

      div {
        width:350px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      margin-left: 450px;
      margin-top:150px;
      }
      </style>
      <body>
       <?php $start = '05'; ?>
      <div>
        <form method="post" action="/about" autocomplete="on">
            @csrf
            <tr>
          <td><label for="name">Input Your Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="Your name.." maxlength="50" size="50" size="50" autofocus></td>
          <td><label for="age">Input Your Age</label></td>
          <td><input type="text" id="age" name="age" min="16" max="99" maxlength="2" size="2" placeholder="Your Age.."></td>
          <td><label for="phone_number">Input Your Phone Number</label></td><br>
          <td>{{$start}}{{' '}}<input type="tel" id="phone_number" name="phone_number" maxlength="8" size="8" placeholder="example = 92345678" pattern="[0-9]{8}" required></td>
          <td><input type="submit" value="Submit"> </td><td><input type="reset" value="Reset"></td>
          {{-- Name
          <form method="send" action="/about">
          <input type="text" name="name" id="name">
          <input type="submit" value="send"> --}}
          <td><label for="name"> Your name is : {{$name}}</label></td>
            <br>
            <td><label for="age"> Your age is : {{$age}}</label></td>
            <br>
            <td><label for="phone_number"> Your phone number is :{{$start}}{{$phone_number}}</label></td>
          </tr>
        </form>
      </div>
      </body>
      </html>
