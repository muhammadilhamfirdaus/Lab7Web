## Nama           : M Ilham Firdaus

## Kelas          : TI.23.C1

## NIM            : 312310021

## Mata Kuliah    : Pemrograman Web 2

## Dosen Pengampu : Agung Nugroho, S.Kom., M.Kom

## Universitas    : Universitas Pelita Bangsa


## Hasil Praktikum 1: PHP Framework (Codeigniter)
![xampp](img/xampp.png)

![xampp](img/intl.png)

![xampp](img/1.png)

![xampp](img/2.png)

![xampp](img/3.png)

![xampp](img/4.png)

![xampp](img/5.png)

![xampp](img/6.png)

![xampp](img/7.png)

![xampp](img/8.png)

## Praktikum 2: Framework Lanjutan (CRUD)

![xampp](img/9.png)

![xampp](img/10.png)

![xampp](img/11.png)

![xampp](img/12.png)

![xampp](img/13.png)

![xampp](img/14.png)

![xampp](img/15.png)

## Praktikum 3: View Layout dan View Cell

![xampp](img/16.png)

Penjelasan

1. Manfaat View Layout: memudahkan pembuatan tampilan konsisten dan DRY (Don't Repeat Yourself).

2. Perbedaan View Cell vs View biasa:

  - View Biasa: hanya digunakan langsung di controller.

  - View Cell: bisa digunakan berulang kali seperti komponen/modul.

3. Modifikasi View Cell untuk hanya menampilkan post dengan kategori tertentu.

## Praktikum 4: Login System (Modul Login - CodeIgniter 4)

### 🔧 Langkah-Langkah:

#### 1. Membuat Tabel `user` di Database
Saya membuat tabel `user` dengan struktur: `id`, `username`, `useremail`, `userpassword`.

**Screenshot:**
![db_user](img/db_user.png)

#### 2. Membuat Model `UserModel.php`
Model dibuat untuk menangani data login di `app/Models/UserModel.php`.



#### 3. Membuat Controller `User.php`
Berisi method `login()`, `logout()`, dan `index()` untuk login system.

**Screenshot:**
![controller](img/user_controller.png)

#### 4. Membuat View `login.php`
Form login dibuat lebih menarik menggunakan Bootstrap.

**Screenshot:**
![login_view](img/login_view.png)

#### 5. Membuat Seeder `UserSeeder.php`
Seeder dibuat untuk mengisi data user admin menggunakan:
`bash
php spark db:seed UserSeeder 

#### 6. Membuat Filter Auth.php

Digunakan untuk melindungi halaman admin dari akses tanpa login.


#### 7. Konfigurasi Routing
Menambahkan route untuk login, logout, dan halaman admin yang dilindungi oleh filter auth.

Screenshot:

#### 8. Uji Login, Logout, dan Proteksi Admin
Login berhasil akan diarahkan ke halaman admin.

Logout akan menghapus session dan kembali ke login.

Akses langsung ke /admin/artikel akan diarahkan ke /user/login jika belum login.

## Praktikum 5: Pagination dan Pencarian

### 1. Pagination
Saya mengedit controller Artikel untuk menampilkan daftar artikel menggunakan paginate(3) dan menampilkan pagination links di view.

**Screenshot:**
![pagination](img/pagination.png)

### 2. Pencarian
Saya menambahkan fitur pencarian dengan query `q`, melakukan filter `like('judul', $q)` dan menyesuaikan tampilan form di view.

**Screenshot:**
![search](img/search.png)

### 3. Uji Coba
- Pagination muncul saat data lebih dari 3.
- Pencarian berhasil menampilkan data yang relevan.

**Screenshot:**
![hasil](img/hasil-cari.png)



## Praktikum 6: Upload File Gambar
- Menambahkan input file `gambar` di form `artikel/form_add.php`
- Menyesuaikan tag `<form>` dengan `enctype="multipart/form-data"`
- Mengupdate method `add()` pada `Artikel.php` untuk menyimpan file gambar ke folder `public/gambar`
- Menyimpan nama file gambar ke database

tambah artikel

![hasil](img/upload.png)

gambar masuk ke database

![hasil](img/databaseupload.png)


# Praktikum 7 - Relasi Tabel dan Query Builder

## Deskripsi
Modul ini membahas cara menghubungkan tabel artikel dan kategori menggunakan relasi One-to-Many di CodeIgniter 4, serta memanfaatkan Query Builder.

## Fitur
- Relasi One-to-Many antara artikel dan kategori.
- Tambah/Edit/Hapus artikel dengan pemilihan kategori.
- Tampilan daftar artikel dengan kategori.
- Filter dan pencarian artikel berdasarkan kategori.

## Screenshots
### Tampilan Daftar Artikel (Admin)
![admin_index](img/admin_index.png)

### Tambah Artikel
![form_add](img/form_add.png)

### Edit Artikel
![form_edit](img/form_edit.png)

### Tampilan Artikel di Halaman Depan
![index](img/index.png)

## Langkah Pengerjaan
1. Membuat tabel `kategori`
2. Menambahkan foreign key di tabel `artikel`
3. Membuat `KategoriModel`
4. Modifikasi `ArtikelModel` dan `Artikel Controller`
5. Modifikasi semua view
6. Testing fungsi: tambah, edit, hapus, filter artikel


# Praktikum 8 - AJAX dengan CodeIgniter 4

Modul ini membahas penggunaan AJAX untuk menampilkan dan menghapus data artikel tanpa reload halaman.

## 🚀 Fitur
- Menampilkan daftar artikel menggunakan AJAX
- Menghapus data artikel tanpa reload
- Mengedit data artikel tanpa reload
- Menggunakan jQuery sebagai library
- Menambahkan data artikel tanpa reload

## 📁 Struktur
- Controller: `AjaxController`
- View: `app/Views/ajax/index.php`
- Model: `ArtikelModel`
- jQuery: `public/assets/js/jquery-3.6.0.min.js`

## 📸 Screenshot
### Tabel Data Artikel
![screenshot](img/ajax_table.png)

### Tombol Delete AJAX
![screenshot](img/delete_ajax.png)

### Tombol Edit AJAX
![screenshot](img/edit.png)

### Tombol +Tambah Artikel AJAX
![screenshot](img/+TambahArtikel.png)