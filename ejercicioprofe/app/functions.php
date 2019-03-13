<?php
function get_service_cards ($array) {
  foreach ($array as $key => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    echo '
      <article class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="card">
          <img class="card-img-top" src="'.$img.'">
          <div class="card-body">
            <h5 class="card-title">'.$title.'</h5>
            <p class="card-text">'.$text.'</p>
            <a href="'.$link.'" class="card-link">
              Más detalles
            </a>
          </div>
        </div>
      </article>
    ';
  }
}