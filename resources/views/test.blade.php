<div class="mb-4 sm:ml-4 xl:mr-4 pt-0 col-span-4 sm:col-span-2 md:col-span-1">
    <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full" style="padding-top: 10px !important">
        <p class="font-bold text-md p-4 text-black dark:text-white text-center">
            Usuarios
            <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
                ({{ $users->count() - 1 }})
            </span>
        </p>
        <div class="relative flex items-center w-11/12 h-full group m-2">
            <svg class="absolute left-0 z-20 w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                </path>
            </svg>
            <input type="text"
                class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                placeholder="Buscar usuario" />
        </div>
        <ul class="pb-2">
            @foreach ($users as $user)
                @if (auth()->user()->id != $user->id)
                {{-- wire:click="open_chat({{$user}})" --}}
                    <li 
                        class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                {{ $user->id }}
                            </span>
                            <span>
                                <a href="{{route('chat.with',$tag)}}">{{ $user->name }}</a>
                            </span>
                        </div>
                        <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300"
                            viewBox="0 0 1024 1024">
                            <path
                                d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"
                                fill="currentColor">
                            </path>
                            <path
                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </li>
                @endif

            @endforeach

            {{-- <li
                    class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                    <div class="flex items-center justify-start text-sm">
                        <span class="mx-4">
                            03
                        </span>
                        <span>
                            Components card
                        </span>
                        <span
                            class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                            3
                            <svg width="15" height="15" fill="currentColor" class="ml-1"
                                viewBox="0 0 512 512">
                                <path
                                    d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z"
                                    fill="currentColor">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <svg width="20" height="20" fill="currentColor"
                        class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                        <path
                            d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"
                            fill="currentColor">
                        </path>
                        <path
                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z"
                            fill="currentColor">
                        </path>
                    </svg>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024"
                        class="text-green-500 mx-4">
                        <path
                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"
                            fill="currentColor">
                        </path>
                    </svg>
                </li> --}}
        </ul>
    </div>
</div>