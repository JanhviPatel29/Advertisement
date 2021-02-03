
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style1.css">
        
    </head>
<body>
    <Center><h1>Tspark Management</h1></Center>
    

    <form action="{{ route('login') }}" class="login-form" method="POST">
        @csrf
        <h1>Staff Login</h1>
        
        <div class="txtb">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email">
            <span data-placeholder="Email"></span>
        
        </div>

        <div class="txtb">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password">
            <span data-placeholder="Password"></span>

        </div>
        <div class="pass">Forgot Password?</div>
        
        <input type="submit" class="logbtn" value="Login" >
        
        
        

        
    </form>

    <script type="text/javascript">
    $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
    });

    </script>
</body>
</html>