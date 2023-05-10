-- soal 3.1
-----------------------------------------------------------------------------------------------------
-- 1.	Tampilkan produk yang asset nya diatas 20jt
SELECT * FROM produk WHERE harga_beli * stok > 20000000;
-- +----+------+--------+------------+------------+------+----------+-----------------+
-- | id | kode | nama   | harga_beli | harga_jual | stok | min_stok | jenis_produk_id |
-- +----+------+--------+------------+------------+------+----------+-----------------+
-- |  3 | 1113 | Kulkas |    4000000 |    5000000 |   10 |        3 |               1 |
-- +----+------+--------+------------+------------+------+----------+-----------------+
-- 2.	Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT *, SUM(stok - min_stok) as selisih from produk;
-- +------+------+------+------------+------------+------+----------+-----------------+---------+
-- | id   | kode | nama | harga_beli | harga_jual | stok | min_stok | jenis_produk_id | selisih |
-- +------+------+------+------------+------------+------+----------+-----------------+---------+
-- |    1 | 1111 | TV   |    3000000 |    4000000 |    3 |        2 |               1 |      10 |
-- +------+------+------+------------+------------+------+----------+-----------------+---------+
-- 3.	Tampilkan total asset produk secara keseluruhan
SELECT sum(stok) as total_asset from produk;
-- +-------------+
-- | total_asset |
-- +-------------+
-- |          32 |
-- +-------------+
-- 4.	Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004;
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email             | alamat  | kartu_id |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- | 11 | 011103 | Sekar          | P    | Kediri    | 2001-09-08 | sekar@gmail.com   | Kediri  |        1 |
-- | 13 | 011105 | Pradana        | L    | Jakarta   | 2001-08-01 | pradana@gmail.com | Jakarta |        2 |
-- | 14 | 011106 | Gayatri        | P    | Jakarta   | 2002-09-01 | gayatri@gmail.com | Jakarta |        1 |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- 5.	Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
-- +----+--------+----------------+------+------------+------------+------------------+------------+----------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email            | alamat     | kartu_id |
-- +----+--------+----------------+------+------------+------------+------------------+------------+----------+
-- | 10 | 011102 | Pandan Wangi   | L    | Yogyakarta | 1998-08-07 | pandan@gmail.com | Yogyakarta |        2 |
-- +----+--------+----------------+------+------------+------------+------------------+------------+----------+
-- 6.	Tampilkan data pelanggan yang berulang tahun bulan agustus
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir)=08;
-- +----+--------+----------------+------+------------+------------+-------------------+------------+----------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email             | alamat     | kartu_id |
-- +----+--------+----------------+------+------------+------------+-------------------+------------+----------+
-- | 10 | 011102 | Pandan Wangi   | L    | Yogyakarta | 1998-08-07 | pandan@gmail.com  | Yogyakarta |        2 |
-- | 13 | 011105 | Pradana        | L    | Jakarta    | 2001-08-01 | pradana@gmail.com | Jakarta    |        2 |
-- +----+--------+----------------+------+------------+------------+-------------------+------------+----------+
-- 7.	Tampilkan data pelanggan : nama, tmp_lahir, tgl_lahir dan umur (selisih tahun sekarang dikurang tahun kelahiran)
SELECT nama_pelanggan, tmp_lahir, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan;
-- +----------------+------------+------------+------+
-- | nama_pelanggan | tmp_lahir  | tgl_lahir  | umur |
-- +----------------+------------+------------+------+
-- | Agung          | Bandung    | 1997-09-06 |   26 |
-- | Pandan Wangi   | Yogyakarta | 1998-08-07 |   25 |
-- | Sekar          | Kediri     | 2001-09-08 |   22 |
-- | Suandi         | Jakarta    | 1997-09-08 |   26 |
-- | Pradana        | Jakarta    | 2001-08-01 |   22 |
-- | Gayatri        | Jakarta    | 2002-09-01 |   21 |
-- +----------------+------------+------------+------+

