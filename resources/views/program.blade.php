@extends('app')
@section('title', 'Qiraya - Platform Mengaji')

@section('content')
<div class="light" id="beranda">
    <div class="zubuz-section-padding2">
        <div class="container">
            <div class="about-text">
                <p class="highlight">Program Kami</p>
                <h2>Temukan Program Belajar Terbaikmu di <span class="highlight">Qiraya</span></h2>
                <p>Qiraya menghadirkan berbagai program pembelajaran Al-Qur'an yang dirancang sesuai kebutuhan dan level setiap santri. Mulai dari Ngaji Dasar, Tahsin, hingga Tahfidz, setiap program disusun secara terarah untuk membantu santri belajar dengan nyaman dan konsisten.</p>
            </div>
        </div>
    </div>
    <div class="section zubuz-section-padding2 dark-bg">
        <div class="section zubuz-section-padding2">
            <div id="zubuz-counter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="zubuz-v2-thumb thumb-mr">
                            <img src="assets/images/v3/private.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="zubuz-default-content light">
                            <h2>Private</h2>
                            <p>Program Private Class Qiraya memberikan pendampingan penuh satu guru dengan satu santri. Dengan pendekatan personal, setiap sesi disesuaikan dengan kemampuan, target, dan ritme belajar masing-masing.</p>
                            <div class="zubuz-extara-mt">
                                <div class="zubuz-counter-wrap">
                                    <div class="zubuz-counter-data">
                                        <h2 class="zubuz-counter-number">1-on-1</h2>
                                        <p>Pendampingan penuh setiap sesi</p>
                                    </div>
                                    <div class="zubuz-counter-data">
                                        <h2 class="zubuz-counter-number"><span data-percentage="100" class="zubuz-counter"></span>%</h2>
                                        <p>Fokus pada perkembangan santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section zubuz-section-padding5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 order-lg-2">
                        <div class="zubuz-v2-thumb thumb-ml">
                            <img src="assets/images/v3/groups.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="zubuz-default-content light">
                            <h2>Group Study</h2>
                            <p>Group Study Qiraya menghadirkan suasana belajar yang aktif dan menyenangkan dalam kelompok kecil dengan level yang setara. Santri belajar bersama, saling memotivasi, dan tetap mendapatkan bimbingan terarah dari ustadz/ustadzah.</p>
                            <div class="row">
                                <div class="zubuz-iconbox-wrap-left">
                                    <div class="zubuz-iconbox-data">
                                        <h2 class="zubuz-counter-number"><span></span>2-4 Santri</h2>
                                        <p>Kelompok kecil & efektif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section zubuz-section-padding5">
            <div class="container">
                <div class="row">
                    <div class="zubuz-extara-mt col-lg-7">
                        <div class="zubuz-iconbox-wrap-left">
                            <div class="zubuz-iconbox-icon none-bg">
                                <img src="assets/images/v3/check.png" alt="">
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <span>Penyesuaian Level</span>
                                <p>Level belajar disesuaikan dengan kemampuan santri.</p>
                            </div>
                        </div>
                        <div class="zubuz-iconbox-wrap-left">
                            <div class="zubuz-iconbox-icon none-bg">
                                <img src="assets/images/v3/check.png" alt="">
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <span>Jadwal fleksibel</span>
                                <p>Jadwal kelas dapat disesuaikan dengan kebutuhan santri dan kesepakatan bersama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="zubuz-extara-mt col-lg-5 order-lg-2">
                        <div class="zubuz-iconbox-wrap-left">
                            <div class="zubuz-iconbox-icon none-bg">
                                <img src="assets/images/v3/check.png" alt="">
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <span>Pendampingan Terarah</span>
                                <p>Pendampingan langsung secara sistematis untuk membantu santri dalam memahami materi dengan lebih baik.</p>
                            </div>
                        </div>
                        <div class="zubuz-iconbox-wrap-left">
                            <div class="zubuz-iconbox-icon none-bg">
                                <img src="assets/images/v3/check.png" alt="">
                            </div>
                            <div class="zubuz-iconbox-data light">
                                <span>Monitoring & Evaluasi Berkala</span>
                                <p>Monitoring kemajuan belajar santri secara berkala untuk memastikan santri terus mengalami peningkatan yang optimal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3 bg-light position-relative">
        <div class="container">
            <div class="zubuz-section-title center">
                <h2>Pilih Program Kelas</h2>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="assets/images/v3/regular.svg" alt="Regular Class" class="img-fluid">
                        </div>
                        <div class="program-content">
                            <h4 class="program-title">Kelas Regular</h4>
                            <p class="program-desc">Belajar dasar pengenalan huruf hijaiyah, cara membaca yang benar, hingga tahapan Iqra secara bertahap dengan metode yang efektif</p>

                            <div class="program-details">
                                <table class="table table-borderless program-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Durasi</th>
                                            <td>1 Jam/Sesi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Waktu</th>
                                            <td>8 Jam</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center mt-4 mb-3">
                                <a href="#" class="btn-cyan-program">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="assets/images/v3/tahsin.svg" alt="Tahsin Class" class="img-fluid">
                        </div>
                        <div class="program-content">
                            <h4 class="program-title">Kelas Tahsin</h4>
                            <p class="program-desc">Belajar membaca Al-Qur'an dengan makhraj, tajwid, panjang pendek bacaan, serta kelancaran agar bacaan menjadi lebih tartil dan sesuai kaidah</p>
                            <div class="program-details">
                                <table class="table table-borderless program-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Durasi</th>
                                            <td>1 Jam/Sesi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Waktu</th>
                                            <td>8 Jam</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center mt-4 mb-3">
                                <a href="#" class="btn-cyan-program">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="assets/images/v3/tahfidz.svg" alt="Tahfidz Class" class="img-fluid">
                        </div>
                        <div class="program-content">
                            <h4 class="program-title">Kelas Tahfidz + Tulis Al-Quran</h4>
                            <p class="program-desc">Kelas untuk membantu santri menghafal Al-Qur'an secara bertahap dengan tambahan kelas yang melatih cara menulis ayat-ayat Al-Qur'an</p>

                            <div class="program-details">
                                <table class="table table-borderless program-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Durasi</th>
                                            <td>1.5 Jam/Sesi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Waktu</th>
                                            <td>12 Jam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Benefit Tambahan</th>
                                            <td>Sertifikat Pencapaian</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center mt-4 mb-3">
                                <a class="btn-program">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection