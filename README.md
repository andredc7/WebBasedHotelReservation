# WebBasedHotelReservation
Hotel Room Reservation System (Web-Based)

A web-based hotel room reservation system built using PHP and MySQL.
This system allows hotel staff or users to manage room availability, register accounts, create reservations, update bookings, and handle guest information in a simple and structured interface.

This project was developed as part of a final thesis at the Faculty of Computer Science, Soegijapranata Catholic University.

Features
1. User Registration (Sign Up)

Users can create accounts by entering their personal information.
The system checks for duplicate usernames or emails before saving the data.

2. Login System

Users log in using their registered username or email and password.
Invalid credentials will trigger a notification message.

3. Room Management

Admins can add new room types and facilities.
A validation process prevents duplicate room entries.

4. Room Reservation

Guests can input personal details, select check-in and check-out dates, and choose their preferred room type.
The system checks room availability and alerts users if the selected date is fully booked.

5. Update & Reschedule

Existing reservations can be edited, including changes to guest data, dates, or room type.
Successful updates will display a confirmation message.

6. Delete Reservation

Reservations can be canceled based on their ID.
After deletion, the system confirms that the reservation has been removed.

System Output
Room Types Example

Standard Room

Superior Room

Deluxe Room

Twin Room

Single Room

Each room includes facilities such as AC, WiFi, TV, toiletries, mineral water, and additional amenities depending on the room type.

Guest Reservation Data

The system stores guest names, phone numbers, addresses, emails, check-in/out dates, and selected room types.
This information helps staff monitor room usage and reservation schedules.

Technology Stack
1. Component	Technology
2. Frontend	HTML, CSS
3. Backend	PHP
4. Database	MySQL
5. Server	Localhost / XAMPP
6. Additional	Basic Authentication & Form Validation

How to Run

1. Clone or download the repository
2. Move the folder into htdocs (XAMPP)
3. Import the MySQL database (dbhotel)
4. Start Apache & MySQL
5. Open the project in the browser:
http://localhost/hotel-reservation-system/

How to Run

Clone or download the repository

Move the folder into htdocs (XAMPP)

Import the MySQL database (dbhotel)

Start Apache & MySQL

Open the project in the browser:
localhost/andredc/

**Implementation and Results**

5.1 Implementation

Pada tahap ini, proses implementasi sistem reservasi kamar hotel dilakukan menggunakan bahasa pemrograman PHP serta database MySQL yang dijalankan pada lingkungan lokal (localhost). Pengujian dilakukan pada beberapa fungsi utama yang meliputi pembuatan akun, proses masuk, pengelolaan informasi kamar, pengisian form pemesanan, pembaruan jadwal reservasi, hingga penghapusan data pemesanan.

5.1.1 Sign Up

<img width="445" height="158" alt="image" src="https://github.com/user-attachments/assets/c7472ad4-b3e4-447c-b217-8eb1b2728d32" />

Fitur Sign Up digunakan untuk membuat akun baru. Pengguna mengisi data seperti nama, username, nomor telepon, alamat, email, dan password.
Sistem juga melakukan validasi apakah username atau email sudah terdaftar sebelumnya. Jika lolos validasi, data akan disimpan ke database.

5.1.2 Login 

<img width="390" height="185" alt="image" src="https://github.com/user-attachments/assets/d5b80b07-82bd-4cee-9331-ebfc0db8866a" />

Fitur Login berfungsi untuk memverifikasi pengguna yang ingin mengakses sistem menggunakan username atau email beserta password yang telah dibuat sebelumnya.
Apabila kombinasi data tidak cocok atau belum terdaftar, sistem akan menampilkan pesan kesalahan. Sebaliknya, jika valid, pengguna akan diarahkan menuju halaman Home.

<img width="410" height="194" alt="image" src="https://github.com/user-attachments/assets/ace4816d-72a1-4837-a348-dba763088c8d" />

5.1.3 Make a Data Room 

<img width="412" height="195" alt="image" src="https://github.com/user-attachments/assets/be784a8d-bd6c-4c19-a092-cae36806191f" />

Menu ini digunakan untuk menambahkan jenis kamar dan fasilitas masing-masing.
Sebelum data baru dimasukkan, sistem melakukan pengecekan apakah tipe kamar dengan fasilitas yang sama sudah tercatat. Jika sudah ada, sistem akan memberikan notifikasi bahwa data tersebut telah digunakan.

5.1.4 Reservation 

<img width="408" height="194" alt="image" src="https://github.com/user-attachments/assets/c897a229-3de9-4e23-a9e7-aaa500ff1119" />

Formulir reservasi digunakan untuk menginput informasi tamu, yaitu nama, nomor telepon, alamat, email, tanggal check-in, tanggal check-out, serta pilihan jenis kamar.
Sistem kemudian memverifikasi apakah kamar pada tanggal tertentu masih tersedia. Jika kamar sudah terisi penuh pada rentang tanggal tersebut, pengguna akan diberi pesan peringatan bahwa kamar tidak bisa dipesan.

5.1.5 Update and Reschedule

Melalui fitur ini, tamu dapat melakukan perubahan data reservasi, termasuk mengganti tanggal menginap, memperbarui informasi diri, atau memilih tipe kamar yang berbeda.
Jika proses perubahan berhasil, sistem akan menampilkan pemberitahuan bahwa reschedule telah sukses dilakukan.

5.1.6 Delete

Fitur Delete digunakan untuk membatalkan pemesanan berdasarkan ID reservasi tertentu.
Setelah proses penghapusan selesai, sistem menampilkan pesan bahwa data pemesanan telah berhasil dibatalkan.

5.2 Results
5.2.1 Data Room Type
No	Room Type	Facilities
1	Standard Room	AC, TV, Wifi, Toiletries, Free Mineral Water, 1 Big Bed
2	Superior Room	AC, TV, Wifi, Toiletries, Free Mineral Water, 2 Big Beds
3	Deluxe Room	AC, TV, Wifi, Toiletries, Free Mineral Water, Free Tea/Coffee, Refrigerator, 1 Big Bed
4	Twin Room	AC, TV, Wifi, Toiletries, Free Mineral Water, 2 Separate Beds
5	Single Room	AC, TV, Wifi, Toiletries, Free Mineral Water, Single Bed

Tabel ini menunjukkan daftar jenis kamar yang dapat dipesan oleh tamu.

5.2.2 Guest Reservation Data
Name	Phone Number	Address	Email	Check-In	Check-Out	Room Type
Andre	085740753047	Semarang	...	2022-12-27	2022-12-30	Standard Room
Oka	081229187778	Solo	...	2022-12-30	2023-01-01	Superior Room
Gerry	082136830415	Ungaran	...	2022-12-31	2023-01-03	Deluxe Room
Marchelino	08893311606	Jepara	...	2023-01-04	2023-01-04	Twin Room
Devi	085870550021	Ambarawa	...	2022-12-29	2023-01-02	Single Room

Data ini merupakan hasil akhir dari proses reservasi yang sudah dilakukan oleh tamu hotel.

5.2.3 Interface Results

Beberapa tampilan utama yang dihasilkan sistem:

Sign Up Page – digunakan untuk mendaftar akun baru

Login Page – akses masuk pengguna

Home Page – berisi informasi singkat dan navigasi menu

Room Management – menambahkan tipe kamar dan fasilitas

Reservation Form – formulir pemesanan kamar oleh tamu

Setiap halaman telah diuji dan berjalan sesuai fungsinya.
