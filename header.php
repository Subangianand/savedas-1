<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Saved As Creative Agency'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar container mx-auto relative">
        <a href="index.php" class="logo" style="font-weight:800; font-size:1.2rem;">Saved As</a>
        <button class="mobile-menu-btn" aria-label="Toggle Menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <nav class="nav-links" style="font-size:0.9rem; font-weight:600; gap: 2rem;">
            <a href="about.php" class="<?php echo ($currentPage == 'about') ? 'nav-active' : ''; ?>">About</a>
            <a href="services.php" class="<?php echo ($currentPage == 'services') ? 'nav-active' : ''; ?>">Service</a>
            <a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'nav-active' : ''; ?>">Get in
                touch</a>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');
            if(mobileBtn && navLinks) {
                mobileBtn.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                });
            }
        });
    </script>