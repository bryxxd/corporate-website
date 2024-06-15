<?php
get_header();
wp_enqueue_script('service-script', get_template_directory_uri() . '/assets/js/views/service/script.js', array('jquery'), 1.1, true);

?>
<div class="container">
    <div class="hero">
        <h1 class="hero__heading">Contact</h1>
        <ul class="hero__topic-path">
            <li class="hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="hero__topic-path__li">
                <span>Contact</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <section class="p-contact">
        <figure class="c-figure">
            <img class="c-figure__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/views/contact/pc/img-figure.jpg" width="100%" height="700px" alt="Service Figure">
        </figure>
        <div class="container">
            <div class="p-contact__inner">
                <form action="#" method="POST">
                    <table class="p-contact__table">
                        <tbody class="p-contact__table__tbody">
                            <tr class="p-contact__table__tbody__tr">
                                <th class="p-contact__table__tbody__tr__th">Name</th>
                                <td class="p-contact__table__tbody__tr__td">
                                    <input type="text" name="name" class="p-contact__table__tbody__tr__td__input">
                                </td>
                            </tr>
                            <tr class="p-contact__table__tbody__tr">
                                <th class="p-contact__table__tbody__tr__th">Email</th>
                                <td class="p-contact__table__tbody__tr__td">
                                    <input type="email" name="email" class="p-contact__table__tbody__tr__td__input">
                                </td>
                            </tr>
                            <tr class="p-contact__table__tbody__tr">
                                <th class="p-contact__table__tbody__tr__th">Contact Number</th>
                                <td class="p-contact__table__tbody__tr__td">
                                    <input type="number" name="number" class="p-contact__table__tbody__tr__td__input">
                                </td>
                            </tr>
                            <tr class="p-contact__table__tbody__tr">
                                <th class="p-contact__table__tbody__tr__th">Message</th>
                                <td class="p-contact__table__tbody__tr__td">
                                    <textarea name="message" class="p-contact__table__tbody__tr__td__textarea"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="p-contact__privacy">
                        <label for="privacy">
                            <input class="p-contact__privacy__checkbox" type="checkbox" name="privacy" id="privacy">
                            <span class="p-contact__privacy__checkmark"></span>
                            I agree to <a href="#">privacy policy</a> 
                        </label>
                    </div>
                    <div class="p-contact__send">
                        <button class="button">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>




</main>
<?php get_footer(); ?>