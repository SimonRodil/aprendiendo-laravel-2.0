<!doctype html>
<head>
  <!-- ... --->
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf
            
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="title" class="block text-sm font-medium text-gray-700">
                        Title:
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="title" id="title" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full box-border rounded-none rounded-r-md sm:text-sm border-gray-300" value="{{$post->title}}">
                      </div>
                    </div>
                  </div>
      
                  <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">
                      Content:
                    </label>
                    <div class="mt-1">
                      <textarea id="content" name="content" rows="3" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$post->content}}</textarea>
                    </div>
                  </div>
    
                <div class="px-4 py-3 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                  </button>
                </div>
            </div>
        </form>
    </div>
</body>