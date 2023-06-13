<section class="mt-24">
    <div class="grid bg-cover bg-center" style="background-image: url('<?php block_field( 'background-image' ); ?>');">
        <div class="py-8" style="background: rgba(255,255,255,0.7)">
            <div class="mx-auto max-w-prose px-4 md:px-0">
                <h2 class="text-center text-3xl font-semibold"><?php block_field( 'title' ); ?></h2>
                <div class="text-center mt-4"><?php block_field( 'text' ); ?></div>
                <div class="flex justify-center gap-4 mt-8">
                    <a href="<?php block_field( 'button-link' ); ?>" class="btn btn-primary"><?php block_field( 'button-title' ); ?></a>
                </div>
                <div class="text-center mt-4"><?php block_field( 'extra-text' ); ?></div>
            </div>
        </div>
    </div>
</section>