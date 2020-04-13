<?php

$post_data = [
  'home' => [
    'post' => false,
    'title' => 'Findability - Home',
    'description' => 'Home page for Findability Mini Website',
    'id' => 'home',
    'img' => 'meditation-grass.jpg',
    'alt' => 'man sitting in meditation on grass',
    'art_title' => 'Welcome to the Findability Mini Website',
    'auth' => 'Osamu Morozumi',
    'date' => '7th June 2019',
    'content' => '<p>This is my mini findability website.  I hope you enjoy it.</p>',
    'actions' => [
      ['href' => intro.php, 'content' => 'Read More about mindfulness'],
      ['href' => sitting_meditation.php, 'content' => 'Learn How to Meditate']
    ]
  ],
  'blog' => [
    'post' => false,
    'title' => 'Findability - Findability Blog',
    'description' => 'Blog articles for the Findability Website',
    'id' => 'blog',
    'art_title' => 'Findability Blog',
    'auth' => '',
    'date' => '',
    'content' => ''
  ],
  'seo_techniques' => [
    'post' => true,
    'title' => 'Findability | Blog | SEO Techniques and Utilities',
    'description' => 'Overview of SEO techniques and utilities',
    'id' => 'seo_techniques',
    'img' => 'seo-techniques.jpg',
    'alt' => 'SEO keywords in various languages',
    'art_title' => 'SEO Techniques and Utilities',
    'auth' => 'Osamu Morozumi',
    'date' => '12th April 2020', 
    'content' => file_get_contents('post_content/seo_techniques.html')
    
  ],
  'custom_404' => [
    'post' => true,
    'title' => 'Findability | Blog | Custom 404 Error Pages',
    'description' => 'How to create custom 404 error pages for Search Engine Optimization',
    'id' => 'custom_404',
    'img' => 'custom-404.jpg',
    'alt' => 'a striking custom 404 error page example',
    'art_title' => 'Custom 404 Error Pages',
    'auth' => 'Osamu Morozumi',
    'date' => '12th April 2020',
    'content' => file_get_contents('post_content/custom_404.html')
    
  ],
  'structured_data' => [
    'post' => true,
    'title' => 'Findability | Blog | Structured Data and SEO',
    'description' => 'A brief explanation of Structured Data for SEO',
    'id' => 'structured_data',
    'img' => 'structured-data.png',
    'alt' => 'Colorful infographic depicting enriched search results',
    'art_title' => 'Structured Data and SEO',
    'auth' => 'Osamu Morozumi',
    'date' => '12th April 2020',
    'content' => file_get_contents('post_content/structured_data.html')
  ],
   'google_search_console' => [
    'post' => false,
    'title' => 'Findability | Google Search Console Presentation',
    'description' => 'A  brief presentation on Google Search Console',
    'id' => 'google_search_console',
    'img' => 'google-search-console.jpg',
    'alt' => 'Colorful infographic depicting google search console',
    'art_title' => 'Google Search Console Presentation',
    'subtitle' => 'A brief overview of Google Search Console',
    'auth' => 'Osamu Morozumi',
    'date' => '13th April 2020',
    'content' => file_get_contents('post_content/google_search_console.html')
  ],
  'contact' => [
    'post' => false,
    'title' => 'Samadhi Journal - Contact',
    'description' => 'Contact page for Samadhi Journal',
    'id' => 'contact',
    'img' => '',
    'alt' => '',
    'art_title' => 'Get in Touch',
    'auth' => '',
    'date' => '',
    'content' => ''
  ]
];

function posts($arr) {
  if ($arr['post']) {
    return $arr;
  } 
}

$blogs = array_filter($post_data, 'posts');