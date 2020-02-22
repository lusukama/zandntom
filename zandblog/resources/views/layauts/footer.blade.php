<!-- Footer -->
<footer class="page-footer font-small">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Copyright
  <?php
   $startYear = 2020;
   $thisYear = date('Y');
   if ($startYear == $thisYear) {
     echo $startYear;
   }else {
     echo "{$startYear} - {$thisYear}";
   }
  ?>
    <a href="#" style="color: #FFFF04;"> foodCoat.com</a> Alright reserved.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
