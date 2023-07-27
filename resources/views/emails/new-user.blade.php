@component('mail::message')
# Hai {{ $nama }},

Anda telah didaftarkan sebagai **{{ $role }}** pada website PKL SMKN 2 Malang.

Berikut adalah beberapa detail penting tentang akun Anda:

- **Email:** {{ $email }}
- **Password:** {{ $password }}

Terima kasih telah menjadi bagian dari PKL SMKN 2 Malang!

Salam hangat,
SMKN 2 Malang
@endcomponent
