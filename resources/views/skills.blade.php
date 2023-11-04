@extends('templates.layout')

@section('content')
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content" x-data="skill">
                <template x-for="skill_data in data">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">
                                <span x-text="skill_data.name"></span>
                                <i class="val" x-text="skill_data.value + '%'"></i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" x-bind:style="'width: ' + skill_data.value + '%'" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section><!-- End Skills Section -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('skill', () => ({
                data: [],
                init() {
                    axios.get('{{ route('api.skill') }}')
                        .then(resp => {
                            this.data = resp.data
                        })
                }
            }))
        })
    </script>
@endpush
