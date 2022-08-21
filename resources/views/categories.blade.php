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
    <div class="container mx-auto px-5">
        <div class="bg-blue-500 w-fit p-2 rounded-lg text-white mt-3">

            <p class="font-bold"><a href="/" class="hover:cursor-pointer">&#8592; Back To Home</a></p>

        </div>
        <h1 class="text-center font-bold text-xl mt-5 text-black">Menampilkan semua produk dengan kategori {{$title}}</h1>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-4 mx-auto">
            @foreach ($products as $item)
     
            <div class="bg-slate-200 rounded shadow w-auto overflow-hidden">
                <div class="h-40 md:h-60 overflow-hidden w-full object-cover">
                    <img src={{$item->product_asset->first()->asset->path}} class="object-cover"/>
                </div>
                <div class="p-3">

                    <p class="font-bold text-lg"><a href={{"/products/$item->product_slug"}}>{{$item->product_name}}</a></p>
                    <p class="text-sm py-2 text-slate-600">{{$item->description}}</p>
                    <p>Harga : Rp {{$item->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
    
</body>
</html>