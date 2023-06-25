# Binary01-Team

![Logo Binary 01](https://github.com/Farel-Putra-Albana/Binary01-Team/assets/118239709/a89fb0d7-d0e6-40b1-bba0-8eea0bde7f6e)

# Deskripsi Tugas
"Binary 01 Express" merupakan tugas akhir dari mata kuliah Analisis dan Desain Berbasis Objek dan Sistem Keamanan. Kami merancang aplikasi berbasis website dengan judul  "Aplikasi Pengiriman Barang berbasis Website dengan metode keamanan WEB Application Firewall dan Protokol SSL"

# Deskripsi Aplikasi
Binary 01 Express merupakan sebuah platform yang dirancang untuk memudahkan proses pengiriman barang dari pengirim kepada penerima. Aplikasi ini memiliki empat jenis pengguna, yaitu Admin, Kurir, Pengirim, dan Penerima, masing-masing dengan tampilan dan fitur yang berbeda.

1. Tampilan Login:
    - Admin dan Kurir memasukkan username dan password mereka untuk masuk ke dalam aplikasi.
    - Pengirim dan Penerima langsung dialihkan ke tampilan Dashboard.
      
2. Tampilan Dashboard (untuk Pengirim dan Penerima):
    - Menu Lacak Kiriman: Pengirim atau Penerima memasukkan nomor resi untuk melacak status pengiriman.
    - Informasi yang ditampilkan: No_Resi, Nama_Pengirim, Asal_kiriman, Tujuan_Barang, Status_Perjalanan, Waktu_Pengiriman, Biaya_Pengiriman.

3. Tampilan Menu Admin:
   - Setelah Admin berhasil login, dia akan melihat tampilan berikut:
   - Informasi yang ditampilkan: Username admin, Dashboard, Data Barang, Status_Perjalanan, Data Kurir.
  
4. Tampilan Data Barang (untuk Admin):
   - Admin dapat melihat data barang yang telah terdaftar dalam sistem.
   - Informasi yang ditampilkan: No_Resi, Nama_pengirim, Nama_Penerima,  Asal_Kiriman, Tujuan_Pengiriman, Tanggal_Pengiriman, Estimasi_Pengiriman, Tanggal_Penerimaan_Kiriman, Biaya.
  
5. Tampilan History Barang (untuk Admin):
   - Admin dapat mencari status perjalanan suatu barang berdasarkan entitas pencarian.
   - Informasi yang ditampilkan: Status_Perjalanan barang yang dicari

6. Tampilan Data Kurir (untuk Admin):
   - Admin dapat melihat data kurir yang terdaftar dalam sistem.
   - Informasi yang ditampilkan: Nama_kurir, Nomor_Telepon, Plat_Nomor, dan informasi tambahan jika ada.

7. Tampilan Kurir:
   - Kurir melihat alamat Tujuan_Barang yang akan dikirim.
   - Kurir memberikan status apakah barang sudah sampai atau belum.

# Tujuan Aplikasi
Aplikasi ini bertujuan untuk meningkatkan efisiensi dalam proses pengiriman barang. Admin dapat mengelola data barang dan data kurir, sementara Kurir dapat melihat alamat tujuan dan memberikan status pengiriman. Pengirim dan Penerima dapat melacak status pengiriman barang dengan mudah melalui nomor resi. Dengan adanya aplikasi ini, diharapkan proses pengiriman barang menjadi lebih terorganisir dan terpantau dengan baik.
