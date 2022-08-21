<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home - OwiStore</title>
</head>
<body>
    <header class="w-full bg-blue-500 py-3">
        <nav class="container mx-auto flex items-center justify-between">
            <h1 class="font-bold text-xl text-white">Owi Store</h1>
            <ul class="flex justify-between gap-3 text-white">
                <li>Products</li>
                <li>Category</li>
            </ul>
        </nav>
    </header>
    <main class="container py-5 px-6">
        <h2 class="font-bold text-3xl">Categories</h2>
        <div class="grid grid-cols-4 gap-3 mt-4">
            @foreach ($categories as $item)
            <div class="relative bg-pink-500">
                <div class="absolute z-10 bg-black bg-opacity-60 w-full h-full">
                    <div class="h-full flex flex-col items-center justify-center">
                        <p class="text-white text-center text-lg font-bold">{{$item->category_name}}</p>
                    </div>
                </div>
                <div class="relative object-fill">
                    <img src={{$item->asset->path}}  class="object-cover"/>
                </div>
            </div>
            @endforeach
        </div>
        <div class="py-8"/>
        <h2 class="font-bold text-3xl">Products</h2>
        <div class="grid grid-cols-4 gap-3 mt-4">
            @foreach ($products as $item)
            
            @endforeach
        </div>

    </main>
    <footer></footer>
</body>
</html>