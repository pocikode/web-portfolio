@extends('templates.layout')

@section('content')
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" x-data="resume">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Education</h3>
                    <template x-for="school in schools">
                        <div class="resume-item">
                            <h4 x-text="school.title"></h4>
                            <h5 x-text="school.start.split('-')[0] + ' - ' + (school.end ? school.end.split('-')[0] : 'Now')"></h5>
                            <p><em x-text="school.institution"></em></p>
                            <p x-html="school.description"></p>
                        </div>
                    </template>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <template x-for="work in works">
                        <div class="resume-item">
                            <h4 x-text="work.title"></h4>
                            <h5 x-text="work.start.split('-')[0] + ' - ' + (work.end ? work.end.split('-')[0] : 'Now')"></h5>
                            <p><em x-text="work.institution"></em></p>
                            <p x-html="work.description"></p>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('resume', () => ({
                    schools: [],
                    works: [],
                    init() {
                        axios.get('{{ route('api.resume') }}')
                            .then(resp => {
                                this.schools = resp.data.school
                                this.works = resp.data.work
                            })
                    }
                }))
            })
        </script>
    @endpush
@endsection
