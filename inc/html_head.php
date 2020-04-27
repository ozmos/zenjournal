<?php
    $title = $page['title'];
    $title_long = $page['art_title'];
    $description = $page['description'];
    $image = $page['img'] ? $page['img'] : 'https://samadhijournal.com/findability/images/logo-lg.png';
    $handle = '@PerthDev';
    $url = 'https://samadhijournal.com/findability/' . $page['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KMG8DWQ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php echo $page['title']; ?>
    </title>
    <meta name="author" content="Osamu Morozumi" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="SEO, findability, digital marketing, technical SEO" />
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="<?php echo $description;?>">
    <meta name="twitter:site" content="<?php echo $handle;?>">
    <meta name="twitter:title" content="<?php echo $title_long;?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:creator" content="<?php echo $handle;?>">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $title_long;?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:image" content="<?php echo $image;?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:site_name" content="Findability Mini Website" />
    <meta property="fb:admins" content="2012268618894058" />
    <!-- end OG data -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata%7CNoto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="search" type="application/opensearchdescription+xml" title="Search Findability Mini-Website" href="https://samadhijournal.com/findability/opensearch.xml" />
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Organization",
        "url": "https://samadhijournal.com/findability",
        "logo": "https://samadhijournal.com/findability/images/logo.png"
    }
    </script>
</head>

<body id="<?php echo $page['id'];?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMG8DWQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->