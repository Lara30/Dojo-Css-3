<?php include("header.html"); ?>

<h1> SHOP CITY </h1>

        <section class="json">
            <input id="lecture" type="button" value="SHOW LIST">
       <ul id="zone">


          </ul>

          <script>


          $.getJSON('list.json',function(data){

            $.each(data,function(index,d){

              $('#zone').append('<li><b>' + d.name + ' </b>: ' + d.city + '</li>' );

           });
         });
              $('#zone').hide()

                $('#lecture').on('click', function(){
                  $(this).toggleClass('active');
                  $('#zone').slideToggle(400);
                       });


                       function centrerElementAbsolu(element)
             {
             	var largeur_fenetre = $(window).width();
             	var hauteur_fenetre = $(window).height();

             	var haut = (hauteur_fenetre - element.height()) / 2 + $(window).scrollTop();
             	var gauche = (largeur_fenetre - element.width()) / 2 + $(window).scrollLeft();
             	element.css({position: 'absolute', top: haut, left: gauche});
             }



          </script>
        </section>
      <?php include("footer.html"); ?>
