<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Image with Download Button</title>

  <style>
      .container{
    background: url({{asset('uploads')}}/pic/9_Shareef_Cover_photo.jpg);
    background-size: cover;
    width: 1330px;
    height: 510px;
    margin: 0 auto;
    background-color: aqua;
  }

  .button{
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  .button a{
    padding: 15px 40px;
    background-color: green;
    color: #fff;
    border-radius: 9px;
    font-size: 22px;
    text-decoration: none
  }

@media screen and (max-width: 1024px) {
    .container{
    width: 750px;
    height: 285px;
  }
}
@media screen and (max-width: 480px) {
    .container{
    width: 450px;
    height: 175px;

  }
  .button a{
    padding: 9px 25px;
    border-radius: 5px;
    font-size: 15px;
  }
  .button{
    margin-top: 10px;
  }
}
  </style>
</head>
<body>
  <div class="container">

  </div>
<div class="button">
    <a href="{{route('cover.down')}}" class="download-button">Download</a>
</div>
</body>
</html>
