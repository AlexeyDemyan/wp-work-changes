<?php

/**
 * Template Name: Terms
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/social.jpg" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0094ec">


    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

    <?php wp_body_open(); ?>
    <a id="home" class="block h-20"></a>
    <header class="fixed top-0 left-0 right-0 z-40">
        <button class="z-10 sm:hidden  flex-col gap-1 absolute top-4 text-white hover:text-black right-4 w-12 h-auto aspect-square flex justify-center items-center " id="menu-toggle">
            <div class="bg-white h-[3px] w-6 rounded"></div>
            <div class="bg-white h-[3px] w-6 rounded"></div>
            <div class="bg-white h-[3px] w-6 rounded"></div>
        </button>
        <nav class="max-w-screen-md  mx-auto flex flex-col sm:flex-row gap-3 sm:gap-8 justify-between min-h-20 px-8">

            <a href="/#home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="absolute w-40   md:relative md:top-4 md:left-1" alt="<?php bloginfo('name'); ?>" /></a>
        </nav>
    </header>


    <?php

    the_content();

    ?>
    <!-- <div class="flex gap-4">
	<div class="hidden sm:block">sm</div>
	<div class="hidden md:block">md</div>
	<div class="hidden lg:block">lg</div>
	<div class="hidden xl:block">xl</div>
</div> -->

    <footer class="py-16">
        <div class="max-w-screen-xl	mx-auto grid gap-8 grid-cols-1 md:grid-cols-5  px-16 text-center md:text-left text-[#001e5a]">
            <a href="/#home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="w-36 mx-auto md:mx-0" alt="<?php bloginfo('name'); ?>" /></a>
            <div>
                <h3 class="solway-bold text-sm uppercase">Contact</h3>
                <p class="solway-regular text-sm text-slate-200 ">
                    <a href="mailto:info@justdrinks.com.mt" class=" hover:underline text-white">info@justdrinks.com.mt</a>
                </p>
                <h3 class="solway-bold text-sm uppercase mt-4">Distributed by</h3>
                <p class="solway-regular text-sm text-slate-200 ">
                    CassarCamilleri MSD Ltd
                </p>
                <h3 class="solway-bold text-sm uppercase mt-4">Follow Us</h3>
                <div class="mx-auto flex gap-4 mt-2 justify-center items-center md:justify-start">
                    <a class="border-white  w-8 aspect-square border-2 rounded-full flex justify-center items-center hover:bg-blue-800" href="https://www.facebook.com/justbeverage/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook" width="18" height=" 18" />
                    </a>
                    <a class="border-white  w-8 aspect-square border-2 rounded-full flex justify-center items-center hover:bg-fuchsia-800" href="https://www.instagram.com/justsquashes.milkmixers/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram" width="18" height=" 18" />
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>