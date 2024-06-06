# AskMeFit
AskMeFit adalah aplikasi web sederhana yang berguna bagi pengguna untuk menghitung Body Mass Index mereka berdasarkan berat dan tinggi. Sistem ini dibangun menggunakan framework Laravel dan Tailwind CSS. Sistem ini memiliki dua peran: Pengguna, dan Admin. Setiap peran memiliki fungsionalitas spesifik yang disesuaikan dengan kebutuhan mereka.

## Fitur

### Peran Pengguna
- *Menghitung Body Mass Index (BMI)*:Pengguna dapat memasukkan tinggi badan dan berat badan mereka untuk menghitung BMI.
- *Mengikuti Program Workout*: Pengguna dapat memilih dan mengikuti program workout yang sesuai dengan tujuan mereka, seperti menurunkan berat badan,
- *Mengikuti Instruksi Makanan Sehat*: Pengguna dapat menerima rekomendasi makanan sehat yang sesuai dengan tujuan kesehatan mereka, seperti diet rendah kalori, dan tinggi protein.
- *Memberikan Feedback*: Pengguna dapat memberikan feedback mengenai pengalaman mereka menggunakan aplikasi

### Peran Admin
- *Manajemen Akun*: Admin dapat melihat dan mengelola akun pengguna.
- *Manajemen Feedback*: Admin dapat melihat daftar-daftar feedback dari pengguna

## Instalasi

Untuk menginstal dan menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

1. *Clone repositori*:
   bash
   git clone https://github.com/hafidzzuliesky/askmefit.git
   cd askmefit
   

2. *Instal dependensi*:
   bash
   composer install
   npm install
   

3. *Salin file environment contoh dan konfigurasikan variabel lingkungan Anda*:
   bash
   cp .env.example .env
   

4. *Generate kunci aplikasi*:
   bash
   php artisan key:generate
   

5. *Jalankan migrasi database*:
   bash
   php artisan migrate
   

6. *Seed database (opsional)*:
   bash
   php artisan db:seed
   
7. *Import database dari file bmi.sql (opsional)*:
   bash
   -buka phpmyadmin
   -import file bmi.sql
   

8. *Kompilasi aset*:
   bash
   npm run dev
   

9. *Mulai server pengembangan lokal*:
   bash
   php artisan serve
   

## Penggunaan

Setelah menyelesaikan langkah-langkah instalasi, Anda dapat mengakses aplikasi di http://localhost:8000. Bergantung pada peran yang diberikan kepada akun Anda, Anda akan memiliki akses ke fungsionalitas yang berbeda seperti yang dijelaskan di atas.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repositori.
2. Buat branch baru (git checkout -b fitur/FiturAnda).
3. Commit perubahan Anda (git commit -am 'Tambahkan fitur baru').
4. Push ke branch (git push origin fitur/FiturAnda).
5. Buat Pull Request baru.

## Team members:
1. Akhsania Maisa Rahmah 2208107010017
2. Muhammad Hafidz Zuliesky 2108107010045


## Kontak

Untuk pertanyaan atau saran, silakan hubungi saya di [akhsania@mhs.usk.ac.id] atau rekan saya [hafidz1@mhs.usk.ac.id].

---

README ini memberikan gambaran umum tentang aplikasi AskMeFit, dan detail tentang cara menggunakan dan berkontribusi pada proyek ini. Jika Anda memiliki pertanyaan tambahan atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi saya.
