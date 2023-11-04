@extends('admin.layout.base')

@section('content')
    <div class="flex justify-center flex-wrap -mx-3">
        <div class="flex-none w-full md:w-5/6 max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mt-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto px-0 py-5">
                    <form class="flex flex-wrap p-0 overflow-x-auto" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Photo Section -->
                        <div class="w-full max-w-full px-3 mb-6 sm:w-full sm:flex-none xl:mb-0 xl:w-1/3">
                            <div class="flex flex-col items-center space-x-6">
                                <div class="shrink-0">
                                    <img id='preview_img' class="h-32 w-32 object-cover rounded-full" src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('img/dummy-profile.png') }}" alt="{{ $user->name }}" />
                                </div>
                                <label class="block mt-3">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="photo" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100
                                      "/>
                                </label>
                            </div>
                        </div>
                        <!-- Profile Section -->
                        <div class="flex flex-wrap w-full max-w-full px-3 mb-6 sm:w-full xl:mb-0 xl:w-2/3">
                            <div class="mb-6 px-3 w-full md:w-1/2">
                                <label class="block mb-1 md:mb-0" for="inline-name">Name</label>
                                <input type="text" placeholder="Your Name" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       id="inline-name" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="mb-6 px-3 w-full md:w-1/2">
                                <label class="block mb-1 md:mb-0" for="inline-email">Email</label>
                                <input type="email" name="email" placeholder="user@mail.com" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       id="inline-email" value="{{ $user->email }}">
                            </div>
                            <div class="mb-6 px-3 w-full md:w-1/2">
                                <label class="block mb-1 md:mb-0" for="inline-phone">Phone</label>
                                <input type="text" name="phone" placeholder="08123123123" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       id="inline-phone" value="{{ $user->phone }}">
                            </div>
                            <div class="mb-6 px-3 w-full md:w-1/2">
                                <label class="block mb-1 md:mb-0" for="inline-city">City</label>
                                <input type="text" name="city" placeholder="Jakarta" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       id="inline-city" value="{{ $user->city }}">
                            </div>
                            <div class="mb-6 px-3 w-full">
                                <label class="block mb-1 md:mb-0" for="inline-about">About</label>
                                <textarea name="about" id="inline-about" rows="5" placeholder="Write your thoughts here..." class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ $user->about }}</textarea>
                            </div>
                            <div class="mb-6 px-3 w-full">
                                <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const loadFile = function(event) {
            const input = event.target;
            const file = input.files[0];
            const type = file.type;

            const output = document.getElementById('preview_img');

            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
