function validateFile(event) {

    const fileInput = document.getElementById('formFile');
    const allowedExtensions = /(\.jpg|\.png)$/i;
    const maxSizeMB = 2;

    if (fileInput.files.length === 0) {
        alert('Harap lengkapi data yang kosong.');
        event.preventDefault(); // Menghentikan submit form
        return false;
    }

    const file = fileInput.files[0];
    const fileSizeMB = file.size / (1024 * 1024);

    if (!allowedExtensions.exec(file.name)) {
        alert('Hanya file JPG dan PNG yang diperbolehkan.');
        event.preventDefault(); // Menghentikan submit form
        return false;
    }

    if (fileSizeMB > maxSizeMB) {
        alert('Ukuran file melebihi batas maksimum (2 MB).');
        event.preventDefault(); // Menghentikan submit form
        return false;
    } else {
      document.getElementById('myForm').submit();
    }
    
}