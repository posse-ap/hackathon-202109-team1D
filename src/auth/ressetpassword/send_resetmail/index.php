<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Schedule | POSSE</title>
</head>

<body>
    <header class="h-16">
        <div class="flex justify-between items-center w-full h-full mx-auto pl-2 pr-5">
            <div class="h-full">
                <img src="/img/header-logo.png" alt="" class="h-full">
            </div>
        </div>
    </header>

    <main class="bg-gray-100 h-screen">
        <div class="w-full mx-auto py-10 px-5">
            <h2 class="text-md font-bold mb-5">>パスワード再設定</h2>
            <form action="/send_resetpass.php" method="POST">
                <label for="email">email</label>
                <input name="email" type="email" placeholder="メールアドレス" class="w-full p-4 text-sm mb-3">
                </label>
                <input type="submit" value="送信" class="cursor-pointer w-full p-3 text-md text-white bg-blue-400 rounded-3xl bg-gradient-to-r from-blue-600 to-blue-300">
            </form>
        </div>
    </main>
</body>

</html>