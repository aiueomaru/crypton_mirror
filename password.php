<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body{
            background: black;
            color: white;
        }
        pre{
            width: 100;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $password = "cattt!?";
        $flag = false;
        if (isset($_POST["data"]) === true && $_POST["data"] === $password) {
            $flag = true;
            require_once "response.php";
        }

        if (isset($_POST["data"]) === false || $flag === false) {
            echo "
                <script>
                    let password = prompt('パスワードを入力してください');
                    
                    let form = document.createElement('form');
                    let request = document.createElement('input');
                    form.method = 'POST';
                    request.type = 'hidden';
                    request.name = 'data';
                    request.value = password;
                    form.appendChild(request);
                    document.body.appendChild(form);
                    form.submit();
                </script>
            ";
        }
    ?>
</body>
</html>