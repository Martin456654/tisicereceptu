<header class="header">
    <div class="container">
        <img class="logo" src="images/logo.png" alt="logo">

        <!-- navigation -->
        <nav class="nav">
            <ul class="nav-list">
                <?php
                // Pole navigačních položek
                $navItems = [
                    ['label' => 'Hlavní chody', 'url' => 'index.php'],
                    ['label' => 'Polévky a předkrmy', 'url' => 'recipes.php'],
                    ['label' => 'Snídaně', 'url' => 'about.php'],
                    ['label' => 'Saláty', 'url' => 'about.php'],
                    ['label' => 'Tipy pro vaření', 'url' => 'about.php'],
                    ['label' => '<i class="bx bx-search"></i>', 'url' => 'about.php', 'isHtml' => true]
                ];

                // Vygenerování navigačních položek
                foreach ($navItems as $item) {
                    $label = $item['label'];
                    $url = $item['url'];
                    $isHtml = !empty($item['isHtml']) && $item['isHtml'];
                    
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='{$url}'>" . ($isHtml ? $label : htmlspecialchars($label)) . "</a>";
                    echo "</li>";
                }
                ?>
            </ul>
        </nav>

        <i class='hamburger-menu-icon bx bx-menu'></i>
    </div>
</header>