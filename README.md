# LP11DPBO2024C2
## Janji
Saya ilham akbar NIM [2201017] mengerjakan Latihan Praktikum 11 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program
### Model
Bagian ini berisi kelas-kelas yang berinteraksi langsung dengan database dan mengelola data.

- `DB.class.php`: Kelas ini mungkin berisi fungsi-fungsi untuk koneksi dan operasi database. Namun, detailnya tidak disertakan dalam kode yang Anda berikan.
- `Pasien.class.php`: Kelas ini mendefinisikan struktur data untuk Pasien, dengan properti seperti id, nik, nama, tempat, tl, gender, email, dan telp. Kelas ini juga memiliki metode setter dan getter untuk properti tersebut.
- `TabelPasien.class.php`: Kelas ini mewarisi kelas DB dan berisi metode untuk operasi database yang spesifik untuk data pasien, seperti mendapatkan semua pasien, mendapatkan pasien berdasarkan id, menambahkan pasien baru, mengedit data pasien, dan menghapus pasien.

### View
Bagian ini berisi kelas-kelas yang bertanggung jawab untuk menampilkan data ke pengguna dan menerima input dari pengguna.

- `KontrakView.php`: Ini adalah interface yang mendefinisikan metode yang harus diimplementasikan oleh kelas View. Metode ini mencakup tampil, tambah, update, actionadd, actionupdate, dan actiondelete.
- `TampilPasien.php`: Kelas ini mengimplementasikan interface KontrakView. Kelas ini bertanggung jawab untuk menampilkan data ke pengguna dan menerima input dari pengguna. Kelas ini berinteraksi dengan Presenter (ProsesPasien) untuk memproses data.

### Presenter
Bagian ini berisi kelas-kelas yang bertanggung jawab untuk mengendalikan alur program dan berfungsi sebagai perantara antara Model dan View.

- `KontrakPresenter.php`: Interface ini mendefinisikan metode yang harus diimplementasikan oleh kelas Presenter yang mengendalikan alur program terkait data pasien.
- `ProsesPasien.php`: Kelas ini mengimplementasikan interface `KontrakPresenter` dan mungkin berisi logika untuk memproses data pasien sebelum ditampilkan atau setelah disubmit oleh pengguna.

## Alur Program
1. Pengguna berinteraksi dengan View (misalnya, mengisi form untuk menambahkan pasien baru atau memilih pasien untuk diupdate atau dihapus).
2. View mengambil input pengguna dan mengirimkannya ke Presenter. Misalnya, jika pengguna menambahkan pasien baru, metode actionadd akan dipanggil dengan data pasien baru sebagai parameter. Jika pengguna memilih untuk mengupdate atau menghapus pasien, metode actionupdate atau actiondelete akan dipanggil dengan id pasien sebagai parameter.
3. Presenter memproses data ini. Ini bisa melibatkan membaca dari atau menulis ke Model. Misalnya, jika pengguna menambahkan pasien baru, Presenter akan memanggil metode addPasien pada Model dengan data pasien baru sebagai parameter. Jika pengguna memilih untuk mengupdate atau menghapus pasien, Presenter akan memanggil metode editPasien atau deletePasien pada Model dengan id pasien sebagai parameter.
4. Jika Presenter membaca data dari Model (misalnya, mendapatkan daftar semua pasien), setelah mendapatkan data dari Model, Presenter akan mengirim data ini kembali ke View.
5. View kemudian memperbarui tampilannya berdasarkan data yang diterima dari Presenter. Misalnya, metode tampil akan menampilkan daftar semua pasien, dan metode tambah dan update akan menampilkan form untuk menambahkan atau mengupdate pasien.

## dokumentasi
### show
![Screenshot (777)](https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/9e7a7347-7368-43f2-be46-69c9fce739ab)
### add
![Screenshot (778)](https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/5226d1f2-1985-41ae-b9d6-15219e8b1fd5)
![Screenshot (779)](https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/3629751f-37a4-40b6-9bc2-ea95aebcb41c)
### update
![Screenshot (780)](https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/36e79a4b-d9ca-4725-b18c-8f1d6abce482)
![Screenshot (776)](https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/d3668b3a-764b-4025-a9be-25323d3f4bc2)

### video preview
https://github.com/Ilham9675/LP11DPBO2024C2/assets/117561201/1e8ebea4-b428-47ca-b1b5-75e9e4e209a4