@extends('templates.layout')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch" x-data>
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p x-text="$store.profile.city"></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p x-text="$store.profile.email"></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p x-text="$store.profile.phone"></p>
                        </div>

                        <iframe style="border:0; width: 100%; height: 290px;" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                                x-bind:src="'https://www.google.com/maps/embed/v1/place?key=AIzaSyCOw2fEnlIwqwdB-IHAXWR8JT0kq23vgdw&q=' + $store.profile.city">
                        </iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" x-data="contact">
                    <form role="form" class="php-email-form" x-on:submit.prevent="submit">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" x-model="form.name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" x-model="form.email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" x-model="form.subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message" x-model="form.message" required></textarea>
                        </div>
                        <div class="my-3">
                            <template x-if="loading">
                                <div class="loading d-block">Loading</div>
                            </template>
                            <template x-if="error">
                                <div class="error-message d-block" x-text="message"></div>
                            </template>
                            <template x-if="success">
                                <div class="sent-message d-block">Your message has been sent. Thank you!</div>
                            </template>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('contact', () => ({
                loading: false,
                error: false,
                success: false,
                message: '',
                form: {
                    name: null,
                    email: null,
                    subject: null,
                    message: null,
                },
                submit() {
                    this.loading = true
                    axios.post('{{ route('api.contact') }}', this.form)
                        .then(resp => {
                            this.success = true
                            this.error = false
                            this.message = resp.data.message

                            // reset form
                            this.name = null
                            this.email = null
                            this.subject = null
                            this.message = null
                        })
                        .catch(err => {
                            this.success = false
                            this.error = true
                            this.message = err.message
                        })
                        .finally(() => {
                            this.loading = false
                        })
                }
            }))
        })
    </script>
@endpush
