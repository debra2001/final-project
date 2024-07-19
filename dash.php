<?php
session_start(); // Start the session

// Assume you have a variable or session that stores the username
$username = $_SESSION['firstname']; // Replace with your actual username variable or session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php


include_once __DIR__.'/sidebar.php';
include_once __DIR__.'/partials/nav.php';
?>  

    <!-- Main bar -->
    


<div class="container main-bar p-3">
    <h2 class="text-center">Welcome, <?php echo $username;?>!</h2>
</div>  
    
    

   
    <div class="one">
        <p class="text-center services">Popular services</p>
    
    </p>
    </div>

<div class="cardssection container w-80">
    <div class="card shadow w-25 my-4 h-50">
        <div class="image">
        <img src="img/social-2x.webp" alt="" class="card-img-top">
    </div>
        <div class="card-body" >
            <h5 class="card-title">property search</h5>
            <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                 such as location, price range, property type, and amenities.</p>
            <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
        </div>

    </div>
   <div class="card shadow w-25 my-4 h-50">
    <div class="image">
    <img src="img/seo-2x.webp" alt="" class="card-img-top">
</div>
        <div class="card-body" >
            <h5 class="card-title">Relocation services</h5>
            <p class="card-text"> we carter to individuals or families  that are looking  torelocate and provide sources and services relaed to moving storage ,utilities and other relocation services.</p>
            <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
   </div>
   </div>
   <div class="card shadow w-25 my-4  h-25" >
    <div class="image">
            <img src="img/illustration-2x.webp" alt="" class="card-img-top h-25 ">
        </div>
                <div class="card-body" >
                    <h5 class="card-title">property valuation</h5>
                    <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                         such as location, price range, property type, and amenities.</p>
                    <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
   </div>
   </div>
   <div class="card shadow w-25 h-50">
    <div class="image">
                <div class="image">
                    <img src="img/voice-over-2x.webp" alt="" class="card-img-top h-25">
                </div>
                        <div class="card-body" >
                            <h5 class="card-title">mortgage</h5>
                            <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                 such as location, price range, property type, and amenities.</p>
                            <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>
    </div>
</div>
    <div class="card shadow w-25 h-50">
        <div class="image">
                            <img src="img/translation-2x.webp" alt="" class="card-img-top ">
                        </div>
                            <div class="card-body" >
                                    <h5 class="card-title">market trends</h5>
                                    <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                         such as location, price range, property type, and amenities.</p>
                                    <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>
    </div>
    <div class="card shadow w-25 h-50">
        <div class="image">
                            <img src="img/social-2x.webp" alt="" class="card-img-top ">
                        </div>
                            <div class="card-body" >
                                    <h5 class="card-title">market trends</h5>
                                    <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                         such as location, price range, property type, and amenities.</p>
                                    <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>
    </div> <div class="card shadow w-25 h-50">
        <div class="image">
                            <img src="img/translation-2x.webp" alt="" class="card-img-top ">
                        </div>
                            <div class="card-body" >
                                    <h5 class="card-title">market trends</h5>
                                    <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                         such as location, price range, property type, and amenities.</p>
                                    <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>
    </div> <div class="card shadow w-25 h-50">
        <div class="image">
                            <img src="img/data-entry-2x.webp" alt="" class="card-img-top ">
                        </div>
                            <div class="card-body" >
                                    <h5 class="card-title">market trends</h5>
                                    <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                         such as location, price range, property type, and amenities.</p>
                                    <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>
    </div>
    <div class="card shadow w-25  h-40">
        <div class="image">
     <img src="img/logo-design-2x.webp" alt="" class="card-img-top">
    </div>

         <div class="card-body" >
         <h5 class="card-title">agent and broker services</h5>
         <p class="card-text"> offer a search function that allows users to browse and filter listings based on their preferences,
                                                 such as location, price range, property type, and amenities.</p>
        <a href="#" class="btn btn-dark d-flex justify-content-center">learn more</a>
    </div>                                                
     
   </div>
   </div>


</div> 
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.one{
    /* display: flex; */
    /* justify-content: center; */
    font-family: ;
}
.services{
    /* font-family: 'Arial Narrow', Arial, sans-serif; */
    font-size: 2.9em;
    font-style: italic;
    margin-right: 4em;
    font-weight: 400;
}
.shadow{ 
    /* hii ya kueka blur effect kwenye card  */
    box-shadow: 5px 5px 2px 6px rgba(0,0,0,1);
}
.cardssection{
    /* width: 70%; */
    display: flex;
    margin-left: 15em;
    /* na lazima uwe ume tumia kwanza display flex */
    /* hio apo chini imetumika kuzisection /kuwrap izo cards into a group of three three  */
    flex-wrap: wrap;
     /*hio gap ndo inasaidia kuforce/kuongeza space ili zikae in three three u cant use wrap without gap   */
    gap: 10px;
    justify-content: center;
    


}
.card-body{
    /* width: 100%; */
}
/* hii class apo chini ya bootstrap lzm uichukue yote km ilivyo ukiona tu icho ki hyphen ujue nikitu kimoja ila ikiwa ina space ni vitu viwili tofauti */
.card-img-top:hover{
    /* u should hover the class ofthe image ut self and not the entire card div alaf unaeka scale ni lazima na io value ya scale pia nmesaau kazi yake */
transform: scale(1.1);
/* apo chini una andka kwanza the property to be transitioned in this case ni transform alf unekea mda for the transition to take place  */
transition:transform .25s ;
}
.image{
    /* hii inasaidia ku picha i hoveke ndani ya border isitoke nje ya border .this is the only line of code used to do hat specificly and u have to make sure it is in the class of the image to be styled noton the general div*/
    overflow:hidden;
}


</style>

    <!-- Footer -->
<?php #include_once __DIR__.'/partials/footer.php'; ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>