@extends('layouts/app')

@section('container')

 <section class="resume-section p-1 p-lg-5 d-flex d-column" id="calendario">
   
    
      <div id='calendar'></div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/calendario.js"></script>
    <script src='js/main.js'></script>
    <script src='js/locales-all.js'></script>
    <script src='js/theme-chooser.js'></script>
  </section>

  @endsection