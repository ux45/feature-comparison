<?php include("header.php"); ?>
<div id="page-wrapper">
  <div class="main-container container">
    <header role="banner" id="page-header">
      <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->
    <div class="row">
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-2" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
              <?php if (!empty($page['featured'])): ?>
          <div class="featured panel"><?php print render($page['featured']); ?></div>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <?php print render($page['help']); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-4" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>

    </div>
  </div>
</div>
<!-- /#page-wrapper -->
<footer class="footer" id="footer_wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" id="footer-left-wrapper">
        <?php print render($page['footer_left']); ?>
      </div>
      <div class="col-md-4" id="footer-middle-wrapper">
        <?php print render($page['footer_middle']); ?>
      </div>
      <div class="col-md-4" id="footer-right-wrapper">
        <?php print render($page['footer_right']); ?>
      </div>
    </div>
    <div class="row">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>
