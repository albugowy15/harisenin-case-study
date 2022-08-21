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
    <main class="container py-5 mx-auto">
        <h2 class="font-bold text-3xl">Categories</h2>
        <div class="grid grid-cols-4 grid-rows-1 overflow-scroll gap-3 mt-4">
            @foreach ($categories as $item)
            <div class="relative bg-pink-500 overflow-hidden">
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
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 mt-4 mx-auto">
            @foreach ($products as $item)
     
            <div class="bg-slate-200 rounded shadow w-auto overflow-hidden">
                <div class="h-40 overflow-hidden w-full object-cover">
                    <img src={{$item->product_asset->first()->asset->path}} class="object-cover" width="400"/>
                </div>
                <div class="p-3">

                    <p class="font-bold text-lg">{{$item->product_name}}</p>
                    <p class="text-sm py-2 text-slate-600">{{$item->description}}</p>
                    <p>Harga : Rp {{$item->price}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </main>
    <footer></footer>
</body>
</html>