<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
    <div class="container mx-auto">
        <div class="bg-blue-500 w-fit p-2 rounded-lg text-white mt-3">

            <p class="font-bold"><a href="/" class="hover:cursor-pointer">&#8592 Back To Home</a></p>

        </div>

        <h1 class="font-bold text-3xl mt-5">{{$product->product_name}}</h1>
        <p class="text-lg py-3">{{$product->description}}</p>
        <p class="text-xl">Rp {{$product->price}},00</p>
        <div class="flex flex-wrap gap-2">
            @foreach($product->product_asset as $item)
                <img src={{$item->asset->path}} alt="" width="200">
            @endforeach
        </div>
    </div>
</body>
</html>