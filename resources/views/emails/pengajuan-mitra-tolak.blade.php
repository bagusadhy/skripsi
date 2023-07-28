@component('mail::message')
# Hai {{ $nama_siswa }},

Setelah melalui beberap pertimbangan dan diskusi, pengajuan mitra kamu ditolak. Berikut adalah detail pengajuan mitra kamu:

- **<pre>Nama Perusahaan : {{ $nama_perusahaan }}</pre>**
- **<pre>Kontak          : {{ $kontak }}</pre>**
- **<pre>Alamat          : {{ $alamat }}</pre>**

Kamu dapat melakukan pengajuan mitra kembali dengan mengisi form pengajuan mitra pada website PKL SMKN 2 Malang.
Atau dapat mendaftar pada lowongan PKL yang telah tersedia!

Terima kasih telah menjadi bagian dari PKL SMKN 2 Malang!
Salam hangat,
SMKN 2 Malang
@endcomponent
