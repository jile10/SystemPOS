<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Itransform - Login</title>
        <link rel="icon" href="/img/logo1.png" type="image/png">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <div class="h-100">
            <div class="row ml-0 mr-0 justify-content-center mar-auto">
                <div class="login-container">
                    <form action="/backend/prelogin" method="post">
                        {{csrf_field()}}
                        <p class="oval-bookmark"></p>
                		<img src="/yes.png" alt="" width="300" height="140"/>
                        <div>
                            <input type="email" name="email" class="username" placeholder="Email">
                        </div>
                        <div>
                            <input type="password" name="password" class="password" placeholder="Password">
                        </div>
                        <div>
                            <button class="button">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>