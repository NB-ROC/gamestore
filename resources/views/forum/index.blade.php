<x-app-layout>




<h1>forum posts</h1>


    @foreach ($threads as $thread)
        <div style="background-color: black; width: 300px; height: 200px; color: white;">
            <p>{{ $thread->title }}</p>
            <p>{{ $thread->text }}</p>
        </div>
    @endforeach


        <a href="{{ route('threads.create')}}"><div style="width: 200px; height: 100px; background-color: blue;">Create forumpost</div></a>
</x-app-layout>