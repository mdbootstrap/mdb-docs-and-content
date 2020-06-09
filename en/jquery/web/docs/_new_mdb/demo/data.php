<?php

$data_var = array(
  'seo_title' => 'To jest testowy seo title tralala',
);

$display_meta_tags = function () use ($data_var) {
  ?>

  <title><?= $data_var['seo_title']; ?></title>
  <meta name="og:title" content="<?= $data_var['seo_title']; ?>>">
<?php
};

$display_structured_data = function () use ($data_var) {
  ?>

  <script type='application/ld+json'>
    {
      "@context": "http://schema.org",
      "@type": "Website",
      "name": "<?= $data_var['seo_title']; ?>",
      "url": "https://www.mdbootstrap.com",
      "sameAs":
      [
        "https://www.facebook.com/mdbootstrap",
        "https://twitter.com/MDBootstrap",
        "https://plus.google.com/u/0/b/107863090883699620484",
        "https://www.linkedin.com/company/10912052",
        "https://dribbble.com/mdbootstrap",
        "https://pinterest.com/mdbootstrap",
        "http://codepen.io/mdbootstrap/",
        "https://github.com/mdbootstrap/bootstrap-material-design"
      ],
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://mdbootstrap.com/search?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }

    }
  </script>

  <?php
};
