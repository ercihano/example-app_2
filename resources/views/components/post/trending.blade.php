<div class="bg-white shadow p-5 rounded-sm">
    <div class="border-b-2 border-blue-700 relative flex items-center justify-center">
        <h3 class="absolute bg-white px-4 text-xs text-gray-500 font-medium">Trendig Stroies</h3>
    </div>
    <div class="mt-5 text-gray-700 text-sm">
        <ul>
            @foreach($trending as $post)
                <li><a href="/$categories/{{$post['id']}}">{{$post['trending']}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
