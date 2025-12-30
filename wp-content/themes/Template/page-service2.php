<?php
get_header();
?>
<div class="container">
    <div class="c-hero">
        <h1 class="c-hero__heading">Service 2</h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/service') ?>">Service</a>
            </li>
            <li class="c-hero__topic-path__li">
                <span>Service 2</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <section class="p-service">
        <figure class="c-figure">
            <img class="c-figure__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/service2/img-service-figure1.jpg" width="100%" height="700px" alt="Service Figure">
        </figure>

        <div class="container">
            <div class="p-service__content">
                <h2 class="p-service__content__heading">Lorem Ipsum</h2>
                <div class="p-service__content__context">
                    <img class="p-service__content__context__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/service2/img-context.jpg" alt="Image">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus amet ex minus assumenda. Eum
                    dolorum optio quia quam cum expedita, inventore eaque nam sequi voluptates reprehenderit, nihil,
                    iure quis iste!
                    <br>
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <br>
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <br>
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <br>
                    <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="p-service__content__back">
                    <a class="c-button" href="<?php echo home_url('/service/') ?>">Back</a>
                </div>
            </div>
        </div>

    </section>



    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>