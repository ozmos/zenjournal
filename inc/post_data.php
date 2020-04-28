<?php

$post_data = [
  'home' => [
    'post' => false,
    'title' => 'Findability - Home',
    'description' => 'Home page for Findability Mini Website',
    'id' => 'home',
    'img' => 'searching.jpg',
    'alt' => 'graphic of person looking through binoculars',
    'art_title' => 'Welcome to the Findability Mini Website',
    'subtitle' => 'SEO, Findability and Web Development',
    'auth' => 'Osamu Morozumi',
    'date' => '7th June 2019',
    'content' => file_get_contents('post_content/home.html'),
    'actions' => [
      ['href' => 'seo_techniques.php', 'content' => 'Read More about SEO'],
      ['href' => 'blog.php', 'content' => 'Go to blog articles']
    ]
  ],
  'blog' => [
    'post' => false,
    'title' => 'Findability - Findability Blog',
    'description' => 'Blog articles for the Findability Website',
    'id' => 'blog',
    'art_title' => 'Findability Blog',
    'subtitle' => 'The Latest Articles on SEO and Findability',
    'auth' => '',
    'date' => '',
    'content' => ''
  ],
  'seo_techniques' => [
    'post' => true,
    'title' => 'Findability | Blog | SEO Techniques and Utilities',
    'description' => 'A brief overview of SEO techniques and utilities',
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
  'resources' => [
    'post' => false,
    'title' => 'Findability | Findability Resources',
    'description' => 'A list of excellent resources for findability, SEO and digital marketing',
    'id' => 'resources',
    'art_title' => 'Findability Resources',
    'auth' => 'Osamu Morozumi',
    'date' => '13th April 2020',
    'content' => file_get_contents('post_content/resources.html')
  ],
  'glossary' => [
    'post' => false,
    'title' => 'Findability | Glossary',
    'description' => 'Technical terms used in SEO and findability',
    'id' => 'glossary',
    'art_title' => 'Glossary',
    'auth' => 'Osamu Morozumi',
    'date' => '14th April 2020',
    'content' => file_get_contents('post_content/glossary.html')
  ],
  'about' => [
    'post' => false,
    'title' => 'Findability | About',
    'description' => 'Findability techniques used in this website',
    'id' => 'about',
    'art_title' => 'About this website',
    'auth' => 'Osamu Morozumi',
    'date' => '18th April 2020',
    'content' => file_get_contents('post_content/about.html')
  ],
  'seo_best_practices' => [
    'post' => false,
    'title' => 'Findability | Best Practices',
    'description' => 'SEO Best Practices',
    'id' => 'seo_best_practices',
    'art_title' => 'SEO Best Practices',
    'auth' => 'Osamu Morozumi',
    'date' => '18th April 2020',
    'content' => file_get_contents('post_content/seo_best_practices.html')
  ],
  'contact' => [
    'post' => false,
    'title' => 'Samadhi Journal - Contact',
    'description' => 'Contact page for Samadhi Journal',
    'id' => 'contact',
    'img' => '',
    'alt' => '',
    'art_title' => 'Contact Us',
    'subtitle' => 'Please complete the form to get in touch',
    'auth' => '',
    'date' => '',
    'content' => ''
  ],
  '404' => [
    'post' => false,
    'title' => '404 - Page Not Found',
    'description' => 'The page you are looking for doesn\'t exist',
    'id' => '404',
    'art_title' => '404 - Page not Found',
  ]
];

function posts($arr) {
  if ($arr['post']) {
    return $arr;
  } 
}

$blogs = array_filter($post_data, 'posts');