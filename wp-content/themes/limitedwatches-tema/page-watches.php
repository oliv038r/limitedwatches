<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <?php astra_primary_content_top(); ?>

            <?php astra_content_page_loop(); ?>

                <?php astra_primary_content_bottom(); ?>


                    <!-- #primary -->

                    <head>
                        <meta name="description" content="Dette er en eksamensopgave for Limited Watches">
                    </head>
                    <main>
                        <div class="dropdown">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/filter_btn.png" />
                            <div class="dropdown-content">
                                <h3 class="dropdown_title"> Sortér ud fra</h3>
                                <nav id="filtrering"></nav>
                            </div>
                        </div>
                        <section id="liste" class="watchcontainer"></section>
                    </main>
                    <template>
                        <article class="watches">
                            <img class="background-img" src="#" alt=" ">
                            <h2 class="title"></h2>
                            <h3 class="tagline"></h3>
                            <button class="discover_btn">
                                Se detaljer
                            </button>
                            <div class="scrolldown"></div>
                        </article>
                    </template>
                    <script>
                        const header = document.querySelector("header h1");
                        let watches;
                        let categories;
                        let filterWatch = "alle";
                        const dbUrl = "http://hanert.dk/limitedwatches/wp-json/wp/v2/watch?per_page=100";
                        const catUrl = "http://hanert.dk/limitedwatches/wp-json/wp/v2/categories";
                        async function getJson() {
                            const data = await fetch(dbUrl);
                            const catdata = await fetch(catUrl);
                            watches = await data.json();
                            categories = await catdata.json();
                            console.log(watches);
                            console.log(categories);
                            visWatches();
                            opretKnapper();
                        }

                        function opretKnapper() {
                            categories.forEach(cat => {
                                if (cat.name == "Alle ") {
                                    document.querySelector("#filtrering").innerHTML += `<button class="filter active" data-watch="${cat.id} ">${cat.name}</button>`
                                } else {
                                    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-watch="${cat.id} ">${cat.name}</button>`
                                }
                            })
                            addEventListenersToButtons();
                        }

                        function addEventListenersToButtons() {
                            document.querySelectorAll("#filtrering button").forEach(elm => {
                                elm.addEventListener("click", filtrering);
                            })
                        };

                        function filtrering() {
                            document.querySelectorAll("#filtrering button").forEach(elm => {
                                elm.classList.remove("active")
                            });
                            filterWatch = this.dataset.watch;
                            console.log(filterWatch);
                            visWatches();
                            header.textContent = this.textContent;
                            this.classList.add("active");
                        }

                        function visWatches() {
                            let temp = document.querySelector("template");
                            let container = document.querySelector(".watchcontainer")
                            container.innerHTML = " ";
                            watches.forEach(watch => {
                                if (filterWatch == "alle" || watch.categories.includes(parseInt(filterWatch))) {
                                    let klon = temp.cloneNode(true).content;
                                    klon.querySelector("h2").textContent = watch.title.rendered;
                                    klon.querySelector(".tagline").textContent = watch.tagline;
                                    klon.querySelector(".background-img").src = watch.picture.guid;
                                    klon.querySelector("article").addEventListener("click", () => {
                                        location.href = watch.link;
                                    })
                                    container.appendChild(klon);
                                }
                            })
                        }
                        getJson();

                    </script>


    </div>

    <?php get_footer(); ?>
