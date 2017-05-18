$(document).ready(function() {
  $('#texto').summernote({
    height: 200,
    lang: 'pt-BR', // default: 'en-US'
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'hr']],
    ['view', ['codeview']],
  ],
  });
});