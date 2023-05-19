function handleFileSelect(event) {
    const file = event.target.files[0];
    const imageType = /^image\//;
  
    if (!file || !imageType.test(file.type)) {
      // Invalid file type, do not proceed
      alert('Please select an image file.');
      return;
    }
  
    // File is valid, do something with it
    // For example, display a preview of the image
    const reader = new FileReader();
    reader.onload = function(e) {
      const imagePreview = document.getElementById('imagePreview');
      imagePreview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  }