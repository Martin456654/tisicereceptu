<?php
function renderDivider($text, $color = '#444444', $marginTop = "0px") {
    return "
    <div class='divider' style='margin-top: {$marginTop};'>
        <div class='divider-line' style='background-color: {$color}40'></div>
        <span class='divider-text' style='color: {$color}'>{$text}</span>
        <div class='divider-line' style='background-color: {$color}40'></div>
    </div>
    ";
}

function renderFacebookProfile(){
    return "
    <div class='fb-widget'>
        <i class='bx bxl-facebook-square'></i>
        <span>Profile Widget</span>
    </div>
    ";
}

function renderGoogleAds(){
    return "
    <div class='google-ads'>
        <i class='bx bx-credit-card-front'></i>
        <span>Google Ads Widget</span>
    </div>
    ";
}

function renderAffilLink(){
    return "
    <div class='affil-link'>
        <i class='bx bx-credit-card-front'></i>
        <span>Affiliate Marketing AD/Link</span>
    </div>
    ";
}

function renderGradientCard($heading, $subheading, $imgSrc, $textAlign, $headingFontSize, $subheadingFontSize, $minHeight, $padding) {
    return "
    <div class='gradient-card'
        style='text-align: {$textAlign};
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 51%, rgba(0, 0, 0, 1) 90%), url({$imgSrc});
        min-height: {$minHeight};
        padding: {$padding};'>

        <span class='subheading' style='font-size: {$subheadingFontSize};'>{$subheading}</span>
        <span class='heading' style='font-size: {$headingFontSize};'>{$heading}</span>
    </div>
    ";
}

// Funkce pro odstranění diakritiky a převod na lowercase
function removeDiacritics($string) {
    $search  = array('á','č','ď','é','ě','í','ň','ó','ř','š','ť','ú','ů','ý','ž','Á','Č','Ď','É','Ě','Í','Ň','Ó','Ř','Š','Ť','Ú','Ů','Ý','Ž');
    $replace = array('a','c','d','e','e','i','n','o','r','s','t','u','u','y','z','A','C','D','E','E','I','N','O','R','S','T','U','U','Y','Z');
    return strtolower(str_replace($search, $replace, $string));
}

// Funkce pro získání barvy pro tag
function getTagStyles($tag) {
    // Barvy pro každý tag
    $tagStyles = [
        'maso' => ['background' => 'rgba(255, 0, 0, 0.2)', 'color' => 'rgb(255, 0, 0)'],
        'sladke' => ['background' => 'rgba(255, 192, 203, 0.3)', 'color' => 'rgb(255, 105, 180)'],
        'hovezi' => ['background' => 'rgba(139, 69, 19, 0.3)', 'color' => 'rgb(139, 69, 19)'],
        'drubez' => ['background' => 'rgba(255, 165, 0, 0.3)', 'color' => 'rgb(255, 165, 0)'],
        'salaty' => ['background' => 'rgba(0, 128, 0, 0.3)', 'color' => 'rgb(0, 128, 0)'],
        'polevky' => ['background' => 'rgba(255, 223, 186, 0.3)', 'color' => 'rgb(255, 140, 0)'],
        'predkrmy' => ['background' => 'rgba(255, 223, 0, 0.3)', 'color' => 'rgb(255, 223, 0)'],
        'vanocni' => ['background' => 'rgba(255, 0, 0, 0.2)', 'color' => 'rgb(0, 128, 0)'],
        'sladke-pecivo' => ['background' => 'rgba(255, 218, 185, 0.3)', 'color' => 'rgb(255, 140, 0)'],
    ];

    // Normalizace tagu (odstranění diakritiky a převod na lowercase)
    $normalizedTag = removeDiacritics(strtolower($tag));

    // Získání stylu pro tag nebo výchozí 'maso', pokud tag není v seznamu
    return isset($tagStyles[$normalizedTag]) ? $tagStyles[$normalizedTag] : $tagStyles['maso'];
}

// Funkce pro renderování karty (verze bez horizontal)
function renderWhiteCard($imgSrc, $heading, $tag, $date, $headingSize = "30px", $backgroundColor = "#fff") {
    // Získání stylu pro tag
    $tagStyle = getTagStyles($tag);
    
    return "
    <div class='grid-item'>
        <div class='recipe-card-content'>
            <img class='recipe-image' src='" . $imgSrc . "' alt='" . $heading . "'>
            <span class='recipe-name' style='font-size: {$headingSize} !important;'>" . $heading . "</span>
        </div>
        
        <div class='recipe-card-footer'>
            <span class='tag' style='background: {$tagStyle['background']} !important; color: {$tagStyle['color']} !important;'>" . $tag . "</span>
            <span class='date'>" . $date . "</span>
        </div>

        <div class='background' style='background: {$backgroundColor} !important;'></div>
    </div>
    ";
}

// Funkce pro renderování karty (verze horizontal)
function renderWhiteCardHorizontal($imgSrc, $heading, $tag, $date, $headingSize = "30px", $backgroundColor = "#fff", $description = "") {
    // Získání stylu pro tag
    $tagStyle = getTagStyles($tag);

    return "
    <div class='grid-item horizontal'>
        <img class='recipe-image' src='" . $imgSrc . "' alt='" . $heading . "'>

        <div class='recipe-card-content'>
            <div style='display: flex; flex-direction: column; gap: 10px;'>
                <span class='recipe-name' style='font-size: {$headingSize} !important; background: {$backgroundColor} !important;'>" . $heading . "</span>
                <span class='recipe-description'>" . $description . "</span>
            </div>

            <div class='recipe-card-footer'>
                <span class='tag' style='background: {$tagStyle['background']} !important; color: {$tagStyle['color']} !important;'>" . $tag . "</span>
                <span class='date'>" . $date . "</span>
            </div>
        </div>

        <div class='background'></div>
    </div>
    ";
}