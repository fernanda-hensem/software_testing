<?php
// file: test_age.php
require_once "Validator.php";

//test case 1: umur valid 
try {
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
} catch (Exception $e) {
    echo"FAIL: Umur 25 tidak diterima. Error: " . $e->getMessage(). "\n";
}

// Test case 2: umur negatif 
try {
    $result = validateAge(-5);
    echo "FAIL : Umur -5 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Umur -5 ditolak. Error: " . $e->getMessage() . "\n";
}

//test case 3: nama harus diisi
try {
    $result = validateName("Fernanda");
    echo "PASS: Nama Fernanda\n";
} catch (Exception $e) {
    echo"FAIL: Nama tidak Fernanda. Error: " . $e->getMessage(). "\n";
}

// Test Case 4: Nama tidak boleh kosong
try {
    $result = validateName("   ");
    echo "PASS: Nama tidak boleh kosong\n";
} catch (Exception $e) {
    echo"FAIL: Nama wajib diisi. Error: " . $e->getMessage(). "\n";
}