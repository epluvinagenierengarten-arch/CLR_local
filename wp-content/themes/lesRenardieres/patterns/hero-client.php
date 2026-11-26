<?php
/**
 * Title: Section test
 * Slug: patterns/hero-client
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {
        "metadata": {
            "name": "titre-hero",
            "bindings": {
                "content": {
                    "source": "core/pattern-overrides"
                }
            }
        }
    } -->
    <h2 class="wp-block-heading">Titre d'origine modifiable</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {
        "metadata": {
            "name": "texte-hero",
            "bindings": {
                "content": {
                    "source": "core/pattern-overrides"
                }
            }
        }
    } -->
    <p>Texte par défaut que le client va écraser.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
