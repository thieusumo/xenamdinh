<template>
    <li>
        <div class="comment-main-level row">
          <!-- Avatar -->
          <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
          <!-- Contenedor del Comentario -->
          <div class="comment-box row">
            <div class="comment-head">
              <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
              <span>hace 20 minutos</span>
              <i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
            </div>
          </div>
        </div>
        <!-- Respuestas de los comentarios -->
        <ul class="comments-list reply-list ">
          <li>
            <!-- Avatar -->
            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box row">
              <div class="comment-head">
                <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                <span>hace 10 minutos</span>
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </li>

          <li>
            <!-- Avatar -->
            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box row">
              <div class="comment-head">
                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                <span>hace 10 minutos</span>
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </li>
        </ul>
      </li>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>