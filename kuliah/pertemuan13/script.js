function previewImage() {
  const gambar = document.querySelector('#gambar');
  const imgpreview = document.querySelector
    ('#img-preview');
  imgpreview.style.display = 'block';
  var oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFReader) {
    imgpreview.src = oFRREvent.target.result;
  };
}