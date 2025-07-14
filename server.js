

// const { createPool } = require('mysql2');

// const pool = createPool({
//     host: 'localhost',
//     user: 'root',
//     password: 'Ms00712141.',
//     database: 'painless_portal',
//     connectionLimit: 10
// });

// pool.query(`select * from painless_portal.users`, (err, res) => {
//     return console.log(res);
// });
const express = require('express');
const cors = require('cors');
const { createPool } = require('mysql2');

const app = express();
app.use(express.json());
app.use(cors());

const pool = createPool({
    host: 'localhost',
    user: 'root',
    password: 'Ms00712141.',
    database: 'painless_portal',
    connectionLimit: 10
});

// Registration endpoint
app.post('/register', (req, res) => {
    const { name, email, username, password, role } = req.body;

    pool.query(
        'SELECT * FROM users WHERE email = ? OR username = ?',
        [email, username],
        (err, results) => {
            if (err) return res.status(500).send({ success: false, message: 'Database error', error: err });
            if (results.length > 0) {
                return res.status(400).send({ success: false, message: 'Email or username already exists.' });
            }

            pool.query(
                'INSERT INTO users (name, email, username, password, role, approved) VALUES (?, ?, ?, ?, ?, ?)',
                [name, email, username, password, role, false],
                (err, result) => {
                    if (err) return res.status(500).send({ success: false, message: 'Insert error', error: err });
                    res.send({ success: true });
                }
            );
        }
    );
});

// Get all users
app.get('/users', (req, res) => {
    pool.query('SELECT * FROM users', (err, results) => {
        if (err) return res.status(500).send({ success: false, message: 'Database error', error: err });
        res.send(results);
    });
});

// Get single user by username
app.get('/user/:username', (req, res) => {
    const { username } = req.params;
    pool.query('SELECT * FROM users WHERE username = ?', [username], (err, results) => {
        if (err) return res.status(500).send({ success: false, message: 'Database error', error: err });
        if (results.length === 0) {
            return res.status(404).send({ success: false, message: 'User not found.' });
        }
        res.send(results[0]);
    });
});

// Approve user endpoint (already present, but included for completeness)
app.post('/approve', (req, res) => {
    const { username } = req.body;
    pool.query(
        'UPDATE users SET approved = ? WHERE username = ?',
        [true, username],
        (err, result) => {
            if (err) return res.status(500).send({ success: false, message: 'Approve error', error: err });
            res.send({ success: true });
        }
    );
});

// Delete user endpoint
app.post('/delete', (req, res) => {
    const { username } = req.body;
    pool.query('DELETE FROM users WHERE username = ?', [username], (err, result) => {
        if (err) return res.status(500).send({ success: false, message: 'Delete error', error: err });
        res.send({ success: true });
    });
});

// Login endpoint
app.post('/login', (req, res) => {
    const { username, password } = req.body;
    pool.query(
        'SELECT * FROM users WHERE username = ? AND password = ?',
        [username, password],
        (err, results) => {
            if (err) return res.status(500).send({ success: false, message: 'Database error', error: err });
            if (results.length === 0) {
                return res.send({ success: false, message: 'Invalid username or password.' });
            }
            // Return user info (excluding password if you want)
            res.send({ success: true, user: results[0] });
        }
    );
});

app.listen(3000, console.log('Server running on port 3000'));