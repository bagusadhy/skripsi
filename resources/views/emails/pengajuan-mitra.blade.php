@component('mail::message')
# Hai {{ $nama_siswa }},

Selamat pengajuan mitra kamu diterima. Berikut adalah detail pengajuan mitra kamu:

- **<pre>Nama Perusahaan : {{ $nama_perusahaan }}</pre>**
- **<pre>Kontak          : {{ $kontak }}</pre>**
- **<pre>Alamat          : {{ $alamat }}</pre>**

Selanjutnya,lakukan pendaftaran pada lowongan PKL yang dibuat oleh mitra yang telah kamu ajukan.

Terima kasih telah menjadi bagian dari PKL SMKN 2 Malang!
Salam hangat,
SMKN 2 Malang
@endcomponent
