
document.getElementById('fileInput').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    var fileExtension = file.name.split('.').pop().toLowerCase();
    var previewImage = document.getElementById('previewImage2');
    var previewPDF = document.getElementById('previewPDF2');

    if (fileExtension === 'pdf') {
        previewImage.style.display = 'none';
        previewPDF.style.display = 'block';

        reader.onload = function(e) {
            previewPDF.src = e.target.result;
        };
    } else {
        previewImage.style.display = 'block';
        previewPDF.style.display = 'none';

        reader.onload = function(e) {
            previewImage.src = e.target.result;
        };
    }

    reader.readAsDataURL(file);
});