-- soal 3.2
-----------------------------------------------------------------------------------------------------
-- 1.	Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT COUNT(*) AS jumlah_pelanggan FROM pelanggan WHERE YEAR(tgl_lahir) = 1998;
-- +------------------+
-- | jumlah_pelanggan |
-- +------------------+
-- |                1 |
-- +------------------+
-- 2.	Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT COUNT(*) AS jumlah_pelanggan_perempuan FROM pelanggan WHERE jk="P" AND tmp_lahir = "Jakarta";
-- +----------------------------+
-- | jumlah_pelanggan_perempuan |
-- +----------------------------+
-- |                          1 |
-- +----------------------------+
-- 3.	Berapa jumlah total stok semua produk yang harga jualnya dibawah 10rb
SELECT SUM(stok) AS jumlah_total_stok FROM produk WHERE harga_jual < 10000;
-- +-------+
-- | total |
-- +-------+
-- |     1 |
-- +-------+
-- 4.	Ada berapa produk yang mempunyai kode awal K
SELECT COUNT(*) as total FROM produk WHERE kode LIKE 'K%';
-- +--------------+
-- | total_produk |
-- +--------------+
-- |            1 |
-- +--------------+
-- 5.	Berapa harga jual rata-rata produk yang diatas 1jt
SELECT AVG(harga_jual) AS rata2 FROM produk WHERE harga_jual >= 1000000;
-- +---------+
-- | rata2   |
-- +---------+
-- | 3500000 |
-- +---------+
-- 6.	Tampilkan jumlah stok yang paling besar
SELECT *, MAX(stok) AS jumlah_stok FROM produk;
-- +------+-------+------+------------+------------+------+----------+-----------------+-------------+
-- | id   | kode  | nama | harga_beli | harga_jual | stok | min_stok | jenis_produk_id | jumlah_stok |
-- +------+-------+------+------------+------------+------+----------+-----------------+-------------+
-- |    1 | kl111 | TV   |    3000000 |    4000000 |    3 |        2 |               1 |          10 |
-- +------+-------+------+------------+------------+------+----------+-----------------+-------------+
-- 7.	Ada berapa produk yang stoknya kurang dari minimal stok
SELECT COUNT(*) as jumlah_stok FROM produk WHERE stok < min_stok;
-- +-------------+
-- | jumlah_stok |
-- +-------------+
-- |           1 |
-- +-------------+
-- 8.	Berapa total asset dari keseluruhan produk
SELECT SUM(harga_beli * stok) AS total_asset FROM produk;
-- +-------------+
-- | total_asset |
-- +-------------+
-- |    73018000 |
-- +-------------+

-- soal 3.3
-----------------------------------------------------------------------------------------------------
-- 1.	Tampilkan data produk : id, nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi 'segera belanja' jika tidak 'stok aman'.
SELECT id,nama,stok, CASE WHEN stok <= min_stok THEN 'segera belanja' ELSE 'stok aman' END as informasi FROM produk;
-- +----+------------+------+----------------+
-- | id | nama       | stok | informasi      |
-- +----+------------+------+----------------+
-- |  1 | TV         |    3 | stok aman      |
-- |  2 | TV 21 Inch |   10 | stok aman      |
-- |  3 | Kulkas     |   10 | stok aman      |
-- |  4 | Meja Makan |    4 | stok aman      |
-- |  5 | Taro       |    3 | stok aman      |
-- |  6 | Teh Kotak  |    2 | segera belanja |
-- +----+------------+------+----------------+
-- 2.	Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 -> 'muda' , 17-55 -> 'Dewasa', selainnya 'Tua'
SELECT  id, nama_pelanggan, YEAR(now()) - YEAR(tgl_lahir) as umur, CASE WHEN YEAR(now()) - YEAR(tgl_lahir) <= 17 THEN 'Muda' WHEN YEAR(now()) - YEAR(tgl_lahir) >= 17 AND YEAR(now()) - YEAR(tgl_lahir) <=55 THEN 'Dewasa' ELSE 'Tua' End kategori_umur FROM pelanggan;
-- +----+----------------+------+---------------+
-- | id | nama_pelanggan | umur | kategori_umur |
-- +----+----------------+------+---------------+
-- |  9 | Agung          |   26 | Dewasa        |
-- | 10 | Pandan Wangi   |   25 | Dewasa        |
-- | 11 | Sekar          |   22 | Dewasa        |
-- | 12 | Suandi         |   26 | Dewasa        |
-- | 13 | Pradana        |   22 | Dewasa        |
-- | 14 | Gayatri        |   21 | Dewasa        |
-- +----+----------------+------+---------------+

-- 3.	Tampilkan data produk: id, kode, nama, dan bonus untuk kode 'TV01' ->'DVD Player' , 'K001' -> 'Rice Cooker' selain dari diatas 'Tidak Ada'
 SELECT id, kode, nama, CASE WHEN kode = 'TV01' THEN 'DVD Player' WHEN kode = 'K001' THEN 'Rice Cooker' ELSE 'Tidak Ada' END AS bonus FROM produk;
--  +----+------+------------+-------------+
-- | id | kode | nama       | bonus       |
-- +----+------+------------+-------------+
-- |  1 | TV01 | TV         | DVD Player  |
-- |  2 | TV02 | TV 21 Inch | Tidak Ada   |
-- |  3 | K001 | Kulkas     | Rice Cooker |
-- |  4 | M001 | Meja Makan | Tidak Ada   |
-- |  5 | T001 | Taro       | Tidak Ada   |
-- |  6 | T002 | Teh Kotak  | Tidak Ada   |
-- +----+------+------------+-------------+

