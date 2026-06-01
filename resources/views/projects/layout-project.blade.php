<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>My Porto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

.back-btn{

    display:inline-block;

    background:#FCE7F3;

    color:#EC4899;

    padding:10px 18px;

    border-radius:50px;

    text-decoration:none;

    font-weight:600;

}

.back-btn:hover{

    color:#db2777;

}

.project-preview img{

    width:100%;

    border-radius:20px;

    box-shadow:
    0 15px 35px rgba(0,0,0,.08);

}

</style>
</head>

<body
style="
background:#FFF8FA;
font-family:Poppins,sans-serif;
">

    @yield('content')

</body>

</html>