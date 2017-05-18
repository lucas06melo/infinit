tinymce.init({
  selector: '#texto',
  height: 350,
  theme: 'modern',
  resize: "both",
  relative_urls: false,
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code',
    'media nonbreaking save table contextmenu directionality',
    'paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
  toolbar2: 'media image | forecolor backcolor | codesample | preview',
  image_advtab: true,
  language: 'pt_BR',
 });