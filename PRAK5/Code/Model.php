<?php
require_once 'Koneksi.php';

function getAllMembers() {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT * FROM member");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addMember($data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, NOW(), NOW())");
    $stmt->execute([$data['nama'], $data['nomor'], $data['alamat']]);
    return $conn->lastInsertId();
}

function updateMember($id, $data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ? WHERE id_member = ?");
    return $stmt->execute([$data['nama'], $data['nomor'], $data['alamat'], $id]);
}

function deleteMember($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

// Fungsi untuk tabel buku
function getAllBooks() {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT * FROM buku");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBookById($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addBook($data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->execute([$data['judul'], $data['penulis'], $data['penerbit'], $data['tahun']]);
    return $conn->lastInsertId();
}

function updateBook($id, $data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    return $stmt->execute([$data['judul'], $data['penulis'], $data['penerbit'], $data['tahun'], $id]);
}

function deleteBook($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

// Fungsi untuk tabel peminjaman
function getAllLoans() {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT p.*, m.nama_member, b.judul_buku FROM peminjaman p JOIN member m ON p.id_member = m.id_member JOIN buku b ON p.id_buku = b.id_buku");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLoanById($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addLoan($data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    $stmt->execute([$data['member'], $data['buku'], $data['pinjam'], $data['kembali']]);
    return $conn->lastInsertId();
}

function updateLoan($id, $data) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?");
    return $stmt->execute([$data['member'], $data['buku'], $data['pinjam'], $data['kembali'], $id]);
}

function deleteLoan($id) {
    $conn = koneksiDB();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}

function getMembersForDropdown() {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT id_member, nama_member FROM member");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBooksForDropdown() {
    $conn = koneksiDB();
    $stmt = $conn->prepare("SELECT id_buku, judul_buku FROM buku");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>