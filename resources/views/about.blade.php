
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

      input[type=submit] {
        width: 100%;
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
      label {
          margin: 5px;
      }

      div {
        width:200px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      margin-left: 550px;
      margin-top:225px;
      }
      </style>
      <body>
      <div>
        <form method="post" action="/about">
            @csrf
          <label for="name">Input your name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">
          <label for="age">Input your age</label>
          <input type="text" id="age" name="age" placeholder="Your Age..">
          <input type="submit" value="Submit">

            <label for="name"> Your name is : {{$name}}</label>
            <br>
            <label for="age"> Your age is : {{$age}}</label>
        </form>
      </div>
      {{-- <h1> My name is :{{$name}}</h1>    print code --}}
      {{-- <br> --}}
      {{-- <h1> My age is :{{$age}}</h1>     print code --}}

      </body>
      </html>
