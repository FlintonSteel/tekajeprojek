function previewImage() {
    var file = document.getElementById("imageUpload").files[0];
    var reader = new FileReader();
  
    reader.onloadend = function() {
      document.getElementById("imagePreview").src = reader.result;
    }
  
    if (file) {
      reader.readAsDataURL(file);
    } else {
      document.getElementById("imagePreview").src = "";
    }
  }