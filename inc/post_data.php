<?php

$post_data = [
  'home' => [
    'post' => false,
    'title' => 'Samadhi Journal - Home',
    'description' => 'Reflections and instructions in mindfulness meditation',
    'id' => 'home',
    'img' => 'meditation-grass.jpg',
    'alt' => 'man sitting in meditation on grass',
    'art_title' => 'Welcome to Samadhi Journal',
    'auth' => 'Osamu Morozumi',
    'date' => '7th June 2019',
    'content' => file_get_contents('content/home.html'),
    'actions' => [
      ['href' => 'intro.php', 'content' => 'Read More about mindfulness'],
      ['href' => 'sitting-meditation.php', 'content' => 'Learn How to Meditate']
    ]
  ],
  'articles' => [
    'post' => false,
    'title' => 'Samadhi Journal - Articles',
    'description' => 'Blog feed for Samadhi Journal',
    'id' => 'articles',
    'img' => 'meditation-grass.jpg',
    'alt' => 'man sitting in meditation on grass',
    'art_title' => 'Latest articles for Samadhi Journal',
    'auth' => '',
    'date' => '',
    'content' => ''
  ],
  'intro' => [
    'post' => true,
    'title' => 'Samadhi Journal - What is Mindfulness',
    'description' => 'Article describing what mindfulness is',
    'id' => 'intro',
    'img' => 'balance.jpg',
    'alt' => 'balanced rocks at beach with sunset',
    'art_title' => 'What is mindfulness?',
    'auth' => 'Osamu Morozumi',
    'date' => '9th June 2019', 
    'content' => file_get_contents('content/intro.html'),
    'actions' => [
      ['href' => 'sitting-meditation.php', 'content' => 'Learn How to Meditate']
    ]
    ],
  'sitting_meditation' => [
    'post' => true,
    'title' => 'Samadhi Journal - Sitting Meditation',
  'description' => 'Brief instructions on how to sit meditation',
  'id' => 'sitting-meditation',
  'img' => 'sitting-meditation.jpg',
  'alt' => 'woman sitting meditation in nature',
  'art_title' => 'How to sit meditation',
  'auth' => 'Osamu Morozumi',
  'date' => '9th June 2019', 
  'content' => file_get_contents('content/sitting_meditation.html'),
  'actions' => [
      ['href' => 'walking-meditation.php', 'content' => 'Learn How to do Walking Meditation']
    ]
  ],
  'walking_meditation' => [
    'post' => true,
    'title' => 'Samadhi Journal - Walking Meditation',
    'description' => 'Brief instructions on how to practice walking meditation',
    'id' => 'walking-meditation',
    'img' => 'road.jpg',
    'alt' => 'dirt road shaded by trees',
    'art_title' => 'How to do walking meditation',
    'auth' => 'Osamu Morozumi',
    'date' => '9th June 2019',
    'content' => file_get_contents('content/walking_meditation.html')
  ],
  'guided_meditation' => [
    'post' => false,
    'title' => 'Guided Meditation | Articles | Samadhi Journal',
  'description' => 'A twenty minute guided meditation using the breath as the basis for developing mindfulness',
  'id' => 'guided_meditation',
  'img' => '',
  'alt' => '',
  'art_title' => '20 Minute Guided Meditation',
  'auth' => 'Osamu Morozumi',
  'date' => '3rd May 2020', 
  'content' => file_get_contents('content/guided_meditation.html'),
  'actions' => [
      ['href' => 'sitting-meditation.php', 'content' => 'Learn How to Meditate']
    ]
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