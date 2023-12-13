<x-app-layout>




<h1>forum create</h1>


<form action="{{ route('threads.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="text">text:</label>
            <textarea name="text" id="text"></textarea>
        </div>
        <button type="submit">Create ForumPost</button>
</form>

</x-app-layout>