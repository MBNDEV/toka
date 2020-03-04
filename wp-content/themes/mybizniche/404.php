<?php get_header() ?>

<section id="sec-404" class="sec-404 section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-12">
                <div class="text-block">
                    <h1>404 ERROR PAGE</h1>

                    <p>
                        Sorry, the page you are looking for doesn’t exist or an other error occured.<br>
                        <a href="javascript:window.history.back()">Go back</a> or head over to <a href="<?php echo home_url() ?>"><?php echo home_url() ?></a> to choose a new direction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>