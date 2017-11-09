@extends('layouts.front')

  @section('content')

  <div class="">PREGUNTAS FRECUENTES</div>





  <section class="acordin-body">


            <div class="acordin-title" data-q="1">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="1"></span>
    				<span class="ion-android-arrow-down" pos="1"></span>
    			¿?</a></h2>
            </div>
            <div class="answer" data-a="1">
                <p> RTA1 </p>
            </div>
        </section>

        <section class="acordin-body">
            <div class="acordin-title" data-q="2">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="2"></span>
                    <span class="ion-android-arrow-down" pos="2"></span>
                ¿?</a></h2>
            </div>
            <div class="answer" data-a="2">
                <p> RTA2 </p>
            </div>
        </section>

        <section class="acordin-body">
            <div class="acordin-title" data-q="3">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="3"></span>
                    <span class="ion-android-arrow-down" pos="3"></span>
                ¿?</a></h2>
            </div>
            <div class="answer" data-a="3">
                <p> RTA3 </p>
            </div>
        </section>

        <section class="acordin-body">
            <div class="acordin-title" data-q="4">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="4"></span>
                    <span class="ion-android-arrow-down" pos="4"></span>
                ¿?</span></h2>
            </div>
            <div class="answer" data-a="4">
                <p> RTA4 </p>
            </div>
        </section>

        <section class="acordin-body">
            <div class="acordin-title" data-q="5">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="5"></span>
                    <span class="ion-android-arrow-down" pos="5"></span>
                ¿?</a></h2>
            </div>
            <div class="answer" data-a="5">
                <p>RTA5</p>
            </div>
        </section>

        <section class="acordin-body">
            <div class="acordin-title" data-q="6">
                <h2><span class="toggle-question">
                    <span class="ion-android-arrow-forward" pos="6"></span>
                    <span class="ion-android-arrow-down" pos="6"></span>
                ¿?</a></h2>
            </div>
            <div class="answer" data-a="6">
                <p> RTA6 </p>
            </div>
        </section>

      <!-- SCRIPT -->
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script>
          $('.acordin-title').click(function() {
              var identify = $(this).attr("data-q");
              $('.answer[data-a=' + identify + ']').slideToggle();
              $('.ion-android-arrow-forward[pos=' + identify + ']').toggle();
              $('.ion-android-arrow-down[pos=' + identify + ']').toggle();
          })
      </script>




  @endsection
