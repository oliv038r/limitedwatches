<?php
get_header(); ?>




    <!--Content-->


    <main>

        <!-- <article class="radio" id="podcasts">
            <img src="" alt="" class="lydbolge">
            <img src="" alt="" class="billede_single">
            <h1 class="title"></h1>
            <p class="beskrivelse"></p>
        </article>-->
        <div class="splashcontainer-single">
            <article class="splash">
                <img class="background-img-single" src="#" alt=" ">

            </article>
        </div>
        <div class="watchcontainer_single">
            <div class="col_left">
                <button class="bk_btn">Gå tilbage til oversigten</button>
                <article class="watch">
                    <h3 class="tagline-single"></h3>
                    <h2 class="title-single"></h2>
                    <p class="the_story">Historien bag uret</p>
                    <p class="description-single"></p>
                    <p class="price"></p>
                    <hr class="line1">
                    <div class="detalje_container">
                        <div class="detalje_col">
                            <p class="detalje_title">Referencenummer</p>
                            <p class="ref"></p>
                            <p class="detalje_title">Produktionsår</p>
                            <p class="year"></p>
                            <p class="detalje_title">Størrelse</p>
                            <p class="size"></p>
                        </div>
                        <div class="detalje_col">
                            <p class="detalje_title">Type</p>
                            <p class="movement"></p>
                            <p class="detalje_title">Materiale</p>
                            <p class="crystal"></p>
                            <p class="detalje_title">Limited</p>
                            <p class="limited"></p>
                        </div>
                        <div class="detalje_col">
                            <p class="detalje_title">Box</p>
                            <p class="box"></p>
                            <p class="detalje_title">Papirer</p>
                            <p class="papers"></p>
                            <p class="detalje_title">Stand</p>
                            <p class="condition"></p>
                        </div>
                    </div>
                    <hr class="line1">
                </article>
            </div>
            <div class="col_right">
                <img class="product_img" src="#" alt="">
            </div>
        </div>

        <div class="contact">
            <div class="form">
                <p>Interesseret i dette ur?</p>
                <h4>Kontakt os</h4>
                <div class="group">
                    <input type="text" required>
                    <label>Dit navn</label>
                </div>
                <div class="group">
                    <input type="text" required>
                    <label>Din e-mail</label>
                </div>
                <a class="send-btn">Send</a>
            </div>
        </div>
    </main>


    <script>
        let watch;
        let valgtwatch = <?php echo get_the_ID() ?>;
        const dbUrl = "http://hanert.dk/limitedwatches/wp-json/wp/v2/watch/" + valgtwatch;

        async function getJson() {
            const data = await fetch(dbUrl);
            watch = await data.json();
            console.log(watch);
            visWatch();
        }

        function visWatch() {
            console.log("visWatch");
            console.log(watch.title.rendered);
            document.querySelector("h2").textContent = watch.title.rendered;
            document.querySelector(".tagline-single").textContent = watch.tagline;
            document.querySelector(".background-img-single").src = watch.picture.guid;
            document.querySelector(".product_img").src = watch.picture2.guid;
            document.querySelector(".description-single").textContent = watch.description;
            document.querySelector(".price").textContent = watch.price;
            document.querySelector(".ref").textContent = watch.ref;
            document.querySelector(".year").textContent = watch.year;
            document.querySelector(".size").textContent += `${watch.size} mm.`;
            document.querySelector(".movement").textContent = watch.movement;
            document.querySelector(".crystal").textContent = watch.crystal;
            document.querySelector(".limited").textContent = watch.limited;
            document.querySelector(".box").textContent = watch.box;
            document.querySelector(".papers").textContent = watch.papers;
            document.querySelector(".condition").textContent = watch.condition;
            document.querySelector(".bk_btn").addEventListener("click", tilbageTilListe);


        }

        getJson();
        /*Funktion der muliggør at gå tilbage til browserhistorikken*/
        function tilbageTilListe() {
            history.back();
        }

    </script>







    <?php get_footer(); ?>
