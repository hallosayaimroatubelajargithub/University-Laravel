# Dokumentasi CRUD API `University`
## Introduction
Selamat datang di Dokumentasi API `University`. Tujuan pembuatan Dokumentasi API ini adalah, untuk menyediakan akses kepada Admin dan User agar dapat menggunakan API untuk mengakses dan memperoleh informasi data-data pada `University`.

## API Request Methods
| Role    |  Request Methods  |
| ------------- |:--------------|
|admin| GET, POST, PUT, DEL |
|user| GET |


## API Protocol
`HTTP`

## API Response
| Parameters    |  Description  |
| ------------- |:--------------|
|status| `ok` Jika data berhasil di-push. `error` Jika data tidak berhasil di-push|
|message| Pesan response dari server|
#### Examples :
- `status: ok`
```json
{
    "status": ok,
    "message": "Berhasil"
}
```

- `status: error`
```json
{
    "status": error,
    "message": "Gagal"
}
```

## API Request Parameters
### 1. User
#### HTTP Request 
- `GET List All Mahasiswa` 
```json
PATCH http://127.0.0.1:8000/students
```
```json
{
    "id_mhs": 1,
    "nama_mhs": "Wulan Nur Afifah",
    "nim_mhs": 2001530001,
    "jk": "P",
    "ttl": "Pemalang, 18-10-2002",
    "agama": "Islam",
    "alamat": "Pemalang",
    "fak": "FTII",
    "prodi": "TI",
    "smstr": 5
},
{
    "id_mhs": 2,
    "nama_mhs": "Imroatu Solicah",
    "nim_mhs": 2001530002,
    "jk": "P",
    "ttl": "Semarang, 25-06-2002",
    "agama": "Islam",
    "alamat": "Semarang",
    "fak": "FTII",
    "prodi": "TI",
    "smstr": 5
}
```
- `GET BY ID`
```json
PATCH http://127.0.0.1:8000/students/2
```
```json
{
    "id_mhs": 2,
    "nama_mhs": "Imroatu Solicah",
    "nim_mhs": 2001530002,
    "jk": "P",
    "ttl": "Semarang, 25-06-2002",
    "agama": "Islam",
    "alamat": "Semarang",
    "fak": "FTII",
    "prodi": "TI",
    "smstr": 5
}
```
### 2. Admin
#### HTTP Request 
- `GET List All Pegawai` 
```json
PATCH http://127.0.0.1:8000/adpegas
```
```json
{
    "id_pegawai": 1,
    "nama_pegawai": "Susanto",
    "jk": "L",
    "jabatan": "BAAK"
},
{
    "id_pegawai": 2,
    "nama_pegawai": "Sutinem",
    "jk": "P",
    "jabatan": "KEU"
}
```
- `GET BY ID`
```json
PATCH http://127.0.0.1:8000/adpegas/2
```
```json
{
    "id_pegawai": 2,
    "nama_pegawai": "Sutinem",
    "jk": "P",
    "jabatan": "KEU"
}
```

- `POST`
```json
PATCH http://127.0.0.1:8000/adpegas/3
```
Body
```json
{
    "id_pegawai": 3,
    "nama_pegawai": "Susi",
    "jk": "P",
    "jabatan": "KEU"
}
```
Response
```json
{
    "status": ok,
    "message": "Berhasil"
}
```

- `PUT`
```json
PATCH http://127.0.0.1:8000/adpegas/3
```
Body
```json
{
    "id_pegawai": 3,
    "nama_pegawai": "Susi",
    "jk": "P",
    "jabatan": "BAAK"
}
```
Response
```json
{
    "status": ok,
    "message": "Berhasil"
}
```

- `DELL`
```json
PATCH http://127.0.0.1:8000/adpegas/3
```
Body
```json
{
    "id_pegawai": 3,
    "nama_pegawai": "Susi",
    "jk": "P",
    "jabatan": "BAAK"
}
```
Response
```json
{
    "status": ok,
    "message": "Berhasil"
}
```

## Database
`Table Mahasiswa`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_mhs| int (30) | AUTO_INCREMENT |
|nama_mhs| varchar (50) |
|nim_mhs| int (50) |
|jk| enum ('L', 'P') |
|ttl | date |
|agama| enum ('Islam', 'Kristen', 'Katolik', 'Budha', 'Hindu') |
|alamat| longtext |
|fak| varchar (50) |
|prodi| varchar (50) |
|smstr| number |


`Table Pegawai`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_pegawai| int (30) | AUTO_INCREMENT |
|nama_pegawai| varchar (50) |
|jk| enum ('L', 'P') |
|jabatan| enum ('BAAK', 'KEU') |


`Table Dosen`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_dosen| int (30) | AUTO_INCREMENT |
|nama_dosen| varchar (50) |
|dosen_matkul| varchar (50) |
|jk| enum ('L', 'P') |
|status| enum ('active', 'inactive') |
|id_mhs| 


`Table Fakultas`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_fak| int (30) | AUTO_INCREMENT |
|nama_fak| varchar (50) |
|dekan| varchar (50) |
|id_prodi| 


`Table Program Studi`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_prodi | int (30) | AUTO_INCREMENT |
|nama_prodi| varchar (50) |
|id_fak| 


`Table Mata Kuliah`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_matkul | int (30) | AUTO_INCREMENT |
|nama_matkul| varchar (50) |
|sks| number |
|hari| varchar (50) |
|pukul| varchar (50) |
|ruang| varchar (50) |


`Table Semester`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------|
|id_smstr | int (30) | AUTO_INCREMENT |
|smstr| number |
|id_mhs| 


`Table KPS dan KRS`
| Name    |  Jenis  |
| ------------- |:--------------| 
|id_mhs | int (30) | 
|id_matkul | int (30) | 
|nama_matkul| varchar (50) |
|sks| number |
|id_dosen | int (30) | 
|hari| varchar (50) |
|pukul| varchar (50) |
|kelas| varchar (50) |
|id_ruang | int (30) | 


`Table KHS`
| Name    |  Jenis  | 
| ------------- |:--------------| 
|id_mhs | int (30) | 
|id_matkul | int (30) |
|nama_matkul| varchar (50) |
|sks| number |
|grade_huruf| varchar (10) |
|grade_angka| number |
|ipk| float |


`Table Ruang`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------| 
|id_ruang | int (30) | AUTO_INCREMENT |
|id_gedung | int (30) | 
|penanggung_jawab| varchar (50) |


`Table Gedung`
| Name    |  Jenis  | Type  |
| ------------- |:--------------| :--------------| 
|id_gedung | int (30) | AUTO_INCREMENT |
|nama_gedung | varchar (30) | 
