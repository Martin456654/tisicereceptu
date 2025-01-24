<?php

// Including external files with data and reusable components
include 'data.php';
include 'components.php';

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <!-- Meta tags for character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tisicereceptu.cz</title>
    <!-- Linking external stylesheets and icons -->
    <link rel="stylesheet" href="styles/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Including header from the partials folder -->
    <?php include 'partials/header.php'; ?>

    <main>
        <!-- Section displaying popular lunch recipes -->
        <section class="tips_for_now">
            <div class="container">
                <div class="headings">
                    <h3 class="heading">Něco na oběd?</h3>
                    <span class="subheading">Nejčastěji vyhledávané recepty v těchto obědových hodinách...</span>
                </div>

                <!-- Slider for popular recipes -->
                <div class="cards-slider">
                    <?php foreach ($sliderCards as $card): ?>
                        <div class="col">
                            <?php echo renderGradientCard(
                                $card['title'], // Title of the card
                                "",
                                $card['imgSrc'], // Image source for the card
                                "center",
                                '23px', '17px', '100%', '20px'
                            ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Control buttons for slider -->
                <div class="control_buttons">
                    <button class="prev">
                        <i class='bx bx-left-arrow-alt' ></i>
                    </button>
                    <button class="next">
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Section displaying newest recipes -->
        <section class="recipes">
            <div class="container">
                <?php echo renderDivider('Nejnovější', '#444444'); ?>

                <div class="recipes-grid recipes-grid-big">
                    <?php foreach ($newestRecipes as $recipe): ?>
                        <?php echo renderWhiteCard(
                            $recipe['image'], // Recipe image
                            $recipe['name'], // Recipe name
                            $recipe['category'], // Recipe category
                            $recipe['date'], // Date of recipe
                            "20px");
                            ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Section for daily recipe and other categories -->
        <section class="main-first-content-section">
            <div class="container">
                <div class="main-col">
                    <?php echo renderDivider('Recept dne', '#444444'); ?>
                    <!-- Daily recipe card -->
                    <?php echo renderGradientCard('Rebarborový koláč','Párty jídla',
                            $imgSrc = 'images/recipe_for_today.jpg',
                            'left', '60px', '17px', "600px", "30px"); ?>

                    <?php echo renderDivider('Nejnovější', '#6BA9B9', '60px'); ?>
                    <div class="recipes-grid recipes-grid-small" style="margin-top: 0px;">
                        <?php foreach ($newestRecipes as $recipe): ?>
                            <?php echo renderWhiteCard(
                                $recipe['image'],
                                $recipe['name'],
                                $recipe['category'],
                                $recipe['date'],
                                "20px",
                                "#FDFDFD") ?>
                        <?php endforeach ?>
                    </div>

                    <?php echo renderDivider('Sladké dobroty', '#E29B00', '60px'); ?>
                    <div class="recipes-grid recipes-grid-small" style="margin-top: 0px;">
                        <?php foreach ($newestRecipes as $recipe): ?>
                            <?php echo renderWhiteCard(
                                $recipe['image'],
                                $recipe['name'],
                                $recipe['category'],
                                $recipe['date'],
                                "20px",
                                "#FDFDFD") ?>
                        <?php endforeach ?>
                    </div>
                </div>

                <!-- Secondary content for ads and social media -->
                <div class="secondary-col">
                    <?php echo renderFacebookProfile(); ?> <!-- Facebook profile widget -->
                    <?php echo renderGoogleAds(); ?> <!-- Google Ads -->

                    <!-- Featured recipe card -->
                    <?php echo renderGradientCard('Plněné žampiony','Polévky a předkrmy',
                            $imgSrc = 'https://cdn.loveandlemons.com/wp-content/uploads/opengraph/2019/02/meal-prep-ideas.jpg',
                            'left', '34px', '15px', "600px", "30px"); ?>

                    <?php echo renderGoogleAds(); ?> <!-- Another Google Ad -->
                </div>
            </div>
        </section>

        <!-- Section for additional great recipes -->
        <section class="main-second-content-section">
            <div class="container">
                <div class="main-col">
                    <?php echo renderDivider('Další skvělé recepty', '#444444'); ?>

                    <div class="also-great-recipes-desktop" style="margin-top: 0px; display: flex; gap: 30px; flex-direction: column;">
                        <?php foreach ($alsoGreatRecipes as $recipe): ?>
                            <?php echo renderWhiteCardHorizontal(
                                $recipe['image'],
                                $recipe['name'],
                                $recipe['category'],
                                $recipe['date'],
                                "30px",
                                "#FDFDFD",
                                "Chcete u štědrovečerního stolu podávat dva druhy bramborového salátu? Zkuste vídeňský. Suroviny 800 g brambor 200 ml zeleninového vývaru 2 velké červené") ?>
                        <?php endforeach ?>
                    </div>

                    <div class="also-great-recipes-mobile recipes-grid recipes-grid-small" style="margin-top: 0px; display: none;">
                        <?php foreach ($alsoGreatRecipes as $recipe): ?>
                            <?php echo renderWhiteCard(
                                $recipe['image'],
                                $recipe['name'],
                                $recipe['category'],
                                $recipe['date'],
                                "20px",
                                "#FDFDFD") ?>
                        <?php endforeach ?>

                    </div>

                    <!-- Control buttons for pagination -->
                    <div class="control_buttons pagination" style="margin: 0 auto; display: flex; align-items: center;">
                        <button class="prev">
                            1
                        </button>
                        <button class="prev">
                            2
                        </button>
                        <span style="font-weight: 700; font-size: 40px;">-</span>
                        <button class="prev">
                            476
                        </button>
                        <button class="next">
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>
                </div>

                <div class="secondary-col">
                    <?php echo renderFacebookProfile(); ?> <!-- Facebook profile widget -->
                    <?php echo renderGoogleAds(); ?> <!-- Google Ads -->
                    <?php echo renderAffilLink(); ?> <!-- Affiliate link -->
                </div>
            </div>
        </section>
    </main>

    <!-- Including footer from the partials folder -->
    <?php include 'partials/footer.php'; ?>
</body>
</html>
