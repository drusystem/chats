<div class="flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
        <!-- 1 card -->
        @foreach ($users as $user)
            @if (auth()->user()->id != $user->id)
                <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
                    <div
                        class=" text-white flex items-center absolute rounded-full shadow-xl bg-blue-500 left-4 -top-6">
                        <!-- svg  -->
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg> --}}
                        <x-avatar />
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">{{ $user->name }}</p>
                        {{-- <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p>Marketing Team</p>
                        </div> --}}
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p>Registrado el {{ $user->created_at->format('d-m-Y H:i A') }}</p>
                        </div>
                        <div class="border-t-2 mb-2"></div>

                        <div class="font-semibold text-base p-2 text-center">
                            <a class="text-white rounded-full shadow-xl bg-blue-500 p-2 mt-4"
                                href="{{ route('chat.with', $user) }}">
                                Chatear 
                                    <svg style="display: inline-flex" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                      </svg>
                            </a>
                            {{-- <div class="my-2">
                                <p class="font-semibold text-base mb-2">Team Member</p>
                                <div class="flex space-x-2">
                                    <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="w-6 h-6 rounded-full" />
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Woman_7.jpg"
                                        class="w-6 h-6 rounded-full" />
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxSqK0tVELGWDYAiUY1oRrfnGJCKSKv95OGUtm9eKG9HQLn769YDujQi1QFat32xl-BiY&usqp=CAU"
                                        class="w-6 h-6 rounded-full" />
                                </div>
                            </div>
                            <div class="my-2">
                                <p class="font-semibold text-base mb-2">Progress</p>
                                <div class="text-base text-gray-400 font-semibold">
                                    <p>34%</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
