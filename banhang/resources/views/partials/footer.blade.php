<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
      Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <script type="text/javascript">
      function ChangeToSlug() {
          var slug;
          // Lấy text từ thẻ input title
          slug = document.getElementById("slug").value;
          slug = slug.toLowerCase();
          // Đổi ký tự có dấu thành không dấu
          slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
          slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
          slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
          slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
          slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
          slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
          slug = slug.replace(/đ/gi, 'd');
          // Xóa các ký tự đặt biệt
          slug = slug.replace(/[^a-z0-9\s-]/gi, '');
          // Đổi khoảng trắng thành ký tự gạch ngang
          slug = slug.replace(/\s+/g, '-');
          // Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
          slug = slug.replace(/-+/g, '-');
          // Xóa các ký tự gạch ngang ở đầu và cuối
          slug = slug.replace(/^-+|-+$/g, '');
          // In slug ra textbox có id "convert_slug"
          document.getElementById('convert_slug').value = slug;
      }
  </script>
</footer>