@extends('admin.layout.base')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 p-6 mt-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <h4>{{ $message->subject }}</h4>
                <p>
                    <span class="font-semibold">{{ $message->name }}</span>
                    <span class="text-sm">{{ '<' . $message->name . '>' }}</span>
                </p>
                <p class="mt-5">{{ $message->message }}</p>
            </div>
        </div>
    </div>
@endsection
