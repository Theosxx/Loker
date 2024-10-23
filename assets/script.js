function proses() {
    let myForm = document.myForm;
    let nama = myForm.nama.value;
    let nim = myForm.nim.value;
    let prodi = myForm.prodi.value;
    let fakultas = myForm.fakultas.value;

    myForm.hasil.value = `Data Mahasiswa 


    Nama : ${nama}
    Nim  : ${nim}
    Prodi : ${prodi}
    Fakultas : ${fakultas}`;
  }

  function hapus() {
    document.myForm.reset();
  }