<section class="px-4">
    <div class="container max-w-prose mx-auto mt-8">
        <div class="flex justify-center gap-4 mt-8">
            <?php if( block_value( 'first-button-title' ) ) { ?>
                <a href="<?php block_field( 'first-button-link' ); ?>" class="btn btn-primary"><?php block_field( 'first-button-title' ); ?></a>
            <?php } ?>
            <?php if( block_value( 'second-button-title' ) ) { ?>
                <a href="<?php block_field( 'second-button-link' ); ?>" class="btn btn-primary"><?php block_field( 'second-button-title' ); ?></a>
            <?php } ?>
        </div>
    </div>
</section>