<?php
$services = [
    [
        "service_name" => "Sporto įranga",
        "service_image" => "https://image.freepik.com/free-vector/sporty-man-doing-ring-dips-exercises-with-gymnastic-rings-guy-training-gym-cardio-crossfit-workout-healthy-lifestyle-concept-white-background-full-length_48369-26825.jpg",
        "service_description" => "Įvairi sporto įranga sportuojantiems klubo lankytojams"
    ],
    [
        "service_name" => "Treniruotes",
        "service_image" => "https://image.freepik.com/free-vector/women-working-out_18591-46304.jpg",
        "service_description" => "Įvairios sporto treniruotes sportuojantiems"
    ],
    [
        "service_name" => "Treniruotes lauke",
        "service_image" => "https://image.freepik.com/free-vector/couple-working-out_18591-46305.jpg",
        "service_description" => "Įvairios sporto treniruotes sportuojantiems lauke"
    ],
]
?>

<section id="image_container"></section>
<section id="services_container">

    <?php foreach ($services as $service): ?>

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


