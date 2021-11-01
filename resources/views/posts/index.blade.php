<!doctype html>
<head>
  <!-- ... --->
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        @foreach ($posts as $post)
            <article class="mb-2">
                <h2 class="text-xl font-bold text-gray-900">{{ $post->title }}</h2>
                <p class="tetx-md text-gray-600">{{$post->content}}</p>
            </article>
        @endforeach
    </div>
</body>