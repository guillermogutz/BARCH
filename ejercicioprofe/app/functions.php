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
function get_social_media ($array) {
  foreach ($array as $key => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    echo '
      <li>
        <a href="'.$url.'" target="_blank">
          <i class="fab fa-'.$name.'"></i>
        </a>
      </li>
    ';
  }
}
function get_clients ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    $last_element = count($array) - 1;
    if ($pos == 0 || $pos == $last_element) {
      $cols = 'col-12';
    } else {
      $cols = 'col-12 col-sm-6 col-lg-4';
    }
    echo '
      <div class="'.$cols.'">
        <div class="card bg-dark text-white border-0 rounded-0">
          <img src="'.$img.'" class="card-img" alt="'.$name.'">
          <div class="card-img-overlay">
            <h5 class="card-title">'.$name.'</h5>
            <p class="card-text">
              <small>'.$job.'</small>
              <br>
              <a href="#" data-toggle="modal" data-target="#'.$modal.'">Ver Proyecto</a>
            </p>
            <p class="card-text">
              <blockquote class="d-none d-md-block">'.$cite.'</blockquote>
            </p>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="'.$modal.'" tabindex="-1" role="dialog" aria-labelledby="'.$modal.'" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  <a href="'.$link.'" target="_blank">'.$title.'</a>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>' . $text . '</p>
                <img class="img-fluid" src="'.$layout.'" alt="'.$title.'">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
      </div>
    ';
  }
}
function get_workflow ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }
    if ($odd) {
      $text_align = 'text-lg-right';
      $order = '';
    } else {
      $text_align = '';
      $order = 'order-lg-1';
    }
    echo '
      <article class="row">
        <div class="col-12 col-lg-6 '.$text_align.' '.$order.'">
          <h2>' . $step . '</h2>
          <h3>' . $title . '</h3>
          <p>' . $text . '</p>
        </div>
        <div class="col-12 col-lg-6">
          <img class="img-fluid" src="' . $img . '" alt="' . $title . '">
        </div>
      </article>
    ';
  }
}