<x-page title="Edit Task {{ $task->list }}">
    <div class="w-full p-3">
        <form action="/task/{{ $task->id }}/edit" method="post" class=" mt-2 mb-5">
            @csrf
            @method('put')
            <input value="{{ $task->list }}"
                class="border-2 border-green-400 h-10 w-full rounded-md outline-none p-2 mb-4" type="text"
                name="list" placeholder="Tambahkan Kegiatan" />
            <br>
            <textarea class="border-2 border-blue-400 w-full p-2 mb-2 rounded-md outline-none" name="deskripsi"
                placeholder="deskripsi">{{ $task->deskripsi }}</textarea>
            <button type="submit" class=" px-7 py-2 bg-blue-500 rounded-lg text-white font-bold">Edit</button>
        </form>
    </div>
</x-page>
