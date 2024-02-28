const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
const port = 3000;

// Konfigurasi koneksi ke MySQL
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'galeri',
});

connection.connect((err) => {
  if (err) {
    console.error('Error connecting to MySQL:', err);
    return;
  }
  console.log('Connected to MySQL');
});

// Middleware untuk mengonfigurasi bodyParser agar dapat membaca data JSON
app.use(bodyParser.json());

// Rute untuk menangani permintaan login
app.post('/login', (req, res) => {
  const { email, password } = req.body;

  // Cari pengguna dengan email yang sesuai di database
  const query = 'SELECT * FROM users WHERE email = ? AND password = ?';
  connection.query(query, [email, password], (err, results) => {
    if (err) {
      console.error('Error executing MySQL query:', err);
      res.status(500).json({ message: 'Terjadi kesalahan dalam server' });
      return;
    }

    // Jika pengguna ditemukan
    if (results.length > 0) {
      res.status(200).json({ message: 'Login berhasil' });
    } else {
      res.status(401).json({ message: 'Login gagal. Periksa kembali email dan password Anda.' });
    }
  });
});

// Serve halaman HTML statis
app.use(express.static('public'));

// Mulai server
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
