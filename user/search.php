<?php
include '../koneksi.php';

if (isset($_GET['q'])) {
    $query = $_GET['q'];
    // Hindari SQL injection
    $query = $mysqli->real_escape_string($query);

    // Query untuk mencari resep berdasarkan judul atau deskripsi
    $sql = "SELECT * FROM resep WHERE judul LIKE '%$query%' OR deskripsi LIKE '%$query%'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo "<div>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='recipe-box'>";
            echo "<h2>" . $row['judul'] . "</h2>";
            echo "<p>" . $row['deskripsi'] . "</p>";
            echo "<p>Waktu: " . $row['waktu'] . "</p>";
            echo "<img src='" . $row['cover'] . "' alt='" . $row['judul'] . "' />";
            echo "<a href='resep.php?id=" . $row['id_resep'] . "'>Lihat Resep</a>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "No results found.";
    }
} else {
    echo "Please enter a search query.";
}

$mysqli->close();
?>
