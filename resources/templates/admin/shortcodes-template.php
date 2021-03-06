<h3><?php _e('The following shortcodes are made available by the JUSTIMMO API Plugin:', 'jiwp'); ?></h3>

<ul class="ji-shortcode-list">
    <li class="ji-shortcode-list__item">
        <details>
            <summary>
                <label class="ji-label">
                    <?php _e('The realty listing shortcode:', 'jiwp'); ?>
                </label>
                <code>[ji_realty_list]</code>
            </summary>

            <p><?php _e('Paste this shortcode in any page, post or sidebar text widget to output a list of your available realties.', 'jiwp'); ?></p>

            <p><?php _e('It has the following options which you can pass as parameters:', 'jiwp'); ?></p>

            <ul class="ji-shortcode-options">
                <li class="ji-shortcode-option">
                    <code>max_per_page</code>: <?php _e('Limits the number of realties displayed per page.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list max_per_page=5]</code> <?php _e('shows 5 realties per page.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>rent</code>: <?php _e('Lists only realties up for rent.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list rent="1"]</code>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>buy</code>: <?php _e('Lists only realties up for purchase.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list buy="1"]</code>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>type</code>: <?php _e('Lists only realties of certain type. <a href="http://api-docs.justimmo.at/reference/realty-types.html" target="_blank">Available values here</a>. `ID` value must be used.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list type="2"]</code> <?php _e('shows only apartments.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>category</code>: <?php _e('Lists only realties in certain category. Use JUSTIMMO category names.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            category="MyCategory1,MyCategory2"]</code> <?php _e('Shows only realties in "MyCategory1" and "MyCategory2" categories.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>zip</code>: <?php _e('Lists only realties with certain zipcode / zipcodes.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list zip="123,456"]</code> <?php _e('Shows only realties with 123 or 456 zipcodes', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>country</code>: <?php _e('Lists only realties from a specific country. The country is specified using it\'s JUSTIMMO id.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            country="17"]</code> <?php _e('Shows realties from the country with the id = 17.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>exclude_country_id</code>: <?php _e('Lists only realties outside of a country. The country is excluded using it\'s JUSTIMMO id.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            exclude_country_id="17"]</code> <?php _e('Shows realties from outside the country with the id = 17.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>format</code>: <?php _e('Formats realty list in grid format.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list format="grid"]</code> <?php _e('Shows realties in grid format.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>price_min</code>: <?php _e('Sets a minimum price (in euro).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list price_min="100"]</code> <?php _e('Show realties with a minimum price of 100 euro.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>price_max</code>: <?php _e('Sets a maximum price (in euro).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list price_max="100"]</code> <?php _e('Show realties with a maximum price of 100 euro.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>rooms_min</code>: <?php _e('Sets a minimum number of rooms.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list rooms_min="3"]</code> <?php _e('Shows realties with a minimum of 3 rooms.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>rooms_max</code>: <?php _e('Sets a maximum number of rooms.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list rooms_max="3"]</code> <?php _e('Shows realties with a maximum of 3 rooms.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>surface_min</code>: <?php _e('Sets a minimum surface area (m&sup2;).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            surface_min="100"]</code> <?php _e('Shows realties with a minimum surface area of 100 m&sup2;', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>surface_max</code>: <?php _e('Sets a maximum surface area (m&sup2;).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            surface_max=""]</code> <?php _e('Shows realties with a maximum surface area of 100 m&sup2;', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>garden</code>: <?php _e('Lists only realties that have a garden.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list garden="1"]</code>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>garage</code>: <?php _e('Lists only realties that have a garage.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list garage="1"]</code>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>balcony_terrace</code>: <?php _e('Lists only realties that have a balcony/terrace.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list balcony_terrace="1"]</code>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>occupancy</code>: <?php _e('Lists only realties having certain \'occupancy\' status. Available values: \'wohnen\', \'gewerbe\', \'anlage\'', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            occupancy="wohnen"]</code> <?php _e('Shows only realties with \'wohnen\' occupancy status.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>price_order</code>: <?php _e('Orders realties by price. Available values: "asc" (ascending), "desc" (descending).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list price_order="desc"]</code> <?php _e('Shows realties in descending price order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>created_at_order</code>: <?php _e('Orders realties by created at date. Available values: "asc" (ascending), "desc" (descending).', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            created_at_order="desc"]</code> <?php _e('Shows realties in descending created at date order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>updated_at_order</code>: <?php _e('Orders realties by update at date. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            updated_at_order="desc"]</code> <?php _e('Shows realties in descending update at date order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>surface_area_order</code>: <?php _e('Orders realties by surface area. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            surface_area_order="desc"]</code> <?php _e('Shows realties in descending surface area order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>living_area_order</code>: <?php _e('Orders realties by living area. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list
                            living_area_order="desc"]</code> <?php _e('Shows realties in descending living area order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>floor_area_order</code>: <?php _e('Orders realties by floor area. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list floor_area_order="desc"]</code> <?php _e('Shows realties in descending floor area order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>number_order</code>: <?php _e('Orders realties by realty number. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list number_order="desc"]</code> <?php _e('Shows realties in descending realty number order.', 'jiwp'); ?>
                    </p>
                </li>

                <li class="ji-shortcode-option">
                    <code>zip_order</code>: <?php _e('Orders realties by zip code order. Available values: "asc" (ascending), "desc" (descending).',
                        'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_realty_list zip_order="desc"]</code> <?php _e('Shows realties in descending zip code order order.', 'jiwp'); ?>
                    </p>
                </li>
            </ul>

            <p><?php _e('(Note: you cannot combine multiple ordering attributes. Only the last one will be used)', 'jiwp'); ?></p>
        </details>
    </li>

    <li class="ji-shortcode-list__item">
        <details>
            <summary>
                <label class="ji-label">
                    <?php _e('The search form shortcode:', 'jiwp'); ?>
                </label>
                <code>[ji_search_form]</code>
            </summary>

            <p><?php _e('Paste this shortcode in any page, post or sidebar tText widget to output a realty search form. This can also be achieved by using the "JUSTIMMO Search Form" widget.', 'jiwp'); ?></p>
        </details>
    </li>

    <li class="ji-shortcode-list__item">
        <details>
            <summary>
                <label class="ji-label">
                    <?php _e('The realty number search form shortcode:', 'jiwp'); ?>
                </label>
                <code>[ji_number_search_form]</code>
            </summary>
        </details>
    </li>

    <li class="ji-shortcode-list__item">
        <details>
            <summary>
                <label class="ji-label">
                    <?php _e('The project listing shortcode:', 'jiwp'); ?>
                </label>
                <code>[ji_project_list]</code>
            </summary>

            <p><?php _e('Paste this shortcode in any page, post or sidebar text widget to output a list of your available projects.', 'jiwp'); ?></p>

            <p><?php _e('It has the following options which you can pass as parameters:', 'jiwp'); ?></p>

            <ul class="ji-shortcode-options">
                <li class="ji-shortcode-option">
                    <code>max_per_page</code>: <?php _e('Limits the number of projects displayed per page.', 'jiwp'); ?>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_project_list max_per_page=5]</code> <?php _e('Shows 5 projects per page.', 'jiwp'); ?>
                    </p>
                </li>
            </ul>
        </details>
    </li>

    <li class="ji-shortcode-list__item">
        <details>
            <summary>
                <label class="ji-label">
                    <?php _e('The project information shortcode:', 'jiwp'); ?>
                </label>
                <code>[ji_project_info]</code>
            </summary>

            <p><?php _e('Paste this shortcode in any page, post or sidebar text widget to output various project information.', 'jiwp'); ?></p>

            <p><?php _e('It has the following options which you can pass as parameters:', 'jiwp'); ?></p>

            <ul class="ji-shortcode-options">
                <li class="ji-shortcode-option">
                    <code>id</code>: <?php _e('The project JUSTIMMO ID (mandatory).', 'jiwp'); ?>
                    <a class="featherlight-gallery" href="#"
                       data-featherlight="<?php echo JI_WP_PLUGIN_RESOURCES_URL ?>/img/justimmo-project-id.png"><?php _e('show image', 'jiwp'); ?></a>
                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_project_info id="5"]</code> <?php _e('Shows information belonging to the project with the JUSTIMMO ID of 5.', 'jiwp'); ?>
                    </p>
                </li>
                <li class="ji-shortcode-option">
                    <code>info</code>: <?php _e('The project information to be shown (mandatory).', 'jiwp'); ?>

                    <p>
                        <?php _e('Example:', 'jiwp'); ?>
                        <code>[ji_project_info id="5" info="address"]</code> <?php _e('Shows project address information belonging to the project with the JUSTIMMO ID of 5.', 'jiwp'); ?>
                    </p>

                    <p>
                        <?php _e('Here is a list of all the values available for the "info" option:', 'jiwp'); ?>
                    </p>
                    <ul class="ji-shortcode-options">
                        <li class="ji-shortcode-option"><code>contact</code></li>
                        <li class="ji-shortcode-option"><code>description</code></li>
                        <li class="ji-shortcode-option"><code>other-info</code></li>
                        <li class="ji-shortcode-option"><code>photo-gallery</code></li>
                        <li class="ji-shortcode-option"><code>realties</code></li>
                    </ul>
                </li>
            </ul>
        </details>
    </li>
</ul>