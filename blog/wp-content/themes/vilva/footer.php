</div></div>
<?php  include('../contact-blog.php'); ?>

<?php  wp_footer(); ?>
<?php include_once('../footer.php') ?>
 <script type="text/javascript">
  var captcha, chars;

  function genNewCaptcha(){
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
  }

  function codeAddress() {
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
}
</script>
</body>
</html>
