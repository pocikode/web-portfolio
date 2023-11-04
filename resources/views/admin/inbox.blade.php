@extends('admin.layout.base')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mt-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="table-clickable items-center w-full border-collapse mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Subject</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr class="{{ $message->is_read ? '' : 'bg-blue-50' }} hover:bg-blue-50 cursor-pointer border-y-4 border-white" data-href="{{ route('admin.inbox.show', $message->id) }}">
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <h6 class="mb-0 text-sm leading-normal">{{ $message->name }}</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400">{{ $message->email }}</p>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $message->subject }}</td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $message->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="w-full p-3">
                            {{ $messages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const tableRows = document.querySelectorAll(".table-clickable tbody tr");

        for (const tableRow of tableRows) {
            tableRow.addEventListener("click", function () {
                // window.open(this.dataset.href, "_blank");
                window.location.href = this.dataset.href;
            });
        }
    </script>
@endpush
