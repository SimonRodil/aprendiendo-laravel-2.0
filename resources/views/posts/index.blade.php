<!doctype html>
<head>
  <!-- ... --->
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <a href="/posts/create" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Nuevo</a>
                @foreach ($posts as $post)
                    <article class="mb-2 mt-2">
                        <h2 class="text-xl font-bold text-gray-900">{{ $post->title }}</h2>
                        <p class="tetx-md text-gray-600">{{$post->content}}</p>
                        <a href="/posts/{{$post->id}}/edit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Editar</a>
                        <a href="/posts/{{$post->id}}/delete" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Eliminar</a>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</body>