<x-layout>
    <x-slot name="heading">Create Job</x-slot>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="title" type="text" name="title" placeholder="Shift Leader"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('title')
                                <p class="text-red-500 font-semibold text-sm/6 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="sm:col-span-4">
                        <label for="compensation" class="block text-sm/6 font-medium text-gray-900">Compensation</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="compensation" type="text" name="compensation" placeholder="$138,041 - $192,613"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('compensation')
                                <p class="text-red-500 font-semibold text-sm/6 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="sm:col-span-4">
                        <label for="location" class="block text-sm/6 font-medium text-gray-900">Location</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="location" type="text" name="location" placeholder="New York, NY"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('location')
                                <p class="text-red-500 font-semibold text-sm/6 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about the job.</p>
                        @error('description')
                            <p class="text-red-500 font-semibold text-sm/6 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>

        {{-- <div class="mt-10">
            @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 italic">{{ $error }}</li>
                @endforeach
                </ul>
            @endif
        </div> --}}
    </form>

</x-layout>
