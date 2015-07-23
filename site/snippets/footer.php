  <footer class="footer cf" role="contentinfo">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

  </footer>


  <?php echo js('assets/js/jquery-2.1.4.min.js') ?>
  <?php echo js('assets/js/masonry.min.js') ?>

  <script>
    $(document).ready(function() {
      $('img').load(function(){

        $('.grid').masonry({
          itemSelector: '.grid-item'
        });

      });
    });
  </script>

</body>
</html>