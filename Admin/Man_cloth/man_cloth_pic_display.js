function previewFile(event) {
    var input = event.target;
    var previewImage = document.getElementById('previewImage');
    var previewPDF = document.getElementById('previewPDF');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var fileExtension = input.files[0].name.split('.').pop().toLowerCase();
            if (fileExtension === 'pdf') {
                previewPDF.style.display = 'block';
                previewPDF.src = e.target.result;
                previewImage.style.display = 'none';
            } else {
                previewImage.style.display = 'block';
                previewImage.src = e.target.result;
                previewPDF.style.display = 'none';
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}