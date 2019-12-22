<?php

namespace app\views;

class FirebaseRedirectView extends AbstractView {
    public function loadPage() {
        $this->core->getOutput()->renderTwigOutput("FirebaseredRedirect.twig", [
        ]);
    }
}
