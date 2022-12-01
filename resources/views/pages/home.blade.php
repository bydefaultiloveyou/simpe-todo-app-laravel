<x-page title="Otakuread">
    <div class=" w-full p-3">
        <form action="/task" method="post" class=" mt-2 mb-5">
            @csrf
            <input class="border-2 border-green-400 h-10 w-full rounded-md outline-none p-2 mb-4" type="text"
                name="list" placeholder="Tambahkan Kegiatan" />
            <br>
            <textarea class="border-2 border-blue-400 w-full p-2 mb-2 rounded-md outline-none" name="deskripsi"
                placeholder="deskripsi"></textarea>
            <button type="submit" class=" px-7 py-2 bg-red-400 rounded-lg text-white font-bold">Tambah</button>
        </form>

        <ul>
            @if (count($lists) === 0)
                <li class="relative rounded-md mt-1 bg-gray-200 flex font-semibold p-2 overflow-hidden font-Open">
                    Nothing
                    Task</li>
            @endif
            @foreach ($lists as $index => $list)
                <li class="relative rounded-md mt-2 bg-gray-200 flex p-1 flex-wrap">
                    <span
                        class="w-12 h-12 bg-green-500 flex justify-center items-center rounded-md text-white font-bold font-Open">{{ $index + 1 }}</span>
                    <div class="relative h-full flex flex-col w-72 ml-3">
                        <p class="font-bold text-gray-700 font-Open">
                            {{ $list->list }}
                        </p>
                        <p class="w-full break-words text-gray-500 font-Nunito line-clamp-2">
                            {{ $list->deskripsi }}
                        </p>
                    </div> <br>
                    <div class=" w-full flex rounded-md overflow-hidden text-white font-Open mt-2">
                        <a href="/task/{{ $list->id }}/edit"
                            class="w-1/2 py-2 bg-blue-600 flex justify-center items-center">Edit</a>
                        <form action="/task/{{ $list->id }}/delete" method="POST" class="w-1/2 bg-orange-400">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                class="w-full flex justify-center items-center py-2 bg-red-400">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-page>
