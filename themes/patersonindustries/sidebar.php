<div class="sidebar">
  <?php
    if(is_page('contact')){
        dynamic_sidebar('sidebar-contact');
    }else{
      dynamic_sidebar('sidebar');
    }
  ?>
</div>
