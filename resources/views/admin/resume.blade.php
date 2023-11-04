@extends('admin.layout.base')

@section('content')
    <div class="flex flex-wrap -mx-3" x-data="resumes">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative resume flex flex-col min-w-0 mt-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="w-full px-6">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-xl font-bold my-6">Education</h3>
                        <button type="button" class="flex items-center font-semibold text-base">
                            <i class='bx bxs-plus-circle'></i> <span class="ml-1">Add Education</span>
                        </button>
                    </div>
                    <ul id="input-education-list" x-ref="inputEducationList" class="w-full pb-6">
                        <template x-for="(school, index) in resumes.school">
                            <div class="resume-item">
                                <div class="flex justify-between items-center">
                                    <h4 x-text="school.title"></h4>
                                    <div class="flex items-center">
                                        <button type="button" class="bg-blue-700 rounded w-8 h-8 mr-3"><i class='bx bxs-pencil text-white'></i></button>
                                        <button type="button" class="bg-red-500 rounded w-8 h-8"><i class='bx bxs-trash text-white'></i></button>
                                    </div>
                                </div>
                                <h5 x-text="school.start.split('-')[0] + ' - ' + (school.end ? school.end.split('-')[0] : 'Now')"></h5>
                                <p><em x-text="school.institution"></em></p>
                                <p x-html="school.description"></p>
                            </div>
                        </template>
                    </ul>
                </div>
            </div>

            <div class="relative resume flex flex-col min-w-0 mt-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="w-full px-6">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-xl font-bold my-6">Work Experience</h3>
                        <button type="button" class="flex items-center font-semibold text-base">
                            <i class='bx bxs-plus-circle'></i> <span class="ml-1">Add Work Experience</span>
                        </button>
                    </div>
                    <ul id="input-education-list" x-ref="inputEducationList" class="w-full pb-6">
                        <template x-for="(work, index) in resumes.work">
                            <div class="resume-item">
                                <div class="flex justify-between items-center">
                                    <h4 x-text="work.title"></h4>
                                    <div class="flex items-center">
                                        <button type="button" class="bg-blue-700 rounded w-8 h-8 mr-3"><i class='bx bxs-pencil text-white'></i></button>
                                        <button type="button" class="bg-red-500 rounded w-8 h-8"><i class='bx bxs-trash text-white'></i></button>
                                    </div>
                                </div>
                                <h5 x-text="work.start.split('-')[0] + ' - ' + (work.end ? work.end.split('-')[0] : 'Now')"></h5>
                                <p><em x-text="work.institution"></em></p>
                                <p x-html="work.description"></p>
                            </div>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('resumes', () => ({
                resumes: @json($resumes),
                addSkill() {
                    this.resumes.push({
                        name: null,
                        value: null
                    });
                },
                removeSkill(index) {
                    this.resumes.splice(index, 1);
                }
            }))
        })
    </script>
@endpush
