const express = require("express");
const bodyParser = require("body-parser");
const mysql = require("mysql");

const app = express();
app.use(bodyParser.json());

// membuat koneksi ke database
const conn = mysql.createConnection({
	host: "localhost",
	user: "root",
	password: "",
	database: "jdih",
});

// konek ke database
conn.connect((err) => {
	if (err) throw err;
	console.log("MySql Connected...");
});

// tampilkan semua data
app.get("/api/produk", (req, res) => {
	let sql = "SELECT * FROM produk_jdih";
	let query = conn.query(sql, (err, results) => {
		if (err) throw err;
		res.send(JSON.stringify({ status: 200, error: null, response: results }));
	});
});

app.listen(3000, () => {
	console.log("Server started on port 3000...");
});
