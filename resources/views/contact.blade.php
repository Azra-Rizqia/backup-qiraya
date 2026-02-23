@extends('app')
@section('title', 'Qiraya - Platform Mengaji')

@section('content')
<div class="light" id="kontak">
    <div class="section zubuz-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="zubuz-default-content m-right">
                        <h2>Hubungi tim kami</h2>
                        <p>Butuh informasi lebih lanjut tentang program Qiraya? Hubungi tim kami untuk konsultasi dan panduan pendaftaran. Kami siap membantu Anda memulai perjalanan belajar Al-Qur'an dengan nyaman.</p>
                        <div class="zubuz-extara-mt">
                            <div class="zubuz-iconbox-wrap-left d-block">
                                <div class="zubuz-iconbox-data data-small">
                                    <span>Lokasi Kantor</span>
                                    <p>JL. Gatramas Raya C4/16, Kembaran, Banyumas.</p>
                                </div>
                            </div>
                            <div class="zubuz-iconbox-wrap-left d-block">
                                <div class="zubuz-iconbox-data data-small">
                                    <span>Social Media:</span>
                                    <div class="zubuz-social-icon2 social-box">
                                        <ul>
                                            <li>
                                                <a href="https://x.com/qiraya_official" target="_blank">
                                                    <i class="fa-brands fa-x-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/profile.php?id=61587093861099" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/company/official-qiraya" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/@qiraya_official" target="_blank">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/qiraya_official" target="_blank">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="map-wrapper">
                        <iframe
                            src="https://maps.google.com/maps?q=JL.%20Gatramas%20Raya%20C4/16,%20Kembaran,%20Banyumas&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section blue-bg zubuz-section-padding6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="tel:123">
                        <div class="zubuz-iconbox-wrap-left text-center-lg rt-mb-24">
                            <div class="zubuz-iconbox-icon light">
                                <a href="https://wa.me/6285183861580">
                                    <i class="fa-solid fa-phone"></i>
                                </a>
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <h3>Hubungi Kami</h3>
                                <p>+62-851-8386-1580</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="mailto:name@email.com">
                        <div class="zubuz-iconbox-wrap-left text-center-lg rt-mb-24">
                            <div class="zubuz-iconbox-icon light">
                                <a href="mailto:officialqiraya@gmail.com">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <h3>Email Kami</h3>
                                <p>officialqiraya@gmail.com</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="zubuz-iconbox-wrap-left text-center-lg rt-mb-24">
                        <div class="zubuz-iconbox-icon light">
                            <a href="https://maps.app.goo.gl/3WSFjapAa7bruBeX7">
                                <i class="fa-solid fa-location-dot"></i>
                            </a>
                        </div>
                        <div class="zubuz-iconbox-data light">
                            <h3>Alamat Kantor Kami</h3>
                            <p>Jl. Gatramas Raya C4/16,<br> Kembaran, Banyumas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection