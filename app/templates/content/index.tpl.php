<section id="image_container"></section>
<section id="services_container">

    <?php foreach ($data['services'] as $service): ?>

        <article class="service_container">
            <img class="service_image" src="<?php print $service['service_image']; ?>" alt="">
            <div class="">
                <h3 class="service_name"><?php print $service['service_name']; ?></h3>
                <p class="service_description"><?php print $service['service_description']; ?></p>
            </div>
        </article>

    <?php endforeach; ?>

</section>
<div class="iframe_container">
    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sauletekio%20al.%2015%20,%20Vilnius+(My%20Busisness%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
    </iframe>
</div>


