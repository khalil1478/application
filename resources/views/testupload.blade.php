<!Doctype  html>
<html>
<head>

    <meta charset="utf_8">
    <title> upload photo </title>
</head>
<body>
<form class="" action="{{URL::to('/store')}}"   enctype="multipart/form-data" method="POST">
    <input type="file" name="upload_file" value="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br>
    <br>
    <button type="submit" name="button"> envoyer </button>

</form>




</body>

</html>
