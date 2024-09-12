

  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

  <div id="editor">
    
  </div>
  

  <input type="hidden" id="quill-input" name="editorContent" />
  

  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
  
 
  <script>

    const quill = new Quill('#editor', {
      theme: 'snow'
    });
  
    // Get reference to the input field
    const quillInput = document.getElementById('quill-input');
  
    
    quill.on('text-change', function() {
      quillInput.value = quill.root.innerHTML;
    });
  </script>