-- soal 3.4
-----------------------------------------------------------------------------------------------------
-- 1.	Tampilkan data statistik jumlah tempat lahir pelanggan
SELECT tmp_lahir, COUNT(*) AS statistik FROM pelanggan GROUP BY tmp_lahir;
-- +------------+-----------+
-- | tmp_lahir  | statistik |
-- +------------+-----------+
-- | Bandung    |         1 |
-- | Jakarta    |         3 |
-- | Kediri     |         1 |
-- | Yogyakarta |         1 |
-- +------------+-----------+
-- 2.	Tampilkan jumlah statistik produk berdasarkan jenis produk
SELECT jp.nama AS jenis_produk, COUNT(*) AS statistik FROM produk as p JOIN jenis_produk as jp ON p.jenis_produk_id = jp.id GROUP BY jp.id;
-- +--------------+-----------+
-- | jenis_produk | statistik |
-- +--------------+-----------+
-- | elektronik   |         3 |
-- | makanan      |         1 |
-- | minuman      |         1 |
-- | furniture    |         1 |
-- +--------------+-----------+
-- 3.	Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan
 SELECT * FROM pelanggan WHERE YEAR(now()) - YEAR(tgl_lahir) < (SELECT AVG(YEAR(now()) - YEAR(tgl_lahir)) FROM pelanggan);
--  +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email             | alamat  | kartu_id |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- | 11 | 011103 | Sekar          | P    | Kediri    | 2001-09-08 | sekar@gmail.com   | Kediri  |        1 |
-- | 13 | 011105 | Pradana        | L    | Jakarta   | 2001-08-01 | pradana@gmail.com | Jakarta |        2 |
-- | 14 | 011106 | Gayatri        | P    | Jakarta   | 2002-09-01 | gayatri@gmail.com | Jakarta |        1 |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+
-- 4.	Tampilkan data produk yang harganya diatas rata-rata harga produk
SELECT * FROM produk WHERE harga_jual >= (SELECT AVG(harga_jual) FROM produk);
-- +----+-------+------------+------------+------------+------+----------+-----------------+
-- | id | kode  | nama       | harga_beli | harga_jual | stok | min_stok | jenis_produk_id |
-- +----+-------+------------+------------+------------+------+----------+-----------------+
-- |  1 | kl111 | TV         |    3000000 |    4000000 |    3 |        2 |               1 |
-- |  2 | kl112 | TV 21 Inch |    2000000 |    3000000 |   10 |        3 |               1 |
-- |  3 | kl113 | Kulkas     |    4000000 |    5000000 |   10 |        3 |               1 |
-- +----+-------+------------+------------+------------+------+----------+-----------------+
-- 5.	Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb
SELECT p.*, k.iuran AS iuran FROM pelanggan AS p JOIN kartu AS k ON p.kartu_id = k.id WHERE k.iuran > 90000;
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email             | alamat  | kartu_id | iuran  |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
-- |  9 | 011101 | Agung          | L    | Bandung   | 1997-09-06 | agung@gmail.com   | Bandung |        1 | 150000 |
-- | 11 | 011103 | Sekar          | P    | Kediri    | 2001-09-08 | sekar@gmail.com   | Kediri  |        1 | 150000 |
-- | 12 | 011104 | Suandi         | L    | Jakarta   | 1997-09-08 | suandi@gmail.com  | Kediri  |        1 | 150000 |
-- | 14 | 011106 | Gayatri        | P    | Jakarta   | 2002-09-01 | gayatri@gmail.com | Jakarta |        1 | 150000 |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
-- 6.	Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan
SELECT * FROM produk WHERE harga_jual < (SELECT AVG(harga_jual) FROM produk);
-- +----+------+------------+------------+------------+------+----------+-----------------+
-- | id | kode | nama       | harga_beli | harga_jual | stok | min_stok | jenis_produk_id |
-- +----+------+------------+------------+------------+------+----------+-----------------+
-- |  4 | M001 | Meja Makan |    1000000 |    2000000 |    4 |        2 |               4 |
-- |  5 | T001 | Taro       |       4000 |       5000 |    3 |        2 |               2 |
-- |  6 | T002 | Teh Kotak  |       3000 |       4000 |    2 |       10 |               3 |
-- +----+------+------------+------------+------------+------+----------+-----------------+
-- 7.	Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3%
SELECT p.*, k.diskon AS diskon FROM pelanggan AS p JOIN kartu AS k ON p.kartu_id = k.id WHERE k.diskon > 3;
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
-- | id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email             | alamat  | kartu_id | diskon |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
-- |  9 | 011101 | Agung          | L    | Bandung   | 1997-09-06 | agung@gmail.com   | Bandung |        1 |      5 |
-- | 11 | 011103 | Sekar          | P    | Kediri    | 2001-09-08 | sekar@gmail.com   | Kediri  |        1 |      5 |
-- | 12 | 011104 | Suandi         | L    | Jakarta   | 1997-09-08 | suandi@gmail.com  | Kediri  |        1 |      5 |
-- | 14 | 011106 | Gayatri        | P    | Jakarta   | 2002-09-01 | gayatri@gmail.com | Jakarta |        1 |      5 |
-- +----+--------+----------------+------+-----------+------------+-------------------+---------+----------+--------+
