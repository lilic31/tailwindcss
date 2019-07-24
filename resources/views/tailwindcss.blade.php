<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Test de tailwind</title>
</head>
<body>

    <div class="flex justify-center items-center min-h-screen bg-gray-100">

        <div class="bg-white shadow-md max-w-lg md:flex">
            <img class="w-full h-40 object-cover md:h-full flex-1" src="https://picsum.photos/id/1047/200/300" alt="">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center items-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">
                    Connexion
                </h1>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-2" for="username">Nom utilisateur</label>
                    <input class="border shadow-inner py-2 px-3 text-gray-7 w-full" type="text" id="username" name="username">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-2" for="password">Mot de passe</label>
                    <input class="border shadow-inner py-2 px-3 text-gray-7 w-full" type="password" id="password" name="password">
                </div>
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded cursor-pointer self-start" value="Se connecter">
            </div>
          
        </div>

    </div>


</body>
</html>