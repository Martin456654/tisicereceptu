<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo-and-search">
                <img class="logo" src="images/logo.png" alt="logo">
                <div class="search-bar">
                    <button><i class='bx bx-search'></i></button>
                    <input type="text" placeholder="Hledat mezi recepty...">
                </div>
            </div>

            <div class="links">
                <?php
                // Definice odkazů pro dvě sekce
                $linkGroups = [
                    [
                        ['label' => 'Hlavní chody', 'url' => 'index.php'],
                        ['label' => 'Nápoje', 'url' => 'recipes.php'],
                        ['label' => 'Polévky', 'url' => 'about.php'],
                        ['label' => 'Snídaně', 'url' => 'about.php'],
                    ],
                    [
                        ['label' => 'Saláty', 'url' => 'index.php'],
                        ['label' => 'Sladké', 'url' => 'recipes.php'],
                        ['label' => 'Tipy pro vaření', 'url' => 'about.php'],
                        ['label' => 'Region', 'url' => 'about.php'],
                    ]
                ];

                // Vygenerování odkazů
                foreach ($linkGroups as $links) {
                    echo '<ul>';
                    foreach ($links as $link) {
                        echo "<li><a href='{$link['url']}'>" . htmlspecialchars($link['label']) . "</a></li>";
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © RF-Hobby s.r.o.</p>
        </div>
    </div>
</footer>
