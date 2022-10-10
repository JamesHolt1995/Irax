<?php

/**
 * front-page
 *
 *
 * @package irax_2022
 */

get_header();
while (have_posts()) : the_post();
    /* grab the url for the full size featured image */
    $img_url = get_template_directory_uri() . '/assets/img/background.svg';
?>

    <main id="primary" class="site-main homepage" style="min-height: 200vh;">

        <section class="hero hero--dark" style="background-image: url(<?php echo $img_url ?>);">
            <div class="grid">
                <div class="hero__content hero__content--light">
                    <div id="typed-strings">

                        <h1>
                            Creating technology solutions to<span style="color:var(--bright);"> bring your ideas to life</span>
                        </h1>

                        <h1>Creating technology solutions to<span style="color:var(--bright);"> keep you secure</span></h1>

                        <h1>Creating technology solutions to <span style="color:var(--bright);"> solve your IT headaches</span></h1>

                    </div>
                    <h2 class="hero__title hero__title--typed leading--tight">
                        <span id="typed"></span>
                        <span class="typed-height" style="visibility:hidden;">Creating technology solutions <span style="color:#ffffff;">to solve your IT headaches</span></span>
                    </h2>
                    <p class="hero__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <div class="hero__links"><a class="button button--bright">See our services</a>
                        <a class="plain-link">Contact us</a>
                    </div>
                </div>
                <!-- <img class="hero__img" src="<?php echo $featured_img_url ?>" alt="typing on a laptop"> -->
            </div><!-- /grid -->
        </section>

        <section class="cards">
            <div class="grid">
                <div class="cards__card">
                    <h2 class="cards__title">Creative technology and system design </h2>
                    <p class="cards__text">We’ve been asked make technical ideas come to life many times. Sometimes that’s been a massive task and required us to find innovative ways to make it happen, we’re also pretty good with building secure systems.</p>
                </div>
                <div class="cards__card">
                    <h2 class="cards__title">Programming, websites and internet </h2>
                    <p class="cards__text">We make things work using a lot of opensource technology, Linux and amazon AWS. More recently we’ve been using django to create webs services and we also write software that passes the stringent PCI/DSS level 1 audit. Have a look at our technology section for a more in depth explanation.</p>
                </div>
                <div class="cards__card">
                    <h2 class="cards__title">Security, Firewalls and VPNs </h2>
                    <p class="cards__text">Every location needs to be secure. The internet is full of people trying to get onto your systems. Maybe you need a VPN between your sites or perhaps you want multiple web services on one IP address. Is getting your home workers up and running an issue?</p>
                </div>
            </div>
        </section>

        <section class="layout--space-top">
            <div class="grid">
                <div class="grid__half">
                    <h2>Networks, VPNs and Firewalls</h2>
                    <p class="layout--space-bottom ">For many people, the idea of a vpn is something like Nord VPN, a subscription service, where your devices IP address hidden and the connection becomes more secure, useful when you’re in Costa Coffee and need to connect securely to the internet. But VPN technology can be used for so much more, It can enable you to connect two sites together over the internet so that they appear to be the same network. This is really useful, especially now that bandwidth is less of an issue so sharing data between sites becomes so much easier.
                        <br><br>
                        People are also working from home so much more than in the past, a secure connection to the office services, or maybe the VOIP phone system are now essential, PF sense can facilitate this, and can be very fast, especially with the emergence of new VPN technology such as wireguard.
                    </p>
                    <a class="button button--bright">Find out more</a>
                </div>

                <div class="grid__half">
                    <div class="contact">
                        <h2>Get in touch</h2>
                        <p>Send us an email, we're always happy to help no matter what your problem is.</p>
                        <?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]') ?>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<?php
endwhile;
get_footer();
