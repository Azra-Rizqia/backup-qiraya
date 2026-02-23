@extends('app')
@section('title', 'Qiraya - Platform Mengaji')

@section('content')
<div class="light" id="tentang">
    <div class="zubuz-section-padding2">
        <div class="container">
            <div class="about-text">
                <p class="highlight">Tentang Kami</p>
                <h2>Kenali Lebih Dekat <span class="highlight">Qiraya</span></h2>
                <p>Qiraya merupakan platform edutech spiritual yang menyediakan akses belajar Al-Qur'an berkualitas tinggi melalui sesi privat online yang fleksibel. Kami hadir sebagai solusi modern bagi umat Muslim yang ingin mendalami Al-Qur'an tanpa terkendala oleh batasan fisik.</p>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="vm-card">
                        <div class="vm-icon-wrapper">
                            <img src="assets/images/icon/visi.svg" alt="Icon Visi">
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Visi Kami</h3>
                            <p class="vm-desc">
                                Menjadi sahabat setiap muslim untuk menjalankan kegiatan spiritual Al-Qur'an dimana saja dan kapan saja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="vm-card">
                        <div class="vm-icon-wrapper icon-green">
                            <img src="assets/images/icon/misi.svg" alt="Icon Misi">
                        </div>
                        <div class="vm-content">
                            <h3 class="vm-title">Misi Kami</h3>
                            <ul class="vm-list">
                                <li>Menyediakan kurikulum belajar yang sistematis dan mudah dipahami.</li>
                                <li>Memberdayakan guru mengaji dengan akses teknologi dan penghasilan yang layak.</li>
                                <li>Menciptakan ekosistem belajar yang interaktif dan menyenangkan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-brand-logo-section">
        <div class="container">
            <div class="problem-box">
                <h2 class="problem-title">Inti Masalah</h2>

                <div class="problem-content">
                    <p>
                        Di era modern serba digital ini, banyak keluarga Muslim di perkotaan menghadapi dilema besar:
                        <span class="text-highlight">keinginan kuat untuk memberikan pendidikan agama terbaik bagi anak,</span>
                        namun terbentur oleh kemacetan dan jadwal kerja yang padat yang membuat pencarian guru ngaji menjadi beban logistik tersendiri.
                    </p>

                    <p>
                        Di sisi lain, terdapat fenomena <span class="text-highlight">"malu bertanya sesat di jalan"</span>
                        pada orang dewasa. Banyak dari mereka yang menyadari bahwa bacaan Al-Qur'annya belum sempurna,
                        namun merasa sungkan atau malu jika harus belajar dari nol di tempat umum atau di hadapan orang lain.
                        Ketidakhadiran privasi dan keterbatasan waktu inilah yang seringkali menghentikan niat baik seseorang untuk belajar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3">
        <div class="container">
            <div class="solution-box">
                <h2 class="solution-main-title">Solusi Kami</h2>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="solution-item">
                            <div class="solution-icon icon-green">A</div>
                            <h4 class="solution-title">On-Demand Ustadz</h4>
                            <p class="solution-desc">
                                Pesan guru ngaji semudah memesan transportasi online, sesuai jadwal kosong pengguna.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="solution-item">
                            <div class="solution-icon icon-yellow">B</div>
                            <h4 class="solution-title">1-on-1 Private Privacy</h4>
                            <p class="solution-desc">
                                Ruang belajar privat virtual yang menjamin kenyamanan bagi orang dewasa untuk belajar tanpa rasa sungkan.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="solution-item">
                            <div class="solution-icon icon-orange">C</div>
                            <h4 class="solution-title">Integrated Curriculum</h4>
                            <p class="solution-desc">
                                Kurikulum yang disesuaikan, mulai dari nol (Iqra) hingga Tahsin dan Tajwid tingkat lanjut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3">
        <div class="container">
            <div class="zubuz-section-title center">
                <h2>Kenapa <span class="highlight">Qiraya</span>?</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/structure.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Metode Bertahap & Terstruktur</h3>
                            <p>Qiraya menyusun materi mengaji secara bertahap, dimulai dari dasar hingga lanjutan, sehingga anda dapat belajar dengan ritme yang nyaman dan terarah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/flexible.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Fleksibel & Mudah Diakses</h3>
                            <p>Pembelajaran dilakukan melalui Platform Meeting Online, sehingga peserta dapat mengikuti kelas dari mana saja tanpa perlu datang ke lokasi tertentu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/Users.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Terbuka untuk Semua Usia</h3>
                            <p>Program Qiraya dirancang untuk anak-anak, remaja, hingga dewasa, dengan pendekatan pembelajaran yang disesuaikan dengan kebutuhan masing-masing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/Heart.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Ramah untuk Keluarga & Pemula</h3>
                            <p>Qiraya sangat cocok bagi keluarga atau individu yang baru ingin memulai belajar mengaji, tanpa tuntutan latar belakang pendidikan agama tertentu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/Star.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Lingkungan Belajar yang Nyaman</h3>
                            <p>Qiraya menciptakan suasana belajar yang aman, positif, dan saling mendukung, sehingga peserta merasa nyaman dalam setiap proses pembelajaran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="zubuz-iconbox-wrap center">
                        <div class="zubuz-iconbox-icon">
                            <img src="assets/images/icon/tecno.svg" alt="">
                        </div>
                        <div class="zubuz-iconbox-data">
                            <h3>Nilai Islami & Teknologi Modern</h3>
                            <p>Qiraya memadukan nilai-nilai Islami dengan teknologi digital, menciptakan pengalaman belajar mengaji yang relevan dengan kebutuhan masa kini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3">
        <div class="container">
            <div class="problem-box">
                <h2 class="problem-title">Tentang Perusahaan</h2>

                <div class="problem-content">
                    <p>
                        Perusahaan kami berdedikasi untuk mendemokratisasikan pendidikan agama agar bisa diakses oleh siapa saja, di mana saja. Platform kami bukan sekadar menyediakan video rekaman, <span class="text-highlight">tapi interaksi langsung dengan ustadz/ustadzah pilihan</span> yang telah dikurasi ketat secara kualitas dan cara mengajar.
                    </p>

                    <p>
                        Kami bertindak sebagai kurator yang menghubungkan guru-guru ngaji bersertifikat dengan para pembelajar yang membutuhkan bimbingan intensif. Dengan fokus pada kenyamanan dan kualitas, Qiraya membangun ekosistem di mana setiap orang, dari anak-anak hingga lansia, merasa didampingi secara personal dalam perjalanan mereka mencintai Al-Qur'an.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section zubuz-section-padding3 pt-0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="partner-section-title">Mitra Kami</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="partner-card">
                        <img src="assets/images/logo/ipm.svg" alt="Ikatan Pelajar Muhammadiyah">
                        <p class="partner-name">Ikatan Pelajar Muhammadiyah</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="partner-card">
                        <img src="assets/images/logo/ski.svg" alt="Sentral Kerohanian Islam">
                        <p class="partner-name">Sentral Kerohanian Islam<br>Unit Telkom University Purwokerto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection