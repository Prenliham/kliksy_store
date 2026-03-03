<footer class="bg-primary text-light pt-5 mt-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Brand -->
            <div class="col-lg-4 col-md-6">
                <h4 class="fw-semibold">{{ config('app.name') }}</h4>
                <p class="text-light opacity-75">
                    Platform modern yang dibangun menggunakan Laravel dan Bootstrap.
                    Cepat, aman, dan scalable untuk kebutuhan aplikasi web Anda.
                </p>
                <!-- Social Media -->
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-light fs-5"><x-icon name="facebook" width="28"></x-icon></i></a>
                    <a href="#" class="text-light fs-5"><x-icon name="twitter" width="28"></x-icon></a>
                    <a href="#" class="text-light fs-5"><x-icon name="instagram" width="28"></x-icon></a>
                    <a href="#" class="text-light fs-5"><x-icon name="linkedin" width="28"></x-icon></a>
                </div>
            </div>
            <!-- Navigation -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-semibold mb-3">Navigasi</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="text-light opacity-100-hover text-decoration-none opacity-75">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-light opacity-100-hover text-decoration-none opacity-75">About</a></li>
                    <li class="mb-2"><a href="#" class="text-light opacity-100-hover text-decoration-none opacity-75">Services</a></li>
                    <li class="mb-2"><a href="#" class="text-light opacity-100-hover text-decoration-none opacity-75">Contact</a></li>
                </ul>
            </div>
            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-semibold mb-3">Layanan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2 text-light opacity-75">Web Development</li>
                    <li class="mb-2 text-light opacity-75">API Integration</li>
                    <li class="mb-2 text-light opacity-75">UI/UX Design</li>
                    <li class="mb-2 text-light opacity-75">System Architecture</li>
                </ul>
            </div>
            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-semibold mb-3">Newsletter</h6>
                <p class="text-light opacity-75">Dapatkan update terbaru dari kami.</p>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Anda">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between align-items-center pb-3">
            <div class="text-light">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
            <div>
                <a href="#" class="text-light opacity-75 text-decoration-none me-3 opacity-100-hover">Privacy Policy</a>
                <a href="#" class="text-light opacity-75 text-decoration-none opacity-100-hover">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>