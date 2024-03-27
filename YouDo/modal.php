<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=""></script>
    <style>
        * {
            font-family: monospace;
        }

        .modal-container {
            display: flex;
            position: fixed;
            z-index: 1;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;

        }

        .modal {
            justify-content: center;
            border-radius: 5px;
            overflow: hidden;
        }

        .modal-header {
            background-color: rgba(7, 6, 20, 0.932);
            color: rgb(255, 255, 255);
            text-align: center;
            width: 100vw;
            max-width: 500px;
            height: 10vh;
            max-height: 20vh;
            border: none;
            outline: none;
            overflow: hidden;
            padding: 5px;
        }

        .modal-content {
            display: flex;
            justify-content: center;
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            width: 100vw;
            max-width: 500px;
            height: auto;
            padding: 5px;
            border: none;
            outline: none;
        }

        .modal-footer {
            background-color: rgb(144, 148, 151);
            color: black;
            display: flex;
            justify-content: right;
            width: 100vw;
            max-width: 500px;
            border: none;
            outline: none;
            padding: 5px;
            border: none;
            outline: none;
        }

        .submit-btn{
            display: block;
            justify-content: center;
            width: 10vw;
            height: 10vh;
            background-color: rgba(7, 6, 20, 0.932);
            color: aliceblue;
            border-radius: 5px;    
        }

        .submit-btn:hover{
            background-color: rgba(24, 17, 17, .1);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="modal-container">
        <div class="modal">
            <div class="modal-header">
                <h1>Login with details below</h1>
            </div>
            <div class="modal-content">
                <form action="login.php" method = "post">
                    <h2> Username </h2>
                    <label for="username">
                        <li>
                            <input type="text" name ="user" id="User-box" style = "width:40vh;">
                        </li>
                    </label>
                    <br><hr><br>
                    <h2> Password </h2>
                    <label for="password">
                        <li>
                            <input type="password" name = "pass" id="pass-box" style = "width:40vh;">
                        </li>
                    </label>
                    <br><hr><br>
                    <div class="center-submit-btn">
                        <label for="submit">
                            <input type="submit" class = "submit-btn" value="Login">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>