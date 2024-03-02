<?php get_header(); ?>

<main class="main">
    <div class="p-index">
        <div class="p-index__hero">
            <img class="p-index__hero__img" src="https://dummyimage.com/1200x600/000/fff" alt="">
        </div>

        <section class="p-index__content">
            <div class="container">
                <div class="p-index__content__inner">
                    <div class="p-index__content__box1">
                        <h2 class="p-index__content__box1__title">ABOUT</h2>
                        <p class="p-index__content__box1__content">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Donec
                            commodo mauris sit amet eros efficitur, id dapibus dolor aliquam. Maecenas ut pharetra sem.
                            Sed
                            justo urna, maximus eget ex eu,
                            suscipit condimentum dolor. Ut quis ante interdum, pulvinar dui sed, pulvinar lorem.
                            Praesent
                            nisl
                            mauris, euismod a ultricies id, bibendum ut velit. Sed vehicula nunc id volutpat posuere.
                            Morbi
                            blandit sapien eu eleifend pretium. Nam ultricies ornare dui non feugiat. Ut cursus a enim
                            nec
                            ornare. Etiam aliquet sem risus, eu posuere velit maximus sed. Morbi at urna enim. Integer
                            consequat
                            consectetur metus sit amet viverra. Aenean finibus fringilla nisl, eget aliquet tortor
                            facilisis
                            nec.
                            <br>
                            <br>
                            Nam hendrerit metus non blandit convallis. Aliquam fermentum egestas velit, venenatis
                            pellentesque
                            nisl dictum non. Integer porttitor in est vitae facilisis. Nunc eros libero, tempus sit amet
                            tellus
                            ut, malesuada eleifend enim. Ut scelerisque interdum diam molestie euismod. Aliquam luctus
                            eros
                            at
                            gravida volutpat. Donec sem sapien, dictum nec scelerisque et, eleifend a leo. Aliquam odio
                            enim,
                            feugiat a sagittis vitae, gravida eget turpis. Morbi rutrum, nulla at tincidunt volutpat,
                            leo
                            purus
                            dapibus libero, eget lacinia tellus urna id quam. Curabitur ultricies nisl non ex varius,
                            vel
                            commodo velit dignissim. Cras sagittis mauris ac posuere tincidunt.
                            <br>
                            <br>
                            Quisque lorem elit, egestas quis nulla id, egestas efficitur dui. Curabitur condimentum
                            finibus
                            felis, ac cursus neque placerat eget. Vivamus in odio sed nisl pellentesque porttitor
                            dignissim
                            in
                            justo. Proin eu dolor accumsan, mollis erat quis, feugiat ligula. Fusce suscipit eu sapien
                            in
                            tristique. Sed rhoncus sem sed pellentesque vulputate. Sed aliquet ullamcorper dui, iaculis
                            condimentum augue blandit nec. Mauris quis neque dictum, accumsan libero vel, faucibus
                            sapien.
                            Nullam sed bibendum erat. Ut tincidunt augue augue, quis gravida turpis ultricies venenatis.
                            Fusce
                            scelerisque felis sit amet aliquam blandit. Suspendisse potenti. Donec ornare risus a enim
                            viverra,
                            vitae porta tortor varius. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra,
                            per
                            inceptos himenaeos. Mauris ut enim sit amet eros placerat posuere. Maecenas molestie neque
                            vel
                            elit
                            tincidunt luctus.
                        </p>
                    </div>

                    <div class="p-index__content__box2">
                        <div class="recent-post">

                        </div>
                        <h2 class="recent-post__title">Recent Posts</h2>
                        <ul class="recent-post__ul">
                            <?php
                            $theQuery = new WP_Query([
                                'post_type' => 'post',
                                'post_per_page' => 6,
                            ]);

                            while ($theQuery->have_posts()) : $theQuery->the_post();
                            ?>
                                <li class="recent-post__list">
                                    <a href="<?php the_permalink() ?>" class="recent-post__list__link"><?php the_title() ?></a>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>

            </div>
    </div>
    </section>
    </div>
</main>
<?php get_footer(); ?>