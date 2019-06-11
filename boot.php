<?php
  // this is called from header

  $dataPages = [
    [
      'title' => 'Home page',
      'url' => '/',
      'description' => 'Home Page description metatag',
      'keywords' => '',
      'body_class' => 'page'
    ],

  ];

  // some calculations
  $url_parsed = parse_url( $_SERVER['REQUEST_URI'] );
  $page_path = ltrim( $url_parsed['path'], '/' );

  $dataCurrentPage = null; // used for articles page
  foreach ( $dataPages as $item ) {
    if ( $item['url'] == $url_parsed['path'] ) {
      $dataCurrentPage = $item;
    }
  }

