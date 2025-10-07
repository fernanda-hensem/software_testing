  <?php

  // file: Validator.php
  function validateAge
  ($age){
    // harus angka
    if (!is_numeric($age)) {
        throw new InvalidArgumentException ("umur harus berupa angka");
    }
    // tidak boleh negatif
    if ($age < 0 ) {
        throw new InvalidArgumentException ("umur tidak boleh negatif");
    }
    return true;
  }


  // file: Validator.php
  function validateName
  ($name){
    // nama tidak boleh kosong
    if (!is_string($name)) {
        throw new InvalidArgumentException ("Nama tidak boleh kosong");
    }
    // nama harus diisi
    if (trim ($name) === ""){
        throw new InvalidArgumentException ("Nama harus diisi");
    }
    return true;
  }

  ?>